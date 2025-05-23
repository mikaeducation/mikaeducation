<div id="overlay" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 hidden z-40"></div>
<header class="w-full h-24 content-shadows flex justify-center items-center sticky top-0 z-50 bg-white">
    <div class="w-full h-full flex lg:flex justify-center">
        <div class="flex justify-between lg:justify-center items-center h-full w-3/4 ">
            <div class="w-fit flex justify-start items-center mr-auto">
                <a href="/learn" class="flex items-center">
                    <div class="mr-2">
                        <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="h-12 w-12">
                    </div>
                    <h1 class="font-bold text-2xl text-blue6a whitespace-pre-line leading-6">MIKA 
                        EDUCATION </h1>
                </a>
            </div>
            <div class="w-2/5 xl:w-1/2 md:flex hidden items-center justify-center">
                <div class="w-full flex flex-col items-center justify-center">
                    <div class="h-10 flex items-center rounded border-blue6a border-2 w-full">
                        <input type="text" id="searchInput" placeholder="Apa yang akan Anda pelajari?" 
                            class="w-full h-full text-base px-2 py-2 text-blue31 rounded focus:outline-none">
                        <button id="searchButton" class="w-fit h-full text-white rounded text-base md:text-xl font-medium px-1">
                            <svg class="bg-blue6a rounded" width="31" height="31" viewBox="0 0 31 31" fill="none" 
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="14.6562" cy="14.25" r="8.75" stroke="#fff" stroke-width="2"/>
                                <path d="M25.9062 25.5L22.1562 21.75" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
                            </svg> 
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-1/4 text-lg text-blue6a font-medium tracking-wide">
                <button onclick="toggleMenu()" id="menuLearn-toggle-btn" class="w-full flex items-center justify-end md:hidden">
                    <svg class="w-10 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke="#6AA4D9" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <nav class="md:flex hidden items-center justify-end ">
                    <div class="flex items-center justify-center">
                        {{-- {{ Auth::check() ? '/profile' : '/login' }} Login/Regis di nonaktifikan--}}
                        <div class="relative group text-left">
                            <a href="/profile" class="text-center flex items-center justify-center md:mr-2 lg:mr-0">
                                <button id="menu-btn" class="h-full flex items-center z-30 text-center text-blue6a text-2xl font-medium border-2 border-blue6a transition rounded hover:border-blue31">
                                    @if(Auth::check() && Auth::user()->profile)
                                        @if(Auth::user()->profile->profile_image)
                                            <img src="{{ asset(Auth::user()->profile->profile_image) }}" 
                                                alt="Profil" 
                                                class="w-10 h-10 object-cover">
                                        @else
                                            <span class="flex items-center justify-center px-3 h-10 text-blue6a font-normal text-3xl">
                                                {{ strtoupper(substr(Auth::user()->profile->first_name, 0, 1)) }}
                                            </span>
                                        @endif
                                    @else
                                        <p title="Masuk/Daftar Akun" class="px-3 h-10 flex items-center tracking-normal">
                                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M19.7628 19.9054C20.3157 19.7902 20.6449 19.2117 20.3702 18.7183C19.7646 17.6307 18.8106 16.6749 17.5902 15.9465C16.0184 15.0085 14.0925 14.5 12.1113 14.5C10.1301 14.5 8.20425 15.0085 6.63245 15.9465C5.41202 16.6749 4.45799 17.6307 3.85241 18.7183C3.57771 19.2117 3.90695 19.7902 4.45976 19.9054C9.50657 20.9572 14.716 20.9572 19.7628 19.9054Z" fill="#6AA4D9"/>
                                                <circle cx="12.1113" cy="8.5" r="5" fill="#6AA4D9"/>
                                            </svg>                                        
                                        </p>
                                    @endif
                                </button>
                            </a>
                        </div>
                        <div class="relative group menu-container lg:pl-2">
                            <svg width="38" height="38" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 9L12 15L6 9" stroke="#6AA4D9" stroke-width="2"/>
                            </svg>
                            <div class="absolute top-0 right-0 pt-10 w-72 bg-white bg-opacity-0 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-10">
                                <div class="bg-blue6a mt-4 rounded">
                                    <div class="absolute top-10 right-1.5 transform translate-y-1 w-6 h-6 z-10 bg-blue6a rotate-45"></div>
                                    <ul class="py-1 px-1 z-20 relative text-white">
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
    <div id="menuLearn" class="w-full h-screen py-2 px-12 fixed flex-col justify-start items-center bg-white text-blue6a font-bold top-0 z-40 head-shadow hidden">
        <div class="w-full flex justify-start items-start py-6 border-b-2 border-bluee3 relative">
            <a href="/" class="flex items-center">
                <div class="mr-2">
                    <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="h-12 w-12">
                </div>
                <h1 class="font-bold text-2xl text-blue6a whitespace-pre-line leading-6">MIKA 
                    EDUCATION </h1>
            </a>
            <button onclick="toggleMenu()" class="absolute right-5 top-1/2 transform -translate-y-1/2 h-10 w-10 flex justify-center items-center text-blue6a hover:text-blue6a hover:border-2 hover:rounded-full hover:border-blue6a focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" troke="#6AA4D9" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <nav class="w-full flex flex-col justify-start items-start space-y-4 py-6 text-xl font-medium">
            <a href="/learn" class="w-full pb-5 border-b-2 border-bluee3 hover:text-2xl">Beranda</a>
            <a href="/profile" class="w-full pb-5 border-b-2 border-bluee3 hover:text-2xl">Profil Anda</a>
            <a href="/preLearn" class="w-full pb-5 border-b-2 border-bluee3 hover:text-2xl">Aktivitas Belajar</a>
            <a href="/other" class="w-full pb-5 border-b-2 border-bluee3 hover:text-2xl">Program Lainnya</a>
            <a href="/" class="w-full bg-blue6a text-white py-3 pl-3 rounded border-b-2 border-bluee3 hover:bg-blue31">Kembali ke Halaman Utama</a>
        </nav>
    </div>
