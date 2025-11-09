<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCaseStudyAttempt extends Model
{
    protected $table = 'user_case_study_attempt';
    protected $primaryKey = 'attempt_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = ['user_id', 'user_case_study_id', 'case_study_id', 'attempt_number', 'score'];

    protected $casts = [
        'attempt_number' => 'integer',
        'score' => 'integer',
    ];

    /**
     * Define relationship to parent UserCaseStudy
     */
    public function caseStudy()
    {
        return $this->belongsTo(UserCaseStudy::class, 'user_case_study_id', 'id');
    }
}
