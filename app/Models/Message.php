<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'messages';

    protected $fillable = ['phone', 'chat1', 'chat2', 'respon'];

    public function user()
    {
        return $this->belongsTo(User::class, 'phone', 'phone');
    }
}
