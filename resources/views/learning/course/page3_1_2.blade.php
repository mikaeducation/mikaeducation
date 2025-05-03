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
                            <div class="w-full h-[300px] md:h-[400px] lg:h-[500px] xl:h-[550px] flex bg-black rounded">
                                <div class="w-full h-full flex justify-center items-center">
                                    <div class="aspect-w-16 aspect-h-9 w-full h-full flex justify-center items-center">
                                        @include('includes.content.elearning.course.video-player', 
                                        ['src' => ''])
                                    </div>
                                </div>
                            </div>
                            <div class="w-full py-8 border-y-2 border-bluee3 space-y-4 text-lg">
                                <div class="w-full flex flex-col text-justify">
                                    <p><p class="p-2 bg-bluee3 mb-2"><span class="font-medium">Karakteristik Reseptif</span> - Komunikasii Reseptif Anak dengan Autimse</p>                        
                                        Sub bahasan kita yang ketiga terkait dengan komunikasi adalah adalah komunikasi reseptif.
                                        <br><br>Komunikasi reseptif merupakan kemampuan komunikasi dengan menggunakan visual seperti memahami gambar, 
                                        foto, instruksi. Memahami sesuatu yang ditanyakan dan cara menjawab dengan ya/tidak, menjawab pertanyaan konsep siapa, apa, kapan, Dimana, 
                                        kenapa dan bagaimana dan juga memahami suatu konsep nomor, bentuk, emosi dan juga lainnya. Kemampuan reseptif ini yaitu bereaksi terhadap nama, 
                                        memahami label/nama untuk benda umum/orang, mengikuti perintah sederhana seperti duduk, jauhi, kemampuan dalam menjawab pertanyaan dasar dan mampu untuk memecahkan masalah. 
                                        <br><br>Pada kemampuan ini anak dengan autism kesulitan untuk memahami pertanyaan yang bervariasi, kesulitan memahami suatu konsep, Bahasa abstrak seperti pribahasa, 
                                        idiom, majas, padan kata maupun lawan kata.
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

    <script>
        document.getElementById('menu-btn').addEventListener('click', function() {
            var menu = document.getElementById('menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });

        const toggleLeftButton = document.getElementById('toggleLeft');
        const toggleRightButton = document.getElementById('toggleRight');
        const leftContent = document.getElementById('left');
        const rightContent = document.getElementById('right');

        toggleLeftButton.addEventListener('click', () => {
            leftContent.classList.add('hidden');
            rightContent.classList.remove('w-3/4');
            rightContent.classList.add('w-full');
            toggleRightButton.style.display = 'block';
        });

        toggleRightButton.addEventListener('click', () => {
            leftContent.classList.remove('hidden');
            rightContent.classList.remove('w-full');
            rightContent.classList.add('w-3/4');
            toggleRightButton.style.display = 'none';
        });



        function showContent(id) {
        // Menghapus border aktif dari semua tombol
        var buttons = document.querySelectorAll('nav button');
        buttons.forEach(function(button) {
            button.classList.remove('border-b-2', 'border-blue31');
        });

        // Menambahkan border aktif pada tombol yang dipilih
        document.getElementById(id + 'Button').classList.add('border-b-2', 'border-blue31');

        // Menampilkan hanya section yang dipilih
        document.getElementById('section1').style.display = 'none';
        document.getElementById('section2').style.display = 'none';

        document.getElementById(id).style.display = 'block';
    }

    // Saat halaman dimuat, tampilkan section1 sebagai default TANPA menghapus fungsi navigasi
    document.addEventListener("DOMContentLoaded", function() {
        showContent('section1');
    });

    </script>

</html>
