<?php

namespace App\Models\Interactive;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ForumPost extends Model
{
    protected $table = 'forum_posts';

    protected $fillable = ['thread_id', 'user_id', 'content'];

    public function thread(): BelongsTo
    {
        return $this->belongsTo(ForumThreads::class, 'thread_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
