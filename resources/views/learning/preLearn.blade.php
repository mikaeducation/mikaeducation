<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-Learning | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('public/assets/css/style.css')
        {{-- <script>document.documentElement.classList.add('js')</script> --}}
    </head>
    <body class="font-futura h-max w-full relative">

    @include('includes.components.elearning.header')   
        
    <section class="w-full h-full mt-12 lg:mt-12 flex justify-center items-center">
        <div class="flex-col items-start justify-start w-3/4 h-full text-blue31">
            <div id="learn-userResult" class="w-full h-fit space-y-4 mb-10">
                <div class="flex items-center justify-start">
                    <img src="{{ asset('images/wavinghand.gif') }}" alt="" class="h-14 w-14">
                    <h2 class="font-medium text-3xl">Selamat, anda berhasil menyelesaikan pembelajaran!</h2>
                </div>
                <div class="w-full h-fit flex justify-between gap-2 rounded border-2 border-l-8 border-blue31">
                    <div class="w-3/4 h-fit flex gap-6 py-6 pl-6">
                        <div class="h-full lg:w-1/5 border border-blue31 rounded">
                            <img src="{{ asset('images/content-2.png') }}" alt="Content Image" class="object-cover rounded">
                        </div>
                        <div class="flex-col flex w-4/5 justify-between">
                            <div>
                                <h6 id="module-publisher" class="">Media Visual Komunikasi Anak</h6>
                                <h1 class="font-semibold text-xl lg:text-3xl">Belajar Autisme dengan MIKA Education</h1>
                            </div>
                            <div class="flex gap-10">
                                <div id="learn-status" class="flex items-center justify-center gap-2 text-lg font-medium">
                                    <svg width="20" height="20" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 13C0 5.8203 5.8203 0 13 0C20.1797 0 26 5.8203 26 13C26 20.1797 20.1797 26 13 26C5.8203 26 0 20.1797 0 13Z" fill="#31587C"/>
                                        <path d="M7 13L10.2929 16.2929C10.6834 16.6834 11.3166 16.6834 11.7071 16.2929L19 9" stroke="white" stroke-width="4" stroke-linecap="round"/>
                                    </svg>
                                    <p>Lulus</p>
                                </div>
                                <div id="learn-progress-status" class="flex items-center justify-center gap-0.5 text-lg font-medium">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 19H5" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M11 14V10C11 8.89543 10.1046 8 9 8C7.89543 8 7 8.89543 7 10V14C7 15.1046 7.89543 16 9 16C10.1046 16 11 15.1046 11 14Z" fill="#31587C"/>
                                        <path d="M17 14V6C17 4.89543 16.1046 4 15 4C13.8954 4 13 4.89543 13 6V14C13 15.1046 13.8954 16 15 16C16.1046 16 17 15.1046 17 14Z" fill="#31587C"/>
                                    </svg>
                                    <p>100% (Progress Selesai)</p>
                                </div>
                                <div id="learn-review" class="flex items-center justify-center gap-2 text-lg font-medium">
                                    <svg width="20" height="20" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.25 2.5V9.25L15.25 9.30441V9.30442V9.30443V9.30444C15.2499 9.7285 15.2498 10.1406 15.2955 10.4805C15.347 10.8637 15.4726 11.301 15.8358 11.6642C16.199 12.0274 16.6363 12.153 17.0195 12.2045C17.3594 12.2502 17.7715 12.2501 18.1956 12.25H18.1956H18.1956H18.1956L18.25 12.25H25V20C25 23.5355 25 25.3033 23.9017 26.4017C22.8033 27.5 21.0355 27.5 17.5 27.5H12.5C8.96447 27.5 7.1967 27.5 6.09835 26.4017C5 25.3033 5 23.5355 5 20V10C5 6.46447 5 4.6967 6.09835 3.59835C7.1967 2.5 8.96447 2.5 12.5 2.5H15.25ZM17.25 2.50167V9.25C17.25 9.74967 17.2521 10.0238 17.2777 10.214L17.2787 10.2213L17.286 10.2223C17.4762 10.2479 17.7503 10.25 18.25 10.25H24.9983C24.9919 9.59064 24.9608 9.1935 24.8097 8.82883C24.6194 8.3694 24.2581 8.00811 23.5355 7.28555L23.5355 7.28554L20.2145 3.96447C19.4919 3.24189 19.1306 2.8806 18.6712 2.6903C18.3065 2.53925 17.9094 2.50809 17.25 2.50167ZM10.25 16.25C10.25 15.6977 10.6977 15.25 11.25 15.25L18.75 15.25C19.3023 15.25 19.75 15.6977 19.75 16.25C19.75 16.8023 19.3023 17.25 18.75 17.25L11.25 17.25C10.6977 17.25 10.25 16.8023 10.25 16.25ZM11.25 20.25C10.6977 20.25 10.25 20.6977 10.25 21.25C10.25 21.8023 10.6977 22.25 11.25 22.25H16.25C16.8023 22.25 17.25 21.8023 17.25 21.25C17.25 20.6977 16.8023 20.25 16.25 20.25H11.25Z" fill="#31587C"/>
                                    </svg>
                                    <a href="" class="relative before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full">Lihat Riwayat Penilaian</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/4 text-center flex flex-col gap-2 items-center justify-center">
                        <a href="" class="w-3/5 text-center font-medium text-lg p-2 bg-blue31 text-white rounded hover:bg-transparent hover:text-blue31 hover:border-2 hover:border-blue31">
                            Lihat Sertifikat
                        </a>
                        <a href="" class="w-3/5 text-center font-medium text-lg p-2 border-2 border-blue31 bg-transparent text-blue31 rounded hover:bg-blue31 hover:text-white">
                            Belajar Lagi
                        </a>
                    </div>
                </div>
            </div>
            <div class="block lg:flex h-full w-full lg:w-full">
                <div class="flex-col w-full h-auto lg:w-full border-4 border-blue31 rounded">
                    <div class="w-full h-fit flex justify-start items-center p-5 gap-2 bg-blue31 text-white">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.75 21.25H11.25C11.947 21.25 12.2955 21.25 12.5853 21.3076C13.7753 21.5444 14.7056 22.4747 14.9424 23.6647C15 23.9545 15 24.303 15 25V11C15 8.17157 15 6.75736 14.1213 5.87868C13.2426 5 11.8284 5 9 5H5.75C4.80719 5 4.33579 5 4.04289 5.29289C3.75 5.58579 3.75 6.05719 3.75 7V19.25C3.75 20.1928 3.75 20.6642 4.04289 20.9571C4.33579 21.25 4.80719 21.25 5.75 21.25Z" stroke="white" stroke-width="2"/>
                            <path d="M24.25 21.25H18.75C18.053 21.25 17.7045 21.25 17.4147 21.3076C16.2247 21.5444 15.2944 22.4747 15.0576 23.6647C15 23.9545 15 24.303 15 25V11C15 8.17157 15 6.75736 15.8787 5.87868C16.7574 5 18.1716 5 21 5H24.25C25.1928 5 25.6642 5 25.9571 5.29289C26.25 5.58579 26.25 6.05719 26.25 7V19.25C26.25 20.1928 26.25 20.6642 25.9571 20.9571C25.6642 21.25 25.1928 21.25 24.25 21.25Z" stroke="white" stroke-width="2"/>
                        </svg>                                
                        <h3 class="text-xl font-medium">Aktivitas Belajar</h3>
                    </div>
                    <p class="hidden text-blue31 p-5 mb-20 lg:mb-0 text-lg font-medium">Belum ada Aktivitas Belajar.</p>
                    <div class="p-5">
                        <div class="w-full h-fit border-l-8 border-2 border-bluee3 flex">
                            <div class="p-3 w-3/4 font-medium">
                                <h3 class="">Selesai dipelajari</h3>
                                <h2 class="text-blue6a text-lg">Belajar Autisme dengan MIKA Education</h2>
                            </div>
                            <div class="w-1/4 flex items-center justify-center">
                                <a href="" class="w-2/3 text-center font-medium text-lg py-1 border-2 border-blue31 text-blue31 rounded hover:bg-blue31 hover:text-white hover:border-0">
                                    Tinjau
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-col h-fit ml-0 lg:ml-12 mt-5 lg:mt-0 w-full lg:w-1/3">
                    <div class="w-full h-full flex-col lg:w-full border-4 border-blue31 rounded">
                        <div class="w-full h-fit flex justify-start items-center p-5 gap-2 bg-blue31 text-white">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="3.75" y="7.5" width="22.5" height="18.75" rx="2" stroke="white" stroke-width="2"/>
                                <path d="M5 13.75H25" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                <path d="M12.5 20H17.5" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                <path d="M15 17.5L15 22.5" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                <path d="M10 3.75L10 8.75" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                <path d="M20 3.75L20 8.75" stroke="white" stroke-width="2" stroke-linecap="round"/>
                            </svg>                                                                    
                            <h3 class="text-xl font-medium">Aktivitas Lain</h3>
                        </div>
                        <div class="h-fit w-full flex flex-col justify-center text-lg font-medium text-justify">
                            <p class="text-blue31 p-5">Berhasil menyelesaikan pembelajaran “Belajar Autisme dengan MIKA Education.</p>
                            <div class="hidden w-full h-full flex-col justify-center">
                                <p class="text-blue31 p-5">Belum ada Aktivitas Lain.</p>
                                <div class="space-y-5 pb-10">
                                    <div class="w-5/6 h-1/3 mx-5 py-3 px-5 bg-bluee3 rounded flex-col justify-start items-center cursor-pointer transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-105">
                                        <a href="/">
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.25 8.75L16.25 8.75" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                <path d="M11.25 18.75L15 18.75" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                <path d="M11.25 13.75L18.75 13.75" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                <path d="M23.75 13.75V9.75C23.75 6.92157 23.75 5.50736 22.8713 4.62868C21.9926 3.75 20.5784 3.75 17.75 3.75H12.25C9.42157 3.75 8.00736 3.75 7.12868 4.62868C6.25 5.50736 6.25 6.92157 6.25 9.75V20.25C6.25 23.0784 6.25 24.4926 7.12868 25.3713C8.00736 26.25 9.42157 26.25 12.25 26.25H15" stroke="#31587C" stroke-width="2"/>
                                                <circle cx="21.875" cy="21.875" r="3.125" stroke="#31587C" stroke-width="2"/>
                                                <path d="M26.25 26.25L24.375 24.375" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                            </svg>
                                            <p>Telusuri daftar khusus yang tersedia.</p>
                                        </a>
                                    </div>
                                    <div class="w-5/6 h-1/3 mx-5 py-3 px-5 bg-bluee3 rounded flex-col justify-start items-center cursor-pointer transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-105">
                                        <a href="/">
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="3.75" y="7.5" width="22.5" height="18.75" rx="2" stroke="#31587C" stroke-width="2"/>
                                                <path d="M3.75 11.5C3.75 9.61438 3.75 8.67157 4.33579 8.08579C4.92157 7.5 5.86438 7.5 7.75 7.5H22.25C24.1356 7.5 25.0784 7.5 25.6642 8.08579C26.25 8.67157 26.25 9.61438 26.25 11.5V12.5H3.75V11.5Z" fill="#31587C"/>
                                                <path d="M8.75 3.75L8.75 7.5" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                <path d="M21.25 3.75L21.25 7.5" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                <rect x="8.75" y="15" width="5" height="2.5" rx="0.5" fill="#31587C"/>
                                                <rect x="8.75" y="20" width="5" height="2.5" rx="0.5" fill="#31587C"/>
                                                <rect x="16.25" y="15" width="5" height="2.5" rx="0.5" fill="#31587C"/>
                                                <rect x="16.25" y="20" width="5" height="2.5" rx="0.5" fill="#31587C"/>
                                            </svg>                                                
                                            <p>Telusuri kegiatan yang tersedia.</p>
                                        </a>
                                    </div>
                                    <div class="w-5/6 h-1/3 mx-5 py-3 px-5 bg-bluee3 rounded flex-col justify-start items-center cursor-pointer transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-105">
                                        <a href="/">
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M26.25 15H22.3204C21.7964 15 21.5344 15 21.3133 15.1183C21.0922 15.2367 20.9469 15.4546 20.6563 15.8906L19.3437 17.8594C19.0531 18.2954 18.9078 18.5133 18.6867 18.6317C18.4656 18.75 18.2036 18.75 17.6796 18.75H12.3204C11.7964 18.75 11.5344 18.75 11.3133 18.6317C11.0922 18.5133 10.9469 18.2954 10.6563 17.8594L9.34373 15.8906C9.05309 15.4546 8.90777 15.2367 8.68667 15.1183C8.46558 15 8.2036 15 7.67963 15H3.75" stroke="#31587C" stroke-width="2"/>
                                                <path d="M10.625 10L15 6.25M15 6.25L19.375 10M15 6.25L15 15" stroke="#31587C" stroke-width="2"/>
                                                <path d="M6.25 11.25L4.04289 13.4571C3.85536 13.6446 3.75 13.899 3.75 14.1642V21.75C3.75 22.8546 4.64543 23.75 5.75 23.75H24.25C25.3546 23.75 26.25 22.8546 26.25 21.75V14.1642C26.25 13.899 26.1446 13.6446 25.9571 13.4571L23.75 11.25" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                            </svg>                                                                                                
                                            <p>Telusuri informasi yang tersedia.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('includes.components.elearning.footer')
    
    </body>

    @include('includes.components.elearning.course.dialog.ratingLearn')
    @include('includes.components.elearning.course.dialog.modal-asessment')

