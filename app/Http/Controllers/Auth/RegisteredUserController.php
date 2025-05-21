<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReactivationVerification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\View\View as ViewContract;

class RegisteredUserController extends Controller
{
    public function create()
    {
        if (Auth::check()) {
            return redirect('/');
        }

        return view('auth.registerpage');
    }

    public function store(Request $request)
    {
        $userSoftDeleted = User::withTrashed()->where('phone', $request->phone)->first();

        if ($userSoftDeleted && $userSoftDeleted->trashed()) {
            return redirect()->back()
                ->withInput()
                ->with('reactivate', true); // Untuk trigger teks & modal
        }

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

        return response()->make(
            '<script>
                alert("Akun berhasil didaftarkan. Silakan cek email Anda untuk proses aktivasi akun terlebih dahulu, baru setelah itu Anda dapat melakukan Login.");
                window.location.href = "/login";
            </script>',
            200,
            ['Content-Type' => 'text/html']
        );
    }

    public function showReactivationForm(): ViewContract|RedirectResponse
    {
        return redirect('/');
    }

    public function reactivate(Request $request): Response|RedirectResponse
    {
        $request->validate([
            'phone' => 'required|string',
            'password' => 'required',
        ]);

        $user = User::withTrashed()->where('phone', $request->phone)->first();

        if (!$user) {
            return back()->withErrors(['phone' => 'Nomor telepon tidak ditemukan.']);
        }

        if (is_null($user->deleted_at)) {
            return back()->withErrors(['phone' => 'Akun Anda belum dinonaktifkan. Silakan login biasa.']);
        }

        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => 'Password salah.']);
        }

        // Buat token reaktivasi unik
        $token = Str::uuid()->toString();
        $user->reactivation_token = $token;
        $user->save();

        // Kirim email ke user.email
        Mail::to($user->email)->send(new ReactivationVerification($user));

        return response()->make(
            '<script>
                alert("Link verifikasi reaktivasi telah dikirim ke email Anda. Silakan cek email Anda untuk melanjutkan proses aktivasi akun.");
                window.location.href = "/login";
            </script>',
            200,
            ['Content-Type' => 'text/html']
        );
    }

    public function verifyReactivation($token)
    {
        $user = User::withTrashed()->where('reactivation_token', $token)->first();

        if (!$user) {
            return redirect('/register')->withErrors(['token' => 'Token tidak valid atau sudah digunakan.']);
        }

        // Aktifkan kembali akun
        $user->restore();
        $user->reactivation_token = null;
        $user->save();

        return redirect('/login')->with('status', 'Akun Anda berhasil diaktifkan kembali. Sekarang Anda sudah bisa melakukan Login atau Masuk dengan akun.');
    }
}
