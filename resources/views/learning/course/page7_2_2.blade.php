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
                                <p class="my-5"><span class=" whitespace-pre-line">Pada sub bahasan yang selanjutnya adalah <span class="font-medium">dampaknya pada strategi pembelajaran (peningkatan level, penyesuaian strategi belajar dan terminasi)</span>

                                    Perlu kita pahami bersama sekali lagi bahwasanya MIKA ini merupakan alat terapiutik maka kita harus melihat dan mengukur bahwasanya setelah menggunakan MIKA bagaimana dampak pada pembelajaran anak.
                                    MIKA 1.0 dikembangkan dengan konsepsi bahwa kemampuan komunikasi dibangun oleh 2 komponen belajar komunikasi, yaitu: komunikasi instrumental dan penalaran komunikasi.<span class="font-medium">Komunikasi instrumental</span> adalah belajar kemampuan komunikasi dasar dalam mengekspresikan diri dan memahami informasi yang dialaminya sehari-hari. <span class="font-medium">Penalaran komunikasi</span> adalah belajar komunikasi yang didukung kemampuan kognitif untuk memahami berbagai hubungan antara simbol dan obyek.
                                    <p>
                                        Secara umum, ada 2 cara <span class="font-medium">komunikasi instrumental</span>, yaitu: ekspresif dan reseptif. 
                                        <ul class="list-disc pl-5 pb-3">
                                            <li> <span class="font-medium">Komunikasi ekspresif</span> adalah kemampuan menyampaikan informasi dengan menggunakan simbol komunikasi kepada orang lain.</li>
                                            <li> <span class="font-medium">Komunikasi reseptif</span> adalah kemampuan memahami informasi yang disampaikan oleh orang lain. Keduanya perlu mampu dilakukan dengan mandiri untuk dapat melakukan komunikasi timbal balik.</li>
                                        </ul>
                                        Selain itu, ada 3 proses yang mendukung <span class="font-medium">penalaran komunikasi</span>, yaitu: identifikasi, diskriminasi dan generalisasi.
                                        <ul class="list-disc pl-5">
                                            <li><span class="font-medium">Identifikasi</span>: kemampuan anak belajar asosiasi antara simbol dan obyeknya dalam komunikasi ekspresif dan reseptif.</li>
                                            <li><span class="font-medium">Diskriminasi</span>: kemampuan anak membedakan mana simbol (di antara beberapa simbol lain) yang paling menggambarkan obyek yang ingin dikomunikasikannya secara ekspresif dan reseptif.</li>
                                            <li><span class="font-medium">Generalisasi</span>: kemampuan anak memahami bahwa obyek-obyek yang dihadapinya memiliki suatu konsep yang dapat digunakan sebagai payung umum pemahamannya.</li>
                                        </ul>
                                    </p>
                                </p>
                                
                                <p>
                                    <p class="w-full p-2 mb-3 mt-5 bg-bluee3 font-medium">Proses Belajar pada Level I dan II</p>                        
                                    <p class="whitespace-pre-line">Proses belajar terjadi secara 2 tahap: <span class="font-medium">Tahap komunikasi instrumental</span> dan <span class="font-medium"><span class="font-medium">Identifikasi</span></span>
                                        <span class="font-medium">Tahap I komunikasi instrumental</span> adalah belajar kemampuan komunikasi dasar ekspresif dan reseptif yang dapat dilakukan sehari-hari.                                       
                                    </p>
                                    <ul class="list-disc pl-5 pb-3">
                                        <li>Terapis mencontohkan asosiasi antara obyek dan visual pada MIKA. Terapis memegang benda tepat di hadapan fokus anak dan menyentuh visual pada MIKA sambil mengucapkannya. Pencontohan dilakukan minimal 3 kali, atau sejumlah yang dianggap perlu untuk dapat dilihat anak pada masing-masing obyek. </li>
                                        <li>Terapis mencontohkan komunikasi ekspresif, dengan menyentuh visual di MIKA lalu membantu anak mengambil obyek yang sama dengan visualnya. Pencontohan dilakukan minimal 3 kali, atau sejumlah yang dianggap perlu untuk dapat dilihat anak pada masing-masing obyek. Lalu, terapis bisa melanjutkan dengan tahap trial pada anak.</li>
                                        <li>Terapis mencontohkan komunikasi reseptif, dengan mengambil obyek lalu menyodorkan MIKA agar anak menyentuh visual di MIKA yang sesuai dengan obyek. Pencontohan dilakukan minimal 3 kali, atau sejumlah yang dianggap perlu untuk dapat dilihat anak pada masing-masing obyek. Lalu, terapis bisa melanjutkan dengan tahap trial pada anak.</li>
                                    </ul>
                                    Selanjutnya, anak melakukan pendalaman dengan <span class="font-medium">Tahap II Penalaran komunikasi</span>, yaitu: identifikasi, diskriminasi dan generalisasi.
                                    <ul class="list-disc pl-5">
                                        <li><span class="font-medium">Identifikasi</span>: kemampuan anak belajar asosiasi antara visual di MIKA dan obyeknya; serta kemampuan menggunakan apa yang dipelajarinya dalam komunikasi ekspresif dan reseptif.</li>
                                        <li><span class="font-medium">Diskriminasi</span>: kemampuan anak membedakan kesesuaian visual di MIKA dan obyeknya, jika disertai dengan kehadiran visual lain (distraktor) di MIKA; serta kemampuan menggunakan apa yang dipelajarinya dalam komunikasi ekspresif dan reseptif. Contohnya: dipersiapkan 2 visual di MIKA dan 1 obyek di meja. Anak diminta memilih antara 2 visual di layar MIKA yang sesuai dengan obyek yang ada di hadapannya.</li>
                                        <li><span class="font-medium">Generalisasi</span>: kemampuan anak memahami bahwa obyek-obyek yang dihadapinya memiliki suatu konsep yang dapat digunakan sebagai payung umum pemahamannya yang tergambar dalam salah satu visual di MIKA. Contoh: dipersiapkan 2-3 obyek serumpun dan 2 visual di layar MIKA. Anak diminta memilih visual di layar MIKA yang sesuai dengan konsep umum semua obyek yang ada di hadapannya.</li>
                                    </ul>
                                </p>
                                <p>
                                    <p class="w-full p-2 mb-3 mt-5 bg-bluee3 font-medium">Proses Belajar pada Level III</p>                        
                                    <p>Proses belajar pada level III ini adalah anak akan belajar berkomunikasi secara terstruktur dalam membuat kalimat yang terdiri dari Subjek + Predikat Atau Kata kerja + Objek (SPO), 
                                        serta menyusun konsep kata DM. Anak juga berlatih proses generalisasi dan perluasan kemampuan komunikasi ekspresif dan reseptif anak dengan berbagai partner komunikasi 
                                        (orang dewasa lain dan anak sebaya).
                                    </p>
                                    <ul class="list-disc pl-5">
                                        <li>Terapis memilih tema yang akan dipakai untuk digunakan, pada awalnya terapis akan mempersiapkan benda atau kegiatan yang akan digunakan selama proses MIKA. Terapis bisa memberikan contoh dalam merangkai kalimat SPO kemudian langsung ditunjukkan dengan benda atau aktivitasnya. Pencontohan dilakukan minimal 3 kali, atau sejumlah yang dianggap perlu untuk dapat dilihat anak pada masing-masing obyek.</li>
                                        <li>Terapis mencontohkan komunikasi ekspresif, dengan menyentuh visual di MIKA sesuai dengan aturan gramatikal, dimulai dari subyek, kata kerja dan obyek atau keterangan. Lalu segera melakukan aktivitas atau mengambil benda yang sesuai. Pencontohan dilakukan minimal 3 kali, atau sejumlah yang dianggap perlu untuk dapat dilihat anak pada masing-masing obyek. Lalu, terapis bisa melanjutkan dengan tahap trial pada anak.</li>
                                        <li>Terapis mencontohkan komunikasi reseptif, dengan melakukan aktivitas atau  mengambil benda lalu menyodorkan MIKA agar anak menyentuh visual di MIKA yang sesuai dengan aturan gramatikal, dimulai dari subyek, kata kerja dan objek atau keterangan. Pencontohan dilakukan minimal 3 kali, atau sejumlah yang dianggap perlu untuk dapat dilihat anak pada masing-masing obyek. Lalu, terapis bisa melanjutkan dengan tahap trial pada anak.</li>
                                        <li>Pada tahap ini terapis bisa menambah tema dan kata kerja, benda, kata sifat untuk memperluas kemampuan komunikasi ekspresif maupun reseptif anak.</li>
                                    </ul>
                                </p>
                                <p>
                                    <p class="w-full p-2 mb-3 mt-5 bg-bluee3 font-medium">Proses Belajar pada Level IV</p>                        
                                    <p class="whitespace-pre-line">Proses belajar di level IV adalah memperluas kemampuan komunikasi di level I, II dan III. Berupa generalisasi dan perluasan dari komunikasi ekspresif dan reseptif dalam konteks percakapan (komunikasi pragmatis). 
                                    
                                    Proses generalisasi komunikasi tingkat lanjut adalah belajar komunikasi ekspresif dan komunikasi reseptif untuk digunakan anak dalam menyampaikan maksud dan tujuannya berkomunikasi, serta memahami maksud dan tujuan orang lain berbicara; dimana keduanya dilakukan secara timbal balik. Proses belajar diawali dengan mengembangkan dialog antara anak dan terapis, namun proses generalisasinya harus juga dilihat apakah anak bisa menggunakan kemampuan komunikasi pragmatisnya pada orang dewasa lainnya dan teman sebaya. Kemampuan generalisasi komunikasi tingkat lanjut perlu dicatat oleh terapis sebagai data kualitatif.
                                    <ul class="list-disc pl-5">
                                        <li>Terapis memberikan pilihan dialog dengan tema yang sudah ada di  aplikasi MIKA level IV.</li>
                                        <li>Terapis atau guru mulai membuka percakapan dengan menyodorkan tema untuk percakapan dengan anak. Anak akan memilih tema percakapan sesuai dengan tema yang diinginkan. Jika anak masih kesulitan untuk memilih tema percakapan, maka terapis akan memilih terlebih dahulu tema yang diinginkan. Sebaiknya terapis memilih yang sudah fungsional dikuasai oleh anak. Bisa cek riwayat penguasaan kosakata dan konsep kata dari MIKA level 1, 2 dan 3.</li>
                                        <li>Jika anak bisa melakukan dialog dengan menjawab pertanyaan dan membuat pertanyaan, maka bisa dilanjutkan dengan tahap trial. Jika trial bisa dilakukan oleh anak minimal 5 (lima) kali trial dalam  tema yang sama, maka terapis bisa lanjut menuju ke tema berikutnya.</li>
                                    </ul>
                                    Pendalaman komunikasi di MIKA level IV, bisa dilakukan dengan memperbanyak tema-tema percakapan yang disusun sesuai dengan kebutuhan belajar anak (personalized needs). Terapis harus mengembangkan temanya melalui fungsi Customized Content. Selanjutnya, anak melakukan perluasan dialog dengan partner komunikasi lainnya (terapisatau guru atau orang tua – orang dewasa lain, lalu ke teman sebaya).
                                </p>
                                </p>
                            </div>
                            {{-- Navigasi --}}
                            <div class="w-3/4 space-x-10 mt-8 flex justify-end items-center"  style="direction: ltr;">
                                <a href="/page7_2_1" class="text-base flex text-blue31 font-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#6AA4D9" viewBox="0 0 24 24">
                                        <path d="M15.707 4.707a1 1 0 0 0-1.414 0L7.293 12l6.293 7.293a1 1 0 1 0 1.414-1.414L9.414 12l6.293-6.121a1 1 0 0 0 0-1.414z" />
                                    </svg>                
                                    Sebelumnya
                                </a>
                                <a href="/page8" class="text-base flex text-blue31 font-semibold">Selanjutnya
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
