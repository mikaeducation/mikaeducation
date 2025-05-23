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
                                        ['src' => 'https://youtu.be/CNDeglWTg28'])
                                    </div>
                                </div>
                            </div>
                            <div class="w-full py-8 border-y-2 border-bluee3 space-y-4 text-lg">
                                <div class="w-full flex flex-col text-justify">
                                    <p class="">Salam saya Retno, <br>Sekarang saya akan memaparkan tentang pendekatan belajar yang terstruktur pada anak autistik.
                                        <br><br>Apa itu belajar yang terstruktur? Belajar terstruktur komunikasi dapat menerapkan prinsip prinsip TEACCH. TEACCH adalah sebuah pendekatan pengajaran yang terstruktur dan berfokus pada pengembangan keterampilan serta kekuatan anak dengan autisme. Belajar terstruktur juga akan membantu anak belajar berkomunikasi secara mandiri, artinya penggunaan bantuan atau prompting dalam komunikasi diberikan secara seksama dengan tujuan anak tetap mandiri berkomunikasi fungsional. 
                                        <br><br>Anak autistik selain mengalami kesulitan komunikasi juga kesulitan mengorganisasi di berbagai bidang, maka dibutuhkan sistem belajar terstruktur untuk mendukung kemampuan mengorganisasi informasi baik di kelas atau di lingkungan belajar anak. Dampaknya lingkungan belajar terstruktur menjadi ramah terhadap anak autistik. 
                                        <br>Pendekatan belajar terstruktur TEACCH terdiri dari empat komponen utama yaitu struktur lingkungan fisik, struktur visual, jadwal kegiatan dan sistem kerja. Saya akan menguraikan satu per satu. 
                                        <br><br>Pertama struktur lingkungan fisik, struktur lingkungan fisik akan membantu memahami dan mengantisipasi kegiatan sehari-hari secara lebih jelas. Prinsip utamanya adalah menciptakan lingkungan yang terorganisir secara visual untuk membantu individu memahami tugas dan rutinitas dengan lebih baik. Struktur lingkungan fisik penting untuk membantu mengajarkan komunikasi karena dengan adanya struktur fisik akan membantu mengurangi kecemasan. Selain itu akan mendukung pemahaman visual, mendorong kemandirian, dan akan meningkatkan fokus pada kegiatan yang spesifik.
                                        <br><br>Prinsip kedua adalah struktur visual, struktur visual menjadi dasar penting dalam mengembangkan komunikasi pada anak dengan autistik. Penggunaan struktur visual membantu anak autistik dalam memanfaatkan kekuatan mereka sebagai pembelajar visual. Salah satu alat bantu komunikasi yang menggunakan teknologi tinggi dan berbahasa Indonesia adalah MIKA yang dapat menjadi media alternatif bagi anak anak autistik untuk meningkatkan keterampilan komunikasi mereka.
                                        <br><br>Prinsip ketiga adalah kegiatan yang terstruktur secara visual, hal ini termasuk jadwal visual, instruksi visual, pengorganisasian visual, dan kejelasan visual. Jadwal visual adalah agenda kegiatan yang diinformasikan secara visual bisa berupa gambar atau tulisan. Instruksi visual dapat berupa tulisan atau gambar yang memberikan informasi tentang tahapan-tahapan penyelesaian tugas. Sedangkan pengorganisasian visual melibatkan pengaturan ruang dan barang-barang yang terorganisasi secara visual. Kejelasan visual membantu melibatkan siswa dengan informasi yang relevan untuk meningkatkan pemahaman dan kemampuan mereka.
                                        <br><br>Prinsip keempat adalah sistem kerja, sistem kerja akan membantu anak autistik memahami apa yang harus dilakukan, bagaimana melakukannya, dan kapan tugas selesai serta apa yang harus dilakukan jika tugas itu sudah selesai. Sistem kerja menyediakan instruksi dan petunjuk visual yang bisa membantu mengarahkan pengerjaan tugas secara nonverbal sebagai bagian dari anak autis berkomunikasi.
                                        <br><br>Keempat prinsip TEACCH itu harus ada dalam pembelajaran yang terstruktur. Berikutnya saya akan menjelaskan pentingnya kemandirian dalam komunikasi. Perlu dipahami bahwa tujuan penting pengajaran anak autistik adalah mencapai kemandirian dalam komunikasi fungsional, maka digunakan alat bentuk visual seperti gambar, simbol, atau perangkat AAC. Alat bantu visual ini memberikan dukungan yang jelas serta membantu dalam mengorganisasi dan meningkatkan kemandirian mereka. Hal ini akan membuat mereka tidak perlu selalu bergantung pada orang lain dan membantu mencegah atau menurunkan kecemasan. Alat bantu visual juga akan membantu meningkatkan rasa percaya diri anak dan mendorong keterlibatan aktif dalam interaksi sosial sehari-hari. Walaupun anak mengalami autisme yang tergolong high functioning dan sudah bisa berkomunikasi, tetapi alat bantu visual tetap akan berguna membantu mereka memahami apa yang harus dilakukan ketika mereka stres dan cemas.
                                        <br><br>Selain alat bantu visual, prompt adalah dukungan yang bisa digunakan untuk mencapai tujuan pembelajaran yaitu kemampuan komunikasi mandiri. Prompting dapat dilakukan dengan berbagai tingkat bantuan, dari prompt fisik misalnya mengarahkan tangan anak hingga prompt verbal misalnya memberikan kata kunci. Seiring waktu prompt ini perlu dikurangi secara bertahap untuk mendorong kemandirian komunikasi pada anak.
                                        <br><br>Dapat disimpulkan bahwa belajar terstruktur TEACCH sangat dibutuhkan dalam belajar komunikasi bagi anak autistik.
                                        <br>Demikian akhir belajar kita tentang belajar terstruktur, berikutnya kita akan belajar tentang administrasi MIKA.
                                        Selamat belajar……
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
