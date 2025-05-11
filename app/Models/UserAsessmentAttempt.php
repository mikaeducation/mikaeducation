<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAsessmentAttempt extends Model
{
    use HasFactory;

    protected $table = 'user_asessment_attempt';
    protected $primaryKey = 'attempt_id';

    protected $fillable = [
        'userAsessment_id',
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


    public function userAsessment()
    {
        return $this->belongsTo(UserAsessment::class, 'userAsessment_id');
    }

    public function answers()
    {
        return $this->hasMany(UserAnswerAsessment::class, 'attempt_id');
    }
}
