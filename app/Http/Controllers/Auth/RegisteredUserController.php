<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('registerpage'); // pakai view buatan kamu
    }

    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required|unique:users,phone',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ], [
            'phone.required' => 'Nomor belum diisi.',
            'phone.unique' => 'Nomor telah digunakan sebelumnya.',
            'email.required' => 'Email belum diisi.',
            'email.email' => 'Email tidak valid.',
            'email.unique' => 'Email telah digunakan sebelumnya.',
            'password.required' => 'Password wajib diisi.',
            'password.confirmed' => 'Konfirmasi password tidak sesuai.',
        ]);

        $user = User::create([
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'terms_accepted' => true,
        ]);

        event(new Registered($user)); // mengirim email verifikasi

        Auth::login($user);

        return redirect('/email/verify'); // Breeze akan arahkan ke verifikasi
    }
}
