<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-Learning | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="show-asessment-dialog" content="true">
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
                                        ['src' => 'https://drive.google.com/file/d/1nf88UoDzofToD6c0W6bFI2FXmik_oHRm/view?usp=sharing'])
                                    </div>
                                </div>
                            </div>
                            <div class="w-full py-8 border-y-2 border-bluee3 space-y-4 text-lg">
                                <div class="w-full md:flex lg:flex text-justify">
                                    <p>Salam, Saya Margaretha, tim MIKA education. Kali ini saya akan menjelaskan apa autisme dan bagaimana dampak gejalanya bisa mempengaruhi perilaku dan kemampuan belajar anak autistik. Kita juga akan mempelajari proses skrining dan diagnosa autisme, mitos, hingga ke praktik baik intervensi autisme.
                                        <br><br>Kita awali dengan memahami gejala autisme. Secara klinis ada 2 gejala utama: hambatan melakukan komunikasi sosial yang sering menyulitkannya berinteraksi timbal-balik di lingkungan dan munculnya perilaku minat terbatas dan berulang yang sering membuat anak autistik tampak aneh.
                                        <br><br>Namun, selain gejala klinis, ada juga beberapa karakteristik autisme yang unik, misalkan: keunikan pemrosesan informasi, seperti: satu, persoalan theory of mind yang berdampak pada kesulitan memahami pikiran dan perasaan orang lain; dua, persoalan terkait dengan lemahnya central coherence, yang berdampak pada kesulitan memahami makna secara umum karena terlalu fokus pada detail; dan tiga, persoalan fungsi executive yang berdampak pada kesulitan mengelola perilakunya untuk berperilaku dan mencapai tujuan pembelajaran. Ketiga kemampuan pemrosesan informasi ini diperlukan sebagai dasar belajar dari lingkungan, maka hambatan pada ketiganya akan membuat anak autistik membutuhkan dukungan belajar yang disesuaikan dengan kondisi theory of mind, central coherence, dan fungsi eksekutif.
                                        <br><br>Pemrosesan sensoris  juga berbeda. Beberapa anak autistik menunjukkan kepekaan berlebih pada stimulus tertentu, misalkan peka pada suara atau cahaya. Sedikit saja suara sudah terasa terlalu kuat, atau cahaya dari lampu neon tampak sangat menyilaukan bagi mereka walaupun biasa bagi yang lain. Sedangkan beberapa anak justru tampak kurang peka terhadap stimulus tertentu, misalkan tanpa suara keras, anak tidak akan memusatkan perhatiannya.
                                        <br><br>Selain itu, karakteristik bermain mereka juga umumnya tampak berbeda. Anak autistik lebih sering bermain dalam permainan sendiri, sulit bermain dengan fantasi, seperti main dokter-dokteran, dan tidak banyak melakukan interaksi atau kontak dengan anak lain atau orang baru.
                                        Terakhir, perkembangan keterampilan motorik mereka juga cenderung terlambat, yang mengakibatkan kesulitan pada gerakan motor kasar dan halus.
                                        <br><br>Walaupun belum ditemukan penyebab Tunggal, gejala autisme saat ini dijelaskan sebagai dampak perkembangan otak yang berbeda. Ditemukan lebih banyak pada anak laki-laki, dan bisa disertai gangguan perkembangan lain, seperti gangguan intelektual atau stress. Autisme sekarang dilihat sebagai salah satu variasi perkembangan otak manusia, atau neurodivergensi, yang menyebabkan mereka unik dalam hal kemampuan komunikasi sosial, perilaku dan pemrosesan informasi dari lingkungan. Kondisi ini akan menetap, oleh karena itu mereka akan membutuhkan dukungan sepanjang kehidupannya.
                                        <br><br>Gejala klinis dan karakteristik unik autisme ini memberikan dampak pada individu autistik. Secara sosial, mereka tampak cenderung menyendiri, sulit berinteraksi, terlebih jika menghadapi komunikasi non-verbal, seperti kontak mata dan berbagi perhatian bersama. Akibatnya, kesulitan berteman dan resiko menjadi korban bullying menjadi lebih tinggi. Sedangkan minat terbatasnya yang sering tampak aneh, karena mengulang-ulang perilaku walaupun tidak jelas manfaatnya. Mereka juga menuntut rutin atau jadwal tidak berubah, bahkan akan mengamuk jika ada perubahan tiba-tiba; inilah yang membuat mereka kesulitan menyesuaikan diri dan belajar hal baru. 
                                        <br><br>Gejala-gejala ini mulai muncul sejak bayi. Sebagai panduan, jika anak usia 12 tahun masih belum menyahut konsisten ketika dipanggil namanya, atau tidak menunjuk obyek untuk menunjukkan minat di usia 14 bulan, atau tidak mampu bermain pura-pura pada usia 18 bulan, maka ini adalah tanda-tanda yang harus diperhatian orang tua untuk segera mendapatkan bantuan professional klinis. Selain itu, ada beberapa gejala umum yang khas muncul pada individu autistik, dari menghindari kontak mata, sulit memahami perasaan diri dan orang lain, terlambat perkembangan bahasanya, echolalia (atau mengulang kata yang didengarnya tapi tidak ditujukan untuk berkomunikasi), mudah marah atas perubahan kecil, ,inat berlebih-lebih pada suatu obyek/aktivitas, melakukan gerakan berulang-ulang (misalkan flapping, rocking, spinning), dan bereaksi berlebihan pada stimulus suara/bau/rasa/tekanan tertentu.
                                        <br><br>Identifikasi autisme dimulai dari skrining. Melalui observasi, wawancara dan asesmen, tenaga terlatih akan memetakan perilaku yang menjadi perhatian, gejala klinis dan karakteristik, hingga pada akhirnya Menyusun strategi belajat dan intervensi atas perilaku tersebut. Keseluruhan data akan dituangkan di dokumen Matriks Perencanaan. Tenaga terlatih bisa berasal dari Guru, Perawat, dan Ahli perilaku. Proses diagnosa juga dapat dilakukan bersamaan atau setelah skrining. Diagnosa dilakukan oleh klinisi dalam rangka menetapkan kriteria diagnosa klinis, menentukan derajat keparahan, dari ringan, sedang atau berat. Level keparahan akan menentukan seberapa banyak bantuan yang akan dibutuhkan sepanjang hidup individu autistik. Dari diagnosa dan skrining, kita bisa mengetahui gejala yang akan menjadi fokus perawatan dan intervensi terstruktur.
                                        <br><br>Perlu dipahami, bahwa autisme sebagai spektrum gangguan, artinya Tingkat dan bentuk autisme satu orang akan berbeda dengan orang autistik lainnya. Setiap individu autistik unik. Misalkan, kemampuan komunikasi, interaksi sosial, perilaku, sensoris dan intelektualitas seorang autistik akan berbeda-beda. Artinya, jika Anda mengenal  1 anak dengan autisme, maka Anda mengenal 1 anak dengan autisme. Pemahaman autisme kita atas 1 anak, tidak bisa digeneralisir untuk semua anak autistik.
                                        <br><br>Namun sayangnya, sering muncul mitos yang menghambat usaha memahami kasus autisme secara individual. Misalkan menyalahkah ibu yang dingin atau vaksin sebagai penyebab autisme. Kesalahan berpikir lainnya, juga termasuk tentang perawatan, misakan obat atau diet bisa menyembuhkan autisme. Perlu dipahami, hingga saat ini, autisme adalah gangguan sepanjang masa hidup, maka tidak ada obat yang bisa menyembuhkan gejalanya Namun, bukan berarti anak autistik tidak bisa belajar. Dengan dukungan dan strategi yang tepat mereka tetap bisa berkembang.
                                        <br><br>Lalu pertanyaan yang muncul adalah “Bagaimana cara terbaik membantu anak autistik belajar?”
                                        Berdasarkan review dari Roberts dan Prior, ditemukan ada 7 prinsip intervensi autisme yang efektif. Pertama, strategi layanan dan dukungan disusun secara individual. Kedua, perubahan lingkungan diarahkan menjadi sistematis dan menggunakan strategi yang umum digunakan. Ketiga, lingkungan juga perlu dibuat terstruktur rapi dan mendukung perubahan. Keempat, pusat pendidikan dan terapi perlu mengembangkan kurikulum yang mempertimbangkan gejala dan karakteristik autisme. Kelima, dukungan penting diberikan pada masa transisi, dari satu level ke level berikutnya. Keenam, perlu dikembangkan suatu pendekatan pengelolaan perilaku untuk merubah perilaku yang kurang adaptif menjadi adaptif. Dan terakhir, seluruh pendekatan harus melibatkan orang tua.
                                        <br><br>Inilah akhir sesi pengenalan autisme. Berikutnya anda akan mengenal karakteristik komunikasi autisme secara lebih mendalam. Terima kasih.</p>                            
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

    @include('includes.components.elearning.course.dialog.modal-asessment')

</html>


