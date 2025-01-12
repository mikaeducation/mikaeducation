<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'birth_place',
        'birth_date',
        'address',
        'occupation',
        'institution',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
