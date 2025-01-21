<div>
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
                    <div class="w-full flex items-center justify-end gap-2">
                        <button type="button" id="editButton" class="bg-blue31 border-2 border-blue31 text-white py-2 px-10 rounded">Edit Akun</button>
                        <button type="submit" id="saveButton" class="bg-transparent border-2 border-blue31 text-blue31 py-2 px-10 rounded hover:bg-blue31 hover:text-white transition" disabled>Simpan</button>
                    </div>
                </form>
                <!-- Pop-Up Notification -->
                <div id="successPopup" class="hidden fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex-col items-center justify-center">
                    <div class="bg-white w-1/3 h-1/3 rounded shadow-md text-center flex flex-col items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-500 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1" fill="none"></circle>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4"></path>
                        </svg>
                        <p class="font-medium text-xl">Informasi akun Anda berhasil diubah.</p>
                        <button id="closePopupButton" class="mt-4 w-1/3 bg-blue31 border-2 border-blue31 text-white py-2 px-4 rounded hover:bg-transparent hover:border-2 hover:border-blue31 hover:text-blue31">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full p-4 border-2 border-bluee3">
            <div class="flex">
                <div class="w-3/4 flex flex-col">
                    <h3>Hapus Akun</h3>
                    <p class="text-sm font-normal italic">
                        Proses menghapus akun, sehingga Anda tidak lagi dapat menggunakan layanan pada website ini.
                    </p>
                </div>
                <div class="w-1/4 flex items-center justify-end">
                    <button id="delete-account-btn"
                        class="text-center font-medium text-base py-2 px-8 bg-transparent border-2 border-blue31 text-blue31 rounded hover:bg-pinkee hover:text-blue31 hover:border-2 hover:border-pinkee transition">
                        Hapus Akun
                    </button>
                </div>
            </div>
            <!-- Pop-up pertama -->
            <div id="confirm-popup" class="hidden">
                <div class="w-full fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
                    <div class="w-2/5 bg-white p-10 rounded flex flex-col items-center justify-center">
                        <h3 class="text-3xl font-bold pb-4 border-b-2 border-bluee3 w-full text-center">Hapus Akun Anda</h3>
                        <p class="whitespace-pre-line text-center text-lg mt-4">Setelah akun Mika Anda dinonaktifkan, akun tersebut tidak dapat dipulihkan setelah 30 hari. Menghapus akun Mika Anda akan menyebabkan hilangnya progress data yang telah diperloeh sebelumnya.
                            
                            Jika Anda memerlukan informasi lebih lanjut atau bantuan,
                            <a href="" class="underline font-medium">hubungi tim dukungan kami.</a>
                        </p>
                        <div class="w-full mt-8 flex justify-end">
                            <button id="cancel-btn" class="w-1/2 px-4 py-2 bg-blue31 text-white rounded mr-2">Batalkan</button>
                            <button id="proceed-btn" class="w-1/2 px-4 py-2 bg-transparent border-2 border-blue31 transition rounded hover:bg-pinkee hover:border-pinkee">Lanjutkan</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pop-up kedua -->
            <div id="input-popup" class="hidden">
                <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
                    <div class="w-2/5 bg-white p-10 rounded flex flex-col items-center justify-center">
                        <h3 class="text-3xl font-bold pb-4 border-b-2 border-bluee3 w-full text-center">Konfirmasi Penghapusan Akun</h3>
                        <p class="text-center mt-4">Konfirmasi penghapusan akun anda dengan mengetikkan nomor telpon yang didaftarkan, pada form konfirmasi dibawah ini.</p>
                        <form id="delete-account-form" method="POST" action="{{ route('account.delete') }}" class="w-full mt-4 flex flex-col items-center justify-center">
                            @csrf
                            <input type="text" name="phone" placeholder="Ketikkan nomor telepon Anda yang terdaftar disini..." required class="border-2 mt-2 px-4 py-2 w-full rounded border-blue31" />
                            <div class="w-full mt-4 flex justify-end">
                                <button id="cancel-input-btn" type="button" class="w-1/2 px-4 py-2 bg-blue31 text-white rounded mr-2">Batalkan</button>
                                <button type="submit" class="w-1/2 px-4 py-2 bg-transparent border-2 border-blue31 transition rounded hover:bg-pinkee hover:border-pinkee">Nonaktifkan Akun</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="security-section" class="font-medium space-y-4 mt-8">
        <h3 class="mt-1">Keamanan Akun</h3>
        <div class="w-full p-4 border-2 border-bluee3">
            <div class="w-full flex-col space-y-4">
                <div class="w-full flex ">
                    <div class="w-4/5 flex flex-col">
                        <h3>Verifikasi 2 Langkah (<span class="italic">Two-Factor Authentication/2FA</span>)</h3>
                        <p class="text-sm font-normal italic">Meningkatkan keamanan akun Anda melaui perlindungan tambahan dengan 2 langkah otentifikasi.</p>
                    </div>
                    <div class="w-1/5 flex items-center justify-end">
                        <button id="activate-2fa" onclick="showAuthenticator()" class="text-center font-medium text-base py-1 px-5 bg-transparent border-2 border-blue31 text-blue31 rounded hover:bg-blue31 hover:text-white transition">
                            Aktifkan
                        </button>
                    </div>
                </div>
                <div id="authenticator" class=" w-full flex-col pt-4 border-t-2 border-bluee3" style="display: none;">
                    <div class="w-full flex">
                        <div class="w-4/5 pl-8 flex flex-col">
                            <h3>Authenticator App</h3>
                            <p class="text-sm font-normal italic">Gunakan aplikasi autentikasi pada smartphone untuk mendapatkan kode autentikasi dua faktor.</p>
                        </div>
                        <div class="w-1/5 flex items-center justify-center">
                            <button id="confirm-2fa" onclick="activate2FA()" class=" text-center font-medium text-base py-1 px-1 border-2 border-blue31 rounded-full hover:bg-gray-100 transition">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="#31587C" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.204 10.796L19 9C19.5453 8.45475 19.8179 8.18213 19.9636 7.88803C20.2409 7.32848 20.2409 6.67152 19.9636 6.11197C19.8179 5.81788 19.5453 5.54525 19 5C18.4548 4.45475 18.1821 4.18213 17.888 4.03639C17.3285 3.75911 16.6715 3.75911 16.112 4.03639C15.8179 4.18213 15.5453 4.45475 15 5L13.1814 6.81866C14.1452 8.46926 15.5314 9.84482 17.204 10.796ZM11.7269 8.27311L4.8564 15.1436C4.43134 15.5687 4.21881 15.7812 4.07907 16.0423C3.93934 16.3034 3.88039 16.5981 3.7625 17.1876L3.1471 20.2646C3.08058 20.5972 3.04732 20.7635 3.14193 20.8581C3.23654 20.9527 3.40284 20.9194 3.73545 20.8529L6.81243 20.2375C7.40189 20.1196 7.69661 20.0607 7.95771 19.9209C8.21881 19.7812 8.43134 19.5687 8.8564 19.1436L15.7458 12.2542C14.1241 11.2386 12.7524 9.87627 11.7269 8.27311Z" fill="#31587C"/>
                                </svg>
                            </button>
                            <div id="addSuccess" style="display: none;" class=" py-1 px-1 border-2 border-blue31 bg-blue31 rounded-full">
                                <svg width="26" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24.548 7.26651C25.2475 6.41162 25.1215 5.15157 24.2666 4.45212C23.4117 3.75266 22.1516 3.87866 21.4522 4.73355L13.7048 14.2026L10.2495 11.4383C9.38697 10.7483 8.12839 10.8881 7.43837 11.7506C6.74835 12.6132 6.8882 13.8717 7.75072 14.5618L11.9784 17.9439C13.2621 18.9709 15.1333 18.7734 16.1743 17.501L24.548 7.26651Z" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
                                </svg>                                                                                
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div id="qrcode-container" style="display: none; margin-top: 10px;">
                    <p>Scan QR Code ini menggunakan aplikasi autentikasi Anda.</p>
                    <div id="qrcode"></div>
                </div>
                <div id="otp-container" style="display: none; margin-top: 10px;">
                    <p>Masukkan kode dari aplikasi autentikasi Anda.</p>
                    <input type="text" id="otp-code" placeholder="Masukkan kode OTP">
                    <button onclick="verify2FA()">Verifikasi</button>
                </div>                                                                                                                         --}}
            </div>
        </div>
    </div>
