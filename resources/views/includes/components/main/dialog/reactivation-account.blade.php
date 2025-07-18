<div id="modalDialogReactive" class="modal fade hidden relative z-50 w-3/4 md:w-0" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="fixed w-full inset-0 bg-black bg-opacity-80 transition-opacity" aria-hidden="true"></div>            
    <div class="fixed inset-0 z-10 w-full md:w-screen overflow-y-auto">
        <div class="flex w-full h-full min-h-screen items-center justify-center p-4 text-center sm:p-0">
            <div class="w-5/6 sm:w-2/3 lg:w-2/5 h-fit pr-4 pl-8 pb-8 gap-4 flex flex-col justify-between relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8">
                <div class="w-full h-[30%] pb-4 pt-6 sm:pb-4 flex justify-between">
                    <h3 class="text-3xl font-medium text-blue31 text-left underline" id="modal-title">Konfirmasi Re-Aktivasi Akun</h3>
                    <button onclick="toggleMenu()" class="h-8 w-8 right-0 flex justify-center items-center hover:border-2 hover:rounded-full hover:border-blue31 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#31587C" class="w-6 h-6">
                            <path stroke-linecap="round" troke="#31587C" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="w-full h-[70%] text-blue31 pr-5 gap-4 flex flex-col gtext-justify overflow-y-auto scrollbar scrollbar-thumb scrollbar-thumb-rounded scrollbar-thumb-blue31 scrollbar-track-white">
                    <p class="text-justify">Konfirmasi proses aktivasi kembali akun Anda dengan mengetikkan nomor telepon dan password yang pernah didaftarkan, pada form konfirmasi dibawah ini.</p>
                    @if (session('status'))
                        <div class="text-blue31 mb-4 text-center">{{ session('status') }}</div>
                    @endif
                    <form method="POST" action="{{ route('reactivate.submit') }}">
                        @csrf
                        <div class="mb-2">
                            <input type="text" name="phone" placeholder="Ketikkan nomor telepon Anda yang terdaftar disini..." class="border-2 mt-2 px-4 py-2 w-full rounded border-blue31" required>
                            @error('phone')
                                <div class="text-pinkee text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <input type="password" name="password" placeholder="Ketikkan password Anda yang terdaftar disini..." class="border-2 mt-2 px-4 py-2 w-full rounded border-blue31" required>
                            @error('password')
                                <div class="text-pinkee text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="w-full gap-4 flex justify-between border-t-2 border-bluee3 pt-5">
                            <button type="cancelReactive" type="button" class="w-1/2 px-4 py-2 bg-blue31 text-white hover:border-blue31 border-2 rounded">Konfirmasi Aktifkan Akun</button>
                            <button id="checkAccountReactive" type="button" class="w-1/2 px-4 py-2 bg-transparent border-2 border-blue31 transition rounded hover:bg-blue31 hover:border-blue31 hover:text-white">Kembali</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Elemen penting
        const modalDialog = document.getElementById('modalDialogReactive');
        const cancelReactive = document.getElementById('cancelReactive');
        const checkAccountReactive = document.getElementById('checkAccountReactive');
        const showReactivationModal = document.getElementById('showReactivationModal');
        const reactivateNotice = document.getElementById('reactivate-notice');

        // Tombol batal/keluar dari modal
        cancelReactive?.addEventListener('click', function () {
            modalDialog.classList.add('hidden');
        });
        
        // Tombol konfirmasi aktivasi ulang (submit form dalam modal)
        checkAccountReactive?.addEventListener('click', function () {
            const formReactive = document.querySelector('#modalDialog form');
            if (formReactive) formReactive.submit();
        });

        // Tombol close X di pojok
        window.toggleMenu = function () {
            modalDialog.classList.add('hidden');
        }

        // Jika tombol "Lakukan Aktivasi akun Anda disini" diklik
        showReactivationModal?.addEventListener('click', function (event) {
            event.preventDefault();
            modalDialog.classList.remove('hidden');
        });

        // Jika server memberikan session flash untuk reaktivasi
        @if (session('reactivate'))
            reactivateNotice?.classList.remove('hidden');
        @endif
    });
</script>
