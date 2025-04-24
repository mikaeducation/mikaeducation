<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Profile | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('public/assets/css/style.css')
    </head>

    <body class="font-futura h-max w-full relative">

    @include('includes.components.main.header')

        <div class="w-full h-fit py-3 bg-blue31 flex items-center justify-center text-base text-white">
            <div class="w-3/4 flex items-center" style="display: inline-flex; flex-wrap: wrap;">
                <a href="/" class="flex items-center">Beranda
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#fff" viewBox="0 0 24 24">
                        <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
                    </svg>
                </a>
                <a href="#" class="flex items-center">Halaman Profile Anda</a>
            </div>
        </div>
        <section class="w-full h-auto flex justify-center items-center pt-10 pb-14">
            <div class="w-3/4 h-auto flex-col text-base items-center space-y-3">
                <div class="w-full h-auto flex-col lg:bg-blue31 text-white rounded">
                    <div class="">
                        <form id="banner_image" action="{{ route('profile-media-update') }}" method="POST" enctype="multipart/form-data">    
                            @csrf    
                            @method('PUT')    
                            <input type="hidden" id="delete-banner" name="delete_banner" value="0">
                            <div class="relative flex items-start justify-end w-full h-[150px] sm:h-[230px] md:h-[270px] lg:h-[300px] px-1">    
                                <button type="button" id="edit-banner-button" class="flex absolute items-center font-medium h-8 md:h-fit w-8 md:w-fit text-white bg-blue31 hover:border-white rounded border-2 border-blue31 xl:py-1 md:px-2 lg:px-3 m-4 md:m-8 gap-1 cursor-pointer">    
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="32" height="32" fill="#fff" class="w-full h-full md:w-10 md:h-10">    
                                        <path d="M48 20h-5.5l-3.8-6.4c-.4-.6-1-1-1.7-1h-10c-.7 0-1.3.4-1.7 1l-3.8 6.4H16c-2.2 0-4 1.8-4 4v24c0 2.2 1.8 4 4 4h32c2.2 0 4-1.8 4-4V24c0-2.2-1.8-4-4-4zM32 46c-6.1 0-11-4.9-11-11s4.9-11 11-11 11 4.9 11 11-4.9 11-11 11zm0-18a7 7 0 1 0 0 14 7 7 0 0 0 0-14z"/>    
                                    </svg>    
                                    <span class="md:block hidden">Edit Foto Banner</span> 
                                </button>
                                <div id="edit-options" class="absolute top-4 md:top-8 right-4 md:right-8 space-y-0.5 md:space-y-1.5 md:text-base text-sm hidden">  
                                    <button type="button" id="change-banner-button" class="lg:w-28 md:w-24 w-fit flex items-center justify-center font-medium text-white bg-blue31 hover:border-white border-2 border-blue31 rounded lg:py-2 py-1 px-2 cursor-pointer">Ubah Foto</button>  
                                    <button type="button" id="delete-banner-button" class="lg:w-28 md:w-24 w-fit flex items-center justify-center font-medium hover:text-white hover:bg-pinkee hover:border-pinkee bg-transparent border-2 border-pinkee text-pinkee rounded lg:py-1 py-0.5 md:px-2 px-5 cursor-pointer">
                                        Hapus
                                    </button>  
                                </div>
                                <input id="photo-upload" type="file" accept="image/*" class="hidden" name="banner_image" onchange="previewAndCropPhoto(event)">    
                                <img id="photo-preview" src="{{ $profile->banner_image ? asset($profile->banner_image) : asset('images/samplebg.jpg') }}" alt="Foto Banner" class="w-full h-full object-cover rounded bg-bluee3">
                                <div id="banner-buttons" class="absolute top-4 lg:top-8 right-4 lg:right-8 space-y-1.5 md:text-base text-sm hidden">
                                    <button type="submit" id="save-banner-button" class="lg:w-24 md:w-20 w-fit flex items-center justify-center font-medium hover:text-white hover:bg-blue31 hover:border-blue31 border-2 rounded lg:py-2 md:py-1 py-0.5 md:px-2 px-5 cursor-pointer">Simpan</button>  
                                </div>       
                            </div>  
                        </form>
                        <div class="flex flex-col lg:flex-row justify-center items-center w-full lg:p-5">
                            <div class="text-lg text-blue31 flex flex-col lg:flex-row justify-center items-center w-full h-fit rounded-xl">
                                <div class="flex flex-col lg:flex-row w-full p-0 xl:p-3 gap-5 xl:gap-8">
                                    <div class="lg:w-1/4 w-full lg:h-fit md:h-[550px] h-fit pb-5 pt-0 lg:pt-5 space-y-5 bg-white lg:rounded flex lg:flex-col justify-center sm:items-center items-start border-b-2 lg:border-b-0 border-bluee3">  
                                        <form id="profile_image" action="{{ route('profile-media-update') }}" method="POST" enctype="multipart/form-data" class="w-full h-full flex flex-col items-center justify-center">    
                                            @csrf    
                                            @method('PUT')    
                                            <div class="w-full lg:w-5/6 h-full lg:h-fit flex flex-col items-center justify-center pr-8 lg:pr-0 pt-5 sm:pt-10 lg:pt-0 pb-5 lg:pb-0">    
                                                <div class="w-full h-full xl:h-80 relative overflow-hidden bg-bluee3 border-2 border-blue31 rounded">    
                                                    <img id="profile-image" src="{{ $profile->profile_image ? asset($profile->profile_image) : asset('images/profile-sample.jpg') }}" alt="Foto Profil" class="object-cover w-full h-full">    
                                                </div>
                                                <button type="submit" id="save-profile-button" class="hidden w-full py-1 mt-1 border-2  border-blue31 rounded hover:bg-blue31 hover:text-white transition font-medium text-base">Simpan</button>  
                                                <label for="file-input" class="flex items-center justify-center font-normal text-base py-1 mt-1 w-full hover:border-blue31 border-2 bg-blue31 text-white rounded cursor-pointer">    
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="20" height="32" fill="#ffff" class="hover:fill-white">    
                                                        <path d="M48 20h-5.5l-3.8-6.4c-.4-.6-1-1-1.7-1h-10c-.7 0-1.3.4-1.7 1l-3.8 6.4H16c-2.2 0-4 1.8-4 4v24c0 2.2 1.8 4 4 4h32c2.2 0 4-1.8 4-4V24c0-2.2-1.8-4-4-4zM32 46c-6.1 0-11-4.9-11-11s4.9-11 11-11 11 4.9 11 11-4.9 11-11 11zm0-18a7 7 0 1 0 0 14 7 7 0 0 0 0-14z"/>    
                                                    </svg>    
                                                    Ubah Foto Profil    
                                                </label>
                                                <input type="file" id="file-input" class="hidden" accept="image/*" name="profile_image" onchange="previewImage(event)">    
                                                <p class="text-xs underline italic mt-1 text-justify">Keterangan: format file yang didukung: JPG, PNG, JPEG. pastikan wajah terlihat dengan jelas.</p>    
                                            </div>    
                                        </form>                                        
                                        <div class="w-full lg:w-5/6 h-full lg:h-fit pt-0 md:pt-6 lg:pt-0 font-medium space-y-4">  
                                            <div class="border-b-2 border-bluee3 pb-5">  
                                                <h1 id="username" class="text-lg sm:text-xl xl:text-2xl font-extrabold">{{ old('username', $profile->username) }}</h1>  
                                                <h5 id="occupation" class="text-base sm:text-lg xl:text-xl">{{ old('occupation', $profile->occupation) }}</h5>  
                                                <h5 id="institution" class="text-base sm:text-lg xl:text-xl">{{ old('institution', $profile->institution) }}</h5>  
                                            </div>  
                                            <form id="description" action="{{ route('profile-media-update') }}" method="POST">  
                                                @csrf  
                                                @method('PUT')  
                                                <div id="description-container" class="flex flex-col space-y-1">  
                                                    <h5 class="font-semibold text-sm sm:text-base">Deskripsi Biografi</h5>  
                                                    <p id="description-text" class="text-blue31 text-sm font-normal pb-2 text-justify">  
                                                        {{ old('description', $profile->description) ?? 'Anda belum memiliki deskripsi apapun.' }}  
                                                    </p>  
                                                    <button type="button" id="edit-button" class="w-fit lg:w-full px-2 md:px-4 py-1 border-2 border-blue31 rounded hover:bg-blue31 hover:text-white font-medium text-sm xl:text-base transition">Tambahkan Deskripsi</button>  
                                                </div>  
                                                <div id="textarea-container" class="hidden mt-2">  
                                                    <textarea id="description-textarea" name="description" cols="30" rows="5" placeholder="Tulis deskripsi tentang biografi Anda di sini..." class="w-full px-3 py-2 border-2 border-blue31 rounded text-sm font-normal">{{ $profile->description ?? '' }}</textarea>  
                                                    <button type="submit" id="save-button" class="w-full py-1 border-2 border-blue31 rounded hover:bg-blue31 hover:text-white font-medium text-base">Simpan</button>  
                                                </div>  
                                            </form>   
                                            <div class="pb-8 lg:pt-0 pt-3 border-b-2 border-bluee3 space-y-2 text-sm font-normal">  
                                                <h5 class="font-semibold text-sm sm:text-base">Capaian Pembelajaran</h5>  
                                                <div>  
                                                    <img src="{{ asset('images/content-1.png') }}" alt="" class="xl:w-16 lg:w-12 w-10 lg:h-12 xl:h-16 h-10 rounded-full border-2 md:border-4 border-blue31 cursor-pointer">  
                                                    <a href="/learn" class="underline text-sm md:text-base">Selengkapnya...</a>  
                                                </div>  
                                            </div>  
                                            <div class="pt-1 md:pt-3 text-xs sm:text-sm xl:text-base font-medium lg:font-bold flex justify-start md:justify-end">  
                                                <div class="w-fit lg:w-full px-4 py-2 flex justify-center items-center cursor-pointer bg-pinkee text-white rounded transition hover:bg-blue31">  
                                                    <form action="{{ route('logout') }}" method="POST" class="w-full text-center">  
                                                        @csrf  
                                                        <button type="submit" class="w-full">KELUAR DARI AKUN</button>  
                                                    </form>  
                                                </div>  
                                            </div>  
                                        </div>  
                                    </div>  
                                    <div class="w-full lg:w-3/4 lg:mt-0 mt-4 flex bg-white rounded border-2 border-blue31">
                                        <div class="w-full px-6 lg:px-3 xl:px-6 text-sm xl:text-base flex-col">
                                            <nav class="w-full py-4 sm:py-0 sm:pt-4 md:text-base grid sm:grid-cols-4 grid-cols-2 font-semibold border-b-2 border-bluee3">
                                                <button id="section1Button" onclick="showContent('section1')" class="pb-4 sm:pt-0 pt-4 transition border-b-2 border-blue31">Biodata Diri</button>
                                                <button id="section2Button" onclick="showContent('section2')" class="pb-4 sm:pt-0 pt-4 transition">Dokumen dan Layanan</button>
                                                <button id="section3Button" onclick="showContent('section3')" class="pb-4 sm:pt-0 pt-4 transition">Notifikasi</button>
                                                <button id="section4Button" onclick="showContent('section4')" class="pb-4 sm:pt-0 pt-4 transition">Pengaturan Lainnya</button>
                                            </nav>
                                            <div id="section1" class="w-full hidden lg:flex items-center justify-center py-8">
                                                @include('includes.content.main.profile.section1')
                                            </div>
                                            <div id="section2" class="w-full flex items-center justify-center py-8"  style="display: none">
                                                @include('includes.content.main.profile.section2')
                                            </div>
                                            <div id="section3" class="w-full flex items-center justify-center py-8"  style="display: none">
                                                @include('includes.content.main.profile.section3')
                                            </div>
                                            <div id="section4" class="w-full flex items-center justify-center py-8"  style="display: none">
                                                @include('includes.content.main.profile.section4')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('includes.components.main.footer')

    </body>
    
    <script>
        // JS untuk menghubah/mengatur foto banner
        document.getElementById('edit-banner-button').addEventListener('click', function() {
        document.getElementById('edit-options').classList.remove('hidden');
        document.getElementById('edit-banner-button').classList.add('hidden');
    });

    document.getElementById('change-banner-button').addEventListener('click', function() {
        document.getElementById('photo-upload').click();
    });

    document.getElementById('delete-banner-button').addEventListener('click', function() {
        if (confirm("Apakah Anda yakin ingin menghapus foto banner?")) {
            document.getElementById('photo-preview').src = "{{ asset('images/samplebg.jpg') }}"; 
            document.getElementById('photo-upload').value = "";
            document.getElementById('delete-banner').value = "1"; // Set input hidden untuk menghapus
            document.getElementById('banner_image').submit(); // Kirim form secara otomatis
        }
    });

    function previewAndCropPhoto(event) {    
        const file = event.target.files[0];    
        if (file) {    
            const reader = new FileReader();    
            reader.onload = function(e) {    
                document.getElementById('photo-preview').src = e.target.result;    
                document.getElementById('banner-buttons').classList.remove('hidden');  
                document.getElementById('edit-options').classList.add('hidden');
            };    
            reader.readAsDataURL(file);    
        }    
    }

    document.getElementById('banner_image').addEventListener('submit', function() {
        document.getElementById('edit-banner-button').classList.remove('hidden');
        document.getElementById('banner-buttons').classList.add('hidden');
    });

        

