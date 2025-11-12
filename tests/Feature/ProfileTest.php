<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use PHPUnit\Framework\Attributes\Test;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    use RefreshDatabase;

    // Tes ini sekarang seharusnya PASS setelah masalah Factory diperbaiki.
    public function test_profile_page_can_be_rendered_and_displayed(): void
    {
        $user = User::factory()->withProfile()->create();

        $response = $this
            ->actingAs($user)
            ->get('/profile');

        $response->assertOk(); 
    }

    public function test_user_can_view_register_profile_form()
    {
        $user = User::factory()->create(['email_verified_at' => now()]);
        $response = $this->actingAs($user)->get('/registerprofile');
        $response->assertStatus(200);
        $response->assertViewIs('register-profile');
    }


    public function test_email_verification_status_is_unchanged_when_email_is_unchanged(): void
    {
        $user = User::factory()->withProfile()->create();

        $response = $this
            ->actingAs($user)
            ->put('/profile/update', [
                'first_name' => 'Test',
                'last_name' => 'User',
                'email' => $user->email,
                'phone' => $user->phone,
                'birth_place' => 'Makassar',
                'birth_date' => '1993-07-20',
                'address' => 'Jl. Pettarani No. 11, Makassar',
                'gender' => 'Laki-laki',
                'occupation' => 'Desainer UI/UX',
                'institution' => 'Studio Desain Makassar',
                'institutionCity' => 'Makassar',
                'skill' => 'Desain Visual',
                'experience' => '3-4 Tahun',
                'banner_image' => 'images/uiux-banner.jpg',
                'profile_image' => 'images/uiux-profile.jpg',
                'description' => 'Desainer digital dengan fokus pada pengalaman pengguna.',
            ]);

        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect('/profile');

        $this->assertNotNull($user->refresh()->email_verified_at);
    }

    public function test_user_can_view_their_profile_page()
    {
        $user = User::factory()->create(['email_verified_at' => now()]);
        $profile = Profile::factory()->create(['phone' => $user->phone]);

        $response = $this->actingAs($user)->get('/profile');

        $response->assertStatus(200);
        $response->assertViewHas('profile');
        $response->assertViewHas('user');
    }

    public function test_user_can_update_their_profile()
    {
        $user = User::factory()->create(['email_verified_at' => now()]);
        $profile = Profile::factory()->create(['phone' => $user->phone]);

        $response = $this->actingAs($user)->put('/profile/update', [
            'first_name' => 'Andi',
            'last_name' => 'Wijaya',
            'birth_place' => 'Bandung',
            'birth_date' => '1992-05-12',
            'address' => 'Jl. Melati No. 5',
            'gender' => 'Laki-laki',
            'occupation' => 'Dosen',
            'institution' => 'ITB',
            'institutionCity' => 'Bandung',
        ]);

        $response->assertRedirect('/profile');
        $this->assertDatabaseHas('profiles', [
            'first_name' => 'Andi',
            'institution' => 'ITB',
        ]);
    }

    public function test_user_can_update_their_account_data()
    {
        $user = User::factory()->create([
            'email' => 'user@gmail.com',
            'phone' => '081234567890',
            'password' => Hash::make('oldpassword'),
        ]);

        $this->assertDatabaseHas('users', ['email' => 'user@gmail.com']);

        $response = $this->from('/account')->actingAs($user)->post('/account', [
            'email' => 'user@gmail.com', // tidak perlu diubah
            'phone' => '081234567891', // wajib diubah dan unik
            'current_password' => 'oldpassword',
            'new_password' => 'newpassword123',
            'new_password_confirmation' => 'newpassword123',
        ]);

        $response->assertRedirect('/account');
        $response->assertSessionHas('status', 'Informasi akun berhasil diperbarui.');

        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'email' => 'user@gmail.com',
            'phone' => '081234567891', // yang berubah
        ]);

        $updatedUser = User::find($user->id);
        $this->assertTrue(Hash::check('newpassword123', $updatedUser->password));
    }


    public function test_user_can_soft_delete_account_after_verification()
    {
        $user = User::factory()->create([
            'password' => Hash::make('password123'),
            'deletion_token' => $token = Str::uuid()->toString(),
            'deletion_token_expires_at' => Carbon::now()->addMinutes(60),
        ]);

        $response = $this->actingAs($user)->get("/verify-delete-account/{$token}");

        $response->assertRedirect('/login');
        $this->assertSoftDeleted('users', ['id' => $user->id]);
    }

    public function test_profile_update_validation_fails_on_invalid_email()
    {
        $user = User::factory()->create();

        $response = $this->from('/account')->actingAs($user)->post('/account', [
            'email' => 'not-an-email',
            'phone' => $user->phone,
        ]);

        $response->assertRedirect('/account');
        $response->assertSessionHasErrors(['email']);
    }
}