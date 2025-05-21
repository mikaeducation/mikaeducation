<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Mail\ResetPasswordVerification;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required|string',
        ]);

        $user = User::where('phone', $request->phone)->first();

        if (!$user) {
            return back()
                ->withErrors(['phone' => 'Nomor telepon tidak ditemukan.'])
                ->with('status', 'Gagal mengirim email reset password karena nomor telepon tidak ditemukan.');
        }

        // Buat token reset dan simpan ke table password_resets (default Laravel)
        $token = Str::random(64);
        DB::table('password_resets')->updateOrInsert(
            ['email' => $user->email],
            [
                'email' => $user->email,
                'token' => bcrypt($token),
                'created_at' => Carbon::now(),
            ]
        );

        // Buat URL reset password
        $resetUrl = route('password.reset', [
            'token' => $token,
            'email' => $user->email
        ]);

        // Kirim email manual pakai template kustom
        Mail::to($user->email)->send(new ResetPasswordVerification($resetUrl, $user));

        return back()->with('status', 'Kami telah mengirimkan email untuk mereset password Anda.');
    }
}
