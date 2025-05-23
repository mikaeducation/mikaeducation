<div class="w-full min-h-max text-white">
    <div class="w-full min-h-max flex items-center flex-col">
        <div class="w-full lg:h-[510px] h-[250px] overflow-hidden">
            <div id="slider" class="w-full h-full flex transition-transform duration-1000 ease-in-out">
                <img src="{{ asset('images/bg1.jpg') }}" alt="" class="w-full h-full flex-shrink-0 object-cover object-top">
                <img src="{{ asset('images/bg2.jpeg') }}" alt="" class="w-full h-full flex-shrink-0 object-cover">
                <img src="{{ asset('images/bg3.jpg') }}" alt="" class="w-full h-full flex-shrink-0 object-cover">
                <img src="{{ asset('images/bg4.jpg') }}" alt="" class="w-full h-full flex-shrink-0 object-cover">
            </div>
        </div>
        <div class="w-full pt-10 bg-blue31 flex items-center justify-center flex-col gap-5 md:gap-5 lg:gap-16">
            <div class="h-full w-3/4 flex flex-col items-start justify-center space-y-2">
                <h1 class="w-full text-xl md:text-2xl lg:text-4xl font-bold text-start lg:text-left pb-1">
                    Media Visual Komunikasi Anak - Seperti apa?
                </h1>
                <p class="text-justify text-base md:text-lg lg:text-xl pb-2 text-bluee3">
                    Media Visual Komunikasi Anak, atau disebut MIKA adalah media edukasi dan pembelajaran khusus penanganan Anak Berkebutuhan Khusus, terutama anak dengan Spektrum Autisme dan hendaya komunikasi. Media ini dibuat dalam bentuk aplikasi perangkat lunak berbasis mobile bernama MIKA 1.0 sebagai teknologi terapi dengan dukungan stimulus multi-sensoris berupa visual dan audio, serta dukungan sumber belajar berbasis website bernama MIKA Education yang menjadi strategi efektif dan berdaya guna dalam mendukung pendidikan inklusi di Indonesia.
                </p>
            </div>
            <div class="w-full h-fit flex flex-col md:flex-row items-center justify-center">
                <div class="w-3/4 h-full flex flex-row items-center lg:items-end justify-center text-white text-lg p-0">
                    <div class="w-1/2 h-full flex flex-col">
                        <div class="w-full h-auto md:h-1/3 flex">
                            <div class="w-full flex items-end justify-end">
                                <button id="section1Button" onclick="showContent('section-1')" class="h-24 sm:h-20 md:h-24 w-full px-0 sm:px-4 lg:px-6 rounded-t border-t-8 border-pinkee bg-white flex items-end">
                                    <div class="flex items-end justify-center w-full lg:px-4 pb-1 gap-3 lg:gap-8">
                                        <img src="{{ asset('images/tablet.png') }}" alt="" class="w-32 lg:w-52 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 hidden md:block">
                                        <div class="w-40 sm:w-56 text-center md:text-left mb-3 flex-col leading-5 md:pb-2 lg:pb-0 text-blue31">
                                            <h3 class="text-lg sm:text-xl md:text-2xl font-bold">MIKA 1.0</h3>
                                            <p class="italic text-opacity-60 text-xs sm:text-sm lg:text-base md:hidden xl:flex">aplikasi mobile</p>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 flex flex-col justify-end items-center">
                        <div class="w-full h-auto md:h-1/3 flex items-end justify-end">
                            <div class="w-full flex items-end justify-end">
                                <button id="section2Button" onclick="showContent('section-2')" class="h-24 sm:h-20 md:h-24 w-full px-4 lg:px-6 rounded-t bg-blue31 flex items-end">
                                    <div class="flex items-end w-full lg:pl-2 pb-1 md:gap-2 lg:gap-4">
                                        <img src="{{ asset('images/desktop.png') }}" alt="" class="md:w-28 lg:w-48 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 hidden md:block">
                                        <div class="w-full text-center md:text-left text-blue31 mb-3 flex-col leading-3 md:pb-0 ">
                                            <h3 class="text-lg sm:text-xl md:text-2xl font-bold">MIKA EDUCATION</h3>
                                            <p class="italic text-opacity-60 text-xs sm:text-sm lg:text-base md:hidden xl:flex">aplikasi website</p>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="section-1" class="w-3/4 flex items-center justify-center py-4 px-0">
            <div class="w-full flex flex-col lg:flex-row items-start justify-start gap-0 lg:gap-11 text-base lg:text-lg text-blue31">
                <div class="w-full lg:w-2/3 text-justify lg:pr-12 pb-3 border-r-0 lg:border-r-2 border-bluee3">
                    <p>
                        MIKA 1.0 merupakan sebuah aplikasi perangkat lunak yang dikembangkan untuk mendukung pembelajaran komunikasi visual baru lebih cepat, lebih komprehensif dan sistematis. Aplikasi ini diharapkan mampu memberikan simulasi lebih baik untuk pembelajaran komunikasi pada Anak Berkebetuhan Khusus, khususnya Autism Spectrum Disorder (ASD).
                        <span class="lg:hidden">Aplikasi ini telah tersedia secara global dan dapat diunduh melalui Google Playstore dibawah ini.</span>
                    </p>
                </div>
                <div class="w-full lg:w-1/3 text-justify">
                    <p class="lg:flex hidden">Aplikasi ini telah tersedia secara global. Dapat diunduh melalui Google Playstore dibawah ini.</p>
                    <a href="https://play.google.com/store/apps/details?id=com.vito.mika" class="w-full flex md:justify-start justify-start">
                        <img src="{{ asset('images/gplay.png') }}" alt="" class="w-1/2 sm:w-1/3 md:w-1/5 lg:w-1/2">
                    </a>
                </div>
            </div>
            <div class="w-full h-fit flex flex-col items-start justify-start mt-20">
                <div class="w-full py-4 px-4 lg:px-8 gap-2 md:gap-4 flex bg-blue31 rounded">
                    <button id="content1" class="w-1/2 p-1.5 rounded bg-white text-blue31">
                        <h3 class="text-lg font-medium">Mengapa harus MIKA 1.0?</h3>
                    </button>
                    <button id="content2" class="w-1/2 p-1.5 rounded bg-transparent text-white">
                        <h3 class="text-lg font-medium">Bagaimana cara kerja MIKA 1.0?</h3>
                    </button>
                </div>
                <div id="content1.1" class="w-full">
                    <div class="w-full h-fit flex items-start text-blue31 py-14">
                        <div class="w-full h-fit">
                            <div id="textContainer" class="max-h-[590px] sm:max-h-[620px] md:max-h-[390px] text-base lg:text-lg text-justify space-y-4 relative overflow-hidden ">
                                <h2 class="text-lg lg:text-xl font-bold">
                                    Lebih dekat dengan Belajar dan Bermain bersama MIKA 1.0
                                </h2>
                                <div class="w-full md:w-[40%] h-full float-none md:float-right md:ml-6 lg:ml-8 bg-blue31 rounded">
                                    <img src="{{ asset('images/content-1.png') }}" alt="MIKA 1.0"class="w-full object-cover h-48 sm:h-60 md:h-auto px-1.5 pt-1.5 pb-4 rounded" />
                                </div>
                                <p>
                                    MIKA 1.0 adalah teknologi pendukung belajar komunikasi visual yang baru, lebih cepat, komprehensif dan sistematis sehingga dapat memberikan stimulasi pembelajaran komunikasi yang lebih baik 
                                    karena dikembangkan berdasarkan sistem Aided Language Stimulation (ALS) dan Pragmatic Organisation Dynamic Display (PODD), dan juga bisa dikombinasikan dengan Picture Exchange Communication System (PECS). 
                                    MIKA 1.0 dikembangkan dengan Bahasa Indonesia, namun bisa disesuaikan dengan konteks bahasa daerah dengan fitur penambahan kata dan istilah.
                                    Belajar komunikasi yang dibantu MIKA 1.0 akan menghasilkan lebih banyak konsep kata yang dapat dipelajari (sedikitnya ada 2000 kata tersimpan di MIKA 1.0).
                                    Seluruh proses belajar akan disimpan secara real time dan mudah diakses untuk mengevaluasi kemajuan terapi/belajar anak. Anak-anak ASD dan hendaya komunikasi dapat belajar 
                                    hingga tingkat kemampuan komunikasi yang lebih tinggi (dari menambah perbendaharaan kata, menyusun kalimat sederhana hingga kompleks, dan mengembangkan dialog).
                                    <br><br>
                                    Selain itu, data yang diperoleh dari aplikasi perangkat lunak ini dapat digunakan untuk penelitian pengembangan intervensi autisme. Keterlibatan dan kontribusi anda akan bermakna dalam pengembangan intervensi pendidikan inklusi di Indonesia.                        
                                    MIKA 1.0 juga dilaunching di Google play sehingga memudahkan dan memperluas akses di Indonesia. MIKA 1.0 bisa diutamakan digunakan oleh Terapis dan Guru dalam proses terapi, maka dibuka seluasnya akses untuk sekolah dan pusat terapi di Indonesia. 
                                    Orang tua juga bisa mendampingi belajar anaknya dengan MIKA 1.0, namun disarankan untuk turut belajar prinsip belajar komunikasi autisme agar bisa mengadministrasi MIKA 1.0 dengan baik.
                                </p>
                            </div>
                            <div class="flex justify-start w-full pb-4">
                                <button id="toggleButton" class="absolute z-50 px-8 py-2 bg-bluee3 text-blue31 hover:bg-blue31 hover:text-white rounded" onclick="toggleContent()">Baca Selengkapnya...</button>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-fit space-y-6 text-blue31">
                        <h2 class="text-xl font-bold">Dilengkapi dengan komponen utama pembelajaran</h2>
                        <div class="w-full lg:h-96 xl:h-72 lg:flex items-start justify-center text-base md:text-lg gap-5 grid md:grid-cols-2">
                            <div class="w-full lg:w-1/4 h-fit sm:h-60 lg:h-full bg-bluee3 flex flex-col items-center text-justify p-4 lg:pt-6 gap-2">
                                <div class="w-full flex items-center justify-center h-14">
                                    <img src="https://img.icons8.com/3d-fluency/94/visual-effects.png" alt="signing-a-document" class="h-full"/>                                
                                </div>
                                <p>
                                    Pembelajaran komunikasi berbasis visual untuk anak berkebutuhan khusus menggunakan metode Aided Language Stimulation (ALS) dan dukungan suara untuk setiap gambar.
                                </p>
                            </div>
                            <div class="w-full lg:w-1/4 h-fit sm:h-60 lg:h-full bg-bluee3 flex flex-col items-center text-justify p-4 lg:pt-6 gap-2">
                                <div class="w-full flex items-center justify-center h-14">
                                    <img src="https://img.icons8.com/3d-fluency/94/signing-a-document.png" alt="signing-a-document" class="h-full"/>                                
                                </div>      
                                <p>
                                    Learning content yang dapat dipersonalisasi dengan fitur Penambahan kategori, gambar, dan suara berdasarkan kebutuhan anak-anak dan konteks lingkungan.                            
                                </p>
                            </div>
                            <div class="w-full lg:w-1/4 h-fit sm:h-60 lg:h-full bg-bluee3 flex flex-col items-center text-justify p-4 lg:pt-6 gap-2">
                                <div class="w-full flex items-center justify-center h-14">
                                    <img src="https://img.icons8.com/3d-fluency/94/product-documents.png" alt="signing-a-document" class="h-full"/>                                
                                </div>
                                <p>
                                    Manajemen performansi dan progress anak sebagai media analitis kemajuan anak serta penambahan opsi ulasan di setiap sesi pembelajaran.                            
                                </p>
                            </div>
                            <div class="w-full lg:w-1/4 h-fit sm:h-60 lg:h-full bg-bluee3 flex flex-col items-center text-justify p-4 lg:pt-6 gap-2">
                                <div class="w-full flex items-center justify-center h-14">
                                    <img src="https://img.icons8.com/3d-fluency/94/group--v3.png" alt="signing-a-document" class="h-full"/>                                
                                </div>                              
                                <p>
                                    Manajemen profil dan online-synchronization, untuk pengelolaan profil dan sinkronisasi data secara online.                            
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content1.2" class="w-full">
                    <div class="w-full h-full flex flex-col text-blue31 mt-14 space-y-5 text-base lg:text-lg text-justify">
                        <div class="w-full h-fit flex gap-5">
                            <div class="py-4 px-7 text-2xl font-bold bg-bluee3 rounded-l-full flex items-center justify-center">1</div>
                            <p class="w-full py-2 whitespace-pre-line border-2 border-bluee3 border-l-0 rounded pr-4"> <span class="font-bold">Pendaftaran profile anak</span>
                                Terapis dapat menambahkan biodata anak untuk dapat dilakukan pembelajaran komunikasi dengan aplikasi MIKA 1.0.
                            </p>
                        </div>
                        <div class="w-full h-fit flex gap-5">
                            <div class="py-4 px-7 text-2xl font-bold bg-bluee3 rounded-l-full flex items-center justify-center">2</div>
                            <p class="w-full py-2 whitespace-pre-line border-2 border-bluee3 border-l-0 rounded pr-4"> <span class="font-bold">Login tiap Terapis</span>
                                Terapis dapat masuk ke aplikasi MIKA 1.0 untuk menggunakan fitur-fitur aplikasi MIKA 1.0.
                            </p>
                        </div>
                        <div class="w-full h-fit flex gap-5">
                            <div class="py-4 px-7 h-20 text-2xl font-bold bg-bluee3 rounded-l-full flex items-center justify-center">3</div>
                            <p class="w-full py-2 whitespace-pre-line border-2 border-bluee3 border-l-0 rounded pr-4"> <span class="font-bold">Pengelolaan profil anak</span>
                                Terapis dapat mengisi dan merubah dan profil kemampuan anak (planning matrix) yang ada di aplikasi MIKA 1.0 sesuai kebutuhan dan perkembangan anak.                            
                            </p>
                        </div>
                        <div class="w-full h-fit flex gap-5">
                            <div class="py-4 px-7 h-20 text-2xl font-bold bg-bluee3 rounded-l-full flex items-center justify-center">4</div>
                            <div class="w-full pt-2 border-2 border-bluee3 border-l-0 rounded">
                                <p class="w-full whitespace-pre-line pr-4"> <span class="font-bold">Mengadministrasi MIKA 1.0</span>
                                    Terapis dapat memulai terapi/belajar komunikasi sesuai dengan tahap kemampuan anak. Secara umum, proses belajar komunikasi dibagi menjadi empat (4) level:
                                </p>
                                <div class="lg:flex item-start justify-start gap-4 space-y-4 pr-4 pb-4">
                                    <div class="p-4 lg:w-1/4 mt-4 bg-bluee3 text-center flex flex-col">
                                        <div class="lg:h-24 whitespace-pre-line">Level 1
                                            (Perbendaharaan kata)</div>
                                        <p class="text-justify">Anak dihadapkan dengan sekumpulan gambar dan memilih kata-kata yang dipelajari untuk menguasai komunikasi reseptif dan ekspresif. Tujuan fase ini adalah anak menggunakan kata-kata tersebut secara fungsional. Misalkan: belajar memahami dan mengekspresikan kata “makan”, hingga anak mampu menggunakan kata tersebut untuk meminta makan.</p>
                                    </div>
                                    <div class="p-4 lg:w-1/4 bg-bluee3 text-center flex flex-col">
                                        <div class="lg:h-24 whitespace-pre-line">Level 2 
                                            (Menyusun Kalimat Sederhana - terdiri 2 kata)</div>
                                        <p class="text-justify">Anak dihadapkan dengan sekumpulan gambar dan memilih 2 kata untuk menyusun kalimat sederhana (subyek + predikat). Tujuan fase ini adalah anak menggunakan kalimat sederhana tersebut secara fungsional, baik secara reseptif dan ekspresif.</p>
                                    </div>
                                    <div class="p-4 lg:w-1/4 bg-bluee3 text-center flex flex-col">
                                        <div class="lg:h-24 whitespace-pre-line">Level 3
                                            (Menyusun Kalimat Kompleks - terdiri 3-4 kata atau lebih)</div>
                                        <p class="text-justify">Anak dihadapkan dengan sekumpulan gambar dan memilih 2 kata untuk menyusun kalimat kompleks (subyek + predikat + obyek + keterangan). Tujuan fase ini adalah anak menggunakan kalimat kompleks tersebut secara fungsional, baik secara reseptif dan ekspresif.</p>
                                    </div>
                                    <div class="p-4 lg:w-1/4 bg-bluee3 text-center flex flex-col">
                                        <div class="lg:h-24 whitespace-pre-line">Level 4
                                            (Menyusun dialog)</div>
                                        <p class="text-justify">Anak dihadapkan dengan sekumpulan gambar dan menyusun percakapan dengan menggunakan alat bantu visual percakapan (menyusun kalimat tanya dan kalimat respon/komentar). Tujuan fase ini adalah anak mampu berdialog secara fungsional.</p>
                                    </div>   
                                </div>                  
                            </div>
                        </div>
                        <div class="w-full h-fit flex gap-5">
                            <div class="py-4 px-7 text-2xl font-bold bg-bluee3 rounded-l-full flex items-center justify-center">5</div>
                            <p class="w-full py-2 whitespace-pre-line border-2 border-bluee3 border-l-0 rounded pr-4"> <span class="font-bold">Mengevaluasi keberhasilan terapi/belajar</span>
                                Terapis dapat mengevaluasi hasil terapi komunikasi anak selama masa terapi/belajar.                            
                            </p>
                        </div>
                        <div class="w-full h-fit flex gap-5">
                            <div class="py-4 px-7 text-2xl font-bold bg-bluee3 rounded-l-full flex items-center justify-center">6</div>
                            <p class="w-full py-2 whitespace-pre-line border-2 border-bluee3 border-l-0 rounded pr-4"> <span class="font-bold">Mengelola dan mengamati perkembangan anak</span>
                                Terapis dapat melihat dan merubah perkembangan anak selama terapi/belajar berlangsung.                            
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="section-2" class="w-3/4 flex items-center justify-center py-4 px-0">
            <div class="w-full flex flex-col lg:flex-row items-start justify-start gap-0 lg:gap-11 text-base lg:text-lg text-blue31">
                <div class="w-full lg:w-2/3 text-justify lg:pr-12 pb-3 border-r-0 lg:border-r-2 border-bluee3">
                    <p>
                        MIKA Education merupakan platform belajar online untuk memahami Autisme, karakteristik belajar komunikasi pada individu autistik, strategi asesmen matriks perencanaan, metode intervensi TEACCH, serta administrasi, skoring dan interpretasi MIKA dalam mendampingi belajar komunikasi. 
                        MIKA education dibentuk sebagai kelanjutan pengembangan MIKA 1.0 dan menjadi suatu model komprehensif belajar menggunakan teknologi, yang mengkombinasikan aplikasi belajar (MIKA 1.0) dan website sumber belajar (MIKA Education).                    
                        <span class="lg:hidden">Aplikasi berbasis website ini sedang dalam tahap pengembangan dan telah memiliki versi Beta yang dapat diakses sekarang juga dibawah ini.</span>
                    </p>
                </div>
                <div class="w-full lg:w-1/3 text-justify lg:mt-0 mt-4">
                    <p class="lg:flex hidden pb-4">Aplikasi berbasis website ini sedang dalam tahap pengembangan dan telah memiliki versi Alpha yang dapat diakses sekarang juga, dibawah ini.</p>
                    <a href="{{ Auth::check() ? '/learn' : '/login' }}" class="bg-blue31 text-lg text-white py-3 lg:px-6 px-10 w-full rounded hover:bg-blue6a">
                        Mulai Program Pembelajaran
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w-full mt-20 bg-blue31 text-white flex items-center justify-center">
    <div class="w-3/4 flex flex-col items-center justify-center py-12 space-y-8 border-b-2 border-white">
        <h3 class="text-lg lg:text-xl font-bold text-justify">Berkolaborasi dengan sejumlah <span class="text-pinkee border-b-2 border-pinkee">pusat dukungan dan pendidikan autisme di Indonesia</span> </h3>
        <div class="w-full sm:flex justify-center items-center gap-5 lg:gap-10 grid grid-cols-2">
            <div class="flex items-center justify-center bg-white w-full lg:w-40 h-28 sm:h-28 md:h-32 lg:h-40 rounded">
                <img src="{{ asset('images/fpa.png') }}" alt="" class="rounded-full w-24 lg:w-32 lg:h-32">
            </div>
            <div class="flex items-center justify-center bg-white w-full lg:w-40 h-28 sm:h-28 md:h-32 lg:h-40 rounded">
                <img src="{{ asset('images/uner.png') }}" alt="" class="w-28 sm:w-fit lg:h-32">
            </div>
            <div class="flex items-center justify-center bg-white w-full lg:w-40 h-28 sm:h-28 md:h-32 lg:h-40 rounded">
                <img src="{{ asset('images/uptd-sdj.png') }}" alt="" class="w-28 sm:w-full lg:h-32">
            </div>
            <div class="flex items-center justify-center bg-white w-full lg:w-40 h-28 sm:h-28 md:h-32 lg:h-40 rounded">
                <img src="{{ asset('images/river.png') }}" alt="" class="rounded-full w-24 lg:w-32 lg:h-32">
            </div>
            <div class="flex items-center justify-center bg-white w-full lg:w-40 h-28 sm:h-28 md:h-32 lg:h-40 rounded">
                <img src="{{ asset('images/aawa.png') }}" alt="" class="rounded-full w-24 lg:w-32 lg:h-32">
            </div>
        </div>
        <p class="text-base lg:text-lg text-justify">Media ini dikembangkan oleh Forum Peduli Autisme Jawa Timur (FPAJT) berkerjasama dengan Fakultas Psikologi dan Fakultas Sains dan Teknologi Universitas Airlangga Surabaya, 
            UPTD Layanan Disabilitas Kab.Sidoarjo dan SLB Riverkids Malang, serta dukungan pendanaan Konsulat Jenderal Pemerintah Australia.
        </p>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const slider = document.getElementById("slider");
        let index = 0;
        const slides = slider.children;
        const totalSlides = slides.length;

        function slideImages() {
            index++;
            if (index >= totalSlides) {
                setTimeout(() => {
                    slider.style.transition = "none";
                    slider.style.transform = `translateX(0)`;
                    index = 0;
                    setTimeout(() => {
                        slider.style.transition = "transform 1s ease-in-out";
                    }, 50);
                }, 1000);
            } else {
                slider.style.transition = "transform 1s ease-in-out";
                slider.style.transform = `translateX(-${index * 100}%)`;
            }
        }

        setInterval(slideImages, 10000);
    });


    function showContent(id) {
        const section1Button = document.getElementById("section1Button");
        const section2Button = document.getElementById("section2Button");

        if (id === "section-1") {
            section1Button.classList.add("border-t-8", "border-pinkee", "bg-white");
            section1Button.classList.remove("bg-bluee3");
            section2Button.classList.remove("border-t-8", "border-pinkee", "bg-white");
            section2Button.classList.add("bg-bluee3");
        } else if (id === "section-2") {
            section2Button.classList.add("border-t-8", "border-pinkee", "bg-white");
            section2Button.classList.remove("bg-bluee3");
            section1Button.classList.remove("border-t-8", "border-pinkee", "bg-white");
            section1Button.classList.add("bg-bluee3");
        }

        document.getElementById("section-1").style.display = id === "section-1" ? "block" : "none";
        document.getElementById("section-2").style.display = id === "section-2" ? "block" : "none";
        localStorage.setItem("activeSection", id);
    }

    document.addEventListener("DOMContentLoaded", function () {
        const activeSection = localStorage.getItem("activeSection") || "section-1";
        showContent(activeSection);
    });


    document.addEventListener("DOMContentLoaded", function () {
        const btnContent1 = document.getElementById("content1");
        const btnContent2 = document.getElementById("content2");
        const content1 = document.getElementById("content1.1");
        const content2 = document.getElementById("content1.2");

        // Fungsi untuk menampilkan konten dan mengubah style tombol
        function showContent(activeBtn, inactiveBtn, activeContent, inactiveContent) {
            // Menampilkan konten yang aktif
            activeContent.style.display = "block";
            inactiveContent.style.display = "none";

            // Mengubah gaya tombol aktif
            activeBtn.classList.add("bg-white", "text-blue31");
            activeBtn.classList.remove("bg-blue31", "text-white");

            // Mengubah gaya tombol non-aktif
            inactiveBtn.classList.add("bg-blue31", "text-white");
            inactiveBtn.classList.remove("bg-white", "text-blue31");
        }

        // Atur tampilan default (content1 ditampilkan pertama)
        showContent(btnContent1, btnContent2, content1, content2);

        // Tambahkan event listener ke tombol
        btnContent1.addEventListener("click", function () {
            showContent(btnContent1, btnContent2, content1, content2);
        });

        btnContent2.addEventListener("click", function () {
            showContent(btnContent2, btnContent1, content2, content1);
        });
    });

    function toggleContent() {
        var textContainer = document.getElementById("textContainer");
        var button = document.getElementById("toggleButton");
        
        textContainer.style.maxHeight = "none";
        button.style.display = "none";
    }

</script>
