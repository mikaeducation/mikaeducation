<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserQuizzes extends Model
{
    protected $table = 'user_quizzes';
    protected $primaryKey = 'user_quiz_id';

    protected $fillable = [
        'module_id',
        'user_id',
        'progress_id',
        'username',
        'quiz_id',
        'attempt_count',
        'high_score'
    ];

    // relation to user quiz attempt
    public function attempts()
    {
        return $this->hasMany(UserQuizzesAttempt::class, 'user_quiz_id');
    }
    // foreign key progress
    public function progress()
    {
        return $this->belongsTo(ProgressTracking::class, 'progress_id', 'progress_id');
    }
}
