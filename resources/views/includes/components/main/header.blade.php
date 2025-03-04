<div id="overlay" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 hidden z-40"></div>
<header class="w-full h-24 head-shadow flex justify-center items-center sticky top-0 z-50 bg-white">
    <div class="w-full h-full hidden md:flex lg:flex justify-center">
        <div class="flex justify-between md:justify-between lg:justify-center items-center h-full w-3/4">
            <div class="flex justify-center items-center mr-auto">
                <a href="/" class="flex items-center">
                    <div class="xl:mr-2 mr-1.5">
                        <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="xl:h-12 h-10 xl:w-12 w-10">
                    </div>
                    <h1 class="font-bold text-xl xl:text-2xl text-blue6a whitespace-pre-line leading-5 xl:leading-6">MIKA<br>EDUCATION </h1>
                </a>
            </div>
            <div class="w-3/4 text-lg xl:text-xl text-blue6a font-medium tracking-wide relative">
                <nav class="flex items-center justify-end gap-6 xl:gap-8" id="nav-menu">
                    <div class="relative group menu-container">
                        <a href="#" class="hidden md:hidden lg:flex hover:text-blue31 transition menu-trigger">Informasi Lainnya</a>
                        <div class="absolute right-0 w-60 bg-transparent group-hover:opacity-100 transition duration-300 invisible group-hover:visible">
                            <div class="absolute top-4 right-10 transform -translate-y-1 w-8 h-8 z-10 bg-blue6a rotate-45"></div>
                            <ul class="py-1 top-5 px-1 z-20 relative text-white bg-blue6a rounded ">
                                <li><a href="/news" class="block px-4 py-2 z-50 hover:bg-white hover:text-blue6a">Berita tentang kami</a></li>
                                <li><a href="/article" class="block px-4 py-2 hover:bg-white hover:text-blue6a">Artikel kami</a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="/aboutus" class="hidden md:hidden lg:flex hover:text-blue31 transition menu-trigger">Tentang Kami</a>
                    <div class="flex items-center justify-center">
                        <div class="pr-5 border-r-2 border-blue6a border-opacity-50">
                            <a href="{{ Auth::check() ? '/learn' : '/login' }}" class="flex items-center text-center font-medium bg-blue6a border-2 border-blue6a hover:bg-blue31 hover:border-blue31 transition duration-300 text-white rounded px-4 py-1.5 gap-1">
                                <svg width="24" height="24" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.65625 13.4583H7.625C8.93668 13.4583 10 14.5216 10 15.8333V8.51041C10 6.31431 10 5.21626 9.45275 4.43923C9.25441 4.15761 9.00905 3.91224 8.72742 3.7139C7.9504 3.16666 6.85235 3.16666 4.65625 3.16666C3.92422 3.16666 3.5582 3.16666 3.29919 3.34907C3.20532 3.41519 3.12353 3.49697 3.05742 3.59085C2.875 3.84986 2.875 4.21587 2.875 4.94791V11.6771C2.875 12.4091 2.875 12.7751 3.05742 13.0341C3.12353 13.128 3.20532 13.2098 3.29919 13.2759C3.5582 13.4583 3.92422 13.4583 4.65625 13.4583Z" stroke="#fff" stroke-width="2"/>
                                    <path d="M15.3438 13.4583H12.375C11.0633 13.4583 10 14.5216 10 15.8333V8.51041C10 6.31431 10 5.21626 10.5472 4.43923C10.7456 4.15761 10.991 3.91224 11.2726 3.7139C12.0496 3.16666 13.1477 3.16666 15.3438 3.16666C16.0758 3.16666 16.4418 3.16666 16.7008 3.34907C16.7947 3.41519 16.8765 3.49697 16.9426 3.59085C17.125 3.84986 17.125 4.21587 17.125 4.94791V11.6771C17.125 12.4091 17.125 12.7751 16.9426 13.0341C16.8765 13.128 16.7947 13.2098 16.7008 13.2759C16.4418 13.4583 16.0758 13.4583 15.3438 13.4583Z" stroke="#fff" stroke-width="2"/>
                                </svg>
                                Pembelajaran
                            </a>
                        </div>
                        <div class="relative group text-left flex pl-5">
                            <a href="{{ Auth::check() ? '/profile' : '/login' }}" class="text-center flex items-center justify-center md:mr-2 lg:mr-0">
                                <button id="menu-btn" class="h-full flex items-center px-3 py-1 text-center text-blue6a text-2xl font-medium border-2 border-blue6a  transition rounded hover:border-blue31">
                                    @if(Auth::check() && Auth::user()->profile)
                                        {{ strtoupper(substr(Auth::user()->profile->first_name, 0, 1)) }}
                                    @else
                                        <p title="Masuk/Daftar Akun" class="py-1 flex items-center tracking-normal">
                                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M19.7628 19.9054C20.3157 19.7902 20.6449 19.2117 20.3702 18.7183C19.7646 17.6307 18.8106 16.6749 17.5902 15.9465C16.0184 15.0085 14.0925 14.5 12.1113 14.5C10.1301 14.5 8.20425 15.0085 6.63245 15.9465C5.41202 16.6749 4.45799 17.6307 3.85241 18.7183C3.57771 19.2117 3.90695 19.7902 4.45976 19.9054C9.50657 20.9572 14.716 20.9572 19.7628 19.9054Z" fill="#6AA4D9"/>
                                                <circle cx="12.1113" cy="8.5" r="5" fill="#6AA4D9"/>
                                            </svg>                                        
                                        </p>
                                    @endif
                                </button>
                            </a>
                        </div>
                        <div class="relative group menu-container">
                            <svg width="38" height="38" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="items-center flex lg:hidden">
                                <path d="M18 9L12 15L6 9" stroke="#6AA4D9" stroke-width="2"/>
                            </svg>
                            <div class="absolute right-0 top-0 pt-10 w-72 bg-white bg-opacity-0 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-10">
                                <div class="bg-blue6a mt-4 rounded">
                                    <div class="absolute top-12 right-[6px] transform -translate-y-1 w-6 h-6 z-10 bg-blue6a rotate-45"></div>
                                    <ul class="py-1 px-1 z-20 relative text-white bg-blue6a rounded">
                                        <!-- Menu utama dengan submenu -->
                                        <div class="relative group/submenu">
                                            <div class="block px-4 py-2 cursor-pointer hover:bg-white hover:text-blue6a">Informasi lainnya</div>
                                            <div class="absolute right-full top-0 w-52 z-20 opacity-0 invisible group-hover/submenu:opacity-100 group-hover/submenu:visible transition-opacity duration-200 rounded shadow-lg">
                                                <div class="absolute top-2.5 right-3.5 transform -translate-y-1 w-8 h-8 z-10 bg-blue6a rotate-45"></div>
                                                <ul class="py-1 px-1 w-48 relative z-20 text-white bg-blue6a rounded">
                                                    <div class="block hover:bg-white hover:text-blue6a"></div>
                                                    <li><a href="/news" class="block px-4 py-2 z-50 hover:bg-white hover:text-blue6a">Berita tentang kami</a></li>
                                                    <li><a href="/article" class="block px-4 py-2 hover:bg-white hover:text-blue6a">Artikel kami</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <li><a href="/aboutus" class="block px-4 py-2 hover:bg-white hover:text-blue6a">Tentang kami</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>                  
                </nav>
            </div>
        </div>
    </div>
    <div class="h-full w-3/4 py-6 flex md:hidden lg:hidden items-center justify-between">
        <div class="flex justify-center items-center mr-auto">
            <a href="/" class="flex items-center">
                <div class="mr-2">
                    <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="h-12 w-12">
                </div>
                <h1 class="font-bold text-2xl text-blue6a whitespace-pre-line leading-6">MIKA 
                    EDUCATION</h1>
            </a>
        </div>
        <button onclick="toggleMenu()" id="menuLearn-toggle-btn" class="flex items-center justify-center">
            <div class="h-full hidden md:flex items-center px-3 py-1 text-center text-blue6a text-2xl font-medium border-2 border-blue6a transition rounded">
                @if(Auth::check() && Auth::user()->profile)
                    {{ strtoupper(substr(Auth::user()->profile->first_name, 0, 1)) }}
                @else
                    <p title="Masuk/Daftar Akun" class="py-1 font-medium flex items-center tracking-normal text-white">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.7628 19.9054C20.3157 19.7902 20.6449 19.2117 20.3702 18.7183C19.7646 17.6307 18.8106 16.6749 17.5902 15.9465C16.0184 15.0085 14.0925 14.5 12.1113 14.5C10.1301 14.5 8.20425 15.0085 6.63245 15.9465C5.41202 16.6749 4.45799 17.6307 3.85241 18.7183C3.57771 19.2117 3.90695 19.7902 4.45976 19.9054C9.50657 20.9572 14.716 20.9572 19.7628 19.9054Z" fill="#6AA4D9"/>
                            <circle cx="12.1113" cy="8.5" r="5" fill="#6AA4D9"/>
                        </svg>                                        
                    </p>
                @endif
            </div>
            <svg class="w-10 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke="#6AA4D9" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>
    <div id="menuLearn" class="w-full h-screen py-2 px-12 fixed flex-col justify-start items-center bg-white text-blue6a font-bold top-0 z-40 head-shadow hidden">
        <div class="w-full flex justify-start items-start py-6 border-b-2 border-bluee3 relative">
            <a href="/" class="flex items-center">
                <div class="mr-2">
                    <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="h-12 w-12">
                </div>
                <h1 class="font-bold text-2xl text-blue6a whitespace-pre-line leading-6">MIKA 
                    EDUCATION </h1>
            </a>
            <button onclick="toggleMenu()" class="absolute right-5 top-1/2 transform -translate-y-1/2 h-10 w-10 flex justify-center items-center text-blue31 hover:text-blue6a hover:border-2 hover:rounded-full hover:border-blue6a focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <nav class="w-full flex flex-col justify-start items-start space-y-4 py-6 text-xl font-medium">
            <a href="/" class="w-full pb-5 border-b-2 border-bluee3 hover:text-2xl">Beranda</a>
            <a href="/profile" class="w-full pb-5 border-b-2 border-bluee3 hover:text-2xl">Profil</a>
            <a href="{{ Auth::check() ? '/learn' : '/login' }}" class="w-full pb-5 border-b-2 border-bluee3 hover:text-2xl">Pembelajaran</a>
            <!-- Sub-menu -->
            <div class="w-full pb-5 border-b-2 border-bluee3">
                <button onclick="toggleSubMenu()" class="w-full text-left hover:text-2xl">
                    Informasi Lainnya
                </button>
                <div id="subMenuInfo" class="hidden pl-4 mt-4 space-y-4">
                    <a href="/news" class="block hover:text-blue31">Berita tentang kami</a>
                    <a href="/article" class="block hover:text-blue31">Artikel kami</a>
                </div>
            </div>
    
            <a href="/aboutus" class="w-full pb-5 border-b-2 border-bluee3 hover:text-2xl">Tentang Kami</a>
        </nav>
    </div>
