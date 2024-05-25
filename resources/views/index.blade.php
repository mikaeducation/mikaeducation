<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('public/assets/css/style.css')
    </head>
    <body class="font-futura">
        <header class="w-full h-24 bg-bluee3 flex justify-between items-center p-4">
            <div class="w-full h-full flex justify-center">
                <div class="flex justify-center items-center h-full w-3/4">
                    <div class="flex justify-center items-center mr-auto">
                        <a href="" class="flex items-center">
                            <div class="mr-5">
                                <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="h-10 w-10">
                            </div>
                            <h1 class="font-bold text-3xl text-blue6a">MIKA</h1>
                        </a>
                    </div>
                    <div class="hidden lg:flex lg:items-center lg:space-x-8">
                        <nav class="flex space-x-10 justify-center items-center">
                            <a href="" class="text-blue6a font-bold hover:text-pinkee">Beranda</a>
                            <a href="" class="text-blue6a font-bold hover:text-pinkee">Tentang Kami</a>
                            <a href="" class="text-blue6a font-bold hover:text-pinkee">Aplikasi</a>
                            <a href="" class="text-blue6a font-bold hover:text-pinkee">Artikel</a>
                            <a href="" class="text-blue6a font-bold hover:text-pinkee">Ulasan</a>
                            <a href="/login" class="bg-blue6a text-white hover:bg-pinkee font-bold rounded-full px-4 py-2">E-Learning</a>
                        </nav>
                        <a href="/login" class="h-10 w-10 flex justify-center items-center">
                            <div onclick="" class="
                                bg-white h-10 w-10 rounded-full border-2 border-blue6a hover:bg-blue31 flex justify-center items-center">
                                <img src="{{ asset('images/profile.png') }}" alt="Profile" class="">
                            </div>
                        </a>
                    </div>
                    <div class="lg:hidden flex items-center">
                        <button id="menu-btn" class="text-blue6a focus:outline-none">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <!-- Mobile-->
        <div id="menu" class="hidden lg:hidden flex-col justify-center items-center bg-bluee3 w-full">
            <nav class="flex flex-col justify-center items-center space-y-4 py-8">
                <a href="" class="text-blue6a font-bold">Beranda</a>
                <a href="" class="text-blue6a font-bold">Profile</a>
                <a href="" class="text-blue6a font-bold">E-Learning</a>
                <a href="" class="text-blue6a font-bold">Tentang Kami</a>
                <a href="" class="text-blue6a font-bold">Aplikasi</a>
                <a href="" class="text-blue6a font-bold">Artikel</a>
                <a href="" class="text-blue6a font-bold">Ulasan</a>
            </nav>
        </div>

        <section class="w-full h-auto flex justify-center bg-bluee3">
            <div class="flex flex-col items-center pt-20  w-full h-full ">
                <div class="h-1/2 w-3/4 flex justify-center items-center">
                    <div class="flex justify-center items-center h-full w-full">
                        <aside class="h-full w-1/2 flex items-center justify-center">
                            <img src="{{ asset('images/ilustration.png') }}" alt="" class="">
                        </aside>
                        <div class="h-full w-1/2 pr-4 flex flex-col items-center text-right justify-center">
                            <div class="h-full w-full bg-yellow text-blue6a flex flex-col items-end justify-center">
                                <h1 class="font-bold text-5xl">MIKA EDUCATION</h1>
                                <h3 class="font-semibold text-3xl">MEDIA VISUAL KOMUNIKASI ANAK</h3>
                                <p class="mt-8 text-blue31 font-medium">Media Visual Komunikasi Anak (MIKA) adalah media edukasi dan pembalajaran khusus 
                                    penanganan Anak Berkebutuhan Khusus, terutama anak dengan Spektrum Autisme dan hendaya komunikasi. Media ini dibuat dalam bentuk
                                    aplikasi perangkat lunak berbasis mobile yang mendukung belajar komunikasi dengan dukungan stimulus multi-sensoris berupa visual dan audio.
                                    Dengan pendekatan belajar visual, tercipta sebuah aplikasi bernama MIKA 1.0 yang menjadi strategi efektif dan berdaya guna dalam mendukung pendidikan 
                                    inklusi di Indonesia
                                </p>
                                <div class="w-full h-10">
                                    <button class="mt-8 px-8 text-white font-medium bg-pinkee h-full rounded-full hover:bg-blue6a">pelajari selengkapnya...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-max w-3/4 mt-10">
                    <div class="w-full h-3/6 flex justify-center items-center ">
                        <div class="grow flex-wrap basis-52 h-full rounded-3xl border-4 border-blue6a hover:bg-blue6a cursor-pointer flex justify-center items-center">
                            <img src="{{ asset('images/uptd-sdj.png') }}" alt="" class="w-18 h-20 py-2">
                        </div>
                        <div class="grow flex-wrap basis-52 h-full rounded-3xl border-4 border-blue6a hover:bg-blue6a cursor-pointer flex justify-center items-center mx-5">
                            <img src="{{ asset('images/fpa.png') }}" alt="" class="w-18 h-20 py-2">
                        </div>
                        <div class="grow flex-wrap basis-52 h-full rounded-3xl border-4 border-blue6a hover:bg-blue6a cursor-pointer flex justify-center items-center mx">
                            <img src="{{ asset('images/aawa.png') }}" alt="" class="w-18 h-20 py-2">
                        </div>
                        <div class="grow flex-wrap basis-52 h-full rounded-3xl border-4 border-blue6a hover:bg-blue6a cursor-pointer flex justify-center items-center mx-5">
                            <img src="{{ asset('images/river.png') }}" alt="" class="w-18 h-20 py-2">
                        </div>
                        <div class="grow flex-wrap basis-52 h-full rounded-3xl border-4 border-blue6a hover:bg-blue6a cursor-pointer flex justify-center items-center">
                            <img src="{{ asset('images/uner.png') }}" alt="" class="w-18 h-20 py-2">
                        </div>
                    </div>
                    <div class="flex justify-center items-center text-center mt-10 font-medium text-blue31">
                        <p>MIKA 1.0 merupakan platform yang dikembangkan oleh Forum Peduli Autisme Jawa Timur (FPAJT) berkerjasama dengan 
                            Fakultas Psikologi dan Fakultas Sains dan Teknologi Universitas Airlangga Surabaya, 
                            Sekolah luar Biasa Riverkids Malang, dan Unit Layanan Anak Berkebetuhan Khusus Kabupaten Sidoarjo, dengan dukungan 
                            pendanaan dari Pemerintah Australia melalui Autism Association of Western Australia.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full h-max flex justify-center items-center bg-custom">
            <div class="xl:w-3/4 h-full flex-col mt-20">
                <div class="w-full flex justify-center">
                    <div class="sm:w-1/2 h-20 bg-bluee3 mt-40 rounded-2xl flex justify-center items-center px-4 font-bold text-blue6a">
                        <div class="w-1/2 h-4/6 bg-white rounded-2xl flex justify-center items-center hover:bg-bluee3 cursor-pointer">Bagaimana cara kerja Mika?</div>
                        <div class="w-1/2 h-4/6 ml-2 rounded-2xl flex justify-center items-center hover:bg-white cursor-pointer">Mengapa harus Mika?</div>
                    </div>
                </div>
                <div class="w-full h-max mt-20 md:flex-col">
                    <div class="h-full flex md:flex-row flex-col">
                        <img src="{{ asset('images/content-1.png') }}" alt="" class="h-full">
                        <div class="md:pl-14">
                            <h6 class="text-pinkee font-medium text-xl">let's get to know</h6>
                            <h3 class="text-blue6a my-4 font-bold text-3xl">Dimana kita bermain dan belajar bersama</h3>
                            <p class="text-blue31 text-justify font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a imperdiet lacus, ut gravida sem. Phasellus quis lacus turpis.
                                In nec malesuada ante. Donec eget nisl rhoncus, egestas quam et, placerat justo. Class aptent taciti sociosqu ad litora torquent 
                                per conubia nostra, per inceptos himenaeos. Class aptent taciti sociosqu ad litora torquent 
                                per conubia nostra, per inceptos himenaeos. In a imperdiet lacus, ut gravida sem. Phasellus quis lacus turpis.
                                In nec malesuada ante. Class aptent taciti sociosqu ad litora torquent 
                                per conubia nostra, per inceptos himenaeos. Class aptent taciti sociosqu ad litora torquent 
                                per conubia nostra, per inceptos himenaeos. In a imperdiet lacus, ut gravida sem. Phasellus quis lacus turpis.
                                In nec malesuada ante.
                            </p>
                        </div>
                    </div>
                    <div class="h-full mt-16 flex md:flex-row flex-col">
                        <div class="md:pr-14 justify-center">
                            <h6 class="text-pinkee font-medium text-xl">let's get to know</h6>
                            <h3 class="text-blue6a my-4 font-bold text-3xl">Dimana kita bermain dan belajar bersama</h3>
                            <p class="text-blue31 text-justify font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a imperdiet lacus, ut gravida sem. Phasellus quis lacus turpis.
                                In nec malesuada ante. Donec eget nisl rhoncus, egestas quam et, placerat justo. Class aptent taciti sociosqu ad litora torquent 
                                per conubia nostra, per inceptos himenaeos. Class aptent taciti sociosqu ad litora torquent 
                                per conubia nostra, per inceptos himenaeos. In a imperdiet lacus, ut gravida sem. Phasellus quis lacus turpis.
                                In nec malesuada ante. Class aptent taciti sociosqu ad litora torquent 
                                per conubia nostra, per inceptos himenaeos. Class aptent taciti sociosqu ad litora torquent 
                                per conubia nostra, per inceptos himenaeos. In a imperdiet lacus, ut gravida sem. Phasellus quis lacus turpis.
                                In nec malesuada ante.
                            </p>
                        </div>
                        <img src="{{ asset('images/content-2.png') }}" alt="" class="h-full">
                    </div>
                </div>
                <div class="w-full h-auto mt-20 grid grid-cols-2 gap-4 font-medium text-blue31">
                    <div class="bg-bluee3 flex justify-center items-center h-40 rounded-3xl flex-col hover:bg-pinkee">
                        <img src="{{ asset('images/icons-speech.png') }}" alt="" class="w-16 h-16">
                        <p class="w-11/12 text-justify">Pembelajaran komunikasi berbasis visual untuk anak berkebutuhan khusus menggunakan metode Aided Language Stimulation (ALS) dan dukungan suara untuk setiap gambar</p>
                    </div>
                    <div class="bg-bluee3 flex justify-center items-center h-40 rounded-3xl flex-col hover:bg-pinkee">
                        <img src="{{ asset('images/icons-book.png') }}" alt="" class="w-16 h-16">
                        <p class="w-11/12 text-justify">Learning content yang dapat dipersonalisasi dengan fitur Penambahan kategori, gambar, dan suara berdasarkan kebutuhan anak-anak dan konteks lingkungan</p>
                    </div>
                    <div class="bg-bluee3 flex justify-center items-center h-40 rounded-3xl flex-col hover:bg-pinkee">
                        <img src="{{ asset('images/icons-personalization.png') }}" alt="" class="w-16 h-16">
                        <p class="w-11/12 text-justify">Manajemen performansi dan progress anak sebagai media analitis kemajuan anak serta penambahan opsi ulasan di setiap sesi pembelajaran</p>
                    </div>
                    <div class="bg-bluee3 flex justify-center items-center h-40 rounded-3xl flex-col hover:bg-pinkee">
                        <img src="{{ asset('images/icons-analysis.png') }}" alt="" class="w-16 h-16">
                        <p class="w-11/12 text-justify">Manajemen profil dan online-synchronization, untuk pengelolaan profil dan sinkronisasi data secara online, mempermudah dalam pembaharuan data.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class=" w-full h-max bg-custom-1 mt-10 flex flex-col items-center">
            <div class="w-3/4 flex flex-col justify-center items-center">
                <h1 class="font-bold text-5xl text-blue6a my-14">Aplikasi MIKA 1.0</h1>
                <img src="{{ asset('images/tablet.png') }}" alt="">
                <div class="w-full flex flex-col justify-center items-center text-center">
                    <h3 class="font-bold text-3xl text-blue6a mt-10">Mengenal aplikasi pembelajaran komunikasi visual Mika 1.0</h3>
                    <p class=" text-blue31 font-medium mt-5 w-11/12">MIKA 1.0 merupakan sebuah aplikasi perangkat lunak yang dikembangkan untuk mendukung pembelajaran komunikasi visual baru lebih cepat, lebih komprehensif dan sistematis. 
                    Aplikasi ini diharapkan mampu memberikan simulasi lebih baik untuk pembelajaran komunikasi pada Anak Berkebetuhan Khusus, khususnya Autism Spectrum Disorder (ASD). Aplikasi ini tersedia dan dapat diunduh melalui Google Playstore.</p> 
                </div>
                <a href="">
                    <img src="{{ asset('images/playstore.png') }}" alt="" class="mt-5">
                </a>
            </div>
        </section>  

        <section class=" w-full h-max bg-bluee3 mt-24 flex justify-center py-20">
            <div class="flex flex-col items-center w-3/4 text-center">
                <h3 class="mb-10 text-blue6a text-5xl italic">SEGERA DATANG...</h3>
                <h1 class="font-bold text-pinkee text-8xl italic">MIKA E-Learning</h1>
                <p class="my-10 text-blue31 font-medium">Lorem ipsum dolor sit amet consectetur. Vivamus at in mattis suspendisse habitant sit phasellus vitae scelerisque. Urna nunc egestas enim nulla faucibus fermentum sed in et. Eu lorem ultrices fermentum blandit hendrerit praesent vel.
                Malesuada at cras convallis ultrices. Lorem ipsum dolor sit amet consectetur. Vivamus at in mattis suspendisse habitant sit phasellus vitae scelerisque. Urna nunc egestas enim nulla faucibus fermentum sed in et. Eu lorem ultrices fermentum
                blandit hendrerit praesent vel. Malesuada at cras convallis ultrices. Vivamus at in mattis suspendisse habitant sit phasellus vitae scelerisque. Urna nunc egestas enim nulla faucibus fermentum sed in et. Eu lorem ultrices fermentum
                blandit hendrerit praesent vel. Malesuada at cras convallis ultrices.</p>
                <a href="" class="bg-pinkee font-medium flex justify-center items-center text-white w-40 h-8 rounded-full hover:bg-blue6a">selengkapnya...</a>
            </div>
        </section> 

        <section class=" w-full h-max flex justify-center">
            <div class="w-3/4 mt-28">
                <div class=" bg-blue6a rounded-3xl flex flex-col">
                    <div class="flex flex-col justify-center items-center my-10">
                        <h3 class="flex justify-center items-center font-bold text-2xl mb-10 text-white">Lebih dekat dengan artikel kami!</h3>
                        <div class="flex justify-center items-center w-11/12 h-5/6 gap-14">
                            <div class="rounded-3xl border-white border-4 cursor-pointer hover:border-pinkee">
                                <img src="{{ asset('images/artikel-1.png') }}" alt="" class="p-2">
                            </div>
                            <div class="rounded-3xl border-white border-4 cursor-pointer hover:border-pinkee">
                                <img src="{{ asset('images/artikel-2.png') }}" alt="" class="p-2">
                            </div>
                            <div class="rounded-3xl border-white border-4 cursor-pointer hover:border-pinkee">
                                <img src="{{ asset('images/artikel-3.png') }}" alt="" class="p-2">
                            </div>
                        </div>
                        <a href="" class="mt-8 bg-pinkee w-56 h-10 rounded-full font-semibold text-white hover:bg-white hover:text-blue6a flex justify-center items-center">baca selengkapnya...</a>
                    </div>
                </div>
                <div class="flex my-14 justify-center">
                    <div class="flex justify-center items-center">
                        <div class="flex justify-center items-center w-full">
                            <div class="flex rounded-3xl cursor-pointer w-full">
                                <div class="flex flex-col p-2 rounded-3xl bg-bluee3 w-full jus">
                                    <img src="{{ asset('images/news-1.png') }}" alt="" class="">
                                    <h3 class="font-semibold text-xl mt-5">Liputan 6</h3>
                                    <p class=" text-blue31 font-medium">Berawal Kegelisahan Terapis, Dosen Unair Kembangkan Aplikasi untuk Anak Autis</p>
                                    <a href="" class="font-medium bg-pinkee hover:bg-white hover:text-blue6a w-1/2 h-8 rounded-full text-white flex justify-center items-center mt-5">baca selengkapnya</a>
                                </div>
                                <div class="flex flex-col mx-5 p-2 rounded-3xl bg-bluee3 w-full">
                                    <img src="{{ asset('images/news-2.png') }}" alt="" class="">
                                    <h3 class="font-semibold text-xl mt-5">Detiknews.id</h3>
                                    <p class=" text-blue31 font-medium">Komunikasi Dengan Anak Autisme Melalui Aplikasi MIKA, Karya Margaretha Psikolog Unair</p>
                                    <a href="" class="font-medium bg-pinkee hover:bg-white hover:text-blue6a w-1/2 h-8 rounded-full text-white flex justify-center items-center mt-5">baca selengkapnya</a>
                                </div>
                                <div class="flex flex-col p-2 rounded-3xl bg-bluee3 w-full">
                                    <img src="{{ asset('images/news-3.png') }}" alt="" class="">
                                    <h3 class="font-semibold text-xl mt-5">BeritaLima</h3>
                                    <p class=" text-blue31 font-medium">Pemerintah Australia Bantu Tangani Pasien Autis</p>
                                    <a href="" class="font-medium bg-pinkee hover:bg-white hover:text-blue6a w-1/2 h-8 rounded-full text-white flex justify-center items-center mt-10">baca selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class=" w-full h-max bg-custom-3 flex justify-center my-16">
            <div class="w-3/4 ">
                <div class=" rounded-3xl flex flex-col mb-14">
                    <div class="flex flex-col justify-center items-center">
                        <h3 class="flex justify-center items-center font-bold text-3xl mb-10 text-blue6a">Apa yang mereka katakan tentang Mika?</h3>
                        <div class="flex rounded-3xl cursor-pointer">
                            <div class="flex flex-col items-center py-10 px-8 rounded-3xl border-4 border-blue6a w-full">
                                <img src="{{ asset('images/test-1.png') }}" alt="" class="h-28 w-28">
                                <h3 class="font-semibold text-base mt-2">Justin Bieber</h3>
                                <h6 class=" font-normal">Praktisi Autis SLB</h6>
                                <p class=" text-blue31 font-medium text-center mt-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a imperdiet lacus, ut gravida sem. Phasellus quis lacus turpis. In nec malesuada ante. </p>
                            </div>
                            <div class="flex flex-col items-center mx-10 py-10 px-8 rounded-3xl border-4 border-blue6a w-full">
                                <img src="{{ asset('images/test-1.png') }}" alt="" class="h-28 w-28">
                                <h3 class="font-semibold text-base mt-2">Justin Bieber</h3>
                                <h6 class=" font-normal">Praktisi Autis SLB</h6>
                                <p class=" text-blue31 font-medium text-center mt-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a imperdiet lacus, ut gravida sem. Phasellus quis lacus turpis. In nec malesuada ante. </p>
                            </div>
                            <div class="flex flex-col items-center py-10 px-8 rounded-3xl border-4 border-blue6a w-full">
                                <img src="{{ asset('images/test-1.png') }}" alt="" class="h-28 w-28">
                                <h3 class="font-semibold text-base mt-2">Justin Bieber</h3>
                                <h6 class=" font-normal">Praktisi Autis SLB</h6>
                                <p class=" text-blue31 font-medium text-center mt-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a imperdiet lacus, ut gravida sem. Phasellus quis lacus turpis. In nec malesuada ante. </p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <footer class="w-full bg-bluee3">
            <div class="container w-3/4 mx-auto flex flex-col lg:flex-row justify-center py-8 lg:py-12 px-6 lg:px-0">
                <div class="w-full lg:w-1/12 flex justify-center items-center mb-6 lg:mb-0">
                    <div class="text-center">
                        <img src="{{ asset('images/logo-1.png') }}" alt="" class="w-24 lg:w-full">
                        <h1 class="font-bold text-2xl lg:text-4xl text-blue6a">MIKA</h1>
                        <h6 class="font-medium text-xs lg:text-sm text-blue6a">Copyright©2024</h6>
                    </div>
                </div>
                <div class="w-full lg:w-2/6 flex justify-center items-center mb-6 lg:mb-0 ">
                    <div class="text-center">
                        <h1 class="font-semibold text-lg lg:text-xl text-blue6a">Media Visual Komunikasi Anak</h1>
                        <p class="font-medium text-base lg:text-lg text-blue6a mt-3">
                            Jl. Dr. Ir. H. Soekarno, Mulyorejo, <br> Kec. Mulyorejo, Surabaya, Jawa Timur 60115</p>
                        <p class="font-medium text-base lg:text-lg text-blue6a">Email: mikaunivairlangga@gmail.com</p>
                        <p class="font-medium text-base lg:text-lg text-blue6a">Whatsapp : +62 123-456-789</p>
                    </div>
                </div>
                <div class="w-full lg:w-1/5 flex justify-center items-center mb-6 lg:mb-0">
                    <div class="w-full h-48 lg:h-full bg-blue-200 flex items-center justify-center">
                        <div class="overflow-hidden w-full h-full">
                            <iframe src="https://maps.google.com/maps?q=PQMM%2BJF8%2C+Mulyorejo%2C+Kec.+Mulyorejo%2C+Surabaya%2C+Jawa+Timur+60115&t=k&z=18&ie=UTF8&iwloc=&output=embed" 
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0" class="w-full h-full">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/5 flex flex-col justify-center items-center mb-6 lg:mb-0">
                    <div class="text-center text-blue6a font-semibold">
                        <a href="" class="block hover:underline my-1">Beranda</a>
                        <a href="" class="block hover:underline my-1">Tentang Kami</a>
                        <a href="" class="block hover:underline my-1">Aplikasi</a>
                        <a href="" class="block hover:underline my-1">Artikel</a>
                        <a href="" class="block hover:underline my-1">E-Learning</a>
                    </div>
                </div>
                <div class="w-full lg:w-1/5 flex flex-col justify-center items-center">
                    <div class="text-center text-blue6a font-semibold">
                        <a href="" class="block hover:underline my-1">User Agreement</a>
                        <a href="" class="block hover:underline my-1">Privacy Policy</a>
                        <a href="" class="block hover:underline my-1">Community Guidelines</a>
                        <a href="" class="block hover:underline my-1">Feedback</a>
                        <a href="" class="block hover:underline my-1">Language</a>
                    </div>
                </div>
            </div>
        </footer>
        
    </body>

    <script>
        document.getElementById('menu-btn').addEventListener('click', function() {
            var menu = document.getElementById('menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });
    </script>
</html>
