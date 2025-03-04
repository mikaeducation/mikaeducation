<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Artikel | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('public/assets/css/style.css')
    </head>
    <body class="font-futura h-max w-full relative">
        @include('includes.components.main.header')
        <div class="w-full h-fit py-3 bg-blue31 flex items-center justify-center text-base text-white">
            <div class="w-3/4 flex items-center" style="display: inline-flex; flex-wrap: wrap;">
                <a href="/" class="flex items-center">Beranda
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#fff" viewBox="0 0 24 24">
                        <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
                    </svg>
                </a>
                <a href="/article" class="flex items-center">Artikel kami
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#fff" viewBox="0 0 24 24">
                        <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
                    </svg>
                </a>
                <a href="#">Jelajahi Artikel</a>
            </div>
        </div>

        <Section class="w-full h-max flex justify-center items-center flex-col mb-20">
            <div class="w-full h-auto md:h-auto text-blue31 text-xl text-justify flex flex-col items-center justify-center">
                <div class="w-full flex flex-col items-center justify-center pt-4 pb-8 space-y-4 bg-blue31">
                    <div class="w-20 lg:w-32 h-0.5 lg:h-1 bg-yellowf4"></div>
                    <div class="flex items-center bg-white rounded shadow-md p-2 w-3/4 lg:w-full max-w-lg">
                        <input type="text" id="searchInput" placeholder="Cari artikel seputar autisme disini..." class="w-full text-base md:text-xl px-2 md:px-4 py-2 rounded focus:outline-none">
                        <button onclick="searchArticles()" class="w-1/2 bg-blue31 text-white p-2 rounded text-base md:text-xl font-medium">
                            Cari Artikel
                        </button>
                    </div>
                </div>
            <p id="noResultsMessage" class="text-lg md:text-xl lg:text-2xl w-3/4 mt-8 hidden">Kami tidak menemukan artikel dengan kata kunci yang Anda masukkan. Silahkan masukkan kata kunci dengan benar atau lebih lengkap.</p>
                <div id="articlesContainer" class="w-3/4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8 px-2">
                    <a href="/article1" class="article flex flex-col items-start justify-between hover:bg-gray-100 hover:rounded p-2" data-title="Autisme: Gangguan Perkembangan pada Anak">
                        <div class="space-y-2 w-full">
                            <img src="{{ asset('images/article1.png') }}" alt="" class="w-full h-[300px] object-cover">
                            <h3 class="font-medium">Autisme: Gangguan Perkembangan pada Anak</h3>
                        </div>
                        <p class="text-lg">oleh Margaretha <span class="pl-2 text-sm font-normal italic opacity-55">03/03/2022</span></p>
                    </a>
                    <a href="/article2" class="article flex flex-col items-start justify-between hover:bg-gray-100 hover:rounded p-2" data-title="Perilaku Komunikasi Anak dengan Autisme">
                        <div class="space-y-2 w-full">
                            <img src="{{ asset('images/article2.png') }}" alt="" class="w-full h-[300px] object-cover">
                            <h3 class="font-medium">Perilaku Komunikasi Anak dengan Autisme</h3>
                        </div>
                        <p class="text-lg">oleh Margaretha <span class="pl-2 text-sm font-normal italic opacity-55">03/03/2022</span></p>
                    </a>
                    <a href="/article3" class="article flex flex-col items-start justify-between hover:bg-gray-100 hover:rounded p-2" data-title="Perkembangan Kemampuan Komunikasi pada Anak dengan Autisme">
                        <div class="space-y-2 w-full">
                            <img src="{{ asset('images/article3.png') }}" alt="" class="w-full h-[300px] object-cover">
                            <h3 class="font-medium">Perkembangan Kemampuan Komunikasi pada Anak dengan Autisme</h3>
                        </div>
                        <p class="text-lg">oleh Margaretha <span class="pl-2 text-sm font-normal italic opacity-55">03/03/2022</span></p>
                    </a>
                    <a href="/article4" class="article flex flex-col items-start justify-between hover:bg-gray-100 hover:rounded p-2" data-title="Dummy Article 1">
                        <div class="space-y-2 w-full">
                            <img src="{{ asset('images/peakpx.png') }}" alt="" class="w-full h-[300px] object-cover">
                            <h3 class="font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                        </div>
                        <p class="text-lg">oleh Penulis <span class="pl-2 text-sm font-normal italic opacity-55">03/03/2022</span></p>
                    </a>
                    <a href="/article5" class="article flex flex-col items-start justify-between hover:bg-gray-100 hover:rounded p-2" data-title="Dummy Article 2">
                        <div class="space-y-2 w-full">
                            <img src="{{ asset('images/peakpx.png') }}" alt="" class="w-full h-[300px] object-cover">
                            <h3 class="font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                        </div>
                        <p class="text-lg">oleh Penulis <span class="pl-2 text-sm font-normal italic opacity-55">03/03/2022</span></p>
                    </a>
                </div>
            </div>
        </Section>

        @include('includes.components.main.footer')      
    </body>
</html>

<script>
    function searchArticles() {
        let keyword = document.getElementById("searchInput").value.toLowerCase().trim();
        let articles = document.querySelectorAll(".article");
        let found = false;

        // Pastikan input bukan kosong
        if (keyword === "") {
            document.getElementById("noResultsMessage").classList.add("hidden");
            articles.forEach(article => article.style.display = "flex"); // Tampilkan semua jika input kosong
            return;
        }

        articles.forEach(article => {
            let title = article.getAttribute("data-title").toLowerCase().trim();
            let words = title.split(/\s+/); // Pisahkan kata berdasarkan spasi
            let isMatch = words.includes(keyword); // Cocokkan kata kunci dengan kata dalam judul

            if (isMatch) {
                article.style.display = "flex"; // Tampilkan jika cocok
                found = true;
            } else {
                article.style.display = "none"; // Sembunyikan jika tidak cocok
            }
        });

        // Tampilkan pesan jika tidak ada hasil
        if (!found) {
            document.getElementById("noResultsMessage").classList.remove("hidden");
        } else {
            document.getElementById("noResultsMessage").classList.add("hidden");
        }
    }

    // Tambahkan event listener agar pencarian berjalan saat menekan ENTER
    document.getElementById("searchInput").addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
            event.preventDefault(); // Mencegah form submit default jika ada
            searchArticles(); // Jalankan fungsi pencarian
        }
    });



    window.onload = function() {
        const urlParams = new URLSearchParams(window.location.search);
        const searchQuery = urlParams.get("search");

        if (searchQuery) {
            document.getElementById("searchInput").value = searchQuery; // Masukkan keyword ke input
            searchArticles(); // Jalankan pencarian otomatis
        }
    };
</script>
