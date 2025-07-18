<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\UserLog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use PragmaRX\Google2FA\Google2FA;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\DeleteAccountVerification;


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
        $user = User::find(Auth::id());

        // Identifikasi perubahan
        $emailChanged = $request->email !== $user->email;
        $phoneChanged = $request->phone !== $user->phone;
        $passwordChangeRequested = $request->filled('current_password') || $request->filled('new_password');
        // Siapkan aturan validasi dinamis
        if ($phoneChanged) {
            $rules['phone'] = ['required', 'string', 'max:15', Rule::unique('users')->ignore($user->id)];
        }
        if ($emailChanged) {
            $rules['email'] = ['required', 'email', 'ends_with:@gmail.com,@yahoo.com,@outlook.com', Rule::unique('users')->ignore($user->id)];
        }
        if ($passwordChangeRequested) {
            $rules['current_password'] = ['required'];
            $rules['new_password'] = ['required', 'min:8', 'confirmed'];
        }

        $messages = [
            'phone.required' => 'Nomor telepon wajib diisi.',
            'phone.max' => 'Nomor telepon maksimal 15 karakter.',
            'phone.unique' => 'Nomor telepon ini sudah digunakan.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.ends_with' => 'Email harus dari domain @gmail.com, @yahoo.com, atau @outlook.com.',
            'email.unique' => 'Email ini sudah digunakan.',
            'current_password.required' => 'Kata sandi lama wajib diisi.',
            'new_password.required' => 'Kata sandi baru wajib diisi.',
            'new_password.min' => 'Kata sandi baru minimal 8 karakter.',
            'new_password.confirmed' => 'Konfirmasi kata sandi tidak cocok.',
        ];

        $request->validate($rules, $messages);

        // Validasi password lama jika ingin ganti password
        if ($passwordChangeRequested && !Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Kata sandi lama tidak sesuai.'])->withInput();
        }
        // Proses update
        if ($phoneChanged) $user->phone = $request->phone;
        if ($emailChanged) $user->email = $request->email;
        if ($passwordChangeRequested) {
            $user->password = Hash::make($request->new_password);
            $user->remember_token = Str::random(60); // Tambahan: logout dari sesi lain
        }

        $user->save();

        $logText = 'Anda telah melakukan perubahan pada akun Anda: ';
        $details = [];

        if ($phoneChanged) $details[] = 'Nomor telepon';
        if ($emailChanged) $details[] = 'Email';
        if ($passwordChangeRequested) $details[] = 'Kata sandi';

        $logText .= implode(', ', $details) . '.';

        UserLog::create([
            'user_id' => $user->id,
            'log_type' => 'account', // jenis baru
            'text_log' => $logText,
            'is_read' => false,
        ]);

        return back()->with('status', 'Informasi akun berhasil diperbarui.');
    }

    // Fungsi untuk menghapus akun
    public function deleteAccount(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = User::find(Auth::id());

        $request->validate([
            'phone' => 'required|string|max:15|exists:users,phone',
            'password' => 'required|string',
        ]);

        // Verifikasi bahwa nomor telepon cocok
        if ($user->phone !== $request->phone) {
            return back()->withErrors(['phone' => 'Nomor telepon tidak cocok.']);
        }

        // Verifikasi password sesuai Fortify
        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => 'Password salah.']);
        }

        // Buat token verifikasi hapus akun
        $token = Str::uuid()->toString();
        $user->deletion_token = $token;
        $user->deletion_token_expires_at = Carbon::now()->addMinutes(60); // Token berlaku 60 menit
        $user->save();

        // Kirim email verifikasi hapus akun
        Mail::to($user->email)->send(new DeleteAccountVerification($user));
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect('/')->with('status', 'Link verifikasi penghapusan akun telah dikirim ke email Anda.');
    }

    // Email verification
    public function verifyDeletion($token)
    {
        $user = User::where('deletion_token', $token)->first();

        // Token tidak ditemukan
        if (!$user) {
            return redirect('/')->withErrors([
                'token' => 'Token tidak valid atau sudah digunakan.'
            ]);
        }

        // Token sudah kadaluarsa
        if (Carbon::now()->greaterThan($user->deletion_token_expires_at)) {
            // Bersihkan token agar tidak bisa digunakan ulang
            $user->deletion_token = null;
            $user->deletion_token_expires_at = null;
            $user->save();

            return redirect('/login')->withErrors([
                'token' => 'Token sudah kedaluwarsa. Silakan login dan ajukan ulang penghapusan akun.'
            ]);
        }

        // Token valid → lanjut hapus akun (soft delete)
        $user->deletion_token = null;
        $user->deletion_token_expires_at = null;
        $user->delete(); // soft delete-nonaktifkan akun
        $user->refresh();

        Auth::logout(); // Logout jika user masih aktif

        return redirect('/login')->with('status', 'Akun Anda berhasil dihapus. Silakan registrasi ulang jika ingin menggunakan layanan kembali.');
    }
}

