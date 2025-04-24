<div id="navigation" class="w-full h-14 bg-blue31 flex justify-center items-center fixed bottom-0 left-0 z-50">
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
        let navigation = document.getElementById("navigation");
        let footer = document.getElementById("footer");
        let footerRect = footer.getBoundingClientRect();
        let windowHeight = window.innerHeight;

        if (footerRect.top <= windowHeight) {
            navigation.style.position = "absolute";
            navigation.style.bottom = `${footerRect.height}px`;
        } else {
            navigation.style.position = "fixed";
            navigation.style.bottom = "0";
        }
    }

    window.addEventListener("scroll", adjustNavigation);
    window.addEventListener("resize", adjustNavigation);
    document.addEventListener("DOMContentLoaded", adjustNavigation);



    const routes = [
        "/course", // pengenalan
        "/page2_0", "/page2_1", "/page2_2", "/page2_3", // asessmen 1
        "/page3_0", "/page3_1_0", "/page3_1_1", "/page3_1_2", "/page3_1_3", "/page3_1_4", "/page3_2", "/page3_3", // submodul 1
        "/page4_0", "/page4_1", "/page4_2", "/page4_3", // submodul 2
        "/page5_0", "/page5_1", "/page5_2", "/page5_3",// submodul 3
        "/page6_0", "/page6_1_0", "/page6_1_1", "/page6_2", "/page6_3",// submodul 4
        "/page7", 
        "/page8_0", "/page8_1", "/page8_2", "/page8_3_0", "/page8_3_1",// asessmen 2
    ];

    const currentPath = window.location.pathname;
    const currentIndex = routes.indexOf(currentPath);

    const prevBtn = document.getElementById("prev-btn");
    const nextBtn = document.getElementById("next-btn");

    // Skema penamaan modul
    const modulMap = {
        "/course": "Pengenalan",
        "/page2_0": "Asessmen 1", "/page2_1": "Asessmen I - Bagian 1 (Pre-Test)", "/page2_2": "Asessmen I - Hasil Penilaian", "/page2_3": "Asessmen I - Evaluasi - Bagian 2: Keyakinan Penggunaan MIKA 1.0",
        "/page3_0": "Gangguan Spektrum Autisme - Memahami Autisme", "/page3_1_0": "Gangguan Spektrum Autisme - Komunikasi Autistik - Pra Komunikasi", "/page3_1_1": "Gangguan Spektrum Autisme - Komunikasi Autistik - Eskpresif", "/page3_1_2": "Gangguan Spektrum Autisme - Komunikasi Autistik - Reseptif", "/page3_1_3": "Gangguan Spektrum Autisme - Komunikasi Autistik - Pragmatis", "/page3_1_4": "Gangguan Spektrum Autisme - Komunikasi Autistik - Strategi Komunikasi Autisme", "/page3_2": "Gangguan Spektrum Autisme - Rangkuman Materi", "/page3_3": "Gangguan Spektrum Autisme - Uji Pengetahuan",
        "/page4_0": "Matriks Perencanaan - Observasi, Pencatatan Karakteristik, Dampak dan Strategi", "/page4_1": "Matriks Perencanaan - Rangkuman Materi", "/page4_2": "Matriks Perencanaan - Uji Pengetahuan", "/page4_3": "Matriks Perencanaan - Latihan Berfikir",
        "/page5_0": "Pembelajaran Terstruktur - Belajar Terstruktur", "/page5_1": "Pembelajaran Terstruktur - Rangkuman Materi", "/page5_2": "Pembelajaran Terstruktur - Uji Pengetahuan", "/page5_3": "Pembelajaran Terstruktur - Latihan Berfikir",
        "/page6_0": "Media Visual Komunikasi Anak - Memulai MIKA 1.0", "/page6_1_0": "Media Visual Komunikasi Anak - Administratif MIKA 1.0", "/page6_1_1": "Media Visual Komunikasi Anak - Studi Kasus Administratif MIKA 1.0", "/page6_2": "Media Visual Komunikasi Anak - Evaluasi & Interpretasi", "/page6_3": "Media Visual Komunikasi Anak - Rangkuman Materi",
        "/page7": "Praktek Belajar - Simulasi Penggunaan MIKA 1.0", 
        "/page8_0": "Asessmen II", "/page8_1": "Asessmen II - Bagian 1", "/page8_2": "Asessmen II - Hasil Penilaian", "/page8_3_0": "Asessmen II - Evaluasi - Bagian 2: Keyakinan Penggunaan MIKA 1.0", "/page8_3_1": "Asessmen II - Evaluasi - Bagian 3: Kepuasan penggunaan MIKA Education sebagai sumber belajar",
    };

    const modulActive = document.getElementById("modul-active");

    // Tampilkan nama modul aktif
    modulActive.innerText = modulMap[currentPath] || "-";

    // Fungsi untuk pindah halaman
    prevBtn?.addEventListener("click", (e) => {
        if (!e.defaultPrevented && currentIndex > 0) {
            window.location.href = routes[currentIndex - 1];
        }
    });

    nextBtn?.addEventListener("click", (e) => {
        if (!e.defaultPrevented && currentIndex < routes.length - 1) {
            window.location.href = routes[currentIndex + 1];
        }
    });

    // Tampilkan/Nonaktifkan tombol Prev jika halaman pertama
    if (currentIndex === 0) {
        prevBtn.classList.add("opacity-0", "pointer-events-none");
    }




