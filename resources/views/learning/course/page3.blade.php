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
    
    @include('includes.content.elearning.course.page2_1') {{-- Responsive content --}}
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
                        <div class="w-full h-5 rounded-full bg-bluee3 flex-col"><div class="w-10 h-full bg-blue31 rounded-l-full"></div></div>
                        <p>18% Progress selesai</p>
                    </div>
                    <div class="w-full h-fit mt-5 space-y-3">
                        <div class="w-full flex gap-2 p-2 border-l-8 border-y-2 border-r-2 border-bluee3 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
                            <div class="w-1/4 flex justify-center pt-2">
                                <div class="w-10 h-10 rounded-full border-2 border-blue31">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#31587C" stroke-width="1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
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
                                <div class="w-10 h-10 rounded-full border-2 border-blue31">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#31587C" stroke-width="1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
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
                        <div class="w-full flex-col justify-center flex items-center p-2 border-l-8 bg-bluee3 border-l-blue31 transition ease-in-out delay-50 hover:-translate-x-1 hover:scale-110 cursor-pointer">
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
                                        <h3 class="text-base font-bold whitespace-pre-line">Gangguan 
                                            Spektrum Autisme</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="w-11/12 h-0.5 my-4 bg-blue31"></div>
                            <div class="w-full h-fit gap-4 px-4 pb-4 text-blue31 space-y-3 flex-col items-center justify-start border-t-2 border-bluee3">
                                <div class="w-full flex gap-4">
                                    <div class="w-fit flex justify-center">
                                        <div class="w-7 h-7 rounded-full border-2 border-blue31">
                                        </div>
                                    </div>
                                    <div class="w-3/4 text-blue31 ">
                                        <div class="w-full h-fit pr-2">
                                            <p class="text-base mb-2">
                                                <Span class="text-base font-bold">Memahami Autisme:</Span>
                                                Memahami apa itu Gangguan Spektrum Autisme
                                            </p>
                                            <time datetime="PT5M" class="text-sm">5 menit</time>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full flex gap-4">
                                    <div class="w-fit flex justify-center">
                                        <div class="w-7 h-7 rounded-full border-2 border-blue31">
                                        </div>
                                    </div>
                                    <div class="w-3/4 text-blue31 ">
                                        <div class="w-full h-fit pr-2">
                                            <p class="text-base mb-2">
                                                <Span class="text-base font-bold">Komunikasi Autistik:</Span>
                                                Pra-komunikasi, Reseptif, Ekspresif, Pragmatis, Strategi Komunikasi
                                            </p>
                                            <time datetime="PT25M" class="text-sm">25 menit</time>
                                        </div>
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
                                <div class="w-3/4 text-blue31 ">
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
                                <div class="w-3/4 text-blue31 ">
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
                                <span>Gangguan Spektrum Autisme</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#6AA4D9" viewBox="0 0 24 24">
                                    <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
                                </svg>
                            </a>
                            <a href="/course" class="flex">
                                <span>Memahami Autisme</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#6AA4D9" viewBox="0 0 24 24">
                                    <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="h-full w-full mt-8 pl-8 space-y-8 overflow-y-scroll scrollbar scrollbar-thumb scrollbar-thumb-rounded scrollbar-thumb-gray-300 scrollbar-track-gray-100" style="direction: rtl;">
                        <div class="w-full h-60 md:h-80 lg:h-96 flex bg-black" style="direction: ltr;">
                            <div class="w-full h-full flex justify-center items-center">
                                <div class="aspect-w-16 aspect-h-9 w-full h-full flex justify-center items-center">
                                    <iframe 
                                        src="https://drive.google.com/file/d/1tRmqMto6JWiCVqvDuHAd3GynA5PqMmT9/preview" 
                                        title="E-Learning Video Player" 
                                        frameborder="0" 
                                        allow="autoplay; encrypted-media;" 
                                        allowfullscreen 
                                        class="w-full h-full">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="w-full flex gap-8 h-8 border-b-2 border-bluee3 text-base font-bold text-blue31" style="direction: ltr;">
                                <a href=""><div class="h-full w-fit px-2 border-b-2 border-blue31 relative before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full">Bacaan</div></a>
                                <a href=""><div class="h-full w-fit px-2 relative before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full">Unduhan</div></a>                            
                            </div>
                            <div class="w-full text-blue31 pb-4 border-b-2 border-bluee3 whitespace-pre-line text-justify"  style="direction: ltr;">
                                <p>Salam, Saya Margaretha, tim MIKA education. Kali ini saya akan menjelaskan apa autisme dan bagaimana dampak gejalanya bisa mempengaruhi perilaku dan kemampuan belajar anak autistik. Kita juga akan mempelajari proses skrining dan diagnosa autisme, mitos, hingga ke praktik baik intervensi autisme.

                                    Kita awali dengan memahami gejala autisme. Secara klinis ada 2 gejala utama: hambatan melakukan komunikasi sosial yang sering menyulitkannya berinteraksi timbal-balik di lingkungan dan munculnya perilaku minat terbatas dan berulang yang sering membuat anak autistik tampak aneh.
                                    
                                    Namun, selain gejala klinis, ada juga beberapa karakteristik autisme yang unik, misalkan: keunikan pemrosesan informasi, seperti: satu, persoalan theory of mind yang berdampak pada kesulitan memahami pikiran dan perasaan orang lain; dua, persoalan terkait dengan lemahnya central coherence, yang berdampak pada kesulitan memahami makna secara umum karena terlalu fokus pada detail; dan tiga, persoalan fungsi executive yang berdampak pada kesulitan mengelola perilakunya untuk berperilaku dan mencapai tujuan pembelajaran. Ketiga kemampuan pemrosesan informasi ini diperlukan sebagai dasar belajar dari lingkungan, maka hambatan pada ketiganya akan membuat anak autistik membutuhkan dukungan belajar yang disesuaikan dengan kondisi theory of mind, central coherence, dan fungsi eksekutif.
                                    
                                    Pemrosesan sensoris  juga berbeda. Beberapa anak autistik menunjukkan kepekaan berlebih pada stimulus tertentu, misalkan peka pada suara atau cahaya. Sedikit saja suara sudah terasa terlalu kuat, atau cahaya dari lampu neon tampak sangat menyilaukan bagi mereka walaupun biasa bagi yang lain. Sedangkan beberapa anak justru tampak kurang peka terhadap stimulus tertentu, misalkan tanpa suara keras, anak tidak akan memusatkan perhatiannya.
                                    
                                    Selain itu, karakteristik bermain mereka juga umumnya tampak berbeda. Anak autistik lebih sering bermain dalam permainan sendiri, sulit bermain dengan fantasi, seperti main dokter-dokteran, dan tidak banyak melakukan interaksi atau kontak dengan anak lain atau orang baru.
                                    Terakhir, perkembangan keterampilan motorik mereka juga cenderung terlambat, yang mengakibatkan kesulitan pada gerakan motor kasar dan halus.
                                    
                                    Walaupun belum ditemukan penyebab Tunggal, gejala autisme saat ini dijelaskan sebagai dampak perkembangan otak yang berbeda. Ditemukan lebih banyak pada anak laki-laki, dan bisa disertai gangguan perkembangan lain, seperti gangguan intelektual atau stress. Autisme sekarang dilihat sebagai salah satu variasi perkembangan otak manusia, atau neurodivergensi, yang menyebabkan mereka unik dalam hal kemampuan komunikasi sosial, perilaku dan pemrosesan informasi dari lingkungan. Kondisi ini akan menetap, oleh karena itu mereka akan membutuhkan dukungan sepanjang kehidupannya.
                                    
                                    Gejala klinis dan karakteristik unik autisme ini memberikan dampak pada individu autistik. Secara sosial, mereka tampak cenderung menyendiri, sulit berinteraksi, terlebih jika menghadapi komunikasi non-verbal, seperti kontak mata dan berbagi perhatian bersama. Akibatnya, kesulitan berteman dan resiko menjadi korban bullying menjadi lebih tinggi. Sedangkan minat terbatasnya yang sering tampak aneh, karena mengulang-ulang perilaku walaupun tidak jelas manfaatnya. Mereka juga menuntut rutin atau jadwal tidak berubah, bahkan akan mengamuk jika ada perubahan tiba-tiba; inilah yang membuat mereka kesulitan menyesuaikan diri dan belajar hal baru. 
                                    
                                    Gejala-gejala ini mulai muncul sejak bayi. Sebagai panduan, jika anak usia 12 tahun masih belum menyahut konsisten ketika dipanggil namanya, atau tidak menunjuk obyek untuk menunjukkan minat di usia 14 bulan, atau tidak mampu bermain pura-pura pada usia 18 bulan, maka ini adalah tanda-tanda yang harus diperhatian orang tua untuk segera mendapatkan bantuan professional klinis. Selain itu, ada beberapa gejala umum yang khas muncul pada individu autistik, dari menghindari kontak mata, sulit memahami perasaan diri dan orang lain, terlambat perkembangan bahasanya, echolalia (atau mengulang kata yang didengarnya tapi tidak ditujukan untuk berkomunikasi), mudah marah atas perubahan kecil, ,inat berlebih-lebih pada suatu obyek/aktivitas, melakukan gerakan berulang-ulang (misalkan flapping, rocking, spinning), dan bereaksi berlebihan pada stimulus suara/bau/rasa/tekanan tertentu.
                                    
                                    Identifikasi autisme dimulai dari skrining. Melalui observasi, wawancara dan asesmen, tenaga terlatih akan memetakan perilaku yang menjadi perhatian, gejala klinis dan karakteristik, hingga pada akhirnya Menyusun strategi belajat dan intervensi atas perilaku tersebut. Keseluruhan data akan dituangkan di dokumen Matriks Perencanaan. Tenaga terlatih bisa berasal dari Guru, Perawat, dan Ahli perilaku. Proses diagnosa juga dapat dilakukan bersamaan atau setelah skrining. Diagnosa dilakukan oleh klinisi dalam rangka menetapkan kriteria diagnosa klinis, menentukan derajat keparahan, dari ringan, sedang atau berat. Level keparahan akan menentukan seberapa banyak bantuan yang akan dibutuhkan sepanjang hidup individu autistik. Dari diagnosa dan skrining, kita bisa mengetahui gejala yang akan menjadi fokus perawatan dan intervensi terstruktur.
                                    
                                    Perlu dipahami, bahwa autisme sebagai spektrum gangguan, artinya Tingkat dan bentuk autisme satu orang akan berbeda dengan orang autistik lainnya. Setiap individu autistik unik. Misalkan, kemampuan komunikasi, interaksi sosial, perilaku, sensoris dan intelektualitas seorang autistik akan berbeda-beda. Artinya, jika Anda mengenal  1 anak dengan autisme, maka Anda mengenal 1 anak dengan autisme. Pemahaman autisme kita atas 1 anak, tidak bisa digeneralisir untuk semua anak autistik.
                                    
                                    Namun sayangnya, sering muncul mitos yang menghambat usaha memahami kasus autisme secara individual. Misalkan menyalahkah ibu yang dingin atau vaksin sebagai penyebab autisme. Kesalahan berpikir lainnya, juga termasuk tentang perawatan, misakan obat atau diet bisa menyembuhkan autisme. Perlu dipahami, hingga saat ini, autisme adalah gangguan sepanjang masa hidup, maka tidak ada obat yang bisa menyembuhkan gejalanya Namun, bukan berarti anak autistik tidak bisa belajar. Dengan dukungan dan strategi yang tepat mereka tetap bisa berkembang.
                                    
                                    Lalu pertanyaan yang muncul adalah “Bagaimana cara terbaik membantu anak autistik belajar?”
                                    Berdasarkan review dari Roberts dan Prior, ditemukan ada 7 prinsip intervensi autisme yang efektif. Pertama, strategi layanan dan dukungan disusun secara individual. Kedua, perubahan lingkungan diarahkan menjadi sistematis dan menggunakan strategi yang umum digunakan. Ketiga, lingkungan juga perlu dibuat terstruktur rapi dan mendukung perubahan. Keempat, pusat pendidikan dan terapi perlu mengembangkan kurikulum yang mempertimbangkan gejala dan karakteristik autisme. Kelima, dukungan penting diberikan pada masa transisi, dari satu level ke level berikutnya. Keenam, perlu dikembangkan suatu pendekatan pengelolaan perilaku untuk merubah perilaku yang kurang adaptif menjadi adaptif. Dan terakhir, seluruh pendekatan harus melibatkan orang tua.
                                    
                                    Inilah akhir sesi pengenalan autisme. Berikutnya anda akan mengenal karakteristik komunikasi autisme secara lebih mendalam. Terima kasih.</p>                            
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Navigasi --}}
        <div class="w-3/4 space-x-10 mt-8 flex justify-end items-center">
            <a href="/page2_2" class="text-base text-blue31 font-semibold flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#6AA4D9" viewBox="0 0 24 24">
                    <path d="M15.707 4.707a1 1 0 0 0-1.414 0L7.293 12l6.293 7.293a1 1 0 1 0 1.414-1.414L9.414 12l6.293-6.121a1 1 0 0 0 0-1.414z" />
                </svg>                
                Sebelumnya
            </a>
            <a href="/page4" class="text-base flex text-blue31 font-semibold">Selanjutnya
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
