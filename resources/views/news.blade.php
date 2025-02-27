<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Berita | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('public/assets/css/style.css')
    </head>
    <body class="font-futura h-max w-full relative">
        @include('includes.components.main.header')
        <div class="w-full h-12 bg-blue31 flex items-center justify-center text-lg text-white">
            <div class="w-3/4 flex items-center">
                <a href="/" class="flex items-center">Beranda
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#fff" viewBox="0 0 24 24">
                        <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
                    </svg>
                </a>
                <a href="#">Berita tentang MIKA</a>
            </div>
        </div>

        <Section class="w-full h-max flex justify-center items-center flex-col">
            @include('includes.content.main.news')
        </Section>

        @include('includes.components.main.footer')      
    </body>
</html>
