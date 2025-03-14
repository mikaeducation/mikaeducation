<div class="flex min-h-screen items-center justify-center p-4 text-center sm:p-0">
    <div class="w-full relative transform overflow-hidden rounded bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
        <div class="px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
            <div class="flex flex-col items-center justify-center">
                <div class="mx-auto w-full flex size-12 shrink-0 items-center justify-center rounded-full sm:mx-0 sm:size-10">
                    <svg class="size-10 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                    </svg>
                </div>
                <div class="text-justify lg:text-center">
                    <h3 class="text-3xl font-semibold text-blue31" id="modal-title">Mulai Pembelajaran?</h3>
                    <div class="mt-4">
                        <p class="text-medium text-blue31 whitespace-pre-line">Anda dapat memulai program pembelajaran jika merasa yakin dengan detail pembelajaran ini.
                            
                            Jika memerlukan bantuan lebih lanjut, <a href="https://wa.me/082156226440 " class="relative text-blue31 font-medium before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full"> hubungi tim dukungan kami disini.</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-bluee3 w-full bg-opacity-40 px-4 py-3 flex justify-center space-x-4 sm:px-6">
            <button id="cancelBtn" type="button" class="inline-flex w-1/3 justify-center rounded border-2 border-blue31 px-3 py-2 text-base font-semibold text-blue31 shadow-sm transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                Kembali
            </button>
            <button id="startLearningBtn" type="button" class="inline-flex w-1/3 justify-center rounded bg-blue31 hover:border-2 hover:border-blue31 px-3 py-2 text-base font-semibold text-white transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                Mulai
            </button>
        </div>
    </div>
</div>

<script>
    // Mendapatkan elemen modal dan tombol
    const modal = document.getElementById('modalDialog'); // Ganti ID sesuai dengan modal yang benar
        const startButton = document.getElementById('startButton'); // Tombol untuk membuka modal
        const startLearningBtn = document.getElementById('startLearningBtn');
        const cancelBtn = document.getElementById('cancelBtn');

        // Menampilkan modal ketika tombol "Mulai Belajar" diklik
        startButton.addEventListener('click', function() {
            modal.classList.remove('hidden'); // Menampilkan modal
        });

        // Menutup modal ketika tombol "Mulai" diklik
        startLearningBtn.addEventListener('click', function() {
            modal.classList.add('hidden'); // Menyembunyikan modal
                alert('Silahkan, klik tombol OK dibawah ini untuk memulai pembelajaran!');
            window.location.href = '/course';
        });

        // Menutup modal ketika tombol "Batal" diklik
        cancelBtn.addEventListener('click', function() {
            modal.classList.add('hidden'); // Menyembunyikan modal
        });

        // Menutup modal jika klik di luar modal
        window.addEventListener('click', function(event) {
            if (event.target === modal) {
                modal.classList.add('hidden');
            }
        });
</script>