</header>

{{-- Fixed chat icon /bantuan --}}
<div class="fixed bottom-5 right-5 z-50 flex flex-col items-end">
    <button id="chat-icon-button" class="bg-blue6a shadow1 w-16 h-14 flex items-center justify-center rounded rounded-l-full rounded-br-full hover:bg-blue31 transition duration-300" onclick="toggleChat()">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21H7.5C6.10218 21 5.40326 21 4.85195 20.7716C4.11687 20.4672 3.53284 19.8831 3.22836 19.1481C3 18.5967 3 17.8978 3 16.5V12C3 7.02944 7.02944 3 12 3ZM16 11C16 10.4477 15.5523 10 15 10H9C8.44772 10 8 10.4477 8 11C8 11.5523 8.44772 12 9 12H15C15.5523 12 16 11.5523 16 11ZM13 15C13 14.4477 12.5523 14 12 14H9C8.44772 14 8 14.4477 8 15C8 15.5523 8.44772 16 9 16H12C12.5523 16 13 15.5523 13 15Z"fill="white"/>
        </svg>
    </button>
    <button id="chat-close-button" class="hidden text-white text-4xl font-medium shadow1 rounded rounded-l-full rounded-br-full px-4 bg-blue6a" onclick="toggleChat()">
    &times;
    </button>
    <div id="chat-popup" class="hidden bg-white w-96 shadow-lg rounded-lg overflow-hidden mt-3">
        <div class="w-full bg-blue31 p-4 space-y-2">
            <div class="flex text-white space-x-2 items-center">
                <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="h-10 w-10">
            </div>
            <div class="text-white flex items-center justify-between">
                <div>
                    <div class="text-xl font-medium">Hai, Selamat Datang di MIKA Education</div>
                    <p class="text-sm italic">Jika Anda butuh bantuan, harap tinggalkan kami pesan!</p>
                </div>
            </div>
        </div>
        <div class="w-full p-4 space-y-3 bg-gray-100 h-72">
            <div class="w-full flex items-start space-x-2">
                <div class="w-1/12 flex text-white space-x-2 items-center bg-red-100">
                    <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="w-full">
                </div>
                <div class="w-11/12 bg-white text-gray-700 p-3 rounded-lg shadow-sm text-sm">
                    Ada yang bisa kami bantu? Tanyakan saja dan kami akan membalas chat Anda secepat mungkin!
                </div>
            </div>
        </div>
        <div class="p-4 border-t bg-blue31 flex items-center space-x-2">
            <input type="text" placeholder="Balas di sini..." class="flex-1 border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue6a"/>
            <button class="bg-white text-white p-2 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#31587C" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
            </button>
        </div>
    </div>
</div>

<script>
    function toggleChat() {
        const chatPopup = document.getElementById("chat-popup");
        const chatIconButton = document.getElementById("chat-icon-button");
        const chatCloseButton = document.getElementById("chat-close-button");
        chatPopup.classList.toggle("hidden");
        chatIconButton.classList.toggle("hidden");
        chatCloseButton.classList.toggle("hidden");
    }


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

    document.addEventListener("DOMContentLoaded", function () {
        const overlay = document.getElementById("overlay");
        const menuContainers = document.querySelectorAll(".menu-container");
        
        menuContainers.forEach(container => {
            container.addEventListener("mouseenter", () => {
                overlay.classList.remove("hidden");
            });

            container.addEventListener("mouseleave", () => {
                overlay.classList.add("hidden");
            });
        });
    });

    function toggleSubMenu() {
            let subMenu = document.getElementById("subMenuInfo");
            subMenu.classList.toggle("hidden");
    }

</script>