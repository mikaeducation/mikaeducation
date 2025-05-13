<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModuleReviewsTableSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('module_reviews')->insert([
            'reviews_id'     => 1,
            'user_id'        => 1,
            'username'       => 'Ahmad Rayhan',
            'module_id'      => 1,
            'user_rating'    => 5.0,
            'comment_review' => 'Ini contoh komen/ulasan dari pengguna',
            'created_at'     => now(),
            'updated_at'     => now(),
        ]);
    }
}
