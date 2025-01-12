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
                            <h2 class="text-5xl font-bold">Mika Education</h2>
                        </div>
                        <div class="w-full h-16 mb-5 mt-8 flex justify-center items-center">
                            <div class="w-1/3 h-full flex justify-center items-center gap-8">
                                <a href="" class="w-full h-full border-blue6a border-2 border-opacity-50 rounded-2xl flex justify-center items-center">
                                    <img src="{{ asset('images/google.png') }}" alt="">
                                </a>
                                <a href="" class="w-full h-full border-blue6a border-2 border-opacity-50 rounded-2xl flex justify-center items-center">
                                    <img src="{{ asset('images/facebook.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <p class="text-lg text-blue3a">atau masukkan nomor telpon dan password Anda</p>
                        <div class="mt-10 md:mt-5 flex-col items-center">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <input type="tel" name="phone" placeholder="Nomor Telpon" class="p-4 text-xl border border-blue6a rounded focus:outline-none focus:ring-2 focus:ring-blue3a w-3/4 h-12 text-blue6a font-medium placeholder:opacity-45 placeholder-blue6a">
                                @error('phone')
                                    <p class="text-blue6a text-sm">{{ $message }}</p>
                                @enderror
                                <input type="password" name="password" placeholder="Password" class="p-4 text-xl border border-blue6a rounded focus:outline-none focus:ring-2 focus:ring-blue3a w-3/4 h-12 text-blue6a font-medium placeholder-blue6a placeholder:opacity-45 mt-5">
                                @error('password')
                                    <p class="text-blue6a text-sm">{{ $message }}</p>
                                @enderror
                                <div class="mt-10 md:mt-5">
                                    <a href="" class="text-blue6a text-lg">
                                        Lupa Password Anda?
                                    </a>
                                </div>
                                <button class="bg-blue6a w-2/5 h-14 rounded font-bold text-2xl text-white mt-5 md:mt-5">Masuk</button>
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
                                <p class="w-2/3 text-2xl">Klik tombol DAFTAR dibawah ini jika Anda belum memiliki akun.</p>
                            </div>
                            <div class="flex items-center justify-center mt-8 mb-20">
                                <a href="/register" class="border-white border-2 w-2/5 h-14 rounded font-bold text-2xl text-white flex justify-center items-center">
                                    DAFTAR
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>    
    </body>
</html>

@if(session('success'))
<script>
    alert("{{ session('success') }}");
</script>
@endif
