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

        // Pastikan email cocok (keamanan tambahan)
        if (! hash_equals((string) $request->route('hash'), sha1($user->getEmailForVerification()))) {
            abort(403, 'Link verifikasi tidak valid.');
        }

        // Cek apakah sudah diverifikasi
        if ($user->hasVerifiedEmail()) {
            return redirect('/login')->with('status', 'Email Anda sudah diverifikasi. Silakan login.');
        }

        // Tandai sebagai diverifikasi
        $user->markEmailAsVerified();
        event(new Verified($user));

        return redirect('/login')->with('status', 'Email berhasil diverifikasi! Silakan login.');
    }
}
