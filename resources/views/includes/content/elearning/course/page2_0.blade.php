{{-- #Right Content Page (Submint, Mulai sekaran dan Selanjutnya) --}}
<div class="w-full lg:border-l-8 border-gray-100 pl-0 lg:pl-10 mt-0 lg:mt-8">
    <div class="space-y-8">
        <div class="text-xl space-y-2 ">
            <h6 class="font-medium">Penilaian Belajar</h6>
            <p><span class=" text-2xl font-bold">Asessmen I:</span> Seputar Autisme, Metode pendekatan TEACCH, dan Aplikasi Belajar MIKA 1.0</p>
        </div>
        <div class="flex flex-col md:flex-row w-full h-max gap-8 px-8 py-8 bg-bluee3 text-lg font-medium">
            <div class="w-full space-y-4">
                <h5 >Detail Penilaian</h5>
                <div class="w-full flex gap-12 md:gap-12">
                    <div class="text-base">
                        <p>Batas Waktu</p>
                        <time datetime="PT25M" class="text-sm font-normal">Tidak terbatas</time>
                    </div>
                    <div class="text-base">
                        <p>Kesempatan</p>
                        <time datetime="PT25M" class="text-sm font-normal">Tidak Terbatas</time>
                    </div>
                </div>
            </div>
            <div class="w-full flex items-end md:justify-end">
                <a href="javascript:void(0)" id="startButtonNow" class="text-white w-3/4 md:w-3/4 lg:w-2/3 flex justify-center items-center text-center transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                    <div class="w-full py-2 bg-blue31 text-base md:text-lg rounded-xl">Mulai Sekarang</div></a>
            </div>
        </div>
        <div class="w-full border-4 px-8 py-5 space-y-5 text-lg border-bluee3">
            <h5 class="font-medium">Nilai Anda</h5>
            <p class="text-base text-justify whitespace-pre-line"> Anda belum menyelesaikan penilaian ini. Silahkan selesaikan terlebih dahulu untuk mengetahui skor tertinggi Anda.
                Dibutuhkan <span class=" font-medium">nilai 80% atau lebih tinggi pada Bagian 1</span> untuk lulus.
                <span class="text-xl font-medium">_ _</span>
            </p>
        </div>
    </div>
    <div class="w-full space-x-10 mt-14 flex justify-end items-center">
        <a href="/course" class="text-base flex text-blue31 font-semibold">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#6AA4D9" viewBox="0 0 24 24">
                <path d="M15.707 4.707a1 1 0 0 0-1.414 0L7.293 12l6.293 7.293a1 1 0 1 0 1.414-1.414L9.414 12l6.293-6.121a1 1 0 0 0 0-1.414z" />
            </svg>
            Sebelumnya
        </a>
        <a href="javascript:void(0)" id="startButtonNext" class="text-base flex text-blue31 font-semibold">Selanjutnya
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#6AA4D9" viewBox="0 0 24 24">
                <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
            </svg>
        </a>
    </div>
</div>
<!-- Form dialog -->
<div id="modalDialog1" class="relative z-50 hidden w-3/4 md:w-0" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed w-full inset-0 bg-black bg-opacity-55 transition-opacity" aria-hidden="true"></div>            
    <div class="fixed inset-0 z-10 w-full md:w-screen overflow-y-auto">
        @include('includes.components.elearning.course.dialog.startAsessmen2_0')
    </div>
</div>

<script>
    function handleMenu() {
        const menu = document.getElementById('menuModul');

        if (menu.classList.contains('hidden')) {
            // Tampilkan menu dengan animasi slide-in
            menu.classList.remove('hidden');
            menu.classList.remove('animate-slideOut');
            menu.classList.add('animate-slideIn');
        } else {
            // Sembunyikan menu dengan animasi slide-out
            menu.classList.remove('animate-slideIn');
            menu.classList.add('animate-slideOut');
            // Tambahkan kelas 'hidden' setelah animasi selesai
            menu.addEventListener('animationend', () => {
                if (menu.classList.contains('animate-slideOut')) {
                    menu.classList.add('hidden');
                }
            }, { once: true });
        }
    }
</script>