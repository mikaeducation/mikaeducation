<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleReview extends Model
{
    use HasFactory;

    protected $primaryKey = 'reviews_id';

    protected $fillable = [
        'user_id',
        'username',
        'module_id',
        'user_rating',
        'comment_review',
    ];
    
}
