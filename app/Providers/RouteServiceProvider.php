<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Lokasi default redirect setelah login/verifikasi
     */
    public const HOME = '/'; // ubah jadi '/registerprofile' jika perlu

    /**
     * Daftarkan route aplikasi (web, auth, api, console)
     */
    public function boot(): void
    {
        $this->routes(function () {
            // Route web
            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            // Route tambahan dari Breeze seperti login/register
            Route::middleware('web')
                ->group(base_path('routes/auth.php'));

            // Route untuk perintah artisan (jika perlu)
            Route::middleware('web')
                ->group(base_path('routes/console.php'));
        });
    }
}
