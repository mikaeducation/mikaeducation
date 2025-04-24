<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModuleAsessmentsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('module_asessment')->insert([
            [
                'asessment_id' => 1,
                'module_id' => 1,
                'asessment_title' => 'Asesmen I',
                'asessment_duration' => 'unlimited',
                'asessment_time_limit' => null,
                'asessment_type' => 'repeatable',
                'asessment_workout' => 0,
                'asessment_average' => null,
                'asessmentValue_max' => 100,
                'asessmentValue_min' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'asessment_id' => 2,
                'module_id' => 1,
                'asessment_title' => 'Asesmen II',
                'asessment_duration' => 'unlimited',
                'asessment_time_limit' => null,
                'asessment_type' => 'repeatable',
                'asessment_workout' => 0,
                'asessment_average' => null,
                'asessmentValue_max' => 100,
                'asessmentValue_min' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'asessment_id' => 3,
                'module_id' => 1,
                'asessment_title' => 'Evaluation',
                'asessment_duration' => 'unlimited',
                'asessment_time_limit' => null,
                'asessment_type' => 'limited',
                'asessment_workout' => 0,
                'asessment_average' => null,
                'asessmentValue_max' => 5,
                'asessmentValue_min' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
    }
}
