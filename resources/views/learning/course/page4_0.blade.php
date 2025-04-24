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
                                        <iframe 
                                            src="https://drive.google.com/file/d/1TVbj8JTAhP29_A4-iuuDi9Gldfs2Qyz2/preview" 
                                            title="E-Learning Video Player" 
                                            frameborder="0" 
                                            allow="autoplay; encrypted-media;" 
                                            allowfullscreen 
                                            class="w-full h-full">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full py-8 border-y-2 border-bluee3 space-y-4 text-lg">
                                <div class="w-full flex flex-col text-justify">
                                    <p class="">Hi saya Mida, Pada materi sebelumnya kita semua telah belajar apa itu autisme dengan bu Margaretha kita semua telah mengetahui bahwasanya anak dengan 
                                        autisme memiliki karakteristik yang cukup komplek dan untuk mempermudah kita semua untuk memahami lebih detil bagaimana karakteristik autisme itu sendiri maka 
                                        kita memerlukan sebuah dokumen yang kita sebut matriks perencanaan.
                                        <br><br>oke, sekarang kita akan masuk pada materi matriks perencanaan, <span class="font-medium">definisi</span> matriks perencanaan merupakan sebuah dokumen yang dapat digunakan oleh orang tua, 
                                        guru dan professional untuk memfoto keadaan anak dengan autism. apa saja yang ada di dalam matriks perencanaan?  yaitu karakteristik anak dimulai dari karakteristik komunikasi yang terbagi menjadi empat yaitu ketrampilan pendahuluan, 
                                        komunikasi ekspresif dan reseptif, dan pragmatisme, kemudian interaksi sosial, tahapan dan tipe bermain. selanjutnya adalah karakteristik perilaku berulang dan minat terbatas, proses informasi, proses sensori serta motorik. 
                                        Garis besarnya adalah matriks ini merupakan suatu alat untuk mengukur anak secara utuh, ibarat memilih baju kita akan membuat ukuran yang sangat pas sehingga nyaman untuk dipakai.
                                        <br><br>Terkait dengan matriks ini, siapa saja yang bisa mengisi matriks perencanaan: nah, untuk pengisian matriks ini dilakukan oleh tim yang terdiri dari orang tua, guru dan tenaga professional seperti psikolog klinis, dokter anak dan juga psikiater.
                                        Kenapa harus dilakukan oleh tim karena kita semua akan mendapatkan gambaran yang sangat lengkap, selain itu juga dapat membantu kita untuk bisa menghindari penilaian secara subjektif.
                                        <br><br>Kapan dilaksanakan: Kapan kita bisa mengisi matriks perencanaan, yaitu di waktu 6-8 minggu pertama di awal semester. Namun, pada proses pelaksanaan intervensi jika anak telah menunjukkan perkembangan maka matriks perencanaan ini juga akan mengikuti, artinya matriks ini berubah mengikuti perkembangan anak. 
                                        <br><br>Kenapa perlu matriks perencanaan: hal ini dilakukan untuk meningkatkan pemahaman tentang diri anak secara menyeluruh, membantu mengidentifikasi tujuan yang menjadi prioritas, menjadi bahan pendukung yang dapat disampaikan kepada sekolah jenjang berikutnya sehingga strategi pengajaran tidak terputus. 
                                        <br><br>Bagaimana cara mengisinya, untuk melengkapai matriks ini secara berurutan adalah dengan melengkapi karakteristik secara menyeluruh di tiap-tiap karakteristik anaknya, apa yang sudah anak mampu lakukan dan juga hal apa yang masih perlu dikembangkan, kemudian setelah karakteritik adalah mengisi dampak yang muncul, 
                                        perlu dipertimbangkan dampak yang muncul adalah bagaimana ke anak itu sendiri, bagaimana dampak ke orang lain, ke lingkungan sekolah, bagaimana dampak ke masyarakat hingga masa depan anak. Setelah dampak terpenuhi maka baru mengisi strategi, nah dalam pengisian strategi ini akan jauh lebih terukur 
                                        jika kita semua telah mengetahui bagaimana dampak yang muncul sehingga strategi yang diberikan sesuai dengan yang dibutuhkan oleh anak. hal yang sangat perlu diingat adalah jangan mengisi karakteristik kemudian langsung strategi. Nah, untuk mengisinya kita menggunakan tanda (+,0 dan juga -), dimana ‘+’ ini artinya anak mampu melakukan, 
                                        sedangkan ‘0’ anak masih dalam bantuan dan ‘-’ anak masih belum mampu untuk melakukan.
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