//Dilaog PAGE 2_0
document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById('modalDialogStart_Asessmen1');
    const btnStartLearning = document.getElementById('btnStartLearning');
    const btnBack = document.getElementById('btnBack');
    const startButtonNow = document.getElementById('startButtonNow');
    const startButtonNext = document.getElementById('startButtonNext');
    const nextBtn = document.getElementById("next-btn");
    const currentPath = window.location.pathname;

    function toggleModal() {
        modal.classList.toggle('hidden');
    }

    function closeModal() {
        if (!modal.classList.contains("hidden")) {
            modal.classList.add("hidden");
        }
    }

    function showModal() {
        modal.classList.remove("hidden");
    }

    // Handle "Mulai Sekarang" & "Selanjutnya" tombol dalam konten
    if (startButtonNow) {
        const newStartNow = startButtonNow.cloneNode(true);
        startButtonNow.parentNode.replaceChild(newStartNow, startButtonNow);
        newStartNow.addEventListener('click', toggleModal);
    }

    if (startButtonNext) {
        const newStartNext = startButtonNext.cloneNode(true);
        startButtonNext.parentNode.replaceChild(newStartNext, startButtonNext);
        newStartNext.addEventListener('click', toggleModal);
    }

    // Handle tombol footer "Selanjutnya"
    if (nextBtn && currentPath === "/page2_0") {
        const newNextBtn = nextBtn.cloneNode(true);
        nextBtn.parentNode.replaceChild(newNextBtn, nextBtn);
        newNextBtn.addEventListener("click", function (e) {
            e.preventDefault();
            showModal();
        });
    }

    // Tombol "Mulai" redirect ke page2_1
    if (btnStartLearning) {
        const newStartLearning = btnStartLearning.cloneNode(true);
        btnStartLearning.parentNode.replaceChild(newStartLearning, btnStartLearning);
        newStartLearning.addEventListener("click", function () {
            window.location.href = "/page2_1";
        });
    }

    // Tombol "Kembali" hanya menutup modal
    if (btnBack) {
        const newBtnBack = btnBack.cloneNode(true);
        btnBack.parentNode.replaceChild(newBtnBack, btnBack);
        newBtnBack.addEventListener("click", function () {
            closeModal();
        });
    }

    // Klik di luar isi modal untuk menutup
    window.addEventListener("click", function (event) {
        if (event.target === modal) {
            closeModal();
        }
    });
});


