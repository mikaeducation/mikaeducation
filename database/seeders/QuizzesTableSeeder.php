<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('submodule_quizzes')->insert([
            [
                'submoduleSubject_id' => 1,
                'quiz_title' => 'Kuis Memahami Autisme',
                'quiz_instruction' => 'Isilah lingkaran-lingkaran berikut dengan karakteristik Autisme yang perlu dipahami oleh orang yang bekerja dengan anak autistik.',
                'quiz_type' => 'final_quiz',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'submoduleSubject_id' => 2,
                'quiz_title' => 'Kuis Pra-Komunikasi',
                'quiz_instruction' => 'Isilah lingkaran-lingkaran berikut dengan karakteristik Pra-Komunikasi yang sering ditunjukkan anak autistik.',
                'quiz_type' => 'final_quiz',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'submoduleSubject_id' => 2,
                'quiz_title' => 'Kuis Komunikasi Ekspresif',
                'quiz_instruction' => 'Cocokkanlah gejala-gejala di bawah ini agar sesuai dengan contoh komunikasi ekspresif.',
                'quiz_type' => 'final_quiz',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'submoduleSubject_id' => 2,
                'quiz_title' => 'Kuis Komunikasi Reseptif',
                'quiz_instruction' => 'Cocokkanlah gejala-gejala di bawah ini agar sesuai dengan contoh komunikasi reseptif.',
                'quiz_type' => 'final_quiz',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'submoduleSubject_id' => 2,
                'quiz_title' => 'Kuis Komunikasi Pragmatis',
                'quiz_instruction' => 'Cocokkanlah gejala-gejala di bawah ini agar sesuai dengan komponen kesulitan komunikasi pragmatis berikut.',
                'quiz_type' => 'final_quiz',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'submoduleSubject_id' => 2,
                'quiz_title' => 'Kuis Strategi Komunikasi Autisme',
                'quiz_instruction' => 'Cocokkanlah alat bantu visual di bawah ini agar sesuai dengan contoh Augmentative Alternative Communication (AAC) yang sesuai.',
                'quiz_type' => 'final_quiz',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'submoduleSubject_id' => 3,
                'quiz_title' => 'Kuis Matriks Perencanaan',
                'quiz_instruction' => 'Cocokkanlah penjelasan-penjelasan di bawah ini agar sesuai dengan komponen Planning Matrix berikut.',
                'quiz_type' => 'final_quiz',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'submoduleSubject_id' => 4,
                'quiz_title' => 'Kuis Belajar Terstruktur',
                'quiz_instruction' => 'Cocokkanlah penjelasan di bawah ini agar sesuai dengan komponen TEACCH) yang sesuai.',
                'quiz_type' => 'final_quiz',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
