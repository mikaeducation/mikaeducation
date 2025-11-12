<?php

namespace Database\Factories;

use App\Models\ModuleAsessment;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModuleAsessmentFactory extends Factory
{
    protected $model = ModuleAsessment::class;

    public function definition()
    {
        return [
            'module_id' => 1,
            'asessment_id' => 1,
            'asessment_title' => 'Pretest Modul 1',
        ];
    }
}