//JS Konten kiri
        // JS untuk untuk mengubah/mengatur foto profil
        function previewImage(event) {    
            const file = event.target.files[0];    
            if (file) {    
                const reader = new FileReader();    
                reader.onload = function(e) {    
                    const image = document.getElementById('profile-image');    
                    image.src = e.target.result;    
        
                    // Tampilkan tombol simpan  
                    document.getElementById('save-profile-button').classList.remove('hidden');  
                }    
                reader.readAsDataURL(file);    
            }    
        }   

        document.addEventListener('DOMContentLoaded', () => {
            const editButton = document.getElementById('edit-button');
            const saveButton = document.getElementById('save-button');
            const descriptionContainer = document.getElementById('description-container');
            const textareaContainer = document.getElementById('textarea-container');
            const descriptionText = document.getElementById('description-text');
            const descriptionTextarea = document.getElementById('description-textarea');
            // Fungsi untuk mengatur teks tombol berdasarkan kondisi deskripsi
            const updateButtonText = () => {
                if (descriptionText.textContent.trim() !== "Anda belum memiliki deskripsi apapun.") {
                    editButton.textContent = "Perbarui Deskripsi";
                } else {
                    editButton.textContent = "Tambahkan Deskripsi";
                }
            };
            // Validasi panjang deskripsi di textarea
            const validateDescriptionLength = () => {
                const maxLength = 255;
                const currentLength = descriptionTextarea.value.length;
                if (currentLength > maxLength) {
                    descriptionTextarea.value = descriptionTextarea.value.substring(0, maxLength);
                }
            };

        // Ketika tombol 'Tambah/Ubah Deskripsi' atau 'Perbarui Deskripsi' diklik
        editButton.addEventListener('click', () => {
            textareaContainer.classList.remove('hidden');
            descriptionContainer.classList.add('hidden');
            // Hanya isi textarea jika deskripsi sudah diisi
            if (descriptionText.textContent.trim() !== "Anda belum memiliki deskripsi apapun.") {
                descriptionTextarea.value = descriptionText.textContent.trim();
            } else {
                descriptionTextarea.value = ""; // Tetap kosong jika deskripsi belum diisi
            }
        });
        // Validasi panjang karakter pada textarea saat mengetik
        descriptionTextarea.addEventListener('input', validateDescriptionLength);
        // Inisialisasi teks tombol saat halaman dimuat
        updateButtonText();
    });


// JS Konten Kanan
        // JS untuk navigasi antar section
        function showContent(id) {
        // Menghapus border aktif dari semua tombol
        var buttons = document.querySelectorAll('nav button');
        buttons.forEach(function(button) {
            button.classList.remove('border-b-2', 'border-blue31');
        });

        // Menambahkan border aktif pada tombol yang dipilih
        document.getElementById(id + 'Button').classList.add('border-b-2', 'border-blue31');

        // Menampilkan hanya section yang dipilih
        document.getElementById('section1').style.display = 'none';
        document.getElementById('section2').style.display = 'none';
        document.getElementById('section3').style.display = 'none';
        document.getElementById('section4').style.display = 'none';

        document.getElementById(id).style.display = 'block';
    }

    // Saat halaman dimuat, tampilkan section1 sebagai default TANPA menghapus fungsi navigasi
    document.addEventListener("DOMContentLoaded", function() {
        showContent('section1');
    });
    </script>
</html>


