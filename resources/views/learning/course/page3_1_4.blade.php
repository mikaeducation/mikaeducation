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
                                        ['src' => 'https://s3-id-jkt-1.kilatstorage.id/belajar-komunikasi-autistik/modul-3e.mp4'])
                                    </div>
                                </div>
                            </div>
                            <div class="w-full py-8 border-y-2 border-bluee3 space-y-4 text-lg">
                                <div class="w-full flex flex-col text-justify">
                                    <p><p class="p-2 bg-bluee3 mb-2"><span class="font-medium">Karakteristik dan Strategi Komunikasi Autisme</span> - Komunikasi  dan Strategi Komunikasi Anak dengan Autimse</p>                   
                                        Salam, kita akan melanjutkan pembahasan berikutnya, setelah mempelajari karakteristik komunikasi pragmatis pada anak autistik. Dari beberapa karakteristik komunikasi pada anak autistik yang sudah dijabarkan, mereka membutuhkan strategi yang tepat untuk meningkatkan keterampilan komunikasi mereka yang penting sebagai modal untuk berinteraksi dengan orang lain. 
                                        <br><br>Seperti yang kita ketahui, komunikasi mempunyai peranan yang penting sebagai modal untuk berinteraksi. Mengembangkan keterampilan tersebut dibutuhkan pendekatan yang terstruktur, konsisten dan sesuai dengan kebutuhan masing – masing anak. Salah satu strategi intervensi yang telah terbukti efektif adalah pendekatan berbasis visual. Anak autistik adalah pembelajar visual, sehingga alat bantu visual menjadi lebih efektif daripada sekedar instruksi secara verbal. Strategi ini melibatkan penggunaan gambar, simbol atau teks untuk membantu anak autistik memahami dan mengekspresikan dirinya. 
                                        <br><br>Ada dua kategori untuk alat bantu visual, yaitu low technology dan high technology. 
                                        <br>Pertama, Alat bantu visual yang low technology adalah alat bantu visual sederhana yang tidak memerlukan perangkat elektronik dalam penggunaannya. Salah satu contohnya adalah:
                                        <ul class="list-disc pl-5">
                                            <li>Kartu Visual <br>Adalah alat bantu komunikasi yang menggunakan gambar, simbol atau teks untuk mewakili objek, tindakan, aktifitas atau konsep tertentu. Kartu ini digunakan untuk membantu anak autistik memahami informasi, rutinitas, atau konsep – konsep yang abstrak. </li>
                                            <li>PECS (Picture Exchange Communication System)<br>Adalah sistem komunikasi berbasis gambar yang dirancang khusus untuk anak – anak yang mengalami kesulitan berkomunikasi. Cara kerjanya adalah dengan cara pertukaran gambar untuk berkomunikasi, menyatakan keinginan dan berkomentar.</li>
                                            <li>Papan Komunikasi (Communication Board)<br>Adalah papan yang memuat berbagai gambar atau simbol yang memungkinkan anak menunjukkan kebutuhan atau keinginannya. Papan ini bisa disesuaikan berdasarkan konteks kegiatan masing – masing anak.</li>
                                            <li>Kartu Emosi <br>Adalah kartu bergambar yang berisi gambar wajah dengan ekspresi yang berbeda yang bisa membantu anak mengenali emosi dan mengkomunikasikan perasaan mereka.</li>
                                        </ul>
                                        <br>Berikutnya, adalah alat bantu visual yang high technology.
                                        <br>Adalah alat bantu visual dengan teknologi tinggi yang menggunakan perangkat elektronik untuk membantu anak dengan autisme berkomunikasi secara lebih efisien. Ini melibatkan teknologi canggih seperti perangkat AAC (Augmentative and Alternative Communication). AAC adalah sistem komunikasi yang dirancang untuk membantu anak autistik berkomunikasi, seperti aplikasi atau perangkat berbicara yang memberikan suara pada simbol yang dipilih oleh anak. 
                                        <br><br>Contoh AAC yang high technology adalah Proloquo2Go, TouchChat, atau GoTalk. Saat anak memilih gambar atau simbol di layar, perangkat akan mengeluarkan suara yang mengucapkan kata-kata atau frasa terkait.
                                        <br>Perangkat – perangkat tersebut, yang saat ini tersedia masih menggunakan bahasa Inggris, yang tidak semua anak autistik memahaminya dengan baik. Selain itu, mereka akan banyak mendengar bahasa Indonesia dalam percakapan sehari – hari. 
                                        <br><br>MIKA (Media Komunikasi Visual Anak) hadir menjadi salah satu perangkat AAC yang menggunakan bahasa Indonesia, yang bisa diakses secara umum dan disebarluaskan untuk membantu para terapis, orang tua dan anak autistik mengembangkan keterampilan berbahasa dan berkomunikasi lebih efektif.
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
