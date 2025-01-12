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
        
        <section class="w-full h-auto flex justify-center items-center">
            <div class="w-3/4 h-auto flex flex-wrap items-center">
                <div class="flex flex-wrap items-center w-full md:w-2/3">
                    <nav class="flex flex-wrap gap-3">
                        <a href="/home" class="text-blue6a text-base md:text-base font-bold border-2 border-blue6a hover:bg-blue6a rounded-full hover:text-white px-3 py-2 md:px-6 md:py-3 flex justify-center items-center transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                            Beranda</a>
                        <a href="/preLearn" class="text-white text-base md:text-base font-bold bg-blue6a rounded-full hover:text-white px-3 py-2 md:px-6 md:py-3 flex justify-center items-center transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                            Pembelajaran Saya</a>
                        <a href="/event" class="text-blue6a text-base md:text-base font-bold border-2 border-blue6a hover:bg-blue6a rounded-full hover:text-white px-3 py-2 md:px-6 md:py-3 flex justify-center items-center transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                            Kegiatan</a>
                        <a href="/cert" class="text-blue6a text-base md:text-base font-bold border-2 border-blue6a hover:bg-blue6a rounded-full hover:text-white px-3 py-2 md:px-6 md:py-3 flex justify-center items-center transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                            Sertifikasi</a>
                        <a href="/other" class="text-blue6a text-base md:text-base font-bold border-2 border-blue6a hover:bg-blue6a rounded-full hover:text-white px-3 py-2 md:px-6 md:py-3 flex justify-center items-center transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                            Lainnya</a>
                        <button id="menu-btn" class="flex items-center justify-center h-10 w-10 p-2 bg-blue6a rounded-full hover:shadow-md md:hidden">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12L5 4" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                <path d="M19 20L19 18" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                <path d="M5 20L5 16" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                <path d="M19 12L19 4" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                <path d="M12 7L12 4" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                <path d="M12 20L12 12" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                <circle cx="5" cy="14" r="2" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                <circle cx="12" cy="9" r="2" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                <circle cx="19" cy="15" r="2" stroke="white" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </nav>
                </div>
                @include('includes.components.elearning.navbar')
            </div>
        </section>    
        
    @include('includes.content.elearning.preLearn-1')

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
