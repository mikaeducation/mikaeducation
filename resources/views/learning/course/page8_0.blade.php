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
                <div id="left" class="w-3/4 flex-1 max-h-[100vh] flex flex-col overflow-y-auto scrollbar scrollbar-thumb scrollbar-thumb-rounded scrollbar-thumb-white scrollbar-track-white">
                    <div class="w-full h-full flex flex-col pl-12 md:pr-12 mt-10">
                        <div class="h-full w-full space-y-8 pb-8 text-lg">
                            <h3 class="text-justify"><span class="text-xl font-medium">Penilaian Pasca-Belajar:</span> Seputar Autisme, Metode pendekatan TEACCH, dan Aplikasi Belajar MIKA 1.0</h3>
                            <div class="flex flex-col md:flex-row justify-between w-full h-max gap-10 md:gap-0 px-8 py-8 bg-bluee3 rounded text-lg font-medium">
                                <div class="w-full space-y-4">
                                    <h5 class="text-xl">Detail Penilaian</h5>
                                    <div class="w-full flex gap-12 md:gap-12">
                                        <div class="">
                                            <p>Batas Waktu</p>
                                            <time datetime="PT25M" class="text-base font-normal">Tidak terbatas</time>
                                        </div>
                                        <div class="">
                                            <p>Kesempatan</p>
                                            <time datetime="PT25M" class="text-base font-normal">Tidak Terbatas</time>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full flex items-end justify-start md:justify-end ">
                                    <a href="javascript:void(0)" id="startButtonNow" class="text-white py-2 bg-blue31 text-base md:text-lg rounded w-full md:w-3/4 lg:w-2/3 flex justify-center items-center text-center transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-105">
                                        Mulai Sekarang
                                    </a>
                                </div>
                            </div>
                            <div class="w-full border-4 px-8 py-5 space-y-5 text-lg border-bluee3">
                                <h5 class="text-xl font-medium">Nilai Anda</h5>
                                <p class="text-justify"> Anda belum menyelesaikan penilaian ini. Silahkan selesaikan terlebih dahulu untuk mengetahui skor tertinggi Anda.
                                    Dibutuhkan <span class=" font-medium">nilai 80% atau lebih tinggi </span> untuk lulus.
                                    <br><span class="text-xl font-medium">_ _</span>
                                </p>
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

    {{-- <script src="https://unpkg.com/taos@1.0.5/dist/taos.js"></script>
    <!-- Hanya fungsi untuk menginisialisasi TAOS setelah berhasil dimuat -->
    <script>
        function initializeTAOS() {
            if (typeof TAOS !== 'undefined') {
                TAOS.init();
                console.log("TAOS initialized");
            } else {
                console.error("TAOS is not defined.");
            }
        }
    </script> --}}
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

        // Hide left section on initial click and show toggleRight button
        toggleLeftButton.addEventListener('click', () => {
            leftContent.classList.add('hidden'); // Hide the left section
            rightContent.classList.remove('w-3/4'); // Make right content full width
            rightContent.classList.add('w-full');
            toggleRightButton.style.display = 'block'; // Show toggleRight button
        });

        // Show left section again on toggleRight click and reset layout
        toggleRightButton.addEventListener('click', () => {
            leftContent.classList.remove('hidden'); // Show left section
            rightContent.classList.remove('w-full'); // Reset right content width
            rightContent.classList.add('w-3/4');
            toggleRightButton.style.display = 'none'; // Hide toggleRight button
        });

    </script>

</html>
