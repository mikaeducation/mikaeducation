<?php

namespace App\Models;


// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'phone',        // Tambahkan kolom 'phone' di sini
        'email',        // Kolom lainnya
        'password',
    ];

    /**
     * Relasi ke model Profile berdasarkan kolom 'phone'.
     */
    public function profile()
    {
        return $this->hasOne(\App\Models\Profile::class, 'phone', 'phone'); //dibuat seperti ini agar nama class Profile tidak bentrok dengan namespace Symfony
    }
}
