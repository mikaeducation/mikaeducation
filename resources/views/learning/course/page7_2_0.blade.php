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
                        <div class="w-full h-5 rounded-full bg-bluee3 flex-col"><div class="h-full w-40 bg-blue31 rounded-l-full"></div></div>
                        <p>59% Progress selesai</p>
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
                        <div class="w-full flex-col justify-center flex items-center p-2 border-l-8 bg-bluee3 border-l-blue31 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
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
                                            Komunikasi Anak
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="w-11/12 h-0.5 my-4 bg-blue31"></div>
                            <div class="w-full h-fit gap-4 px-4 pb-4 text-blue31 space-y-3 flex-col items-center justify-start border-t-2 border-bluee3">
                                <div class="w-full flex gap-4">
                                    <div class="w-fit flex justify-center">
                                        <div class="w-7 h-7 rounded-full border-2 border-blue31">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#31587C" stroke-width="1">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-3/4 text-blue31 ">
                                        <div class="w-full h-fit pr-2">
                                            <p class="text-base mb-2">
                                                <Span class="text-base font-bold">Memulai MIKA 1.0:</Span>
                                                Instalasi dan registrasi MIKA 1.0 Mobile
                                            </p>
                                            <time datetime="PT14M" class="text-sm">14 menit</time>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full flex gap-4">
                                    <div class="w-fit flex justify-center">
                                        <div class="w-7 h-7 rounded-full border-2 border-blue31">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#31587C" stroke-width="1">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-3/4 text-blue31 ">
                                        <div class="w-full h-fit pr-2">
                                            <p class="text-base mb-2">
                                                <Span class="text-base font-bold">Administratif MIKA 1.0:</Span>
                                                Alur belajar dan skoring dalam MIKA 1.0 Mobile
                                            </p>
                                            <time datetime="PT31M" class="text-sm">31 menit</time>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full flex gap-4">
                                    <div class="w-fit flex justify-center">
                                        <div class="w-7 h-7 rounded-full border-2 border-blue31">
                                        </div>
                                    </div>
                                    <div class="w-3/4 text-blue31 ">
                                        <div class="w-full h-fit pr-2">
                                            <p class="text-base mb-2">
                                                <Span class="text-base font-bold">Evaluasi & Interpretasi:</Span>
                                                Skoring tiap Level dan Interpretasi yang berdampak pada proses pembelajaran
                                            </p>
                                            <time datetime="PT15M" class="text-sm">15 menit</time>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex gap-2 p-2 border-l-8 border-y-2 border-r-2 border-bluee3 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
                            <div class="w-1/4 flex justify-center pt-2">
                                <div class="w-10 h-10 rounded-full border-2 border-blue31"></div>
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
                        <div class="w-full flex gap-2 p-2 border-l-8 border-y-2 border-r-2 border-bluee3 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
                            <div class="w-1/4 flex justify-center pt-2">
                                <div class="w-10 h-10 rounded-full border-2 border-blue31"></div>
                            </div>
                            <div class="w-3/4 text-blue31 ">
                                <div class="w-full h-fit pr-2">
                                    <p class="text-sm mb-2">
                                        <Span class="text-base font-bold">Asessmen II:</Span>
                                        Seputar Autisme, Metode TEACCH dan Aplikasi Belajar MIKA 1.10
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
                                <span>Media Visual Komunikasi Anak</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#6AA4D9" viewBox="0 0 24 24">
                                    <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
                                </svg>
                            </a>
                            <a href="/course" class="flex">
                                <span>Evaluasi & Interpretasi MIKA 1.0</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#6AA4D9" viewBox="0 0 24 24">
                                    <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="h-full w-full mt-8 pl-8 space-y-8 overflow-y-scroll scrollbar scrollbar-thumb scrollbar-thumb-rounded scrollbar-thumb-gray-300 scrollbar-track-gray-100" style="direction: rtl;">
                        <div class="w-full h-60 md:h-80 lg:h-96 flex bg-black" style="direction: ltr;">
                            <div class="w-full h-full flex justify-center items-center">
                                <div class="aspect-w-16 aspect-h-9 w-full h-full flex justify-center items-center">
                                    <iframe 
                                        src="/preview" 
                                        title="E-Learning Video Player" 
                                        frameborder="0" 
                                        allow="autoplay; encrypted-media;" 
                                        allowfullscreen 
                                        class="w-full h-full">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="w-full flex gap-8 h-8 border-b-2 border-bluee3 text-base font-bold text-blue31" style="direction: ltr;">
                                <a href=""><div class="h-full w-fit px-2 border-b-2 border-blue31 relative before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full">Bacaan</div></a>
                                <a href=""><div class="h-full w-fit px-2 relative before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full">Unduhan</div></a>                            
                            </div>
                            <div class="w-full text-blue31 pb-4 border-b-2 border-bluee3 text-justify"  style="direction: ltr;">
                                <p class="my-5"><span class=" whitespace-pre-line">Salam saya Mida, 
                                    Nah, pada tema kali ini saya akan memberikan penjelasan terkait dengan interpretasi dan evaluasi yaitu bagaimana proses skor per sesi, skor total dan perkembangan belajar anak serta dampaknya pada strategi pembelajaran.
                                    
                                    <span class="font-medium">Berikut kita membahas skor per sesi</span>
                                    Skor per sesi adalah jumlah kumulatif skor benar atau skor atas respon benar dalam satu sesi belajar / terapi menggunakan MIKA. Skor per sesi akan dijelaskan satu persatu dalam tahapan komunikasi. 
                                </p>
                                <p>
                                    <p class="w-full p-2 mb-3 bg-bluee3"><span class="font-medium">Level 1</span> - Penguasaan Perbendaharaan Kata</p>                        
                                    <p class="whitespace-pre-line">Di dalam mika ada 4 level komunikasi. Level I yaitu, penguasaan perbendaharaan kata, di dalam tahap ini anak diminta untuk menguasai 100 kata secara fungsional.
                                    Kata – kata yang dipelajari terdiri dari kata-kata inti atau core word yaitu kata – kata yang sering digunakan dalam aktivitas sehari-hari seperti tolong, lagi, mau, dan stop. 
                                    Perbendaharaan kata juga mencakup kata-kata konsep yang digunakan sehari-hari misalkan aktivitas makan-minum (nasi, piring) atau anggota keluarga (bapak, ibu, adik)
                                    </p>
                                    <span class="font-medium">Pada Level I</span>, skoring kemampuan komunikasi reseptif, adalah:
                                    <ul class="list-disc pl-5">
                                        <li>0 adalah salah</li>
                                        <li>1 adalah benar reseptif non verbal atau verbal namun belum mandiri atau muncul dengan bantuan</li>
                                        <li>Dan 2 jika benar reseptif secara non verbal atau verbal tanpa bantuan</li>
                                    </ul>
                                    Sedangkan pada pengukuran bahasa ekspresif, kita menggunakan skor
                                    <ul class="list-disc pl-5">
                                        <li>0 jika salah </li>
                                        <li>1 adalah benar ekspresif non verbal atau verbal dengan bantuan</li>
                                        <li>Dan 2 adalah benar ekspresif non verbal atau verbal tanpa bantuan</li>
                                    </ul>
                                </p>
                                <p>
                                    <p class="w-full p-2 mb-3 mt-5 bg-bluee3"><span class="font-medium">Level 2</span> - Penyusunan Kalimat Sederhana</p>                        
                                    <p class="whitespace-pre-line">Berikutnya kita membahas komunikasi Level II
                                        Di dalam komunikasi level dua, kita akan membangun ketrampilan komunikasi menyusun kalimat sederhana yang terdiri dari subjek dan predikat atau predikat dan objek.
                                        Contohnya anak mampu menyusun atau memahami kalimat sederhana sperti, saya makan, makan nasi, atau  minum air                                        
                                    </p>
                                    <span class="font-medium">Pada Level II</span>, skoring kemampuan komunikasi reseptif, adalah:
                                    <ul class="list-disc pl-5">
                                        <li>0 adalah salah</li>
                                        <li>1 adalah benar reseptif non verbal atau verbal namun belum mandiri atau muncul dengan bantuan</li>
                                        <li>Dan 2 jika benar reseptif secara non verbal atau verbal tanpa bantuan</li>
                                    </ul>
                                    Sedangkan pada pengukuran bahasa ekspresif, kita menggunakan skor
                                    <ul class="list-disc pl-5">
                                        <li>0 jika salah </li>
                                        <li>1 adalah benar ekspresif non verbal atau verbal dengan bantuan</li>
                                        <li>Dan 2 adalah benar ekspresif non verbal atau verbal tanpa bantuan</li>
                                    </ul>
                                </p>
                                <p>
                                    <p class="w-full p-2 mb-3 mt-5 bg-bluee3"><span class="font-medium">Level 3</span> - Penyusunan dan Pemahaman Kalimat Kompleks</p>                        
                                    <p class="whitespace-pre-line">Berikutnya kita membahas komunikasi Level III
                                        Disini kita akan fokus membangun ketrampilan menyusun dan memahami kalimat komplek yang terdiri dari subjek predikat objek dan juga keterangan.
                                        Contohnya anak mampu memahami kalimat “saya mau main bola merah” atau anak mampu merespon instruksi kompleks seperti “ambil kue lapis di dapur”                                  
                                    </p>
                                    <span class="font-medium">Pada Level III</span>, skoring kemampuan komunikasi reseptif, adalah:
                                    <ul class="list-disc pl-5">
                                        <li>0 adalah salah</li>
                                        <li>1 adalah benar reseptif non verbal atau verbal namun belum mandiri atau muncul dengan bantuan</li>
                                        <li>Dan 2 jika benar reseptif secara non verbal atau verbal tanpa bantuan</li>
                                    </ul>
                                    Sedangkan pada pengukuran bahasa ekspresif, kita menggunakan skor
                                    <ul class="list-disc pl-5">
                                        <li>0 jika salah </li>
                                        <li>1 adalah benar ekspresif non verbal atau verbal dengan bantuan</li>
                                        <li>Dan 2 adalah benar ekspresif non verbal atau verbal tanpa bantuan</li>
                                    </ul>
                                </p>
                                <p>
                                    <p class="w-full p-2 mb-3 mt-5 bg-bluee3"><span class="font-medium">Level 4</span> - Pembuatan Dialog atau Percakapan</p>                        
                                    <p class="whitespace-pre-line">Level IV kita akan focus membangun ketrampilan membuat percakapan/dialog
                                        Di dalam kemampuan berdialog anak perlu mampu memahami dan merespon pertanyaan lawan bicara, dan juga mampu Menyusun pertanyaan yang tepat untuk merespon pembicaraan lawan bicara sebelumnya. 
                                        Contohnya: anak mampu merespon ketika ditanya Namanya, lalu bertanya balik siapa nama lawan bicaranya untuk meneruskan percakapan.                                                                     
                                    
                                        Pada Pengukuran ketrampilan berdialog kita menggunakan skor plus dan minus. 
                                        Plus ketika anak mampu merespon atau menjawab pertanyaan, mampu membuat pilihan ketika ditanya tentang tema percakapan oleh terapis, dan mampu menyusun pertanyaan lanjutan untuk meneruskan dialog. Dan ketika hal ini dilakukan secara mandiri anak mendapatkan dua plus, namun jika anak membutuhkan dukungan atau promt anak mendapatkan satu plus.

                                        Minus akan diberikan ketika anak tidak mampu merespon sesuai dengan pertanyaan atau instruksi dan tidak mampu menyusun pertanyaan lanjutan untuk berdialog. 
                                    </p>
                                </p>
                                <p>
                                    <p class="w-full p-2 mb-3 mt-5 bg-bluee3"><span class="font-medium">Penutup</span> - Proses Skoring per-sesi</p>                        
                                    <p class="whitespace-pre-line">Setelah melakukan skoring per sesi kita akan merekam seluruh skor per sesi sebagai skor kumulatif. 
                                        Disarankan untuk melakukan 10 kali upaya atau trial latihan per sesi. Anak disebut mampu berkomunikasi secara fungsional dan mandiri ketika mampu 80 % melakukan respon benar atau anak melakukan hingga 20 % respon benar dengan bantuan dan toleransi kesalahan hingga 5%. Total skor tetap 100%
                                        
                                        Detail tentang metode skoring per level diuraikan di booklet interpretasi dan evaluasi.
                                        Demikian belajar tentang interpretasi dan skoring MIKA
                                        Terima kasih selamat belajar
                                    </p>
                                </p>
                            </div>
                            {{-- Navigasi --}}
                            <div class="w-3/4 space-x-10 mt-8 flex justify-end items-center"  style="direction: ltr;">
                                <a href="/page7_1" class="text-base flex text-blue31 font-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#6AA4D9" viewBox="0 0 24 24">
                                        <path d="M15.707 4.707a1 1 0 0 0-1.414 0L7.293 12l6.293 7.293a1 1 0 1 0 1.414-1.414L9.414 12l6.293-6.121a1 1 0 0 0 0-1.414z" />
                                    </svg>                
                                    Sebelumnya
                                </a>
                                <a href="/page7_2_1" class="text-base flex text-blue31 font-semibold">Selanjutnya
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#6AA4D9" viewBox="0 0 24 24">
                                        <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
                                    </svg>
                                </a>
                            </div>
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
