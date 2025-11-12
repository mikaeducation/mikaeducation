<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ModuleSubject;
use App\Models\Module;

class ModuleSubjectFactory extends Factory
{
    protected $model = ModuleSubject::class;

    public function definition()
    {
        return [
            'module_id' => null, // HARUS diisi dari luar
            'subject_type' => $this->faker->randomElement(['submodul1','submodul2','submodul3','submodul4']),
            'submodule_title' => $this->faker->sentence(3),
            'submodule_description' => $this->faker->paragraph(),
            'submoduleSubject_num' => $this->faker->numberBetween(1, 3),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

