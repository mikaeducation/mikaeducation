<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-Learning | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('public/assets/css/style.css')
        {{-- <script>document.documentElement.classList.add('js')</script> --}}
    </head>
    <body class="font-futura h-max w-full relative">

    @include('includes.components.main.header')
        
        <section class="w-full h-auto flex justify-center items-center">
            <div class="w-3/4 h-auto flex-col text-base items-center pt-12 space-y-3">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#31587C" viewBox="0 0 32 24">
                        <path d="M15.707 4.707a1 1 0 0 0-1.414 0L7.293 12l6.293 7.293a1 1 0 1 0 1.414-1.414L9.414 12l6.293-6.121a1 1 0 0 0 0-1.414z" />
                    </svg> 
                    <a href="/learn" class="text-blue31 font-medium text-base flex justify-center items-center underline">
                        Kembali ke halaman Utama
                    </a>
                </div>
                <div class="w-full h-auto flex-col text-blue31">
                    <div class="home-shadow-content">
                        <div class="flex items-start justify-end">
                            <label for="photo-upload" class="flex absolute items-center font-medium text-white bg-transparent hover:bg-blue31 hover:border-blue31 rounded border-2 px-3 py-1 m-8 gap-1 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="32" height="32" fill="#fff">
                                    <path d="M48 20h-5.5l-3.8-6.4c-.4-.6-1-1-1.7-1h-10c-.7 0-1.3.4-1.7 1l-3.8 6.4H16c-2.2 0-4 1.8-4 4v24c0 2.2 1.8 4 4 4h32c2.2 0 4-1.8 4-4V24c0-2.2-1.8-4-4-4zM32 46c-6.1 0-11-4.9-11-11s4.9-11 11-11 11 4.9 11 11-4.9 11-11 11zm0-18a7 7 0 1 0 0 14 7 7 0 0 0 0-14z"/>
                                </svg>
                                Ubah Foto
                            </label>
                            <input id="photo-upload" type="file" accept="image/*" class="hidden" onchange="previewAndCropPhoto(event)">
                            <img id="photo-preview" src="{{ asset('images/samplebg.jpg') }}" alt="" class="w-full h-80 object-cover rounded">
                        </div>
                        <div class="flex flex-col justify-center items-center w-full p-5 ">
                            <div class="text-lg text-blue31 flex justify-center items-center w-full h-fit rounded-xl">
                                <div class="flex w-full p-3 gap-8">
                                    <div class="w-1/4 h-fit pb-4 py-1 space-y-5 bg-white flex flex-col justify-center items-center ">
                                        <div class="w-5/6 h-fit flex flex-col items-center justify-center">
                                            <div class="w-full h-64 relative overflow-hidden bg-bluee3 border-2 border-blue31">
                                                <img id="profile-image" src="{{ asset('images/profile-sample.jpg') }}" alt="Profile Image" class="object-cover w-full h-full">
                                            </div>
                                            <label for="file-input" class="flex items-center justify-center font-normal text-base mt-1 w-full bg-blue31 text-white rounded cursor-pointer ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="20" height="32" fill="#ffff" class="hover:fill-white">
                                                    <path d="M48 20h-5.5l-3.8-6.4c-.4-.6-1-1-1.7-1h-10c-.7 0-1.3.4-1.7 1l-3.8 6.4H16c-2.2 0-4 1.8-4 4v24c0 2.2 1.8 4 4 4h32c2.2 0 4-1.8 4-4V24c0-2.2-1.8-4-4-4zM32 46c-6.1 0-11-4.9-11-11s4.9-11 11-11 11 4.9 11 11-4.9 11-11 11zm0-18a7 7 0 1 0 0 14 7 7 0 0 0 0-14z"/>
                                                </svg>
                                                Ubah Foto
                                            </label>
                                            <input type="file" id="file-input" class="hidden" accept="image/*" onchange="previewImage(event)">
                                            <p class="text-xs underline italic mt-1 text-left">Ket. format file yang didukung: JPG, PNG, JPEG. pastikan wajah terlihat dengan jelas.</p>
                                        </div>
                                        <div class="w-5/6 h-fit font-medium space-y-4">
                                            <div class="border-b-2 border-bluee3 pb-5">
                                                <h1 id="username" class="text-2xl font-extrabold">Ahmad Rayhan</h1>
                                                <h5 id="occupation" class="font-medium">Mahasiwa</h5>
                                                <h5 id="institution" class="font-medium">Universitas Airlangga</h5>
                                            </div>
                                            <div class="w-full border-b-2 border-bluee3 pb-6">
                                                <div id="description-container" class="flex flex-col space-y-1">
                                                    <h5 class="font-bold text-base">Deskripsi Biografi</h5>
                                                    <p id="description-text" class="text-blue31 text-sm font-normal pb-2">
                                                        Anda belum memiliki deskripsi apapun.
                                                    </p>
                                                    <button id="edit-button" 
                                                            class="px-4 py-1 border-2 border-blue31 rounded hover:bg-blue31 hover:text-white font-medium text-base">
                                                        Tambahkan Deskripsi
                                                    </button>
                                                </div>
                                                <div id="textarea-container" class="hidden mt-2">
                                                    <textarea id="description-textarea" 
                                                                cols="30" rows="5" 
                                                                placeholder="Tulis deskripsi tentang biografi Anda di sini..." 
                                                                class="w-full px-3 py-2 border-2 border-blue31 rounded text-sm font-normal">
                                                        </textarea>
                                                    <button id="save-button" 
                                                            class="w-full py-1 border-2 border-blue31 rounded hover:bg-blue31 hover:text-white font-medium text-base">
                                                        Simpan
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="pb-6 border-b-2 border-bluee3 space-y-2 text-sm font-normal">
                                                <h5 class="font-bold text-base">Capaian Pembelajaran</h5>
                                                <div>
                                                    <img src="{{ asset('images/content-1.png') }}" alt="" class="w-16 h-16 rounded-full border-4 border-blue31 cursor-pointer">
                                                    <a href="/learn" class="underline">Selengkapnya...</a>
                                                </div>
                                            </div>
                                            <div class="pt-3 text-sm font-bold">
                                                <div class="w-full px-4 py-2 flex justify-center items-center cursor-pointer bg-pinkee rounded transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110">
                                                    <form action="{{ route('logout') }}" method="POST" class="w-full text-center">
                                                        @csrf
                                                        <button type="submit" class="w-full">KELUAR DARI AKUN ANDA</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-3/4 flex bg-white rounded border-2 border-blue31">
                                        <div class="w-full px-6 text-base flex-col">
                                            <nav class="w-full pt-4 space-x-6 font-bold text-base border-b-2 border-bluee3">
                                                <button id="section1Button" onclick="showContent('section1')" class="pb-4 transition border-b-4 border-blue31">Biodata Diri</button>
                                                <button id="section2Button" onclick="showContent('section2')" class="pb-4 transition">Dokumen dan Layanan</button>
                                                <button id="section3Button" onclick="showContent('section3')" class="pb-4 transition">Notifikasi</button>
                                                <button id="section4Button" onclick="showContent('section4')" class="pb-4 transition">Pengaturan Lainnya</button>
                                            </nav>
                                            <div id="section1" class="w-full flex items-center justify-center py-8">
                                                <form id="" action="" method="POST" class="w-full flex flex-col gap-4">
                                                    @csrf
                                                    <div class="w-full flex gap-4 pb-8 border-b-2 border-bluee3">
                                                        <div class="w-full flex">
                                                            <div class="flex-col w-full text-start space-y-4 font-medium">
                                                                <div class="space-y-1">
                                                                    <label>Nama Depan</label>
                                                                    <input type="text" name="first_name" value="{{ old('first_name') }}" class="p-2 w-full border-2 border-bluee3 rounded focus:outline-none focus:ring-2 focus:ring-blue31">
                                                                </div>
                                                                <div class="space-y-1">
                                                                    <label>Tempat dan Tanggal Lahir</label>
                                                                    <input type="text" name="birth_place" value="{{ old('birth_place') }}" class="p-2 w-full border-2 border-bluee3 rounded focus:outline-none focus:ring-2 focus:ring-blue31">
                                                                </div>
                                                                <div class="space-y-1 flex-col w-full">
                                                                    <label>Alamat Lengkap</label>
                                                                    <input type="text" name="address" value="{{ old('address') }}" class="p-2 w-full border-2 border-bluee3 rounded focus:outline-none focus:ring-2 focus:ring-blue31">
                                                                </div>
                                                                <div class="space-y-1">
                                                                    <label>Nomor Telpon</label>
                                                                    <input type="tel" name="phone" class="p-2 w-full border-2 border-bluee3 rounded focus:outline-none focus:ring-2 focus:ring-blue31">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-full flex">
                                                            <div class="flex-col w-full text-start space-y-4 font-medium">
                                                                <div class="space-y-1">
                                                                    <label>Nama Belakang</label>
                                                                    <input type="text" name="first_name" value="{{ old('first_name') }}" class="p-2 w-full border-2 border-bluee3 rounded focus:outline-none focus:ring-2 focus:ring-blue31">
                                                                </div>
                                                                <div class="space-y-1">
                                                                    <label class="text-transparent">Tanggal Lahir</label>
                                                                    <input type="date" name="birth_date" value="{{ old('birth_date') }}" class="w-full p-1.5 border-2 border-bluee3 rounded focus:outline-none focus:ring-2 focus:ring-blue31"/>
                                                                </div>
                                                                <div class="space-y-1">
                                                                    <label for="gender" class="">Jenis Kelamin</label>
                                                                    <select name="gender" id="gender" class="form-select p-2 block w-full border-2 border-bluee3 rounded focus:outline-none focus:ring-2 focus:ring-blue31">
                                                                        <option value="">Pilih jenis kelamin Anda...</option>
                                                                        <option value="Laki-laki">Laki-laki</option>
                                                                        <option value="Perempuan">Perempuan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="space-y-1">
                                                                    <label>Email</label>
                                                                    <input type="email" name="email" class="p-2 w-full border-2 border-bluee3 rounded focus:outline-none focus:ring-2 focus:ring-blue31">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-full flex-col mt-4 pb-8 border-b-2 border-bluee3">
                                                        <div class="w-full flex gap-4">
                                                            <div class="w-full flex">
                                                                <div class="flex-col w-full text-start space-y-4 font-medium">
                                                                    <div class="text-start space-y-1">
                                                                        <label for="">Pekerjaan</label>
                                                                        <select name="occupation" id="occupation" class="w-full p-2 border-2 border-bluee3 rounded focus:outline-none focus:ring-2 focus:ring-blue31" onchange="handleOccupationChange1()">
                                                                            <option value="">Pilih Pekerjaan Anda...</option>
                                                                            <option value="Akademisi">Akademisi</option>
                                                                            <option value="Ahli Psikolog Anak">Ahli Psikolog Anak</option>
                                                                            <option value="Guru">Guru/Tenaga Pengajar</option>
                                                                            <option value="Masyarakat Umum">Masyarakat Umum</option>
                                                                            <option value="Terapis">Terapis/Klinis</option>
                                                                            <option value="Lainnya">Lainnya...</option>
                                                                        </select>
                                                                        @error('occupation')
                                                                            <p class="text-blue6a text-sm">{{ $message }}</p>
                                                                        @enderror
                                                                        <div id="other-occupation" class="hidden">
                                                                            <input type="text" name="other_occupation" id="other_occupation" placeholder="Tulis Pekerjaan Lainnya disini..." class="w-full p-2 border-2 border-bluee3 rounded focus:outline-none focus:ring-2 focus:ring-blue31">
                                                                        </div>
                                                                    </div>
                                                                    <div class="space-y-1">
                                                                        <label>Keahlian Khusus</label>
                                                                        <input type="text" name="skill" class="p-2 w-full border-2 border-bluee3 rounded focus:outline-none focus:ring-2 focus:ring-blue31">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="w-full flex">
                                                                <div class="flex-col w-full text-start space-y-4 font-medium">
                                                                    <div class="space-y-1">
                                                                        <label>Asal Instansi</label>
                                                                        <input type="text" name="institution" value="{{ old('institution') }}" class="w-full p-2 border-2 border-bluee3 rounded focus:outline-none focus:ring-2 focus:ring-blue31"/>
                                                                    </div>
                                                                    <div class="space-y-1">
                                                                        <label for="experience" class="block text-gray-700 font-medium">Durasi Pengalaman</label>
                                                                        <select id="experience" name="experience" class="p-2 block w-full border-2 border-bluee3 rounded focus:outline-none focus:ring-2 focus:ring-blue31">
                                                                            <option value="" disabled selected>Pilih Durasi Pengalaman Anda...</option>
                                                                            <option value="0">Belum Memiliki Pengalaman</option>
                                                                            <option value="1-2">1 - 2 Tahun</option>
                                                                            <option value="3-5">3 - 5 Tahun</option>
                                                                            <option value="6-10">6 - 10 Tahun</option>
                                                                            <option value="11-15">11 - 15 Tahun</option>
                                                                            <option value="16-20">16 - 20 Tahun</option>
                                                                            <option value="20+">Lebih dari 20 Tahun</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-full mt-4 flex flex-col">
                                                        <button type="button" id="editButtonBio" class="bg-blue31 py-2 px-4 rounded text-sm font-bold text-white">EDIT DAN PERBARUI BIODATA</button>
                                                        <button type="submit" id="saveButtonBio" class="hidden bg-blue31 py-2 px-4 rounded text-sm font-bold text-white">SIMPAN BIODATA</button>
                                                        <p class="font-normal text-center pt-2">Jika memerlukan bantuan, <a href="" class="underline font-medium">hubungi tim dukungan kami.</a></p>
                                                    </div>
                                                </form>
                                            </div>
                                            <div id="section2" class="w-full flex items-center justify-center py-8"  style="display: none">
                                                <div class="font-medium space-y-2">
                                                    <div class="w-full flex items-center justify-between mb-4">
                                                        <h3>Semua Dokumen (1)</h3>
                                                        <button id="" class="flex items-center justify-center p-1 border-2 border-blue31 rounded-full">
                                                            <svg class="" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5 12L5 4" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                                <path d="M19 20L19 18" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                                <path d="M5 20L5 16" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                                <path d="M19 12L19 4" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                                <path d="M12 7L12 4" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                                <path d="M12 20L12 12" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                                <circle cx="5" cy="14" r="2" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                                <circle cx="12" cy="9" r="2" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                                <circle cx="19" cy="15" r="2" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="w-full h-4/5 p-4 space-y-3 border-2 border-l-8 border-bluee3">
                                                        <div class="w-full h-fit flex">
                                                            <div class="w-4/5 flex gap-4">
                                                                <img src="{{ asset('images/content-1.png') }}" alt="Content Image" class="h-auto w-1/6 rounded border-2 border-blue31">
                                                                <table style="border-collapse: collapse; text-align: left;" class="w-full">
                                                                    <tr>
                                                                        <td>Bentuk</td>
                                                                        <td>: Sertifikat Program Pembelajaran</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Penyelenggara</td>
                                                                        <td>: Media Visual Komunikasi Anak</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tema Belajar</td>
                                                                        <td>: Belajar Autisme dengan MIKA Education</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <div class="w-1/5 text-center flex items-center justify-center">
                                                                <a href="" class="text-center font-medium text-base py-1 px-10 bg-blue31 text-white rounded-lg hover:bg-transparent hover:text-blue31 hover:border-2 hover:border-blue31">
                                                                    Tinjau
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="section3" class="w-full flex items-center justify-center py-8"  style="display: none">
                                                <div class="font-medium space-y-2">
                                                    <div class="w-full flex items-center justify-between mb-4">
                                                        <h3>Semua Notifikasi (4)</h3>
                                                        <button id="" class="flex items-center justify-center p-1 border-2 border-blue31 rounded-full">
                                                            <svg class="" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5 12L5 4" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                                <path d="M19 20L19 18" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                                <path d="M5 20L5 16" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                                <path d="M19 12L19 4" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                                <path d="M12 7L12 4" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                                <path d="M12 20L12 12" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                                <circle cx="5" cy="14" r="2" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                                <circle cx="12" cy="9" r="2" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                                <circle cx="19" cy="15" r="2" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="w-full flex flex-col space-y-4">
                                                        <div class="w-full px-4 flex rounded cursor-pointer border-2 border-bluee3 gap-4 notification">
                                                            <div class="w-5/6 flex items-center">
                                                                <div class="flex w-3 h-3 bg-blue31 rounded-full px-1 mr-2 bullet"></div>
                                                                <img src="{{ asset('images/profile-sample.jpg') }}" alt="" class="w-16 p-2 rounded-full">
                                                                <div class="w-full border-r-2 border-bluee3 flex flex-col leading-5 ml-2">
                                                                    <p class="text-lg">Anda berhasil mendapatkan sertifikat program pembelajaran.</p>
                                                                    <p id="accessTime" class="text-sm"></p>
                                                                </div>
                                                            </div>
                                                            <div class="w-1/6 flex items-center justify-center gap-6 action-buttons">
                                                                <button class="read-btn text-blue31 hover:text-blue6a">Baca</button>
                                                                <button class="delete-btn text-pinkee hover:text-blue6a">Hapus</button>
                                                            </div>
                                                        </div>
                                                        <div class="w-full px-4 flex rounded cursor-pointer border-2 border-bluee3 gap-4 notification">
                                                            <div class="w-5/6 flex items-center">
                                                                <div class="flex w-3 h-3 bg-blue31 rounded-full px-1 mr-2 bullet"></div>
                                                                <img src="{{ asset('images/profile-sample.jpg') }}" alt="" class="w-16 p-2 rounded-full">
                                                                <div class="w-full border-r-2 border-bluee3 flex flex-col leading-5 ml-2">
                                                                    <p class="text-lg">Anda berhasil mendapatkan sertifikat program pembelajaran.</p>
                                                                    <p id="accessTime" class="text-sm"></p>
                                                                </div>
                                                            </div>
                                                            <div class="w-1/6 flex items-center justify-center gap-6 action-buttons">
                                                                <button class="read-btn text-blue31 hover:text-blue6a">Baca</button>
                                                                <button class="delete-btn text-pinkee hover:text-blue6a">Hapus</button>
                                                            </div>
                                                        </div>
                                                        <div class="w-full px-4 flex rounded cursor-pointer border-2 border-bluee3 gap-4 notification">
                                                            <div class="w-5/6 flex items-center">
                                                                <div class="flex w-3 h-3 bg-bluee3 rounded-full px-1 mr-2 bullet"></div>
                                                                <img src="{{ asset('images/profile-sample.jpg') }}" alt="" class="w-16 p-2 rounded-full">
                                                                <div class="w-full border-r-2 border-bluee3 flex flex-col leading-5 ml-2">
                                                                    <p class="text-lg">Anda berhasil mendapatkan sertifikat program pembelajaran.</p>
                                                                    <p id="accessTime" class="text-sm"></p>
                                                                </div>
                                                            </div>
                                                            <div class="w-1/6 flex items-center justify-center gap-6 action-buttons">
                                                                <button class="read-btn hidden text-blue31 hover:text-blue6a">Baca</button>
                                                                <button class="delete-btn text-pinkee hover:text-blue6a">Hapus</button>
                                                            </div>
                                                        </div>
                                                        <div class="w-full px-4 flex rounded cursor-pointer border-2 border-bluee3 gap-4 notification">
                                                            <div class="w-5/6 flex items-center">
                                                                <div class="flex w-3 h-3 bg-bluee3 rounded-full px-1 mr-2 bullet"></div>
                                                                <img src="{{ asset('images/profile-sample.jpg') }}" alt="" class="w-16 p-2 rounded-full">
                                                                <div class="w-full border-r-2 border-bluee3 flex flex-col leading-5 ml-2">
                                                                    <p class="text-lg">Anda berhasil mendapatkan sertifikat program pembelajaran.</p>
                                                                    <p id="accessTime" class="text-sm"></p>
                                                                </div>
                                                            </div>
                                                            <div class="w-1/6 flex items-center justify-center gap-6 action-buttons">
                                                                <button class="read-btn hidden text-blue31 hover:text-blue6a">Baca</button>
                                                                <button class="delete-btn text-pinkee hover:text-blue6a">Hapus</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="section4" class="w-full flex items-center justify-center py-8"  style="display: none">
                                                <div class="font-medium space-y-4">
                                                    <h3 class="mt-1">Pengaturan Akun</h3>
                                                    <div class="w-full p-4 border-2 border-bluee3">
                                                        <div class="w-full">
                                                            <form action="{{ route('account.update') }}" method="POST" class="w-full" id="accountForm">
                                                                @csrf
                                                                <div class="w-full space-y-4">
                                                                    <div class="w-full flex items-center">
                                                                        <label for="phone" class="w-1/3 block text-base font-medium mb-1">Nomor Telepon</label>
                                                                        <input type="text" id="phone" name="phone" value="{{ old('phone', $user->phone) }}" class="w-2/3 p-2" readonly>
                                                                        @error('phone')
                                                                            <p class="text-blue6a text-sm">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="w-full flex items-center">
                                                                        <label for="email" class="w-1/3 block text-base font-medium mb-1">Email</label>
                                                                        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="w-2/3 pl-2" readonly>
                                                                        @error('email')
                                                                            <p class="text-blue6a text-sm">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>
                                                                    {{-- Kata sandi lama/yg terncamtum di database saat read saja, menghilang saat edit --}}
                                                                    <div id="passwordFields1" class="w-full flex items-center">
                                                                        <label for="password" class="w-1/3 block text-base font-medium mb-1">Kata Sandi</label>
                                                                        <input type="password" id="password" name="password" placeholder="{{ str_repeat('*', strlen($user->password)) }}" 
                                                                            class="w-2/3 pl-2" readonly>
                                                                    </div>
                                                                    {{-- Kata Sandi baru muncul saat Edit --}}
                                                                    <div id="passwordFields" class="hidden space-y-4">
                                                                        <div class="w-full flex items-center">
                                                                            <label for="password" class="w-1/3 block text-base font-medium mb-1">Kata Sandi Baru</label>
                                                                            <input type="password" id="password" name="password" placeholder="Tambahkan kata sandri baru Anda" class="w-2/3 pl-2">
                                                                                @error('password_confirmation')
                                                                                    <p class="text-blue6a text-sm">{{ $message }}</p>
                                                                                @enderror
                                                                        </div>
                                                                        <div class="w-full flex items-center">
                                                                            <label for="password_confirmation" class="w-1/3 block text-base font-medium mb-1">Konfirmasi Kata Sandi Baru</label>
                                                                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi kata sandi baru Anda" class="w-2/3 pl-2">
                                                                            @error('password_confirmation')
                                                                                <p class="text-blue6a text-sm">{{ $message }}</p>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="text-sm font-normal italic mt-4 py-2">
                                                                    <p>Akun anda terakhir diubah pada: <span class="font-medium text-xs">{{ $user->created_at->format('d-m-Y H:i') }}</span></p>
                                                                </div>
                                                                <div class="w-full flex gap-2">
                                                                    <button type="button" id="editButton" class="bg-blue31 border-2 border-blue31 text-white py-1 px-6 rounded">Edit Akun</button>
                                                                    <button type="submit" id="saveButton" class="bg-transparent border-2 border-blue31 text-blue31 py-1 px-6 rounded hover:bg-blue31 hover:text-white transition" disabled>Simpan</button>
                                                                </div>
                                                            </form>
                                                            <!-- Pop-Up Notification -->
                                                            <div id="successPopup" class="hidden fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex-col items-center justify-center">
                                                                <div class="bg-white w-1/3 h-1/3 rounded shadow-md text-center flex flex-col items-center justify-center">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-500 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1" fill="none"></circle>
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4"></path>
                                                                    </svg>
                                                                    <p class="font-medium text-xl">Informasi mengenai akun Anda berhasil diubah.</p>
                                                                    <button id="closePopupButton" class="mt-4 w-1/3 bg-blue31 border-2 border-blue31 text-white py-2 px-4 rounded hover:bg-transparent hover:border-2 hover:border-blue31 hover:text-blue31">Tutup</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="font-medium space-y-4 mt-8">
                                                    <h3 class="mt-1">Keamanan Akun</h3>
                                                    <div class="w-full p-4 border-2 border-bluee3">
                                                        <div class="w-full">
                                                        </div>
                                                    </div>
                                                </div>
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

        <section class="w-full h-auto">
            <div class="w-3/4 h-auto border-">
            </div>
        </section>

        @include('includes.components.main.footer')      
    
    </body>
    
    <script>
        // JS untuk menghubah/mengatur foto banner
        function previewAndCropPhoto(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = new Image();
                    img.src = e.target.result;
                    img.onload = function() {
                        const canvas = document.createElement('canvas');
                        const ctx = canvas.getContext('2d');
    
                        // Set rasio nya agar otomatis terpotong menjadi 16x9
                        const targetWidth = 1024; // width
                        const targetHeight = 576; // height
                        canvas.width = targetWidth;
                        canvas.height = targetHeight;
    
                        const scale = Math.max(targetWidth / img.width, targetHeight / img.height);
                        const x = (canvas.width - img.width * scale) / 2;
                        const y = (canvas.height - img.height * scale) / 2;
    
                        ctx.fillStyle = '#fff'; // Optional: untuk set bg
                        ctx.fillRect(0, 0, canvas.width, canvas.height);
                        ctx.drawImage(img, x, y, img.width * scale, img.height * scale);
    
                        // preview
                        const preview = document.getElementById('photo-preview');
                        preview.src = canvas.toDataURL('image/jpeg');
                    };
                };
                reader.readAsDataURL(file);
            }
        }
        


