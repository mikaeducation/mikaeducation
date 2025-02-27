<div id="overlay" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 hidden z-40"></div>
<header class="w-full h-24 head-shadow flex justify-center items-center sticky top-0 z-50 bg-white">
    <div class="w-full h-full hidden md:flex lg:flex justify-center">
        <div class="flex justify-between md:justify-between lg:justify-center items-center h-full w-3/4 ">
            <div class="flex justify-center items-center mr-auto">
                <a href="/" class="flex items-center">
                    <div class="mr-2">
                        <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="h-12 w-12">
                    </div>
                    <h1 class="font-bold text-2xl text-blue6a whitespace-pre-line leading-6">MIKA 
                        EDUCATION </h1>
                </a>
            </div>
            <div class="w-2/3 text-xl text-blue6a font-medium tracking-wide">
                <nav class="flex items-center justify-end">
                    <div class="w-5/6 hidden md:hidden lg:flex items-center justify-end md:justify-end lg:justify-start">
                        <form action="/search" method="GET" class="w-4/5 h-12 flex justify-center items-center md:border-2 md:border-blue6a md:rounded border-2">
                            <input name="query" required type="text" placeholder="Apa yang akan Anda pelajari?" class="w-full text-base hidden md:flex pl-2 bg-transparent focus:outline-none placeholder:opacity-0 placeholder:md:opacity-100">
                            <button type="submit" class="p-1 mr-0 md:mr-1 rounded md:bg-blue6a flex items-center justify-center hover:border-blue31 hover:bg-blue31">
                                <svg class="md:flex hidden" width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="14.6562" cy="14.25" r="8.75" stroke="white" stroke-width="2"/>
                                    <path d="M25.9062 25.5L22.1562 21.75" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                </svg>                                                                                  
                            </button>
                        </form>
                    </div>
                    <div class="flex items-center justify-center gap-6">
                        <a href="" class="pr-5 border-r-2 flex items-center border-blue6a border-opacity-50">
                            <svg width="55" height="55" viewBox="0 0 59 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.4167 18.8762C16.9629 14.2149 17.236 11.8842 18.4476 10.2011C19.1352 9.24595 20.025 8.45429 21.0537 7.88254C22.8664 6.875 25.213 6.875 29.9063 6.875V6.875C34.5995 6.875 36.9461 6.875 38.7588 7.88254C39.7875 8.45429 40.6773 9.24595 41.3649 10.2011C42.5765 11.8842 42.8496 14.2149 43.3958 18.8762L43.9825 23.8838C44.1935 25.6843 44.299 26.5845 44.599 27.4317C44.8991 28.2789 45.3837 29.0449 46.353 30.5768L49.7142 35.889C50.5722 37.245 51.0012 37.923 50.7161 38.4407C50.4311 38.9583 49.6288 38.9583 48.0241 38.9583H11.7884C10.1837 38.9583 9.3814 38.9583 9.09636 38.4407C8.81132 37.923 9.24032 37.245 10.0983 35.889L13.4595 30.5768C14.4288 29.0449 14.9134 28.2789 15.2135 27.4317C15.5135 26.5845 15.619 25.6843 15.83 23.8838L16.4167 18.8762Z" stroke="#6AA4D9" stroke-width="2"/>
                                <path d="M20.2394 38.9583C20.2394 40.1621 20.4895 41.3541 20.9753 42.4663C21.461 43.5784 22.1731 44.5889 23.0707 45.4401C23.9684 46.2913 25.034 46.9666 26.2068 47.4272C27.3796 47.8879 28.6366 48.125 29.9061 48.125C31.1755 48.125 32.4325 47.8879 33.6054 47.4272C34.7782 46.9666 35.8438 46.2913 36.7415 45.4401C37.6391 44.5889 38.3511 43.5784 38.8369 42.4663C39.3227 41.3541 39.5728 40.1621 39.5728 38.9583" stroke="#6AA4D9" stroke-width="2" stroke-linecap="round"/>
                            </svg>                                
                        </a>
                        <div class="relative group menu-container inline-block text-left">
                            <button class="flex items-center text-center focus:outline-none">
                                <div class="h-full flex items-center px-3 py-1 mr-2 text-center text-white bg-blue6a text-2xl font-medium border-2 border-blue6a transition rounded">
                                    @if(Auth::check() && Auth::user()->profile)
                                        {{ strtoupper(substr(Auth::user()->profile->first_name, 0, 1)) }}
                                    @else
                                        <p title="Masuk/Daftar Akun" class="py-1 font-medium flex items-center tracking-normal bg-blue6a text-white">
                                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M19.7628 19.9054C20.3157 19.7902 20.6449 19.2117 20.3702 18.7183C19.7646 17.6307 18.8106 16.6749 17.5902 15.9465C16.0184 15.0085 14.0925 14.5 12.1113 14.5C10.1301 14.5 8.20425 15.0085 6.63245 15.9465C5.41202 16.6749 4.45799 17.6307 3.85241 18.7183C3.57771 19.2117 3.90695 19.7902 4.45976 19.9054C9.50657 20.9572 14.716 20.9572 19.7628 19.9054Z" fill="#fff"/>
                                                <circle cx="12.1113" cy="8.5" r="5" fill="#fff"/>
                                            </svg>
                                        </p>
                                    @endif
                                </div>
                                <svg width="38" height="38" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 9L12 15L6 9" stroke="#6AA4D9" stroke-width="2"/>
                                </svg>
                            </button>
                            <div class="absolute right-0 w-72 bg-white bg-opacity-0 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-10">
                                <div class="bg-blue6a mt-5 rounded">
                                    <div class="absolute top-4 right-9 transform -translate-y-1 w-8 h-8 z-10 bg-blue6a rotate-45"></div>
                                    <ul class="py-1 px-1 z-20 relative text-white">
                                        <li><a href="/profile" class="block px-4 py-2 hover:text-blue6a hover:bg-white">Profil Anda</a></li>
                                        <li><a href="/learn" class="block px-4 py-2 hover:text-blue6a hover:bg-white">Beranda Pembelajaran</a></li>
                                        <li><a href="/preLearn" class="block px-4 py-2 hover:text-blue6a hover:bg-white">Aktivitas Belajar</a></li>
                                        <li><a href="/other" class="block px-4 py-2 hover:text-blue6a hover:bg-white">Program Lainnya</a></li>
                                        <li><a href="/" class="block px-4 pt-2 pb-3 mt-1 bg-white text-blue6a hover:text-white hover:bg-blue31">Kembali ke Halaman Utama</a></li>
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
                    EDUCATION </h1>
            </a>
        </div>
        <a href="" class="pr-5 border-r-2 mr-6 flex items-center border-blue6a border-opacity-50">
            <svg width="55" height="55" viewBox="0 0 59 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.4167 18.8762C16.9629 14.2149 17.236 11.8842 18.4476 10.2011C19.1352 9.24595 20.025 8.45429 21.0537 7.88254C22.8664 6.875 25.213 6.875 29.9063 6.875V6.875C34.5995 6.875 36.9461 6.875 38.7588 7.88254C39.7875 8.45429 40.6773 9.24595 41.3649 10.2011C42.5765 11.8842 42.8496 14.2149 43.3958 18.8762L43.9825 23.8838C44.1935 25.6843 44.299 26.5845 44.599 27.4317C44.8991 28.2789 45.3837 29.0449 46.353 30.5768L49.7142 35.889C50.5722 37.245 51.0012 37.923 50.7161 38.4407C50.4311 38.9583 49.6288 38.9583 48.0241 38.9583H11.7884C10.1837 38.9583 9.3814 38.9583 9.09636 38.4407C8.81132 37.923 9.24032 37.245 10.0983 35.889L13.4595 30.5768C14.4288 29.0449 14.9134 28.2789 15.2135 27.4317C15.5135 26.5845 15.619 25.6843 15.83 23.8838L16.4167 18.8762Z" stroke="#6AA4D9" stroke-width="2"/>
                <path d="M20.2394 38.9583C20.2394 40.1621 20.4895 41.3541 20.9753 42.4663C21.461 43.5784 22.1731 44.5889 23.0707 45.4401C23.9684 46.2913 25.034 46.9666 26.2068 47.4272C27.3796 47.8879 28.6366 48.125 29.9061 48.125C31.1755 48.125 32.4325 47.8879 33.6054 47.4272C34.7782 46.9666 35.8438 46.2913 36.7415 45.4401C37.6391 44.5889 38.3511 43.5784 38.8369 42.4663C39.3227 41.3541 39.5728 40.1621 39.5728 38.9583" stroke="#6AA4D9" stroke-width="2" stroke-linecap="round"/>
            </svg>                                
        </a>
        <button onclick="toggleMenu()" id="menuLearn-toggle-btn" class="flex items-center justify-center">
            <div class="h-full flex items-center px-3 py-1 text-center text-white bg-blue6a text-2xl font-medium border-2 border-blue6a hover:border-blue31 transition rounded">
                @if(Auth::check() && Auth::user()->profile)
                    {{ strtoupper(substr(Auth::user()->profile->first_name, 0, 1)) }}
                @else
                    <p title="Masuk/Daftar Akun" class="py-1 font-medium flex items-center tracking-normal bg-blue6a text-white">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.7628 19.9054C20.3157 19.7902 20.6449 19.2117 20.3702 18.7183C19.7646 17.6307 18.8106 16.6749 17.5902 15.9465C16.0184 15.0085 14.0925 14.5 12.1113 14.5C10.1301 14.5 8.20425 15.0085 6.63245 15.9465C5.41202 16.6749 4.45799 17.6307 3.85241 18.7183C3.57771 19.2117 3.90695 19.7902 4.45976 19.9054C9.50657 20.9572 14.716 20.9572 19.7628 19.9054Z" fill="#fff"/>
                            <circle cx="12.1113" cy="8.5" r="5" fill="#fff"/>
                        </svg>                                        
                    </p>
                @endif
            </div>
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 9L12 15L6 9" stroke="#6AA4D9" stroke-width="2"/>
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
            <a href="/" class="w-full pb-5 border-b-2 border-bluee3 hover:text-2xl">Profil</a>
            <a href="" class="w-full pb-5 border-b-2 border-bluee3 hover:text-2xl">Aktivitas Belajar</a>
            <a href="/" class="w-full pb-5 border-b-2 border-bluee3 hover:text-2xl">Program Lainnya</a>
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

</script>
