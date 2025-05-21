<div id="modalDialogPw" class="modal fade hidden relative z-50 w-3/4 md:w-0" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="fixed w-full inset-0 bg-black bg-opacity-80 transition-opacity" aria-hidden="true"></div>            
    <div class="fixed inset-0 z-10 w-full md:w-screen overflow-y-auto">
        <div class="flex w-full h-full min-h-screen items-center justify-center p-4 text-center sm:p-0">
            <div class="w-5/6 sm:w-2/3 lg:w-2/5 h-fit pr-4 pl-8 pb-8 gap-4 flex flex-col justify-between relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8">
                <div class="w-full h-[30%] pb-4 pt-6 sm:pb-4 flex justify-between">
                    <h3 class="text-3xl font-medium text-blue31 text-left underline" id="modal-title">Konfirmasi Lupa Password Akun</h3>
                    <button onclick="toggleMenu()" class="h-8 w-8 right-0 flex justify-center items-center hover:border-2 hover:rounded-full hover:border-blue31 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#31587C" class="w-6 h-6">
                            <path stroke-linecap="round" troke="#31587C" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="w-full h-[70%] text-blue31 pr-5 gap-4 flex flex-col gtext-justify overflow-y-auto scrollbar scrollbar-thumb scrollbar-thumb-rounded scrollbar-thumb-blue31 scrollbar-track-white">
                    <p class="text-justify">Konfirmasi lupa password akun anda dengan mengetikkan nomor telepon yang didaftarkan, pada form konfirmasi dibawah ini.</p>
                    {{-- FORM kONFIRMASI PNO.TELP - MUNCUL DEFAULT/KETIKA LUPA PASSWORD DI KLIK --}}
                    <form id="formPhone" method="POST" action="{{ route('password.email') }}" class="w-full gap-8 flex flex-col items-center justify-center">
                        @csrf
                        <input type="text" name="phone" placeholder="Ketikkan nomor telepon Anda yang terdaftar disini..." required class="border-2 mt-2 px-4 py-2 w-full rounded border-blue31" />
                        <div class="w-full gap-4 flex justify-between border-t-2 border-bluee3 pt-5">
                            <button type="button" onclick="toggleMenu()" class="w-1/2 px-4 py-2 bg-transparent border-2 border-blue31 transition rounded hover:bg-blue31 hover:border-blue31 hover:text-white">Kembali</button>
                            <button type="submit" class="w-1/2 px-4 py-2 bg-blue31 text-white hover:border-blue31 border-2 rounded">Konfirmasi</button>
                        </div>
                    </form>
                    {{-- FORM RESET PASSWORD - MUNCUL PASCA RESET LINK BERHASIL --}}
                    <form id="formReset" method="POST" action="{{ route('password.store') }}" class="w-full hidden">
                        @csrf
                        <input type="hidden" name="token" id="resetToken">
                        <input type="hidden" name="email" id="resetEmail">
                        <input type="password" name="password" placeholder="Ketikkan password baru Anda yang disini..." required class="border-2 mt-2 px-4 py-2 w-full rounded border-blue31" />
                        <input type="password" name="password_confirmation" placeholder="Konfirmasi password baru Anda yang disini..." required class="border-2 mt-4 px-4 py-2 w-full rounded border-blue31" />
                        <div class="w-full gap-4 mt-6 flex justify-between border-t-2 border-bluee3 pt-5">
                            <button type="button" onclick="toggleResetToPhone()" class="w-1/2 px-4 py-2 bg-transparent border-2 border-blue31 transition rounded hover:bg-blue31 hover:border-blue31 hover:text-white">Kembali</button>
                            <button type="submit" class="w-1/2 px-4 py-2 bg-blue31 text-white hover:border-blue31 border-2 rounded">Konfirmasi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    const modalDialog = document.getElementById('modalDialogPw');
    const formPhone = document.getElementById('formPhone');
    const formReset = document.getElementById('formReset');
    const resetTokenInput = document.getElementById('resetToken');
    const resetEmailInput = document.getElementById('resetEmail');

    function toggleMenu() {
        modalDialog.classList.add('hidden');
    }

    function openResetPasswordModal(token, email) {
        formPhone.classList.add('hidden');
        formReset.classList.remove('hidden');
        modalDialog.classList.remove('hidden');
        resetTokenInput.value = token;
        resetEmailInput.value = email;
    }

    function toggleResetToPhone() {
        formReset.classList.add('hidden');
        formPhone.classList.remove('hidden');
    }

    // Cek jika ada token dan email di URL, buka modal reset langsung
    window.addEventListener('DOMContentLoaded', () => {
        const params = new URLSearchParams(window.location.search);
        if (window.location.pathname.includes('/login') && params.has('token') && params.has('email')) {
            openResetPasswordModal(params.get('token'), params.get('email'));
        }
    });

    // Buka modal dari tombol "Lupa Password"
    document.querySelectorAll('.showChangePWDialog').forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            modalDialog.classList.remove('hidden');
            formPhone.classList.remove('hidden');
            formReset.classList.add('hidden');
        });
    });
</script>