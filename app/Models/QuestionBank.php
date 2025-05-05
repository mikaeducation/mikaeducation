<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionBank extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'question_id';
    protected $table = 'question_bank';

    protected $fillable = [
        'module_id',
        'asessment_id',
        'question_for',
        'question_text',
        'answerA',
        'answerB',
        'answerC',
        'answerD',
        'answerE',
        'correct_answer',
    ];
}
