<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnswerEvaluate extends Model
{
    use HasFactory;

    protected $table = 'user_answer_evaluate';
    protected $primaryKey = 'user_answer_id';

    protected $fillable = [
        'user_evaluate_id',
        'question_id',
        'user_answer',
    ];

    // Relasi balik ke evaluasi
    public function evaluation()
    {
        return $this->belongsTo(UserEvaluate::class, 'user_evaluate_id', 'userEvaluate_id');
    }
}
