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

        // Cek apakah user sudah punya profil berdasarkan phone
        $hasProfile = Profile::where('phone', $user->phone)->exists();

        // Jika belum punya profile, redirect ke /registerprofile
        if (! $hasProfile) {
            return redirect('/registerprofile');
        }

        // Jika sudah punya profile, lanjutkan akses
        return $next($request);
    }
}
