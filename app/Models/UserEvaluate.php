<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEvaluate extends Model
{
    use HasFactory;

    protected $table = 'user_evaluate';
    protected $primaryKey = 'userEvaluate_id';

    protected $fillable = [
        'user_id',
        'module_id',
        'username',
        'asessment_id',
        'after_asessment_id',
        'scale_1_count',
        'scale_2_count',
        'scale_3_count',
        'scale_4_count',
        'scale_5_count',
    ];

    // Relasi: satu evaluasi punya banyak jawaban
    public function answers()
    {
        return $this->hasMany(UserAnswerEvaluate::class, 'user_evaluate_id', 'userEvaluate_id');
    }

    // Relasi ke user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
