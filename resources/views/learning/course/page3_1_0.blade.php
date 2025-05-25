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
                                    @include('includes.content.elearning.course.video-player', 
                                        ['src' => 'https://s3-id-jkt-1.kilatstorage.id/belajar-komunikasi-autistik/modul-3a.mp4'])
                                </div>
                            </div>
                            <div class="w-full py-8 border-y-2 border-bluee3 space-y-4 text-lg">
                                <div class="w-full flex flex-col text-justify">
                                    <p class="">Salam bertemu lagi dengan saya Mida
                                        <br><br>Sekarang waktunya kita membahas salah satu karakteristik besar autisme yaitu komunikasi. Apa saja sih karakteristiknya?
                                        <br>1. Pra Komunikasi
                                        <br>2. Komunikasi Reseptif
                                        <br>3. Komunikasi Ekspresif
                                        <br>4. Pragmatisme 
                                        <br>5. Strategi (alat bantu visual)
                                        <br><br> <p class="w-full p-2 mb-2 bg-bluee3"><span class="font-medium">Karakteristik Pra Komunikasi</span> - Keterampilan dasar Anak dengan Autimse</p>       
                                        Komunikasi merupakan proses penyampaian dan penerimaan informasi dengan 2 cara, yang pertama adalah linguistik yaitu bahasa lisan atau tertulis dan yang kedua adalah non linguistik yaitu menggunakan bahasa tubuh, ekspresi wajah, gerakan tubuh, gambar maupun simbol.
                                        <br><br>Pada konteks umum kita memahaminya. Komunikasi merupakan sebuah pesan yang disampaikan oleh pembawa pesan dan bisa diterima oleh penerima pesan dan pesan tersebut bisa dipahami dan diterima dengan tepat. Kita akan membahas 5 sub-bahasan dalam karakteristik komunikasi pada anak autistik yang pertama, kemampuan pra-komunikasi yang meliputi keterampilan dasar yang harus dikuasai sebelum mereka dapat berkomunikasi secara efektif.
                                        <br><br>Keterampilan dasar ini meliputi kontak mata. Melakukan perhatian bersama melihat ke arah orang lain, menunjuk dan berbagi kesenangan. Kemampuan imitasi atau meniru, menunjuk meraih perhatian dan juga melakukan peniruan. Anak autistik memiliki kelemahan dalam melakukan kemampuan perhatian bersama. Saat berkomunikasi kesulitan untuk melihat orang lain dan lebih banyak melihat ke arah lain. Selain itu juga kesulitan dalam menggunakan dan memahami gestur yang sesuai serta memiliki keterbatasan dalam fungsi komunikasi.
                                        <br><br>Dampak yang muncul di antaranya ketika anak kesulitan dalam melakukan pra komunikasi adalah orang lain bisa saja menganggap anak kurang sopan karena saat diajak berbicara, anak melihat ke arah lain. Hal lain yang menjadi perhatian anak adalah akan tertuju pada satu benda saja dan akan kesulitan merespon balik dengan tepat ketika orang berkomunikasi menggunakan gesture.
                                        <br><br>Baik, kita telah belajar tentang Pra Komunikasi, berikutnya kita akan belajar tentang Komunikasi Ekspresif.
                                        <br>Selamat belajar…..
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

    <script>
    </script>
