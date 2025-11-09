<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubmoduleQuizzes extends Model
{
    protected $table = 'submodule_quizzes';

    public $incrementing = false;

    protected $keyType = 'int';

    protected $fillable = [
        'quiz_id',
        'submoduleSubject_id',
        'quiz_title',
        'quiz_type',
        'quiz_workout',
        'quiz_average',
        'quiz_value_max',
        'quiz_value_min',
    ];

    // NOTE: add belongs to for submoduleSubject
}
