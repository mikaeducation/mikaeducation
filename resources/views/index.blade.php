<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Beranda | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('public/assets/css/style.css')
    </head>
    <body class="font-futura h-max w-full relative">
        @include('includes.components.main.header')
        @include('includes.content.main.dropdown')

        <Section class="w-full h-max flex justify-center items-center">
            @include('includes.content.main.home.section1');
        </Section>

        {{-- <section class="w-full h-max flex justify-center bg-bluee3">
            <div class="flex flex-col items-center  w-full h-full ">
                <div class="h-max w-3/4 mt-10">
                    <div class="w-full flex justify-center items-center flex-wrap ">
                        <div class="h-full md:w-1/6 rounded-3xl border-4 p-2  border-blue6a hover:bg-blue6a cursor-pointer flex justify-center items-center">
                            <img src="{{ asset('images/uptd-sdj.png') }}" alt="" class="w-18 h-20 py-2">
                        </div>
                        <div class="h-full md:w-1/6 rounded-3xl border-4 p-2 m-2 md:mx-10 border-blue6a hover:bg-blue6a cursor-pointer flex justify-center items-center">
                            <img src="{{ asset('images/fpa.png') }}" alt="" class="w-18 h-20 py-2">
                        </div>
                        <div class="h-full md:w-1/6 rounded-3xl border-4 p-2 border-blue6a hover:bg-blue6a cursor-pointer flex justify-center items-center">
                            <img src="{{ asset('images/aawa.png') }}" alt="" class="w-18 h-20 py-2">
                        </div>
                        <div class="h-full md:w-1/6 rounded-3xl border-4 p-2 m-2 md:mx-10 border-blue6a hover:bg-blue6a cursor-pointer flex justify-center items-center">
                            <img src="{{ asset('images/river.png') }}" alt="" class="w-18 h-20 py-2">
                        </div>
                        <div class="h-full md:w-1/6 rounded-3xl border-4 p-2 border-blue6a hover:bg-blue6a cursor-pointer flex justify-center items-center">
                            <img src="{{ asset('images/uner.png') }}" alt="" class="w-18 h-20 py-2">
                        </div>
                    </div>
                    <div class="flex justify-center items-center text-justify mt-10 font-medium text-blue31">
                        <p>MIKA 1.0 merupakan platform yang dikembangkan oleh Forum Peduli Autisme Jawa Timur (FPAJT) berkerjasama dengan 
                            Fakultas Psikologi dan Fakultas Sains dan Teknologi Universitas Airlangga Surabaya, 
                            Sekolah luar Biasa Riverkids Malang, dan Unit Layanan Anak Berkebetuhan Khusus Kabupaten Sidoarjo, dengan dukungan 
                            pendanaan dari Pemerintah Australia melalui Autism Association of Western Australia.
                        </p>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- <section id="about" class="w-full h-max flex justify-center items-center bg-custom">
            <div class="xl:w-3/4 w-3/4 h-full flex-col mt-20">
                <div class="w-full flex justify-center">
                    <div class="sm:w-1/2 h-20 bg-bluee3 mt-40 rounded-2xl flex justify-center items-center px-4 font-bold text-blue6a">
                        <div class="w-full h-4/6 bg-white rounded-2xl flex justify-center items-center text-center p-1 hover:bg-bluee3 cursor-pointer">Bagaimana cara kerja Mika?</div>
                        <div class="w-full h-4/6 ml-2 rounded-2xl flex justify-center items-center text-center p-1 hover:bg-white cursor-pointer">Mengapa harus Mika?</div>
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
                <div class="w-full h-max mt-20 grid grid-cols-1 md:grid-cols-2 gap-4 font-medium text-blue31">
                    <div class="bg-bluee3 h-full flex justify-center items-center rounded-3xl flex-col p-4 hover:bg-pinkee">
                        <img src="{{ asset('images/icons-speech.png') }}" alt="" class="w-16 h-16">
                        <p class="w-11/12 text-justify">Pembelajaran komunikasi berbasis visual untuk anak berkebutuhan khusus menggunakan metode Aided Language Stimulation (ALS) dan dukungan suara untuk setiap gambar</p>
                    </div>
                    <div class="bg-bluee3 h-full flex justify-center items-center rounded-3xl flex-col p-4 hover:bg-pinkee">
                        <img src="{{ asset('images/icons-book.png') }}" alt="" class="w-16 h-16">
                        <p class="w-11/12 text-justify">Learning content yang dapat dipersonalisasi dengan fitur Penambahan kategori, gambar, dan suara berdasarkan kebutuhan anak-anak dan konteks lingkungan</p>
                    </div>
                    <div class="bg-bluee3 h-full flex justify-center items-center rounded-3xl flex-col p-4 hover:bg-pinkee">
                        <img src="{{ asset('images/icons-personalization.png') }}" alt="" class="w-16 h-16">
                        <p class="w-11/12 text-justify">Manajemen performansi dan progress anak sebagai media analitis kemajuan anak serta penambahan opsi ulasan di setiap sesi pembelajaran</p>
                    </div>
                    <div class="bg-bluee3 h-full flex justify-center items-center rounded-3xl flex-col p-4 hover:bg-pinkee">
                        <img src="{{ asset('images/icons-analysis.png') }}" alt="" class="w-16 h-16">
                        <p class="w-11/12 text-justify">Manajemen profil dan online-synchronization, untuk pengelolaan profil dan sinkronisasi data secara online, mempermudah dalam pembaharuan data.</p>
                    </div>
                </div>
                
            </div>
        </section> --}}

        {{-- <section class=" w-full h-max bg-custom-1 mt-10 flex flex-col items-center">
            <div class="w-3/4 flex flex-col justify-center items-center">
                <h1 class="font-bold text-5xl text-blue6a my-14 text-center">Aplikasi MIKA 1.0</h1>
                <img src="{{ asset('images/tablet.png') }}" alt="">
                <div class="w-full flex flex-col justify-center items-center text-center">
                    <h3 class="font-bold text-3xl text-blue6a mt-10 text-">Mengenal aplikasi pembelajaran komunikasi visual Mika 1.0</h3>
                    <p class=" text-blue31 font-medium mt-5 w-11/12 text-justify">MIKA 1.0 merupakan sebuah aplikasi perangkat lunak yang dikembangkan untuk mendukung pembelajaran komunikasi visual baru lebih cepat, lebih komprehensif dan sistematis. 
                    Aplikasi ini diharapkan mampu memberikan simulasi lebih baik untuk pembelajaran komunikasi pada Anak Berkebetuhan Khusus, khususnya Autism Spectrum Disorder (ASD). Aplikasi ini tersedia dan dapat diunduh melalui Google Playstore.</p> 
                </div>
                <a href="">
                    <img src="{{ asset('images/playstore.png') }}" alt="" class="mt-5">
                </a>
            </div>
        </section>   --}}

        {{-- <section class=" w-full h-max bg-bluee3 mt-24 flex justify-center py-20">
            <div class="flex flex-col items-center w-3/4 text-center ">
                <h3 class="mb-5 md:mb-10 text-blue6a text-xl italic md:text-5xl font-semibold md:font-medium">SEGERA DATANG...</h3>
                <h1 class="font-bold text-pinkee text-4xl md:text-8xl italic">MIKA E-Learning</h1>
                <p class="my-5 md:my-10 text-blue31 font-medium text-justify">Lorem ipsum dolor sit amet consectetur. Vivamus at in mattis suspendisse habitant sit phasellus vitae scelerisque. Urna nunc egestas enim nulla faucibus fermentum sed in et. Eu lorem ultrices fermentum blandit hendrerit praesent vel.
                Malesuada at cras convallis ultrices. Lorem ipsum dolor sit amet consectetur. Vivamus at in mattis suspendisse habitant sit phasellus vitae scelerisque. Urna nunc egestas enim nulla faucibus fermentum sed in et. Eu lorem ultrices fermentum
                blandit hendrerit praesent vel. Malesuada at cras convallis ultrices. Vivamus at in mattis suspendisse habitant sit phasellus vitae scelerisque. Urna nunc egestas enim nulla faucibus fermentum sed in et. Eu lorem ultrices fermentum
                blandit hendrerit praesent vel. Malesuada at cras convallis ultrices.</p>
                <a href="" class="bg-pinkee font-medium flex justify-center items-center text-white w-40 h-8 rounded-full hover:bg-blue6a">selengkapnya...</a>
            </div>
        </section>  --}}

        {{-- <section class=" w-full h-max flex justify-center">
            <div class="w-3/4 mt-28">
                <div class=" bg-blue6a rounded-3xl flex flex-col">
                    <div class="flex flex-col justify-center items-center my-10">
                        <h3 class="flex justify-center items-center font-bold text-center text-2xl mb-10 px-5 text-white">Lebih dekat dengan artikel Mika!</h3>
                        <div class="flex justify-center items-center w-11/12 h-5/6 md:gap-14 flex-wrap">
                            <div class="rounded-3xl border-white border-4 cursor-pointer hover:border-pinkee">
                                <img src="{{ asset('images/artikel-1.png') }}" alt="" class="md:p-2 p-2">
                            </div>
                            <div class="rounded-3xl border-white border-4 cursor-pointer hover:border-pinkee md:my-0 my-4">
                                <img src="{{ asset('images/artikel-2.png') }}" alt="" class="md:p-2 p-2">
                            </div>
                            <div class="rounded-3xl border-white border-4 cursor-pointer hover:border-pinkee">
                                <img src="{{ asset('images/artikel-3.png') }}" alt="" class="md:p-2 p-2">
                            </div>
                        </div>
                        <a href="" class="mt-8 bg-pinkee w-56 h-10 rounded-full font-semibold text-white hover:bg-white hover:text-blue6a flex justify-center items-center">baca selengkapnya...</a>
                    </div>
                </div>
                <div class="my-14 rounded-3xl flex flex-col">
                    <div class="flex flex-col justify-center items-center my-10 w-full">
                        <h3 class="flex justify-center items-center font-bold text-center text-2xl mb-10 px-5 text-blue6a">Berita terbaru seputar Mika!</h3>
                        <div class="flex justify-center items-center w-full h-5/6 flex-wrap ">
                            <div class="rounded-3xl w-full h-full md:h-full md:w-1/4 md:p-3 p-2 bg-blue6a cursor-pointer hover:border-pinkee my-0 md:my-2 md:mx-2 flex flex-col justify-center items-center text-center">
                                <img src="{{ asset('images/news-1.png') }}" alt="" class="">
                                <h3 class="font-semibold text-white text-xl mt-3">Liputan 6</h3>
                                <p class="font-medium text-white text-justify mb-4">Berawal Kegelisahan Terapis, Dosen Unair Kembangkan Aplikasi untuk Anak Autis</p>
                                <a href="" class="font-medium bg-pinkee hover:bg-white hover:text-blue6a w-3/4 h-8 rounded-full text-white flex justify-center items-center mt-2 md:mt-3">baca selengkapnya</a>
                            </div>
                            <div class="rounded-3xl w-full h-full md:h-full md:w-1/4 md:p-3 p-2 bg-blue6a cursor-pointer hover:border-pinkee my-4 md:my-2 md:mx-10 flex flex-col justify-center items-center text-center">
                                <img src="{{ asset('images/news-2.png') }}" alt="" class="">
                                <h3 class="font-semibold text-white text-xl mt-3">Detiknews.id</h3>
                                <p class="font-medium text-white text-justify mb-4">Komunikasi Dengan Anak Autisme Melalui Aplikasi MIKA, Karya Margaretha Psikolog Unair</p>
                                <a href="" class="font-medium bg-pinkee hover:bg-white hover:text-blue6a w-3/4 h-8 rounded-full text-white flex justify-center items-center mt-2 md:mt-0">baca selengkapnya</a>
                            </div>
                            <div class="rounded-3xl w-full h-full md:h-full md:w-1/4 md:p-3 p-2 bg-blue6a cursor-pointer hover:border-pinkee my-0 md:my-2 flex flex-col justify-center items-center text-center">
                                <img src="{{ asset('images/news-3.png') }}" alt="" class="">
                                <h3 class="font-semibold text-white text-xl mt-3">BeritaLima</h3>
                                <p class="font-medium text-white text-justify mb-4">Pemerintah Australia Bantu Tangani Pasien Autis</p>
                                <a href="" class="font-medium bg-pinkee hover:bg-white hover:text-blue6a w-3/4 h-8 rounded-full text-white flex justify-center items-center mt-2 md:mt-5">baca selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
        </section> --}}

        {{-- <section class=" w-full h-max bg-custom-3 flex justify-center my-16">
            <div class="w-3/4 ">
                <div class=" rounded-3xl flex flex-col mb-14">
                    <div class="flex flex-col justify-center items-center">
                        <h3 class="flex justify-center items-center font-bold text-3xl mb-10 text-blue6a text-center">Apa yang mereka katakan tentang Mika?</h3>
                        <div class="flex rounded-3xl cursor-pointer flex-wrap items-center justify-center">
                            <div class="flex flex-col items-center py-10 px-8 rounded-3xl border-4 border-blue6a w-full md:w-1/4">
                                <img src="{{ asset('images/test-1.png') }}" alt="" class="h-28 w-28">
                                <h3 class="font-semibold text-base mt-2">Justin Bieber</h3>
                                <h6 class=" font-normal">Praktisi Autis SLB</h6>
                                <p class=" text-blue31 font-medium text-center mt-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a imperdiet lacus, ut gravida sem. Phasellus quis lacus turpis. In nec malesuada ante. </p>
                            </div>
                            <div class="flex flex-col items-center py-10 px-8 md:mx-20 my-5 md:my-0 rounded-3xl border-4 border-blue6a w-full md:w-1/4">
                                <img src="{{ asset('images/test-1.png') }}" alt="" class="h-28 w-28">
                                <h3 class="font-semibold text-base mt-2">Justin Bieber</h3>
                                <h6 class=" font-normal">Praktisi Autis SLB</h6>
                                <p class=" text-blue31 font-medium text-center mt-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a imperdiet lacus, ut gravida sem. Phasellus quis lacus turpis. In nec malesuada ante. </p>
                            </div>
                            <div class="flex flex-col items-center py-10 px-8 rounded-3xl border-4 border-blue6a w-full md:w-1/4">
                                <img src="{{ asset('images/test-1.png') }}" alt="" class="h-28 w-28">
                                <h3 class="font-semibold text-base mt-2">Justin Bieber</h3>
                                <h6 class=" font-normal">Praktisi Autis SLB</h6>
                                <p class=" text-blue31 font-medium text-center mt-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a imperdiet lacus, ut gravida sem. Phasellus quis lacus turpis. In nec malesuada ante. </p>
                            </div>
                        </div>
                    </div>
                </div>
        </section> --}}

        @include('includes.components.main.footer')      
        
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
