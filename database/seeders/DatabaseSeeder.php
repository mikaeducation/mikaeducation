<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\ModulesTableSeeder;
use Database\Seeders\ProfilesTableSeeder;
use Database\Seeders\QuestionBankTableSeeder;
use Database\Seeders\ModuleReviewsTableSeeder;
use Database\Seeders\ModuleSubjectsTableSeeder;
use Database\Seeders\ModuleAsessmentsTableSeeder;
use Database\Seeders\SubModuleSubjectsTableSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Panggil seeder UsersTableSeeder dan ProfilesTableSeeder
        $this->call([
            UsersTableSeeder::class,
            ProfilesTableSeeder::class,
            ModulesTableSeeder::class,
            ModuleSubjectsTableSeeder::class,
            SubModuleSubjectsTableSeeder::class,
            ModuleAsessmentsTableSeeder::class,
            QuestionBankTableSeeder::class,
            ModuleReviewsTableSeeder::class
        ]);
    }
}