//JS Konten kiri

        // JS untuk untuk mengubah/mengatur foto profil
            function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                const image = document.getElementById('profile-image');
                image.src = e.target.result;
                }
            if (file) {
                reader.readAsDataURL(file);
                }
            }

        // JS untuk mengatur deskripsi
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
            // Ketika tombol 'Simpan' diklik
            saveButton.addEventListener('click', () => {
            const newText = descriptionTextarea.value.trim();
            descriptionText.textContent = newText || "Anda belum memiliki deskripsi apapun.";
            textareaContainer.classList.add('hidden');
            descriptionContainer.classList.remove('hidden');
            updateButtonText(); // Perbarui teks tombol
            });
            // Inisialisasi teks tombol saat halaman dimuat
            updateButtonText();
        });



// JS Konten Kanan

        // JS untuk navigasi antar section
        function showContent(id) {
            // Mengambil tombol dan menghapus kelas border aktif sebelumnya
            var buttons = document.querySelectorAll('nav button');
            buttons.forEach(function(button) {
                button.classList.remove('border-b-4', 'border-blue31');
            });
            // Menambahkan kelas border aktif pada tombol yang diklik
            if (id === 'section1') {
                document.getElementById('section1Button').classList.add('border-b-4', 'border-blue31');
                } else if (id === 'section2') {
                    document.getElementById('section2Button').classList.add('border-b-4', 'border-blue31');
                } else if (id === 'section3') {
                    document.getElementById('section3Button').classList.add('border-b-4', 'border-blue31');
                } else if (id === 'section4') {
                    document.getElementById('section4Button').classList.add('border-b-4', 'border-blue31');
                }
                // Menampilkan konten yang sesuai
                document.getElementById('section1').style.display = (id === 'section1') ? 'block' : 'none';
                document.getElementById('section2').style.display = (id === 'section2') ? 'block' : 'none';
                document.getElementById('section3').style.display = (id === 'section3') ? 'block' : 'none';
                document.getElementById('section4').style.display = (id === 'section4') ? 'block' : 'none';
                // Menyimpan pilihan user di localStorage
                localStorage.setItem('activeSection', id);
                }
                // Set tampilan default ke section1 atau berdasarkan section yang terakhir dipilih saat halaman pertama kali dimuat
                document.addEventListener("DOMContentLoaded", function() {
                    var activeSection = localStorage.getItem('activeSection') || 'section1'; // Default ke 'section1' jika tidak ada di localStorage
                    showContent(activeSection);
                    });

        // JS untuk form input pekerjaan
        function handleOccupationChange1() {
            const occupationSelect = document.getElementById('occupation');
            const otherOccupationDiv = document.getElementById('other-occupation');
            if (occupationSelect.value === 'Lainnya') {
                otherOccupationDiv.classList.remove('hidden');
                } else {
                    otherOccupationDiv.classList.add('hidden');
                    document.getElementById('other_occupation').value = '';
                }
            }

        // JS untuk form biodata diri
        document.addEventListener('DOMContentLoaded', function () {
        const editButton = document.getElementById('editButtonBio');
        const saveButton = document.getElementById('saveButtonBio');
        const inputs = document.querySelectorAll('#biodataForm input, #biodataForm select');
        // Disable all inputs by default
        inputs.forEach(input => input.setAttribute('disabled', 'true'));
        // Event listener for the "Edit and Update" button
        editButton.addEventListener('click', function () {
            // Enable all inputs
            inputs.forEach(input => input.removeAttribute('disabled'));
            // Hide the "Edit and Update" button
            editButton.classList.add('hidden');
            // Show the "Save" button
            saveButton.classList.remove('hidden');
        });
    });

    // JS untuk notifikasi
        // Menampilkan waktu akses pertama kali halaman
        window.addEventListener("load", function () {
            const accessTime = new Date();
            const formattedTime =
                String(accessTime.getDate()).padStart(2, "0") +
                "-" +
                String(accessTime.getMonth() + 1).padStart(2, "0") +
                "-" +
                accessTime.getFullYear() +
                " " +
                String(accessTime.getHours()).padStart(2, "0") +
                ":" +
                String(accessTime.getMinutes()).padStart(2, "0");
            document.querySelectorAll("#accessTime").forEach((el) => {
                el.textContent = formattedTime;
            });
        });

        // Event listener untuk tombol "Baca" dan "Hapus"
        document.addEventListener("click", function (event) {
            // Cek apakah tombol "Baca" ditekan
            if (event.target.classList.contains("read-btn")) {
                const notification = event.target.closest(".notification");
                const bullet = notification.querySelector(".bullet");
                const readButton = notification.querySelector(".read-btn");
                // Ubah bullet menjadi abu-abu
                bullet.classList.remove("bg-blue31");
                bullet.classList.add("bg-bluee3");
                // Hilangkan tombol "Baca"
                readButton.remove();
            }
            // Cek apakah tombol "Hapus" ditekan
            if (event.target.classList.contains("delete-btn")) {
                const notification = event.target.closest(".notification");
                // Hapus elemen notifikasi
                notification.remove();
            }
        });


        //JS untuk pengaturan akun
        document.addEventListener("DOMContentLoaded", () => {
            const form = document.getElementById('accountForm');
            const inputs = form.querySelectorAll('input');
            const editButton = document.getElementById('editButton');
            const saveButton = document.getElementById('saveButton');
            const passwordFields1 = document.getElementById('passwordFields1');
            const passwordFields = document.getElementById('passwordFields');
            // Pop-up elemen
            const successPopup = document.getElementById('successPopup');
            const closePopupButton = document.getElementById('closePopupButton');
            // Klik tombol Edit
            editButton.addEventListener('click', () => {
                // Ubah semua input menjadi editable
                inputs.forEach(input => input.removeAttribute('readonly'));
                // Sembunyikan password lama dan tampilkan password baru
                passwordFields1.classList.add('hidden');
                passwordFields.classList.remove('hidden');
                // Aktifkan tombol Simpan
                saveButton.removeAttribute('disabled');
                // Sembunyikan tombol Edit
                editButton.style.display = 'none';
            });
            // Submit form untuk menyimpan data
            form.addEventListener('submit', (e) => {
                e.preventDefault(); // Mencegah form refresh default
                // Simulasi proses simpan data (gunakan AJAX atau metode lain untuk menyimpan ke server)
                setTimeout(() => {
                    // Tampilkan pop-up sukses
                    successPopup.classList.remove('hidden');
                    successPopup.classList.add('flex');
                    // Reset tampilan form setelah simpan
                    inputs.forEach(input => input.setAttribute('readonly', true));
                    passwordFields1.classList.remove('hidden');
                    passwordFields.classList.add('hidden');
                    saveButton.setAttribute('disabled', true);
                    editButton.style.display = 'inline-block';
                }, 500); // Simulasi waktu proses penyimpanan
            });
            // Tutup pop-up saat tombol ditutup diklik
            closePopupButton.addEventListener('click', () => {
                successPopup.classList.add('hidden');
                successPopup.classList.remove('flex');
            });
        });

    </script>
</html>


