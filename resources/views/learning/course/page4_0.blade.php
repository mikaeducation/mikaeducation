<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-Learning | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
                            <div class="w-full h-[300px] md:h-[400px] lg:h-[500px] xl:h-[575px] flex bg-black rounded">
                                <div class="w-full h-full flex justify-center items-center">
                                    <div class="aspect-w-16 aspect-h-9 w-full h-full flex justify-center items-center">
                                        @include('includes.content.elearning.course.video-player', 
                                        ['src' => 'https://youtu.be/IB9lfeEflU8'])
                                    </div>
                                </div>
                            </div>
                            <div class="w-full py-8 border-y-2 border-bluee3 space-y-4 text-lg">
                                <div class="w-full flex flex-col text-justify">
                                    <p class="">Hi saya Mida, Pada materi sebelumnya kita semua telah belajar apa itu autisme dengan Margaretha. Kita semua telah mengetahui bahwa anak autistik memiliki karakteristik yang cukup kompleks dan untuk mempermudah memahami lebih detail karakteristik autisme, maka kita memerlukan sebuah dokumen yang kita sebut matriks perencanaan atau planning matrix.
                                        <br><br>Oke sekarang kita akan masuk pada materi matriks perencanaan. Definisi matriks perencanaan adalah sebuah dokumen yang dapat digunakan oleh orang tua, guru dan profesional untuk memfoto keadaan anak autistik.
                                        <br><br>Apa saja yang ada di dalam matriks perencanaan ada 3 hal yang pertama karakteristik, dampak, dan juga strategi. Karakteristik anak akan menguraikan karakteristik autistiknya.
                                        <ul class=" list-decimal pl-5">
                                            <li>Karakteristik Autistik:
                                                <ul class=" list-disc pl-5">
                                                    <li>Keterampilan Pendahuluan</li>
                                                    <li>Komunikasi Ekspresif</li>
                                                    <li>Komunikasi Reseptif</li>
                                                    <li>Pragmatisme</li>
                                                </ul>
                                            </li>
                                            <li>Interaksi Sosial di dalamnya akan meliputi keterampilan sosial dan bermain. </li>
                                            <li>Karakteristik Perilaku Berulang dan Minat Terbatas</li>
                                            <li>Proses Informasi</li>
                                            <li>Proses Sensori</li>
                                            <li>Keterampilan Motorik</li>
                                        </ul>
                                        <br>Matriks perencanaan merupakan alat untuk mengukur anak secara utuh dengan lengkap untuk menyusun intervensi individual. Ibarat memilih baju, kita akan membuat ukuran yang sangat pas sehingga nyaman untuk dipakai.
                                        <br><br>Siapa saja yang bisa mengisi matriks perencanaan? Nah, untuk pengisian matrik ini dilakukan oleh tim yang terdiri dari orang tua, guru, dan klinisi profesional seperti seorang psikolog, klinis, dokter anak dan juga psikiater.
                                        <br><br>Kenapa harus dilakukan oleh tim? Karena kita akan mendapatkan gambaran yang sangat lengkap dari banyak informa.
                                        <br>Selain itu juga dapat membantu. Untuk bisa menghindari penilaian secara subjektif.
                                        <br><br>Kapan dilaksanakan?
                                        Kita bisa mengisi matriks perencanaan di waktu 6 sampai 8 minggu pertama di awal pertemuan. Namun pada proses pelaksanaan intervensi, jika anak telah menunjukkan perkembangan, maka matriks perencanaan ini juga akan berubah. Artinya, matriks perencanaan ini adalah dokumen organik yang berubah mengikuti perkembangan anak.
                                        <br><br>Kenapa perlu matriks perencanaan?
                                        Hal ini dilakukan untuk meningkatkan pemahaman tentang anak secara menyeluruh. Membantu mengidentifikasi tujuan yang menjadi prioritas sebagai bahan pendukung yang dapat disampaikan kepada sekolah jenjang berikutnya sehingga strategi pengajaran tidak terputus.
                                        <br><br>Kemudian bagaimana cara mengisinya?
                                        Secara berurutan dimulai dengan melengkapi karakteristik secara menyeluruh di tiap perkembangan anak. Lalu uraikan apa yang sudah anak mampu lakukan dan hal apa yang masih perlu dikembangkan. Kemudian mengisi dampak yang muncul, perlu dipertimbangkan dampak yang muncul di berbagai konteks. Misalnya bagaimana dampak ke anak itu sendiri, dampak ke orang lain, ke lingkungan sekolah, dampak ke masyarakat, hingga masa depan anak.
                                        <br><br>Setelah dampak lalu mengisi strategi.
                                        Nah dalam pengisian strategi ini akan jauh lebih terukur jika kita semua telah mengetahui bagaimana dampak yang muncul, sehingga strategi yang diberikan sesuai dengan kebutuhan anak. Hal yang perlu diingat, jangan melompat mengisi dari karakteristik langsung ke strategi.
                                        <br><br>Untuk mengisinya kita menggunakan tanda plus, nol, dan juga minus.
                                        Di mana plus ini artinya anak mampu melakukan, sedangkan nol anak masih dalam bantuan, dan minus anak masih belum mampu untuk melakukan.
                                        <br><br>Demikian materi tentang matriks perencanaan.
                                        <br>Selamat belajar…….
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
