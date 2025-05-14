<!-- Modal Dialog -->
<div id="modalDialog" class="relative z-50 hidden w-3/4 md:w-0" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed w-full inset-0 bg-black bg-opacity-55 transition-opacity" aria-hidden="true"></div>            
    <div class="fixed inset-0 z-10 w-full md:w-screen overflow-y-auto">
        <div class="flex min-h-screen items-center justify-center p-4 text-center sm:p-0">
            <div class="w-full relative transform overflow-hidden rounded bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="flex flex-col items-center justify-center">
                        <div class="mx-auto w-full flex size-12 shrink-0 items-center justify-center rounded-full sm:mx-0 sm:size-10">
                            <svg class="size-10 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                            </svg>
                        </div>
                        <div class="w-full flex flex-col items-center justify-center text-justify lg:text-center">
                            <h3 class="text-3xl font-semibold text-blue31" id="modal-title">Mulai Pembelajaran?</h3>
                            <div class="mt-4 w-11/12 flex items-center justify-center">
                                <p class="text-lg text-blue31 whitespace-pre-line">
                                    Anda dapat memulai program pembelajaran jika merasa yakin dengan detail pembelajaran ini.
                                    
                                    Jika memerlukan bantuan lebih lanjut, <a href="https://wa.me/082156226440" class="relative text-blue31 font-medium underline">hubungi tim dukungan kami disini.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-bluee3 w-full bg-opacity-40 p-4 flex justify-center space-x-4 sm:px-6">
                    <button id="cancelBtn" type="button" class="inline-flex w-1/3 justify-center rounded border-2 border-blue31 px-3 py-2 text-base font-semibold text-blue31 shadow-sm transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                        Kembali
                    </button>
                    <form action="{{ route('start-course') }}" method="POST" class="inline-flex w-1/3 justify-center rounded bg-blue31 hover:border-2 hover:border-blue31 text-white transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                        @csrf
                        <input type="hidden" name="module_id" value="{{ $module->module_id }}">
                        <button id="startLearningBtn" type="submit" class="w-full h-full px-3 py-2">
                            Mulai
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Loading Screen -->
<div id="loadingScreen" style="display: none" class="fixed inset-0 flex flex-col items-center justify-center z-[50]">
    <div class="fixed w-full inset-0 bg-black bg-opacity-90 transition-opacity" aria-hidden="true"></div>            
    <div class="relative w-fit h-fit flex items-center justify-center flex-col gap-4">
        <h1 id="typingText" class="text-white text-2xl font-medium mb-4"></h1> <!-- kosong dulu, nanti diisi efek ketik -->
        <div class="relative">
            <span class="absolute w-4 h-4 bg-red-500 rounded-full animate-kiri"></span>
            <span class="absolute w-4 h-4 bg-yellow-400 rounded-full left-1/2 transform -translate-x-1/2 z-10"></span>
            <span class="absolute w-4 h-4 bg-green-400 rounded-full animate-kanan"></span>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('modalDialog');
        const startButton = document.getElementById('startButton');
        const startLearningBtn = document.getElementById('startLearningBtn');
        const cancelBtn = document.getElementById('cancelBtn');
        const loadingScreen = document.getElementById('loadingScreen');
        const typingElement = document.getElementById('typingText');
        const typingText = "Bersiap, Pembelajaran akan dimulai...!";

        // Fungsi efek ketik dengan callback
        function typeWriter(element, text, speed, callback) {
            let i = 0;
            function typing() {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(typing, speed);
                } else if (callback) {
                    callback(); // lanjutkan ke submit/redirect setelah selesai ketik
                }
            }
            typing();
        }

        // Tampilkan modal saat tombol awal diklik
        startButton.addEventListener('click', function () {
            modal.classList.remove('hidden');
        });

        // Ketika klik tombol MULAI BELAJAR
        startLearningBtn.addEventListener('click', function (e) {
            e.preventDefault(); // Cegah form submit langsung

            // Simpan flag agar halaman pembelajaran bisa diakses
            sessionStorage.setItem("canAccessCourse", "true");
            sessionStorage.setItem("currentModuleId", "{{ $module->module_id }}");

            modal.classList.add('hidden');
            typingElement.innerHTML = '';

            loadingScreen.style.display = 'flex';
            loadingScreen.classList.remove('hidden', 'fade-out');
            loadingScreen.classList.add('fade-in');

            // Mulai efek ketik setelah sedikit delay
            setTimeout(() => {
                typeWriter(typingElement, typingText, 50, () => {
                    // Setelah efek ketik selesai + 1 detik, submit form
                    setTimeout(() => {
                        document.querySelector('form[action="{{ route('start-course') }}"]').submit();
                    }, 1500);
                });
            }, 500);
        });

        // Klik batal
        cancelBtn.addEventListener('click', function () {
            modal.classList.add('hidden');
        });

        // Klik di luar modal menutup modal
        window.addEventListener('click', function (event) {
            if (event.target === modal) {
                modal.classList.add('hidden');
            }
        });
    });
</script>
