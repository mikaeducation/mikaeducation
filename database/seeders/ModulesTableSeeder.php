<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ModulesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('modules')->insert([
            [
                'module_title' => 'Belajar Komunikasi Autistik dengan MIKA',
                'module_description' => 'Pembelajaran ini bertujuan untuk memperdalam pemahaman mengenai bagaimana karakteristik autisme mempengaruhi proses belajar komunikasi serta pengembangan keterampilan komunikasi pada individu autistik. Peserta akan diajak mengidentifikasi enam karakteristik utama autisme, yakni komunikasi, interaksi sosial, perilaku berulang, bermain, pemrosesan informasi/gaya belajar, dan kemampuan motorik yang menjadi dasar dalam melakukan observasi menggunakan pendekatan asesmen matriks perencanaan (planning matrix). Selain itu, pembelajaran juga akan membahas penerapan pendekatan belajar terstruktur melalui Treatment and Education of Autistic and Communication related handicapped Children (TEACCH), yang menjadi landasan penggunaan alat bantu visual, baik berupa teknologi sederhana (low-tech) maupun canggih (high-tech), dalam mendukung proses belajar komunikasi. Peserta akan diperkenalkan pada aplikasi MIKA 1.0, termasuk cara mengunduh dari Google Play Store, melakukan registrasi, mengisi data terapis dan anak, serta menyusun matriks perencanaan pembelajaran anak. Selanjutnya, peserta akan belajar mengidentifikasi kemampuan komunikasi anak autistik yang menjadi titik awal dalam empat tahap belajar komunikasi di MIKA 1.0 (tahap I–IV). Pada akhir pembelajaran, peserta diharapkan mampu mengadministrasi, melakukan skoring, dan menginterpretasikan data dari MIKA 1.0 sebagai sarana pendukung pembelajaran komunikasi yang efektif bagi individu autistik.',
                'module_point' => json_encode([
                    "Pemahaman akan Gangguan Spektrum Disorder",
                    "Pemahaman tentang Berbagai Karakteristik Komunikasi Autistik",
                    "Pendampingan metode observasi, pencatatan karakteristik hingga dampak strategi perencanaan terhadap proses belajar komunikasi Autistik",
                    "Pendekatan komunikasi dalam membantu proses belajar komunikasi anak",
                    "Pendampingan administrasi dan intruksi penggunaan alat bantu visual MIKA 1.0",
                    "Pendampingan penugasan dan evaluasi seputar pembelajaran yang ditugaskan secara mandiri"
                ]),
                'module_publisher' => 'Media Visual Komunikasi Anak',
                'module_publisher_logo' => 'images/logo-1.png',
                'module_publisher_name' => 'Media Visual Komunikasi Anak',
                'module_publisher_banner' => 'images/bg5.jpg',
                'module_publish_date' => Carbon::parse('12 November 2024')->format('Y-m-d'),
                'module_category' => 'Komunikasi & Visual',
                'mainSubject_num' => 4,
                'module_level' => 2,  // 1: Dasar, 2: Dasar-Menengah, 3: Menengah, 4: Menengah-Tinggi, 5: Tinggi
                'module_type' => true,  // true untuk tipe berulang, false untuk tidak berulang
                'module_rating' => 4.8, //Sementara ada isinya, nanti akan bergantung pada table lain/yang mengatur reviews dan rating dari pengguna
                'module_status' => true,  // true untuk Tersedia, false jika tidak tersedia/berarti tidak ditampilkan
                'module_certificate' => 'images/sample-sertificate.png',
                'module_teaser' => 'videos/MIKA-tesear.mp4',
                'module_introduce' => true, //True jika ada pengenalan, false jika tidak ada
                'module_asessment' => true,  // True jika modul ini ada penilaian, false jika tidak ada penilaian
                'moduleAsessmen_num' => 2,  // Terdiri dari pretest dan posttest, 1 berarti hanya ada salah satunya, 2 berarti ada keduanya
                'module_practice' => true,  // True jika ada latihan/simulasi, False jika tidak ada latihan
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan modul-modul lainnya di sini
        ]);
    }
}