//Dilaog PAGE 2_1
document.addEventListener("DOMContentLoaded", function () {
    const currentPath = window.location.pathname;

    if (currentPath === "/page2_1") {
        const prevBtn = document.getElementById("prev-btn");
        const nextBtn = document.getElementById("next-btn");
        const kumpulBtn = document.querySelector('button[type="submit"]');

        const modalBack = document.getElementById("modalDialogBack_Asessmen1");
        const modalSubmit = document.getElementById("modalDialogSubmit_Asessmen1");

        const btnBackClose = document.getElementById("btnCancelBack");
        const btnBackConfirm = document.getElementById("btnConfirmBack");
        const btnSubmitBack = document.getElementById("btnSubmitBack");
        const btnSubmitConfirm = document.getElementById("btnSubmitConfirm");

        let redirectOnConfirmBack = false; // penanda agar tidak langsung redirect

        function showModal(modal) {
            if (modal) modal.classList.remove("hidden");
        }

        function closeModal(modal) {
            if (modal) modal.classList.add("hidden");
        }

        if (prevBtn) {
            const newPrevBtn = prevBtn.cloneNode(true);
            prevBtn.parentNode.replaceChild(newPrevBtn, prevBtn);
            newPrevBtn.addEventListener("click", function (e) {
                e.preventDefault(); // penting untuk cegah redirect default
                showModal(modalBack);
            });
        }

        if (btnBackClose) {
            btnBackClose.addEventListener("click", function () {
                closeModal(modalBack);
            });
        }

        if (btnBackConfirm) {
            btnBackConfirm.addEventListener("click", function () {
                window.location.href = "/page2_0";
            });
        }

        if (nextBtn) {
            const newNextBtn = nextBtn.cloneNode(true);
            nextBtn.parentNode.replaceChild(newNextBtn, nextBtn);
            newNextBtn.addEventListener("click", function (e) {
                e.preventDefault();
                showModal(modalSubmit);
            });
        }

        if (kumpulBtn) {
            const newKumpulBtn = kumpulBtn.cloneNode(true);
            kumpulBtn.parentNode.replaceChild(newKumpulBtn, kumpulBtn);
            newKumpulBtn.addEventListener("click", function (e) {
                e.preventDefault();
                showModal(modalSubmit);
            });
        }

        if (btnSubmitBack) {
            btnSubmitBack.addEventListener("click", function () {
                closeModal(modalSubmit);
            });
        }

        if (btnSubmitConfirm) {
            btnSubmitConfirm.addEventListener("click", function () {
                document.querySelector("form").submit();
            });
        }

        window.addEventListener("click", function (event) {
            if (event.target === modalSubmit) {
                closeModal(modalSubmit);
            }
            if (event.target === modalBack) {
                closeModal(modalBack);
            }
        });
    }
});


