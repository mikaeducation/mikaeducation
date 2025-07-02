<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class PasswordUpdateTest extends TestCase
{
    use RefreshDatabase;

    public function test_password_can_be_updated(): void
    {
        $user = User::factory()->create([
            'phone' => '081200000004',
            'email' => 'rani@example.com',
            'password' => bcrypt('password'),
        ]);

        Profile::create([
            'phone' => $user->phone,
            'first_name' => 'Rani',
            'last_name' => 'Wijaya',
            'birth_place' => 'Malang',
            'birth_date' => '1992-03-10',
            'address' => 'Jl. Bandung No. 10, Malang',
            'gender' => 'Perempuan',
            'occupation' => 'Konselor Anak',
            'institution' => 'LKP Cita Anak',
            'institutionCity' => 'Malang',
            'skill' => 'Konseling, Empati',
            'experience' => '4 Tahun',
            'banner_image' => 'images/samplebg.jpg',
            'profile_image' => 'images/profile-sample.jpg',
            'description' => 'Konselor pendidikan anak dengan pendekatan visual learning.',
        ]);

        $response = $this
            ->actingAs($user)
            ->from('/profile')
            ->put('/password', [
                'current_password' => 'password',
                'password' => 'new-password',
                'password_confirmation' => 'new-password',
            ]);

        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect('/profile');

        $this->assertTrue(Hash::check('new-password', $user->refresh()->password));
    }

    public function test_correct_password_must_be_provided_to_update_password(): void
    {
        $user = User::factory()->create([
            'phone' => '081200000005',
            'email' => 'dimas@example.com',
            'password' => bcrypt('password'),
        ]);

        Profile::create([
            'phone' => $user->phone,
            'first_name' => 'Dimas',
            'last_name' => 'Prasetyo',
            'birth_place' => 'Makassar',
            'birth_date' => '1987-07-15',
            'address' => 'Jl. Pettarani No. 50, Makassar',
            'gender' => 'Laki-laki',
            'occupation' => 'Trainer',
            'institution' => 'Yayasan Anak Cerdas',
            'institutionCity' => 'Makassar',
            'skill' => 'Motivasi, Komunikasi Anak',
            'experience' => '8 Tahun',
            'banner_image' => 'images/samplebg.jpg',
            'profile_image' => 'images/profile-sample.jpg',
            'description' => 'Trainer yang membimbing anak berkebutuhan khusus melalui pelatihan kemandirian.',
        ]);

        $response = $this
            ->actingAs($user)
            ->from('/profile')
            ->put('/password', [
                'current_password' => 'wrong-password',
                'password' => 'new-password',
                'password_confirmation' => 'new-password',
            ]);

        $response
            ->assertSessionHasErrorsIn('updatePassword', 'current_password')
            ->assertRedirect('/profile');
    }
}