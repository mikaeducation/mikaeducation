<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-Learning | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="user-id" content="{{ Auth::id() }}">
        @vite('public/assets/css/style.css')
    </head>
    <body class="font-futura h-max w-full relative">

    @include('includes.components.elearning.header')   
        
    <section class="w-full h-full mt-12 lg:mt-12 flex justify-center items-center">
        <div class="flex-col items-start justify-start w-3/4 h-full text-blue31">
            @if ($progress)          
                <div id="learn-userResult" class="w-full h-fit space-y-4 mb-10">
                    {{-- Greetings --}}
                    <div class="flex items-center justify-start text-justify font-medium text-xl md:text-3xl">
                        @if ($progress->is_completed)
                            <img id="gretings-icon" src="{{ asset('images/wavinghand.gif') }}" alt="" class="md:h-14 h-10 md:w-14 w-10">
                            <h2 id="greetings-condition" class="">
                                Selamat, anda berhasil menyelesaikan pembelajaran..!
                            </h2>
                        @else
                            {{-- Tanpa icon jika belum selesai --}}
                            <h2 id="greetings-condition" class="">
                                Hai, ada pembelajaran yang sedang Anda kerjakan ya..!
                            </h2>
                        @endif
                    </div>
                    {{-- Informasi Modul --}}
                    <div class="w-full lg:h-fit xl:h-[150px] flex flex-col md:flex-row justify-between gap-4 rounded border-2 border-l-8 border-blue31">
                        <div class="w-full h-full flex gap-6 py-6 pl-6 md:pr-0 pr-6">
                            <div class="h-full lg:w-1/3 xl:w-1/6 hidden xl:flex border border-blue31 rounded">
                                <img id="module_publisher_banner" src="{{ asset($module->module_publisher_banner) }}" alt="Module Banner" class="object-cover h-full w-full rounded">
                            </div>
                            <div class="flex-col flex w-full justify-between space-y-3">
                                <div>
                                    <h6 id="publisher-name">{{ $module->module_publisher_name }}</h6>
                                    <h1 id="module-title" class="font-semibold text-2xl md:text-xl lg:text-2xl">{{ $module->module_title }}</h1>
                                </div>
                                <div class="flex justify-between w-full lg:w-4/5 xl:w-5/6 xl:text-lg md:text-base text-lg font-medium lg:gap-2">
                                    {{-- Learn Status --}}
                                    <div id="learn-status" class="flex items-center justify-center gap-2">
                                        <svg width="20" height="20" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="13" cy="13" r="13" fill="#31587C"/>
                                            <path d="M7 13L10.5 16.5L19 8" stroke="white" stroke-width="4" stroke-linecap="round"/>
                                        </svg>
                                        <p>{{ $progress->is_completed ? 'Lulus' : 'Belum Selesai' }}</p>
                                    </div>
                                    {{-- Learn Progress --}}
                                    <div id="learn-progress-status" class="flex items-center justify-center gap-0.5">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19 19H5" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                            <path d="M11 14V10C11 8.89543 10.1046 8 9 8C7.89543 8 7 8.89543 7 10V14C7 15.1046 7.89543 16 9 16C10.1046 16 11 15.1046 11 14Z" fill="#31587C"/>
                                            <path d="M17 14V6C17 4.89543 16.1046 4 15 4C13.8954 4 13 4.89543 13 6V14C13 15.1046 13.8954 16 15 16C16.1046 16 17 15.1046 17 14Z" fill="#31587C"/>
                                        </svg>
                                        <p>
                                            {{ $progress->percent_done }}%
                                            <span class="hidden lg:inline">
                                                ({{ $progress->percent_done == 100 ? 'Progress Selesai' : 'Sedang Berlangsung' }})
                                            </span>
                                        </p>
                                    </div>
                                    {{-- Review Link --}}
                                    <div id="learn-review" class="flex items-center justify-center gap-1.5">
                                        <svg width="20" height="20" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.25 2.5V9.25L15.25 9.30441V9.30442V9.30443V9.30444C15.2499 9.7285 15.2498 10.1406 15.2955 10.4805C15.347 10.8637 15.4726 11.301 15.8358 11.6642C16.199 12.0274 16.6363 12.153 17.0195 12.2045C17.3594 12.2502 17.7715 12.2501 18.1956 12.25H18.1956H18.1956H18.1956L18.25 12.25H25V20C25 23.5355 25 25.3033 23.9017 26.4017C22.8033 27.5 21.0355 27.5 17.5 27.5H12.5C8.96447 27.5 7.1967 27.5 6.09835 26.4017C5 25.3033 5 23.5355 5 20V10C5 6.46447 5 4.6967 6.09835 3.59835C7.1967 2.5 8.96447 2.5 12.5 2.5H15.25ZM17.25 2.50167V9.25C17.25 9.74967 17.2521 10.0238 17.2777 10.214L17.2787 10.2213L17.286 10.2223C17.4762 10.2479 17.7503 10.25 18.25 10.25H24.9983C24.9919 9.59064 24.9608 9.1935 24.8097 8.82883C24.6194 8.3694 24.2581 8.00811 23.5355 7.28555L23.5355 7.28554L20.2145 3.96447C19.4919 3.24189 19.1306 2.8806 18.6712 2.6903C18.3065 2.53925 17.9094 2.50809 17.25 2.50167ZM10.25 16.25C10.25 15.6977 10.6977 15.25 11.25 15.25L18.75 15.25C19.3023 15.25 19.75 15.6977 19.75 16.25C19.75 16.8023 19.3023 17.25 18.75 17.25L11.25 17.25C10.6977 17.25 10.25 16.8023 10.25 16.25ZM11.25 20.25C10.6977 20.25 10.25 20.6977 10.25 21.25C10.25 21.8023 10.6977 22.25 11.25 22.25H16.25C16.8023 22.25 17.25 21.8023 17.25 21.25C17.25 20.6977 16.8023 20.25 16.25 20.25H11.25Z" fill="#31587C"/>
                                        </svg>
                                        <a href="#" class="relative before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full">
                                            Tinjau Riwayat Penilaian
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Area tombol --}}
                        <div class="xl:w-1/4 md:w-1/3 w-full px-6 md:pb-0 pb-6 text-center flex flex-col gap-2 items-center justify-center">
                            @if ($progress->is_completed && $module->module_certificate)
                                <a href="{{ $module->module_certificate }}" target="_blank"
                                class="w-full md:w-fit lg:w-11/12 xl:w-5/6 text-center font-medium text-lg md:text-base xl:text-lg px-4 xl:px-0 p-2 bg-blue31 text-white rounded hover:bg-transparent hover:text-blue31 hover:border-2 hover:border-blue31">
                                    Lihat Sertifikat
                                </a>
                            @endif
                            <a href="{{ route('modules.show', ['id' => $module->module_id]) }}"
                            class="w-full md:w-fit lg:w-11/12 xl:w-5/6 text-center font-medium text-lg md:text-base xl:text-lg px-5 xl:px-0 p-1.5 lg:p-2 border-2 border-blue31 bg-transparent text-blue31 rounded hover:bg-blue31 hover:text-white">
                                {{ $progress->is_completed ? 'Belajar Lagi' : 'Lanjutkan Belajar' }}
                            </a>
                        </div>
                    </div>
                </div>
            @endif
            @if (!$progress)
                <div class="text-blue31 font-medium text-xl md:text-2xl mb-6">
                    Anda belum memulai pembelajaran apa pun. Silahkan <a href="/learn" class="relative before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2.5px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full"> pilih modul di halaman utama</a> untuk memulai.
                </div>
            @endif
            <div id="learn-userActivity" class="block lg:flex h-full w-full lg:w-full">
                <div id="activityRecap" class="flex-col w-full h-auto lg:w-full border-4 border-blue31 rounded">
                    <div class="w-full h-fit flex justify-start items-center p-5 gap-2 bg-blue31 text-white">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.75 21.25H11.25C11.947 21.25 12.2955 21.25 12.5853 21.3076C13.7753 21.5444 14.7056 22.4747 14.9424 23.6647C15 23.9545 15 24.303 15 25V11C15 8.17157 15 6.75736 14.1213 5.87868C13.2426 5 11.8284 5 9 5H5.75C4.80719 5 4.33579 5 4.04289 5.29289C3.75 5.58579 3.75 6.05719 3.75 7V19.25C3.75 20.1928 3.75 20.6642 4.04289 20.9571C4.33579 21.25 4.80719 21.25 5.75 21.25Z" stroke="white" stroke-width="2"/>
                            <path d="M24.25 21.25H18.75C18.053 21.25 17.7045 21.25 17.4147 21.3076C16.2247 21.5444 15.2944 22.4747 15.0576 23.6647C15 23.9545 15 24.303 15 25V11C15 8.17157 15 6.75736 15.8787 5.87868C16.7574 5 18.1716 5 21 5H24.25C25.1928 5 25.6642 5 25.9571 5.29289C26.25 5.58579 26.25 6.05719 26.25 7V19.25C26.25 20.1928 26.25 20.6642 25.9571 20.9571C25.6642 21.25 25.1928 21.25 24.25 21.25Z" stroke="white" stroke-width="2"/>
                        </svg>                                
                        <h3 class="text-xl font-medium">Aktivitas Belajar</h3>
                    </div>
                    @if (!$hasProgress)
                        <p id="noActivityRecap" class="text-blue31 p-5 mb-20 lg:mb-0 text-lg font-medium">Belum ada Aktivitas Belajar.</p>
                    @else
                        <div id="recapCard" class="p-5 space-y-4">
                            @foreach ($allProgress as $item)
                                <div class="w-full h-fit border-l-8 border-2 border-bluee3 flex justify-between">
                                    <div class="p-3 w-2/3 font-medium">
                                        <h3 class="{{ $item->is_completed ? '' : 'text-pinkee' }}">
                                            {{ $item->is_completed ? 'Selesai dipelajari' : 'Sedang Berlangsung...' }}
                                        </h3>
                                        <h2 class="text-blue6a text-lg">
                                            {{ $item->module->module_title ?? 'Judul Modul Tidak Ditemukan' }}
                                        </h2>
                                    </div>
                                    <div class="w-1/3 flex items-center justify-center lg:pr-0 xl:pr-4">
                                        @if ($item->is_completed)
                                            <a href="javascript:void(0)" 
                                                class="w-5/6 text-center font-medium text-lg py-2 lg:py-0 xl:py-2 border-2 border-blue31 text-blue31 rounded hover:bg-blue31 hover:text-white hover:border-0">
                                                Tinjau Pembelajaran
                                            </a>
                                        @else
                                            <a href="{{ route('modules.show', $item->module_id) }}"
                                                class="w-5/6 text-center font-medium text-lg py-2 lg:py-0 xl:py-2 hover:border-2 hover:border-blue31 hover:text-blue31 hover:bg-white rounded bg-blue31 text-white border-2 border-blue31">
                                                Lanjutkan Pembelajaran
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div id="otherActivity" class="flex-col h-fit ml-0 lg:ml-12 mt-5 lg:mt-0 w-full lg:w-1/3">
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
                        <div class="h-fit w-full pb-5 flex flex-col justify-center text-lg font-medium text-justify">
                            @if ($hasCompleted)
                                @php
                                    $completedTitle = optional($allProgress->firstWhere('is_completed', true)?->module)->module_title ?? 'Modul Tidak Dikenal';
                                    $completedCount = $allProgress->where('is_completed', true)->count();
                                @endphp
                                <p id="activityMessage" class="text-blue31 p-5">
                                    • Berhasil menyelesaikan pembelajaran “{{ $completedTitle }}” ({{ $completedCount }}x).
                                </p>
                            @else
                                <p id="noActivityMessage" class="text-blue31 p-5">Belum ada Aktivitas Lain.</p>
                            @endif
                            <div class="w-full h-1/3 px-5 rounded flex-col justify-start items-center cursor-pointer transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-105">
                                <a href="/learn" class="flex flex-row lg:flex-col gap-2 bg-bluee3 py-3 px-5">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.25 8.75L16.25 8.75" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M11.25 18.75L15 18.75" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M11.25 13.75L18.75 13.75" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M23.75 13.75V9.75C23.75 6.92157 23.75 5.50736 22.8713 4.62868C21.9926 3.75 20.5784 3.75 17.75 3.75H12.25C9.42157 3.75 8.00736 3.75 7.12868 4.62868C6.25 5.50736 6.25 6.92157 6.25 9.75V20.25C6.25 23.0784 6.25 24.4926 7.12868 25.3713C8.00736 26.25 9.42157 26.25 12.25 26.25H15" stroke="#31587C" stroke-width="2"/>
                                        <circle cx="21.875" cy="21.875" r="3.125" stroke="#31587C" stroke-width="2"/>
                                        <path d="M26.25 26.25L24.375 24.375" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    <p>Telusuri daftar modul yang saat ini tersedia.</p>
                                </a>
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

    window.addEventListener("popstate", function () {
        const forbiddenBackRoutes = [
            "/page8_2_1", "/page8_2_0", "/page8_1", "/page8_0",
            "/page7", "/page6_3", "/page6_2", "/page6_1_0", "/page6_0",
            "/page5_0", "/page4_0", "/page3_1_4", "/page3_0",
            "/page2_2", "/page2_1", "/page2_0", "/course"
        ];

        const path = window.location.pathname;
        const allowAccess = sessionStorage.getItem("canAccessCourse");

        if (forbiddenBackRoutes.includes(path) && !allowAccess) {
            window.location.replace("/learn"); // atau redirect lain sesuai sistem
        }
    });


    document.addEventListener("DOMContentLoaded", function () {
        const fromEval = sessionStorage.getItem("fromEvaluation");
        const ratingModal = document.getElementById("rating-learn");
        const mainContent = document.getElementById("main-content");
        const screen = document.getElementById("loadingScreen");
        const typingText = document.getElementById("typingText");
        const message = "Anda berhasil menyelesaikan pembelajaran. Silahkan mengisi ulasan dan rating pembelajaran berikut...";
        const speed = 40;

        sessionStorage.removeItem("canAccessCourse");
        sessionStorage.removeItem("currentModuleId");

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




