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
        <section class="flex flex-col md:flex-row w-full h-screen font-futura text-blue31">
            <div class="w-full md:w-full lg:w-1/2 xl:w-1/2 flex justify-center items-center pl-0 lg:pl-20">
                <div class="w-full h-full lg:h-4/6 flex justify-center items-center">
                    <div class="w-full flex-col justify-center items-center text-center mt-32 md:mt-0 space-y-8">
                        <div class="space-y-8">
                            <h2 class="text-5xl font-bold">Masuk</h2>
                            <div class="w-full h-16 flex justify-center items-center">
                                <div class="w-1/5 h-full flex justify-center items-center gap-8">
                                    <a href="" title="Masuk dengan Akun Goggle" class="w-full h-full border-opacity-50 rounded-2xl flex justify-center items-center">
                                        <svg width="56" height="56" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M27 0C29.7614 0 32 2.23858 32 5V27C32 29.7614 29.7614 32 27 32H5C2.23858 32 0 29.7614 0 27V5C0 2.23858 2.23858 0 5 0H27ZM19.2078 12.3782C18.3787 11.5855 17.3241 11.1818 16.1496 11.1818C14.066 11.1818 12.3026 12.589 11.6735 14.48C11.5135 14.96 11.4226 15.4727 11.4226 16C11.4226 16.5272 11.5132 17.04 11.6732 17.52C12.3023 19.4109 14.066 20.8181 16.1496 20.8181C17.226 20.8181 18.1426 20.5346 18.859 20.0546C19.7063 19.4873 20.2699 18.64 20.4554 17.64H16.1499V14.5455H23.6845C23.779 15.0691 23.8299 15.6146 23.8299 16.1818C23.8299 18.6182 22.9572 20.6691 21.4445 22.0619C20.1208 23.2837 18.3096 24 16.1496 24C13.0223 24 10.3169 22.2072 9.00049 19.5927C8.45867 18.5127 8.1499 17.2909 8.1499 16C8.1499 14.709 8.45899 13.4872 9.00081 12.4072C10.3172 9.79268 13.0223 8 16.1496 8C18.306 8 20.1169 8.79273 21.5023 10.0836L19.2078 12.3782Z" fill="#31587C"/>
                                        </svg>
                                    </a>
                                    <a href="" title="Masuk dengan LinkedIn" class="w-full h-full border-opacity-50 rounded-2xl flex justify-center items-center">
                                        <svg width="56" height="56" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5C0 2.23858 2.23858 0 5 0H27C29.7614 0 32 2.23858 32 5V27C32 29.7614 29.7614 32 27 32H5C2.23858 32 0 29.7614 0 27V5ZM8.2 13.3V24H11.6V13.3H8.2ZM8 9.9C8 11 8.8 11.8 9.9 11.8C11 11.8 11.8 11 11.8 9.9C11.8 8.8 11 8 9.9 8C8.9 8 8 8.8 8 9.9ZM20.6 24H23.8V17.4C23.8 14.1 21.8 13 19.9 13C18.2 13 17 14.1 16.7 14.8V13.3H13.5V24H16.9V18.3C16.9 16.8 17.9 16 18.9 16C19.9 16 20.6 16.5 20.6 18.2V24Z" fill="#31587C"/>
                                        </svg>                                        
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex-col items-center space-y-4">
                            <p class="text-lg text-blue3a">atau masukkan nomor telpon dan password Anda</p>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <input type="tel" name="phone" placeholder="Nomor Telpon" class="p-4 text-xl border border-blue6a  rounded focus:outline-none focus:ring-2 focus:ring-blue3a w-3/5 py-2 text-blue6a font-medium placeholder:opacity-45 placeholder-blue31">
                                @error('phone')
                                    <p class="text-blue6a text-sm">{{ $message }}</p>
                                @enderror
                                <input type="password" name="password" placeholder="Password" class="p-4 text-xl border border-blue6a rounded focus:outline-none focus:ring-2 focus:ring-blue3a w-3/5 py-2 text-blue6a font-medium placeholder-blue31 placeholder:opacity-45 mt-4">
                                @error('password')
                                    <p class="text-blue6a text-sm">{{ $message }}</p>
                                @enderror
                                <div class="mt-4 md:mt-4"> Lupa Password Anda?
                                    <a href="" class="underline italic underline-offset-1">Klik disini</a>
                                </div>
                                <button class="bg-blue31 w-2/5 py-3 px-6 rounded font-bold text-2xl text-white mt-5 md:mt-5">MASUK</button>
                            </form>
                            <p class="block lg:hidden"> Belum Punya Akun? 
                                <a href="/register" class="underline italic underline-offset-1">
                                    Daftar Disini
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 h-full lg:pl-10 xl:pl-36 my-20 md:my-0 hidden md:hidden lg:flex">
                <div class="w-full h-full flex justify-center items-center">
                    <div class="w-full h-full flex justify-center items-center gradient-login border rounded-login text-white">
                        <div class="w-full flex-col justify-center items-center text-center">
                            <h2 class="font-bold lg:text-4xl xl:text-5xl">Hai, Teman MIKA!</h2>
                            <div class="w-full h-20 flex justify-center items-center mt-8">
                                <p class="w-2/3 lg:text-2xl xl:text-3xl">Klik tombol DAFTAR dibawah ini jika Anda belum memiliki akun.</p>
                            </div>
                            <div class="flex items-center justify-center mt-8 mb-20">
                                <a href="/register" class="border-white border-2 w-1/3 h-14 rounded font-bold text-2xl text-white flex justify-center items-center">
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
