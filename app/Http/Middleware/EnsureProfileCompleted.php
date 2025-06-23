<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class EnsureProfileCompleted
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        // Jika belum login, biarkan lewat
        if (! $user) {
            return $next($request);
        }

        Log::info('Middleware EnsureProfileCompleted aktif di: ' . $request->path());
        // Rute-rute yang boleh dilewati meskipun belum punya profil
        $excludedRoutes = [
            'login',
            'register',
            'registerprofile',
            'complete-profile',
            'forgot-password',
            'reset-password',
            'email/*',
            'verify-email',
        ];

        // Cek apakah route sekarang termasuk yang dikecualikan
        foreach ($excludedRoutes as $except) {
            if ($request->is($except)) {
                return $next($request);
            }
        }

        // Ambil profil berdasarkan phone
        $profile = Profile::where('phone', $user->phone)->first();
        // Jika belum punya profil atau ada field penting yang belum diisi, arahkan untuk lengkapi
        if (
            ! $profile ||
            empty($profile->first_name) ||
            empty($profile->last_name) ||
            empty($profile->birth_place) ||
            empty($profile->birth_date)
        ) {
            return redirect('/registerprofile')->with('warning', 'Silakan lengkapi biodata Anda terlebih dahulu.');
        }

        // Jika sudah punya profile, lanjutkan akses
        return $next($request);
    }
}
