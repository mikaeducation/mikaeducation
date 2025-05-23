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
                    <div class="w-full h-full flex flex-col pl-12 md:pr-12 mt-8">
                        <div class="w-full pb-12 text-lg flex flex-col text-justify">
                            <p><p class="p-2 bg-bluee3 mb-2 font-medium text-xl"><span class="underline">Studi Kasus</span> 1 - Budi</p>                   
                                Budi adalah seorang anak laki-laki berusia 5 tahun. Ia didiagnosis ASD pada usia 3 tahun oleh Dokter Anak dan Psikolog Klinis.
                                Sejak usia 2,5 tahun, ia telah menerima terapi komunikasi dan perilaku dari Pusat Terapi Smart Growth.
                                <br><br>Saat ini, kemampuan komunikasinya adalah sebagai berikut: 
                                <ul class="list-disc pl-5">
                                    <li>Budi hanya mengucapkan beberapa huruf dalam satu kata. Ia belum dapat mengucapkan kata-kata yang masing-masing terdiri dari dua suku kata. Misalnya, ketika subjek mengatakan "minum", subjek hanya mengucapkan "num". Selanjutnya, ketika subjek mengatakan kata “mau pergi”, subjek sering mengucapkannya dengan "gi"</li>
                                    <li>Budi sering berbicara dengan gagap. Hal ini karena subjek tidak dapat mengucapkan kata-kata yang ingin diucapkannya sehingga ia gagap dan lambat</li>
                                    <li>Ketika ia ingin mengucapkan “Aku mau pergi ke sana” dia mengucapkannya dengan “Aku sana”. Dia menghilangkan 2 kata dalam pengucapannya.</li>
                                    <li>Budi tidak fasih dalam komunikasi dua arah. Misalnya, ketika diajak bicara dua arah, ia seringkali diam dan tidak menanggapi pembicaraan atau tidak menjawab pertanyaan yang diajukan lawan bicaranya.</li>
                                    <li>Budi sering mengganti fonem yang tidak dapat diucapkan. Misalnya, pengucapan fonem [c] diganti dengan fonem [k], pengucapan fonem [r] diganti dengan [y], dan pengucapan [ng] diganti dengan [m]. Misalnya, menyebut 'kakak caca' dengan sebutan 'kaka kaka', mengucapkan 'kakak rara' dengan sebutan 'kaka yaya', dan mengucapkan kata "ungu" dengan sebutan "umu".</li>
                                    <li>Budi lambat dalam menerima kalimat yang diucapkan orang lain, perlu diucapkan berulang-ulang agar subjek memahaminya. Misalnya, ketika subjek diminta menutup pintu, perlu diucapkan tiga sampai empat kali agar subjek memahami bahwa ia harus menutup pintu.</li>
                                    <li>Banyak berkomunikasi dengan gestur tubuh atau gerakan tangan. Misalnya, subjek sering mengisyaratkan tangan ke mulut atau perut daripada mengucapkan kata makan, subjek sering mengisyaratkan dengan menunjuk keluar daripada mengatakan bahwa ia ingin keluar.</li>
                                    <li>Dia sering lupa memberikan salam ke Guru, sehingga harus terus diingatkan.</li>
                                </ul><br>
                                <span class="underline text-xl">Tugas untuk Kasus Budi:</span>
                                <ul class="list-decimal pl-5">
                                    <li>Buatlah planning matrix kemampuan komunikasi Budi</li>
                                </ul>
                            </p>
                            <p class="mt-10"><p class="p-2 bg-bluee3 mb-2 font-medium text-xl"><span class="underline">Studi Kasus</span> 2 - Tata</p>                   
                                Tata sudah 3 bulan belajar dibantu dengan MIKA 1.0. Dia adalah anak laki-laki usia 3.5 tahun, yang mendapatkan diagnosa ASD level 1 sejak setahun yang lalu. Ketika dilakukan planning matrix, diketahui bahwa Tata perlu meningkatkan komunikasi mulai Level 1 MIKA 1.0.
                                <br><br>Berikut adalah performasinya dalam sesi MIKA 1.0: 
                                <ul class="list-decimal pl-5">
                                    <li>Bulan pertama: Ia belum mampu membuat kontak mata lebih dari 2 detik. Juga belum mandiri menggunakan kata-kata kerja penting, seperti: “makan”, “minum”, “lagi”, “stop”. Terapis masih menggunakan prompt fisik seperti dorongan tangan atau menunjuk. Ia mampu memahami instruksi kalimat sederhana yang sudah biasa didengarnya di rumah, seperti: “ambil makan”, “pergi sekolah’. Tapi ternyata masih kesulitan mengerjakan instruksi tersebut jika diberikan guru di pusat terapis. Total kata yang mampu dipahaminya: 15 kata.</li>
                                    <li>Bulan kedua: Ia mulai mampu memberikan fokus selama instruksi pendek (2-3 detik) namun hanya jika diberikan terapis yang dikenalnya. Ia mampu menggunakan kata-kata kerja penting, seperti: “makan”, “minum”, “lagi”, “stop” secara mandiri sekitar 5 kali dari 10 latihan per sesi bulan ini. Ia mulai belajar mengerjakan instruksi sederhana: “ambil makan”, “pergi sekolah’, “pakai kaos kaki”, “pipis di wc”. Dalam sesi bulan ini, rata-rata ia berhasil 3 dari 10 trial benar secara mandiri, sedangkan sisanya masih harus diberikan prompt fisik. Total kata yang mampu dipahaminya: 45 kata.</li>
                                    <li>Bulan ketiga: Ia mampu menggunakan kata-kata kerja penting, seperti: “makan”, “minum”, “lagi”, “stop” secara mandiri sekitar 8 kali dari 10 latihan per sesi bulan ini. Ia mulai bisa bekerjasama dengan dua (2) terapis di pusat terapi. Ia bisa mengerjakan secara mandiri instruksi sederhana: “ambil makan”, “pergi sekolah’, “pakai kaos kaki”, “pipis di wc”; dimana 7 dari 10 sudah mampu dilakukan tanpa prompt. Total kata yang mampu dipahaminya: 70 kata.</li>
                                </ul><br>
                                <span class="underline text-xl">Tugas untuk Kasus Tata:</span>
                                <ul class="list-decimal pl-5">
                                    <li>Buatlah skoring kemampuan reseptif dan ekspresifnya</li>
                                    <li>Evaluasi perfomasinya, lalu tentukan apa target terapi/belajar komunikasi Tata berikutnya.</li>
                                </ul>
                            </p>
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
