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
                <a href="#">Perkembangan Kemampuan Komunikasi pada Anak dengan Autisme</a>
            </div>
        </div>

        <Section class="w-full h-max flex justify-center items-center flex-col mb-20">
            <div class="w-full flex flex-col items-center justify-center">
                <div class="w-full h-[350px] lg:h-[600px] relative">
                    <div class="absolute inset-0 bg-black opacity-40"></div>
                    <img src="{{ asset('images/article3.png') }}" alt="" class="w-full h-full object-cover">
                    <h1 class="absolute bottom-8 lg:bottom-28 left-16 sm:left-20 md:left-28 lg:left-40 text-white text-3xl md:text-4xl lg:text-5xl w-3/4 md:w-1/2 lg:leading-snug font-bold">Perkembangan Kemampuan Komunikasi pada Anak dengan Autisme</h1>
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
                    <div id="textContainer" class="relative overflow-hidden" style="max-height: 1080px; position: relative;">
                        <p id="textContent" class=" whitespace-pre-line text-justify">Apakah anda pernah merasa marah atau sedih karena merasa tidak dipahami oleh lingkungan anda? Walaupun anda telah berusaha menjelaskan maksud anda dengan cara anda, namun bahkan orang tua anda tidak memahami maksud anda. Belum lagi ditambah dengan perasaan anda sendiri tidak tahu harus menyampaikan dan dengan cara apa. Frustasi, adalah perasaan anak dengan autisme ketika tidak dapat menyampaikan maksudnya pada orang-orang di sekitarnya. Perilaku problematik mungkin yang akan kita lihat di permukaan, namun di dalamnya, ada anak yang butuh bantuan untuk dapat menjelaskan dirinya dalam suatu proses komunikasi.

                            Dengan kesulitan komunikasi yang dimilikinya, anak dengan autisme dalam perilaku sehari-hari tampak seperti anak nakal yang sulit diatur. Hal ini bukan terjadi karena mereka sengaja tidak patuh, namun lebih karena tidak paham apa perilaku yang diharapkan oleh orang lain atas diri mereka dan bagaimana merespon permintaan sosial dari orang-orang di sekitarnya. Mereka juga lebih memahami bahasa secara konkret, dan sulit memahami makna tersirat. Oleh karena itu, mereka perlu dibantu untuk mampu memahami proses komunikasi dengan lingkungannya. Berikut adalah beberapa hal yang dapat dilakukan untuk mendukung perkembangan kemampuan komunikasi anak dengan autisme.
                            
                            <span class="font-medium text-xl">Bantuan peraga visual</span>
                            Karena anak dengan autisme memiliki kesulitan dalam memahami makna tersirat, maka semua proses komunikasi dengan anak autisme diupayakan sekonkret mungkin. Penggunaan bantuan visual (visual supports) juga akan membantu proses komunikasi ekspresif dan reseptif.
                            Bantuan visual adalah alat-alat yang kita gunakan untuk menunjukkan apa yang kita harapkan pada anak bukan mengatakannya. Contohnya: ketika mengatakan makanan, daripada hanya mengatakannya maka anak dengan autisme diberikan suatu gambar makanan, sehingga ia bisa segera memahami bahwa sedang membicarakan makanan (lihat gambar 1). Bantuan visual dapat berupa gambar, foto, obyek benda, daftar, tulisan (kalimat instruksi) atau apapun yang membuat kita dapat menampilkan informasi secara visual.
                            
                            Perlu dipastikan bahwa visual atau gambar yang digunakan menunjukkan bentuk yang dilihat sehari-hari nyata oleh si anak, jadi bukan gambar asing. Jika menggunakan gambar asing maka anak akan kesulitan memahami dan menghubungkan makna gambar dan ide yang ingin disampaikan. Misalkan, jika anak memiliki piyama hijau, maka buat gambar tentang piyama hijau bukan warna lain, atau anak akan kesulitan memahami piyama warna lain karena mereka tidak pernah melihatnya. Baru setelah anak mengembangkan kemampuan generalisasi piyama dalam berbagai warna (tahapan berikutnya) kita bisa menggunakan gambar piyama dengan berbagai warna.
                            <img src="{{ asset('images/article3content.jpg') }}" alt="" class="w-full"> <span class="font-medium text-xl">Gambar 1.</span>Bantuan visual untuk mengenalkan berbagai benda
                            
                            Ada banyak teknik penggunaan bantuan visual dalam mengembangkan kemampuan komunikasi anak dengan autisme, beberapa diantaranya adalah: Picture Exchange Communication System(PECS), Pragmatic Organization Dynamic Display (PODD), Aided Language Stimulation (ALS), dan Augmentative and Alternative Communication (ACC).
                            
                            <span class="font-medium text-xl">Membuat jadwal</span>
                            Jika dunia sulit dipahami dan terus berubah, maka kita akan terus membutuhkan bantuan orang lain untuk menjelaskan apa yang harus kita lakukan. Kita bisa menjadi cemas karena terus mengantisipasi perubahan, takut jika ada sesuatu berjalan salah dan menimbulkan hal yang menyakitkan atau tidak enak. Anak dapat menolak melakukan berbagai hal karena tidak dapat memprediksi apa konsekuensinya atau kelanjutannya.
                            
                            Maka perlu dipelajari suatu pola atau keteraturan yang terjadi di dalam pengalaman sehari-harinya. Kita dapat membantu antisipasi pemahaman anak dengan membuat jadwal. Dengan jadwal, anak dengan autisme menjadi mampu memprediksi apa yang akan terjadi karena telah mempelajari apa yang akan terjadi. Hal ini juga dapat memotivasi anak untuk berperilaku dan mengelola dirinya secara lebih yakin.
                            
                            Namun perubahan dapat terjadi sewaktu-waktu, dan manusia harus berjuang menghadapinya. Hal inilah yang bisa menjadi menjadi persoalan bagi anak dengan autisme. Yang sering menjadi persoalan adalah ketika orang dewasa di sekitarnya memberikan tuntutan agar anak dengan autisme bisa bersikap fleksibel terhadap perubahan. Kita tidak akan meminta orang buta untuk mampu melihat; maka perlu dipahami bahwa meminta anak dengan autisme untuk bersikap fleksibel juga adalah suatu hal yang sangat menyulitkan bagi mereka. Jika anak belum mengantisipasi perubahan maka ia akan menunjukkan perilaku sulit, seperti: menolak, menangis atau marah. Sebenarnya banyak perilaku sulit anak dengan autisme bisa dihindari dengan memberikan jadwal atau perubahan jadwal sebelum terjadinya peristiwa; dengan demikan mereka tetap mampu melakukan antisipasi. Contohnya: jika akan ada tamu datang ke rumah dan menginap; maka anak perlu dibuat paham akan ada perubahan jadwal di rumah karena akan menjamu tamu dengan cara tertentu; serta perlu dijelaskan pula bahwa anak diharapkan untuk menyapa tamu dengan sederhana.  Dengan jadwal dan penjelasan perubahan jadwal maka anak menjadi mampu menyiapkan dirinya di menghadapi perubahan, sehingga tidak perlu menampilkan perilaku sulit.
                            
                            <span class="font-medium text-xl">Menjaga bantuan dan dukungan</span>
                            Mengenalkan proses komunikasi pada anak dengan autisme membutuhkan usaha dan waktu. Seperti belajar bahasa baru, perlu banyak mengenal kata-kata baru, berlatih membuat kalimat dan berlatih berulang-ulang hingga mahir; seperti itulah juga proses membantu anak dengan autisme untuk berkomunikasi.
                            
                            Sebenarnya kita, manusia pada umumnya juga menggunakan bantuan visual untuk memudahkan pemahaman, seperti: kalender, diari, daftar, resep masakan dengan foto, dan sebagainya. Sebagian dari kita, terutama yang memiliki corak berpikir visual, akan sangat kesulitan memahami informasi jika tidak dibantu dengan bantuan visual. Bantuan visual membuat kita mudah memahami informasi sehingga pada akhirnya membuat kita merasa yakin dan memiliki kontrol atas perilaku kita. Begitupula dengan anak, jika mereka mampu memahami informasi maka mereka juga lebih mampu mengelola perilaku mereka dan lebih yakin dalam melakukan komunikasi sosial.
                            
                            Kesulitannya bagi orang-orang di sekeliling anak adalah kurang sabar atau kurang konsisten menggunakan bantuan visual. Jika anak dilatih menggunakan bantuan visual di tempat terapi maka sebaiknya di rumah dan di sekolah anak juga perlu dibantu komunikasinya dengan visual. Jika tidak maka anak akan mengalami kesulitan memahami proses komunikasi, karena di satu tempat dia dibantu berkomunikasi dengan bantuan visual namun di tempat lain dia diharapkan mampu paham hanya dengan instruksi kalimat saja. Kesulitan ini akan membuat anak terlihat berulah, tidak patuh atau “nakal”. Sebenarnya banyak perilaku “nakal”anak dengan autisme bisa dihadapi dengan mendukung belajar komunikasinya secara kontinyu. Anak menjadi mampu mengkomunikasikan dirinya di berbagai tempat dan berbagai orang, sehingga tidak perlu menampilkan perilaku bermasalah.
                            
                            <span class="font-medium text-xl">Simpulan</span>
                            Terkait dengan keterbatasan komunikasi anak dengan autisme maka ada beberapa alat dan aktivitas yang dapat digunakan untuk melatih kemampuan komunikasi dengan mereka:
                            Menggunakan alat bantu visual untuk berkomunikasi dengan mereka, agar konsep menjadi lebih konkret.
                            
                            Menyusun rutinitas aktivitas sosial sehingga mereka dapat melakukan antisipasi, hal ini penting agar mereka tahu bagaimana apa yang diharapkan dari mereka serta bagaimana cara mencapainya
                            
                            Menyusun jadwal kegiatan, hal ini untuk membantu mereka merencanakan dan mengetahui cara mencapai tujuannya secara berurutan
                            Keseluruhan aktivitas pembangunan kemampuan komunikasi anak dengan autisme juga perlu dikombinasikan dengan usaha perkembangan perilakunya. Penting dipahami proses yang akan dilakukan untuk membantu komunikasi perlu dilakukan secara intensif dan dalam jangka waktu yang cukup hingga bisa dilihat perubahannya.
                            
                            <span class="font-medium text-xl">Referensi</span>
                            Hands-out Workshop on Autism August 2013. Autism Association of Western Australia.                        
                        </p>
                    </div>
                </div>
                <div class="flex justify-center w-full pt-5 ">
                    <button id="toggleButton" class="absolute z-50 px-8 py-2 bg-blue31 hover:bg-opacity-10 hover:text-blue31 text-white rounded" onclick="toggleContent()">Baca Keseluruhan Artikel...</button>
                </div>
            </div>
        </Section>

        @include('includes.components.main.footer')      
    </body>
</html>

<script>
    function toggleContent() {
        var textContainer = document.getElementById("textContainer");
        var button = document.getElementById("toggleButton");
        
        textContainer.style.maxHeight = "none";
        button.style.display = "none";
    }
</script>