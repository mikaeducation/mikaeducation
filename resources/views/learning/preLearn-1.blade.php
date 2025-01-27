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
                            <div class="w-full flex items-center justify-center"><div class="w-5/6 h-1 bg-bluee3 mb-10"></div></div>
                            {{-- <div class=" space-y-5 pb-10">
                                <div class="w-5/6 h-1/3 mx-5 py-3 px-5 bg-bluee3 rounded-xl flex-col justify-start items-center cursor-pointer transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-105">
                                    <a href="/">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.25 8.75L16.25 8.75" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                            <path d="M11.25 18.75L15 18.75" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                            <path d="M11.25 13.75L18.75 13.75" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                            <path d="M23.75 13.75V9.75C23.75 6.92157 23.75 5.50736 22.8713 4.62868C21.9926 3.75 20.5784 3.75 17.75 3.75H12.25C9.42157 3.75 8.00736 3.75 7.12868 4.62868C6.25 5.50736 6.25 6.92157 6.25 9.75V20.25C6.25 23.0784 6.25 24.4926 7.12868 25.3713C8.00736 26.25 9.42157 26.25 12.25 26.25H15" stroke="#31587C" stroke-width="2"/>
                                            <circle cx="21.875" cy="21.875" r="3.125" stroke="#31587C" stroke-width="2"/>
                                            <path d="M26.25 26.25L24.375 24.375" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                        </svg>
                                        <p>Telusuri daftar khusus yang tersedia.</p>
                                    </a>
                                </div>
                                <div class="w-5/6 h-1/3 mx-5 py-3 px-5 bg-bluee3 rounded-xl flex-col justify-start items-center cursor-pointer transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-105">
                                    <a href="/">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="3.75" y="7.5" width="22.5" height="18.75" rx="2" stroke="#31587C" stroke-width="2"/>
                                            <path d="M3.75 11.5C3.75 9.61438 3.75 8.67157 4.33579 8.08579C4.92157 7.5 5.86438 7.5 7.75 7.5H22.25C24.1356 7.5 25.0784 7.5 25.6642 8.08579C26.25 8.67157 26.25 9.61438 26.25 11.5V12.5H3.75V11.5Z" fill="#31587C"/>
                                            <path d="M8.75 3.75L8.75 7.5" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                            <path d="M21.25 3.75L21.25 7.5" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                            <rect x="8.75" y="15" width="5" height="2.5" rx="0.5" fill="#31587C"/>
                                            <rect x="8.75" y="20" width="5" height="2.5" rx="0.5" fill="#31587C"/>
                                            <rect x="16.25" y="15" width="5" height="2.5" rx="0.5" fill="#31587C"/>
                                            <rect x="16.25" y="20" width="5" height="2.5" rx="0.5" fill="#31587C"/>
                                        </svg>                                                
                                        <p>Telusuri kegiatan yang tersedia.</p>
                                    </a>
                                </div>
                                <div class="w-5/6 h-1/3 mx-5 py-3 px-5 bg-bluee3 rounded-xl flex-col justify-start items-center cursor-pointer transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-105">
                                    <a href="/">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M26.25 15H22.3204C21.7964 15 21.5344 15 21.3133 15.1183C21.0922 15.2367 20.9469 15.4546 20.6563 15.8906L19.3437 17.8594C19.0531 18.2954 18.9078 18.5133 18.6867 18.6317C18.4656 18.75 18.2036 18.75 17.6796 18.75H12.3204C11.7964 18.75 11.5344 18.75 11.3133 18.6317C11.0922 18.5133 10.9469 18.2954 10.6563 17.8594L9.34373 15.8906C9.05309 15.4546 8.90777 15.2367 8.68667 15.1183C8.46558 15 8.2036 15 7.67963 15H3.75" stroke="#31587C" stroke-width="2"/>
                                            <path d="M10.625 10L15 6.25M15 6.25L19.375 10M15 6.25L15 15" stroke="#31587C" stroke-width="2"/>
                                            <path d="M6.25 11.25L4.04289 13.4571C3.85536 13.6446 3.75 13.899 3.75 14.1642V21.75C3.75 22.8546 4.64543 23.75 5.75 23.75H24.25C25.3546 23.75 26.25 22.8546 26.25 21.75V14.1642C26.25 13.899 26.1446 13.6446 25.9571 13.4571L23.75 11.25" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                        </svg>                                                                                                
                                        <p>Telusuri informasi yang tersedia.</p>
                                    </a>
                                </div>
                            </div> --}}
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
