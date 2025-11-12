<?php

namespace Database\Factories;

use App\Models\ProgressTracking;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgressTrackingFactory extends Factory
{
    protected $model = ProgressTracking::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'module_id' => 1,
            'attempt_number' => 1,
            'current_part' => null,
            'percent_done' => 0,
            'is_completed' => false,
            'last_visited_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}