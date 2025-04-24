<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    public function subjects()
    {
        return $this->hasMany(ModuleSubject::class, 'module_id', 'module_id');
    }

    protected $casts = [
        'module_point' => 'array',
    ];

}
