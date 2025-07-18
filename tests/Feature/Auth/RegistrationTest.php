<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered(): void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_new_users_can_register(): void
    {
        // Ganti data yang dikirim agar sesuai dengan form registrasi dan tabel Anda
        $response = $this->post('/register', [
        'phone' => '081234567890',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
        'terms_accepted' => true,
    ]);

        $this->assertAuthenticated();
        
        // Asumsikan setelah registrasi, user diarahkan ke 'dashboard'
        // Ganti 'dashboard' jika nama route Anda berbeda
        $response->assertRedirect(route('auth.verify-email'));

        // Tambahkan validasi untuk memastikan data tersimpan di kedua tabel
        $this->assertDatabaseHas('users', [
            'email' => 'test@example.com',
            'phone' => '081234567890',
        ]);

        $this->assertDatabaseHas('profiles', [
            'first_name' => 'Test',
            'last_name' => 'User',
            'phone' => '081234567890',
        ]);
    }
}