</html>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const fromEval = sessionStorage.getItem("fromEvaluation");
        const ratingModal = document.getElementById("rating-learn");
        const mainContent = document.getElementById("main-content");
        const screen = document.getElementById("loadingScreen");
        const typingText = document.getElementById("typingText");
        const message = "Anda berhasil menyelesaikan pembelajaran. Silahkan mengisi ulasan dan rating pembelajaran berikut...";
        const speed = 40;

        if (fromEval === "true") {
            sessionStorage.removeItem("fromEvaluation");

            if (mainContent) mainContent.classList.add("hidden");

            setTimeout(() => {
                let duration = 3000;

                if (typeof showLoadingScreen === "function") {
                    duration = showLoadingScreen(message, speed); // Dapatkan estimasi durasi ketik
                } else {
                    if (screen && typingText) {
                        screen.style.display = "flex";
                        typingText.innerHTML = message;
                    }
                }

                // Setelah typing selesai, jalankan fade-out (500ms)
                setTimeout(() => {
                    if (screen) {
                        screen.classList.remove("fade-in");
                        screen.classList.add("fade-out");
                    }

                    // Setelah fade-out selesai, sembunyikan dan munculkan rating
                    setTimeout(() => {
                        if (screen) {
                            screen.classList.add("hidden");
                            screen.style.display = "none";
                        }
                        if (ratingModal) {
                            ratingModal.classList.remove("hidden");
                        }
                    }, 2000); // waktu fade-out

                }, duration);
            }, 0);
        }

        document.getElementById("rating-submit-btn")?.addEventListener("click", () => {
            ratingModal?.classList.add("hidden");
            mainContent?.classList.remove("hidden");
        });
    });
</script>




