<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PopupQuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('popup_question')->insert([
            [
                'submoduleSubject_id' => 1,
                'title' => 'Neurodivergen',
                'instruction' => 'Apa yang dimaksud dengan neurodivergen?',
                'answers' => json_encode([
                    [
                        'no' => 1,
                        'text' => 'Kemampuan otak yang berbeda-beda antara satu dengan yang lain.',
                        'explanation' =>
                            'Neuro= Otak, Divergen= Variasi, sehingga neurodivergen adalah pengakuan bahwa adanya keberagaman struktur dan fungsi otak dalam memproses informasi serta berbagai dampaknya pada perilaku individu.',
                        'is_correct' => true,
                    ],
                    [
                        'no' => 2,
                        'text' => 'Kemampuan otak ada yang lemah dan kuat.',
                        'explanation' => 'Kemampuan otak ada yang kuat dan lemah bukan arti neurodivergen.',
                        'is_correct' => false,
                    ],
                ]),
                'pop_time' => '260',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'submoduleSubject_id' => 1,
                'title' => 'Spektrum Autisme',
                'instruction' => 'Apakah yang dimaksud dengan spektrum autisme?',
                'answers' => json_encode([
                    [
                        'no' => 1,
                        'text' =>
                            'Tingkat dan bentuk gejala autisme pada satu orang akan unik dan berbeda dengan individu lain.',
                        'explanation' => '',
                        'is_correct' => true,
                    ],
                    [
                        'no' => 2,
                        'text' => 'Proses sensori pada setiap individu autistik akan menjadi hipersensitif.',
                        'explanation' =>
                            'Proses sensoris pada orang autistik tidak selalu hipersensitif, namun bisa juga hiposensitif.',
                        'is_correct' => false,
                    ],
                ]),
                'pop_time' => '523',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'submoduleSubject_id' => 2,
                'title' => 'Pra Komunikasi',
                'instruction' => 'Keterampilan pra-komunikasi menjadi sangat mendasar untuk dimiliki karena?',
                'answers' => json_encode([
                    [
                        'no' => 1,
                        'text' =>
                            'Joint attention membuat anak mampu fokus mengamati obyek/situasi dan berbagi perhatian dengan orang lain.',
                        'explanation' =>
                            'Kemampuan berbagi perhatian bersama membuat anak mampu membentuk interaksi bukan hanya dengan obyek (mati) tapi juga melakukan interaksi dengan orang lain di sekitarnya. Ini adalah dasar kemampuan belajar dari sosial.',
                        'is_correct' => true,
                    ],
                    [
                        'no' => 2,
                        'text' =>
                            'Intervensi pra komunikasi membentuk kontak mata anak agar bisa fokus terhadap obyek belajar.',
                        'explanation' =>
                            'Kontak mata pada individu autistik yang perlu didukung dikembangkan adalah kontak mata dengan orang lain di sekitarnya. Bukan hanya pada obyek mati.',
                        'is_correct' => false,
                    ],
                ]),
                'pop_time' => '124',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'submoduleSubject_id' => 2,
                'title' => 'Komunikasi Ekspresif',
                'instruction' => 'Bagaimana komunikasi ekspresif digunakan dalam berinteraksi sosial?',
                'answers' => json_encode([
                    [
                        'no' => 1,
                        'text' =>
                            'Untuk bisa melakukan percakapan, tidak cukup hanya memahami komentar/pernyataan/permintaan partner, tapi juga menjawab sebagai ekspresi pemahaman.',
                        'explanation' =>
                            'Dalam komunikasi dialog, anak bisa mengekspresikan perasaannya (secara verbal dan non-verbal), meminta (requesting), dan merespon informasi yang diterima dari lawab bicara.',
                        'is_correct' => true,
                    ],
                    [
                        'no' => 2,
                        'text' => 'Dalam dialog, jawaban echolalia bisa dianggap fungsional.',
                        'explanation' =>
                            'Echolalia adalah bentuk komunikasi ekspresif, namun tidak fungsional karena hanya sekedar meniru. Akibatnya, respon echolalia belum tentu pas dalam interaksi sosial verbal.',
                        'is_correct' => false,
                    ],
                ]),
                'pop_time' => '135',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'submoduleSubject_id' => 2,
                'title' => 'Komunikasi Reseptif',
                'instruction' => 'Memetakan kemampuan komunikasi reseptif anak akan berguna untuk?',
                'answers' => json_encode([
                    [
                        'no' => 1,
                        'text' => 'Memahami kesulitan menyatakan emosi yang dialami anak.',
                        'explanation' =>
                            'Anak autistik bisa mengalami kesulitan belajar emosi. Namun, menyatakan emosi adalah komponen komunikasi ekspresif, bukan reseptif.',
                        'is_correct' => false,
                    ],
                    [
                        'no' => 2,
                        'text' =>
                            'Mengidentifikasi level pemahaman reseptif, yang akan digunakan untuk menentukan target dan level belajar pemahaman anak.',
                        'explanation' =>
                            'Contohnya, jika anak autistik mengalami kesulitan memahami konsep abstrak, maka proses belajar dan intervensi anak akan diupayakan agar tidak banyak menggunakan kata-kata abstrak atau sulit.',
                        'is_correct' => true,
                    ],
                ]),
                'pop_time' => '108',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'submoduleSubject_id' => 3,
                'title' => 'Intervensi Matriks',
                'instruction' => 'Mengapa intervensi autisme perlu didesain secara individual?',
                'answers' => json_encode([
                    [
                        'no' => 1,
                        'text' =>
                            'Kebutuhan masing-masing individu berbeda-beda, maka penanganannya harus dibuat secara individual',
                        'explanation' =>
                            'Dengan didesain secara individual, maka kebutuhan intervensinya akan disesuaikan dengan target  dan kemampuan individual.',
                        'is_correct' => true,
                    ],
                    [
                        'no' => 2,
                        'text' =>
                            'Perencanaan intervensi dan rekaman perkembangan individu autisme tidak dilakukan secara organis.',
                        'explanation' =>
                            'Perencanaan intervensi dan rekaman perkembangan individu autisme justru dilakukan secara organis, maka dokumennya selalu bisa diupdate. Karena inilah planning matrix disebut sebagai dokumen dinamis/hidup.',
                        'is_correct' => false,
                    ],
                ]),
                'pop_time' => '248',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'submoduleSubject_id' => 4,
                'title' => 'Pembelajaran Terstruktur',
                'instruction' => 'Mengapa kesulitan komunikasi pragmatis menjadi persoalan bagi anak autistik?',
                'answers' => json_encode([
                    [
                        'no' => 1,
                        'text' =>
                            'Mereka jadi kurang memahami aturan dan kesulitan memunculkan perilaku yang tepat dalam situasi sosial.',
                        'explanation' =>
                            'Kelemahan komunikasi pragmatis membuat mereka cenderung sulit memahami informasi implisit, dan sebagai akibatnya  membuat mereka sering tampak ‘aneh’.',
                        'is_correct' => true,
                    ],
                    [
                        'no' => 2,
                        'text' => 'Mereka jadi kurang percaya diri sehingga berdampak menyangkal interaksi sosial.',
                        'explanation' =>
                            'Pada umumnya, anak autistik sulit memahami tanda sosial sehingga menjadi canggung atau sulit memunculkan perilaku adaptif sesuai harapan sosial yang kurang jelas. Tapi persoalan ini bukan karena mereka berniat menyangkal sosial.',
                        'is_correct' => false,
                    ],
                ]),
                'pop_time' => '202',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'submoduleSubject_id' => 7,
                'title' => 'Evaluasi Komunikasi Level 1',
                'instruction' => 'Target kemampuan komunikasi level 1 adalah:',
                'answers' => json_encode([
                    [
                        'no' => 1,
                        'text' => 'Membangun perbendaharaan kata-kata fungsional.',
                        'explanation' =>
                            'Target di level I, anak bisa menguasai sekitar 100 kata yang fungsional dipakai sehari-hari, baik dalam komunikasi reseptif dan ekspresif.',
                        'is_correct' => true,
                    ],
                    [
                        'no' => 2,
                        'text' => 'Membangun kemampuan reseptif.',
                        'explanation' =>
                            'Dalam level I, yang perlu dibangun selain kemampuan eksresi, juga kemampuan pemahaman (komunikasi reseptif).',
                        'is_correct' => false,
                    ],
                ]),
                'pop_time' => '161',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'submoduleSubject_id' => 7,
                'title' => 'Evaluasi Skoring',
                'instruction' => 'Kapan diberikan skor ++ (2 plus)?',
                'answers' => json_encode([
                    [
                        'no' => 1,
                        'text' => 'Ketika anak mampu merespon benar',
                        'explanation' => 'Jika masih mendapatkan bantuan, skor yang didapat + (1 plus).',
                        'is_correct' => false,
                    ],
                    [
                        'no' => 2,
                        'text' => 'Ketika anak mampu secara mandiri memberikan respon benar',
                        'explanation' =>
                            '2 plus diberikan sebagai indikasi kemampuan belajar telah terjadi. Namun dibutuhkan konsistensi mampu secara mandiri (diatas 80% benar).',
                        'is_correct' => true,
                    ],
                ]),
                'pop_time' => '416',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
