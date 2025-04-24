<section id="course-bar" class="xl:w-1/4 lg:w-1/3 w-[40%] h-full flex flex-col items-center justify-start bg-[#fbfbfb] text-blue31 transition-all duration-300 overflow-hidden">
    <div class="w-full h-fit mt-8  text-lg flex flex-col items-center justify-start gap-8">
        <div class="w-4/5 gap-8 flex flex-col items-center justify-start">
            <div class="w-full h-fit flex justify-between items-center transition-all duration-300">
                <button id="toggle-btn" class="w-fit h-fit flex items-center justify-center bg-blue31 rounded-full">
                    <svg id="icon-arrow" width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg" class="transition-transform duration-300 rotate-180 w-8 h-8">
                        <path d="M10.7408 18.7952L25.0228 8.7978C25.553 8.42664 26.2816 8.80596 26.2816 9.45318V28.5468C26.2816 29.194 25.553 29.5733 25.0228 29.2022L10.7408 19.2048C10.5986 19.1053 10.5986 18.8947 10.7408 18.7952Z" fill="white" />
                    </svg>
                </button>
                <h3 id="title" class="text-xl text-blue31 font-semibold transition-opacity duration-300">Daftar Modul</h3>
            </div>
            <div id="progress-section" class="w-full h-fit text-lg text-blue31 font-light space-y-1 pb-6 border-b-2 border-bluee3 transition-opacity duration-300 relative">
                <div class="w-full h-3 rounded-full bg-bluee3 flex-col">
                    <div class="w-[0%] h-full bg-blue31 rounded-l-full" style="width: 0%"></div>
                </div>
                <p>0% Progress selesai</p>
            </div>
        </div>
        <div id="main-content" class="w-full h-full px-8 pb-8 max-h-[57vh] space-y-4 overflow-y-auto transition-all duration-300 ease-in-out scrollbar-gutter-stable scrollbar scrollbar-thumb scrollbar-thumb-rounded scrollbar-thumb-blue31 scrollbar-track-gray-100">
            <div id="modul-introduce" data-modul="introduce" class="modul w-full h-fit gap-4 font-medium flex flex-col items-center justify-between rounded">
                <button onclick="toggleSubmodul('modul-introduce-points', this)" class="w-full flex items-start justify-between">
                    <div class="flex items-start justify-center gap-2 pr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#31587C" 
                        viewBox="0 0 24 24"
                        class="transition-transform duration-300 ease-in-out rotate-0 mt-1">
                        <path d="M4.707 8.293a1 1 0 0 1 1.414 0L12 14.586l5.879-6.293a1 1 0 1 1 1.414 1.414L12 17l-7.293-7.293a1 1 0 0 1 0-1.414z" />
                        </svg>
                        <h3 id="modul-introduce-tittle" class="flex text-left text-xl">Pengenalan</h3>
                    </div>
                    <p class="submodul-num-point"></p>
                    <div class="modul-finished hidden"></div>
                </button>
                <div id="modul-introduce-points" class="w-full font-normal pl-3 text-base text-justify">
                    <p class="submodul-point w-full border-l-2 pl-6 py-2 border-blue31">Mengenal lebih dekat dengan personil tim MIKA 1.0</p>
                </div>
            </div>
            <div id="modul-asessmen1" data-modul="asessmen1" class="modul w-full h-fit gap-4 font-medium flex flex-col items-center justify-between rounded">
                <button onclick="toggleSubmodul('modul-asessmen1-points', this)" class="w-full flex items-start justify-between">
                    <div class="flex items-start justify-center gap-2 pr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#31587C" 
                        viewBox="0 0 24 24"
                        class="transition-transform duration-300 ease-in-out rotate-0 mt-1">
                        <path d="M4.707 8.293a1 1 0 0 1 1.414 0L12 14.586l5.879-6.293a1 1 0 1 1 1.414 1.414L12 17l-7.293-7.293a1 1 0 0 1 0-1.414z" />
                        </svg>
                        <h3 id="modul-asessmen1-tittle" class="flex text-left text-xl">Asessmen I</h3>
                    </div>
                    <p class="submodul-num-point"></p>
                    <div class="modul-finished hidden"></div>
                </button>
                <div id="modul-asessmen1-points" class="w-full font-normal pl-3 text-base text-justify">
                    <p class="submodul-point w-full border-l-2 pl-6 py-2 border-blue31"><span class="font-medium">Pre-Test:</span> Seputar Autisme, Metode TEACCH dan Aplikasi Belajar MIKA 1.1</p>
                    <p class="submodul-point w-full border-l-2 pl-6 py-2 border-blue31"><span class="font-medium">Evaluasi:</span> Keyakinan Penggunaan MIKA 1.0</p>
                </div>
            </div>
            <div id="submodul-list" class="w-full h-fit space-y-4">
                <div id="submodul1" data-modul="submodul1" class=" modul w-full h-fit gap-4 font-medium flex flex-col items-center justify-between rounded">
                    <button onclick="toggleSubmodul('submodul1-points', this)" class="w-full flex items-start justify-between">
                        <div class="flex items-start justify-center gap-2 pr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#31587C" 
                            viewBox="0 0 24 24"
                            class="transition-transform duration-300 ease-in-out rotate-0 mt-1">
                            <path d="M4.707 8.293a1 1 0 0 1 1.414 0L12 14.586l5.879-6.293a1 1 0 1 1 1.414 1.414L12 17l-7.293-7.293a1 1 0 0 1 0-1.414z" />
                            </svg>
                            <h3 id="submodul1-tittle" class="w-full  flex text-left text-xl">Gangguan Spektrum Autisme</h3>
                        </div>
                        <p class="submodul-num-point"></p>
                        <div class="modul-finished hidden"></div>
                    </button>
                    <div id="submodul1-points" class="w-full font-normal pl-3 text-base text-justify">
                        <p class="submodul-point w-full border-l-2 pl-6 border-blue31"><span class="font-medium">Mehami Autisme:</span> Memahami apa itu Autisme Spektrum Disorder</p>
                        <p class="submodul-point w-full border-l-2 pl-6 py-2 border-blue31"><span class="font-medium">Komunikasi Autistik:</span> Karakteristik pra komunikasi, ekspresif, reseptif, pragmatis dan strategi komunikasi</p>
                        <p class="submodul-point w-full border-l-2 pl-6 py-2 border-blue31"><span class="font-medium">Rangkuman Materi:</span> Gangguan Spektrum Autisme</p>
                        <p class="submodul-point w-full border-l-2 pl-6 py-2 border-blue31"><span class="font-medium">Uji Pengetahuan:</span> Gangguan Spektrum Autisme</p>
                    </div>
                </div>
                <div id="submodul2" data-modul="submodul2" class="modul w-full h-fit gap-4 font-medium flex flex-col items-center justify-between rounded">
                    <button onclick="toggleSubmodul('submodul2-points', this)" class="w-full flex items-start justify-between">
                        <div class="flex items-start justify-center gap-2 pr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#31587C" 
                            viewBox="0 0 24 24"
                            class="transition-transform duration-300 ease-in-out rotate-0 mt-1">
                            <path d="M4.707 8.293a1 1 0 0 1 1.414 0L12 14.586l5.879-6.293a1 1 0 1 1 1.414 1.414L12 17l-7.293-7.293a1 1 0 0 1 0-1.414z" />
                            </svg>
                            <h3 id="submodul2-tittle" class="flex text-left text-xl">Matriks Perencanaan</h3>
                        </div>
                        <p class="submodul-num-point"></p>
                        <div class="modul-finished hidden"></div>
                    </button>
                    <div id="submodul2-points" class="w-full font-normal pl-3 text-base text-justify">
                        <p class="submodul-point w-full border-l-2 pl-6 border-blue31"><span class="font-medium">Observasi, Pencatatan Karakteristik, Dampak dan Strategi:</span> Komunikasi, Interaksi Sosial, Perilaku, Bermain, Pemrosesan Informasi, Sensoris dan Motorik</p>
                        <p class="submodul-point w-full border-l-2 pl-6 py-2 border-blue31"><span class="font-medium">Rangkuman Materi:</span> Matriks Perencanaan</p>
                        <p class="submodul-point w-full border-l-2 pl-6 py-2 border-blue31"><span class="font-medium">Uji Pengetahuan:</span> Matriks Perencanaan</p>
                        <p class="submodul-point w-full border-l-2 pl-6 py-2 border-blue31"><span class="font-medium">Latihan Berfikir:</span> Matriks Perencanaan</p>
                    </div>
                </div>
                <div id="submodul3" data-modul="submodul3" class="modul w-full h-fit gap-4 font-medium flex flex-col items-center justify-between rounded">
                    <button onclick="toggleSubmodul('submodul3-points', this)" class="w-full flex items-start justify-between">
                        <div class="flex items-start justify-center gap-2 pr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#31587C" 
                            viewBox="0 0 24 24"
                            class="transition-transform duration-300 ease-in-out rotate-0 mt-1">
                            <path d="M4.707 8.293a1 1 0 0 1 1.414 0L12 14.586l5.879-6.293a1 1 0 1 1 1.414 1.414L12 17l-7.293-7.293a1 1 0 0 1 0-1.414z" />
                            </svg>
                            <h3 id="submodul3-tittle" class="flex text-left text-xl">Pembelajaran Terstruktur</h3>
                        </div>
                        <p class="submodul-num-point"></p>
                        <div class="modul-finished hidden"></div>
                    </button>
                    <div id="submodul3-points" class="w-full font-normal pl-3 text-base text-justify">
                        <p class="submodul-point w-full border-l-2 pl-6 border-blue31"><span class="font-medium">Belajar Terstruktur:</span> Struktur Lingkungan Fisik, Alat bantu visual, jadwal visual dan Sistem Kerja</p>
                        <p class="submodul-point w-full border-l-2 pl-6 py-2 border-blue31"><span class="font-medium">Rangkuman Materi:</span> Pembelajaran Terstruktur</p>
                        <p class="submodul-point w-full border-l-2 pl-6 py-2 border-blue31"><span class="font-medium">Uji Pengetahuan:</span> Pembelajaran Terstruktur</p>
                        <p class="submodul-point w-full border-l-2 pl-6 py-2 border-blue31"><span class="font-medium">Latihan Berfikir:</span> Pembelajaran Terstruktur</p>
                    </div>
                </div>
                <div id="submodul4" data-modul="submodul4" class="modul w-full h-fit gap-4 font-medium flex flex-col items-center justify-between rounded">
                    <button onclick="toggleSubmodul('submodul4-points', this)" class="w-full flex items-start justify-between">
                        <div class="flex items-start justify-center gap-2 pr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#31587C" 
                            viewBox="0 0 24 24"
                            class="transition-transform duration-300 ease-in-out rotate-0 mt-1">
                            <path d="M4.707 8.293a1 1 0 0 1 1.414 0L12 14.586l5.879-6.293a1 1 0 1 1 1.414 1.414L12 17l-7.293-7.293a1 1 0 0 1 0-1.414z" />
                            </svg>
                            <h3 id="submodul4-tittle" class="flex text-left text-xl">Media Visual Komunikasi Anak</h3>
                        </div>
                        <p class="submodul-num-point"></p>
                        <div class="modul-finished hidden"></div>
                    </button>
                    <div id="submodul4-points" class="w-full font-normal pl-3 text-base text-justify">
                        <p class="submodul-point w-full border-l-2 pl-6 border-blue31"><span class="font-medium">Memulai MIKA 1.0:</span> Instalasi dan registrasi MIKA 1.0 Mobile</p>
                        <p class="submodul-point w-full border-l-2 pl-6 py-2 border-blue31"><span class="font-medium">Administratif MIKA 1.0:</span> Alur belajar dan skoring dalam MIKA 1.0 Mobile</p>
                        <p class="submodul-point w-full border-l-2 pl-6 py-2 border-blue31"><span class="font-medium">Studi Kasus:</span> Administrasi MIKA1.0</p>
                        <p class="submodul-point w-full border-l-2 pl-6 py-2 border-blue31"><span class="font-medium">Evaluasi & Interpretasi:</span> Skoring tiap Level dan Interpretasi yang berdampak pada proses pembelajaran</p>
                        <p class="submodul-point w-full border-l-2 pl-6 py-2 border-blue31"><span class="font-medium">Rangkuman Materi:</span> Media Visual Komunikasi Anak</p>
                    </div>
                </div>
            </div>
            <div id="modul-evaluative" data-modul="evaluative" class="modul w-full h-fit gap-4 font-medium flex flex-col items-center justify-between rounded">
                <button onclick="toggleSubmodul('modul-evaluative-points', this)" class="w-full flex items-center justify-between">
                    <div class="flex items-start justify-center gap-2 pr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#31587C" 
                        viewBox="0 0 24 24"
                        class="transition-transform duration-300 ease-in-out rotate-0 mt-1">
                        <path d="M4.707 8.293a1 1 0 0 1 1.414 0L12 14.586l5.879-6.293a1 1 0 1 1 1.414 1.414L12 17l-7.293-7.293a1 1 0 0 1 0-1.414z" />
                        </svg>
                        <h3 id="modul-evaluative-tittle" class="flex text-left text-xl">Uji Praktek</h3>
                    </div>
                    <p class="submodul-num-point"></p>
                    <div class="modul-finished hidden"></div>
                </button>
                <div id="modul-evaluative-points" class="w-full font-normal pl-3 text-base text-justify">
                    <p class="submodul-point w-full border-l-2 pl-6 border-blue31"><span class="font-medium">Simulasi:</span> Penggunaan MIKA 1.0</p>
                </div>
            </div>
            <div id="modul-asessmen2" data-modul="asessmen2" class="modul w-full h-fit gap-4 font-medium flex flex-col items-center justify-between rounded">
                <button onclick="toggleSubmodul('modul-asessmen2-points', this)" class="w-full flex items-center justify-between">
                    <div class="flex items-start justify-center gap-2 pr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#31587C" 
                        viewBox="0 0 24 24"
                        class="transition-transform duration-300 ease-in-out rotate-0 mt-1">
                        <path d="M4.707 8.293a1 1 0 0 1 1.414 0L12 14.586l5.879-6.293a1 1 0 1 1 1.414 1.414L12 17l-7.293-7.293a1 1 0 0 1 0-1.414z" />
                        </svg>
                        <h3 id="modul-asessmen2-tittle" class="flex text-left text-xl">Asessmen II</h3>
                    </div>
                    <p class="submodul-num-point"></p>
                    <div class="modul-finished hidden"></div>
                </button>
                <div id="modul-asessmen2-points" class="w-full font-normal pl-3 text-base text-justify">
                    <p class="submodul-point w-full border-l-2 pl-6 border-blue31"><span class="font-medium">Asessmen II:</span> Uji dan evaluasi akhir untuk pengembang</p>
                    <p class="submodul-point w-full border-l-2 pl-6 py-2 border-blue31"><span class="font-medium">Evaluasi:</span> Keyakinan Penggunaan MIKA 1.0 & Kepuasan Penggunaan MIKA Education sebagai sumber belajar</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // Ambil semua submodul dan atur agar tertutup secara default
    const allSubmoduls = document.querySelectorAll("[id$='-points']");
    allSubmoduls.forEach(submodul => {
        submodul.style.opacity = "0";
        submodul.style.transform = "translateY(-10px)";
        submodul.style.maxHeight = "0px";
        submodul.style.overflow = "hidden";
        submodul.style.transition = "opacity 0.4s ease, transform 0.4s ease, max-height 0.4s ease-in-out";
    });

    // Mapping URL path ke ID submodul, bisa beberapa URL per modul
    const urlToModulMapping = [
        {
            routes: ['/course'],
            modulId: 'modul-introduce-points'
        },
        {
            routes: ['/page2_0', '/page2_1', '/page2_2', '/page2_3'],
            modulId: 'modul-asessmen1-points'
        },
        {
            routes: ['/page3_0', '/page3_1_0', '/page3_1_1', '/page3_1_2', '/page3_1_3', '/page3_1_4', '/page3_2', '/page3_3'],
            modulId: 'submodul1-points'
        },
        {
            routes: ['/page4_0', '/page4_1', '/page4_2', '/page4_3'],
            modulId: 'submodul2-points'
        },
        {
            routes: ['/page5_0', '/page5_1', '/page5_2', '/page5_3'],
            modulId: 'submodul3-points'
        },
        {
            routes: ['/page6_0', '/page6_1_0', '/page6_1_1', '/page6_2', '/page6_3', '/page7'],
            modulId: 'submodul4-points'
        },
        {
            routes: ['/page7'],
            modulId: 'modul-evaluative-points'
        },
        {
            routes: ['/page8_0', '/page8_1', '/page8_2', '/page8_3_0', '/page8_3_1'],
            modulId: 'modul-asessmen2-points'
        }
    ];

    // Dapatkan path saat ini
    const currentPath = window.location.pathname;

    // Cari ID modul yang sesuai dengan path
    let targetId = '';
    urlToModulMapping.forEach(mapping => {
        if (mapping.routes.includes(currentPath)) {
            targetId = mapping.modulId;
        }
    });

    // Jika ditemukan, buka submodul terkait
    if (targetId) {
        const targetSubmodul = document.getElementById(targetId);

        if (targetSubmodul) {
            targetSubmodul.style.maxHeight = targetSubmodul.scrollHeight + "px";
            targetSubmodul.style.opacity = "1";
            targetSubmodul.style.transform = "translateY(0)";

            // Cari tombol & ikon panah untuk animasi rotasi
            const parent = targetSubmodul.closest('div');
            const toggleButton = parent?.querySelector('button');
            const arrowIcon = toggleButton?.querySelector('svg');

            if (arrowIcon) {
                arrowIcon.classList.add("rotate-180");
            }
        }
    }
});


