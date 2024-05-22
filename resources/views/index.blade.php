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
        <div class="flex justify-end p-8">
            <button id="profileButton" class="rounded-full overflow-hidden w-10 h-10">
                <img src="{{ asset('images/Profile.svg') }}" alt="Profile Icon">
            </button>
        </div>

        <div id="profilePopup" class="flex flex-col fixed justify-center w-1/4 h-full top-0 right-0 bg-white rounded-lg ">

            <!-- Profile Headbar -->
            <div class="flex justify-center m-0 py-5 space-x-8 bg-blue-100">
                <button id="closeButton" class="flex p-2 space-x-1 text-blue31 hover:text-red-400 rounded-md focus:outline-none">
                    <img src="{{ asset('images/back_btn.svg') }}" alt="Back Button">
                    <h3>Back to Home</h3>
                </button>
                <button id="closeButton" class="flex p-2 bg-blue6a text-white hover:text-red-400 py-2 rounded-full focus:outline-none">
                    <h3>+ Add New Account</h3>
                </button>
            </div>

            <!-- Profile Icon -->
            <div class="profile-icon flex flex-wrap justify-center w-full h-1/6 m-auto">
                <img class="w-full h-full" src="{{ asset('images/Profile.svg') }}" alt="Profile Icon">
            </div>

            <!-- Profile Overview -->
            <div class="flex flex-col justify-center m-auto text-center">
                <h2 class="text-2xl">Ahmad Rayhan</h2>
                <p class="text-sm opacity-40">Praktisi</p>
                <p class="text-sm opacity-40">Yayasan Peduli Autisme FST Unair</p>
            </div>

            <!-- Profile Content -->
            <table class="table justify-center w-full my-auto">
                <tbody>
                    <tr>
                    <td class="py-2">Nama Depan</td>
                    <td class="py-2">Ahmad</td>
                    </tr>
                    <tr>
                    <td class="py-2">Nama Belakang</td>
                    <td class="py-2">Rayhan</td>
                    </tr>
                    <tr>
                    <td class="py-2">Asal Instansi</td>
                    <td class="py-2">Universitas Airlangga</td>
                    </tr>
                    <tr>
                    <td class="py-2">Tanggal Lahir</td>
                    <td class="py-2">13/09/2002</td>
                    </tr>
                    <tr>
                    <td class="py-2">Nomor Telepon</td>
                    <td class="py-2">082156226440</td>
                    </tr>
                </tbody>
            </table>

            <!-- Profile Edit-->
            <div class="flex w-full m-auto">
                <button class="flex m-auto p-2 rounded-full bg-pinkee hover:bg-pink-500">
                    <img src="{{ asset('images/Trash_btn.svg') }}" alt="Trash Icon">
                    Nonaktifkan Akun Anda
                </button>
                <button class="flex m-auto p-2 rounded-full outline ">
                    Edit Biodata
                </button>
            </div>

            <!--TODO: Hapus aja klo misal tabel atas dah sesuai-->
            {{-- <div class="table w-full p-4">
                <div class="table-row-group">
                    <div class="table-row">
                        <div class="table-cell text-left">Nama Depan</div>
                        <div class="table-cell text-left">Ahmad</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell text-left">Nama Belakang</div>
                        <div class="table-cell text-left">Rayhan</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell text-left">Asal Instansi</div>
                        <div class="table-cell text-left">Universitas Airlangga</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell text-left">Tanggal Lahir</div>
                        <div class="table-cell text-left">13/09/2002</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell text-left">Nomor Telepon</div>
                        <div class="table-cell text-left">082156226440</div>
                    </div>
                </div>
            </div> --}}

            <!-- Profile Bottom Nav -->
            <div class="flex justify-center m-0 py-5 space-x-2 text-sm bg-blue-100">
                <button class="flex px-1 bg-blue6a text-white hover:text-red-400 py-2 rounded-full focus:outline-none">Materi Pembelajaran</button>
                <button class="flex px-1 bg-blue6a text-white hover:text-red-400 py-2 rounded-full focus:outline-none">Analisis Pembelajaran</button>
                <button class="flex px-1 bg-blue6a text-white hover:text-red-400 py-2 rounded-full focus:outline-none">Review</button>
            </div>
        </div>

        INI LANDING PAGE
    </body>
    <script>
        const profileButton = document.getElementById('profileButton');
        const profilePopup = document.getElementById('profilePopup');
        const closeButton = document.getElementById('closeButton');

        profileButton.addEventListener('click', () => {
          profilePopup.classList.remove('hidden');
        });

        closeButton.addEventListener('click', () => {
          profilePopup.classList.add('hidden');
        });
    </script>
</html>
