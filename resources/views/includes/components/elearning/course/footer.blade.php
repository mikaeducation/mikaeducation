<div id="navigation" class="w-full h-14 bg-blue31 flex justify-center items-center fixed bottom-0 left-0 z-40">
    <div class="w-[95%] h-full flex items-center justify-between space-x-2 text-white font-medium lg:text-lg text-base">
        <button id="prev-btn" class="flex items-center justify-center gap-4 w-fit h-full">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#31587C" viewBox="0 0 24 24" class="flex items-center justify-center bg-white w-7 h-7 rounded-full">
                <path d="M15.707 4.707a1 1 0 0 0-1.414 0L7.293 12l6.293 7.293a1 1 0 1 0 1.414-1.414L9.414 12l6.293-6.121a1 1 0 0 0 0-1.414z" />
            </svg>                
            <p class="md:block hidden">Sebelumnya</p>
        </button>
        <h5 id="modul-active" class="w-full flex items-center justify-center text-center">Pengenalan</h5>
        <button id="next-btn" class="flex items-center justify-center gap-4 w-fit h-full">
            <p class="md:block hidden">Selanjutnya</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#31587C" viewBox="0 0 24 24" class="flex items-center justify-center bg-white w-7 h-7 rounded-full">
                <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
            </svg>
        </button>
    </div>
</div>

<footer id="footer" class="w-full flex flex-col items-center justify-center bg-blue31 text-white mt-14">
    <div class="w-full h-10 bg-blue20 font-light text-xs md:text-sm flex items-center justify-center">
        <div class="w-3/4 h-full flex items-center justify-center space-x-3 md:space-x-7 lg:space-x-14">
            <p class="text-center">© 2025 Media Visual Komunikasi Anak for Mikaeducation. All Rights Reserved.</p>
        </div>
    </div>
</footer>




