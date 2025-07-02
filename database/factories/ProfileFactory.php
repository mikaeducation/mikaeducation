<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'phone' akan diisi saat factory dipanggil, jadi tidak perlu didefinisikan di sini
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'birth_place' => fake()->city(),
            'birth_date' => fake()->date(),
            'address' => fake()->address(),
            'gender' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'occupation' => fake()->jobTitle(),
            'institution' => fake()->company(),
            'description' => fake()->paragraph(),
            // Kolom nullable lainnya bisa dibiarkan kosong atau diisi jika perlu
            // 'banner_image' => null,
            // 'profile_image' => null,
        ];
    }
}
