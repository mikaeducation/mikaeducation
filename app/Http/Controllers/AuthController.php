<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'phone' => 'required|unique:users,phone',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
        ],[
            'phone.required' => 'Nomor belum diisi.', // Jika nomor tidak diisi
            'phone.unique' => 'Nomor telah digunakan sebelumnya.', // Jika nomor sudah terdaftar
            'email.required' => 'Email belum diisi.', // Jika email tidak diisi
            'email.email' => 'Email tidak valid.', // Jika format email tidak valid
            'email.unique' => 'Email telah digunakan sebelumnya.', // Jika email sudah terdaftar
            'password.required' => 'Password wajib diisi.',
            'password.confirmed' => 'Konfirmasi password tidak sesuai.',
        ]);

        $user = User::create([
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            //  'password' => Hash::make($request->password), // membuat lebih aman lagi
            // 'password' => $request->password, // membuat password terlihat di database
            'terms_accepted' => true,
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil!');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('phone', 'password');

            if (Auth::attempt($credentials)) {
                // Ambil data pengguna yang login
                $user = Auth::user();
                
                // Periksa apakah profil pengguna sudah lengkap
                if ($user->profile) {
                    // Jika profil sudah lengkap, arahkan ke halaman utama
                    return redirect('/');
                } else {
                    // Jika profil belum lengkap, arahkan ke halaman melengkapi profil
                    return redirect('/registerprofile');
                }
            }

        return back()->withErrors(['phone', 'password' => 'Nomor telepon atau password salah.']);
    }

    public function showProfileForm()
    {
        return view('registerprofilepage');
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Log out pengguna yang sedang login
        $request->session()->invalidate(); // Hapus semua data sesi
        $request->session()->regenerateToken(); // Regenerasi token CSRF untuk keamanan
        session()->flush(); 

        return redirect('/')->with('success', 'Anda telah berhasil keluar dari Akun Anda.');
    }
}