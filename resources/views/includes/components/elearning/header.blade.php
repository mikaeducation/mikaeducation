<header class="w-full h-20 head-shadow mb-8 md:mb-12 flex justify-between items-center sticky top-0 bg-white z-50">
    <div class="w-full h-full flex justify-center">
        <div class="flex justify-center items-center h-full w-3/4">
            <div class="h-full flex md:flex lg:hidden items-center justify-center">
                <button onclick="toggleMenu()" id="menuLearn-toggle-btn">
                    <svg width="44" height="44" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.25 8.75H23.75" stroke="#6AA4D9" stroke-width="2" stroke-linecap="round"/>
                        <path d="M6.25 15H23.75" stroke="#6AA4D9" stroke-width="2" stroke-linecap="round"/>
                        <path d="M6.25 21.25H23.75" stroke="#6AA4D9" stroke-width="2" stroke-linecap="round"/>
                    </svg>                        
                </button>
            </div>
            <div id="menuLearn" class="w-full h-screen fixed flex-col justify-start items-center bg-white text-blue6a font-bold top-0 z-40 head-shadow hidden">
                <div class="w-full flex justify-start items-start py-5 pl-8 border-b-2 border-bluee3 relative">
                    <a href="/" class="flex items-start">
                        <div class="h-10 w-10 mr-2">
                            <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="h-full w-full">
                        </div>
                        <h1 class="font-bold text-2xl text-blue6a whitespace-pre-line leading-5">MIKA
                            EDUCATION
                        </h1>
                    </a>
                    <button onclick="toggleMenu()" class="absolute right-5 top-1/2 transform -translate-y-1/2 h-10 w-10 flex justify-center items-center text-blue31 hover:text-blue6a hover:border-2 hover:rounded-full hover:border-blue6a focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <nav class="w-full flex flex-col justify-start items-start space-y-4 pt-5 pb-10 pl-5 pr-5">
                    <a href="/" class="w-full px-4 pb-5 border-b-2 border-bluee3 hover:text-2xl text-lg font-medium">Beranda</a>
                    <a href="/" class="w-full px-4 pb-5 border-b-2 border-bluee3 hover:text-2xl text-lg font-medium">Profile</a>
                    <a href="" class="w-full px-4 pb-5 border-b-2 border-bluee3 hover:text-2xl text-lg font-medium">Pembelajaran Saya</a>
                    <a href="" class="w-full px-4 pb-5 border-b-2 border-bluee3 hover:text-2xl text-lg font-medium">Kegiatan Lainnya</a>
                    <a href="" class="w-full px-4 hover:text-2xl text-lg font-medium">Bantuan</a>
                </nav>
            </div>
            <div class="w-1 h-1/2 ml-2 bg-blue6a flex md:flex lg:hidden"></div>
            <div class="h-full flex justify-center items-center mr-auto px-4">
                <a href="/" class="flex items-center">
                    <div class="h-10 w-10 mr-2">
                        <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="h-full w-full">
                    </div>
                    <h1 class="font-bold text-2xl text-blue6a whitespace-pre-line leading-5">MIKA
                        EDUCATION
                    </h1>
                </a>
            </div>
            <div class="w-5/6 hidden md:hidden lg:flex items-start justify-center">
                <form action="/search" method="GET" class="w-1/2 h-10 flex justify-center items-center md:border-2 md:border-blue6a md:rounded-full border-">
                    <input name="query" required type="text" placeholder="Apa yang Anda pelajari?" class="w-full hidden md:flex pl-2 bg-transparent focus:outline-none placeholder:opacity-0 placeholder:md:opacity-100">
                    <button type="submit" class="h-10 w-10 md:h-8 mr-0 md:mr-1 md:w-10 rounded-full md:bg-blue6a flex items-center justify-center">
                        <svg class="md:flex hidden" width="20" height="20" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="14.6562" cy="14.25" r="8.75" stroke="white" stroke-width="2"/>
                            <path d="M25.9062 25.5L22.1562 21.75" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        </svg>                                                                                  
                    </button>
                </form>
            </div>
            <div class="h-full hidden md:hidden lg:flex md:items-center md:space-x-8">
                <div class="h-10 w-auto flex">
                    <a href="" class="h-full w-full flex">
                        <div class="h-full w-10 flex justify-center items-center">
                            <img src="{{ asset('images/Bell.png') }}" alt="">
                        </div>
                    </a>
                    <div class="h-full w-1 mx-4 bg-blue6a"></div>
                    <a href="/menu" class="h-full w-auto flex justify-center items-center">
                        <button id="menu-btn" class="h-full w-10 p-2 border-2 border-blue6a rounded-full bg-blue6a hover:bg-white hover:text-white focus:outline-none">
                            <svg class="menu-icon w-full h-6" width="38" height="36" viewBox="0 0 38 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.9834 28.7092C31.5848 28.5902 31.9407 27.9603 31.6545 27.4182C30.7408 25.6872 29.2002 24.1658 27.1885 23.0262C24.7736 21.6582 21.8148 20.9167 18.7709 20.9167C15.727 20.9167 12.7681 21.6582 10.3532 23.0262C8.34152 24.1658 6.80095 25.6871 5.88718 27.4182C5.60103 27.9603 5.95693 28.5902 6.55825 28.7092L11.0086 29.5895C16.1338 30.6034 21.4079 30.6034 26.5331 29.5895L30.9834 28.7092Z" fill="white"/>
                                <ellipse cx="18.7713" cy="12.1667" rx="7.68193" ry="7.29167" fill="white"/>
                            </svg>                        
                        </button>
                        <div class="w-10 h-full">
                            <img src="{{ asset('images/Expand_down.png') }}" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="lg:hidden md:flex flex items-center gap-1">
                <button onclick="toggleMenu()" id="menuLearn-toggle-btn" class="w-full h-full">
                    <svg class="" width="44" height="44" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25.2083" cy="25.2084" r="16.0417" stroke="#6AA4D9" stroke-width="2"/>
                        <path d="M45.8333 45.8333L38.9583 38.9583" stroke="#6AA4D9" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>
                <a onclick="toggleMenu()" id="menuLearn-toggle-btn" href="" class="h-full w-full flex mr-2">
                    <div class="h-full w-10 flex justify-center items-center">
                        <img src="{{ asset('images/Bell.png') }}" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
</header>

<script>
    function toggleMenu() {
    const menu = document.getElementById('menuLearn');

    if (menu.classList.contains('hidden')) {
        // Tampilkan menu dengan animasi slide-in
        menu.classList.remove('hidden');
        menu.classList.remove('animate-slideOut');
        menu.classList.add('animate-slideIn');
    } else {
        // Sembunyikan menu dengan animasi slide-out
        menu.classList.remove('animate-slideIn');
        menu.classList.add('animate-slideOut');
        // Tunggu animasi selesai, lalu tambahkan kelas 'hidden'
        menu.addEventListener('animationend', () => {
            if (menu.classList.contains('animate-slideOut')) {
                menu.classList.add('hidden');
            }
        }, { once: true });
    }
}
</script>