</header>

{{-- Fixed chat icon /bantuan --}}
<div id="chat-overlay" class="hidden fixed inset-0 bg-black opacity-50 z-40"></div>
<div class="fixed bottom-5 right-5 z-50 flex flex-col items-end">
    <button id="chat-icon-button" class="bg-blue6a shadow1 w-16 h-14 flex items-center justify-center rounded rounded-l-full rounded-br-full hover:bg-blue31 transition duration-300" onclick="toggleChat()">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21H7.5C6.10218 21 5.40326 21 4.85195 20.7716C4.11687 20.4672 3.53284 19.8831 3.22836 19.1481C3 18.5967 3 17.8978 3 16.5V12C3 7.02944 7.02944 3 12 3ZM16 11C16 10.4477 15.5523 10 15 10H9C8.44772 10 8 10.4477 8 11C8 11.5523 8.44772 12 9 12H15C15.5523 12 16 11.5523 16 11ZM13 15C13 14.4477 12.5523 14 12 14H9C8.44772 14 8 14.4477 8 15C8 15.5523 8.44772 16 9 16H12C12.5523 16 13 15.5523 13 15Z" fill="white"/>
        </svg>
    </button>
    <button id="chat-close-button" class="hidden text-white text-4xl font-medium shadow1 rounded rounded-l-full rounded-br-full px-4 bg-blue6a" onclick="toggleChat()"> &times;</button>
    <div id="chat-popup" class="hidden bg-gray-200 w-96 rounded-lg overflow-hidden shadow1 mt-3 z-50">
        <div class="w-full bg-blue31 p-4 space-y-2">
            <div class="flex text-white space-x-2 items-center">
                <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="h-10 w-10">
            </div>
            <div class="text-white flex items-center justify-between">
                <div>
                    <div class="text-xl font-medium">Hai, Selamat Datang di MIKA Education</div>
                    <p class="text-sm font-light italic">Jika memerlukan bantuan, Anda dapat memanfaatkan layanan ini!
                </div>
            </div>
        </div>

        <div>
            <div class="w-full p-4 space-y-2 bg-gray-200 overflow-y-auto">
                <div id="faq-default" class="w-full h-[350px] flex flex-col">
                    <div class="flex items-start space-x-2 pb-4">
                        <div class="w-1/12 flex text-white space-x-2 items-center">
                            <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="w-full">
                        </div>
                        <div class="w-11/12 flex flex-col items-start justify-start space-y-2">
                            <div class="space-y-1">
                                <div class="w-full bg-white text-blue31 text-justify p-3 rounded shadow-sm text-sm">
                                    <p>Anda dapat memilih pertanyaan yang sering diajukan (FAQ) dibawah ini. Jika tidak cukup membantu, silahkan pilih opsi chat dengan kami!
                                    </p>
                                </div>
                                <div class="w-full bg-white text-blue31 text-justify p-3 space-y-2 rounded shadow-sm text-sm font-medium">
                                    <div class="w-full flex flex-col pb-2 border-b-2">
                                        <button onclick="toggleFAQ(this)" class="w-full flex justify-between text-left ">
                                            <p class="w-11/12">Bagaimana caranya untuk memulai pembelajaran?</p>
                                            <svg width="24" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" 
                                                class="items-center flex opacity-50 transition-transform duration-300">
                                                <path d="M18 9L12 15L6 9" stroke="#31587C" stroke-width="2"/>
                                            </svg>
                                        </button>
                                        <div class="faq-text hidden w-full pt-2 font-normal">
                                            <p>Untuk memulai pembelajaran, Anda dapat <span class="font-medium">menekan tombol Mulai Belajar pada halaman utama pembelajaran atau Beranda Pembelajaran</span>. Pastikan Anda serius dan memiliki komitmen untuk dapat menyelesaikan pembelajaran dengan benar.</p>
                                        </div>
                                    </div>
                                    <div class="w-full flex flex-col pb-2 border-b-2">
                                        <button onclick="toggleFAQ(this)" class="w-full flex justify-between text-left">
                                            <p class="w-11/12">Dimana saya dapat melihat dan membaca informasi seputar pembelajaran?</p>
                                            <svg width="24" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" 
                                                class="items-center flex opacity-50 transition-transform duration-300">
                                                <path d="M18 9L12 15L6 9" stroke="#31587C" stroke-width="2"/>
                                            </svg>
                                        </button>
                                        <div class="faq-text hidden w-full pt-2 font-normal">
                                            <p>Anda dapat membaca informasi dan detail pembelajaran pada <span class="font-medium">halaman utama pembelajaran atau Beranda Pembelajaran</span>. Disana, Anda akan melihat informasi tentang pembelajaran, mulai dari Tema dan deskripsi Pembelajaran, rangkuman program pembelajaran, hingga detail pembelejaran pada tiap Modul yang disediakan.</p>
                                        </div>
                                    </div>
                                    <div class="w-full flex flex-col pb-2 border-b-2">
                                        <button onclick="toggleFAQ(this)" class="w-full flex justify-between text-left">
                                            <p class="w-11/12">Dimana saya dapat melihat laporan pembelajaran yang telah saya lakukan?</p>
                                            <svg width="24" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" 
                                                class="items-center flex opacity-50 transition-transform duration-300">
                                                <path d="M18 9L12 15L6 9" stroke="#31587C" stroke-width="2"/>
                                            </svg>
                                        </button>
                                        <div class="faq-text hidden w-full pt-2 font-normal">
                                            <p>Anda dapat melihat laporan pembelajaran yang dilakukan pada <span class="font-medium">halaman Aktivitas Belajar</span> yang dapat diakses pada ikon panah kebawah di bagian atas website. Laporan pembelajaran Anda akan otomatis masuk ke dalam Aktivitas Belajar ketika Anda telah berhasil menyelesaikan dan/atau sedang mengerjakan program pembelajaran.</p>
                                        </div>
                                    </div>
                                    <div class="w-full flex flex-col pb-2 border-b-2">
                                        <button onclick="toggleFAQ(this)" class="w-full flex justify-between text-left">
                                            <p class="w-11/12">Apakah ada pilihan program pembelajaran lainnya yang juga dapat saya pelajari?</p>
                                            <svg width="24" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" 
                                                class="items-center flex opacity-50 transition-transform duration-300">
                                                <path d="M18 9L12 15L6 9" stroke="#31587C" stroke-width="2"/>
                                            </svg>
                                        </button>
                                        <div class="faq-text hidden w-full pt-2 font-normal">
                                            <p>Untuk melihat program pembelajaran lainnya, Anda dapat mengakses <span class="font-medium">Program Lainnya</span> yang dapat diakses pada ikon panah kebawah di bagian atas website. Disana, Anda dapat memilih program pembelajaran yang Anda inginkan untuk memulai pembelajaran kembali. <br><br> <span class="font-medium">Catatan:</span> Anda dapat melakukan pengecekan secara berkala untuk melihat ketersediaan program pembelajaran.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-fit text-white text-justify flex flex-col gap-2 pt-2">
                                <button onclick="toggleChatAdmin()" class="flex items-center gap-2 bg-blue31 px-3 py-1 rounded hover:shadow-lg text-sm">
                                    <svg width="30" height="33" viewBox="0 0 51 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M41.9997 43.207C42.5894 43.0841 42.9398 42.47 42.6921 41.921C41.4893 39.2549 39.3122 36.9098 36.4141 35.1801C33.1395 33.2258 29.1273 32.1665 24.9998 32.1665C20.8723 32.1665 16.8601 33.2258 13.5855 35.1801C10.6874 36.9097 8.51031 39.2549 7.30749 41.921C7.05981 42.47 7.4102 43.0841 7.99981 43.207L16.8389 45.0491C22.2217 46.1709 27.7779 46.1709 33.1606 45.0491L41.9997 43.207Z" fill="white"/>
                                        <circle cx="25.0007" cy="19.6667" r="10.4167" fill="white"/>
                                        <path d="M46.8327 12.1665C46.8327 8.39527 46.8327 6.50965 45.6611 5.33808C44.4895 4.1665 42.6039 4.1665 38.8327 4.1665H38.166C34.3948 4.1665 32.5092 4.1665 31.3376 5.33808C30.166 6.50965 30.166 8.39527 30.166 12.1665V18.8332C30.166 19.776 30.166 20.2474 30.4589 20.5403C30.7518 20.8332 31.2232 20.8332 32.166 20.8332H38.8327C42.6039 20.8332 44.4895 20.8332 45.6611 19.6616C46.8327 18.49 46.8327 16.6044 46.8327 12.8332V12.1665Z" fill="#31587C" stroke="white" stroke-width="1.2"/>
                                        <path d="M35.375 10.4165L41.625 10.4165" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M35.375 14.5835H38.5" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                        
                                    <p class="font-medium">Kirim Pesan kepada Kami...</p>
                                </button>
                                <a href="https://wa.me/082156226440" class="h-fit flex items-center justify-start gap-3 font-medium bg-blue31 px-3 py-2 rounded hover:shadow-lg text-sm">
                                    <img src="https://img.icons8.com/pastel-glyph/128/FFFFFF/whatsapp--v2.png" alt="signing-a-document" class="h-7"/>                                
                                    atau Hubungi via WhatsApp...
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full bg-blue31"></div>
                </div>
                <div id="faq-chat-admin" class="hidden w-full h-[265px] space-y-2">
                    <div id="chat-admin-list" class="flex flex-col space-y-2 pb-4">
                        <div class="w-full flex items-start space-x-2">
                            <div class="w-1/12 flex items-center">
                                <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="w-full">
                            </div>
                            <div class="w-11/12 flex flex-col items-start justify-start space-y-1">
                                <div class="w-full bg-white text-blue31 text-justify p-3 rounded shadow-sm text-sm">
                                    <p>Ada yang bisa kami bantu? Silahkan tanyakan dan kami akan coba untuk membantu kendala Anda!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="chat-admin" class="p-4 hidden border-t bg-blue31">
                <form id="chat-form" class="flex items-center space-x-2">
                    @csrf
                    @if(Auth::check())
                    <input type="text" id="chat-input" name="message" placeholder="Balas di sini..." 
                    class="flex-1 border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue6a" required />
                        <button type="submit" id="send-button" class="bg-white text-white p-2 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#31587C" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                            </svg>
                        </button>
                    @else
                        <input type="text" placeholder="Anda harus login untuk mengirim pesan..." class="flex-1 border rounded px-4 py-2 bg-gray-300 text-blue31 cursor-not-allowed" disabled />
                        <a href="/login" class="bg-white text-blue31 text-base font-medium px-4 py-2 rounded">Login</a>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>



