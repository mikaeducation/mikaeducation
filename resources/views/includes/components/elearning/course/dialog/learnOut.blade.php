<div id="modalDialog" class="relative z-50 hidden w-3/4 md:w-0" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed w-full inset-0 bg-black bg-opacity-55 transition-opacity" aria-hidden="true"></div>            
    <div class="fixed inset-0 z-10 w-full md:w-screen overflow-y-auto">
        <div class="flex w-full h-full min-h-screen items-center justify-center p-4 text-center sm:p-0">
            <div class="w-5/6 sm:w-2/3 lg:w-2/4 h-fit flex flex-col relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8">
                <div class="w-full px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="flex flex-col items-center justify-center space-y-3">
                        <div class="mx-auto w-full h-16 flex items-center justify-center">
                            <svg class="h-full text-yellow-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                            </svg>
                        </div>
                        <div class="text-center space-y-5 pb-5">
                            <h3 class="text-3xl font-semibold text-blue31" id="modal-title">Keluar dari Pembelajaran?</h3>
                            <div class="mt-2">
                                <p class="text-blue31 font-normal text-justify md:text-center"><span class=" font-medium text-lg">Apakah Anda yakin untuk keluar dari pembelajaran yang sedang berlangsung?</span> Seluruh hasil pembelajaran akan tersimpan sebagai progress, jadi Anda dapat melanjutkannya kembali.
                                    <br><br>Jika memerlukan bantuan lebih lanjut, <a href="https://wa.me/082156226440 " class="relative text-blue31 font-medium before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full"> hubungi tim dukungan kami disini.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-bluee3 w-full bg-opacity-40 px-4 py-3 md:py-5 lg:py-8 flex justify-center items-center space-x-4 sm:px-6">
                    <button id="backBtn" type="button" class="inline-flex w-fit sm:w-1/3 justify-center items-center rounded bg-blue31 px-3 py-2 text-base md:text-lg font-medium text-white shadow-sm transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                        Lanjut Belajar
                    </button>
                    <button id="outBtn" type="button" class="inline-flex w-1/3 justify-center items-center rounded border-2 border-blue31 hover:border-2 hover:border-blue31 px-3 py-2 text-base md:text-lg font-medium text-blue31 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                        Keluar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const modal = document.getElementById('modalDialog');
        const startButton = document.getElementById('startButton'); // tombol yang buka modal
        const outBtn = document.getElementById('outBtn');
        const backBtn = document.getElementById('backBtn');
        const modalOverlay = modal.querySelector('div[aria-hidden="true"]');
    
        // Buka modal
        if (startButton) {
            startButton.addEventListener('click', function () {
                modal.classList.remove('hidden');
            });
        }
    
        // Tombol keluar
        if (outBtn) {
            outBtn.addEventListener("click", async function (event) {
                event.preventDefault(); // cegah reload default
                event.stopPropagation(); // cegah bubbling
    
                const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute("content");
                if (!csrfToken) {
                    alert("CSRF token tidak ditemukan.");
                    return;
                }
    
                const currentPath = window.location.pathname;
    
                try {
                    const response = await fetch("/save-progress-exit", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": csrfToken,
                        },
                        body: JSON.stringify({ current_path: currentPath }),
                    });
    
                    if (response.ok) {
                        const data = await response.json();
    
                        // Jika respons berhasil, arahkan ke halaman /learn
                        modal.classList.add('hidden');
                        alert('Silahkan klik OK untuk keluar dari pembelajaran.');
                        window.location.href = "/learn";
                    } else {
                        console.error("Gagal menyimpan progress. Kode status:", response.status);
                        alert("Gagal menyimpan progress. Silakan coba lagi.");
                    }
                } catch (error) {
                    console.error("Terjadi kesalahan saat menyimpan progress:", error);
                    alert("Terjadi kesalahan teknis. Silakan coba lagi.");
                }
            });
        }
    
        // Tombol batal
        if (backBtn) {
            backBtn.addEventListener('click', function (event) {
                event.stopPropagation();
                modal.classList.add('hidden');
            });
        }
    
        // Klik luar modal => tutup modal
        if (modalOverlay) {
            modalOverlay.addEventListener('click', function () {
                modal.classList.add('hidden');
            });
        }
    });
</script>
    
    