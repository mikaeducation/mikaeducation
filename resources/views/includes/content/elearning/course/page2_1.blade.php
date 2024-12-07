{{-- Responsive Content, < md --}}
<section class="w-full h-max flex md:flex lg:hidden flex-col items-center justify-center">
    <div class="w-3/4">
        <div id="" class="full flex flex-col">
            <div class="w-full h-full flex flex-col" style="direction: ltr;">
                <div class="mb-8 w-full">
                    <div class="text-base w-full text-blue31 font-medium">
                        <a href="" class="flex" style="display: inline-flex; flex-wrap: wrap;">
                            <span>Belajar Komunikasi Austistik dengan MIKA</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#6AA4D9" viewBox="0 0 24 24">
                                <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
                            </svg>
                        </a>
                        <a href="/page2_1" class="flex" style="display: inline-flex; flex-wrap: wrap;">
                            <span>Gangguan Spektrum Autisme</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#6AA4D9" viewBox="0 0 24 24">
                                <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
                            </svg>
                        </a>
                        <a href="/page2_1" class="flex" style="display: inline-flex; flex-wrap: wrap;">
                            <span>Memahami Autisme</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#6AA4D9" viewBox="0 0 24 24">
                                <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
                            </svg>
                        </a>
                    </div>                    
                </div>

                {{-- #Right List Menu (Isi Modul Pembelajaran), only Mobile --}}
                <div class="flex md:flex lg:hidden items-center h-10 w-full">
                    <button onclick="handleMenu()" id="menuModul-toggle-btn" class="w-fit flex items-center justify-start">
                        <svg class="flex item-center justify-center" width="48" height="48" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.25 8.75H23.75" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                            <path d="M6.25 15H23.75" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                            <path d="M6.25 21.25H23.75" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <p class="text-xl flex ml-2 md:ml-8 lg:ml-12 cursor-pointer text-blue31 font-semibold relative before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full">
                            Daftar Modul Pembelajaran</p>                                
                    </button>
                </div>
                <div class="h-full w-full mt-8 space-y-8">
                    <div class="w-full h-60 md:h-80 lg:h-1/5 flex bg-black">
                        <div class="w-full h-full flex justify-center items-center">
                            <div class="aspect-w-16 aspect-h-9 w-full h-full flex justify-center items-center">
                                <iframe 
                                    src="https://drive.google.com/file/d/1LPAtMg-np5Zc7r0QHoaR-cYDNtb0c09-/preview" 
                                    title="E-Learning Video Player" 
                                    frameborder="0" 
                                    allow="autoplay; encrypted-media;" 
                                    allowfullscreen 
                                    class="w-full h-full">
                                </iframe>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex gap-8 h-8 border-b-2 border-bluee3 text-base font-bold text-blue31" style="direction: ltr;">
                        <a href=""><div class="h-full w-fit px-2 border-b-2 border-blue31 relative before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full">Bacaan</div></a>
                        <a href=""><div class="h-full w-fit px-2 relative before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full">Unduhan</div></a>                            
                    </div>
                    <div class="w-full text-blue31 pb-4 border-b-2 border-bluee3"  style="direction: ltr;">
                        <div class="w-full md:flex lg:flex text-blue31 text-base font-normal">
                            <p>Text</p>
                        </div>
                    </div>
                </div>               
                {{-- #Left List Menu (Daftar Modul Pembelajaran), only Mobile --}}
                <div id="menuModul" class="w-full h-full hidden fixed flex-col justify-start items-center bg-white text-blue6a font-bold top-0 left-0 z-50 head-shadow">
                    <div class="w-full flex justify-center items-center py-5 border-b-2 border-bluee3 relative">
                        <a href="/course" id="" class="flex items-center">
                            <div class="h-8 w-8 mr-2">
                                <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="h-full w-full">
                            </div>
                            <h1 class="font-bold text-3xl text-blue6a">MIKA</h1>
                        </a>
                        <button onclick="handleMenu()" 
                            class="absolute right-5 top-1/2 transform -translate-y-1/2 h-10 w-10 flex justify-center items-center text-blue31 hover:text-blue6a hover:border-2 hover:rounded-full hover:border-blue6a focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="w-full flex items-center justify-center">
                        <div class="h-max w-4/5 mt-8 transition-all duration-300">
                            <div class="w-full h-fit mb-8 text-base text-blue31 font-medium space-y-1">
                                <div class="w-full h-5 rounded-full bg-bluee3 flex-col">
                                    <div class="w-0 h-full bg-blue31 rounded-l-full"></div>
                                </div>
                                <p>0% Progress selesai</p>
                            </div>
                            <!-- List Menu Content, only Mobile -->
                            <div class="w-full pl-6 flex flex-col justify-between items-start space-y-5 overflow-y-auto scrollbar scrollbar-thumb-gray-300 scrollbar-track-gray-100 scrollbar-thumb-rounded" style="max-height: calc(100vh - 200px); direction: rtl;">
                                <div class="w-full h-fit space-y-3 font-normal" style="direction: ltr;">
                                    <div class="w-full flex gap-2 p-2 border-l-8 border-y-2 border-r-2 border-bluee3 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
                                        <div class="w-1/4 flex justify-center pt-2">
                                            <div class="w-10 h-10 rounded-full border-2 border-blue31"></div>
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
                                            <div class="w-10 h-10 rounded-full border-2 border-blue31"></div>
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
                                                    <h3 class="text-base font-bold whitespace-pre-line">Gangguan 
                                                        Spektrum Autisme</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-11/12 h-0.5 my-4 bg-blue31"></div>
                                        <div class="w-full h-fit gap-4 px-4 pb-4 text-blue31 space-y-3 flex-col items-center justify-start border-t-2 border-bluee3">
                                            <div class="w-full flex gap-4">
                                                <div class="w-fit flex justify-center">
                                                    <div class="w-7 h-7 rounded-full border-2 border-blue31">
                                                    </div>
                                                </div>
                                                <div class="w-3/4 text-blue31 ">
                                                    <div class="w-full h-fit pr-2">
                                                        <p class="text-base mb-2">
                                                            <Span class="text-base font-bold">Memahami Autisme:</Span>
                                                            Memahami apa itu Gangguan Spektrum Autisme
                                                        </p>
                                                        <time datetime="PT5M" class="text-sm">5 menit</time>
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
                                                            <Span class="text-base font-bold">Komunikasi Autistik:</Span>
                                                            Pra-komunikasi, Reseptif, Ekspresif, Pragmatis, Strategi Komunikasi
                                                        </p>
                                                        <time datetime="PT25M" class="text-sm">25 menit</time>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full flex-col justify-center flex items-center gap-2 p-2 border-l-8 border-y-2 border-r-2 border- border-bluee3 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
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
                                                <div class="w-6 h-6 rounded-full border-2 border-blue31"></div>
                                                <h6 class="ml-4">Karakteristik Autistik</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full flex-col justify-center flex items-center gap-2 p-2 border-l-8 border-y-2 border-r-2 border- border-bluee3 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
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
                                                <div class="w-6 h-6 rounded-full border-2 border-blue31"></div>
                                                <h6 class="ml-4">Pendekatan Belajar</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full flex-col justify-center flex items-center gap-2 p-2 border-l-8 border-y-2 border-r-2 border- border-bluee3 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
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
                                                <div class="w-6 h-6 rounded-full border-2 border-blue31"></div>
                                                <h6 class="ml-4">Memulai MIKA 1.0</h6>
                                            </div>
                                            <div class="flex">
                                                <div class="w-6 h-6 rounded-full border-2 border-blue31"></div>
                                                <h6 class="ml-4">Administratif MIKA 1.0</h6>
                                            </div>
                                            <div class="flex">
                                                <div class="w-6 h-6 rounded-full border-2 border-blue31"></div>
                                                <h6 class="ml-4">Interpretasi dan Evaluasi</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full flex gap-2 p-2 border-l-8 border-y-2 border-r-2 border- border-bluee3 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
                                        <div class="w-1/4 flex justify-center pt-2">
                                            <div class="w-10 h-10 rounded-full border-2 border-blue31"></div>
                                        </div>
                                        <div class="w-3/4 text-blue31 ">
                                            <div class="w-full h-fit pr-2">
                                                <p class="text-sm mb-2">
                                                    <Span class="text-base font-bold">Evaluative Test:</Span>
                                                    Uji dan Evaluasi untuk pengguna
                                                </p>
                                                <time datetime="PT25M" class="text-sm">25 menit</time>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full flex gap-2 p-2 border-l-8 border-y-2 border-r-2 border- border-bluee3 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
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
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="w-3/4 space-x-10 mt-8 flex justify-end items-center">
        <a href="" class="text-base hidden text-blue31 font-semibold">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#6AA4D9" viewBox="0 0 24 24">
                <path d="M15.707 4.707a1 1 0 0 0-1.414 0L7.293 12l6.293 7.293a1 1 0 1 0 1.414-1.414L9.414 12l6.293-6.121a1 1 0 0 0 0-1.414z" />
            </svg>
            Sebelumnya</a>
        <a href="/page2" class="text-base flex items-center text-blue31 font-semibold">Selanjutnya
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#6AA4D9" viewBox="0 0 24 24">
                <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
            </svg>
        </a>
    </div>
</section>

<script>
    function handleMenu() {
        const menu = document.getElementById('menuModul');

        if (menu.classList.contains('hidden')) {
            // Tampilkan menu dengan animasi slide-in
            menu.classList.remove('hidden');
            menu.classList.remove('animate-slideOut');
            menu.classList.add('animate-slideIn');
        } else {
            // Sembunyikan menu dengan animasi slide-out
            menu.classList.remove('animate-slideIn');
            menu.classList.add('animate-slideOut');
            // Tambahkan kelas 'hidden' setelah animasi selesai
            menu.addEventListener('animationend', () => {
                if (menu.classList.contains('animate-slideOut')) {
                    menu.classList.add('hidden');
                }
            }, { once: true });
        }
    }
</script>



