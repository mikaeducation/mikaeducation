<div class="w-full min-h-max flex text-blue31 flex-col items-center justify-center">
    <div class="w-full bg-blue31 text-white flex flex-col items-center justify-center py-10 space-y-4">
        <div class="w-32 h-0.5 lg:h-1 bg-yellowf4"></div>
        <h1 class="w-3/4 lg:w-full font-medium lg:font-bold text-2xl md:text-4xl pb-5 lg:pb-10 text-center leading-normal">Ayo cari tahu tentang<br><span class="text-4xl md:text-5xl">Gangguan Spektrum Autisme</span> </h1>
        <div class="flex items-center bg-white rounded shadow-md p-2 w-3/4 lg:w-full max-w-lg">
            <input type="text" id="searchInputArticle" placeholder="Cari artikel seputar autisme disini..." class="w-full text-base text-blue31 md:text-xl px-2 md:px-4 py-2 rounded focus:outline-none">
            <button class="w-1/2 bg-blue31 text-white p-2 rounded text-base md:text-xl font-medium" onclick="redirectToArticleExplore()">
                Cari Artikel
            </button>
        </div>        
    </div>
    <div class="w-3/4 flex flex-col lg:flex-row items-center justify-center py-14">
        <div class="w-full flex flex-col lg:flex-row items-center justify-between space-y-4">
            <div class="w-full lg:w-1/2 flex flex-col items-start justify-start gap-5">
                <h3 class="text-xl lg:text-2xl font-semibold text-left">
                    Mengenal lebih dekat <br> Media Visual Komunikasi Anak 
                </h3>
                <div class="w-full md:w-3/5 flex items-center justify-between p-1.5 rounded bg-blue31 self-start">
                    <p class="text-white text-lg font-medium pl-6">Jelajahi Artikel</p>
                    <a href="/articleexplore" class="px-2 py-4 lg:p-3 rounded flex items-end justify-end bg-yellowf4">
                        <svg width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="rotate-90 lg:rotate-0">
                            <path d="M25.7071 8.20711C26.0976 7.81658 26.0976 7.18342 25.7071 6.79289L19.3431 0.428932C18.9526 0.0384078 18.3195 0.0384078 17.9289 0.428932C17.5384 0.819457 17.5384 1.45262 17.9289 1.84315L23.5858 7.5L17.9289 13.1569C17.5384 13.5474 17.5384 14.1805 17.9289 14.5711C18.3195 14.9616 18.9526 14.9616 19.3431 14.5711L25.7071 8.20711ZM0 8.5H25V6.5H0V8.5Z" fill="#31587C"/>
                        </svg>                        
                    </a>
                </div>
            </div>
            <div class="w-full lg:w-1/2 lg:pl-10 text-xl md:text-3xl lg:text-4xl text-justify">
                <p>"Anak-anak dengan autisme <span class="font-medium">tidak hidup di dunia mereka sendiri</span>, mereka mengajari kita cara <span class="font-medium">memahami dunia dengan cara yang berbeda</span>."</p>
            </div>
        </div>
    </div>
