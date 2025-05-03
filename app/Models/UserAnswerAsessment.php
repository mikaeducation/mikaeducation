<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnswerAsessment extends Model
{
    use HasFactory;

    protected $table = 'user_answer_asessment';
    protected $primaryKey = 'user_answer_id';

    protected $fillable = [
        'attempt_id',
        'question_id',
        'user_answer',
        'is_correct'
    ];

    public function attempt()
    {
        return $this->belongsTo(UserAsessmentAttempt::class, 'attempt_id');
    }
}
