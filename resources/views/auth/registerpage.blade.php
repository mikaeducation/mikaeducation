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
<body class="font-futura h-max w-full relative">
    <section class="flex flex-col md:flex-row w-full h-screen font-futura text-blue31">
        <div class="w-1/2 h-full lg:pr-10 xl:pr-36 my-20 md:my-0 hidden md:hidden lg:flex">
            <div class="w-full h-full flex justify-center items-center">
                <div class="w-full h-full flex justify-center items-center gradient-regist border rounded-regist text-white">
                    <div class="w-full flex-col justify-center items-center text-center">
                        <h2 class="lg:text-4xl xl:text-5xl font-bold">Selamat Datang!</h2>
                        <div class="w-full h-20 flex justify-center items-center mt-8">
                            <p class="w-2/3 lg:text-2xl xl:text-3xl">Klik tombol MASUK dibawah ini untuk kembali ke halaman login.</p>
                        </div>
                        <div class="flex items-center justify-center mt-8 mb-20">
                            <a href="/login" class="border-white border-2 w-1/3 h-14 rounded font-bold text-2xl text-white flex justify-center items-center">
                                MASUK
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full md:w-full lg:w-1/2 xl:w-1/2 flex justify-center items-center pr-0 xl:pr-32">
            <div class="w-full h-full md:h-4/6 flex justify-center items-center mb-16 md:mb-0">
                <div class="w-full flex-col justify-center items-center text-center mt-16 md:mt-0 space-y-8">
                    <div class="space-y-8">
                        <h2 class="text-5xl font-bold">Daftar Akun</h2>
                        <div class="w-full h-16 flex justify-center items-center">
                            <div class="w-1/5 h-full flex justify-center items-center gap-8">
                                <a href="" title="Daftar dengan Akun Goggle" class="w-full h-full border-opacity-50 rounded-2xl flex justify-center items-center">
                                    <svg width="56" height="56" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M27 0C29.7614 0 32 2.23858 32 5V27C32 29.7614 29.7614 32 27 32H5C2.23858 32 0 29.7614 0 27V5C0 2.23858 2.23858 0 5 0H27ZM19.2078 12.3782C18.3787 11.5855 17.3241 11.1818 16.1496 11.1818C14.066 11.1818 12.3026 12.589 11.6735 14.48C11.5135 14.96 11.4226 15.4727 11.4226 16C11.4226 16.5272 11.5132 17.04 11.6732 17.52C12.3023 19.4109 14.066 20.8181 16.1496 20.8181C17.226 20.8181 18.1426 20.5346 18.859 20.0546C19.7063 19.4873 20.2699 18.64 20.4554 17.64H16.1499V14.5455H23.6845C23.779 15.0691 23.8299 15.6146 23.8299 16.1818C23.8299 18.6182 22.9572 20.6691 21.4445 22.0619C20.1208 23.2837 18.3096 24 16.1496 24C13.0223 24 10.3169 22.2072 9.00049 19.5927C8.45867 18.5127 8.1499 17.2909 8.1499 16C8.1499 14.709 8.45899 13.4872 9.00081 12.4072C10.3172 9.79268 13.0223 8 16.1496 8C18.306 8 20.1169 8.79273 21.5023 10.0836L19.2078 12.3782Z" fill="#31587C"/>
                                    </svg>
                                </a>
                                <a href="" title="Daftar dengan LinkedIn" class="w-full h-full border-opacity-50 rounded-2xl flex justify-center items-center">
                                    <svg width="56" height="56" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5C0 2.23858 2.23858 0 5 0H27C29.7614 0 32 2.23858 32 5V27C32 29.7614 29.7614 32 27 32H5C2.23858 32 0 29.7614 0 27V5ZM8.2 13.3V24H11.6V13.3H8.2ZM8 9.9C8 11 8.8 11.8 9.9 11.8C11 11.8 11.8 11 11.8 9.9C11.8 8.8 11 8 9.9 8C8.9 8 8 8.8 8 9.9ZM20.6 24H23.8V17.4C23.8 14.1 21.8 13 19.9 13C18.2 13 17 14.1 16.7 14.8V13.3H13.5V24H16.9V18.3C16.9 16.8 17.9 16 18.9 16C19.9 16 20.6 16.5 20.6 18.2V24Z" fill="#31587C"/>
                                    </svg>                                        
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center space-y-4 text-lg">
                        <p class="w-2/3">atau Anda dapat memasukkan nomor telpon, email dan password untuk mendaftarkan akun Anda.</p>
                        <form id="register-form" action="{{ route('register') }}" method="POST" class="flex flex-col items-center w-full">
                            @csrf
                            <input type="tel" name="phone" placeholder="Nomor Telpon" class="p-4 text-xl border border-blue6a rounded focus:outline-none focus:ring-2 focus:ring-blue3a w-4/6 py-2 font-medium placeholder:opacity-45 placeholder-blue31">
                            @error('phone')
                                <p class="text-sm">{{ $message }}</p>
                            @enderror

                            <input type="email" name="email" placeholder="Email" class="p-4 text-xl border border-blue6a rounded focus:outline-none focus:ring-2 focus:ring-blue3a w-4/6 py-2 font-medium placeholder:opacity-45 placeholder-blue31 mt-4">
                            @error('email')
                                <p class="text-sm">{{ $message }}</p>
                            @enderror

                            <input type="password" name="password" placeholder="Password" class="p-4 text-xl border border-blue6a rounded focus:outline-none focus:ring-2 focus:ring-blue3a w-4/6 py-2 font-medium placeholder:opacity-45 placeholder-blue31 mt-4">
                            @error('password')
                                <p class="text-sm text-blue31">{{ $message }}</p> <!-- Pesan validasi untuk password -->
                            @enderror

                            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" class="p-4 text-xl border border-blue6a rounded focus:outline-none focus:ring-2 focus:ring-blue3a w-4/6 py-2 font-medium placeholder:opacity-45 placeholder-blue31 mt-4">
                            @error('password_confirmation')
                                <p class="text-sm text-blue31">{{ $message }}</p> <!-- Pesan validasi untuk konfirmasi password -->
                            @enderror

                            <div class="mt-4 w-3/4 flex items-start lg:item-center xl:items-center justify-center">
                                <input id="terms-checkbox" type="checkbox" class="w-5">
                                <label for="terms-checkbox">
                                    Saya setuju dengan <a href="#" class="showTermsDialog underline italic underline-offset-1">Syarat dan Ketentuan</a> Akun MIIKA Education.
                                </label>
                            </div>
                            <p id="error-message" class="text-blue31 text-sm mt-2 hidden">Anda belum menyetujui syarat dan ketentuan yang berlaku.</p>
                            
                            <button type="button" id="submit-button" class="bg-blue31 w-1/2 py-3 px-6 rounded font-bold text-2xl text-white mt-5">
                                DAFTAR
                            </button>
                        </form>
                        <p class="block md:hidden mt-5 mb-20"> Sudah Punya Akun? Ayo segera masuk,
                            <a href="/login" class="underline italic underline-offset-1">Disini.</a>
                        </p>
                        <p  id="reactivate-notice" class="text-lg hidden">
                            Anda terdeteksi pernah memiliki Akun, namun telah non-aktif pasca penghapusan Akun. 
                            <a href="#" id="showReactivationModal" class="underline"> <br> Lakukan Aktivasi akun Anda disini</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('includes.components.main.dialog.terms-condition')
    @include('includes.components.main.dialog.reactivation-account')

</body>

</html>

@if(session('success'))
<script>
    alert("{{ session('success') }}");
</script>
@endif

@if (session('reactivate'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const notice = document.getElementById('reactivate-notice');
            if (notice) {
                notice.classList.remove('hidden');
            }
        });
    </script>
@endif



