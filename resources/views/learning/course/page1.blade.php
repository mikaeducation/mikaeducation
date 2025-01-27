<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-Learning | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('public/assets/css/style.css')
        {{-- <script>document.documentElement.classList.add('js')</script> --}}
    </head>
    <body class="font-futura h-max w-full relative">
    @include('includes.components.elearning.course.header')
    
    @include('includes.content.elearning.course.page1') {{-- Responsive content --}}
    <section class="w-full h-max hidden md:hidden lg:flex flex-col items-center justify-center">
        <div class="w-3/4 hidden md:flex lg:flex">

            {{-- Left Content --}}
            <div id="left" class="h-full w-1/4 mr-8 sticky top-0 transition-all duration-300">
                <div id="leftContent" class="w-full h-fit flex flex-col justify-between items-start space-y-5">
                    <div class="w-full flex justify-between items-center">
                        <h3 class="text-base text-blue31 font-bold">Modul Pembelajaran</h3>
                        <button id="toggleLeft" class="w-10 h-10 flex items-center justify-center bg-blue31 rounded-full transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110">
                            <svg id="icon-arrow" width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.7408 18.7952L25.0228 8.7978C25.553 8.42664 26.2816 8.80596 26.2816 9.45318V28.5468C26.2816 29.194 25.553 29.5733 25.0228 29.2022L10.7408 19.2048C10.5986 19.1053 10.5986 18.8947 10.7408 18.7952Z" fill="white" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-8 w-full h-fit text-base text-blue31 font-medium space-y-1">
                        <div class="w-full h-5 rounded-full bg-bluee3 flex-col"><div class="w-0 h-full bg-blue31 rounded-l-full"></div></div>
                        <p>0% Progress selesai</p>
                    </div>
                    <div class="w-full h-fit mt-5 space-y-3">
                        <div class="w-full flex gap-2 p-2 border-l-8 bg-bluee3 border-l-blue31 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
                            <div class="w-1/4 flex justify-center pt-2">
                                <div class="w-10 h-10 rounded-full border-2 border-blue31"></div>
                            </div>
                            <div class="w-3/4 text-blue31 ">
                                <div class="w-full h-fit pr-2">
                                    <p class="text-sm mb-2">
                                        <Span class="text-base font-bold">Pengenalan:</Span>
                                        Mengenal lebih dekat dengan personil tim MIKA 1.0
                                    </p>
                                    <time datetime="PT7M" class="text-sm">7 menit</time>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex gap-2 p-2 border-l-8 border-y-2 border-r-2 border-bluee3 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
                            <div class="w-1/4 flex justify-center pt-2">
                                <div class="w-10 h-10 rounded-full border-2 border-blue31"></div>
                            </div>
                            <div class="w-3/4 text-blue31 ">
                                <div class="w-full h-fit pr-2">
                                    <p class="text-sm mb-2">
                                        <Span class="text-base font-bold">Asessmen I:</Span>
                                        Seputar Autisme, Metode TEACCH dan Aplikasi Belajar MIKA 1.0
                                    </p>
                                    <time datetime="PT15M" class="text-sm">15 menit</time>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex-col justify-center flex items-center gap-2 p-2 border-l-8 border-y-2 border-r-2 border-bluee3 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
                            <div class="flex w-full">
                                <div class="w-1/4 flex justify-center pt-2">
                                    <div class="w-10 h-10 rounded-full bg-blue31">
                                        <svg width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.7408 18.7952L25.0228 8.7978C25.553 8.42664 26.2816 8.80596 26.2816 9.45318V28.5468C26.2816 29.194 25.553 29.5733 25.0228 29.2022L10.7408 19.2048C10.5986 19.1053 10.5986 18.8947 10.7408 18.7952Z" fill="white"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-3/4 text-blue31 ml-2">
                                    <div class="w-full h-fit pr-2">
                                        <h3 class="text-base font-bold whitespace-pre-line">Gangguan 
                                            Spektrum Autisme</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="w-11/12 h-fit text-blue31 space-y-3 flex-col items-center justify-start border-t-2 border-bluee3 mt-2 p-4">
                                <div class="flex">
                                    <div class="w-6 h-6 rounded-full border-2 border-blue31"></div>
                                    <h6 class="ml-4">Mehamai Autisme</h6>
                                </div>
                                <div class="flex">
                                    <div class="w-6 h-6 rounded-full border-2 border-blue31"></div>
                                    <h6 class="ml-4">Komunikasi Autistik</h6>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex-col justify-center flex items-center gap-2 p-2 border-l-8 border-y-2 border-r-2 border-bluee3 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
                            <div class="flex w-full">
                                <div class="w-1/4 flex justify-center pt-2">
                                    <div class="w-10 h-10 rounded-full bg-blue31">
                                        <svg width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.7408 18.7952L25.0228 8.7978C25.553 8.42664 26.2816 8.80596 26.2816 9.45318V28.5468C26.2816 29.194 25.553 29.5733 25.0228 29.2022L10.7408 19.2048C10.5986 19.1053 10.5986 18.8947 10.7408 18.7952Z" fill="white"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-3/4 text-blue31 ">
                                    <div class="w-full h-fit pr-2">
                                        <h3 class="text-base font-bold whitespace-pre-line">Matriks 
                                            Perencanaan</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="w-11/12 h-fit text-blue31 space-y-3 flex-col items-center justify-start border-t-2 border-bluee3 mt-2 p-4">
                                <div class="flex">
                                    <div class="w-7 h-6 rounded-full border-2 border-blue31">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#31587C" stroke-width="1">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <div class="ml-4 w-full">
                                        <h6>Observasi, Pencatatan Karakteristik, Dampak dan Strategi</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex-col justify-center flex items-center gap-2 p-2 border-l-8 border-y-2 border-r-2 border-bluee3 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
                            <div class="flex w-full">
                                <div class="w-1/4 flex justify-center pt-2">
                                    <div class="w-10 h-10 rounded-full bg-blue31">
                                        <svg width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.7408 18.7952L25.0228 8.7978C25.553 8.42664 26.2816 8.80596 26.2816 9.45318V28.5468C26.2816 29.194 25.553 29.5733 25.0228 29.2022L10.7408 19.2048C10.5986 19.1053 10.5986 18.8947 10.7408 18.7952Z" fill="white"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-3/4 text-blue31 flex items-center ml-2">
                                    <div class="w-full h-fit pr-2">
                                        <h3 class="text-base font-bold whitespace-pre-line">Pembelajaran Terstruktur</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="w-11/12 h-fit text-blue31 space-y-3 flex-col items-center justify-start border-t-2 border-bluee3 mt-2 p-4">
                                <div class="flex">
                                    <div class="w-6 h-6 rounded-full border-2 border-blue31"></div>
                                    <h6 class="ml-4">Belajar Terstruktur</h6>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex-col justify-center flex items-center gap-2 p-2 border-l-8 border-y-2 border-r-2 border-bluee3 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
                            <div class="flex w-full">
                                <div class="w-1/4 flex justify-center pt-2">
                                    <div class="w-10 h-10 rounded-full bg-blue31">
                                        <svg width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.7408 18.7952L25.0228 8.7978C25.553 8.42664 26.2816 8.80596 26.2816 9.45318V28.5468C26.2816 29.194 25.553 29.5733 25.0228 29.2022L10.7408 19.2048C10.5986 19.1053 10.5986 18.8947 10.7408 18.7952Z" fill="white"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-3/4 text-blue31 ml-2">
                                    <div class="w-full h-fit pr-2">
                                        <h3 class="text-base font-bold whitespace-pre-line">Media Visual
                                            Komunikasi Anak</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="w-11/12 h-fit text-blue31 space-y-3 flex-col items-center justify-start border-t-2 border-bluee3 mt-2 p-4">
                                <div class="flex">
                                    <div class="w-6 h-6 rounded-full border-2 border-blue31"></div>
                                    <h6 class="ml-4">Memulai MIKA 1.0</h6>
                                </div>
                                <div class="flex">
                                    <div class="w-6 h-6 rounded-full border-2 border-blue31"></div>
                                    <h6 class="ml-4">Administratif MIKA 1.0</h6>
                                </div>
                                <div class="flex">
                                    <div class="w-6 h-6 rounded-full border-2 border-blue31"></div>
                                    <h6 class="ml-4">Interpretasi dan Evaluasi</h6>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex gap-2 p-2 border-l-8 border-y-2 border-r-2 border-bluee3 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
                            <div class="w-1/4 flex justify-center pt-2">
                                <div class="w-10 h-10 rounded-full border-2 border-blue31"></div>
                            </div>
                            <div class="w-3/4 text-blue31 ">
                                <div class="w-full h-fit pr-2">
                                    <p class="text-sm mb-2">
                                        <Span class="text-base font-bold">Evaluasi Pembelajaran:</Span>
                                        Uji pemahaman pengguna
                                    </p>
                                    <time datetime="PT25M" class="text-sm">25 menit</time>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex gap-2 p-2 border-l-8 border-y-2 border-r-2 border-bluee3 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
                            <div class="w-1/4 flex justify-center pt-2">
                                <div class="w-10 h-10 rounded-full border-2 border-blue31"></div>
                            </div>
                            <div class="w-3/4 text-blue31 ">
                                <div class="w-full h-fit pr-2">
                                    <p class="text-sm mb-2">
                                        <Span class="text-base font-bold">Asessmen II:</Span>
                                        Seputar Autisme, Metode TEACCH dan Aplikasi Belajar MIKA 1.10
                                    </p>
                                    <time datetime="PT25M" class="text-sm">25 menit</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Content --}}
            <div id="right" class="w-3/4 flex flex-col">
                <div class="w-full h-full flex flex-col" style="direction: ltr;">
                    <div class="flex items-center h-10">
                        <div id="toggleRight" class="flex md:flex lg:hidden">
                            <button class="w-10 h-10 flex items-center justify-center bg-blue31 rounded-full transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110">
                                <svg width="30" class="flex item-center justify-center" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.25 8.75H23.75" stroke="#ffffff" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M6.25 15H23.75" stroke="#ffffff" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M6.25 21.25H23.75" stroke="#ffffff" stroke-width="2" stroke-linecap="round"/>
                                </svg>                                
                            </button>
                        </div>
                        <div class="text-base flex ml-4 md:ml-8 lg:ml-12 text-blue31 font-bold" style="display: inline-flex; flex-wrap: wrap;">
                            <a href="" class="flex">
                                <span>Belajar Komunikasi Austistik dengan MIKA</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#6AA4D9" viewBox="0 0 24 24">
                                    <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
                                </svg>
                            </a>
                            <a href="/course" class="flex">
                                <span>Pengenalan</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#6AA4D9" viewBox="0 0 24 24">
                                    <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="h-full w-full mt-8 pl-8 space-y-8 overflow-y-scroll scrollbar scrollbar-thumb scrollbar-thumb-rounded scrollbar-thumb-gray-300 scrollbar-track-gray-100" style="direction: rtl;">
                        <div class="w-full h-60 md:h-80 lg:h-96 flex bg-black">
                            <div class="w-full h-full flex justify-center items-center">
                                <div class="aspect-w-16 aspect-h-9 w-full h-full flex justify-center items-center">
                                    <iframe 
                                        src="https://drive.google.com/file/d/1bbUD2O_h5uz0w3pwS6LsXjWAqzbPYeEF/preview?"
                                        title="Pengenalan MIKA" 
                                        frameborder="0" 
                                        allow="autoplay; encrypted-media" 
                                        allowfullscreen 
                                        class="w-full h-full">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                        <div class="w-full py-8 border-y-2 border-bluee3 space-y-4">
                            <div class="w-full md:flex lg:flex text-blue31 text-base font-normal" style="direction: ltr;">
                                <img src="{{ asset('images/member-Margaretha.jpg') }}" alt="Margaretha" class="h-48 md:h-52 lg:h-52 float-left md:float-none lg:float-none mr-4">
                                <p class="text-justify">
                                    <span class=" font-medium">Margaretha</span> adalah Ketua Forum Peduli Autisme Jawa Timur, 
                                    dan seorang Dosen dan Peneliti dari Fakultas Psikologi 
                                    Universitas Airlangga Indonesia. Sejak 2004, ia juga menjadi 
                                    konselor anak dan remaja dalam penanganan autisme, masalah psikososial 
                                    dan migrasi, masalah perilaku, pembentukan identitas gender, kekerasan dan trauma. 
                                    Sebagai peneliti, fokus kajian pada Kesehatan Mental Anak dan Remaja, 
                                    Psikopatologi Perkembangan dan Psikologi Forensik.
                                </p>
                            </div>
                            <div class="w-full md:flex lg:flex text-blue31 text-base font-normal" style="direction: rtl;">
                                <img src="{{ asset('images/member-Ira.jpg') }}" alt="Ira" class="h-48 md:h-52 lg:h-52 float-right md:float-none lg:float-none ml-4">
                                <p class="text-justify" style="direction: ltr;">
                                    <span class=" font-medium">Ira Puspitasari</span> adalah Dosen dan Pengajar dari Program Studi Sistem Informasi, 
                                    Fakultas Sains dan Teknologi, serta program studi Magister Pengembangan Sumber Daya Manusia minat 
                                    studi Analitika Data, Universitas Airlangga. Selain itu, ia juga merupakan seorang peneliti dengan 
                                    spesialisasi khusus sebagai IT Consultant pada perancangan dan pengembangan aplikasi belajar MIKA Education. 
                                    Sebagai peneliti, ia memiliki fokus kajian pada bidang Consumer health informatics, data analytics, 
                                    Specialized Enterprise Architecture, Information Systems Theory, serta telah berhasil melakukan 
                                    berbagai publikasi artikel penelitian di Jurnal nasional terakreditasi dan internasional bereputasi.
                                </p>
                            </div>
                            <div class="w-full md:flex lg:flex text-blue31 text-base font-normal" style="direction: ltr;">
                                <img src="{{ asset('images/member-khamida.jpg') }}" alt="Khamida" class="h-48 md:h-52 lg:h-52 float-left md:float-none lg:float-none mr-4">
                                <p class="text-justify">
                                    <span class=" font-medium">Nishrina Khamida</span> , berprofesi sebagai psikolog klinis, anggota forum peduli autisme jawa timur 
                                    dan juga sebagai kepala UPTD layanan disabilitas Sidoarjo. Sejak tahun 2003 telah memiliki minat untuk praktik 
                                    yang berkaitan anak dengan autisme, mengambil skripsi yang berhubungan dengan sensori integrasi dan 
                                    hingga saat ini di tempat bekerja melakukan rangkaian asesmen, intervensi dan juga support system untuk anak dengan autisme.
                                </p>
                            </div>
                            <div class="w-full md:flex lg:flex text-blue31 text-base font-normal" style="direction: rtl;">
                                <img src="{{ asset('images/member-Retno.jpeg') }}" alt="Retno" class="h-48 md:h-52 lg:h-52 float-right md:float-none lg:float-none ml-4">
                                <p class="text-justify" style="direction: ltr;">
                                    <span class=" font-medium">Sri Retno Yuliani</span> , adalah psikolog klinis dan juga sebagai kepala SLB Autisme River Kids Malang. 
                                    Sejak 2001 terlibat dalam penanganan dan intervensi anak dengan autisme. Aktif sebagai anggota Forum Peduli Autisme Jawa Timur. 
                                    Banyak terlibat sebagai pemateri seminar dan workshop manajemen autisme, penulis buku intervensi psikologi pada anak berkebutuhan khusus.
                                </p>
                                </div>
                            <div class="w-full md:flex lg:flex text-blue31 text-base font-normal" style="direction: ltr;">
                                <img src="{{ asset('images/member-vito.jpg') }}" alt="" class="h-48 md:h-52 lg:h-52 float-left md:float-none lg:float-none mr-4">
                                <p class="text-justify">
                                    <span class=" font-medium">Vito Emir Muhammad</span> merupakan salah satu pengembang aplikasi belajar
                                    MIKA 1.0 mobile yang berprofesi sebagai android programmer dan pegawai IT di salah satu 
                                    BUMN Indonesia. Pada tahun 2020, ia menjadi salah satu tim peneliti MIKA yang bertugas membangun, 
                                    melakukan maintenance dan pengembangan fitur baru pada aplikasi MIKA 1.0 Mobile. Selain itu, 
                                    selama menjadi mahasiswa ia memiliki fokus dan ketertarikan pengembangan keahlian khusus pada 
                                    bidang mobile programmer dengan penelitian skripsi terkait optimalisasi aplikasi belajar MIKA berbasis mobile.
                                </p>
                            </div>
                            <div class="w-full md:flex lg:flex text-blue31 text-base font-normal" style="direction: rtl;">
                                <img src="{{ asset('images/member-rayhan.png') }}" alt="Rayhan" class="h-48 md:h-52 lg:h-52 float-right md:float-none lg:float-none ml-4">
                                <p class="text-justify" style="direction: ltr;">
                                    <span class=" font-medium">Ahmad Rayhan</span> , mahasiswa program studi Sistem Informasi, Universitas Airlangga 
                                    dan salah satu pengembang aplikasi belajar MIKA Education. Memiliki ketertarikan di bidang Teknologi, 
                                    sejak 2021, ia telah mempelajari dan mengembangkan fokus kemampuannya dalam bidang perancangan dan 
                                    pengembangan Website, serta Business Analyst. Selain itu, ia memiliki pengalaman sebagai aktivis 
                                    sosial kemasyarakatan di organisasi selama 3 tahun perkuliahan, hingga memiliki ketertarikan untuk 
                                    mengintegrasikan kemampuan sosial dan teknis pengembangan website melalui penelitian skripsi untuk 
                                    anak berkebutuhan khusus dengan autisme.
                                </p>
                            </div>
                            <div class="w-full md:flex lg:flex text-blue31 text-base font-normal" style="direction: ltr;">
                                <img src="{{ asset('images/member-noel.png') }}" alt="" class="h-48 md:h-52 lg:h-52 float-left md:float-none lg:float-none mr-4">
                                <p class="text-justify">
                                    <span class=" font-medium">Nicolas Noel Christianto</span> akrab disapa Noel, seorang mahasiswa jurusan Sistem Informasi, Universitas Airlangga 
                                    dan salah satu pengembang aplikasi belajar MIKA Education. Memiliki ketertarikan di bidang teknologi, 
                                    beberapa tahun telah ia lalui dengan fokus belajar dan mengembangkan keahlian dalam bidang pengembangan website, serta sedang 
                                    mendalami bidang cybersecurity. Noel memiliki pengalaman terkait kegiatan sosial yang dilakukan melalui organisasi 
                                    di kampus yang menjadi dasar ketertarikan untuk ikut serta dalam pengembangan aplikasi MIKA untuk optimalisasi pembelajaran 
                                    bagi anak penyandang autisme, maupun bagi orang-orang disekitarnya yang berkeinginan mempelajari tentang autisme.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Navigasi --}}
        <div class="w-3/4 space-x-10 mt-8 flex justify-end items-center">
            <a href="" class="text-base hidden text-blue31 font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#6AA4D9" viewBox="0 0 24 24">
                    <path d="M15.707 4.707a1 1 0 0 0-1.414 0L7.293 12l6.293 7.293a1 1 0 1 0 1.414-1.414L9.414 12l6.293-6.121a1 1 0 0 0 0-1.414z" />
                </svg>                
                Sebelumnya
            </a>
            <a href="/page2_0" class="text-base flex text-blue31 font-semibold">Selanjutnya
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#6AA4D9" viewBox="0 0 24 24">
                    <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
                </svg>
            </a>
        </div>
    </section>

    @include('includes.components.elearning.course.footer')
    
    </body>

    {{-- <script src="https://unpkg.com/taos@1.0.5/dist/taos.js"></script>
    <!-- Hanya fungsi untuk menginisialisasi TAOS setelah berhasil dimuat -->
    <script>
        function initializeTAOS() {
            if (typeof TAOS !== 'undefined') {
                TAOS.init();
                console.log("TAOS initialized");
            } else {
                console.error("TAOS is not defined.");
            }
        }
    </script> --}}
    <script>
        document.getElementById('menu-btn').addEventListener('click', function() {
            var menu = document.getElementById('menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });

        const toggleLeftButton = document.getElementById('toggleLeft');
        const toggleRightButton = document.getElementById('toggleRight');
        const leftContent = document.getElementById('left');
        const rightContent = document.getElementById('right');

        // Hide left section on initial click and show toggleRight button
        toggleLeftButton.addEventListener('click', () => {
            leftContent.classList.add('hidden'); // Hide the left section
            rightContent.classList.remove('w-3/4'); // Make right content full width
            rightContent.classList.add('w-full');
            toggleRightButton.style.display = 'block'; // Show toggleRight button
        });

        // Show left section again on toggleRight click and reset layout
        toggleRightButton.addEventListener('click', () => {
            leftContent.classList.remove('hidden'); // Show left section
            rightContent.classList.remove('w-full'); // Reset right content width
            rightContent.classList.add('w-3/4');
            toggleRightButton.style.display = 'none'; // Hide toggleRight button
        });

    </script>

</html>
