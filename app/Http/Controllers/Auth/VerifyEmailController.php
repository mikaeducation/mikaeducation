<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\RedirectResponse;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerifyEmailController extends Controller
{
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        $userId = $request->route('id');
        $user = User::findOrFail($userId);

        // Verifikasi hash email
        if (! hash_equals((string) $request->route('hash'), sha1($user->getEmailForVerification()))) {
            abort(403, 'Link verifikasi tidak valid.');
        }

        // Kalau sudah diverifikasi sebelumnya
        if ($user->hasVerifiedEmail()) {
            return redirect('/login')->with('status', 'Email Anda sudah diverifikasi. Silakan login.');
        }

        // Tandai email sebagai diverifikasi
        $user->markEmailAsVerified();
        event(new Verified($user));

        // Login otomatis setelah verifikasi
        Auth::login($user);

        // Redirect langsung ke halaman pengisian biodata
        return redirect('/registerprofile')->with('status', 'Email berhasil diverifikasi! Silakan lengkapi biodata Anda.');
    }
}
