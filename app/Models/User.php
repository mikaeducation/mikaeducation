<?php

namespace App\Models;


// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method bool hasVerifiedEmail()
 * @method bool markEmailAsVerified()
 */
/** @property \Illuminate\Support\Carbon|null $email_verified_at */


class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'phone',
        'email',
        'password',
        'terms_accepted',
        'is_profile_completed',
    ];

    /**
     * Relasi ke model Profile berdasarkan kolom 'phone'.
     */
    public function profile()
    {
        return $this->hasOne(\App\Models\Profile::class, 'phone', 'phone'); //dibuat seperti ini agar nama class Profile tidak bentrok dengan namespace Symfony
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
