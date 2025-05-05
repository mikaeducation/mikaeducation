<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class QuestionBankTableSeeder extends Seeder
{
    public function run(): void
    {

        DB::table('question_bank')->truncate();

        $now = Carbon::now();

        $prePostQuestions = [
            [
                'question_text' => 'Apakah yang dimaksud dengan spektrum dalam autisme?',
                'answers' => [
                    'Setiap warna dalam Pelangi ada di dalam spektrum autisme',
                    'Autistik memiliki tiga gejala utama, gangguan social, kesulitan komunikasi dan munculnya persoalan perilaku',
                    'Pelangi membuat Autisme sulit didiagnosa dan membutuhkan bantuan medis obat-obatan untuk melakukan treatment',
                    'Ada banyak jenis autisme, maka penting untuk memahami apa jenis autisme yang dialami oleh anak kita',
                    'Setiap individu autistik memiliki karakteristik autisme berbeda-beda, maka kebutuhan belajar dan terapinya berbeda-beda'
                ],
                'correct' => 'E'
            ],
            [
                'question_text' => 'Andi menyukai puzzle dan ia bisa bermain puzzle selama berjam-jam...',
                'answers' => [
                    'Penyakit karena masalah diet dan makanan yang salah/keracunan',
                    'Problem penyesuaian karena minat terbatas dan perilaku berulang',
                    'Gangguan karena pengasuhan orang tua yang kurang konsisten',
                    'Kesulitan belajar karena keterbatasan pemahaman',
                    'Persoalan perilaku agresif dan tantrum'
                ],
                'correct' => 'B'
            ],
            [
                'question_text' => 'Berikut adalah persoalan yang menyebabkan anak autistik sulit berteman...',
                'answers' => [
                    'Kesulitan komunikasi',
                    'Kesulitan social',
                    'Kesulitan bermain',
                    'Kesulitan perilaku',
                    'Kesulitan belajar'
                ],
                'correct' => 'B'
            ],
            [
                'question_text' => 'Berikut adalah karakteristik yang perlu masuk dalam assessmen Matriks Perencanaan...',
                'answers' => [
                    'Kesulitan sensoris',
                    'Kesulitan theory of mind',
                    'Kesulitan central coherence',
                    'Kesulitan pemrosesan informasi',
                    'Semua benar'
                ],
                'correct' => 'E'
            ],
            [
                'question_text' => 'Dalam administrasi MIKA 1.0, perlahan-lahan, prompt atau dukungan akan dikurangi...',
                'answers' => [
                    'Jadwal visual',
                    'Struktur visual',
                    'Struktur lingkungan fisik',
                    'Stimulus belajar terstruktur',
                    'Sistem belajar mendukung kemandirian'
                ],
                'correct' => 'E'
            ],
            [
                'question_text' => 'Manakah yang BUKAN elemen kemampuan komunikasi?',
                'answers' => [
                    'Kemampuan Pra-sosial',
                    'Kemampuan Pra-komunikasi',
                    'Komunikasi reseptif',
                    'Komunikasi ekspresif',
                    'Kemampuan Pragmatis'
                ],
                'correct' => 'A'
            ],
            [
                'question_text' => 'Berikut adalah tahapan perkembangan komunikasi secara berturut-turut...',
                'answers' => [
                    'Mengembangkan dialog/percakapan Menambah perbendaharaan kata; Menyusun kalimat sederhana; Menyusun kalimat kompleks',
                    'Menyusun kalimat kompleks; Menyusun kalimat sederhana; Menambah perbendaharaan kata; Mengembangkan dialog/percakapan',
                    'Menyusun kalimat sederhana; Menyusun kalimat kompleks; Mengembangkan dialog/percakapan; Menambah perbendaharaan kata',
                    'Menambah perbendaharaan kata; Menyusun kalimat sederhana; Menyusun kalimat kompleks; Mengembangkan dialog/percakapan',
                    'Semua benar'
                ],
                'correct' => 'D'
            ],
            [
                'question_text' => 'Berikut adalah yang BUKAN praktik baik belajar komunikasi yang ada dalam MIKA 1.0:',
                'answers' => [
                    'Kata yang digunakan bisa disesuaikan dengan Bahasa sehari-hari yang digunakan anak',
                    'Visual bisa menggunakan foto agar lebih realistis',
                    'Anak perlu menguasai seluruh kata dalam MIKA 1.0 untuk dianggap mampu berkomunikasi',
                    'Perbendaharaan kata dimulai dengan kata kerja sehari-hari',
                    'Mempelajari kata lebih fungsional jika dikelompokkan dalam topik'
                ],
                'correct' => 'C'
            ],
            [
                'question_text' => 'Penggunaan alat bantu visual dibutuhkan dalam belajar komunikasi...',
                'answers' => [
                    'Low tech akan memakan waktu dan energi',
                    'High tech bisa merekam data real time',
                    'Data digunakan untuk riset teknologi belajar autistik',
                    'Administrasi stimulus menjadi terstandar',
                    'Meminimalisir kesalahan layanan dan pendidikan'
                ],
                'correct' => 'E'
            ],
            [
                'question_text' => 'Berikut adalah BUKAN keunggulan skoring, monitoring dan evaluasi MIKA 1.0:',
                'answers' => [
                    'Memberikan rekaman data anak',
                    'Mengetahui kemajuan anak',
                    'Mengetahui kemunduran anak',
                    'Menjamin perkembangan komunikasi',
                    'Data anak adalah dokumen hidup'
                ],
                'correct' => 'D'
            ],
        ];

        foreach ([1 => 'Asesmen I', 2 => 'Asesmen II'] as $asid => $title) {
            foreach ($prePostQuestions as $q) {
                DB::table('question_bank')->insert([
                    'module_id' => 1,
                    'asessment_id' => $asid,
                    'question_for' => $title,
                    'question_text' => $q['question_text'],
                    'answerA' => $q['answers'][0],
                    'answerB' => $q['answers'][1],
                    'answerC' => $q['answers'][2],
                    'answerD' => $q['answers'][3],
                    'answerE' => $q['answers'][4],
                    'correct_answer' => $q['answers'][ord($q['correct']) - ord('A')],
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
            }
        }

        $evaluation_questions = [
            // Bagian 2 - Keyakinan penggunaan MIKA
            "Saya mampu menyusun Matriks perencanaan Anak",
            "Mengamati dan mencatat gejala klinis anak",
            "Mengamati dan mencatat karakteristik autisme anak",
            "Mengetahui kemampuan komunikasi reseptif anak saat ini",
            "Mengetahui kemampuan komunikasi ekspresif anak saat ini",
            "Merencanakan tujuan dan proses belajar komunikasi bagi anak",
            "Mengevaluasi progress belajar komunikasi anak",
            "Mengetahui kapan menghilangkan prompt agar anak lebih mampu berkomunikasi mandiri",
            "Mengetahui melakukan skoring MIKA 1.0",
            "Mengidentifikasi dukungan dan bantuan yang dibutuhkan dalam proses terapi/pendidikan anak",
            // Bagian 3 - Kepuasan pengguna
            "Registrasi akun",
            "Pemahaman mengenai hak dan kewajiban saya sebagai pembelajar pengguna MIKA education",
            "Kemudahan akses sumber belajar",
            "Kemudahan penggunaan fungsi-fungsi di website",
            "Kemudahan merespon/mengisi tugas-tugas",
            "Materi yang diberikan sangat jelas dan mudah dimengerti",
            "Contoh-contoh yang diberikan sangat relevan untuk saya terapkan pada pendidikan/terapi yang saya lakukan bersama anak",
            "Bacaan yang diberikan relevan bagi saya untuk terus mempelajari autisme, TEACCH dan MIKA 1.0",
            "Asesmen di MIKA education memberikan informasi tentang kemampuan saya memahami MIKA 1.0",
            "Saya mampu berdiskusi dengan rekan belajar, dan itu bermanfaat untuk belajar saya",
            "Saya mudah melakukan registrasi terapis dan anak",
            "Saya mudah memahami fungsi di MIKA 1.0",
            "Saya memahami tahapan dan administrasi belajar komunikasi I-IV di MIKA 1.0",
            "Saya bisa melakukan skoring dan menyimpan data anak",
            "Saya bisa mengakses kembali data yang tersimpan di MIKA 1.0 dengan mudah"
        ];

        // Likert untuk pertanyaan 1-10 (keyakinan)
        $likert_confidence = [
            "Sama sekali merasa tidak mampu menerapkan (1)",
            "Tidak terlalu yakin mampu menerapkan (2)",
            "Dicoba saja (3)",
            "Cukup yakin mampu menerapkan (4)",
            "Sangat yakin mampu menerapkan (5)"
        ];

        // Likert untuk pertanyaan 11-25 (kepuasan)
        $likert_satisfaction = [
            "Sama sekali tidak puas (1)",
            "Tidak terlalu puas (2)",
            "Biasa saja (3)",
            "Cukup puas (4)",
            "Sangat puas (5)"
        ];

        $now = now();

        foreach ($evaluation_questions as $i => $q) {
            $likert = $i < 10 ? $likert_confidence : $likert_satisfaction;

            DB::table('question_bank')->insert([
                'module_id' => 1,
                'asessment_id' => 3,
                'question_for' => 'Evaluation',
                'question_text' => $q,
                'answerA' => $likert[0],
                'answerB' => $likert[1],
                'answerC' => $likert[2],
                'answerD' => $likert[3],
                'answerE' => $likert[4],
                'correct_answer' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
