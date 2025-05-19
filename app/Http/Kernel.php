<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Routing\Middleware\ValidateSignature;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
use App\Http\Middleware\EnsureProfileCompleted;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RedirectIfAuthenticated;

class Kernel extends HttpKernel
{
    /**
     * Global middleware (kosongkan jika tidak dipakai eksplisit).
     */
    protected $middleware = [];

    /**
     * Middleware groups.
     */
    protected $middlewareGroups = [
        'web' => [
            // Tambahkan hanya jika Anda sudah punya file-nya
            // \App\Http\Middleware\EncryptCookies::class,
            // \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            // \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            // \App\Http\Middleware\VerifyCsrfToken::class,
            // \Illuminate\Routing\Middleware\SubstituteBindings::class,

            EnsureProfileCompleted::class,
        ],
    ];

    /**
     * Route middleware aliases (digunakan di file routes).
     */
    protected $routeMiddleware = [
        'auth' => Authenticate::class,
        'guest' => RedirectIfAuthenticated::class,
        'throttle' => ThrottleRequests::class,
        'signed' => ValidateSignature::class,
        'verified' => EnsureEmailIsVerified::class,
        'profile' => EnsureProfileCompleted::class,
    ];
}
