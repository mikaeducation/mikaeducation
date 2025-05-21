@component('mail::message')

# Konfirmasi Reset Password Anda

Klik tombol di bawah ini untuk mengonfirmasi perubahan password Anda...

@component('mail::button', ['url' => $resetUrl])
Konfirmasi Reset Password
@endcomponent

Jika Anda tidak merasa melakukan permintaan ini, Anda dapat mengabaikan email ini.

Terima kasih,<br>
Tim Pengembang MIKA Education

@endcomponent
