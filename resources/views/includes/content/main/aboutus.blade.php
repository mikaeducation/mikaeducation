<div class="w-full min-h-max text-blue31 flex flex-col items-center justify-center">
    <div class="w-full h-full lg:h-[460px] relative flex justify-center">
        <div class="w-full h-full lg:h-[350px] bg-blue31 text-white flex flex-col items-center justify-start py-10 space-y-4">
            <div class="w-32 h-0.5 lg:h-1 bg-yellowf4"></div>
            <h1 class="w-3/4 lg:w-full font-medium lg:font-bold text-4xl md:text-5xl text-center leading-normal">Tentang Kami</span> </h1>
            <p class="w-3/4 lg:w-1/2 text-justify md:text-center text-lg md:text-xl">MIKA adalah sebuah platform inklusi visual yang mendukung upaya optimalisasi proses belajar dan mengajar komunikasi anak dengan autisme dan hambatan komunikasi.</p>     
        </div>
        <div class="w-fit h-[250px] hidden gap-2 lg:gap-5 bottom-0 absolute lg:flex items-center justify-center">
            <img src="{{ asset('images/content-3.png') }}" alt="" class="h-full border-4 border-blue31 rounded">
            <img src="{{ asset('images/content-2.png') }}" alt="" class="h-3/4 border-4 border-blue31 rounded">
            <img src="{{ asset('images/content-4.png') }}" alt="" class="h-full border-4 border-blue31 rounded">
            <img src="{{ asset('images/content-1.png') }}" alt="" class="h-3/4 border-4 border-blue31 rounded">
        </div>
    </div>
    <div class="w-3/4 flex flex-col items-start justify-center text-justify text-lg mt-10 lg:mt-20 space-y-8">
        <p><span class="text-2xl font-medium">Siapakah kami?</span>
            <br> MIKA Education adalah projek strategis dari Media Visual Komunikasi Anak (MIKA) yang didanai oleh Pemerintah Australia, 
            dikelola Departemen Luar Negeri & Perdagangan Australia melalui Konsulat Jenderal Australia di Surabaya. Pendanaan tersebut diperoleh MIKA melalui Direct Aid Program Australian.
        </p>
        <p><span class="text-2xl font-medium">Apa yang kami lakukan?</span>
            <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a imperdiet lacus, ut gravida sem. Phasellus quis lacus turpis. In nec malesuada ante. Donec eget nisl rhoncus, 
            egestas quam et, placerat justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            In a imperdiet lacus, ut gravida sem. Phasellus quis lacus turpis. In nec malesuada ante. Donec eget nisl rhoncus, egestas quam et, placerat justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
        </p>
        <p><span class="text-2xl font-medium">Apa saja layanan kami?</span>
            <br> Kami mengembangkan 2 layanan khusus, yaitu MIKA 1.0 dan MIKA Education yang menjadi upaya kami dalam mendukung pendidikan inklusi dan proses belajar komunikasi anak dengan autisme dan hambatan komunikasi di Indonesia, meliputi:
            <div class="w-full lg:flex">
                <div class="w-full lg:w-1/2 flex flex-col items-center pt-2 lg:pt-4 pb-8 lg:pb-0 lg:pr-10 border-b-2 lg:border-b-0 lg:border-r-2 border-bluee3">
                    <img src="{{ asset('images/tablet.png') }}" alt="" class="w-2/3">
                    <p class="pt-5">MIKA 1.0 adalah sebuah perangkat lunak berbasis aplikasi mobile yang diluncurkan pada tahun 2020. Aplikasi ini dikembangkan untuk mendukung pembelajaran komunikasi visual baru lebih cepat, 
                        lebih komprehensif dan sistematis. Aplikasi ini memberikan simulasi pembelajaran komunikasi Anak dengan Autism Spectrum Disorder (ASD). Aplikasi ini tersedia dan dapat diunduh melalui Google Playstore.</p>
                </div>
                <div class="w-full lg:w-1/2 flex flex-col items-center pt-8 lg:pt-0 lg:pl-10">
                    <img src="{{ asset('images/desktop.png') }}" alt="" class="w-2/3">
                    <p class="pt-4">MIKA Education adalah sebuah platform berbasis website pembelajaran yang dikembangkan pada tahun 2024 dan diluncurkan pada tahun 2025 untuk mendukung proses pemahaman 
                        akan Autisme karakteristik belajar komunikasi pada individu autistik, strategi asesmen matriks perencanaan, metode intervensi TEACCH, serta administrasi, 
                        skoring dan interpretasi MIKA dalam mendampingi belajar komunikasi.</p>
                </div>
            </div>
        </p>
        <p><span class="text-2xl font-medium">Siapa saja tim kami?</span>
            <br> "Setiap hari, tim luar biasa kami berdedikasi untuk menciptakan inovasi dan dampak nyata, bekerja bersama untuk mendukung pendidikan inklusi terhadap anak dengan autisme dan hambatan komunikasi dengan semangat dan keahlian terbaik."
            <div class="relative w-full h-[380px] md:h-[500px] lg:h-[500px] text-blue31 text-base sm:text-lg lg:text-xl text-justify flex items-start justify-center overflow-hidden">
                <button id="scrollLeft" class="absolute items-center justify-center h-1/2 md:h-2/3 lg:h-5/6 left-0 pl-2 hidden">
                    <svg class="w-12 h-12 rounded-full shadow-xl bg-white bg-opacity-80 p-2 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <div id="contentWrapper" class="flex items-start justify-between overflow-x-auto space-x-3 md:space-x-6 lg:space-x-10 scroll-smooth w-full max-w-full px-2 scrollbar-none">
                    <div class="lg:w-1/5 md:w-1/4 w-1/3 flex-shrink-0 h-[380px] md:h-[500px] lg:h-[500px] flex flex-col items-start justify-start space-y-2">
                        <img src="{{ asset('images/member-Margaretha.jpg') }}" alt="" class="w-full h-[120px] sm:h-[200px] md:h-[250px] object-cover object-top">
                        <h3 class="h-24 sm:h-20 font-medium sm:font-semibold">Margaretha<span class="text-base lg:text-lg font-normal md:font-medium opacity-50 md:opacity-100"><br>Kepala Proyek MIKA</span> </h3>
                        <p class="text-sm md:text-base opacity-50">Dosen Psikologi Abnormal, Fakultas Psikologi Universitas Airlangga, Surabaya</p>
                    </div>
                    <div class="lg:w-1/5 md:w-1/4 w-1/3 flex-shrink-0 h-[380px] md:h-[500px] lg:h-[500px] flex flex-col items-start justify-start space-y-2">
                        <img src="{{ asset('images/member-ira.jpg') }}" alt="" class="w-full h-[120px] sm:h-[200px] md:h-[250px] object-cover object-top">
                        <h3 class="h-24 sm:h-20 font-medium sm:font-semibold">Ira Puspitasari<span class="text-base lg:text-lg font-normal md:font-medium opacity-50 md:opacity-100"><br>Konsultan IT MIKA</span> </h3>
                        <p class="text-sm md:text-base opacity-50">Dosen Sistem Informasi, Fakultas Sains dan Teknologi, Universitas Airlangga, Surabaya</p>
                    </div>
                    <div class="lg:w-1/5 md:w-1/4 w-1/3 flex-shrink-0 h-[380px] md:h-[500px] lg:h-[500px] flex flex-col items-start justify-start space-y-2">
                        <img src="{{ asset('images/member-khamida.jpg') }}" alt="" class="w-full h-[120px] sm:h-[200px] md:h-[250px] object-cover object-top">
                        <h3 class="h-24 sm:h-20 font-medium sm:font-semibold">Nishrina Khamida<span class="text-base lg:text-lg font-normal md:font-medium opacity-50 md:opacity-100"><br>Psikolog Klinis</span> </h3>
                        <p class="text-sm md:text-base opacity-50">Kepala UPTD Layanan Disabilitas Sidoarjo</p>
                    </div>
                    <div class="lg:w-1/5 md:w-1/4 w-1/3 flex-shrink-0 h-[380px] md:h-[500px] lg:h-[500px] flex flex-col items-start justify-start space-y-2">
                        <img src="{{ asset('images/member-Retno.jpeg') }}" alt="" class="w-full h-[120px] sm:h-[200px] md:h-[250px] object-cover object-top">
                        <h3 class="h-24 sm:h-20 font-medium sm:font-semibold">Sri Retno Yuliani<span class="text-base lg:text-lg font-normal md:font-medium opacity-50 md:opacity-100"><br>Psikolog Klinis</span> </h3>
                        <p class="text-sm md:text-base opacity-50">Kepala SLB Autisme River Kids Malang</p>
                    </div>
                    <div class="lg:w-1/5 md:w-1/4 w-1/3 flex-shrink-0 h-[380px] md:h-[500px] lg:h-[500px] flex flex-col items-start justify-start space-y-2">
                        <img src="{{ asset('images/member-vito.jpg') }}" alt="" class="w-full h-[120px] sm:h-[200px] md:h-[250px] object-cover object-top">
                        <h3 class="h-24 sm:h-20 font-medium sm:font-semibold">Vito Emir Muhammad<span class="text-base lg:text-lg font-normal md:font-medium opacity-50 md:opacity-100"><br>MIKA 1.0 Developer</span> </h3>
                        <p class="text-sm md:text-base opacity-50">Pengembang aplikasi Mobile (Android) di salah satu BUMN, Indonesia</p>
                    </div>
                    <div class="lg:w-1/5 md:w-1/4 w-1/3 flex-shrink-0 h-[380px] md:h-[500px] lg:h-[500px] flex flex-col items-start justify-start space-y-2">
                        <img src="{{ asset('images/member-rayhan.png') }}" alt="" class="w-full h-[120px] sm:h-[200px] md:h-[250px] object-cover object-top">
                        <h3 class="h-24 sm:h-20 font-medium sm:font-semibold">Ahmad Rayhan <span class="text-base lg:text-lg font-normal md:font-medium opacity-50 md:opacity-100"><br>Pengembang MIKA Education Website</span> </h3>
                        <p class="text-sm md:text-base opacity-50">Mahasiswa Program Studi Sistem Informasi, Fakultas Sains dan Teknologi, Universitas Airlangga, Surabaya</p>
                    </div>
                    <div class="lg:w-1/5 md:w-1/4 w-1/3 flex-shrink-0 h-[380px] md:h-[550px] lg:h-[500px] flex flex-col items-start justify-start space-y-2">
                        <img src="{{ asset('images/member-noel.png') }}" alt="" class="w-full h-[120px] sm:h-[200px] md:h-[250px] object-cover object-top">
                        <h3 class="h-24 sm:h-20 font-medium sm:font-semibold">Nicolas Noel C.<span class="text-base lg:text-lg font-normal md:font-medium opacity-50 md:opacity-100"><br>Pengembang Konten MIKA Education</span> </h3>
                        <p class="text-sm md:text-base opacity-50">Mahasiswa Program Studi Sistem Informasi, Fakultas Sains dan Teknologi, Universitas Airlangga, Surabaya</p>
                    </div>
                </div>
                <button id="scrollRight" class="absolute flex items-center justify-center h-1/2 md:h-2/3 lg:h-5/6 right-0 pr-2">
                    <svg class="w-12 h-12 rounded-full shadow-xl bg-white bg-opacity-80 p-2 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </p>
    </div>
</div>

<script>
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
