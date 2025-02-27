<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Beranda | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('public/assets/css/style.css')
    </head>
    <body class="font-futura h-max w-full relative">
        @include('includes.components.main.header')

        <Section class="w-full h-max flex justify-center items-center flex-col">
            @include('includes.content.main.home')
        </Section>

        @include('includes.components.main.footer')      
    </body>
</html>