<script>

document.addEventListener("DOMContentLoaded", function () {
    const searchBtn = document.getElementById('searchButton');
    const searchInput = document.getElementById('searchInput');

    searchBtn.addEventListener('click', function () {
        const keyword = searchInput.value.trim();
        if (keyword !== '') {
            // Redirect ke halaman /learn dengan query string
            window.location.href = `/learn?search=${encodeURIComponent(keyword)}`;
        }
    });

    // Tekan enter = pencarian juga jalan
    searchInput.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            searchBtn.click();
        }
    });
});





    function toggleChat() {
        const chatPopup = document.getElementById("chat-popup");
        const chatIconButton = document.getElementById("chat-icon-button");
        const chatCloseButton = document.getElementById("chat-close-button");
        chatPopup.classList.toggle("hidden");
        chatIconButton.classList.toggle("hidden");
        chatCloseButton.classList.toggle("hidden");
    }

    function toggleChat() {
        const chatPopup = document.getElementById("chat-popup");
        const chatOverlay = document.getElementById("chat-overlay");
        const chatIconButton = document.getElementById("chat-icon-button");
        const chatCloseButton = document.getElementById("chat-close-button");

        // Toggle visibility
        chatPopup.classList.toggle("hidden");
        chatOverlay.classList.toggle("hidden");
        chatIconButton.classList.toggle("hidden");
        chatCloseButton.classList.toggle("hidden");
    }

    // Tutup chat jika klik di luar popup
    document.getElementById("chat-overlay").addEventListener("click", function () {
        toggleChat();
    });

    // Pilihan mode FAQ (Default) atau Chat dg chat-admin
    function toggleChatAdmin() {
        document.getElementById('faq-default').classList.toggle('hidden');
        document.getElementById('faq-chat-admin').classList.toggle('hidden');
        document.getElementById('chat-admin').classList.toggle('hidden');
    }

    // Buka tutup button FAQ
    function toggleFAQ(button) {
        let content = button.nextElementSibling;
        let icon = button.querySelector("svg");

        content.classList.toggle("hidden"); // Menampilkan/Menyembunyikan teks
        icon.classList.toggle("rotate-180"); // Animasi rotasi panah ke atas/bawah
    }


    document.addEventListener("DOMContentLoaded", function () {
    const chatForm = document.getElementById("chat-form");
    const chatInput = document.getElementById("chat-input");
    const chatList = document.getElementById("chat-admin-list");
    const sendButton = document.getElementById("send-button");

    chatForm.addEventListener("submit", function (e) {
        e.preventDefault();
        let message = chatInput.value.trim();

        if (message === "") return;

        fetch("{{ route('message.store') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
            body: JSON.stringify({ message: message }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                let warningMessage = document.createElement("div");
                warningMessage.classList.add("w-full", "bg-white", "rounded", "text-justify", "text-sm", "text-blue31", "p-3");
                warningMessage.innerHTML = data.error;
                chatList.appendChild(warningMessage);

                chatInput.disabled = true;
                sendButton.disabled = true;
                chatForm.classList.add("opacity-50", "cursor-not-allowed");
                return;
            }

            if (data.message) {
                // Tambahkan pesan pengguna
                let newMessage = document.createElement("div");
                newMessage.classList.add("w-full", "flex", "items-end", "space-x-2");
                newMessage.innerHTML = `
                    <div class="w-full flex items-start space-x-2">
                        <div class="w-11/12 flex flex-col items-start justify-start space-y-1">
                            <div class="w-full bg-white text-blue31 text-justify p-3 rounded shadow-sm text-sm">
                                <p>${message}</p>
                            </div>
                        </div>
                        <div class="w-1/12 flex items-center">
                            @if(Auth::user()->profile->profile_image)
                                <img src="{{ asset('storage/' . Auth::user()->profile->profile_image) }}" 
                                    alt="Profile Image" 
                                    class="w-full h-7 bg-white rounded-full object-cover">
                            @else
                                <span class="flex items-center justify-center w-full text-blue31 bg-white rounded-full font-normal text-xl">
                                    {{ strtoupper(substr(Auth::user()->profile->first_name, 0, 1)) }}
                                </span>
                            @endif
                        </div>
                    </div>
                `;
                chatList.appendChild(newMessage);

                // Tambahkan balasan otomatis dari sistem
                if (data.responseMessage) {
                    let botResponse = document.createElement("div");
                    botResponse.classList.add("w-full", "flex", "items-start", "space-x-2");
                    botResponse.innerHTML = `
                        <div class="w-1/12 flex items-center">
                            <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="w-full">
                        </div>
                        <div class="w-11/12 flex flex-col items-start justify-start space-y-1">
                            <div class="w-full bg-white text-blue31 text-justify p-3 rounded shadow-sm text-sm">
                                <p>${data.responseMessage}</p>
                            </div>
                        </div>
                    `;
                    chatList.appendChild(botResponse);
                }

                chatInput.value = "";
            }
        })
        .catch(error => console.error("Error:", error));
    });
});


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
