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
    $user->save(); // Simpan perubahan ke database

    return redirect()->back()->with('success', 'Akun berhasil diperbarui.');
}

    // public function generate2FA(Request $request) {
    //     $google2fa = new Google2FA();
    //     $secret = $google2fa->generateSecretKey();

    //     // Simpan secret ke database untuk user terkait
    //     $user = auth()->user();
    //     $user->google2fa_secret = $secret;
    //     $user->save();

    //     // Generate URL untuk QR Code
    //     $companyName = 'Nama Aplikasi Anda';
    //     $qrCodeUrl = $google2fa->getQRCodeUrl(
    //         $companyName,
    //         $user->email,
    //         $secret
    //     );

    //     return response()->json(['qr_code_url' => $qrCodeUrl, 'secret' => $secret]);
    // }

    // public function verify2FA(Request $request) {
    //     $google2fa = new Google2FA();
    
    //     $user = auth()->user();
    //     $isValid = $google2fa->verifyKey($user->google2fa_secret, $request->otp);
    
    //     if ($isValid) {
    //         // Tandai bahwa user telah mengaktifkan 2FA
    //         $user->is_2fa_enabled = true;
    //         $user->save();
    
    //         return response()->json(['message' => '2FA berhasil diaktifkan']);
    //     }
    
    //     return response()->json(['message' => 'Kode OTP tidak valid'], 422);
    // }

    // public function login(Request $request) {
    //     $user = User::where('email', $request->email)->first();
    
    //     if ($user && Hash::check($request->password, $user->password)) {
    //         if ($user->is_2fa_enabled) {
    //             // Kirim status untuk memulai validasi OTP
    //             return response()->json(['requires_2fa' => true]);
    //         }
    //         // Login tanpa 2FA
    //         auth()->login($user);
    //         return response()->json(['message' => 'Login berhasil']);
    //     }
    
    //     return response()->json(['message' => 'Email atau password salah'], 401);
    // }
    
}

