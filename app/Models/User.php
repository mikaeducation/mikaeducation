<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Filament\Models\Contracts\HasAvatar;
use Illuminate\Support\Facades\Storage;
use Filament\Panel;

/**
 * @method bool hasVerifiedEmail()
 * @method bool markEmailAsVerified()
 */
/** @property \Illuminate\Support\Carbon|null $email_verified_at */


class User extends Authenticatable implements MustVerifyEmail, FilamentUser, HasName, HasAvatar
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'phone',
        'email',
        'password',
        'terms_accepted',
        'is_profile_completed',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean',
    ];

    public function profile()
    {
        return $this->hasOne(\App\Models\Profile::class, 'phone', 'phone');
    }
    
    public function moduleReviews()
    {
        return $this->hasMany(\App\Models\ModuleReview::class, 'user_id'); 
    }

    // --- AKSES FILAMENT ---
    public function canAccessPanel(Panel $panel): bool
    {
        return $this->is_admin && $this->email_verified_at; 
    }


    public function getFilamentName(): string
    {
        if ($this->profile) {
            $fullName = trim("{$this->profile->first_name} {$this->profile->last_name}");
            if (!empty($fullName)) {
                return $fullName;
            }
        }
        return (string) ($this->phone ?? $this->email ?? 'Admin');
    }

    public function getFilamentAvatarUrl(): ?string
    {
        if ($this->profile && $this->profile->profile_image) {
            return asset($this->profile->profile_image);
        }
        return null;
    }

    public function getNameAttribute(): string
    {
        return $this->getFilamentName();
    }


    protected static function booted(): void
    {
        static::forceDeleting(function (User $user) {
            $user->moduleReviews()->delete();
        });
    }
}
