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
                                        ['src' => 'https://s3-id-jkt-1.kilatstorage.id/belajar-komunikasi-autistik/modul-3d.mp4'])
                                    </div>
                                </div>
                            </div>
                            <div class="w-full py-8 border-y-2 border-bluee3 space-y-4 text-lg">
                                <div class="w-full flex flex-col text-justify">
                                    <p><p class="p-2 bg-bluee3 mb-2"><span class="font-medium">Karakteristik Pragmatis</span> - Komunikasii Pragmatis Anak dengan Autimse</p>                   
                                        Hallo, selamat datang kembali di sesi lanjutan tentang komunikasi pada anak autisme, bersama dengan saya Retno. Sebelumnya kita telah membahas keterampilan pendahuluan, komunikasi reseptif, dan ekspresif, kini kita akan fokus pada komunikasi pragmatis. 
                                        <br><br>Komunikasi pragmatis mengacu kepada penggunaan bahasa dalam konsteks sosial secara luas. Pada anak autisme, keterampilan ini sering menjadi tantangan karena kesulitan mereka memahami aturan sosial yang mengatur cara komunikasi sehari – hari.  Beberapa karakteristik dari komunikasi pragmatis adalah : 
                                        <ul class="list-decimal pl-5">
                                            <li>Menyambut dan memberi salam. Tantangan untuk anak autisme adalah kesulitan untuk secara spontan mengatakan ‘hallo’ ketika bertemu dengan seseorang. Mengucapakan ‘selamat tinggal’ ketika akan berpisah. Mereka mungkin akan menyapa dengan cara yang tidak tepat atau melewatkan begitu saja.</li>
                                            <li>Menggunakan isyarat tubuh. Penggunaan isyarat tubuh adalah bahasa non verbal yang penting dalam berkomunikasi dan berinteraksi sehari-hari. Anak autis mempunyai kesulitan mengekspresikan perasaan mereka atau mungkin tidak memahami arti dan isyarat tersebut jika digunakan oleh orang lain.</li>
                                            <li>Perhatian langsung adalah kemampuan anak untuk memberikan perhatian yang berfokus pada lawan bicara saat berkomunikasi. Hal ini penting, supaya komunikasi berjalan efektif dan anak maupun lawan bicara mampu merespon dengan tepat. Tantangan pada anak autisme adalah kesulitan mereka mempertahankan kontak mata, perhatiannya mudah teralihkan atau mereka hanya terfokus pada satu objek yang menjadi minat mereka.</li>
                                            <li>Kesadaran akan ruang pribadi adalah pemahaman bagaimana setiap orang mempunyai ruang pribadi yang tidak boleh dilanggar. Tantangan pada anak autis adalah tidak menyadari bahwa masing-masing mempunyai ruang pribadi, misalnya berbicara dengan jarak yang sangat dekat, tiba-tiba mengambil barang lawan bicara.</li>
                                        </ul>
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

