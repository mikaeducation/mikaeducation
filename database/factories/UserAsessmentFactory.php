<?php

namespace Database\Factories;

use App\Models\UserAsessment;
use App\Models\User;
use App\Models\ProgressTracking;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserAsessmentFactory extends Factory
{
    protected $model = UserAsessment::class;

    public function definition(): array
    {
        $progress = ProgressTracking::factory()->create();

        return [
            'user_id' => $progress->user_id,
            'module_id' => $progress->module_id,
            'progress_id' => $progress->progress_id,
            'username' => 'TestUser',
            'asessment_id' => 1, // Asumsi asessment_id 1 ada dalam module_asessment
            'attempt_count' => 1,
            'high_score' => 80,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}