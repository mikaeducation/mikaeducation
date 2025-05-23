<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-Learning | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @vite('public/assets/css/style.css')
        {{-- <script>document.documentElement.classList.add('js')</script> --}}
    </head>
    <body class="font-futura w-full min-h-screen flex flex-col relative">
        @include('includes.components.elearning.course.header')
    
        <section class="w-full flex-1 flex flex-col items-center justify-center text-blue31">
            <div class="w-full flex-grow flex items-start justify-start">
                {{-- Left Content --}}
                <div id="left" class="w-3/4 flex-1 max-h-[100vh] lg:max-h-[84vh] flex flex-col overflow-y-auto scrollbar scrollbar-thumb scrollbar-thumb-rounded scrollbar-thumb-blue31 scrollbar-track-gray-100">
                    <div class="w-full h-full flex flex-col pl-12 md:pr-12 mt-10">
                        <div class="h-full w-full space-y-8">
                            <div class="w-full h-[300px] md:h-[400px] lg:h-[500px] xl:h-[575px] flex bg-black rounded">
                                <div class="w-full h-full flex justify-center items-center">
                                    <div class="aspect-w-16 aspect-h-9 w-full h-full flex justify-center items-center">
                                        @include('includes.content.elearning.course.video-player', 
                                        ['src' => 'https://youtu.be/glpDKlFQ-rQ'])
                                    </div>
                                </div>
                            </div>
                            <div class="w-full py-8 border-y-2 border-bluee3 space-y-4 text-lg">
                                <div class="w-full flex flex-col text-justify">
                                    <p class="">Salam, saya Margaretha<br>Kita akan melanjutkan bagian dua dari materi pembelajaran menggunakan aplikasi MIKA 1.0 sebagai alat terapi. Pada materi kedua ini kita akan fokus pada administrasi belajar dan skoring diaplikasi MIKA.
                                        <br><br>Untuk memulai sesi terapi diaplikasi MIKA anda perlu login dulu sebagai terapis. Isikan username dan password yang telah didaftarkan pada saat registrasi, klik tombol login, jika login berhasil akan muncul tampilan beranda user seperti yang ditampilkan pada gambar berikut.
                                        <br><br>Untuk memulai terapi, klik bagian kiri yaitu mulai terapi dengan MIKA. Selanjutnya tekan menu tiga garis mendatar di bagian kiri lalu pilih menu pilih anak yang akan mengikuti sesi terapi level satu. Jika sebelumnya telah memilih anak melalui menu beranda anak maka sesi terapi dapat diakses melalui menu mulai MIKA. Gambar yang di bawah menunjukkan tampilan awal untuk anak dengan level komunikasi satu diaplikasi MIKA terdapat sejumlah kategori di level satu, di antaranya adalah:
                                        <ul class="list-disc pl-5">
                                            <li>Bermain Satu</li>
                                            <li>Bermain B</li>
                                            <li>Kata Kerja A</li>
                                            <li>Kata Kerja B</li>
                                            <li>Dan Keluarga A</li>
                                        </ul> 
                                        Terapis dapat memilih salah satu kategori untuk tiap sesi terapi. Setelah kategori yang diinginkan dipilih selanjutnya aplikasi MIKA akan memunculkan daftar kata, misalnya di kategori bermain a terdapat kata air, balon, bola, boneka, gelembung, kertas, mainan, plastisin, tali, dan tongkat. Terapis dapat memulai sesi terapi dengan memilih salah satu kata. Selanjutnya anak diminta untuk memilih kata yang dimaksud sesuai dengan yang disampaikan oleh terapis. Setelah anak memilih, selanjutnya akan muncul dialog penilaian trial sebagai berikut. Terapis memilih penilaian trial sesuai dengan performansi anak. Ada tiga jenis penilaian 
                                        <ul class=" list-decimal pl-5">
                                            <li>Salah (0) jika anak salah memilih kata</li>
                                            <li>Benar Dengan Bantuan (1) jika anak dapat memilih kata yang benar tapi dengan mendapatkan bantuan dari terapis</li>
                                            <li>Benar Tanpa Bantuan (2) artinya anak dapat memilih kata yang benar tanpa bantuan</li>
                                        </ul> 
                                        Selanjutnya terapis dapat mengulang proses yang sama untuk kata-kata yang lainnya sesuai dengan kebutuhan. 
                                        <br><br>Setelah satu sesi terapi selesai dilaksanakan terapis melakukan penilaian secara keseluruhan pada satu sesi tersebut, caranya dengan menekan ikon penilaian diterapi pojok kanan atas. Beri nilai sesuai dengan performansi anak dan terapis dapat menambahkan catatan detail tentang performansi anak selama sesi terapi. Klik tombol submit untuk menyimpan hasil penilaian terapi, hasil penilaian terapi dapat dilihat kembali melalui menu histori anak atau histori terapis. Hasil penilaian ini dapat digunakan oleh terapis untuk menelusuri perkembangan pembelajaran anak sekaligus mengevaluasi metode dan strategi pembelajaran yang dilakukan. 
                                        <br><br>Selanjutnya untuk sesi terapi level dua cara yang sama mulai dengan menekan menu tiga garis mendatar di pojok kiri. Pilih penuh pilih anak yang akan mengikuti sesi terapi level dua. Jika sebelumnya terapis sudah memilih anak maka sesi terapi dapat diakses melalui menu mulai MIKA. Gambar berikut ini menunjukkan tampilan awal untuk anak dengan level komunikasi dua. Terdapat sejumlah board pada level dua di antaranya ada: 
                                        <ul class="list-disc pl-5">
                                            <li>Board Mainan </li>
                                            <li>Board Tubuh </li>
                                            <li>Board Aktivitas </li>
                                            <li>Board Perasaan</li>
                                        </ul>
                                        Terapis dapat memilih board yang diinginkan. Selanjutnya aplikasi MIKA akan memunculkan daftar kata untuk tiap board yang sudah dipilih, contohnya adalah board aktivitas. Pada level dua ini anak akan mempelajari komunikasi dalam dua kata misalnya saya membaca, dia menyusun, kamu membaca. Pada halaman yang sama anak akan memilih gambar sesuai dengan arahan dari terapis. Setelah anak memilih urutan gambar selanjutnya akan muncul dialog penilaian trial sebagai berikut. Penilaian ini sama seperti di level satu, ada tiga jenis penilaian yaitu salah (0), benar dengan bantuan (1), dan benar tanpa bantuan (2). Terapis menilai sesuai dengan performansi anak. Selanjutnya terapis dapat melanjutkan sesi terapi dengan kombinasi dua kata lainnya 
                                        <br><br>Setelah satu sesi terapi selesai dilaksanakan selanjutnya terapis melakukan penilaian secara keseluruhan untuk satu sesi terapi. Caranya dengan menekan ikon penilaian terapi di pojok kanan atas. Terapis memberikan nilai sesuai dengan performansi anak dan terapis juga menambahkan catatan detail tentang performansi anak selama sesi terapi. Klik tombol submit untuk menyimpan hasil penilaian terapi dan hasil penilaian terapi ini juga dapat dilihat kembali melalui menu histori anak atau histori terapis. 
                                        <br><br>Untuk level tiga dan level empat caranya sama seperti pada level dua. Terapis memilih menu tiga garis mendatar di bagian kiri. Pilih anak yang akan mengikuti sesi terapi level tiga atau level empat. Jika selanjutnya telah memilih anak maka sesi terapi dapat diakses melalui menu mulai MIKA. Selanjutnya pilih board yang diinginkan, aplikasi MIKA akan memunculkan board yang berisi kombinasi kata sesuai dengan board yang telah dipilih oleh terapis. Pada halaman terapi anak akan memilih gambar sesuai arahan terapis. Di level tiga ini terapis akan menyampaikan tiga kata dan anak akan memilih kata-kata yang telah disampaikan oleh terapis sesuai dengan urutan yang benar. Selanjutnya akan muncul penilaian trial yaitu salah (0), satu benar dengan bantuan (1), dan benar tanpa bantuan (2). Terapis memilih penilaian trial sesuai dengan performansi anak. 
                                        <br><br>Setelah satu sesi terapi selesai dilaksanakan selanjutnya terapis melakukan penilaian secara keseluruhan, caranya sama dengan menekan ikon penilaian terapi di pojok kanan atas. Beri nilai sesuai performansi anak. Terapis juga dapat menambahkan catatan detail tentang performansi anak selama sesi terapi. Klik tombol submit untuk menyimpan hasil penilaian terapi. Hasil penilaian terapi dapat dilihat kembali melalui menu histori anak atau histori terapis. 
                                        <br><br>Selanjutnya untuk berpindah level dari satu level ke level selanjutnya, caranya adalah dengan klik tombol level di sisi pojok kanan bawah dari tampilan kategori untuk level satu atau tampilan board di level dua tiga atau empat. 
                                        <br><br>Demikian panduan dasar untuk memulai sesi terapi dan melakukan penilaian dengan menggunakan aplikasi MIKA 1.0
                                        <br>selamat mencoba dan selamat belajar….
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Right Content --}}
                @include('includes.components.elearning.course.section')
            </div>
        </section>

    @include('includes.components.elearning.course.footer')
    
    </body>
</html>
