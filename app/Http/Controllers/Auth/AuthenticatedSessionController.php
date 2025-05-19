<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create()
    {
        return view('loginpage'); // Gunakan tampilan login kamu
    }

    public function store(Request $request)
    {
        $credentials = $request->only('phone', 'password');

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->profile) {
                return redirect()->intended('/');
            } else {
                return redirect('/registerprofile');
            }
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