</div>
<div class="relative w-3/4 h-[400px] md:h-[430px] mt-0 md:mt-8 text-blue31 text-xl text-justify flex items-start justify-center overflow-hidden">
    <button id="scrollLeft" class="absolute items-center justify-center h-5/6 left-0 pl-2 hidden">
        <svg class="w-12 h-12 rounded-full shadow-xl bg-white bg-opacity-80 p-2 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
        </svg>
    </button>
    <div id="contentWrapper" class="flex items-start justify-between space-x-4 overflow-x-auto scroll-smooth w-full max-w-full px-2 scrollbar-none">
        <a href="/article1" class="w-full lg:w-1/3 md:w-1/2 flex-shrink-0 h-[400px] md:h-[430px] p-2 flex flex-col items-start justify-between hover:bg-gray-100 hover:rounded">
            <div class="space-y-2 w-full">
                <img src="{{ asset('images/article1.png') }}" alt="" class="w-full h-[300px] object-cover">
                <h3 class="font-medium">Autisme: Gangguan Perkembangan pada Anak</h3>
            </div>
            <p class="text-lg">oleh Margaretha <span class="pl-2 text-sm font-normal italic opacity-55">03/03/2022</span> </p>
        </a>
        <a href="/article2" class="w-full lg:w-1/3 md:w-1/2 flex-shrink-0 h-[400px] md:h-[430px] p-2 flex flex-col items-start justify-between hover:bg-gray-100 hover:rounded">
            <div class="space-y-2 w-full">
                <img src="{{ asset('images/article2.png') }}" alt="" class="w-full h-[300px] object-cover">
                <h3 class="font-medium">Perilaku Komunikasi Anak dengan Autisme</h3>
            </div>
            <p class="text-lg">oleh Margaretha <span class="pl-2 text-sm font-normal italic opacity-55">03/03/2022</span> </p>
        </a>
        <a href="/article3" class="w-full lg:w-1/3 md:w-1/2 flex-shrink-0 h-[400px] md:h-[430px] p-2 flex flex-col items-start justify-between hover:bg-gray-100 hover:rounded">
            <div class="space-y-2 w-full">
                <img src="{{ asset('images/article3.png') }}" alt="" class="w-full h-[300px] object-cover">
                <h3 class="font-medium">Perkembangan Kemampuan Komunikasi pada Anak dengan Autisme</h3>
            </div>
            <p class="text-lg">oleh Margaretha <span class="pl-2 text-sm font-normal italic opacity-55">03/03/2022</span></p>
        </a>
        <!-- exc -->
        <a href="/article4" class="w-full lg:w-1/3 md:w-1/2 flex-shrink-0 h-[380px] md:h-[430px] p-2 flex flex-col items-start justify-between hover:bg-gray-100 hover:rounded">
            <div class="space-y-2 w-full">
                <img src="{{ asset('images/profile-sample.jpg') }}" alt="" class="w-full h-[300px] object-cover">
                <h3 class="font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
            </div>
            <p class="text-lg">Publisher <span class="pl-2 text-sm font-normal italic opacity-55">dd/mm/yyyy</span> </p>
        </a>
    </div>
    <button id="scrollRight" class="absolute flex items-center justify-center h-5/6 right-0 pr-2">
        <svg class="w-12 h-12 rounded-full shadow-xl bg-white bg-opacity-80 p-2 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>
</div>


<script>
//Aktivasi fitur search
function redirectToArticleExplore() {
        let keyword = document.getElementById("searchInputArticle").value.trim();
        
        if (keyword) {
            window.location.href = `/articleexplore?search=${encodeURIComponent(keyword)}`;
        }
    }

    // Jalankan pencarian saat tombol "Enter" ditekan
    document.getElementById("searchInputArticle").addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
            event.preventDefault();
            redirectToArticleExplore();
        }
    });

//Scrollbar konten artikel dibawah
    const contentWrapper = document.getElementById("contentWrapper");
    const scrollRight = document.getElementById("scrollRight");
    const scrollLeft = document.getElementById("scrollLeft");

    function getScrollAmount() {
        if (window.innerWidth < 768) {
            return contentWrapper.clientWidth; // Scroll penuh (1 konten)
        } else if (window.innerWidth < 1024) {
            return contentWrapper.clientWidth / 2; // Scroll setengah (2 konten)
        }
        return 450; // Default scroll untuk 3 konten
    }

    function updateButtons() {
        if (contentWrapper.scrollLeft > 0) {
            scrollLeft.classList.remove("hidden");
        } else {
            scrollLeft.classList.add("hidden");
        }

        if (contentWrapper.scrollLeft + contentWrapper.clientWidth >= contentWrapper.scrollWidth) {
            scrollRight.classList.add("hidden");
        } else {
            scrollRight.classList.remove("hidden");
        }
    }

    scrollRight.addEventListener("click", function () {
        contentWrapper.scrollBy({ left: getScrollAmount(), behavior: "smooth" });
    });

    scrollLeft.addEventListener("click", function () {
        contentWrapper.scrollBy({ left: -getScrollAmount(), behavior: "smooth" });
    });

    contentWrapper.addEventListener("scroll", updateButtons);
    window.addEventListener("resize", updateButtons);
    window.addEventListener("load", updateButtons);
</script>

