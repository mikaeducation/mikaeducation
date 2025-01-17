<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    // Menampilkan informasi akun
    public function show()
    {
        $user = Auth::user(); // Ambil user yang sedang login
        return view('profile', compact('user')); // Kirim data user ke view
    }

    // Update informasi akun
    public function update(Request $request)
{
    $user = auth()->user(); // Mendapatkan data user yang sedang login

    // Validasi input
    $request->validate([
        'phone' => 'required|string|max:15',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'password' => 'nullable|min:8|confirmed', // 'confirmed' memeriksa kesesuaian dengan 'password_confirmation'
    ]);

    // Update data user
    $data = [
        'phone' => $request->phone,
        'email' => $request->email,
    ];

    // Jika ada input password, update password-nya
    if ($request->password) {
        $user->password = bcrypt($request->password); // Hash password baru
    }
    $user->save(); // Simpan perubahan ke database

    return redirect()->back()->with('success', 'Akun berhasil diperbarui.');
}

}

