<?php

namespace App\Http;

use App\Http\Middleware\AdminOnly;

use App\Http\Middleware\Authenticate;
use App\Http\Middleware\EnsureProfileCompleted;
use Illuminate\Session\Middleware\StartSession;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Illuminate\Routing\Middleware\ValidateSignature;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;


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
        'profile.completed' => EnsureProfileCompleted::class,
        'admin.only' => AdminOnly::class,
    ];
}
