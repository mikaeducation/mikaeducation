<?php

namespace Database\Factories;

use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class ModuleFactory extends Factory
{
    protected $model = Module::class;

    public function definition()
    {
        return [
            'module_title' => $this->faker->sentence(4),
            'module_description' => $this->faker->paragraph(4),
            'module_point' => json_encode([
                $this->faker->sentence(),
                $this->faker->sentence(),
                $this->faker->sentence(),
            ]),
            'module_publisher' => $this->faker->company(),
            'module_publisher_logo' => 'images/logo-'.$this->faker->numberBetween(1,5).'.png',
            'module_publisher_name' => $this->faker->company(),
            'module_publisher_banner' => 'images/bg'.$this->faker->numberBetween(1,5).'.jpg',
            'module_publish_date' => Carbon::now()->subDays(rand(1, 365))->format('Y-m-d'),
            'module_category' => $this->faker->randomElement(['Komunikasi & Visual', 'Teknologi', 'Bahasa', 'Sains']),
            'mainSubject_num' => $this->faker->numberBetween(1, 10),
            'module_level' => $this->faker->numberBetween(1, 5), // 1-5
            'module_type' => $this->faker->boolean(),
            'module_rating' => $this->faker->randomFloat(1, 1, 5), // rating antara 1.0-5.0
            'module_status' => $this->faker->boolean(),
            'module_certificate' => 'images/sample-sertificate.png',
            'module_teaser' => 'videos/MIKA-tesear.mp4',
            'module_introduce' => $this->faker->boolean(),
            'module_asessment' => $this->faker->boolean(),
            'moduleAsessmen_num' => $this->faker->numberBetween(0, 2),
            'module_practice' => $this->faker->boolean(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
