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
    @include('includes.components.elearning.course.header')
    
    @include('includes.content.elearning.course.page2_1') {{-- Responsive content --}}
    <section class="w-full h-max hidden md:hidden lg:flex flex-col items-center justify-center">
        <div class="w-3/4 hidden md:flex lg:flex">

            {{-- Left Content --}}
            <div id="left" class="h-full w-1/4 mr-8 sticky top-0 transition-all duration-300">
                <div id="leftContent" class="w-full h-fit flex flex-col justify-between items-start space-y-5">
                    <div class="w-full flex justify-between items-center">
                        <h3 class="text-base text-blue31 font-bold">Modul Pembelajaran</h3>
                        <button id="toggleLeft" class="w-10 h-10 flex items-center justify-center bg-blue31 rounded-full transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110">
                            <svg id="icon-arrow" width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.7408 18.7952L25.0228 8.7978C25.553 8.42664 26.2816 8.80596 26.2816 9.45318V28.5468C26.2816 29.194 25.553 29.5733 25.0228 29.2022L10.7408 19.2048C10.5986 19.1053 10.5986 18.8947 10.7408 18.7952Z" fill="white" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-8 w-full h-fit text-base text-blue31 font-medium space-y-1">
                        <div class="w-full h-5 rounded-full bg-bluee3 flex-col"><div class="h-full w-48 bg-blue31 rounded-l-full"></div></div>
                        <p>70% Progress selesai</p>
                    </div>
                    <div class="w-full h-fit mt-5 space-y-3">
                        <div class="w-full flex gap-2 p-2 border-l-8 border-y-2 border-r-2 border-bluee3 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
                            <div class="w-1/4 flex justify-center pt-2">
                                <div class="w-10 h-10 rounded-full border-2 border-blue31">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#31587C" stroke-width="1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                            </div>
                            <div class="w-3/4 text-blue31 ">
                                <div class="w-full h-fit pr-2">
                                    <p class="text-sm mb-2">
                                        <Span class="text-base font-bold">Pengenalan:</Span>
                                        Mengenal lebih dekat dengan personil tim MIKA 1.0
                                    </p>
                                    <time datetime="PT7M" class="text-sm">7 menit</time>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex gap-2 p-2 border-l-8 border-y-2 border-r-2 border-bluee3 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
                            <div class="w-1/4 flex justify-center pt-2">
                                <div class="w-10 h-10 rounded-full border-2 border-blue31">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#31587C" stroke-width="1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                            </div>
                            <div class="w-3/4 text-blue31 ">
                                <div class="w-full h-fit pr-2">
                                    <p class="text-sm mb-2">
                                        <Span class="text-base font-bold">Asessmen I:</Span>
                                        Seputar Autisme, Metode TEACCH dan Aplikasi Belajar MIKA 1.0
                                    </p>
                                    <time datetime="PT15M" class="text-sm">15 menit</time>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex-col justify-center flex items-center gap-2 p-2 border-l-8 border-y-2 border-r-2 border-bluee3 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
                            <div class="flex w-full">
                                <div class="w-1/4 flex justify-center pt-2">
                                    <div class="w-10 h-10 rounded-full bg-blue31">
                                        <svg width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.7408 18.7952L25.0228 8.7978C25.553 8.42664 26.2816 8.80596 26.2816 9.45318V28.5468C26.2816 29.194 25.553 29.5733 25.0228 29.2022L10.7408 19.2048C10.5986 19.1053 10.5986 18.8947 10.7408 18.7952Z" fill="white"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-3/4 text-blue31 ml-2 flex item-center">
                                    <div class="w-full h-fit pr-2">
                                        <h3 class="text-base font-bold whitespace-pre-line">Gangguan 
                                            Spektrum Autisme</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="w-11/12 h-fit text-blue31 space-y-3 flex-col items-center justify-start border-t-2 border-bluee3 mt-2 p-4">
                                <div class="flex">
                                    <div class="w-6 h-6 rounded-full border-2 border-blue31">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#31587C" stroke-width="1">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <h6 class="ml-4">Mehamai Autisme</h6>
                                </div>
                                <div class="flex">
                                    <div class="w-6 h-6 rounded-full border-2 border-blue31">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#31587C" stroke-width="1">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <h6 class="ml-4">Komunikasi Autistik</h6>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex-col justify-center flex items-center gap-2 p-2 border-l-8 border-y-2 border-r-2 border-bluee3 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
                            <div class="flex w-full">
                                <div class="w-1/4 flex justify-center pt-2">
                                    <div class="w-10 h-10 rounded-full bg-blue31">
                                        <svg width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.7408 18.7952L25.0228 8.7978C25.553 8.42664 26.2816 8.80596 26.2816 9.45318V28.5468C26.2816 29.194 25.553 29.5733 25.0228 29.2022L10.7408 19.2048C10.5986 19.1053 10.5986 18.8947 10.7408 18.7952Z" fill="white"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-3/4 text-blue31 ">
                                    <div class="w-full h-fit pr-2">
                                        <h3 class="text-base font-bold whitespace-pre-line">Matriks 
                                            Perencanaan</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="w-11/12 h-fit text-blue31 space-y-3 flex-col items-center justify-start border-t-2 border-bluee3 mt-2 p-4">
                                <div class="flex">
                                    <div class="w-7 h-6 rounded-full border-2 border-blue31">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#31587C" stroke-width="1">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <div class="ml-4 w-full">
                                        <h6>Observasi, Pencatatan Karakteristik, Dampak dan Strategi</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex-col justify-center flex items-center gap-2 p-2 border-l-8 border-y-2 border-r-2 border-bluee3 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
                            <div class="flex w-full">
                                <div class="w-1/4 flex justify-center pt-2">
                                    <div class="w-10 h-10 rounded-full bg-blue31">
                                        <svg width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.7408 18.7952L25.0228 8.7978C25.553 8.42664 26.2816 8.80596 26.2816 9.45318V28.5468C26.2816 29.194 25.553 29.5733 25.0228 29.2022L10.7408 19.2048C10.5986 19.1053 10.5986 18.8947 10.7408 18.7952Z" fill="white"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-3/4 text-blue31 ">
                                    <div class="w-full h-fit pr-2">
                                        <h3 class="text-base font-bold whitespace-pre-line">Pembelajaran Terstruktur</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="w-11/12 h-fit text-blue31 space-y-3 flex-col items-center justify-start border-t-2 border-bluee3 mt-2 p-4">
                                <div class="flex">
                                    <div class="w-6 h-6 rounded-full border-2 border-blue31">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#31587C" stroke-width="1">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <h6 class="ml-4">Belajar Terstruktur</h6>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex-col justify-center flex items-center gap-2 p-2 border-l-8 border-y-2 border-r-2 border-bluee3 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
                            <div class="flex w-full">
                                <div class="w-1/4 flex justify-center pt-2">
                                    <div class="w-10 h-10 rounded-full bg-blue31">
                                        <svg width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.7408 18.7952L25.0228 8.7978C25.553 8.42664 26.2816 8.80596 26.2816 9.45318V28.5468C26.2816 29.194 25.553 29.5733 25.0228 29.2022L10.7408 19.2048C10.5986 19.1053 10.5986 18.8947 10.7408 18.7952Z" fill="white"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-3/4 text-blue31 ">
                                    <div class="w-full h-fit pr-2">
                                        <h3 class="text-base font-bold whitespace-pre-line">Media Visual
                                            Komunikasi Anak</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="w-11/12 h-fit text-blue31 space-y-3 flex-col items-center justify-start border-t-2 border-bluee3 mt-2 p-4">
                                <div class="flex">
                                    <div class="w-6 h-6 rounded-full border-2 border-blue31">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#31587C" stroke-width="1">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <h6 class="ml-4">Memulai MIKA 1.0</h6>
                                </div>
                                <div class="flex">
                                    <div class="w-6 h-6 rounded-full border-2 border-blue31">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#31587C" stroke-width="1">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <h6 class="ml-4">Administratif MIKA 1.0</h6>
                                </div>
                                <div class="flex">
                                    <div class="w-6 h-6 rounded-full border-2 border-blue31">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#31587C" stroke-width="1">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <h6 class="ml-4">Interpretasi dan Evaluasi</h6>
                                </div>
                            </div>
                        </div>                     
                        <div class="w-full flex gap-2 p-2 border-l-8 border-y-2 border-r-2 border-bluee3 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
                            <div class="w-1/4 flex justify-center pt-2">
                                <div class="w-10 h-10 rounded-full border-2 border-blue31">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#31587C" stroke-width="1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                            </div>
                            <div class="w-3/4 text-blue31 ">
                                <div class="w-full h-fit pr-2">
                                    <p class="text-sm mb-2">
                                        <Span class="text-base font-bold">Evaluasi Pembelajaran:</Span>
                                        Uji pemahaman pengguna
                                    </p>
                                    <time datetime="PT25M" class="text-sm">25 menit</time>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex gap-2 p-2 border-l-8 bg-bluee3 border-l-blue31 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
                            <div class="w-1/4 flex justify-center pt-2">
                                <div class="w-10 h-10 rounded-full border-2 border-blue31"></div>
                            </div>
                            <div class="w-3/4 text-blue31 ">
                                <div class="w-full h-fit pr-2">
                                    <p class="text-sm mb-2">
                                        <Span class="text-base font-bold">Asessmen II:</Span>
                                        Seputar Autisme, Metode TEACCH dan Aplikasi Belajar MIKA 1.0
                                    </p>
                                    <time datetime="PT25M" class="text-sm">25 menit</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Content --}}
            <div id="right" class="w-3/4 flex flex-col">
                <div class="w-full h-full flex flex-col" style="direction: ltr;">
                    <div class="flex items-center h-10">
                        <div id="toggleRight" class="flex md:flex lg:hidden">
                            <button class="w-10 h-10 flex items-center justify-center bg-blue31 rounded-full transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110">
                                <svg width="30" class="flex item-center justify-center" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.25 8.75H23.75" stroke="#ffffff" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M6.25 15H23.75" stroke="#ffffff" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M6.25 21.25H23.75" stroke="#ffffff" stroke-width="2" stroke-linecap="round"/>
                                </svg>                                
                            </button>
                        </div>
                        <div class="text-base flex ml-4 md:ml-8 lg:ml-12 text-blue31 font-bold" style="display: inline-flex; flex-wrap: wrap;">
                            <a href="" class="flex">
                                <span>Belajar Komunikasi Austistik dengan MIKA</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#6AA4D9" viewBox="0 0 24 24">
                                    <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
                                </svg>
                            </a>
                            <a href="/course" class="flex">
                                <span>Asessmen I</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#6AA4D9" viewBox="0 0 24 24">
                                    <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
                                </svg>
                            </a>
                            <a href="/course" class="flex">
                                <span>Bagian I</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#6AA4D9" viewBox="0 0 24 24">
                                    <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="h-full w-full mt-8 pl-8 text-blue31 overflow-y-scroll scrollbar scrollbar-thumb scrollbar-thumb-rounded scrollbar-thumb-gray-300 scrollbar-track-gray-100" style="direction: rtl;">
                        <div class="space-y-4 border-2 border-bluee3" style="direction: ltr;">
                            <div class="w-full h-fit flex p-2 bg-bluee3">
                                <p class="text-base whitespace-pre-line"><span class="font-bold">Bagian 1 -</span> Pengetahuan autisme, TEACCH, Komunikasi dan MIKA 1.0
                                    Intruksi:<span class="font-medium"> Pilihlah satu jawaban yang benar.</span>
                                </p>
                            </div>
                            <div class="w-full space-y-4 pl-2 pb-2 text-base">
                                <div class="w-full text-blue31">
                                    <form action="/submit-quiz" method="POST" class="space-y-4">
                                        @csrf
                                        <!-- Pertanyaan 1 -->
                                        <div class="">
                                            <h2 class="mb-2">
                                                1. Apakah yang dimaksud dengan spektrum dalam autisme?
                                            </h2>
                                            @foreach([
                                                'Setiap warna dalam Pelangi ada di dalam spektrum autisme',
                                                'Autistik memiliki tiga gejala utama, gangguan social, kesulitan komunikasi dan munculnya persoalan perilaku',
                                                'Pelangi membuat Autisme sulit didiagnosa dan membutuhkan bantuan medis obat-obatan untuk melakukan treatment',
                                                'Ada banyak jenis autisme, maka penting untuk memahami apa jenis autisme yang dialami oleh anak kita',
                                                'Setiap individu autistik memiliki karakteristik autisme berbeda-beda, maka kebutuhan belajar dan terapinya berbeda-beda'
                                            ] as $index => $option)
                                            <label class="block mb-1">
                                                <input 
                                                    type="radio" 
                                                    name="question_1" 
                                                    value="{{ $index }}" 
                                                    class="mr-1 ml-2">
                                                {{ $option }}
                                            </label>
                                            @endforeach
                                        </div>                            
                                        <!-- Pertanyaan 2 -->
                                        <div class="">
                                            <h2 class="mb-1">
                                                2. Andi menyukai puzzle dan ia bisa bermain puzzle selama berjam-jam. Ia juga akan marah ketika dihentikan permainan puzzlenya. Hal ini tergolong sebagai gejala autisme apa?
                                            </h2>
                                            @foreach([
                                                'Penyakit karena masalah diet dan makanan yang salah/keracunan',
                                                'Problem penyesuaian karena minat terbatas dan perilaku berulang',
                                                'Gangguan karena pengasuhan orang tua yang kurang konsisten',
                                                'Kesulitan belajar karena keterbatasan pemahaman',
                                                'Persoalan perilaku agresif dan tantrum'
                                            ] as $index => $option)
                                            <label class="block mb-2">
                                                <input 
                                                    type="radio" 
                                                    name="question_2" 
                                                    value="{{ $index }}" 
                                                    class="mr-1 ml-2">
                                                {{ $option }}
                                            </label>
                                            @endforeach
                                        </div>
                                        <!-- Pertanyaan 3 -->
                                        <div>
                                            <h2 class="mb-2">
                                                3. Berikut adalah persoalan yang menyebabkan anak autistik sulit berteman, memahami emosi orang di sekitarnya sehingga terkadang berperilaku aneh tidak seperti yang diharapkan anak seusianya, bahkan beresiko di-bully oleh teman-temannya adalah:
                                            </h2>
                                            @foreach([
                                                'Kesulitan komunikasi',
                                                'Kesulitan social',
                                                'Kesulitan bermain',
                                                'Kesulitan perilaku',
                                                'Kesulitan belajar'
                                            ] as $index => $option)
                                            <label class="block mb-1">
                                                <input 
                                                    type="radio" 
                                                    name="question_3" 
                                                    value="{{ $index }}" 
                                                    class="mr-1 ml-2">
                                                {{ $option }}
                                            </label>
                                            @endforeach
                                        </div>
                                        <!-- Pertanyaan 4 -->
                                        <div>
                                            <h2 class="mb-2">
                                                4. Berikut adalah karakteristik yang perlu masuk dalam assessmen Matriks Perencanaan (planning matrix):
                                            </h2>
                                            @foreach([
                                                'Kesulitan sensoris',
                                                'Kesulitan theory of mind',
                                                'Kesulitan central coherence',
                                                'Kesulitan pemrosesan informasi',
                                                'Semua benar'
                                            ] as $index => $option)
                                            <label class="block mb-1">
                                                <input 
                                                    type="radio" 
                                                    name="question_4" 
                                                    value="{{ $index }}" 
                                                    class="mr-1 ml-2">
                                                {{ $option }}
                                            </label>
                                            @endforeach
                                        </div>
                                        <!-- Pertanyaan 5 -->
                                        <div>
                                            <h2 class="mb-2">
                                                5. Dalam administrasi MIKA 1.0, perlahan-lahan, prompt atau dukungan akan dikurangi. Apakah elemen TEACCH yang menjadi dasar belajar komunikasi tersebut?
                                            </h2>
                                            @foreach([
                                                'Jadwal visual',
                                                'Struktur visual',
                                                'Struktur lingkungan fisik',
                                                'Stimulus belajar terstruktur',
                                                'Sistem belajar mendukung kemandirian'
                                            ] as $index => $option)
                                            <label class="block mb-1">
                                                <input 
                                                    type="radio" 
                                                    name="question_5" 
                                                    value="{{ $index }}" 
                                                    class="mr-1 ml-2">
                                                {{ $option }}
                                            </label>
                                            @endforeach
                                        </div>
                                        <!-- Pertanyaan 6 -->
                                        <div>
                                            <h2 class="mb-2">
                                                6. Manakah yang BUKAN elemen kemampuan komunikasi?
                                            </h2>
                                            @foreach([
                                                'Kemampuan Pra-sosial',
                                                'Kemampuan Pra-komunikasi',
                                                'Komunikasi reseptif',
                                                'Komunikasi ekspresif',
                                                'Kemampuan Pragmatis'
                                            ] as $index => $option)
                                            <label class="block mb-1">
                                                <input 
                                                    type="radio" 
                                                    name="question_6" 
                                                    value="{{ $index }}" 
                                                    class="mr-1 ml-2">
                                                {{ $option }}
                                            </label>
                                            @endforeach
                                        </div>
                                        <!-- Pertanyaan 7 -->
                                        <div>
                                            <h2 class="mb-2">
                                                7. Berikut adalah tahapan perkembangan komunikasi secara berturut-turut dari yang awal hingga yang tertinggi, yang terekam dalam MIKA 1.0:
                                            </h2>
                                            @foreach([
                                                'Mengembangkan dialog/percakapan Menambah perbendaharaan kata; Menyusun kalimat sederhana; Menyusun kalimat kompleks',
                                                'Menyusun kalimat kompleks; Menyusun kalimat sederhana; Menambah perbendaharaan kata; Mengembangkan dialog/percakapan',
                                                'Menyusun kalimat sederhana; Menyusun kalimat kompleks; Mengembangkan dialog/percakapan; Menambah perbendaharaan kata',
                                                'Menambah perbendaharaan kata; Menyusun kalimat sederhana; Menyusun kalimat kompleks; Mengembangkan dialog/percakapan',
                                                'Semua benar'
                                            ] as $index => $option)
                                            <label class="block mb-1">
                                                <input 
                                                    type="radio" 
                                                    name="question_7" 
                                                    value="{{ $index }}" 
                                                    class="mr-1 ml-2">
                                                {{ $option }}
                                            </label>
                                            @endforeach
                                        </div>
                                        <!-- Pertanyaan 8 -->
                                        <div>
                                            <h2 class="mb-2">
                                                8. Berikut adalah yang BUKAN praktik baik belajar komunikasi yang ada dalam MIKA 1.0:
                                            </h2>
                                            @foreach([
                                                'Kata yang digunakan bisa disesuaikan dengan Bahasa sehari-hari yang digunakan anak agar memudahkan pemahaman konsep kata yang dipelajari',
                                                'Visual bisa menggunakan foto agar lebih realistis dan sesuai dengan kondisi sehari-hari anak',
                                                'Anak perlu menguasai seluruh kata yang ada di dalam MIKA 1.0 untuk bisa disebut mampu berkomunikasi',
                                                'Perbendaharaan kata sebaiknya dimulai dengan kata kerja yang digunakan sehari-hari karena akan membuat komunikasi anak lebih fungsional',
                                                'Mempelajari kata-kata akan lebih mudah dan fungsional jika dikelompokkan dalam topik/konsep'
                                            ] as $index => $option)
                                            <label class="block mb-1">
                                                <input 
                                                    type="radio" 
                                                    name="question_8" 
                                                    value="{{ $index }}" 
                                                    class="mr-1 ml-2">
                                                {{ $option }}
                                            </label>
                                            @endforeach
                                        </div>

                                        <!-- Pertanyaan 9 -->
                                        <div>
                                            <h2 class="mb-2">
                                                9. Penggunaan alat bantu visual dibutuhkan dalam belajar komunikasi. MIKA 1.0 dikembangkan menggunakan high technology dalam rangka mengatasi kelemahan low tech. Berikut adalah BUKAN alasan kegunaan high tech pada MIKA 1.0:
                                            </h2>
                                            @foreach([
                                                'Low tech akan memakan waktu dan energi untuk memproduksi visual',
                                                'High tech bisa merekam data anak real time',
                                                'Data yang direkam bisa digunakan untuk riset pengembangan teknologi belajar bagi individu autistik',
                                                'Adminstrasi dan penyediaan stimulus menjadi terstandar',
                                                'Meminimalisir kesalahan dalam layanan dan pendidikan'
                                            ] as $index => $option)
                                            <label class="block mb-1">
                                                <input 
                                                    type="radio" 
                                                    name="question_9" 
                                                    value="{{ $index }}" 
                                                    class="mr-1 ml-2">
                                                {{ $option }}
                                            </label>
                                            @endforeach
                                        </div>

                                        <!-- Pertanyaan 10 -->
                                        <div>
                                            <h2 class="mb-2">
                                                10. Berikut adalah BUKAN keunggulan skoring, monitoring dan evaluasi MIKA 1.0:
                                            </h2>
                                            @foreach([
                                                'Memberikan rekaman data anak',
                                                'Mengetahui kemajuan anak',
                                                'Mengetahui kemunduran anak',
                                                'Menjamin perkembangan komunikasi',
                                                'Data anak adalah dokumen hidup yang menginformasikan kebutuhan belajarnya'
                                            ] as $index => $option)
                                            <label class="block mb-1">
                                                <input 
                                                    type="radio" 
                                                    name="question_10" 
                                                    value="{{ $index }}" 
                                                    class="mr-1 ml-2">
                                                {{ $option }}
                                            </label>
                                            @endforeach
                                        </div>
                                        <!-- Tambahkan pertanyaan lainnya di sini dengan format serupa -->                                        
                                        <div class="space-x-10 mt-8 mr-2 flex justify-end items-center">
                                            <button
                                            type="submit" 
                                            class="p-2 px-6 rounded-xl text-base flex text-white font-semibold bg-blue31 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                                            Kumpulkan
                                        </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Navigasi --}}
        <div class="w-3/4 space-x-10 mt-8 hidden justify-end items-center">
            <a href="" class="text-base hidden text-blue31 font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#6AA4D9" viewBox="0 0 24 24">
                    <path d="M15.707 4.707a1 1 0 0 0-1.414 0L7.293 12l6.293 7.293a1 1 0 1 0 1.414-1.414L9.414 12l6.293-6.121a1 1 0 0 0 0-1.414z" />
                </svg>                
                Sebelumnya
            </a>
            <a href="/page9_2" class="p-2 px-6 rounded-xl text-base flex text-white font-semibold bg-blue31 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                Kumpulkan
            </a>
        </div>
    </section>

    @include('includes.components.elearning.footer')
    
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
