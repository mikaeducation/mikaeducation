<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [  
        'phone',
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

    protected $guarded = ['id'];

    /**
     * Relasi ke model User berdasarkan kolom 'phone'.
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'phone', 'phone'); //dibuat seperti ini agar nama class Profile tidak bentrok dengan namespace Symfony
    }

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
