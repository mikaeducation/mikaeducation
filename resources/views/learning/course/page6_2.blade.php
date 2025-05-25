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
                                        ['src' => 'https://s3-id-jkt-1.kilatstorage.id/belajar-komunikasi-autistik/modul-7-intrepretasi-dan-evaluasi.mp4'])
                                    </div>
                                </div>
                            </div>
                            <div class="w-full py-8 border-y-2 border-bluee3 space-y-4 text-lg">
                                <div class="w-full flex flex-col text-justify">
                                    <p class="">Salam saya Mida, pada tema kali ini saya akan memberikan penjelasan terkait dengan interpretasi dan evaluasi yaitu bagaimana proses skor per sesi, skor total dan perkembangan belajar anak serta dampaknya pada strategi pembelajaran.
                                        Nah, pada tema kali ini saya akan memberikan penjelasan terkait dengan interpretasi dan evaluasi yaitu bagaimana proses skor per sesi, skor total dan perkembangan belajar anak serta dampaknya pada strategi pembelajaran.
                                        <br><br>Berikut kita membahas skor per sesi:
                                        <br>Skor per sesi adalah jumlah kumulatif skor benar atau skor atas respon benar dalam satu sesi belajar / terapi menggunakan MIKA. 
                                        <br>Skor per sesi akan dijelaskan satu persatu dalam tahapan komunikasi. <br><br>
                                        
                                        <p class="w-full p-2 mb-2 bg-bluee3"><span class="font-medium">Level 1</span> - Penguasaan Perbendaharaan Kata</p>
                                        Di dalam mika ada 4 level komunikasi. Level I yaitu, penguasaan perbendaharaan kata, di dalam tahap ini anak diminta untuk menguasai 100 kata secara fungsional.
                                        Kata – kata yang dipelajari terdiri dari kata-kata inti atau core word yaitu kata – kata yang sering digunakan dalam aktivitas sehari-hari seperti tolong, lagi, mau, dan stop. 
                                        Perbendaharaan kata juga mencakup kata-kata konsep yang digunakan sehari-hari misalkan aktivitas makan-minum (nasi, piring) atau anggota keluarga (bapak, ibu, adik).                   
                                        <br><br>Pada Level I, skoring kemampuan komunikasi reseptif, adalah
                                        <ul class="list-disc pl-5">
                                            <li>0 adalah salah</li>
                                            <li>1 adalah benar reseptif non verbal atau verbal namun belum mandiri atau muncul dengan bantuan</li>
                                            <li>2 jika benar reseptif secara non verbal atau verbal tanpa bantuan</li>
                                        </ul>
                                        <br>Sedangkan pada pengukuran bahasa ekspresif, kita menggunakan skor 
                                        <ul class="list-disc pl-5">
                                            <li>0 adalah salah</li>
                                            <li>1 adalah benar ekspresif non verbal atau verbal dengan bantuan</li>
                                            <li>Dan 2 adalah benar ekspresif non verbal atau verbal tanpa bantuan</li>
                                        </ul><br>

                                        <p class="w-full p-2 mb-2 bg-bluee3"><span class="font-medium">Level 2</span> - Penyusunan Kalimat Sederhana</p>
                                        Di dalam komunikasi level dua, kita akan membangun keterampilan komunikasi menyusun kalimat sederhana yang terdiri dari subjek dan predikat atau predikat dan objek.
                                        Contohnya anak mampu menyusun atau memahami kalimat sederhana seperti, saya makan, makan nasi, atau  minum air                  
                                        <br><br>Pada Level I, skoring kemampuan komunikasi reseptif, adalah
                                        <ul class="list-disc pl-5">
                                            <li>0 adalah salah</li>
                                            <li>1 adalah benar reseptif non verbal atau verbal namun belum mandiri atau muncul dengan bantuan</li>
                                            <li>Dan 2 jika benar reseptif secara non verbal atau verbal tanpa bantuan</li>
                                        </ul>
                                        <br>Sedangkan pada pengukuran bahasa ekspresif, kita menggunakan skor 
                                        <ul class="list-disc pl-5">
                                            <li>0 adalah salah</li>
                                            <li>1 adalah benar ekspresif non verbal atau verbal dengan bantuan</li>
                                            <li>Dan 2 adalah benar ekspresif non verbal atau verbal tanpa bantuan</li>
                                        </ul><br>

                                        <p class="w-full p-2 mb-2 bg-bluee3"><span class="font-medium">Level 3</span> - Penyusunan dan Pemahaman Kalimat Kompleks</p>
                                        Disini kita akan fokus membangun keterampilan menyusun dan memahami kalimat komplek yang terdiri dari subjek predikat objek dan juga keterangan.
                                        Contohnya anak mampu memahami kalimat “saya mau main bola merah” atau anak mampu merespon instruksi kompleks seperti “ambil kue lapis di dapur”
                                        <br><br>Pada Level I, skoring kemampuan komunikasi reseptif, adalah
                                        <ul class="list-disc pl-5">
                                            <li>0 adalah salah</li>
                                            <li>1 adalah benar reseptif non verbal atau verbal namun belum mandiri atau muncul dengan bantuan</li>
                                            <li>Dan 2 jika benar reseptif secara non verbal atau verbal tanpa bantuan</li>
                                        </ul>
                                        <br>Sedangkan pada pengukuran bahasa ekspresif, kita menggunakan skor 
                                        <ul class="list-disc pl-5">
                                            <li>0 adalah salah</li>
                                            <li>1 adalah benar ekspresif non verbal atau verbal dengan bantuan</li>
                                            <li>Dan 2 adalah benar ekspresif non verbal atau verbal tanpa bantuan</li>
                                        </ul><br>
                                        <p class="w-full p-2 mb-2 bg-bluee3"><span class="font-medium">Level 4</span> - Pembuatan Dialog atau Percakapan</p>
                                        Level IV kita akan fokus membangun keterampilan membuat percakapan/dialog
                                        Di dalam kemampuan berdialog anak perlu mampu memahami dan merespon pertanyaan lawan bicara, dan juga mampu Menyusun pertanyaan yang tepat untuk merespon pembicaraan lawan bicara sebelumnya. 
                                        Contohnya: anak mampu merespon ketika ditanya Namanya, lalu bertanya balik siapa nama lawan bicaranya untuk meneruskan percakapan. 
                                        <br><br>Pada Level I, skoring kemampuan komunikasi reseptif, adalah
                                        Pada Pengukuran keterampilan berdialog kita menggunakan skor plus dan minus. 
                                        <br>Plus ketika anak mampu merespon atau menjawab pertanyaan, mampu membuat pilihan ketika ditanya tentang tema percakapan oleh terapis, dan mampu menyusun pertanyaan lanjutan untuk meneruskan dialog. Dan ketika hal ini dilakukan secara mandiri anak mendapatkan dua plus, namun jika anak membutuhkan dukungan atau promt anak mendapatkan satu plus.
                                        <br>Minus akan diberikan ketika anak tidak mampu merespon sesuai dengan pertanyaan atau instruksi dan tidak mampu menyusun pertanyaan lanjutan untuk berdialog. 
                                        <br><br>Setelah melakukan skoring per sesi kita akan merekam seluruh skor per sesi sebagai skor kumulatif. 
                                        Disarankan untuk melakukan 10 kali upaya atau trial latihan per sesi. Anak disebut mampu berkomunikasi secara fungsional dan mandiri ketika mampu 80 % melakukan respon benar atau anak melakukan hingga 20 % respon benar dengan bantuan dan toleransi kesalahan hingga 5%. Total skor tetap 100%.
                                        <br><br>Detail tentang metode skoring per level diuraikan di booklet interpretasi dan evaluasi, dapat diunduh pada rangkuman materi. 
                                        <br>Demikian belajar tentang interpretasi dan skoring MIKA. <br> Terima kasih selamat belajar.
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

        toggleLeftButton.addEventListener('click', () => {
            leftContent.classList.add('hidden');
            rightContent.classList.remove('w-3/4');
            rightContent.classList.add('w-full');
            toggleRightButton.style.display = 'block';
        });

        toggleRightButton.addEventListener('click', () => {
            leftContent.classList.remove('hidden');
            rightContent.classList.remove('w-full');
            rightContent.classList.add('w-3/4');
            toggleRightButton.style.display = 'none';
        });



        function showContent(id) {
        // Menghapus border aktif dari semua tombol
        var buttons = document.querySelectorAll('nav button');
        buttons.forEach(function(button) {
            button.classList.remove('border-b-2', 'border-blue31');
        });

        // Menambahkan border aktif pada tombol yang dipilih
        document.getElementById(id + 'Button').classList.add('border-b-2', 'border-blue31');

        // Menampilkan hanya section yang dipilih
        document.getElementById('section1').style.display = 'none';
        document.getElementById('section2').style.display = 'none';

        document.getElementById(id).style.display = 'block';
    }

    // Saat halaman dimuat, tampilkan section1 sebagai default TANPA menghapus fungsi navigasi
    document.addEventListener("DOMContentLoaded", function() {
        showContent('section1');
    });

    </script>

</html>
