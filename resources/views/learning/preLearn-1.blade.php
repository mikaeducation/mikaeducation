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
        
    <section class="w-full h-full mt-12 lg:mt-12 flex justify-center items-center">
        <div class="flex-col items-start justify-start w-3/4 h-full space-y-10 text-blue31">
            <div class="w-full h-72 rounded-xl border-blue31 border-4 p-5">
                <div class="w-full h-full space-y-3">
                    <h3 class="font-medium text-xl">Pembelajaran terakhir saya</h3>
                    <div class="w-full h-4/5 p-4 space-y-3 border-4 border-l-8 border-bluee3">
                        <h2 class="font-bold text-2xl">Selamat, anda berhasil menyelesaikan pembelajaran!</h2>
                        <div class="w-full h-fit flex">
                            <div class="w-3/4 flex gap-4">
                                <img src="{{ asset('images/content-1.png') }}" alt="Content Image" class="h-24 w-1/5">
                                <div class="flex-col w-4/5">
                                    <h6 class="font-medium text-blue6a">Kursus | Media Visual Komunikasi Anak</h6>
                                    <h1 class="font-bold text-3xl">Belajar Autisme dengan MIKA Education</h1>
                                    <div class="w-full flex items-center pt-3 font-medium"><div class="w-1/2 h-4 rounded-full bg-blue31 mr-3"></div><p>100% Progress Selesai</p></div>
                                </div>
                            </div>
                            <div class="w-1/4 text-center flex items-center justify-center">
                                <a href="" class="text-center font-medium text-lg py-2 px-10 bg-blue31 text-white rounded-lg hover:bg-transparent hover:text-blue31 hover:border-2 hover:border-blue31">
                                    Lihat Sertifikat
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block lg:flex h-full w-full lg:w-full">
                <div class="flex-col w-full h-auto lg:w-full border-4 border-blue31 rounded">
                    <div class="w-full h-fit flex justify-start items-center p-5 gap-2 bg-blue31 text-white">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.75 21.25H11.25C11.947 21.25 12.2955 21.25 12.5853 21.3076C13.7753 21.5444 14.7056 22.4747 14.9424 23.6647C15 23.9545 15 24.303 15 25V11C15 8.17157 15 6.75736 14.1213 5.87868C13.2426 5 11.8284 5 9 5H5.75C4.80719 5 4.33579 5 4.04289 5.29289C3.75 5.58579 3.75 6.05719 3.75 7V19.25C3.75 20.1928 3.75 20.6642 4.04289 20.9571C4.33579 21.25 4.80719 21.25 5.75 21.25Z" stroke="white" stroke-width="2"/>
                            <path d="M24.25 21.25H18.75C18.053 21.25 17.7045 21.25 17.4147 21.3076C16.2247 21.5444 15.2944 22.4747 15.0576 23.6647C15 23.9545 15 24.303 15 25V11C15 8.17157 15 6.75736 15.8787 5.87868C16.7574 5 18.1716 5 21 5H24.25C25.1928 5 25.6642 5 25.9571 5.29289C26.25 5.58579 26.25 6.05719 26.25 7V19.25C26.25 20.1928 26.25 20.6642 25.9571 20.9571C25.6642 21.25 25.1928 21.25 24.25 21.25Z" stroke="white" stroke-width="2"/>
                        </svg>                                
                        <h3 class="text-xl font-medium">Aktivitas Belajar</h3>
                    </div>
                    <div class="p-5">
                        <div class="w-full h-fit border-l-8 border-2 border-bluee3 flex">
                            <div class="p-3 w-3/4 font-medium">
                                <h3 class="">Selesai dipelajari</h3>
                                <h2 class="text-blue6a">Belajar Autisme dengan MIKA Education</h2>
                            </div>
                            <div class="w-1/4 flex items-center justify-center">
                                <a href="" class="w-2/3 text-center font-medium text-lg py-1 border-2 border-blue31 text-blue31 rounded-lg hover:bg-blue31 hover:text-white hover:border-0">
                                    Tinjau
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-col h-fit ml-0 lg:ml-12 mt-5 lg:mt-0 w-full lg:w-1/3">
                    <div class="w-full h-full flex-col lg:w-full border-4 border-blue31 rounded">
                        <div class="w-full h-fit flex justify-start items-center p-5 gap-2 bg-blue31 text-white">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="3.75" y="7.5" width="22.5" height="18.75" rx="2" stroke="white" stroke-width="2"/>
                                <path d="M5 13.75H25" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                <path d="M12.5 20H17.5" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                <path d="M15 17.5L15 22.5" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                <path d="M10 3.75L10 8.75" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                <path d="M20 3.75L20 8.75" stroke="white" stroke-width="2" stroke-linecap="round"/>
                            </svg>                                                                    
                            <h3 class="text-xl font-medium">Aktivitas Lain</h3>
                        </div>
                        <div class="h-fit w-full flex flex-col justify-center text-lg font-medium">
                            <p class="text-blue31 p-5">Berhasil menyelesaikan pembelajaran “Belajar Autisme dengan MIKA Education.</p>
                        </div>
                    </div>
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
