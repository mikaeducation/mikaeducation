<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
{
    $request->validate([
        'phone' => 'required|unique:users,phone',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed',
    ],[
        'phone' => 'Nomor telpon wajib diisi.',
        'email' => 'Email wajib diisi.',
        'password' => 'Password wajib diisi.',
    ]);

    $user = User::create([
        'phone' => $request->phone,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    return redirect('/login')->with('success', 'Registrasi berhasil!');
}

public function login(Request $request)
{
    $credentials = $request->only('phone', 'password');

    if (Auth::attempt($credentials)) {
        return redirect('/registerprofile');
    }

    return back()->withErrors(['phone', 'password' => 'Nomor telepon atau password salah.']);
}

public function showProfileForm()
{
    return view('registerprofilepage');
}

}
