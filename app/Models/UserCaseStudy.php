<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCaseStudy extends Model
{
    protected $table = 'user_case_study';

    // Fillable columns
    protected $fillable = ['module_id', 'user_id', 'progress_id', 'case_study_id', 'username', 'attempt_count', 'high_score'];

    public function progress()
    {
        return $this->belongsTo(ProgressTracking::class, 'progress_id', 'progress_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id');
    }

    protected $casts = [
        'attempt_count' => 'integer',
        'high_score' => 'integer',
    ];
}