//Dilaog PAGE 2_2
document.addEventListener("DOMContentLoaded", function () {
    const path = window.location.pathname;

    if (path === "/page2_2") {
        const modalBack = document.getElementById('modalDialogBack_Asessmen1'); // Modal untuk Sebelumnya dan Ulangi Penilaian
        const modalNext = document.getElementById('modalDialogStart_Asessmen1_Eval'); // Modal untuk Selanjutnya
        const modalEvaluate = document.getElementById('modalDialogEvaluate'); // Modal untuk Mulai Evaluasi

        const btnUlangi = document.getElementById('startButtonNow'); // Tombol Ulangi Penilaian
        const btnPrev = document.getElementById('prev-btn'); // Tombol Sebelumnya
        const btnNext = document.getElementById('next-btn'); // Tombol Selanjutnya
        const btnEvaluate = document.getElementById('startButtonEvaluate'); // Tombol Mulai Evaluasi

        const btnBackInModalBack = modalBack?.querySelector('#btnBack');
        const btnGoToPage2_1 = modalBack?.querySelector('#btnStartLearning');

        const btnBackInModalNext = modalNext?.querySelector('#btnBack');
        const btnGoToPage2_3 = modalNext?.querySelector('#btnStartLearning');

        const btnBackInModalEvaluate = modalEvaluate?.querySelector('#btnBack'); // Tombol Kembali di Modal Evaluasi
        const btnGoToPage2_3FromEvaluate = modalEvaluate?.querySelector('#btnStartLearning'); // Tombol Mulai Evaluasi menuju page2_3

        // Fungsi untuk menampilkan modal
        const showModal = (modal) => {
            modal.classList.remove("hidden");
        };

        // Fungsi untuk menutup modal
        const closeModal = (modal) => {
            modal.classList.add("hidden");
        };

        // Tombol "Ulangi Penilaian" (Menampilkan modalBack)
        if (btnUlangi) {
            const newBtnUlangi = btnUlangi.cloneNode(true);
            btnUlangi.parentNode.replaceChild(newBtnUlangi, btnUlangi);
            newBtnUlangi.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                e.stopImmediatePropagation();
                showModal(modalBack); // Tampilkan modal dialog untuk "Ulangi Penilaian"
            });
        }

        // Tombol "Sebelumnya" (Menampilkan modalBack)
        if (btnPrev) {
            const newBtnPrev = btnPrev.cloneNode(true);
            btnPrev.parentNode.replaceChild(newBtnPrev, btnPrev);
            newBtnPrev.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                e.stopImmediatePropagation();
                showModal(modalBack); // Tampilkan modal dialog untuk "Sebelumnya"
            });
        }

        // Tombol "Selanjutnya" (Menampilkan modalNext)
        if (btnNext) {
            const newBtnNext = btnNext.cloneNode(true);
            btnNext.parentNode.replaceChild(newBtnNext, btnNext);
            newBtnNext.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                e.stopImmediatePropagation();
                showModal(modalNext); // Tampilkan modal dialog untuk "Selanjutnya"
            });
        }

        // Tombol "Mulai Evaluasi" (Harus munculkan modalNext)
        if (btnEvaluate) {
            const newBtnEvaluate = btnEvaluate.cloneNode(true);
            btnEvaluate.parentNode.replaceChild(newBtnEvaluate, btnEvaluate);
            newBtnEvaluate.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                e.stopImmediatePropagation();
                showModal(modalNext); // ← Pastikan ini yang dipakai!
            });
        }


        // Tombol kembali dalam modal "Back"
        if (btnBackInModalBack) {
            const newBtnBackInModalBack = btnBackInModalBack.cloneNode(true);
            btnBackInModalBack.parentNode.replaceChild(newBtnBackInModalBack, btnBackInModalBack);
            newBtnBackInModalBack.addEventListener('click', function () {
                closeModal(modalBack); // Menutup modal dialog
            });
        }

        // Tombol mulai dalam modal "Back" => Page2_1
        if (btnGoToPage2_1) {
            const newBtnGoToPage2_1 = btnGoToPage2_1.cloneNode(true);
            btnGoToPage2_1.parentNode.replaceChild(newBtnGoToPage2_1, btnGoToPage2_1);
            newBtnGoToPage2_1.addEventListener('click', function () {
                window.location.href = "/page2_1"; // Arahkan ke page2_1
            });
        }

        // Tombol kembali dalam modal "Next"
        if (btnBackInModalNext) {
            const newBtnBackInModalNext = btnBackInModalNext.cloneNode(true);
            btnBackInModalNext.parentNode.replaceChild(newBtnBackInModalNext, btnBackInModalNext);
            newBtnBackInModalNext.addEventListener('click', function () {
                closeModal(modalNext); // Menutup modal dialog
            });
        }

        // Tombol mulai dalam modal "Next" => Page2_3
        if (btnGoToPage2_3) {
            const newBtnGoToPage2_3 = btnGoToPage2_3.cloneNode(true);
            btnGoToPage2_3.parentNode.replaceChild(newBtnGoToPage2_3, btnGoToPage2_3);
            newBtnGoToPage2_3.addEventListener('click', function () {
                window.location.href = "/page2_3"; // Arahkan ke page2_3
            });
        }

        // Tombol kembali dalam modal "Evaluate"
        if (btnBackInModalEvaluate) {
            const newBtnBackInModalEvaluate = btnBackInModalEvaluate.cloneNode(true);
            btnBackInModalEvaluate.parentNode.replaceChild(newBtnBackInModalEvaluate, btnBackInModalEvaluate);
            newBtnBackInModalEvaluate.addEventListener('click', function () {
                closeModal(modalEvaluate); // Menutup modal dialog
            });
        }

        // Tombol mulai dalam modal "Evaluate" => Page2_3
        if (btnGoToPage2_3FromEvaluate) {
            const newBtnGoToPage2_3FromEvaluate = btnGoToPage2_3FromEvaluate.cloneNode(true);
            btnGoToPage2_3FromEvaluate.parentNode.replaceChild(newBtnGoToPage2_3FromEvaluate, btnGoToPage2_3FromEvaluate);
            newBtnGoToPage2_3FromEvaluate.addEventListener('click', function () {
                window.location.href = "/page2_3"; // Arahkan ke page2_3 dari modal evaluasi
            });
        }

        // Tutup modal kalau klik di luar
        window.addEventListener("click", function (event) {
            if (event.target === modalBack) closeModal(modalBack);
            if (event.target === modalNext) closeModal(modalNext);
            if (event.target === modalEvaluate) closeModal(modalEvaluate);
        });
    }
});