</div>

<script>
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
                // Tampilkan tombol Simpan dan sembunyikan tombol Edit
                saveButton.style.display = 'inline-block';
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
                    // Sembunyikan tombol Simpan dan tampilkan tombol Edit
                    saveButton.style.display = 'none';
                    editButton.style.display = 'inline-block';
                }, 500); // Simulasi waktu proses penyimpanan
            });
            // Tutup pop-up saat tombol ditutup diklik
            closePopupButton.addEventListener('click', () => {
                successPopup.classList.add('hidden');
                successPopup.classList.remove('flex');
            });
            // Inisialisasi tampilan awal tombol Simpan (tersembunyi)
            saveButton.style.display = 'none';
        });

            // Hapus Akun
            document.getElementById('delete-account-btn').addEventListener('click', () => {
                document.getElementById('confirm-popup').classList.remove('hidden');
            });
            document.getElementById('cancel-btn').addEventListener('click', () => {
                document.getElementById('confirm-popup').classList.add('hidden');
            });
            document.getElementById('proceed-btn').addEventListener('click', () => {
                document.getElementById('confirm-popup').classList.add('hidden');
                document.getElementById('input-popup').classList.remove('hidden');
            });
            // Modifikasi: Pastikan tombol Batalkan menutup pop-up kedua tanpa mengirim formulir
            document.getElementById('cancel-input-btn').addEventListener('click', () => {
                document.getElementById('input-popup').classList.add('hidden'); // Tutup pop-up kedua
            });



            function showAuthenticator() {
                document.getElementById("authenticator").style.display = "block";
                document.getElementById("activate-2fa").style.display = "none";
            }
            function activate2FA() {
                document.getElementById("authenticator").style.display = "block";
                document.getElementById("addSuccess").style.display = "block";
                document.getElementById("confirm-2fa").style.display = "none";
            }
</script>