// Mengatur Progress, Poin submodul dan ikon modul selesai
document.addEventListener("DOMContentLoaded", function () {
    const currentPath = window.location.pathname;

    const allPages = [
        "/course",
        "/page2_0", "/page2_1", "/page2_2", "/page2_3",
        "/page3_0", "/page3_1_0", "/page3_1_1", "/page3_1_2", "/page3_1_3", "/page3_1_4", "/page3_2", "/page3_3",
        "/page4_0", "/page4_1", "/page4_2", "/page4_3",
        "/page5_0", "/page5_1", "/page5_2", "/page5_3",
        "/page6_0", "/page6_1_0", "/page6_1_1", "/page6_2", "/page6_3",
        "/page7",
        "/page8_0", "/page8_1", "/page8_2", "/page8_3_0", "/page8_3_1",
    ];

    const modulePages = {
        "modul-introduce": ["/course"],
        "modul-asessmen1": ["/page2_0", "/page2_1", "/page2_2", "/page2_3"],
        "submodul1": ["/page3_0", "/page3_1_0", "/page3_1_1", "/page3_1_2", "/page3_1_3", "/page3_1_4", "/page3_2", "/page3_3"],
        "submodul2": ["/page4_0", "/page4_1", "/page4_2", "/page4_3"],
        "submodul3": ["/page5_0", "/page5_1", "/page5_2", "/page5_3"],
        "submodul4": ["/page6_0", "/page6_1_0", "/page6_1_1", "/page6_2", "/page6_3"],
        "modul-evaluative": ["/page7"],
        "modul-asessmen2": ["/page8_0", "/page8_1", "/page8_2", "/page8_3_0", "/page8_3_1"],
    };

    const progressWeights = {
        "modul-introduce": 5,
        "modul-asessmen1": 10,
        "submodul1": 15,
        "submodul2": 15,
        "submodul3": 15,
        "submodul4": 15,
        "modul-evaluative": 15,
        "modul-asessmen2": 10
    };

    // Temukan modul saat ini
    function getCurrentModule(path) {
        for (const [modulId, pages] of Object.entries(modulePages)) {
            if (pages.includes(path)) return modulId;
        }
        return null;
    }

    const currentModul = getCurrentModule(currentPath);
    const lastModul = localStorage.getItem("lastModule");

    const currentIndex = allPages.indexOf(currentPath);
    if (currentIndex === -1) return;

    let targetProgress = 0;

    for (const [modulId, pages] of Object.entries(modulePages)) {
        const lastPage = pages[pages.length - 1];
        const lastIndex = allPages.indexOf(lastPage);

        if (currentIndex > lastIndex) {
            const modulElement = document.getElementById(modulId);
            if (modulElement) {
                let finishedIcon = modulElement.querySelector(".modul-finished");
                const pointCounter = modulElement.querySelector(".submodul-num-point");
                const finishedSVG = `
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 13C0 5.8203 5.8203 0 13 0C20.1797 0 26 5.8203 26 13C26 20.1797 20.1797 26 13 26C5.8203 26 0 20.1797 0 13Z" fill="#10B981"/>
                        <path d="M7 13L10.2929 16.2929C10.6834 16.6834 11.3166 16.6834 11.7071 16.2929L19 9" stroke="white" stroke-width="4" stroke-linecap="round"/>
                    </svg>
                `;

                if (!finishedIcon) {
                    // Buat elemen modul-finished
                    finishedIcon = document.createElement("div");
                    finishedIcon.classList.add("flex"); // ganti "hidden" dengan visible
                    finishedIcon.innerHTML = finishedSVG;

                    
                    // Sisipkan ke dalam button di modul
                    const button = modulElement.querySelector("button");
                    button.appendChild(finishedIcon);
                } else {
                        finishedIcon.classList.remove("hidden");
                        
                        // Tambahkan SVG kalau belum ada
                        if (!finishedIcon.innerHTML.trim()) {
                            finishedIcon.innerHTML = finishedSVG;

                        }
                    }
                if (pointCounter) pointCounter.classList.add("hidden");

            }

            targetProgress += progressWeights[modulId] || 0;
        }
    }

    const progressBar = document.querySelector('#progress-section .bg-blue31');
    const progressText = document.querySelector('#progress-section p');

    function updateProgressDirectly(percent) {
        progressBar.style.width = `${percent}%`;
        progressText.textContent = `${percent}% Progress selesai`;
    }

    function animateProgressTo(percent) {
        let current = 0;
        const step = 1;
        const interval = setInterval(() => {
            if (current >= percent) {
                clearInterval(interval);
            } else {
                current += step;
                if (current > percent) current = percent;
                progressBar.style.width = `${current}%`;
                progressText.textContent = `${current}% Progress selesai`;
            }
        }, 20);
    }

    // Tentukan apakah perlu animasi atau langsung
    if (currentModul && currentModul === lastModul) {
        // Masih di modul yang sama → langsung tampilkan
        updateProgressDirectly(targetProgress);
    } else {
        // Modul baru → animasi
        animateProgressTo(targetProgress);
    }

    // Simpan modul sekarang ke localStorage untuk dibandingkan di halaman berikutnya
    if (currentModul) {
        localStorage.setItem("lastModule", currentModul);
    }
});

