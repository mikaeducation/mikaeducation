<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserEvaluate;
use App\Models\ProgressTracking;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserEvaluateFactory extends Factory
{
    protected $model = UserEvaluate::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'progress_id' => ProgressTracking::factory(),
            'module_id' => 1,
            'username' => 'testuser',
            'asessment_id' => 3,
            'after_asessment_id' => 1, // bisa juga 2
            'answer_evaluate_count' => 25,
            'scale_1_count' => 3,
            'scale_2_count' => 4,
            'scale_3_count' => 5,
            'scale_4_count' => 6,
            'scale_5_count' => 7,
        ];
    }
}
