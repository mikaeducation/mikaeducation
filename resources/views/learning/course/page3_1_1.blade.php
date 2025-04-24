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
                                            src="/preview" 
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
                                    <p><p class="p-2 bg-bluee3 mb-2"><span class="font-medium">Karakteristik Ekspresif</span> - Komunikasii Ekspresif Anak dengan Autimse</p>                        
                                        Kita lanjutkan pembahasan tentang karakteristik komunikasi ya. Sebelumnya sudah kita bahas karakteristik pra – komunikasi atau keterampilan pendahuluan yang menjadi tahapan dasar  dalam berkomunikasi.
                                        Selanjutnya, mari kita bahas tentang karakteristik bahasa ekspresif. Tahapan berikutnya adalah : 
                                        <br><br>Komunikasi eskpresif adalah kemampuan untuk mengekspresikan keinginan, ide dan kebutuhan kepada orang lain.  Bagaimana anak autis bisa menyampaikan informasi kepada orang lain. 
                                        Karakteristik utama komunikasi ekspresif adalah  menggunakan suara, kata dalam bentuk kata tunggal, kata pendek dan kalimat. Bagaimana anak bisa melakukan ketrampilan percakapan dengan aktif, 
                                        berinteraksi dengan berbagai macam topik, pikiran dan perasaan. Yang termasuk dalam komunikasi ekspresif ini adalah: membuat suara, menggunakan kata tunggal, menggunakan kombinasi dua hingga tiga kata, 
                                        berbicara dalam kalimat, echolalia (mengulang kata atau kalimat yang diucapkan seseorang), mengajukan pertanyaan, membuat komentar dan melakukan ketrampilan percakapan.  
                                        <br><br>Pada kemampuan ini anak dengan autism kesulitan untuk meminta sehingga muncul perilaku menangis, menuju atau ke arah yang diinginkan, menggandeng orang lain untuk mencapai yang diinginkan, 
                                        kesulitan dalam memahami kosa kata atau penggunaan kata secara umum dan juga muncul ecolalia-pada konsep ecolalia ini kita dapat menilai bahwa ecolalia ini bisa menjadi fungsional 
                                        yang artinya anak akan bisa dianggap bisa meniru hingga menyampaikan apa yang diinginkan secara verbal, bukan hanya sebagai perilaku yang harus dihilangkan. Kesulitan juga ketika melakukan ketrampilan dalam percakapan, 
                                        bagaimana muncul inisiatif, mempertahankan hingga melakukan penutupan dalam suatu percakapan.
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

    <script>
    </script>

