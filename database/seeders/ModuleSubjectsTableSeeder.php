<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ModuleSubjectsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('module_subject')->insert([
            [
                'module_id' => 1,
                'subject_type' => 'submodul1',
                'submodule_title' => 'Gangguan Spektrum Autisme',
                'submodule_description' => 'Materi ini tentang gangguan spektrum autisme, membahas enam karakteristik utama autisme dan pengaruhnya terhadap komunikasi.',
                'submoduleSubject_num' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'module_id' => 1,
                'subject_type' => 'submodul2',
                'submodule_title' => 'Matriks Perencanaan',
                'submodule_description' => 'Pembahasan tentang strategi matriks melalui proses observasi, pencatatan karakteristik, dampak dan strategi komunikasi',
                'submoduleSubject_num' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'module_id' => 1,
                'subject_type' => 'submodul3',
                'submodule_title' => 'Pembelajaran Terstruktur',
                'submodule_description' => 'Pembahasan tentang pembelaran terstruktur dengan mempertimbangkan struktur lingkungan fisik, penggunaan alat bantu visual, sistem kerja dan jadwal secara visual',
                'submoduleSubject_num' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'module_id' => 1,
                'subject_type' => 'submodul4',
                'submodule_title' => 'Penggunaan Aplikasi MIKA 1.0',
                'submodule_description' => 'Materi ini menjelaskan cara menggunakan aplikasi MIKA 1.0 sebagai alat bantu terapi komunikasi di perangkat mobile, pendampingan administrasi, hingga proses evaluasi dan interpretasi nya.',
                'submoduleSubject_num' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
