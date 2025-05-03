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
                            <div class="w-full h-[300px] md:h-[400px] lg:h-[500px] xl:h-[550px] flex bg-black rounded">
                                <div class="w-full h-full flex justify-center items-center">
                                    <div class="aspect-w-16 aspect-h-9 w-full h-full flex justify-center items-center">
                                        @include('includes.content.elearning.course.video-player', 
                                        ['src' => ''])
                                    </div>
                                </div>
                            </div>
                            <div class="w-full py-8 border-y-2 border-bluee3 space-y-4 text-lg">
                                <div class="w-full flex flex-col text-justify">
                                    <p class="">Hallo Saya Retno, Sebelumnya kita sudah belajar tentang komunikasi pada anak autsime. Sekarang, saya akan akan memaparkan tentang pendekatan TEACCH dalam belajar komunikasi bagi anak dengan autism.  
                                        dan bagaimana Teacch membantu belajar anak berkomunikasi dan  pentingnya kemandirian serta  prompting dalam komunikasi anak autisme dengan menggunakan alat bantu visual.
                                        <br><br>TEACCH adalah sebuah pendekatan pengajaran yang terstruktur dan berfokus pada pengembangan keterampilan serta kekuatan anak dengan autisme.  Selain itu, saya akan menjelaskan bagaimana penggunaan alat bantu visual dapat mendorong kemandirian dan 
                                        teknik prompting yang efektif dalam komunikasi anak-anak dengan ASD. Pembelajaran Terstruktur. TEACCH didesain khusus untuk anak-anak dengan hambatan neurologis seperti autisme, yang sering kali mengalami kesulitan dalam komunikasi reseptif dan ekspresif, 
                                        perhatian, memori, serta kemampuan mengorganisasi. Sistem ini juga berperan dalam mengorganisasi kelas atau lingkungan belajar yang ramah terhadap anak-anak dengan autisme.
                                        <br><br>TEACCH adalah singkatan dari Treatment and Education of Autistic Children and others with Communication Handicap. Ini adalah sebuah metode pengajaran yang terstruktur, yang menekankan pada pemanfaatan kekuatan anak dengan autisme sebagai pembelajar visual. Pendekatan ini terdiri dari empat komponen utama, yaitu: Struktur lingkungan fisik, Struktur Visual, Jadwal Kegiatan, dan Sistem Kerja. 
                                        <ul class="list-disc pl-5">
                                            <li>Pertama, Struktur lingkungan fisik, akan membantu  memahami dan mengantisipasi kegiatan sehari-hari secara lebih jelas. Prinsip utamanya adalah menciptakan lingkungan yang terorganisir secara visual untuk membantu individu memahami tugas dan rutinitas dengan lebih baik. Struktur lingkungan fisik penting untuk membantu mengajarkan komunikasi karena dengan adanya struktur fisik akan membantu mengurangi kecemasan, mendukung pemahaman visual, mendorong kemandirian dan akan meningkatkan fokus pada kegiatan yang spesifik.</li>
                                            <li>Kedua, Struktur Visual, menjadi dasar penting dalam mengembangkan komunikasi pada anak dengan autisme. Penggunaan struktur visual membantu anak ASD dalam memanfaatkan kekuatan mereka sebagai pembelajar visual. Salah satu alat bantu komunikasi yang menggunakan teknologi tinggi dan berbahasa Indonesia adalah MIKA, yang dapat menjadi media alternatif bagi anak-anak ASD untuk meningkatkan keterampilan komunikasi mereka.</li>
                                            <li>Ketiga, Kegiatan yang terstruktur secara visual termasuk jadwal visual,  instruksi visual, pengorganisasian visual, dan kejelasan visual. Jadwal visual adalah agenda kegiatan yang diinformasikan secara visual, bisa berupa gambar atau tulisan. Instruksi visual dapat berupa tulisan atau gambar yang memberikan informasi tentang tahapan-tahapan penyelesaian tugas, sedangkan pengorganisasian visual melibatkan pengaturan ruang dan barang-barang yang terorganisasi secara visual. Kejelasan visual membantu melibatkan siswa dengan informasi yang relevan untuk meningkatkan pemahaman dan kemampuan mereka.</li>
                                            <li>Keempat, Sistem Kerja, akan membantu anak autis memahami apa yang harus dilakukan, bagaimana melakukannya dan kapan tugas selesai serta apa yang harus dilakukan jika tugas sudah selesai. Sistem kerja menyediakan instruksi dan petunjuk visual yang bisa membantu mengarahkan pengerjaan tugas secara non verbal, sebagai bagian dari anak autis berkomunikasi.</li>
                                        </ul> 
                                        <br><br>Kemandirian dalam Komunikasi adalah tujuan penting dalam pengajaran anak dengan autisme. Dengan menggunakan alat bantu visual, seperti gambar, simbol, atau perangkat AAC (Augmentative and Alternative Communication). Anak dapat diajarkan untuk melakukan komunikasi secara mandiri. Alat bantu visual ini memberikan dukungan yang permanen dan jelas, memungkinkan anak untuk memproses informasi secara mandiri dan berkomunikasi tanpa selalu bergantung pada orang lain. Ini dapat membantu meningkatkan rasa percaya diri anak dan mendorong keterlibatan aktif dalam interaksi sosial sehari-hari.
                                        <br><br>Prompt atau dukungan biasa digunakan untuk mencapai respon yang diinginkan, bisa dalam bentuk. Di   digunakan untuk membantu anak autis dalam mencapai respons yang diinginkan. Dalam konteks komunikasi, prompting dapat dilakukan dengan menggunakan alat bantu visual sebagai panduan. Misalnya, ketika anak diminta untuk mengungkapkan keinginannya, orang dewasa dapat memberikan prompt berupa gambar atau simbol yang relevan. Prompting dapat dilakukan dengan berbagai tingkat bantuan, dari prompt fisik (misalnya, mengarahkan tangan anak) hingga prompt verbal (misalnya, memberikan kata kunci). Seiring waktu, prompt ini perlu dikurangi secara bertahap untuk mendorong kemandirian anak.
                                        <br><br>Mengapa Harus Visual? Individu dengan autisme memerlukan waktu lebih lama dalam memproses informasi, dan informasi visual bersifat permanen sehingga memungkinkan mereka untuk memprosesnya sesuai dengan kebutuhan waktu mereka. Informasi visual juga membantu mereka memahami "apa yang harus dilakukan," mengurangi stres dan kecemasan, serta membantu dalam mengorganisasi dan meningkatkan kemandirian mereka.
                                        <br><br>Demikian pemaparan saya tentang pendekatan TEACCH dalam belajar komunikasi bagi anak autis. Semoga   informasi ini dapat memberikan wawasan yang berguna dalam mendukung pendidikan dan komunikasi anak-anak dengan autis.
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
