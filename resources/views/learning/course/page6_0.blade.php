<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-Learning | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @vite('public/assets/css/style.css')
        {{-- <script>document.documentElement.classList.add('js')</script> --}}
    </head>
    <body class="font-futura w-full min-h-screen flex flex-col relative">
        @include('includes.components.elearning.course.header')
    
        <section class="w-full flex-1 flex flex-col items-center justify-center text-blue31">
            <div class="w-full flex-grow flex items-start justify-start">
                {{-- Left Content --}}
                <div id="left" class="w-3/4 flex-1 max-h-[100vh] lg:max-h-[84vh] flex flex-col overflow-y-auto scrollbar scrollbar-thumb scrollbar-thumb-rounded scrollbar-thumb-blue31 scrollbar-track-gray-100">
                    <div class="w-full h-full flex flex-col pl-12 md:pr-12 mt-10">
                        <div class="h-full w-full space-y-8">
                            <div class="w-full h-[300px] md:h-[400px] lg:h-[500px] xl:h-[575px] flex bg-black rounded">
                                <div class="w-full h-full flex justify-center items-center">
                                    <div class="aspect-w-16 aspect-h-9 w-full h-full flex justify-center items-center">
                                        @include('includes.content.elearning.course.video-player', 
                                        ['src' => 'https://s3-id-jkt-1.kilatstorage.id/belajar-komunikasi-autistik/modul-5-memulai-mika.mp4'])
                                    </div>
                                </div>
                            </div>
                            <div class="w-full py-8 border-y-2 border-bluee3 space-y-4 text-lg">
                                <div class="w-full flex flex-col text-justify">
                                    <p class="">Salam, saya Margaretha<br>Materi pembelajaran MIKA Education selanjutnya adalah cara penggunaan aplikasi MIKA 1.0. Untuk menggunakan sebagai alat terapi pengguna perlu melakukan download MIKA 1.0, registrasi sebagai terapis, melakukan aktivasi sebagai terapis, mengisi data anak dan matriks perencanaan.
                                        <br><br>Penggunaan aplikasi MIKA dimulai dengan pencarian aplikasi MIKA 1.0 di Google Play Store. Buka Google Play Store pada tablet anda lalu cari icon Google Play di halaman beranda tablet lalu klik. Selanjutnya menuju ke bagian pencarian ketik kata kunci MIKA 1.0. Pilih aplikasi MIKA 1.0 dari pengembang Universitas Airlangga dan Forum Peduli Autisme Jawa Timur seperti yang tertera pada gambar yang ditampilkan. 
                                        <br><br>Selanjutnya kita akan menginstal aplikasi MIKA pada tablet. Klik tombol install pastikan tampilan preview atau tinjauan aplikasi sama seperti gambar berikut. Tunggu proses instalasi aplikasi hingga selesai, jika proses instalasi berhasil aplikasi MIKA 1.0 akan muncul didaftar aplikasi yang ada di tablet anda. Lalu klik ikon MIKA.
                                        <br><br>Selanjutnya kita akan melakukan registrasi sebagai terapis supaya bisa menggunakan aplikasi MIKA. Berikut adalah tampilan welcome aplikasi MIKA 1.0, pastikan anda mendapatkan tampilan yang sama. Selanjutnya akan muncul tampilan autentikasi user sebagai berikut, ada dua tombol di bagian kanan atas yaitu registrasi MIKA. Untuk mengaktivasi MIKA sementara, tombol merah di bagian paling kanan atas, ada tombol bantuan yang bisa anda klik untuk membaca deskripsi bantuan. Di bagian tengah ada form untuk autentikasi dengan mengisi username dan password.
                                        <br><br>Kita akan melakukan registrasi terlebih dahulu caranya dengan klik tombol registrasi yang ada di bagian tengah atau tombol registrasi MIKA di bagian kanan atas. Berikut ini adalah tampilan form registrasi yang harus diisi secara lengkap. Isian terdiri dari nama lengkap, username yang nantinya anda gunakan untuk login ke aplikasi MIKA, password, dan konfirmasi password. Pilih jenis kelamin, isikan tempat lahir, dan isikan tanggal lahir. Klik tombol ubah untuk memilih tanggal lahir anda, selanjutnya isi instansi tempat anda bekerja dan registrasi perlu juga dilengkapi dengan isian nama penanggung jawab di instansi anda. Isikan kembali institusinya. Kemudian isikan nomor telepon yang dapat dihubungi isi e-mail dan unggah sertifikat pelatihan TEACCH yang pernah anda ikuti. Setelah semua isian telah terisi dengan benar dan lengkap klik atau tekan tombol submit untuk menyelesaikan proses registrasi sebagai terapis.
                                        <br><br>Setelah registrasi, anda perlu melakukan aktivasi terlebih dahulu sebelum menggunakan MIKA. Caranya anda pilih menu aktivasi MIKA di halaman awal, isi nomor telepon yang telah didaftarkan beserta kode yang telah anda terima melalui nomor telepon atau e-mail yang telah didaftarkan pada proses registrasi sebelumnya, jika sudah klik tombol submit. Setelah registrasi berhasil anda sudah dapat login ke aplikasi MIKA dan menggunakan fitur-fitur yang tersedia di aplikasi
                                        <br><br>Fitur pertama yang akan kita gunakan adalah mengisi data anak dan matriks perencanaan anak. Kita mulai dengan login menggunakan akun yang telah diaktivasi. Isi username dan password, setelah itu klik tombol login. Jika login berhasil tampilan yang akan muncul adalah beranda user, berikut ini adalah beranda sebagai terapis. Selanjutnya kita akan memulai pengisian data anak, klik dashboard anak di bagian tengah lalu pilih menu registrasi anak baru dan isi form profil anak secara lengkap isian terdiri dari nama lengkap anak, jenis kelamin anak, tempat lahir anak, tanggal lahir anak, nama orang tua atau wali anak, serta tanggal masuk anak memulai terapi. Selanjutnya isilah deskripsi biologis anak, dan level MIKA yang akan dilakukan. Secara umum anak yang baru didaftarkan akan memulai pada level satu, namun level ini dapat disesuaikan sesuai dengan kemampuan anak berdasarkan penilaian dan pengamatan terapis.
                                        <br><br>Pengisian matriks perencanaan anak terdiri dari komponen komunikasi interaksi sosial perilaku berulang dan minat terbatas, pemrosesan inderawi, dan pemrosesan informasi atau gaya belajar. Cara yang dilakukan adalah dengan mengklik tombol ubah pada komponen yang bersesuaian jika salah satu tombol ubah diklik. Di sini akan muncul pilihan kategori planning matriks anda bisa memilih salah satu kategori untuk diisi, misalnya kita akan memilih kategori komunikasi selanjutnya akan muncul uraian apa saja yang harus dinilai pada komunikasi.
                                        <br><br>Terapis mengisi asesmen awal sesuai dengan kemampuan anak, misalnya pada perhatian bersama melihat ke arah anda menunjuk dan berbagi kesenangan. 
                                        <br><br>Klik tombol minus jika kemampuan tersebut belum muncul pada anak atau anak belum memiliki kemampuan tersebut.
                                        <br><br>Klik tombol tambah atau plus jika kemampuan sudah muncul pada anak atau anak telah mempunyai kemampuan tersebut. 
                                        <br><br>Berikan asesmen yang sesuai dengan kemampuan anak untuk semua komponen setelah itu klik simpan dan klik submit pada form registrasi anak. 
                                        <br><br>Demikianlah cara memulai penggunaan MIKA 
                                        selamat belajar dan selamat menggunakan aplikasi MIKA 1.0
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Right Content --}}
                @include('includes.components.elearning.course.section')
            </div>
        </section>

    @include('includes.components.elearning.course.footer')
    
    </body>

</html>
