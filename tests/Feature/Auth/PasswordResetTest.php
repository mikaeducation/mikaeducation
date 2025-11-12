<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Tests\TestCase;
use App\Mail\ResetPasswordVerification;

class PasswordResetTest extends TestCase
{
    use RefreshDatabase;

    public function test_reset_password_link_can_be_requested(): void
    {
        Mail::fake();

        $user = User::factory()->create([
            'email' => 'resetme@example.com',
            'phone' => '08123456789',
        ]);

        $this->post('/forgot-password', ['phone' => $user->phone])
            ->assertSessionHasNoErrors()
            ->assertSessionHas('status');

        Mail::assertSent(ResetPasswordVerification::class, function ($mail) use ($user) {
            return $mail->hasTo($user->email);
        });
    }

    public function test_reset_password_screen_can_be_rendered(): void
    {
        // Simulasi pembuatan token manual sesuai controller
        $user = User::factory()->create([
            'email' => 'resetme2@example.com',
            'phone' => '08111111111',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->updateOrInsert(
            ['email' => $user->email],
            [
                'email' => $user->email,
                'token' => bcrypt($token),
                'created_at' => now(),
            ]
        );

        // Tes route redirect ke login (karena kamu tidak menampilkan view reset password)
        $response = $this->get(route('password.reset', [
            'token' => $token,
            'email' => $user->email,
        ]));

        $response->assertRedirect(route('login', [
            'token' => $token,
            'email' => $user->email,
        ]));
    }

    public function test_password_can_be_reset_with_valid_token(): void
    {
        $user = User::factory()->create([
            'email' => 'resetme3@example.com',
            'phone' => '08122222222',
            'password' => bcrypt('oldpassword'),
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $user->email,
            'token' => bcrypt($token),
            'created_at' => now(),
        ]);

        $response = $this->post('/reset-password', [
            'token' => $token,
            'email' => $user->email,
            'password' => 'newpassword',
            'password_confirmation' => 'newpassword',
        ]);

        $response->assertSessionHasNoErrors();
        $response->assertRedirect(route('login'));

        $this->assertCredentials([
            'email' => $user->email,
            'password' => 'newpassword',
        ]);
    }
}
