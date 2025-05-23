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

    // Deteksi Tombol Back/Forward Browser]
    document.addEventListener("DOMContentLoaded", function () {
        const protectedRoutes = [
            "/course", "/page2_0", "/page2_1", "/page2_2", "/page3_0",
            "/page3_1_0", "/page3_1_1", "/page3_1_2", "/page3_1_3", "/page3_1_4",
            "/page4_0", "/page5_0", "/page6_0", "/page6_1_0", "/page6_2",
            "/page6_3", "/page7", "/page8_0", "/page8_1", "/page8_2_0", "/page8_2_1"
        ];

        const currentPath = window.location.pathname;
        const accessAllowed = sessionStorage.getItem("canAccessCourse");

        if (protectedRoutes.includes(currentPath) && !accessAllowed) {
            const moduleId = sessionStorage.getItem("currentModuleId") || 1;
            window.location.replace(`/modules/${moduleId}`);
        }
    });
    
    // --- Navigasi antar halaman (kecuali page2_1 akan ditangani khusus)
    function setupNavigation() {
        const currentPath = window.location.pathname;
        if (currentPath === "/page2_1") return; // Page ini ditangani khusus di setupAsessmentDialog

        const routes = [
            "/course", "/page2_0", "/page2_1", "/page2_2",
            "/page3_0", "/page3_1_0", "/page3_1_1", "/page3_1_2", "/page3_1_3", "/page3_1_4", // "/page3_2", "/page3_3",
            "/page4_0", // "/page4_1", "/page4_2", "/page4_3",
            "/page5_0", // "/page5_1", "/page5_2", "/page5_3",
            "/page6_0", "/page6_1_0", "/page6_2", //  "/page6_1_1", "/page6_3",
            "/page7",
            "/page8_0", "/page8_1","/page8_2_0", "/page8_2_1",
        ];

        const currentIndex = routes.indexOf(currentPath);
        const prevBtn = document.getElementById("prev-btn");
        const nextBtn = document.getElementById("next-btn");
        const startBtn = document.getElementById("btnMulaiAsessment");

        const modulActive = document.getElementById("modul-active");
        const modulMap = {
            "/course": "Pengenalan",
            "/page2_0": "Asessmen 1", "/page2_1": "Asessmen I - Penilaian Pra-Belajar - Bagian I: Pre-Test", "/page2_2": "Asessmen I - Evaluasi - Bagian 2: Keyakinan Penggunaan MIKA 1.0",
            "/page3_0": "Gangguan Spektrum Autisme - Memahami Autisme", "/page3_1_0": "Komunikasi Autistik - Pra Komunikasi", "/page3_1_1": "Komunikasi Autistik - Ekspresif", "/page3_1_2": "Komunikasi Autistik - Reseptif", "/page3_1_3": "Komunikasi Autistik - Pragmatis", "/page3_1_4": "Strategi Komunikasi Autisme", // "/page3_2": "Rangkuman Materi", "/page3_3": "Uji Pengetahuan",
            "/page4_0": "Matriks Perencanaan - Observasi, Pencatatan Karakteristik, Dampak dan Strategi", // "/page4_1": "Rangkuman Materi", "/page4_2": "Uji Pengetahuan", "/page4_3": "Latihan Berpikir",
            "/page5_0": "Pembelajaran Terstruktur - Belajar Terstruktur", // "/page5_1": "Rangkuman Materi", "/page5_2": "Uji Pengetahuan", "/page5_3": "Latihan Berpikir",
            "/page6_0": "Media Visual Komunikasi Anak - Memulai MIKA 1.0", "/page6_1_0": "Media Visual Komunikasi Anak - Administratif MIKA 1.0", "/page6_2": "Media Visual Komunikasi Anak - Evaluasi & Interpretasi", // "/page6_1_1": "Studi Kasus Admin", "/page6_3": "Rangkuman Materi",
            "/page7": "Studi Kasus - Latihan Mandiri",
            "/page8_0": "Asessmen II", "/page8_1": "Asessmen II - Bagian 1", "/page8_2_0": "Asessmen II - Evaluasi - Bagian 2: Keyakinan Penggunaan MIKA 1.0", "/page8_2_1": "Asessmen II - Evaluasi - Bagian 3: Kepuasan penggunaan MIKA Education sebagai sumber belajar"
        };

        modulActive.innerText = modulMap[currentPath] || "-";

        // Khusus tampilan hasil penilaian setelah selesai
        if (currentPath === "/page2_0") {
            const status = document.querySelector('meta[name="assessment-status"]')?.content;
            if (status === "done") {
                modulActive.innerText = "Asessmen I - Hasil Penilaian";
            }
        } else if (currentPath === "/page8_0") {
            const status = document.querySelector('meta[name="assessment-status"]')?.content;
            if (status === "done") {
                modulActive.innerText = "Asessmen II - Hasil Penilaian";
            }
        }

        if (prevBtn && currentIndex === 0) {
            prevBtn.classList.add("opacity-0", "pointer-events-none");
        }

        // Khusus prevBtn: hanya aktifkan handler jika BUKAN page2_1 atau page2_2
        if (
            prevBtn &&
            currentPath !== "/page2_1" &&
            currentPath !== "/page2_2" &&
            currentPath !== "/page8_1" &&
            currentPath !== "/page8_2_0" &&
            currentPath !== "/page8_2_1"
        ) {
            prevBtn.addEventListener("click", (e) => {
                if (!e.defaultPrevented && currentIndex > 0) {
                    window.location.href = routes[currentIndex - 1];
                }
            });
        }

        // Handler tombol next
        if (nextBtn) {
        nextBtn.addEventListener("click", (e) => {
            e.preventDefault();  // Cegah navigasi langsung

            if (currentPath === "/page8_0" || currentPath === "/page8_1" || currentPath === "/page8_2_0" || currentPath === "/page8_2_1" || currentPath === "/page2_0" || currentPath === "/page2_1" || currentPath === "/page2_2") {
                const form = document.getElementById("formAsessment");

                const isFormValid = () => {
                    const radios = form.querySelectorAll("input[type='radio']");
                    const names = [...new Set([...radios].map(r => r.name))];
                    return names.every(name => form.querySelector(`input[name="${name}"]:checked`));
                };

                // Jika form tidak valid, tidak lanjut ke halaman berikutnya
                if (!isFormValid()) {
                    return;  // Jika form belum lengkap, tidak lanjutkan ke halaman berikutnya
                }

                // Tampilkan modal konfirmasi jika form valid
                modalSubmit?.classList.remove("hidden");

                confirmSubmit?.addEventListener("click", () => {
                    modalSubmit?.classList.add("hidden");

                    // Setelah modal konfirmasi, lanjutkan ke halaman berikutnya
                    if (currentPath === "/page8_0") {
                        window.location.href = "/page8_2_0";
                    } else if (currentPath === "/page2_0") {
                        window.location.href = "/page2_1";
                    } else if (currentPath === "/page2_2") {
                        // Jika di page2_2, cek apakah valid dan arahkan
                        window.location.href = "/page3_0"; // Atau halaman berikutnya sesuai logika
                    }
                });
            } else {
                let redirectURL = routes[currentIndex + 1];
                if (redirectURL === "/page8_0") {
                    redirectURL = "/page8_0?asessment_id=2";
                } else if (redirectURL === "/page2_0") {
                    redirectURL = "/page2_0?asessment_id=1";
                }
                window.location.href = redirectURL;
            }
        });
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
        const modalBack = (page === "/page2_0" || page === "/page8_0")
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

        const confirmBack = (page === "/page2_0" || page === "/page8_0")
            ? modalBack?.querySelector("#btnStartLearning_Ulangi")
            : modalBack?.querySelector("#btnConfirmBack");

        const cancelBack = (page === "/page2_0" || page === "/page8_0")
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

        // --- Page2_0 dan Page8_0: sebelum penilaian
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

        if ((page === "/page2_0" || page === "/page8_0") && !sudahSelesai) {
            nextBtn?.addEventListener("click", () => {
                const moduleId = nextBtn.dataset.moduleId;
                let asessmentId = 0;
                if (page === "/page2_0") {
                    asessmentId = 1;
                } else if (page === "/page8_0") {
                    asessmentId = 2;
                }
                showModalForAsessment(moduleId, asessmentId);
            });
        }


        // --- Page2_0 dan Page8_0: pasca penilaian
        if ((page === "/page2_0" || page === "/page8_0") && sudahSelesai) {
            btnStartUlang?.addEventListener("click", (e) => {
                e.preventDefault();
                if (page !== "/page2_0") {
                    modalBack?.classList.remove("hidden");
                }
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
                if (page === "/page2_0") {
                    window.location.href = "/page2_2";
                }
                else if (page === "/page8_0") {
                    window.location.href = "/page8_2_0";
                }
            });

            if (page === "/page8_0") {
                confirmBack?.addEventListener("click", () => {
                    window.location.href = "/page8_1";
                });
            }

            cancelBack?.addEventListener("click", () => {
                modalBack?.classList.add("hidden");
            });
        }


        // --- Page2_1 dan Page8_1: Form Penilaian I dan II
        if (page === "/page2_1" || page === "/page8_1") {
            const form = document.getElementById("formAsessment");

            const isFormValid = () => {
                const radios = form.querySelectorAll("input[type='radio']");
                const names = [...new Set([...radios].map(r => r.name))];
                return names.every(name => form.querySelector(`input[name="${name}"]:checked`));
            };

            const handleSubmit = (e) => {
                e.preventDefault();
                if (!isFormValid()) {
                    alert("Ada pertanyaan yang belum terjawab, silahkan periksa kembali jawaban Anda untuk dapat melanjutkan.");
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
                if (page === "/page2_1") {
                    window.location.href = "/page2_0?asessment_id=1";
                }
                else if (page === "/page8_1") {
                    window.location.href = "/page8_0?asessment_id=2";
                }
            });
            
        }


        // --- Page2_2 dan Page8_2_0 + Page8_2_1: Form Evaluasi I dan II
        if (page === "/page2_2" || page === "/page8_2_0" || page === "/page8_2_1") {
            const modalSubmitEval = document.getElementById("modalDialog_Asessmen1_Finish");
            const confirmSubmitEval = document.getElementById("btnSubmitConfirm_Finish");
            const cancelSubmitEval = document.getElementById("btnSubmitBack_Finish");

            const modalBackEval = document.getElementById("modalDialogBack_Evaluation");
            const confirmBackEval = modalBackEval?.querySelector("#btnConfirmBack_Eval");
            const cancelBackEval = modalBackEval?.querySelector("#btnCancelBack_Eval");

            const formMap = {
                "/page2_2": "formEvaluation",
                "/page8_2_1": "formEvaluation8_2_1"
            };

            
            const validatePage2_2 = () => {
                const form = document.getElementById(formMap["/page2_2"]);
                if (!form) return false;
                const radios = form.querySelectorAll("input[type='radio']");
                const names = [...new Set([...radios].map(r => r.name))];
                return names.every(name => form.querySelector(`input[name="${name}"]:checked`));
            };


            const validatePage8_2_1 = () => {
                const form = document.getElementById(formMap["/page8_2_1"]);
                if (!form) return false;

                const radios = form.querySelectorAll("input[type='radio']");
                const names = [...new Set([...radios].map(r => r.name))];
                const allFormAnswered = names.every(name => form.querySelector(`input[name="${name}"]:checked`));

                // Cek hidden inputs untuk question_21–30 dari page8_2_0
                const hiddenInputsValid = Array.from({ length: 10 }, (_, i) => {
                    const key = `question_${i + 21}`;
                    const hiddenInput = form.querySelector(`input[type='hidden'][name='${key}']`);
                    return hiddenInput && hiddenInput.value !== '';
                }).every(Boolean);

                return allFormAnswered && hiddenInputsValid;
            };


            const handleSubmitEval = (e) => {
                e.preventDefault();
                console.log("handleSubmitEval triggered"); // Logging ceck - validasi submit

                const isValid = page === "/page2_2" ? validatePage2_2() : validatePage8_2_1();
                if (!isValid) {
                    alert("Ada pertanyaan yang belum terjawab, silahkan periksa kembali jawaban Anda untuk dapat melanjutkan.");
                    return;
                }
                modalSubmitEval?.classList.remove("hidden");
            };

        
            // --- Page2_2 : Form Evaluasi pasca penilaian I (after_asessment_id 1)
            if (page === "/page2_2") {
                btnTriggerSubmit?.addEventListener("click", handleSubmitEval);
                nextBtn?.addEventListener("click", handleSubmitEval);

                confirmSubmitEval?.addEventListener("click", () => {
                    const formId = formMap[page];
                    const form = document.getElementById(formId);
                    if (!form) {
                        alert("Form tidak ditemukan!");
                        return;
                    }
                    modalSubmitEval?.classList.add("hidden");
                    form.submit();
                });

                cancelSubmitEval?.addEventListener("click", () => {
                    modalSubmitEval?.classList.add("hidden");
                });

                prevBtn?.addEventListener("click", (e) => {
                    e.preventDefault();
                    modalBackEval?.classList.remove("hidden");
                });
            }


            // --- Page8_2_0 : Form Evaluasi pasca penilaian II (after_asessment_id 2), bagian 1
            if (page === "/page8_2_0") {
                const nextBtn = document.getElementById('next-btn');
                const nextBtn2 = document.getElementById('next-btn-2');
                const prevBtn = document.getElementById('prev-btn');

                const isFormValidEval = () => {
                    const radios = document.querySelectorAll("input[type='radio']");
                    if (radios.length === 0) return true;
                    const names = [...new Set([...radios].map(r => r.name))];
                    return names.every(name => document.querySelector(`input[name="${name}"]:checked`));
                };

                const handleNextClick = (e) => {
                    e.preventDefault();
                    const radios = document.querySelectorAll(".eval-radio");
                    radios.forEach(radio => {
                        if (radio.checked) {
                            sessionStorage.setItem(radio.name, radio.value);
                        }
                    });

                    if (!isFormValidEval()) {
                        alert("Ada pertanyaan yang belum terjawab, silahkan periksa kembali jawaban Anda untuk dapat melanjutkan.");
                        return;
                    }

                    window.location.href = '/page8_2_1';
                };

                nextBtn?.addEventListener("click", handleNextClick);
                nextBtn2?.addEventListener("click", handleNextClick);

                prevBtn?.addEventListener("click", (e) => {
                    e.preventDefault();
                    modalBackEval?.classList.remove("hidden");
                });
            }


            // --- Page8_2_1 : Form Evaluasi pasca penilaian II (after_asessment_id 2), bagian 2 (submitted)
            if (page === "/page8_2_1") {
                window.addEventListener("DOMContentLoaded", () => {
                    for (let i = 21; i <= 45; i++) {
                        const name = `question_${i}`;
                        const saved = sessionStorage.getItem(name);
                        if (saved) {
                            const radio = document.querySelector(`input[name='${name}'][value='${saved}']`);
                            if (radio) radio.checked = true;
                        }
                    }
                });

                const appendHiddenInputs = () => {
                    const form = document.getElementById(formMap[page]);
                    if (!form) return;

                    // Loop untuk seluruh question_21 hingga question_45
                    for (let i = 21; i <= 45; i++) {
                        const key = `question_${i}`;
                        const value = sessionStorage.getItem(key);
                        // Jika belum ada di form sebagai input hidden, tambahkan
                        if (value !== null && !form.querySelector(`input[name="${key}"]`)) {
                            let input = document.createElement("input");
                            input.type = "hidden";
                            input.name = key;
                            input.value = value;
                            form.appendChild(input);
                        }
                    }
                };

                btnTriggerSubmit?.addEventListener("click", handleSubmitEval);
                nextBtn?.addEventListener("click", handleSubmitEval);

                confirmSubmitEval?.addEventListener("click", () => {
                    appendHiddenInputs();
                    modalSubmitEval?.classList.add("hidden");

                    sessionStorage.setItem("fromEvaluation", "true");

                    const form = document.getElementById(formMap[page]);
                    
                    form.addEventListener("submit", function (e) {
                        // Tambahan proteksi agar tidak trigger 2x
                        if (form.dataset.submitted) return;
                        form.dataset.submitted = "true";

                        // [MODIFIKASI PROTEKSI SELESAI BELAJAR]
                        sessionStorage.removeItem("canAccessCourse");
                        sessionStorage.removeItem("currentModuleId");

                        // Tampilkan loading (opsional) lalu redirect
                        setTimeout(() => {
                            window.location.replace("/preLearn");
                        }, 1000); // beri waktu 1 detik agar server menerima POST
                    }); form.submit();
                });

                cancelSubmitEval?.addEventListener("click", () => {
                    modalSubmitEval?.classList.add("hidden");
                });

                const prevBtn = document.getElementById('prev-btn');
                if (prevBtn) prevBtn.style.display = 'none';
            }

            // --- Konfirmasi keluar saat klik tombol kembali
            cancelBackEval?.addEventListener("click", () => {
                modalBackEval?.classList.add("hidden");
            });

            confirmBackEval?.addEventListener("click", () => {
                if (page === "/page2_2") {
                    window.location.href = "/page2_0?asessment_id=1";
                }
                else if (page === "/page8_2_0") {
                    window.location.href = "/page8_0?asessment_id=2";
                }
            });
        }

        // --- Page2_0 dan Page8_0: pasca penilaian dan evaluasi, mengecek apakah pengguna sudah mengerjakan penilaian dan evaluasi
        if (page === "/page2_0" || page === "/page8_0") {
            const userId = document.querySelector('meta[name="user-id"]').content;  // Ambil user_id dari meta tag
            const progressId = document.querySelector('meta[name="progress-id"]')?.content ?? null;
            const assessmentId = 3;
            const afterAssessmentId = (page === "/page2_0") ? 1 : 2;

            // Cek di database apakah sudah ada data di tabel user_evaluate untuk user_id yang bersangkutan
            fetch("/check-user-evaluation", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                },
                body: JSON.stringify({ 
                    user_id: userId, 
                    progress_id: progressId,
                    after_asessment_id: afterAssessmentId })
            })
            .then(response => response.json())
            .then(data => {
                const modalTitle = modalEval.querySelector("#modal-title");
                const modalText = modalEval.querySelector("p");
                const btnStartLearningText = btnStartEvalConfirm;

                if (data.evaluationCompleted) {
                    // Jika sudah pernah mengerjakan evaluasi, ubah tampilan modal dan arahkan ke page3_0
                    modalTitle.innerText = "Kembali ke Pembelajaran?";  // Ubah judul
                    modalText.innerHTML = "Anda telah menyelesaikan tahapan evaluasi sebelumnya, jadi Anda dapat langsung ke halaman berikutnya tanpa harus mengerjakan evaluasi lagi.<br><br>Jika memerlukan bantuan lebih lanjut, <a href='https://wa.me/082156226440' class='relative text-blue31 font-medium before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full'>hubungi tim dukungan kami disini.</a>";
                    btnStartLearningText.innerText = "Lanjutkan";

                    btnStartEvalConfirm?.addEventListener("click", () => {
                        if (page === "/page2_0") {
                            window.location.href = "/page3_0";
                        }
                        else if (page === "/page8_0") {
                            window.location.href = "/preLearn";
                        }
                    });
                    
                } else if (sudahSelesai) {
                    btnStartEvalConfirm?.addEventListener("click", () => {
                        if (page === "/page2_0") {
                            window.location.href = "/page2_2";
                        }
                        else if (page === "/page8_0") {
                            window.location.href = "/page8_2_0";
                        }
                    });
                }
            });
        }


        // --- Page3_0: Navigasi Kembali ke Penilaian (page2_0)
        if (page === "/page3_0") {
            const modalBackToAsessment = document.getElementById("modalDialog_BackToAsessment");
            const confirmBackToAsessment = document.getElementById("btnConfirmBack_toAsessment");
            const cancelBackToAsessment = document.getElementById("btnCancelBack_stayHere");

            // Tombol "Sebelumnya" di page3_0 akan membuka modal
            const prevBtn = document.getElementById("prev-btn");
            prevBtn?.addEventListener("click", (e) => {
                e.preventDefault();
                modalBackToAsessment?.classList.remove("hidden");
            });

            // Tombol "Lanjutkan" di modal
            confirmBackToAsessment?.addEventListener("click", () => {
                window.location.href = "/page2_0?asessment_id=1"; // Arahkan ke page2_0 pasca penilaian
            });

            // Tombol "Kembali" di modal
            cancelBackToAsessment?.addEventListener("click", () => {
                modalBackToAsessment?.classList.add("hidden"); // Menutup modal tanpa navigasi
            });
        }
    }

    
    document.addEventListener("DOMContentLoaded", function () {
        adjustNavigation();// Menyesuaikan style navigasi dan posisi footer
        setupAsessmentDialog();// Atur modal dan navigasi khusus halaman penilaian
        setupNavigation();// Atur navigasi umum antar halaman
    });

    window.addEventListener("scroll", adjustNavigation);
    window.addEventListener("resize", adjustNavigation);    

</script>