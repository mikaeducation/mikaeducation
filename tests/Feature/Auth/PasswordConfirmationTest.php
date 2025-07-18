<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PasswordConfirmationTest extends TestCase
{
    use RefreshDatabase;

    // public function test_confirm_password_screen_can_be_rendered(): void
    // {
    //     $user = User::factory()->create([
    //         'phone' => '081234567890',
    //         'email' => 'user1@example.com',
    //         'password' => bcrypt('password'),
    //     ]);

    //     // Buat profil terkait
    //     Profile::create([
    //         'phone' => $user->phone,
    //         'first_name' => 'Dewi',
    //         'last_name' => 'Lestari',
    //         'birth_place' => 'Bandung',
    //         'birth_date' => '1992-03-15',
    //         'address' => 'Jl. Dago Atas No. 99, Bandung',
    //         'gender' => 'Perempuan',
    //         'occupation' => 'Editor',
    //         'institution' => 'Penerbit Kreatif',
    //         'institutionCity' => 'Bandung',
    //         'skill' => 'Menulis, Editing',
    //         'experience' => '5+ Tahun',
    //         'banner_image' => 'images/banner.jpg',
    //         'profile_image' => 'images/profile.jpg',
    //         'description' => 'Pecinta sastra dan editor konten kreatif.',
    //     ]);

    //     $response = $this->actingAs($user)->get('/confirm-password');

    //     $response->assertStatus(200);
    // }

    public function test_password_can_be_confirmed(): void
    {
        $user = User::factory()->create([
            'phone' => '081298765432',
            'email' => 'user2@example.com',
            'password' => bcrypt('password'),
        ]);

        Profile::create([
            'phone' => $user->phone,
            'first_name' => 'Rizky',
            'last_name' => 'Putra',
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

        $response = $this->actingAs($user)->post('/user/confirm-password', [
            'password' => 'password',
        ]);

        $response->assertRedirect();
        $response->assertSessionHasNoErrors();
    }

    public function test_password_is_not_confirmed_with_invalid_password(): void
    {
        $user = User::factory()->create([
            'phone' => '089912345678',
            'email' => 'user3@example.com',
            'password' => bcrypt('password'),
        ]);

        Profile::create([
            'phone' => $user->phone,
            'first_name' => 'Nina',
            'last_name' => 'Karina',
            'birth_place' => 'Semarang',
            'birth_date' => '1995-11-01',
            'address' => 'Jl. Pahlawan No. 45, Semarang',
            'gender' => 'Perempuan',
            'occupation' => 'Konselor',
            'institution' => 'Lembaga Psikologi Anak',
            'institutionCity' => 'Semarang',
            'skill' => 'Konseling dan Psikologi Anak',
            'experience' => '2 Tahun',
            'banner_image' => 'images/psychology-banner.jpg',
            'profile_image' => 'images/psychology-profile.jpg',
            'description' => 'Berpengalaman dalam pendekatan empatik pada anak-anak berkebutuhan khusus.',
        ]);

        $response = $this->actingAs($user)->post('/user/confirm-password', [
            'password' => 'wrong-password',
        ]);

        $response->assertSessionHasErrors();
    }
}
