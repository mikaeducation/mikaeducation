<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    // Tes ini akan PASS setelah Solusi #1 diterapkan.
    public function test_login_screen_can_be_rendered(): void
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_users_can_authenticate_using_the_login_screen(): void
    {
        // Gunakan factory dengan state withProfile() untuk membuat user lengkap.
        // Pastikan user sudah terverifikasi emailnya dan profilnya sudah lengkap untuk tes login ini.
        $user = User::factory()->withProfile()->create([
            'is_profile_completed' => true, // Tandai profil sudah lengkap
        ]);

        // Lakukan login menggunakan 'phone' (sudah benar)
        $response = $this->post('/login', [
            'phone' => $user->phone,
            'password' => 'password',
        ]);

        // Pastikan user berhasil diautentikasi
        $this->assertAuthenticatedAs($user);

        // Sesuaikan redirect dengan logika controller Anda untuk login sukses
        // Controller Anda mengarahkan ke intended('/')
        $response->assertRedirect('/');
    }

    public function test_users_can_not_authenticate_with_invalid_password(): void
    {
        // Cukup buat user saja, tidak perlu profil untuk tes ini.
        $user = User::factory()->create();

        $this->post('/login', [
            'phone' => $user->phone,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }

    public function test_users_can_logout(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/logout');

        $this->assertGuest();
        $response->assertRedirect('/');
    }
}