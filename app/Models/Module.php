<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $primaryKey = 'module_id';
    public $incrementing = true;
    protected $keyType = 'int';

    public function subjects()
    {
        return $this->hasMany(ModuleSubject::class, 'module_id', 'module_id');
    }

    protected $casts = [
        'module_point' => 'array',
    ];

}
