<?php

namespace App\Http\Middleware;

use Filament\Http\Middleware\Authenticate as Middleware;
use Illuminate\Auth\AuthenticationException;

class FilamentAuthenticate extends Middleware
{

    protected function redirectTo($request): ?string
    {
        return route('login');
    }


    protected function authenticate($request, array $guards): void
    {
        $guard = config('filament.auth.guard');

        if (! $this->auth->guard($guard)->check()) {
            $this->unauthenticated($request, $guards);
        }

        $this->auth->shouldUse($guard);
    }
}