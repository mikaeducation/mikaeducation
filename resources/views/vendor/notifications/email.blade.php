<x-mail::message class="text-justify">

# Halo Sahabat MIKA,

Terima kasih telah mendaftar di MIKA Education!

Silakan klik tombol di bawah ini untuk memverifikasi email yang didaftarkan untuk aktivasi akun Anda, kemudian melakukan proses Login/Masuk ke dalam website:

<x-mail::button :url="$actionUrl" class="p-2">
Verifikasi Akun Anda
</x-mail::button>

Atau anda juga bisa mengakses link dibawah ini.
[{{ $actionUrl }}]({{ $actionUrl }})

Namun, jika Anda tidak merasa membuat akun di MIKA Education, maka abaikan pesan dari email ini.

Terima kasih,<br>
Tim Pengembang MIKA Education

</x-mail::message>
