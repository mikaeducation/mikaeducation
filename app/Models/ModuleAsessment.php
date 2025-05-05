<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModuleAsessment extends Model
{
    protected $table = 'module_asessment';

    public $incrementing = false;

    protected $keyType = 'int';

    protected $fillable = [
        'asessment_id',
        'module_id',
        'asessment_title',
        'asessment_duration',
        'asessment_time_limit',
        'asessment_type',
        'asessment_workout',
        'asessment_average',
        'asessmentValue_max',
        'asessmentValue_min',
    ];
}
