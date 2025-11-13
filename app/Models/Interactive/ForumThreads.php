<?php

namespace App\Models\Interactive;

use App\Models\User;
use App\Models\Interactive\ForumPost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ForumThreads extends Model
{
    protected $fillable = ['module_id', 'user_id', 'title', 'content'];

    public function posts(): HasMany
    {
        return $this->hasMany(ForumPost::class, 'thread_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
