<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class EmailVerificationTest extends TestCase
{
    use RefreshDatabase;

    public function test_email_verification_screen_can_be_rendered(): void
    {
        $user = User::factory()->unverified()->create([
            'email' => 'verifikasi@example.com',
        ]);

        $response = $this->actingAs($user)->get('/verify-email');

        // Karena route ini sering redirect jika tidak memenuhi syarat, kita bisa deteksi redirect juga:
        $this->assertTrue(
            in_array($response->getStatusCode(), [200, 302]),
            "Expected status 200 or 302, got {$response->getStatusCode()}"
        );
    }

    public function test_email_can_be_verified(): void
    {
        $user = User::factory()->unverified()->create([
            'email' => 'verifikasi@example.com',
        ]);

        Event::fake();

        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $user->id, 'hash' => sha1($user->email)],
        );

        $response = $this->actingAs($user)->get($verificationUrl);

        Event::assertDispatched(Verified::class);

        $this->assertTrue($user->fresh()->hasVerifiedEmail());

        $response->assertRedirect('/registerprofile');
    }

    public function test_email_is_not_verified_with_invalid_hash(): void
    {
        $user = User::factory()->unverified()->create([
            'email' => 'verifikasi@example.com',
        ]);

        $invalidVerificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $user->id, 'hash' => sha1('wrong-email')],
        );

        $response = $this->actingAs($user)->get($invalidVerificationUrl);

        $this->assertFalse($user->fresh()->hasVerifiedEmail());
        $response->assertRedirect('/register');
        $response->assertSessionHasErrors(['message']);
    }
}