<script>
    function adjustNavigation() {
        const navigation = document.getElementById("navigation");
        const footer = document.getElementById("footer");
        const footerRect = footer.getBoundingClientRect();
        const windowHeight = window.innerHeight;
    
        if (footerRect.top <= windowHeight) {
            navigation.style.position = "absolute";
            navigation.style.bottom = `${footerRect.height}px`;
        } else {
            navigation.style.position = "fixed";
            navigation.style.bottom = "0";
        }
    }
    
    // --- Navigasi antar halaman (kecuali page2_1 akan ditangani khusus)
    function setupNavigation() {
        const currentPath = window.location.pathname;
        if (currentPath === "/page2_1") return; // Page ini ditangani khusus di setupAsessmentDialog

        const routes = [
            "/course", "/page2_0", "/page2_1", "/page2_2",
            "/page3_0", "/page3_1_0", "/page3_1_1", "/page3_1_2", "/page3_1_3", "/page3_1_4", "/page3_2", "/page3_3",
            "/page4_0", "/page4_1", "/page4_2", "/page4_3",
            "/page5_0", "/page5_1", "/page5_2", "/page5_3",
            "/page6_0", "/page6_1_0", "/page6_1_1", "/page6_2", "/page6_3",
            "/page7",
            "/page8_0", "/page8_1", "/page8_2", "/page8_3_0", "/page8_3_1",
        ];

        const currentIndex = routes.indexOf(currentPath);
        const prevBtn = document.getElementById("prev-btn");
        const nextBtn = document.getElementById("next-btn");
        const startBtn = document.getElementById("btnMulaiAsessment");

        const modulActive = document.getElementById("modul-active");
        const modulMap = {
            "/course": "Pengenalan",
            "/page2_0": "Asessmen 1", "/page2_1": "Asessmen I - Bagian 1 (Pre-Test)", "/page2_2": "Asessmen I - Evaluasi - Bagian 2: Keyakinan Penggunaan MIKA 1.0",
            "/page3_0": "Gangguan Spektrum Autisme - Memahami Autisme", "/page3_1_0": "Komunikasi Autistik - Pra Komunikasi", "/page3_1_1": "Komunikasi Autistik - Ekspresif", "/page3_1_2": "Komunikasi Autistik - Reseptif", "/page3_1_3": "Komunikasi Autistik - Pragmatis", "/page3_1_4": "Strategi Komunikasi Autisme", "/page3_2": "Rangkuman Materi", "/page3_3": "Uji Pengetahuan",
            "/page4_0": "Observasi, Karakteristik, Strategi", "/page4_1": "Rangkuman Materi", "/page4_2": "Uji Pengetahuan", "/page4_3": "Latihan Berpikir",
            "/page5_0": "Belajar Terstruktur", "/page5_1": "Rangkuman Materi", "/page5_2": "Uji Pengetahuan", "/page5_3": "Latihan Berpikir",
            "/page6_0": "Memulai MIKA 1.0", "/page6_1_0": "Administratif MIKA 1.0", "/page6_1_1": "Studi Kasus Admin", "/page6_2": "Evaluasi & Interpretasi", "/page6_3": "Rangkuman Materi",
            "/page7": "Simulasi Penggunaan MIKA 1.0",
            "/page8_0": "Asessmen II", "/page8_1": "Asessmen II - Bagian 1", "/page8_2": "Asessmen II - Hasil Penilaian", "/page8_3_0": "Evaluasi Lanjutan", "/page8_3_1": "Evaluasi Akhir"
        };

        modulActive.innerText = modulMap[currentPath] || "-";

        if (currentPath === "/page2_0") {
            const status = document.querySelector('meta[name="assessment-status"]')?.content;
            if (status === "done") {
                modulActive.innerText = "Asessmen I - Hasil Penilaian";
            }
        }

        if (prevBtn && currentIndex === 0) {
            prevBtn.classList.add("opacity-0", "pointer-events-none");
        }

        // Khusus prevBtn: hanya aktifkan handler jika BUKAN page2_1 atau page2_2
        if (prevBtn && currentPath !== "/page2_1" && currentPath !== "/page2_2") {
            prevBtn.addEventListener("click", (e) => {
                if (!e.defaultPrevented && currentIndex > 0) {
                    window.location.href = routes[currentIndex - 1];
                }
            });
        }

        // Handler tombol next
        if (nextBtn) {
            if (currentPath === "/page2_0") {
                const isFinished = document.querySelector('meta[name="asessment-finished"]')?.content === "true";
                if (!isFinished && startBtn) {
                    nextBtn.addEventListener("click", (e) => {
                        e.preventDefault();
                        const moduleId = startBtn.dataset.moduleId;
                        const asessmentId = startBtn.dataset.asessmentId;
                        showModalForAsessment(moduleId, asessmentId);
                    });
                }
            } else if (currentPath === "/page2_2") {
                // Tangani navigasi secara manual di setupAsessmentDialog
                nextBtn.addEventListener("click", (e) => {
                    e.preventDefault(); // Cegah redirect langsung
                });
            } else if (currentIndex < routes.length - 1) {
                nextBtn.addEventListener("click", (e) => {
                    if (!e.defaultPrevented) {
                        window.location.href = routes[currentIndex + 1];
                    }
                });
            }
        }
    }

    
    // --- Setup dialog khusus asesmen
    function setupAsessmentDialog() {
        const page = window.location.pathname;
        const sudahSelesai = document.querySelector('meta[name="asessment-finished"]')?.content === "true";

        // --- Modal Umum
        const modalStart = document.getElementById("modalDialogAsessment");
        const confirmStart = document.getElementById("btnAsessmentConfirm");
        const cancelStart = document.getElementById("btnAsessmentCancel");

        const modalSubmit = document.getElementById("modalDialogSubmit_Asessmen1");
        const confirmSubmit = document.getElementById("btnSubmitConfirm");
        const cancelSubmit = document.getElementById("btnSubmitBack");

        const modalEval = document.getElementById("modalDialogStart_Asessmen1_Eval");

        // --- Pemilihan modal back
        const modalBack = page === "/page2_0"
            ? document.getElementById("modalDialogBack_Asessmen1_Ulangi")
            : document.getElementById("modalDialogBack_Asessmen1");

        const startBtn = document.getElementById("btnMulaiAsessment");
        const nextBtn = document.getElementById("next-btn");
        const prevBtn = document.getElementById("prev-btn");
        const btnTriggerSubmit = document.getElementById("btnTriggerSubmitModal");

        // Tombol Modal
        const btnStartEval = document.getElementById("startButtonEvaluate");
        const btnStartUlang = document.getElementById("startButtonNow");

        const btnStartEvalConfirm = modalEval?.querySelector("#btnStartLearning_Eval");
        const btnBackEval = modalEval?.querySelector("#btnBack_Eval");

        const confirmBack = page === "/page2_0"
            ? modalBack?.querySelector("#btnStartLearning_Ulangi")
            : modalBack?.querySelector("#btnConfirmBack");

        const cancelBack = page === "/page2_0"
            ? modalBack?.querySelector("#btnBack_Ulangi")
            : modalBack?.querySelector("#btnCancelBack");

        let redirectURL = "/";

        // --- Fungsi modal awal asesmen
        window.showModalForAsessment = function (moduleId, asessmentId) {
            fetch("/check-asessment-status", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                },
                body: JSON.stringify({ module_id: moduleId, asessment_id: asessmentId })
            })
            .then(res => res.json())
            .then(data => {
                if (data.status === "ok") {
                    redirectURL = data.redirect_to;
                    modalStart?.classList.remove("hidden");
                }
            });
        };

        // --- Modal mulai asesmen
        startBtn?.addEventListener("click", () => {
            const moduleId = startBtn.dataset.moduleId;
            const asessmentId = startBtn.dataset.asessmentId;
            showModalForAsessment(moduleId, asessmentId);
        });

        confirmStart?.addEventListener("click", () => {
            window.location.href = redirectURL;
        });

        cancelStart?.addEventListener("click", () => {
            modalStart?.classList.add("hidden");
        });

        // --- Page2_0: selesai asesmen
        if (page === "/page2_0" && sudahSelesai) {
            btnStartUlang?.addEventListener("click", (e) => {
                e.preventDefault();
                modalBack?.classList.remove("hidden");
            });

            btnStartEval?.addEventListener("click", (e) => {
                e.preventDefault();
                modalEval?.classList.remove("hidden");
            });

            nextBtn?.addEventListener("click", (e) => {
                e.preventDefault();
                modalEval?.classList.remove("hidden");
            });

            btnBackEval?.addEventListener("click", () => {
                modalEval?.classList.add("hidden");
            });

            btnStartEvalConfirm?.addEventListener("click", () => {
                window.location.href = "/page2_2";
            });

            confirmBack?.addEventListener("click", () => {
                window.location.href = "/page2_1";
            });

            cancelBack?.addEventListener("click", () => {
                modalBack?.classList.add("hidden");
            });
        }

        // --- Page2_1: form pretest
        if (page === "/page2_1") {
            const form = document.getElementById("formAsessment");

            const isFormValid = () => {
                const radios = form.querySelectorAll("input[type='radio']");
                const names = [...new Set([...radios].map(r => r.name))];
                return names.every(name => form.querySelector(`input[name="${name}"]:checked`));
            };

            const handleSubmit = (e) => {
                e.preventDefault();
                if (!isFormValid()) {
                    alert("Ada pertanyaan yang belum Anda jawab.");
                    return;
                }
                modalSubmit?.classList.remove("hidden");
            };

            nextBtn?.addEventListener("click", handleSubmit);
            btnTriggerSubmit?.addEventListener("click", handleSubmit);

            confirmSubmit?.addEventListener("click", () => {
                modalSubmit?.classList.add("hidden");
                form?.submit();
            });

            cancelSubmit?.addEventListener("click", () => {
                modalSubmit?.classList.add("hidden");
            });

            prevBtn?.addEventListener("click", (e) => {
                e.preventDefault();
                modalBack?.classList.remove("hidden");
            });

            cancelBack?.addEventListener("click", () => {
                modalBack?.classList.add("hidden");
            });

            confirmBack?.addEventListener("click", () => {
                window.location.href = "/page2_0";
            });
        }

        // --- Page2_2: form evaluasi
    if (page === "/page2_2") {
        const formEval = document.getElementById("formEvaluation");
        const modalSubmitEval = document.getElementById("modalDialog_Asessmen1_Finish");
        const confirmSubmitEval = document.getElementById("btnSubmitConfirm_Finish");
        const cancelSubmitEval = document.getElementById("btnSubmitBack_Finish");

        const modalBackEval = document.getElementById("modalDialogBack_Evaluation");
        const confirmBackEval = modalBackEval?.querySelector("#btnConfirmBack_Eval");
        const cancelBackEval = modalBackEval?.querySelector("#btnCancelBack_Eval");

        const isFormValidEval = () => {
            const radios = formEval.querySelectorAll("input[type='radio']");
            const names = [...new Set([...radios].map(r => r.name))];
            return names.every(name => formEval.querySelector(`input[name="${name}"]:checked`));
        };

        const handleSubmitEval = (e) => {
            e.preventDefault();
            if (!isFormValidEval()) {
                alert("Ada pertanyaan yang belum Anda jawab.");
                return;
            }
            modalSubmitEval?.classList.remove("hidden");
        };

        // Tangani tombol "Kumpulkan"
        btnTriggerSubmit?.addEventListener("click", handleSubmitEval);

        // Tangani tombol "Selanjutnya"
        nextBtn?.addEventListener("click", handleSubmitEval);

        // Konfirmasi kirim form
        confirmSubmitEval?.addEventListener("click", () => {
            modalSubmitEval?.classList.add("hidden");
            formEval?.submit();
        });

        cancelSubmitEval?.addEventListener("click", () => {
            modalSubmitEval?.classList.add("hidden");
        });

        prevBtn?.addEventListener("click", (e) => {
            e.preventDefault();
            modalBackEval?.classList.remove("hidden");
        });

        cancelBackEval?.addEventListener("click", () => {
            modalBackEval?.classList.add("hidden");
        });

        confirmBackEval?.addEventListener("click", () => {
            window.location.href = "/page2_0";
        });
    }
}



    
document.addEventListener("DOMContentLoaded", function () {
    adjustNavigation();
    setupNavigation();
    setupAsessmentDialog();
});

    
    window.addEventListener("scroll", adjustNavigation);
    window.addEventListener("resize", adjustNavigation);    

</script>