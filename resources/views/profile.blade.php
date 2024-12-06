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
    <body class="font-futura">
        <header class="w-full h-24 bg-bluee3 flex justify-between items-center p-4">
            <div class="w-full h-full flex justify-center">
                <div class="flex justify-center items-center h-full w-3/4">
                    <div class="flex justify-center items-center mr-auto">
                        <a href="" class="flex items-center">
                            <div class="mr-5">
                                <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="h-10 w-10">
                            </div>
                            <h1 class="font-bold text-3xl text-blue6a">MIKA</h1>
                        </a>
                    </div>
                    <div class="hidden md:flex md:items-center lg:space-x-8">
                        <nav class="flex space-x-10 justify-center items-center">
                            <a href="/" class="text-blue6a font-bold hover:text-pinkee">Beranda</a>
                            <a href="" class="text-blue6a font-bold hover:text-pinkee">Tentang Kami</a>
                            <a href="" class="text-blue6a font-bold hover:text-pinkee">Aplikasi</a>
                            <a href="" class="text-blue6a font-bold hover:text-pinkee">Artikel</a>
                            <a href="" class="text-blue6a font-bold hover:text-pinkee">Ulasan</a>
                            <a href="" class="bg-blue6a text-white hover:bg-pinkee font-bold rounded-full px-4 py-2">Pembelajaran</a>
                        </nav>
                        <a href="" class="h-10 w-10 flex justify-center items-center">
                            <div onclick="" class="
                                bg-white h-10 w-10 rounded-full border-2 border-blue6a hover:bg-blue31 flex justify-center items-center">
                                <img src="{{ asset('images/profile.png') }}" alt="Profile" class="">
                            </div>
                        </a>
                    </div>
                    <div class="md:hidden flex items-center">
                        <button id="menu-btn" class="text-blue6a focus:outline-none">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </header>
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

        <main class="w-full h-max my-14 flex flex-col justify-center items-center ">
            <div class="w-3/4 h-1/2 mb-5 rounded-3xl bg-bluee3 flex justify-center items-center">
                <div class="w-full h-full flex justify-between items-center py-4">
                    <a href="/" class="h-full w-auto md:w-1/4 pl-4 md:pl-5  flex justify-center items-center font-semibold text-blue31 text-base">
                        <img src="{{ asset('images/back.png') }}" alt="" class="mr-2">
                        <span class="hidden sm:block">Kembali Ke Beranda</span>
                    </a>
                    <div class="w-full h-full flex pr-4 md:pr-10">
                        <div class="w-full flex flex-wrap justify-end items-center ">
                            <a href="" class="w-auto md:w-1/6 p-2 md:p-2 mx-1 md:mx-5 mb-1 md:mb-0 rounded-full flex items-center justify-center text-white font-medium text-lg bg-blue6a hover:bg-pinkee">Biodata</a>
                            <a href="" class="w-auto md:w-1/5 p-2 md:p-2 rounded-full flex items-center justify-center text-white font-medium text-lg bg-blue6a hover:bg-pinkee">Materi Pembelajaran</a>
                            <a href="" class="w-auto md:w-1/5 p-2 md:p-2 mx-2 md:mx-5 mt-1 md:mt-0 rounded-full flex items-center justify-center text-white font-medium text-lg bg-blue6a hover:bg-pinkee">Analisis Pembelajaran</a>
                            <a href="" class="w-auto md:w-1/6 p-2 md:p-2 rounded-full flex items-center justify-center text-white font-medium text-lg bg-blue6a hover:bg-pinkee">Review</a>
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
                            </table>
                            {{-- buat backend crud nantit bisa pake form table kek gini 
                                <table class="w-full">
                                <thead>
                                    <tr>
                                        <th>Nama Depan</th>
                                        <th>Nama Belakang</th>
                                        <th>Asal Instansi</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Nomor Telepon</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <tr>
                                        <td>Ahmad</td>
                                        <td>Rayhan</td>
                                        <td>Universitas Airlagga</td>
                                        <td>13/09/2002</td>
                                        <td>082156226440</td>
                                        <td>ahmadrayhan017@gmail.com</td>
                                        <td>rayhan2002</td>
                                        <td>
                                            
                                        </td>
                                    </tr>
                                </tbody>
                            </table> --}}
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

        <footer class="w-full bg-bluee3">
            <div class="container w-3/4 mx-auto flex flex-col lg:flex-row justify-between py-8 lg:py-12 px-6 lg:px-0">
                <div class="w-full lg:w-1/12 flex justify-center items-center mb-6 lg:mb-0">
                    <div class="text-center">
                        <img src="{{ asset('images/logo-1.png') }}" alt="" class="w-24 lg:w-full">
                        <h1 class="font-bold text-2xl lg:text-4xl text-blue6a">MIKA</h1>
                        <h6 class="font-medium text-xs lg:text-sm text-blue6a">Copyright©2024</h6>
                    </div>
                </div>
                <div class="w-full lg:w-2/6 flex justify-center items-center mb-6 lg:mb-0 ">
                    <div class="text-center md:text-left">
                        <h1 class="font-semibold text-2xl md:text-xl text-blue6a">Media Visual Komunikasi Anak</h1>
                        <p class="font-medium text-base lg:text-lg text-blue6a mt-3">
                            Jl. Dr. Ir. H. Soekarno, Mulyorejo, Kec. Mulyorejo, Surabaya, Jawa Timur 60115</p>
                        <p class="font-medium text-base lg:text-lg text-blue6a">Email: mikaunivairlangga@gmail.com</p>
                        <p class="font-medium text-base lg:text-lg text-blue6a">Whatsapp : +62 123-456-789</p>
                    </div>
                </div>
                <div class="w-full lg:w-1/5 flex justify-center items-center mb-6 lg:mb-0">
                    <div class="w-full h-48 lg:h-full bg-blue-200 flex items-center justify-center">
                        <div class="overflow-hidden w-full h-full">
                            <iframe src="https://maps.google.com/maps?q=PQMM%2BJF8%2C+Mulyorejo%2C+Kec.+Mulyorejo%2C+Surabaya%2C+Jawa+Timur+60115&t=k&z=18&ie=UTF8&iwloc=&output=embed" 
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0" class="w-full h-full">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 flex justify-center items-center mb-6 md:mb-0 ">
                    <div class="flex">
                        <div class="text-blue6a font-semibold text-center md:text-left mr-0 md:mr-4">
                            <a href="" class="block hover:underline my-1">Beranda</a>
                            <a href="" class="block hover:underline my-1">Tentang Kami</a>
                            <a href="" class="block hover:underline my-1">Aplikasi</a>
                            <a href="" class="block hover:underline my-1">Artikel</a>
                            <a href="" class="block hover:underline my-1">E-Learning</a>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="text-blue6a font-semibold text-center md:text-left ml-10 md:ml-2">
                            <a href="" class="block hover:underline my-1">User Agreement</a>
                            <a href="" class="block hover:underline my-1">Privacy Policy</a>
                            <a href="" class="block hover:underline my-1">Community Guidelines</a>
                            <a href="" class="block hover:underline my-1">Feedback</a>
                            <a href="" class="block hover:underline my-1">Language</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
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
