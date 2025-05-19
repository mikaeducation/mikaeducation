<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create()
{
    Log::debug('Auth::check()', ['value' => Auth::check()]);
    Log::debug('Auth::user()', ['user' => Auth::user()]);

    if (Auth::check()) {
        return redirect('/');
    }

    return view('auth.loginpage');
}


    public function store(Request $request)
{
    $credentials = $request->only('phone', 'password');

    if (Auth::attempt($credentials, $request->boolean('remember'))) {
        $request->session()->regenerate();

        $user = Auth::user();

        if (! $user->hasVerifiedEmail()) {
            Auth::logout();
            return redirect()->route('login')->withErrors([
                'email' => 'Akun Anda belum diverifikasi. Silakan cek email Anda.',
            ]);
        }

        $hasProfile = Profile::where('phone', $user->phone)->exists();

        if (! $hasProfile) {
            return redirect('/registerprofile');
        }

        return redirect()->intended('/');
    }

    return back()->withErrors([
        'phone' => 'Nomor telepon atau password salah.',
    ]);
}

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        session()->flush();

        return redirect('/')->with('success', 'Anda telah berhasil keluar dari akun Anda.');
    }
}
