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
                <a href="#">Autisme: Gangguan Perkembangan pada Anak</a>
            </div>
        </div>

        <Section class="w-full h-max flex justify-center items-center flex-col mb-20">
            <div class="w-full flex flex-col items-center justify-center">
                <div class="w-full h-[350px] lg:h-[600px] relative">
                    <div class="absolute inset-0 bg-black opacity-40"></div>
                    <img src="{{ asset('images/article11.png') }}" alt="" class="w-full h-full object-cover">
                    <h1 class="absolute bottom-8 lg:bottom-28 left-16 sm:left-20 md:left-28 lg:left-40 text-white text-3xl md:text-4xl lg:text-5xl w-3/4 md:w-1/2 lg:leading-snug font-bold">Autisme: Gangguan Perkembangan pada Anak</h1>
                    <div class="absolute w-1/3 bottom-0 right-0 hidden lg:flex bg-white items-center py-4 px-3 rounded-tl">
                        <div class="w-1/4 flex justify-end pr-2">
                            <img src="{{ asset('images/member-Margaretha.jpg') }}" alt="" class="h-[70px] w-[70px] object-cover object-top border-2 border-blue31 rounded-full">
                        </div>
                        <div class="w-5/6 text-blue31 space-y-0.5 pl-1">
                            <p class="font-bold text-xl">Margaretha <span class="pl-2 text-sm font-normal italic opacity-55">03/03/2022</span> </p>
                            <p class="text-lg leading-6 opacity-55 text-justify">Dosen Psikologi Abnormal, Fakultas Psikologi, Universitas Airlangga, Surabaya</p>
                        </div>
                    </div>
                </div>
                <div class="w-3/4 lg:hidden flex items-center pt-4 sm:space-x-3">
                    <img src="{{ asset('images/member-Margaretha.jpg') }}" alt="" class="hidden sm:flex sm:h-12 md:h-14 sm:w-12 md:w-14 object-cover object-top border-2 border-blue31 rounded-full">
                    <div class="text-blue31">
                        <p class="font-medium text-base md:text-lg">Margaretha <span class="pl-2 text-xs md:text-sm font-normal italic opacity-55">03/03/2022</span> </p>
                        <p class="text-sm md:text-base leading-5 opacity-55 text-justify">Dosen Psikologi Abnormal, Fakultas Psikologi, Universitas Airlangga, Surabaya</p>
                    </div>
                </div>
                <div class="w-3/4 flex items-center justify-center text-lg text-blue31 mt-5 lg:mt-10">
                    <p class=" whitespace-pre-line text-justify">Di Indonesia, pada tahun 2013 diperkirakan terdapat lebih dari 112.000 anak yang menderita autisme dalam usia 5-19 tahun; sedangkan prevalensi penyandang autisme di seluruh dunia menurut data UNESCO pada tahun 2011 adalah 6 di antara 1000 orang mengidap autisme (Republika Online). Namun hingga kini belum banyak yang kita ketahui tentang Autisme, selain gejalanya. Apakah Autisme yang bisa masih terus kita pelajari? Dengan pemahaman tersebut apa yang bisa kita lakukan dalam menghadapi anak dengan Autisme? Berikut adalah uraian sederhana mengenai dunia yang dihadapi oleh anak dengan Autisme.
                    
                        <span class="font-medium text-xl">Apakah autisme?</span>
                        Autisme adalah sekelompok gangguan perkembangan yang berpengaruh hingga sepanjang hidup yang memiliki dasar penyebab gangguan perkembangan di otak (neurodevelopmental). Gangguan yang terjadi pada otak anak menyebabkannya tersebut tidak dapat berfungsi selayaknya otak normal dan hal ini termanifestasi pada perilaku penyandang autisme secara menonjol pada 3 bidang, yaitu: gangguan sosial, komunikasi, dan perilaku dengan minat terbatas dan berulang.
                        1. Gangguan perkembangan interaksi sosial
                        Anak dengan autisme memiliki kesulitan membaca dan memahami pikiran dan perasaan orang lain di sekitarnya; dan sebaliknya mereka juga tidak dapat memahami kemampuan diri sendiri untuk mempengaruhi atau merubah lingkungannya. Sehingga, anak dengan autisme terlihat serti tidak memiliki minat melakukan interaksi sosial. Namun beberapa anak memiliki keinginan sosial tapi tidak mampu menjalin interaksi sosial tanpa dibantu orang lain.
                        2. Gangguan komunikasi
                        Anak dengan autisme memiliki kemampuan komunikasi yang berbeda dimana mereka kesulitan memahami fungsi sosial komunikasi verbal. Mereka memahami bahasa secara literal dan kesulitan memahami konteks bahasa yang digunakan. Oleh karena itu, anak dengan autisme biasanya memiliki kemampuan ekspresif dari pada reseptif. Pada beberapa anak juga ditemukan keterlambatan perkembangan bahasa.
                        3. Gangguan minat terbatas dan perilaku berulang/repetitif
                        Anak dengan autisme memiliki minat yang terbatas serta keterpakuan pada rutinitas, seperti: menyukai membuat barisan mainan. Ada juga perilaku berulang yang ditunjukkan seperti obsesi terhadap suatu obyek, misalkan: sangat tertarik pada jadwal atau benda tertentu. Rutin dan ritual menjadi suatu yang sangat penting dalam aktivitas anak dengan autisme, seperti melakukan hal-hal dalam urutan tertentu, menggunakan baju tertentu, makan makanan tertentu. Rutinitas membuat anak dengan autisme mampu memprediksi dan mengelola dunianya, maka ia akan sangat merasa tertekan jika ritual dan rutinitasnya terganggu.
                        Ketiga gangguan ini sering disebut sebagai Tiga Gangguan Autisme (triad of impairment). Namun selain ketiga hal tersebut, anak dengan Autisme memiliki kekhususan perkembangan yaitu pada perkembangan pola kognitif (cognitive style) dan kemampuan sensorisnya (sensory characteristics).

                        <span class="font-medium text-xl">Karakteristik kognitif</span>
                        Secara khusus kemampuan kognitifnya mengalami keunikan pada 3 area: 1) fungsi eksekutif (executive function) atau kemampuan merencanakan, memulai, mengelola dan mempertahankan perilaku dalam rangka mencapai tujuannya, 2) theory of mind (ToM) atau kemampuan memahami perasaan dan pikiran orang lain, dan 3) pemusatan pemahaman dengan cara mengintegrasikan berbagai informasi detail menjadi suatu keseatuan yang lebih bermakna (central coherence).
                        
                        Dalam hal fungsi eksekutif, anak dengan autisme biasanya sulit memahami tahapan-tahapan perilaku untuk mencapai suatu tujuan, kecenderungan fokus pada detail tertentu membuat mereka tidak bisa menempatkan detail satu tahapan dalam konteks urutan perilaku yang lebih besar. Oleh karena itu anak dengan autisme masih perlu dibimbing untuk mengurai perilaku menjadi langkah-langkah yang saling berhubungan dan dilakukan secara berurutan. Terkait dengan hal ini, anak dengan autisme juga sering dilihat sebagai anak yang kurang fleksibel, tidak bisa menyesuaikan diri dengan perubahan, serta tidak bisa spontan dan refleks.
                        
                        Dalam hal ToM, anak dengan autisme kurang dapat memahami berbagai emosi dan perspektif orang lain. Sehingga mereka tampak seperti kurang peka dan tidak paham berbagai peristiwa interaksi sosial. Seringpula mereka akan memberikan respon yang tidak tepat pada suatu situasi sosioemosional, contohnya: tertawa ketika ada yang marah; hal ini terjadi karena mereka tidak memahami apa dan bagaimana respon emosi yang perlu difokuskan pada suatu situasi sosial dan bagaimana meresponnya. Hambatan sosial memang paling terkait dengan kelemagan ToM. Namun perlu digaris-bawahi bahwa kesulitan sosial dan komunikasi pada anak dengan autisme bukan berarti bahwa mereka tidak menginginkan atau tidak memiliki minat interaksi sosial, namun mereka membutuhkan bantuan untuk dapat memahami situasi sosial dan bagaimana cara meresponnya secara tepat.
                        
                        Begitupula dengan kemampuan pemusatan pemahaman, kesulitan yang biasa dihadapi anak dengan autisme adalah mereka memahami bahasa dan kata secara langsung tanpa memasukkan pemahaman kontekstual sehingga pemahamannya yang keluar menjadi kurang tepat, contohnya: “buang pikiran jauh-jauh” sebenarnya artinya jangan dipikirkan, tapi anak dengan autisme tidak dapat memahami bagaimana membuang pikiran dari kepala seperti membuang sampah keluar rumah.

                        <span class="font-medium text-xl">Karakteristik sensoris</span>
                        Dalam hal kemampuan sensoris, anak dengan autisme juga memiliki keunikan pemrosesan dan interpretasi informasi sensoris. Beberapa anak ditemukan mengalami tingkat sensitivitas yang tinggi (hipersensitif) namun ada pula yang sensitivitasnya rendah (hiposensitif), akibatnya mereka dapat memiliki ambang batas inderawi yang berbeda-beda. Informasi sensoris bukan hanya yang diterima oleh panca inderawi (penglihatan, pendengaran, perasa, penciuman dan kulit), namun keunikan dalam hal keseimbangan, gerak tubuh atau kinestetik juga perlu diperhatikan baik-baik pada anak dengan autisme. Gejala yang dapat muncul terkait dengan sensitivitas sensoris adalah: mudah terganggu dengan rangsang yang biasanya tidak mengganggu seperti suara mobil, suara kipas angin; sulit memproses atau memberikan respon pada rangsang tertentu. Ada anak yang mudah merasa terganggu karena silaunya lampu dan cahaya, namun ada pula yang terlihat kurang peka terhadap rangsang dengar sehingga harus diajak berbicara cukup keras. Penting untuk mengukur karakteristik sensoris anak dengan autisme secara individual agar diketahui profil kemampuan sensorisnya dan diintegrasikan dalam penanganan pembelajarannya. Misalkan, jika anak sensitif pada cahaya, maka ruang belajar anak dibuat tidak terlalu terlampau terang.
                        
                        Dengan memahami berbagai keunikan dan juga 3 gejala gangguannya, maka kita bisa mengetahui bagaimana pengaruhnya pada perkembangan kemampuan anak. Dari pemahaman dasar inilah kita dapat lebih memahami bagaimana ia memahami dunianya, dengan begitulah kita juga akan tahu bagaimana cara membantunya.

                        <span class="font-medium text-xl">Keunikan-keunikan</span>
                        Selain kelemahan-kelemahan tersebut, kita juga perlu memahami bahwa anak dengan autisme juga memiliki kemampuan unik yang unggul. Keunikan utama anak dengan autisme adalah fokus terhadap detail. Kemampuan ini dapat membantunya untuk mengerjakan tugas-tugas yang membutuhkan fokus pada detail, seperti kecermatan dan menghapal. Kemampuan memahami detail anak dengan autisme secara umum dianggap lebih kuat daripada anak yang berkembang secara normal.
                        
                        Karakteristik unik lain dari anak dengan autisme biasanya dapat mengembangkan kekuatan belajar yang lebih fokus pada informasi visual; hal ini membuat mereka lebih mudah fokus pada pemrosesan informasi visual yang akan memudahkan mereka untuk memahami informasi dari lingkungan. Jika kemampuan ini bisa dikembangkan, kemampuan memahami detail visual dapat membuat mereka dapat diandalkan melakukan tugas-tugas yang memerlukan kecermatan dan ketekunan visual, seperti menggambar, mengingat informasi visual dan sebagainya. Anak dengan autisme yang memiliki kemampuan unggul dalam suatu bidang disebut sebagai anak Autisme Savant.
                        
                        Dari informasi ini, maka masyarakat perlu memahami bahwa label anak dengan autisme adalah anak sakit yang tidak berguna di masyarakat adalah salah. Stigma autisme sebagai penyakit mental sudah selayaknya diganti dengan cara pandang yang lebih positif, yaitu anak dengan autisme adalah individu yang akan berkembang melalui tahap dan jalan perkembangan yang berbeda dari individu lain. Sama sepertinya semua manusia, anak dengan autisme juga memiliki keunikan perkembangan.

                        <span class="font-medium text-xl">Autisme dalam perawatan</span>
                        Sering sekali orang memandang Autisme sebagai gangguan kejiwaan atau kegilaan, sehingga anak mengalami label dan stigma sepanjang hidupnya. Hal ini dipengaruhi oleh cara berpikir klinis medis yang menganggap anak dengan Autisme memiliki gangguan penyakit. Dan sebagai akibatnya anak dengan autisme segara diberikan pengobatan; karena dianggap  sebagai satu-satunya cara untuk membuatnya mau melakukan fokus pada interaksi sosial dan komunikasi.
                        
                        Namun sejak beberapa dekade terakhir ini, autisme dipandang sebagai masalah perkembangan yang perlu segera diidentifikasi dan diberikan intervensi serta stimulasi dini. Hal ini juga menjadi suatu kesepakatan internasional, dimana tenaga kesehatan mental seluruh dunia telah di telah membuat kesepakatan untuk memahami Autisme dalam konteks perkembangan anak.
                        
                        Gejala autisme muncul pada awal masa perkembangan anak, dan gejala tersebut dapat bertahan sepanjang hidup anak.  Oleh karena itu pendekatan perawatannya haruslah membantu perkembangan pada kemampuan-kemampuan anak dalam berbagai dimensi perkembangannya (misal: bahasa, sosial, motoris, dan sebagainya). Stimulasi dini menjadi jawaban untuk membantu anak dengan autisme agar anak dengan autisme dapat mengoptimalisas perkembangan serta kemampuan belajarnya. Anak dengan autisme perlu dibantu untuk melakukan kontak sosial, belajar berbahasa dan mengatur perilakunya.
                        
                        Proses membantu anak dengan autisme juga perlu dilakukan secara komprehensif dibantu profesional dari berbagai bidang ilmu, seperti:
                        1) Terapis wicara: untuk membantu merangsang dan meningkatkan kemampuan berbicara dan berbahasa
                        2) Terapis okupasi: untuk membantu merangsang dan meningkatkan kemampuan motoris kasar dan halus, terutama dalam membantu kemampuan belajar (menulis) dan merawat diri (mandi, berpakaian)
                        3) Terapis psikologi dan perilaku: untuk membantu mengembangkan pengelolaan perilaku, mempersiapkan kesiapan belajar dan penyesuaian diri anak di lingkungannya (rumah, sekolah), juga membantu orang tua mempersiapkan anak menghadapi berbagai perubahan
                        4) Pendekatan pendidikan: membantu mempersiapkan sarana dan prasarana, juga strategi belajar yang mendukung anak untuk belajar
                        
                        Setelah memahami betapa berbedanya gejala dan karakteristik Autisme pada masing-masing anak, maka penting digaris-bawahi bahwa bantuan pada anak dengan autisme harus diberikan secara individual. Masing-masing anak perlu dipahami kelebihan dan kesulitannya, barulah akan didesain bantuan pada masing-masing anak secara individual. Tidak ada satu program yang bisa dibuat untuk banyak anak dengan autisme. Berbagai disiplin ilmu dapat bekerjasama dalam memberikan layanan dan membentuk suatu program perawatan dan pendidikan anak dengan autisme. Oleh karena itu, berbagai pihak termasuk orang tua, tenaga kesehatan, sekolah serta masyarakat perlu bersama-sama bekerjasama untuk mendukung usaha perawatan dan mendukung perkembangan anak dengan autisme.

                        <span class="font-medium text-xl">Referensi</span>
                        112.000 Anak Indonesia Diperkirakan Menyandang Autisme, Republika Online. Diakses pada 2 Juli 2013.
                        Hands-out Workshop on Autism August 2013. Autism Association of Western Australia.



                    </p>
                </div>
            </div>
        </Section>

        @include('includes.components.main.footer')      
    </body>
</html>