//Dilaog PAGE 2_3
    document.addEventListener("DOMContentLoaded", function () {
        const currentPath = window.location.pathname;
        if (currentPath !== "/page2_3") return;

        // Modal dan tombol
        const modalBack = document.getElementById("modalDialogBack_Asessmen1");
        const modalFinish = document.getElementById("modalDialog_Asessmen1_Finish");

        const btnPrev = document.getElementById("prev-btn");
        const btnNext = document.getElementById("next-btn");
        const btnSubmit = document.getElementById("submit-btn-Asessmen1finish");

        // Tombol dalam modal back
        const btnCancelBack = document.getElementById("btnCancelBack");
        const btnConfirmBack = document.getElementById("btnConfirmBack");

        // Tombol dalam modal finish
        const btnSubmitBack = document.getElementById("btnSubmitBack");
        const btnSubmitConfirm = document.getElementById("btnSubmitConfirm");

        // Fungsi modal
        function showModal(modal) {
            modal.classList.remove("hidden");
        }

        function closeModal(modal) {
            modal.classList.add("hidden");
        }

        function bindModalButtons() {
            // Modal Back
            if (btnCancelBack) {
                btnCancelBack.addEventListener("click", () => closeModal(modalBack));
            }

            if (btnConfirmBack) {
                btnConfirmBack.addEventListener("click", () => {
                    closeModal(modalBack);
                    setTimeout(() => {
                        window.location.href = "/page2_2";
                    }, 300);
                });
            }

            // Modal Finish
            if (btnSubmitBack) {
                btnSubmitBack.addEventListener("click", () => closeModal(modalFinish));
            }

            if (btnSubmitConfirm) {
                btnSubmitConfirm.addEventListener("click", () => {
                    closeModal(modalFinish);
                    setTimeout(() => {
                        window.location.href = "/page3_0";
                    }, 300);
                });
            }
        }

        function replaceButtonWithModal(btn, modalToShow) {
            if (btn) {
                const newBtn = btn.cloneNode(true);
                btn.parentNode.replaceChild(newBtn, btn);
                newBtn.addEventListener("click", function (e) {
                    e.preventDefault();
                    showModal(modalToShow);
                });
            }
        }

        // Re-bind tombol navigasi
        replaceButtonWithModal(btnPrev, modalBack);
        replaceButtonWithModal(btnNext, modalFinish);
        replaceButtonWithModal(btnSubmit, modalFinish);

        // Bind tombol dalam modal
        bindModalButtons();
    });



    document.addEventListener("DOMContentLoaded", function () {
        const path = window.location.pathname;

        if (path === "/page3_0") {
            const modalBack = document.getElementById('modalDialogBack_Asessmen1'); // Modal untuk tombol "Sebelumnya"
            const btnPrev = document.getElementById('prev-btn'); // Tombol "Sebelumnya"

            const btnCancelBack = document.getElementById('btnCancelBack'); // Tombol "Lanjut Belajar"
            const btnConfirmBack = document.getElementById('btnConfirmBack'); // Tombol "Keluar"

            // Fungsi tampilkan modal
            const showModal = (modal) => {
                modal.classList.remove("hidden");
            };

            // Fungsi tutup modal
            const closeModal = (modal) => {
                modal.classList.add("hidden");
            };

            // Handler tombol "Sebelumnya"
            if (btnPrev) {
                const newBtnPrev = btnPrev.cloneNode(true);
                btnPrev.parentNode.replaceChild(newBtnPrev, btnPrev);
                newBtnPrev.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    e.stopImmediatePropagation();
                    showModal(modalBack);
                });
            }

            // Tombol "Lanjut Belajar" = hanya tutup modal
            if (btnCancelBack) {
                const newBtnCancel = btnCancelBack.cloneNode(true);
                btnCancelBack.parentNode.replaceChild(newBtnCancel, btnCancelBack);
                newBtnCancel.addEventListener('click', function () {
                    closeModal(modalBack);
                });
            }

            // Tombol "Keluar" = redirect ke /page2_2
            if (btnConfirmBack) {
                const newBtnConfirm = btnConfirmBack.cloneNode(true);
                btnConfirmBack.parentNode.replaceChild(newBtnConfirm, btnConfirmBack);
                newBtnConfirm.addEventListener('click', function () {
                    window.location.href = "/page2_2";
                });
            }

            // Tutup modal jika klik di luar kontennya
            window.addEventListener("click", function (event) {
                if (event.target === modalBack) {
                    closeModal(modalBack);
                }
            });
        }
    });


</script>