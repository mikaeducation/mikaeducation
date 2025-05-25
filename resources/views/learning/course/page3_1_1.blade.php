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
                                        ['src' => 'https://s3-id-jkt-1.kilatstorage.id/belajar-komunikasi-autistik/modul-3b.mp4'])
                                    </div>
                                </div>
                            </div>
                            <div class="w-full py-8 border-y-2 border-bluee3 space-y-4 text-lg">
                                <div class="w-full flex flex-col text-justify">
                                    <p><p class="p-2 bg-bluee3 mb-2"><span class="font-medium">Karakteristik Ekspresif</span> - Komunikasii Ekspresif Anak dengan Autimse</p>                        
                                        <br>Salam, mari kita lanjutkan pembahasan kita tentang karakteristik komunikasi.
                                        <br>Sebelumnya sudah kita bahas karakteristik pra-komunikasi atau keterampilan pendahuluan yang menjadi tahapan dasar dalam berkomunikasi.
                                        <br><br>Selanjutnya, mari kita bahas tentang karakteristik komunikasi ekspresif.
                                        <br>Komunikasi ekspresif adalah kemampuan untuk mengekspresikan keinginan, ide dan kebutuhan kepada orang lain, serta bagaimana anak autistik bisa menyampaikan informasi kepada orang lain.
                                        <br><br>Karakteristik utama komunikasi ekspresif adalah menggunakan suara, menggunakan kata dalam bentuk kata tunggal, kata pendek maupun kalimat.
                                        Bagaimana anak bisa melakukan keterampilan percakapan dengan aktif, berinteraksi dengan berbagai macam topik, pikiran dan juga perasaan.
                                        <br><br>Anak autistik bisa mengalami kesulitan komunikasi ekspresif yang mengakibatkan orang lain sulit memahami mereka. Akibatnya, mereka bisa frustasi dan menangis atau mengkomunikasikan dengan cara gestural seperti menuju arah benda yang diinginkan, bisa juga dengan menggandeng orang lain untuk mencapai benda yang diinginkan. Dampaknya, mereka kesulitan dalam memahami kosa kata atau penggunaan kata secara umum.
                                        <br><br>Echolalia atau mengulang kata yang dia dengar tapi tidak ditujukan untuk berkomunikasi. Jika terjadi echolalia, sebenarnya bisa menjadi indikasi adanya keinginan berkomunikasi sosial, di mana anak menirukan apa yang didengar. Sehingga echolalia harus dirubah menjadi perilaku komunikasi fungsional, bukan serta merta sebagai perilaku yang harus dihilangkan.
                                        <br><br>Anak autistik juga kesulitan ketika melakukan keterampilan dalam percakapan, bagaimana muncul inisiatif, mempertahankan hingga melakukan penutupan dalam pembicaraan.
                                        <br><br>Sekian, kita akan belajar tentang Komunikasi Reseptif selanjutnya. Selamat belajar.
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

