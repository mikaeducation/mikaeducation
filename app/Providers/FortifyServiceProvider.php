<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class FortifyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Fortify::authenticateUsing(function ($request) {
            $user = User::where('email', $request->email)->first();

            if ($user &&
                is_null($user->deleted_at) &&
                Hash::check($request->password, $user->password)) {
                return $user;
            }

            return null;
        });
    }
}
