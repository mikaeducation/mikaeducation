<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [  
        'phone',
        // 'email',
        'username',
        'first_name',  
        'last_name',
        'birth_place',  
        'birth_date',  
        'address',  
        'occupation',  
        'institution',
        'institutionCity',    
        'gender',
        'skill',
        'experience',  
        'banner_image',  
        'profile_image',  
        'description',  
    ];  
    

    /**
     * Relasi ke model User berdasarkan kolom 'phone'.
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'phone', 'phone'); //dibuat seperti ini agar nama class Profile tidak bentrok dengan namespace Symfony
    }
}
