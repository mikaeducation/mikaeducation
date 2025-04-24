<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SubModuleSubjectsTableSeeder extends Seeder
{
    public function run()
{
    DB::table('submodule_subject')->insert([
        // submodul1 - subject_id = 1 (2 submoduleSubject_num)
        [
            'subject_id' => 1,
            'subject_type' => 'submodul1',
            'submoduleSubject_title' => 'Memahami Autisme',
            'submoduleSubject_description' => 'Memahami apa itu Autisme Spektrum Disorder',
            'submoduleSubject_url' => '', //URL VIDEO
            'submoduleSubject_text' => '', //URL NARASI
            'submoduleSubject_result' => '', //RANGKUMAN
            'submoduleSubject_file' => json_encode(['bacaan.pdf', 'video.mp4']),
            'submoduleSubject_quiz' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'subject_id' => 1,
            'subject_type' => 'submodul1',
            'submoduleSubject_title' => 'Komunikasi Autistik',
            'submoduleSubject_description' => 'Karakteristik pra komunikasi, ekspresif, reseptif, pragmatis, dan strategi komunikasi',
            'submoduleSubject_url' => '',
            'submoduleSubject_text' => '',
            'submoduleSubject_result' => '',
            'submoduleSubject_file' => json_encode(['bacaan.pdf', 'video.mp4']),
            'submoduleSubject_quiz' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        // submodul2 - subject_id = 2 (1 submoduleSubject_num)
        [
            'subject_id' => 2,
            'subject_type' => 'submodul2',
            'submoduleSubject_title' => 'Matriks Perencanaan',
            'submoduleSubject_description' => 'Observasi, Pencatatan Karakteristik, Dampak dan Strategi: Komunikasi, Interaksi Sosial, Perilaku, Bermain, Pemrosesan Informasi, Sensoris dan Motorik',
            'submoduleSubject_url' => '',
            'submoduleSubject_text' => '',
            'submoduleSubject_result' => '',
            'submoduleSubject_file' => json_encode(['bacaan.pdf', 'video.mp4']),
            'submoduleSubject_quiz' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        // submodul3 - subject_id = 3 (1 submoduleSubject_num)
        [
            'subject_id' => 3,
            'subject_type' => 'submodul3',
            'submoduleSubject_title' => 'Belajar Terstruktur',
            'submoduleSubject_description' => 'Struktur Lingkungan Fisik, Alat bantu visual, jadwal visual dan Sistem Kerja',
            'submoduleSubject_url' => '',
            'submoduleSubject_text' => '',
            'submoduleSubject_result' => '',
            'submoduleSubject_file' => json_encode(['bacaan.pdf', 'video.mp4']),
            'submoduleSubject_quiz' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        // submodul4 - subject_id = 4 (3 submoduleSubject_num)
        [
            'subject_id' => 4,
            'subject_type' => 'submodul4',
            'submoduleSubject_title' => 'Memulai Aplikasi MIKA 1.0',
            'submoduleSubject_description' => 'Instalasi dan registrasi MIKA 1.0 Mobile',
            'submoduleSubject_url' => '',
            'submoduleSubject_text' => '',
            'submoduleSubject_result' => '',
            'submoduleSubject_file' => json_encode(['bacaan.pdf', 'video.mp4']),
            'submoduleSubject_quiz' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'subject_id' => 4,
            'subject_type' => 'submodul4',
            'submoduleSubject_title' => 'Administratif MIKA 1.0',
            'submoduleSubject_description' => 'Alur belajar dan skoring dalam MIKA 1.0 Mobile',
            'submoduleSubject_url' => '',
            'submoduleSubject_text' => '',
            'submoduleSubject_result' => '',
            'submoduleSubject_file' => json_encode(['bacaan.pdf', 'video.mp4']),
            'submoduleSubject_quiz' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'subject_id' => 4,
            'subject_type' => 'submodul4',
            'submoduleSubject_title' => 'Evaluasi dan Interpretasi',
            'submoduleSubject_description' => 'Skoring tiap Level dan Interpretasi yang berdampak pada proses pembelajaran',
            'submoduleSubject_url' => '',
            'submoduleSubject_text' => '',
            'submoduleSubject_result' => '',
            'submoduleSubject_file' => json_encode(['bacaan.pdf', 'video.mp4']),
            'submoduleSubject_quiz' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
    ]);
}
}
