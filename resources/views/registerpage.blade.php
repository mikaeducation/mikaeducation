<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register | Mika Education</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('public/assets/css/style.css')
</head>
<body>
    <section class="flex flex-col md:flex-row w-full h-screen font-futura">
        <div class="w-6/12 h-full hidden md:block text-white">
            <div class="w-full h-full flex justify-center items-center gradient-regist border rounded-regist">
                <div class="w-4/5 h-4/6 flex justify-center items-center">
                    <div class="w-full flex-col justify-center items-center text-center">
                        <div class="">
                            <h2 class="text-5xl font-bold">Hai, Kawan!</h2>
                        </div>
                        <div class="w-full bg-red h-20 flex justify-center items-center mt-8">
                            <p class="w-4/5 text-xl">Segera masuk dan gunakan semua fitur yang Mika sediakan, dibawah ini sekarang juga!</p>
                        </div>
                        <div class="flex items-center justify-center mt-8">
                            <a href="/" class="border-white border-2 w-2/5 h-14 rounded-2xl font-bold text-white flex justify-center items-center">
                                MASUK
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full md:w-6/12 flex justify-center items-center">
            <div class="w-full h-full md:h-4/6 flex justify-center items-center">
                <div class="w-full flex-col justify-center items-center text-center text-blue6a">
                    <div class="mt-20 md:mt-0">
                        <h2 class="text-5xl font-bold">Daftar Akun</h2>
                    </div>
                    <div class="w-full h-16 mb-8 mt-10 flex justify-center items-center">
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
                    <p>atau daftar secara manual</p>
                    <div class="mt-6 flex-col items-center">
                        <form action="">
                            <input type="text" placeholder="Username" class="p-4 bg-greyd9 bg-opacity-60 border-opacity-25 rounded-xl w-3/4 h-12 text-blue6a font-medium text-xl placeholder-white">
                            <input type="email" placeholder="Email" class="p-4 bg-greyd9 bg-opacity-60 border-opacity-25 rounded-xl w-3/4 h-12 text-blue6a font-medium text-xl placeholder-white mt-5">
                            <input type="tel" placeholder="Nomor Telpon" class="p-4 bg-greyd9 bg-opacity-60 border-opacity-25 rounded-xl w-3/4 h-12 text-blue6a font-medium text-xl placeholder-white mt-5">
                            <input type="password" placeholder="Password" class="p-4 bg-greyd9 bg-opacity-60 border-opacity-25 rounded-xl w-3/4 h-12 text-blue6a font-medium text-xl placeholder-white mt-5">
                            <div class="mt-8">
                                <a href="" class="text-blue6a">
                                    Lupa Password Anda?
                                </a>
                            </div>
                            <button class="bg-blue6a w-2/5 h-14 rounded-2xl font-bold text-white mt-6">DAFTAR</button>
                        </form>
                        <p class="block md:hidden mt-5 mb-20"> Sudah Punya Akun? Ayo segera,
                            <a href="/login" class="underline">
                                Masuk Disini
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>    
</body>
</html>