//Mengatur poin submodul
document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll('.modul').forEach(modul => {
        const submodulPoints = modul.querySelectorAll('.submodul-point');
        const progress = 0; // ganti dengan nilai dinamis kalau perlu
        const counter = modul.querySelector('.submodul-num-point');

        if (counter && submodulPoints) {
        counter.textContent = `${progress}/${submodulPoints.length}`;
        }
    });
});



// Fungsi toggle modul manual jika diklik/ buka tutup ikon panah di judul modul
    function toggleSubmodul(submodulId, button) {
        const submodul = document.getElementById(submodulId);
        const icon = button.querySelector("svg");

        if (!submodul || !icon) return;

        if (submodul.style.maxHeight === "0px" || !submodul.style.maxHeight) {
            submodul.style.maxHeight = submodul.scrollHeight + "px";
            submodul.style.opacity = "1";
            submodul.style.transform = "translateY(0)";
            icon.classList.add("rotate-180");
        } else {
            submodul.style.maxHeight = "0px";
            submodul.style.opacity = "0";
            submodul.style.transform = "translateY(-10px)";
            icon.classList.remove("rotate-180");
        }
    }




    document.addEventListener("DOMContentLoaded", function () {
    const toggleBtn = document.getElementById("toggle-btn");
    const courseBar = document.getElementById("course-bar");
    const title = document.getElementById("title");
    const progressSection = document.getElementById("progress-section");
    const mainContent = document.getElementById("main-content");
    const iconArrow = document.getElementById("icon-arrow");
    const leftContent = document.getElementById("left");

    function updateVisibility() {
        if (window.innerWidth < 1024) { // Mulai dari md ke bawah
            courseBar.classList.add("w-10");
            courseBar.classList.remove("w-[40%]", "lg:w-1/3", "xl:w-1/4", "right-10");
            title.classList.add("opacity-0");
            progressSection.classList.add("opacity-0");
            mainContent.classList.add("opacity-0");
            iconArrow.classList.remove("rotate-180");
            iconArrow.classList.add("rotate-0");
            toggleBtn.classList.remove("rounded-full");
            toggleBtn.classList.add("rounded-l-full", "pr-3", "pl-1");
            courseBar.classList.remove("bg-[#fbfbfb]");
            courseBar.classList.add("bg-white");
            leftContent.classList.remove("w-3/4");
            leftContent.classList.add("w-full");
            leftContent.classList.remove("overflow-y-scroll", "max-h-[97vh]", "scrollbar-thumb-blue31", "scrollbar-track-gray-100");
        } else {
            courseBar.classList.remove("w-10");
            courseBar.classList.add("w-[40%]", "lg:w-1/3", "xl:w-1/4", "right-10");
            title.classList.remove("opacity-0");
            progressSection.classList.remove("opacity-0");
            mainContent.classList.remove("opacity-0");
            iconArrow.classList.add("rotate-180");
            iconArrow.classList.remove("rotate-0");
            toggleBtn.classList.remove("rounded-l-full", "pr-3", "pl-1");
            toggleBtn.classList.add("rounded-full");
            courseBar.classList.remove("bg-white");
            courseBar.classList.add("bg-[#fbfbfb]");
            leftContent.classList.remove("w-full");
            leftContent.classList.add("w-3/4");
            leftContent.classList.add("overflow-y-scroll", "max-h-[97vh]", "scrollbar-thumb-blue31", "scrollbar-track-gray-100");
        }
    }

    toggleBtn.addEventListener("click", function () {
        if (courseBar.classList.contains("w-10")) {
            // Buka course-bar (slide ke kiri)
            courseBar.classList.remove("w-10");
            courseBar.classList.add("w-[40%]", "lg:w-1/3", "xl:w-1/4");
            title.classList.remove("opacity-0");
            progressSection.classList.remove("opacity-0");
            mainContent.classList.remove("opacity-0");
            iconArrow.classList.remove("rotate-0");
            iconArrow.classList.add("rotate-180");
            toggleBtn.classList.remove("rounded-l-full", "pr-3", "pl-1");
            toggleBtn.classList.add("rounded-full");
            courseBar.classList.remove("bg-white");
            courseBar.classList.add("bg-[#fbfbfb]");
            leftContent.classList.remove("w-full");
            leftContent.classList.add("w-3/4");
            leftContent.classList.add("overflow-y-scroll", "scrollbar-thumb-blue31", "scrollbar-track-gray-100");
        } else {
            // Tutup course-bar (slide ke kanan)
            courseBar.classList.add("w-10");
            courseBar.classList.remove("w-[40%]", "lg:w-1/3", "xl:w-1/4");
            title.classList.add("opacity-0");
            progressSection.classList.add("opacity-0");
            mainContent.classList.add("opacity-0");
            iconArrow.classList.add("rotate-0");
            iconArrow.classList.remove("rotate-180");
            toggleBtn.classList.remove("rounded-full");
            toggleBtn.classList.add("rounded-l-full", "pr-3", "pl-1");
            courseBar.classList.remove("bg-[#fbfbfb]");
            courseBar.classList.add("bg-white");
            leftContent.classList.remove("w-3/4");
            leftContent.classList.add("w-full");
            leftContent.classList.remove("overflow-y-scroll", "scrollbar-thumb-blue31", "scrollbar-track-gray-100");
        }
    });

    // Jalankan saat halaman dimuat dan saat layar diubah ukurannya
    updateVisibility();
    window.addEventListener("resize", updateVisibility);
});

</script>
