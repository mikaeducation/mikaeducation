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
                <a href="#">Perilaku Komunikasi Anak dengan Autisme</a>
            </div>
        </div>

        <Section class="w-full h-max flex justify-center items-center flex-col mb-20">
            <div class="w-full flex flex-col items-center justify-center">
                <div class="w-full h-[350px] lg:h-[600px] relative">
                    <div class="absolute inset-0 bg-black opacity-40"></div>
                    <img src="{{ asset('images/article2.png') }}" alt="" class="w-full h-full object-cover">
                    <h1 class="absolute bottom-8 lg:bottom-28 left-16 sm:left-20 md:left-28 lg:left-40 text-white text-3xl md:text-4xl lg:text-5xl w-3/4 md:w-1/2 lg:leading-snug font-bold">Perilaku Komunikasi Anak dengan Autisme</h1>
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
                    <p class=" whitespace-pre-line text-justify">Salah satu karakteristik perkembangan anak dengan autisme adalah hambatan perkembangan komunikasi. Dan pada kenyataannya, keluhan yang sering dimunculkan ketika orang tua membawa anak dengan autisme ke terapis adalah hambatan komunikasi. Hambatan komunikasi membuat anak menjadi sulit belajar dan perilakunya pun terlihat tidak dapat dikendalikan. Apakah perilaku komunikasi dan bagaimana kemampuan komunikasi anak dengan Autisme? Berikut adalah uraian sederhana mengenai kemampuan komunikasi anak dengan Autisme.

                        <span class="font-medium text-xl">Apakah berbicara dan berbahasa?</span>
                        Sebelum kita berbicara, tentang problem komunikasi, penting kita pahami berbagai komponen komunikasi, yaitu: bicara, bahasa dan komunikasi.
                        
                        1. Bicara (speech): satuan suara yang diproduksi dan dikombinasikan untuk membentuk kata.
                        
                        2. Bahasa (language): penggunaan kata-kata dalam aturan tertentu untuk menyampaikan ide (expressive) ataupun memahami ide (receptive)
                        
                        3. Komunikasi (communication): usaha menyampaikan informasi dari diri kepada orang lain. 
                        Dalam melakukan komunikasi penting untuk memahami “kapan”, “bagaimana”, dan “apakah tujuan” proses penyampaian informasi.
                        
                        Jadi komunikasi adalah proses menyampaikan informasi dari seseorang kepada yang lain dengan menggunakan media verbal maupun non-verbal; dan proses komunikasi bisa terjadi baik satu arah ataupun dua arah. Ada beberapa cara berkomunikasi, seperti: menulis, kontak mata, berbicara, gerak tubuh, mimik wajah, menunjuk benda. Seorang ayah marah dengan kata-kata dan lirikan mata melotot, sudah berkomunikasi menyampaikan pesan marah dan cukup dapat dipahami oleh anak yang mendengar dan melihatnya. Atau seorang anak dapat menyampaikan protesnya dengan menangis meraung-raung walaupun tanpa kata-kata. Berkomunikasi bukan sekedar berbicara atau berkata-kata, namun adalah keseluruhan proses penyampaian dan penerimaan informasi.
                        
                        <span class="font-medium text-xl">Perkembangan komunikasi anak</span>
                        Dalam perkembangan komunikasi, usaha awal memahami informasi dari lingkungan dimulai dengan informasi sensoris (rasa, sentuh, bau, lihat, dengar). Dalam tahapan awal komunikasi anak belajar mengembangkan keahlian awal komunikasi (precursor skills), yaitu: fokus dan atensi, pemusatan perhatian bersama (joint attention), menunjuk dan penggunaan gerak tubuh (gestural).
                        
                        1) Atensi: kemampuan fokus pada detail tertentu dan mengabaikan bagian lainnya, contohnya: anak akan fokus pada wajah ibunya di antara wajah-wajah orang lain dalam suatu kerumunan.
                        2) Pemusatan perhatian bersama: fokus bersama-sama dengan orang lain atas suatu obyek atau aktivitas. Hal ini dilakukan dengan mengamati gerak tatapan mata orang lain yang mengikuti suatu obyek. Contohnya: ketika anak bermain kucing peliharaan bersama orang tuanya, mata keduanya akan bergerak bersama mengikuti gerak kucing tersebut. Dari kemampuan pemusatan perhatian bersama inilah anak dapat mengembangkan kemampuan belajar mengamati orang lain.
                        3) Gerak tubuh: gerak tubuh banyak digunakan manusia untuk mengkomunikasikan pikiran dan perasaannya. Contohnya: anak akan menunjuk mainan yang diinginkannya yang berasa di atas lemari dan tidak dapat dijangkaunya, hal ini dilakukan agar orang tua mau mengambilkannya.
                        
                        Ketiga hal ini menjadi bagian dasar penyusun kemampuan komunikasi, karena dari ketiga proses ini anak mulai memahami informasi dari dunianya, serta juga memahami bahwa perspektif orang lain dapat berbeda dari apa yang mereka miliki. Selanjutnya, anak akan mengembangkan kemampuan komunikasi yang lebih kompleks seperti: meminta bantuan, negosiasi, memberikan komentar, serta komunikasi sosial.
                        
                        Pada anak yang mengalami perkembangan pada umumnya (typically developing children), biasanya terjadi beberapa tahapan perkembangan komunikasi:
                        
                        1. Usia 0-6 bulan: melihat dan memperhatikan sumber suara; melihat wajah yang mengajak bicara, memahami jika namanya dipanggil; bertukarpandang singkat dengan padangan kontak sosialnya
                        
                        2. Usia 6-12 bulan: meminta perhatian; muncul pemusatan perhatian bersama dengan orang lain lawan kontak sosialnya atau disebut sebagai joint attention; menaruh minat pada suaragak dan vokalisasi bunyi; mengenali suara familiar; bisa meminta, menolak dan memberi komentar; menggunakan komunikasi gestural sederhana seperti menunjuk, protes, memberikan obyek
                        
                        3. Usia 12-24 bulan: berkomunikasi untuk menyapa, menyatakan pemahamannya mengenai keberadaan orang lain di sekitarnya; menggunakan intonasi, memahami penggunaan dan fungsi kata; mampu berkomunikasi untuk meminta informasi, bertanya dan memberi perintah; melakukan diadik dalam pembicaraan
                        
                        4. Usia 24-36 bulan: mampu berkomunikasi tentang obyek yang tidak ada saat ini, menjawab pertanyaan; mengekspresikan emosi dan menyatakan empati; memproduksi naratif yang berisi label dan penjelasan; memberikan informasi baru dalam topik pembicaraan; penggunaan bahasa lebih meningkat dalam bermain
                        
                        5. Usia 36-48 bulan: mengembangkan perilaku meminta secara fleksibel, misalkan: bisakah, maukah….; mampu menjaga atau mempertahankan topik pembicaraan; mengembangkan kemampuan saling dalam bertukar bicara, atau bergantian berbicara dan mendengarkan dalam percakapan; kemampuan berpikir, prediksi, dan imaginasi mulai berkembang dalam pembicaraan.
                        
                        6. Usia 48-60 bulan: mampu membuat percakapan sederhana; mengembangkan permainan kooperatif; mampu menghentikan atau menutup percakapan; dapat mengajak orang lain ikut dalam kelompok; membuat naratif yang berisi dengan tema utama pembicaraan, penekanan fokus, serta resolusi terhadap suatu konflik dalam cerita.
                        
                        Tahapan perkembangan komunikasi ini adalah gambaran perkembangan secara umum, bukanlah suatu panduan saklek yang diharapkan terjadi sama pada semua anak. Perkembangan manusia adalah dinamis dan non linear, bisa saja terjadi berbeda-beda pada satu dengan yang lain.
                        
                        Pada anak dengan autisme, kekhasan perkembangan yang biasanya muncul adalah terlambatnya atau munculnya persoalan dalam perkembangan komunikasi. Hal ini terjadi karena lemahnya proses belajar imitasi atau meniru dari orang lain. Bahasa pada umumnya dipelajari anak dari meniru orang dewasa di sekitarnya. Karena sulit atau tidak bisa meniru maka perkembangan bahasa dan bicaranya menjadi kurang optimal.
                        
                        Anak dengan autisme juga akan menunjukkan kesulitan untuk mengembangkan percakapan interaktif. Hal ini terjadi karena gejala autisme membuat mereka kesulitan memahami dan memprediksi pikiran dan perasaan orang lain. Mereka menganggap suatu usaha diadik (dyadic)atau proses berganti mendengarkan dan menjelaskan adalah sangat sulit dilakukan. Mereka tidak tahu mana yang harus fokus didengarkan dan bagaimana cara merespon balik pembicaraan rekan bicaranya.
                        
                        <span class="font-medium text-xl">Komponen komunikasi</span>
                        Selain tahapan perkembangan, penting juga kita memahami apa saja yang membentuk suatu kemampuan manusia. Ada empat komponen pembentuk komunikasi dasar, yaitu: kemampuan  komunikasi pendahuluan, kemampuan ekspresi, kemampuan reseptif, dan kemampuan pragmatis.
                        1. kemampuan komunikasi pendahuluan (precursor skills), adalah dasar-dasar komunikasi non verbal yang biasanya digunakan untuk menyampaikan informasi sebelum munculnya kemampuan berbicara. Banyak digunakan dan berkembang pada saat bayi, seperti: menunjuk, pemusatan perhatian bersama, kontak mata, imitasi.
                        2. kemampuan ekspresi (expressive communication), adalah usaha dan perilaku menyampaikan informasi pada orang lain, misalkan: memproduksi suara, menggunakan kata dan kalimat, meminta, bertanya, echolalia (mengulang kata-kata yang telah didengar).
                        3. kemampuan reseptif (receptive communication), adalah usaha dan perilaku menerima dan memahami informasi pada orang lain, seperti: menyahut ketika nama dipanggil, mengikuti perintah sederhana, menjawab pertanyaan, mampu memecahkan masalah.
                        4. kemampuan pragmatis, adalah usaha menggunakan keseluruh kemampuan komunikasi pendahuluan, ekspresif dan reseptif dalam suatu konteks interaksi sosial, misalkan: memberikan salam ketika bertemu orang lain, menggunakan gesture ketika berbicara, memahami jarak personal yang perlu dibuat agar orang lain nyaman berinteraksi sosial dengan kita.
                        
                        Pada anak dengan autisme, mereka akan mengalami kesulitan untuk mengembangkan komponen-komponen komunikasi ini. Autisme pada masing-masing anak juga dapat berbeda tingkat atau derajat keberatan gejalanya (level of severity). Jika gejala berat maka masing-masing komponen komunikasi akan lebih sulit berkembang. Anak dengan autisme berat akan mengalami kesulitan mengembangkan bahkan pada kemampuan komunikasi pendahuluan, contohnya: anak dengan autisme sulit membuat kontak mata dengan orang untuk mengajak kontak sosial. Sedangkan anak dengan gejala ringan, kemungkinan besar hal yang sulit dilakukannya adalah spontanitas penggunaan komunikasi reseptif dan komunikasi ekspresif, serta tantangan penggunaan komunikasi pragmatis agar mereka lebih mampu menyampaikan informasi pada orang-orang di sekitarnya.
                        
                        <span class="font-medium text-xl">Karakteristik kemampuan komunikasi anak dengan autisme</span>
                        Anak dengan autisme memiliki beberapa corak perkembangan komunikasi, yaitu:
                        1. Kesulitan melakukan pemusatan perhatian bersama, mereka bisa beraktivitas bersama namun tidak ada sapa pandang dan melakukan kontak mata bersama dengan rekannya
                        2. Kesulitan memulai komunikasi
                        3. Keterbatasan fungsi komunikasi, berkisar antara meminta hal yang ia inginkan saja. Sering orang lain hanya digunakan sebagai alat untuk mencapai kebutuhannya saja
                        4. Kesulitan meminta atau menyatakan kebutuhan untuk dibantu
                        5. Muncul echolalia, atau mengulang kata yang telah didengarnya,
                        6. Kesulitan menggeneralisir makna dan fungsi kata yang telah dipelajarinya
                        7. Sulit memahami instruksi atau konsep yang abstrak dan kompleks
                        8. Kesulitan memfokuskan perhatian dalam percakapan
                        9. Kesulitan untuk mengetahui bagaimana memaknai dan merespon mimik atau simbol sosial dari orang lain yang menjadi lawan bicara
                        10. Kesulitan menggunakan gerak tubuh dalam proses komunikasi, terlihat kaku
                        11. Terbatasnya cara berkomunikasi dapat menimbulkan frustasi ketika tidak mampu menyampaikan idenya.
                        
                        Secara umum, perkembangan komunikasi ekspresif mereka juga lebih cepat daripada komunikasi reseptif; akibatnya meeka lebih suka menyampaikan ide mereka daripada mendengarkan ide orang lain. Dalam perilaku sehari-hari, anak dengan autisme tampak seperti anak yang sulit diatur, hal ini bukan terjadi karena mereka sengaja tidak patuh, namun lebih karena tidak paham apa perilaku yang diharapkan oleh orang lain dari mereka.
                        
                        Memahami konsep abstrak dan bahasa metaforik adalah kesulitan besar bagi anak dengan autisme. Mereka akan memahami pembicaraan orang lain secara konkret, dan sulit memahami makna tersirat atau makna kontekstual suatu kalimat, misalkan: mereka sulit memahami kalimat sarkasme. Keunikan ini merupakan bagian perkembangan anak dengan autisme yang dapat berlanjut hingga dewasa, bahkan pada anak yang memiliki intelegensi tinggi.
                        
                        Karakteristik lain yang sering dijumpai pada anak dengan autisme adalah mereka membutuhkan waktu lebih lama untuk memproses informasi dalam komunikasi reseptif. Mereka butuh beberapa waktu untuk memahami apa yang baru saja didengarnya. Oleh karena itu, kita perlu memberikan beberapa waktu sebelum berharap anak dengan autisme memberikan respon terhadap apa yang baru saja didengarnya; dan tidak terus-menerus memberikan informasi atau instruksi karena akan membuat mereka semakin bingung memproses informasi yang diterimanya. Misalkan, ketika memberikan instruksi dalam satu kalimat berikan waktu 5-10 detik untuk anak memahami informasi dan memberikan respon, jika tidak ada respon baru ulangi lagi kalimat instruksinya.
                        Simpulan
                        
                        Anak dengan autisme memiliki gangguan melakukan proses komunikasi. Hambatan komunikasi juga membuat anak dengan autisme mengalami kesulitan dalam belajar dari mengamati orang lain di sekitarnya. Sebaiknya juga bahasa yang digunakan berkomunikasi dengan mereka dibuat sederhana dan konkret, untuk meminimalisir kesalahan interpretasi makna tersirat. Mereka juga lebih mudah memahami apa yang mereka lihat daripada apa yang mereka dengar. Oleh karena itu, memberikan informasi visual akan membantu mereka jauh lebih baik untuk memahami proses komunikasi.
                        
                        <span class="font-medium text-xl">Referensi</span>
                        Hands-out Workshop on Autism August 2013. Autism Association of Western Australia.
                    </p>
                </div>
            </div>
        </Section>

        @include('includes.components.main.footer')      
    </body>
</html>
