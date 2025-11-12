<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\ProgressTracking;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProgressHistory>
 */
class ProgressHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'progress_id' => ProgressTracking::factory(),
            'user_id' => User::factory(),
            'module_id' => 1,
            'module_part' => 'modul-introduce',
            'page_path' => '/course',
            'status' => 'in_progress',
        ];
    }
}
