<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-Learning | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="progress-id" content="{{ session('progress_id') }}">
        <meta name="user-id" content="{{ Auth::id() }}">
        @vite('public/assets/css/style.css')
        {{-- <script>document.documentElement.classList.add('js')</script> --}}
    </head>
    <body class="font-futura w-full min-h-screen flex flex-col relative">
    @include('includes.components.elearning.course.header')
    
        <section class="w-full flex-1 flex flex-col items-center justify-center text-blue31">
            <div class="w-full flex-grow flex items-start justify-start">
                {{-- Left Content --}}
                <div id="left" class="w-3/4 flex-1 max-h-[100vh] lg:max-h-[84vh] flex flex-col overflow-y-auto scrollbar scrollbar-thumb scrollbar-thumb-rounded scrollbar-thumb-blue31 scrollbar-track-gray-100">
                    <div class="w-full h-full flex flex-col pl-12 md:pr-12 mt-10">
                        <div class="h-full w-full space-y-8">
                            <div class="w-full h-[300px] md:h-[400px] lg:h-[500px] xl:h-[550px] flex bg-black rounded">
                                <div class="w-full h-full flex justify-center items-center">
                                    <div class="aspect-w-16 aspect-h-9 w-full h-full flex justify-center items-center">
                                        @include('includes.content.elearning.course.video-player', 
                                        ['src' => 'https://drive.google.com/file/d/1UJEaY0zlq5_9apQ9JMHoYuP4eHkp0K6_/view?usp=sharing'])
                                    </div>
                                </div>
                            </div>
                            <div class="w-full py-8 border-y-2 border-bluee3 space-y-4 text-lg">
                                <div class="w-full md:flex lg:flex">
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
                                <div class="w-full md:flex lg:flex" style="direction: rtl">
                                    <img src="{{ asset('images/member-Ira.jpg') }}" alt="Ira" class="h-48 md:h-52 float-right md:float-none lg:float-none ml-4">
                                    <p class="text-justify" style="direction: ltr">
                                        <span class=" font-medium">Ira Puspitasari</span> adalah Dosen dan Pengajar dari Program Studi Sistem Informasi, 
                                        Fakultas Sains dan Teknologi, serta program studi Magister Pengembangan Sumber Daya Manusia minat 
                                        studi Analitika Data, Universitas Airlangga. Selain itu, ia juga merupakan seorang peneliti dengan 
                                        spesialisasi khusus sebagai IT Consultant pada perancangan dan pengembangan aplikasi belajar MIKA Education. 
                                        Sebagai peneliti, ia memiliki fokus kajian pada bidang Consumer health informatics, data analytics, 
                                        Specialized Enterprise Architecture, Information Systems Theory, serta telah berhasil melakukan 
                                        berbagai publikasi artikel penelitian di Jurnal nasional terakreditasi dan internasional bereputasi.
                                    </p>
                                </div>
                                <div class="w-full md:flex lg:flex">
                                    <img src="{{ asset('images/member-khamida.jpg') }}" alt="Khamida" class="h-48 md:h-52 lg:h-52 float-left md:float-none lg:float-none mr-4">
                                    <p class="text-justify">
                                        <span class=" font-medium">Nishrina Khamida</span> , berprofesi sebagai psikolog klinis, anggota forum peduli autisme jawa timur 
                                        dan juga sebagai kepala UPTD layanan disabilitas Sidoarjo. Sejak tahun 2003 telah memiliki minat untuk praktik 
                                        yang berkaitan anak dengan autisme, mengambil skripsi yang berhubungan dengan sensori integrasi dan 
                                        hingga saat ini di tempat bekerja melakukan rangkaian asesmen, intervensi dan juga support system untuk anak dengan autisme.
                                    </p>
                                </div>
                                <div class="w-full md:flex lg:flex" style="direction: rtl">
                                    <img src="{{ asset('images/member-Retno.jpeg') }}" alt="Retno" class="h-48 md:h-52 float-right md:float-none lg:float-none ml-4">
                                    <p class="text-justify"  style="direction: ltr">
                                        <span class=" font-medium">Sri Retno Yuliani</span> , adalah psikolog klinis dan juga sebagai kepala SLB Autisme River Kids Malang. 
                                        Sejak 2001 terlibat dalam penanganan dan intervensi anak dengan autisme. Aktif sebagai anggota Forum Peduli Autisme Jawa Timur. 
                                        Banyak terlibat sebagai pemateri seminar dan workshop manajemen autisme, penulis buku intervensi psikologi pada anak berkebutuhan khusus.
                                    </p>
                                </div>
                                <div class="w-full md:flex lg:flex">
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
                                <div class="w-full md:flex lg:flex" style="direction: rtl">
                                    <img src="{{ asset('images/member-rayhan.png') }}" alt="Rayhan" class="h-48 md:h-52 float-right md:float-none lg:float-none ml-4">
                                    <p class="text-justify" style="direction: ltr;">
                                        <span class=" font-medium">Ahmad Rayhan</span>, mahasiswa program studi Sistem Informasi, Universitas Airlangga 
                                        dan salah satu pengembang aplikasi belajar MIKA Education. Memiliki ketertarikan di bidang Teknologi, 
                                        sejak 2021, ia telah mempelajari dan mengembangkan fokus kemampuannya dalam bidang perancangan dan 
                                        pengembangan Website, serta Business Analyst. Selain itu, ia memiliki pengalaman sebagai aktivis 
                                        sosial kemasyarakatan di organisasi selama 3 tahun perkuliahan, hingga memiliki ketertarikan untuk 
                                        mengintegrasikan kemampuan sosial dan teknis pengembangan website melalui penelitian skripsi untuk 
                                        anak berkebutuhan khusus dengan autisme.
                                    </p>
                                </div>
                                <div class="w-full md:flex lg:flex">
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
                {{-- Right Content --}}
                @include('includes.components.elearning.course.section')
            </div>
        </section>
    
    @include('includes.components.elearning.course.footer')

    </body>

</html>
