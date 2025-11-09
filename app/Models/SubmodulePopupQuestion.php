<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubmodulePopupQuestion extends Model
{
    protected $table = 'popup_question';

    protected $fillable = ['submoduleSubject_id', 'title', 'instruction', 'answers', 'pop_time'];

    protected $casts = [
        'answers' => 'array', // Secarra otomatis mendecode JSON dari DB
        'pop_time' => 'integer',
    ];

    public function submoduleSubject()
    {
        return $this->belongsTo(SubmoduleSubject::class, 'submoduleSubject_id', 'submoduleSubject_id');
    }
}
