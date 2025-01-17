<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\ProfilesTableSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Panggil seeder UsersTableSeeder dan ProfilesTableSeeder
        $this->call([
            UsersTableSeeder::class,
            ProfilesTableSeeder::class,
        ]);
    }
}
