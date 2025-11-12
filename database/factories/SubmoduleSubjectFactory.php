<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SubmoduleSubject;

class SubmoduleSubjectFactory extends Factory
{
    protected $model = SubmoduleSubject::class;

    public function definition()
    {
        return [
            'subject_id' => null,
            'subject_type' => $this->faker->randomElement(['submodul1','submodul2','submodul3','submodul4']),
            'submoduleSubject_title' => $this->faker->sentence(3),
            'submoduleSubject_description' => $this->faker->paragraph(),
            'submoduleSubject_url' => '',
            'submoduleSubject_text' => '',
            'submoduleSubject_result' => '',
            'submoduleSubject_file' => json_encode(['file1.pdf', 'file2.mp4']),
            'submoduleSubject_quiz' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
