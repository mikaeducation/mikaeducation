<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PragmaRX\Google2FA\Google2FA;
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

        $user->save();

        return redirect()->back()->with('success', 'Akun berhasil diperbarui.');
    }
    // Fungsi untuk menghapus akun
    public function deleteAccount(Request $request)
    {
        $user = auth()->user(); // Mendapatkan user yang sedang login
        // Validasi input nomor telepon
        $request->validate([
            'phone' => 'required|string|max:15|exists:users,phone', // Pastikan nomor telepon ada di database
        ]);
        // Verifikasi bahwa nomor telepon sesuai dengan data user yang login
        if ($user->phone !== $request->phone) {
            return redirect()->back()->withErrors(['phone' => 'Nomor telepon tidak cocok.']);
        }
        // Hapus akun user
        $user->delete();
        
        return redirect('/')->with('success', 'Akun berhasil dihapus.');
    }
}

