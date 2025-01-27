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
    <body class="font-futura h-max w-full relative">

    @include('includes.components.elearning.header')   
        
        <section class="w-full h-2/3 mt-8 md:mt-12 flex flex-col justify-center items-center">
            <div class="w-3/4 h-full flex flex-col text-blue31 text-justify">
                <h1 class="text-3xl font-bold mb-2">HALAMAN SEDANG DALAM PROSES PENGEMBANGAN.</h1>
                <P class="text-lg font-medium whitespace-pre-line">Maaf, halaman ini sementara tidak dapat diakses. Kami sedang meningkatkan layanan untuk pengalaman pengguna yang lebih baik.
                    Mohon cek kembali di kemudian hari. Terima kasih atas pengertiannya.</P>
            </div>
        </section>

    @include('includes.components.elearning.footer')

    </body>

    {{-- <script src="https://unpkg.com/taos@1.0.5/dist/taos.js"></script>
    <!-- Hanya fungsi untuk menginisialisasi TAOS setelah berhasil dimuat -->
    <script>
        function initializeTAOS() {
            if (typeof TAOS !== 'undefined') {
                TAOS.init();
                console.log("TAOS initialized");
            } else {
                console.error("TAOS is not defined.");
            }
        }
    </script> --}}
    <script>
        document.getElementById('menu-btn').addEventListener('click', function() {
            var menu = document.getElementById('menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });
    </script>

</html>
