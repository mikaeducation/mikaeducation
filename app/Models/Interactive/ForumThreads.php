<?php

namespace App\Models\Interactive;

use Illuminate\Database\Eloquent\Model;

class ForumThreads extends Model
{
    protected $fillable = ['module_id', 'user_id', 'title', 'content'];
}
