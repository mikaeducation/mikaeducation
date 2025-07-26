<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserQuizzesAttempt extends Model
{
    protected $table = 'user_quizzes_attempt';
    protected $primaryKey = 'attempt_id';

    protected $fillable = [
        'user_quiz_id',
        'attempt_number',
        'total_questions',
        'correct_answers',
        'incorrect_answers',
        'score',
        'is_passed',
        'duration',
        'started_at',
        'finished_at'
    ];

    // foreign key user quiz id
    public function userQuizzes()
    {
        return $this->belongsTo(UserQuizzes::class, 'user_quiz_id');
    }
}
