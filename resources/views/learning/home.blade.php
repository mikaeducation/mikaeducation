<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-Learning | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('public/assets/css/style.css')
        {{-- <script>document.documentElement.classList.add('js')</script> --}}
    </head>
    <body class="font-futura h-max w-full relative">

    @include('includes.components.elearning.header')
        
        <section class="w-full h-max flex flex-col relative">
            <div class=" bg-bluee3 flex flex-col">
                <div class="flex lg:flex justify-center items-center pb-14 mt-8 md:mt-12 ">
                    <div class="w-3/4 lg:w-3/4 h-full pb-8 mb:pb-12 mt-4 md:mt-8 flex flex-wrap items-center justify-center lg:flex-nowrap lg:justify-start">
                        <div class="w-full lg:w-2/3 h-full mr-0 md:mr-5 gap-4 text-blue31 flex flex-col" data-taos-offset="300">
                            <div class="h-5 lg:h-10 w-auto flex">
                                <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="h-full w-5 lg:w-10">
                                <h3 class="pl-2 text-lg lg:text-2xl font-bold flex justify-center items-center">Media Visual Komunikasi Anak</h3>
                            </div>
                            <div class="space-y-4">
                                <h1 class="w-full lg:w-3/4 font-semibold text-3xl md:text-5xl">Belajar Komunikasi Autistik dengan MIKA </h1>
                                <div class="w-full h-full md:h-96 lg:hidden flex mt-3">
                                    <img src="{{ asset('images/content-1.png') }}" alt="Content Image" class="w-full h-auto">
                                </div>
                                <p class="font-base text-lg md:text-xl leading-normal w-full md:w-5/6 mt-2 md:mt-4 text-justify">
                                    Program edukasi yang memberikan pemahaman mendalam tentang autisme 
                                    serta strategi praktis untuk mendukung perkembangan dan kebutuhan individu dengan autisme.
                                </p>
                            </div>
                            <a href="javascript:void(0)" id="startButton" class="text-white flex w-full lg:w-1/3 mt-0 md:mt-4">
                                <div class="w-full px-4 py-2 text-lg lg:text-xlg font-medium bg-blue31 rounded hover:button-shadow flex justify-center items-center">
                                Mulai Belajar
                                </div>
                            </a>
                        </div>
                        <div class="w-full hidden lg:w-1/3 rounded border-2 border-blue31 bg-blue31 lg:hover:cursor-zoom-in lg:flex justify-center lg:justify-end items-center mt-6 lg:mt-0 transition ease-in-out delay-200 hover:-translate-y-1 hover:scale-125">
                            <img src="{{ asset('images/content-1.png') }}" alt="Content Image" class="w-full h-full">
                        </div>
                    </div>  
                </div>
            @include('includes.content.elearning.home.content-1') <!-- content-1 responsive-->
                <div class="md:flex hidden justify-center items-center w-full lg:mt-0 mt-14 py-5 transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 cursor-help">
                    <div class="bg-white space-x-8 p-4 text-lg text-blue31 flex justify-center items-center w-3/4 h-30 rounded-xl home-shadow-content z-10 absolute">
                        <div class="flex w-fit gap-4">
                            <div class="w-2/6 h-full px-4 border-r-4 border-bluee3">
                                <h6 class="text-xl font-bold">4 Modul Pembelajaran</h6>
                                <p>Dilengkapi modul tentang Autisme dan Pembelajaran terstruktur</p>
                            </div>
                            <div class="w-2/6 h-full pr-4 border-r-4 border-bluee3">
                                <h6 class="text-xl font-bold">Dasar Menengah</h6>
                                <p>Mencakup pembelajaran dengan skala pengetahuan dasar - menengah</p>
                            </div>
                            <div class="w-1/4 h-full pr-4 border-bluee3 border-r-4">
                                <h6 class="text-xl font-bold">1 jam 40 Menit</h6>
                                <p>Durasi pembelajaran dilakukan secara efesien dan efektif</p>
                            </div>
                            <div class="w-1/6 h-full border-bluee3">
                                <h6 class="text-xl font-bold">4.9</h6>
                                <p>Ulasan pengguna sangat baik</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Form dialog -->
            <div id="modalDialog" class="relative z-50 hidden w-3/4 md:w-0" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                <div class="fixed w-full inset-0 bg-black bg-opacity-55 transition-opacity" aria-hidden="true"></div>            
                <div class="fixed inset-0 z-10 w-full md:w-screen overflow-y-auto">
            @include('includes.components.elearning.course.dialog.start')
                </div>
            </div>
        </section>

        <section class="w-full h-max mt-60 md:mt-40 lg:mt-20 flex items-center justify-center">
            <div class="flex-col items-start justify-start w-3/4 h-full text-blue31">
                <h1 class="text-3xl font-medium mb-4 mt-0 lg:mt-10">Tentang Pembelajaran</h1>
                <div class="block lg:flex w-full lg:w-full">
                    <div class="flex w-full lg:w-full h-fit border-4 border-bluee3">
                @include('includes.content.elearning.home.content-modul-1')
                    </div>
                    <div class="flex-col ml-0 lg:ml-12 mt-12 lg:mt-0 w-full lg:w-1/3 lg:flex-col">
                @include('includes.content.elearning.home.content-modul-2')
                    </div>
                </div>
            </div>
        </section>

    @include('includes.components.elearning.footer')
    
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
    </script>

</html>
