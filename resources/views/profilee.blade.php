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
    <body class="font-futura h-max w-full ">
        @include('includes.components.main.header')
        <!-- Mobile-->
        <div id="menu" class="hidden lg:hidden flex-col justify-center items-center bg-bluee3 w-full">
            <nav class="flex flex-col justify-center items-center space-y-4 py-8">
                <a href="" class="text-blue6a font-bold">Beranda</a>
                <a href="" class="text-blue6a font-bold">Profile</a>
                <a href="" class="text-blue6a font-bold">E-Learning</a>
                <a href="" class="text-blue6a font-bold">Tentang Kami</a>
                <a href="" class="text-blue6a font-bold">Aplikasi</a>
                <a href="" class="text-blue6a font-bold">Artikel</a>
                <a href="" class="text-blue6a font-bold">Ulasan</a>
            </nav>
        </div>

        <section class="w-full h-max my-14 flex flex-col justify-center items-center ">
            <div class="w-3/4 h-1/2 mb-5 rounded-3xl bg-bluee3 flex justify-center items-center font-semibold text-blue31 text-base">
                <div class="w-full h-full flex justify-between items-center py-4">
                    <a href="/" class="h-full w-auto md:w-1/4 pl-4 md:pl-5 flex justify-center items-center">
                        <img src="{{ asset('images/back.png') }}" alt="" class="mr-2">
                        <span class="hidden sm:block">Kembali Ke Beranda</span>
                    </a>
                    <div class="w-full h-full flex pr-4 md:pr-10">
                        <div class="w-full flex flex-wrap justify-end items-center underline">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="text-blue31 underline hover:text-red-500">
                                    Keluar dari Akun Anda
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="w-3/4 h-5/6 bg-bluee3 flex flex-col justify-center items-center rounded-3xl">
                <div class="w-full h-20 flex justify-center items-center text-3xl font-bold text-blue6a">
                    Biodata Anda
                </div>
                <div class="w-full h-full py-4 bg-white flex md:flex items-center justify-center text-blue6a border-4 border-bluee3">
                    <div class="flex-col w-full justify-center">
                        <div class="flex flex-col md:flex-col justify-center items-center">
                            <img id="change-pict" src="{{ asset('images/test-1.png') }}" alt="Foto Profil" class="cursor-pointer w-40 h-40 rounded-full">
                            <input type="file" id="file-input" class="hidden">
                            <h3 class="mt-3 font-bold text-3xl text-blue31 ">Ahmad Rayhan</h3>
                            <h6 class="my-1">Praktisi/Terapis/Orang Tua</h6>
                            <h6 class="">Yayasan/Mandiri</h6>
                        </div>
                        <div class="mt-3 w-full h-max font-medium flex items-center justify-center">
                            <table class="w-full my-auto flex items-center justify-center">
                                <tbody class="w-full flex flex-col items-center justify-center px-5 md:px-0">
                                    <tr class="w-full flex items-center justify-center py-2 ">
                                        <td class="w-1/4 md:w-1/2 justify-start items-start md:justify-end md:items-end flex pr-2 md:pr-5">Nama Depan</td>
                                        <td class="w-3/4 md:w-1/2 pl-2 md:pl-0 flex items-center">: Ahmad</td>
                                    </tr>
                                    <tr class="w-full flex items-center justify-center py-2">
                                        <td class="w-1/4 md:w-1/2 justify-start items-start md:justify-end md:items-end flex pr-2 md:pr-5">Nama Belakang</td>
                                        <td class="w-3/4 md:w-1/2 pl-2 md:pl-0 flex items-center">: Rayhan</td>
                                    </tr>
                                    <tr class="w-full flex items-center justify-center py-2">
                                        <td class="w-1/4 md:w-1/2 justify-start items-start md:justify-end md:items-end flex pr-2 md:pr-5">Asal Instansi</td>
                                        <td class="w-3/4 md:w-1/2 pl-2 md:pl-0 flex items-center">: Universitas Airlangga</td>
                                    </tr>
                                    <tr class="w-full flex items-center justify-center py-2">
                                        <td class="w-1/4 md:w-1/2 justify-start items-start md:justify-end md:items-end flex pr-2 md:pr-5">Tanggal Lahir</td>
                                        <td class="w-3/4 md:w-1/2 pl-2 md:pl-0 flex items-center">: 13/09/2002</td>
                                    </tr>
                                    <tr class="w-full flex items-center justify-center py-2">
                                        <td class="w-1/4 md:w-1/2 justify-start items-start md:justify-end md:items-end flex pr-2 md:pr-5">Nomor Telepon</td>
                                        <td class="w-3/4 md:w-1/2 pl-2 md:pl-0 flex items-center">: 082156226440</td>
                                    </tr>
                                    <tr class="w-full flex items-center justify-center py-2">
                                        <td class="w-1/4 md:w-1/2 justify-start items-start md:justify-end md:items-end flex pr-2 md:pr-5">Email</td>
                                        <td class="w-3/4 md:w-1/2 pl-2 md:pl-0 flex items-center">: ahmadrayhan@gmail.com</td>
                                    </tr>
                                    <tr class="w-full flex items-center justify-center py-2">
                                        <td class="w-1/4 md:w-1/2 justify-start items-start md:justify-end md:items-end flex pr-2 md:pr-5">Pasword</td>
                                        <td class="w-3/4 md:w-1/2 pl-2 md:pl-0 flex items-center">: ***********</td>
                                    </tr>
                                </tbody>
                        </div>
                    </div>
                </div>
                <div class="w-full h-24">
                    <div class="h-full flex items-center justify-center">
                        <button href="" class="h-1/2 px-5 mr-5 bg-pinkee flex justify-center items-center font-medium text-white text-lg rounded-full">
                            <img src="{{ asset('images/Trash.png') }}" alt="" class="pr-0 md:pr-2">
                            <span class="hidden lg:block">Hapus Akun Anda</span>
                        </button>
                        <button href="" class="h-1/2 px-5 border-4 border-blue6a flex justify-center items-center font-medium text-blue31 text-lg rounded-full">
                            <img src="{{ asset('images/pencil.png') }}" alt="" class="pr-0 md:pr-2">
                            <span class="hidden lg:block">Edit Biodata Anda</span>
                        </button>
                    </div>
                </div>
            </div>
        </main>

        @include('includes.components.main.footer')      

        
    </body>

    <script>
        document.getElementById('menu-btn').addEventListener('click', function() {
            var menu = document.getElementById('menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });

        function showChangeProfilePictureOptions() {
            document.getElementById("file-input").click();
        }

        document.getElementById("file-input").addEventListener("change", function() {
            var file = this.files[0];
            
            if (file && file.type.startsWith("image/")) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById("change-pict").src = e.target.result;
                };
                reader.readAsDataURL(file);
            } else {
                alert("Pilih file gambar!");
            }
        });

        document.getElementById("change-pict").addEventListener("click", function() {
            showChangeProfilePictureOptions();
        });
    </script>
</html>
