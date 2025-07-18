@component('mail::message')

# Konfirmasi Penghapusan Akun

Klik tombol di bawah ini untuk mengonfirmasi penghapusan akun Anda. Tindakan ini tidak dapat dibatalkan.

@component('mail::button', ['url' => $url])
Konfirmasi Hapus Akun
@endcomponent

Jika Anda tidak merasa melakukan permintaan ini, abaikan email ini.

Terima kasih,<br>
Tim Pengembang MIKA Education

@endcomponent
