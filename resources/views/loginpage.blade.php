<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('public/assets/css/style.css')
    </head>
    <body>
        <section class="flex flex-col md:flex-row w-full h-screen font-futura">
            <div class="w-full md:w-6/12 flex justify-center items-center">
                <div class="w-full h-full md:h-4/6 flex justify-center items-center">
                    <div class="w-full flex-col justify-center items-center text-center text-blue6a">
                        <div class="mt-20 md:mt-0">
                            <h2 class="text-5xl font-bold">Mika</h2>
                            <h2 class="text-5xl font-bold">Sign In</h2>
                        </div>
                        <div class="w-full h-16 mb-10 mt-14 flex justify-center items-center">
                            <div class="w-1/3 h-full flex justify-center items-center">
                                <a href="" class="w-full h-full border-blue6a border-2 border-opacity-50 rounded-2xl flex justify-center items-center">
                                    <img src="{{ asset('images/google.png') }}" alt="">
                                </a>
                                <a href="" class="w-full h-full border-blue6a border-2 border-opacity-50 rounded-2xl flex justify-center items-center mx-8">
                                    <img src="{{ asset('images/facebook.png') }}" alt="">
                                </a>
                                <a href="" class="w-full h-full border-blue6a border-2 border-opacity-50 rounded-2xl flex justify-center items-center">
                                    <img src="{{ asset('images/twitter.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <p>atau masukkan nomor telpon dan password Anda</p>
                        <div class="mt-10 md:mt-5 flex-col items-center">
                            <form action="" method="POST">
                                @csrf
                                <input type="tel" placeholder="Nomor Telpon" class="p-4 text-xl bg-greyd9 bg-opacity-60 border-opacity-25 rounded-xl w-3/4 h-12 text-blue6a font-medium placeholder-white">
                                <input type="tel" placeholder="Password" class="p-4 text-xl bg-greyd9 bg-opacity-60 border-opacity-25 rounded-xl w-3/4 h-12 text-blue6a font-medium placeholder-white mt-5">
                                <div class="mt-10 md:mt-5">
                                    <a href="" class="text-blue6a">
                                        Lupa Password Anda?
                                    </a>
                                </div>
                                <button class="bg-blue6a w-2/5 h-14 rounded-2xl font-bold text-white mt-5 md:mt-5">MASUK</button>
                            </form>
                            <p class="block md:hidden mt-10"> Belum Punya Akun? 
                                <a href="/register" class="underline">
                                    Daftar Disini
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-6/12 h-full my-20 md:my-0 hidden md:block">
                <div class="w-full h-full flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center gradient-login border rounded-login text-white">
                        <div class="w-full flex-col justify-center items-center text-center">
                            <div class="">
                                <h2 class="text-5xl font-bold">Hai, Selamat Datang!</h2>
                            </div>
                            <div class="w-full h-20 flex justify-center items-center mt-8">
                                <p class="w-2/3 text-xl">Daftarkan diri Anda dengan membuat akun Mika melalui registrasi dibawah ini!</p>
                            </div>
                            <div class="flex items-center justify-center mt-8 mb-20">
                                <a href="/register" class="border-white border-2 w-2/5 h-14 rounded-2xl font-bold text-white flex justify-center items-center">
                                    DAFTAR AKUN
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>    
    </body>
</html>