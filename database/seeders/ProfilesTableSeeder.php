<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;


class ProfilesTableSeeder extends Seeder
{
    public function run()
    {
        Profile::create([
            'phone' => '082156226440',
            'first_name' => 'Ahmad',
            'last_name' => 'Rayhan',
            'birth_place' => 'Jakarta',
            'birth_date' => '1990-01-01',
            'address' => 'Jl. Contoh No. 123, Jakarta',
            'occupation' => 'Software Developer',
            'institution' => 'Tech Corp',
        ]);
    }
}
