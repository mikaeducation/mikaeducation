<?php

namespace Database\Factories;

use App\Models\QuestionBank;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionBankFactory extends Factory
{
    protected $model = QuestionBank::class;

    public function definition(): array
    {
        return [
            'asessment_id' => 1, // Sesuai dengan pengujian submit
            'module_id' => 1,
            'question_id' => $this->faker->unique()->randomNumber(5), // Pastikan ini unique
            'question_text' => $this->faker->sentence,
            'correct_answer' => 'A',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}