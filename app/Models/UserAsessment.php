<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAsessment extends Model
{
    use HasFactory;

    protected $table = 'user_asessment';
    protected $primaryKey = 'userAsessment_id';

    protected $fillable = [
        'user_id',
        'module_id',
        'username',
        'progress_id',
        'asessment_id',
        'attempt_count',
        'high_score'
    ];

    public function attempts()
    {
        return $this->hasMany(UserAsessmentAttempt::class, 'userAsessment_id');
    }

    public function progress()
    {
        return $this->belongsTo(ProgressTracking::class, 'progress_id', 'progress_id');
    }
}
