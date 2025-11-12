<div class="w-full min-h-max text-white">
    <div class="w-full min-h-max flex items-center flex-col">
        <div class="w-full h-full overflow-hidden">
            <!-- Untuk layar besar -->
            <div class="relative hidden lg:block">
                <div id="slider-lg" class="w-full h-full flex transition-transform duration-1000 ease-in-out">
                    <img src="{{ asset('images/banner3.png') }}" class="w-full h-full flex-shrink-0 object-fill">
                    <img src="{{ asset('images/banner1.png') }}" class="w-full h-full flex-shrink-0 object-fill">
                    <img src="{{ asset('images/banner2.png') }}" class="w-full h-full flex-shrink-0 object-fill">
                    <img src="{{ asset('images/banner3.png') }}" class="w-full h-full flex-shrink-0 object-fill">
                    <img src="{{ asset('images/banner1.png') }}" class="w-full h-full flex-shrink-0 object-fill">
                </div>
                <button id="prevBtn-lg" class="absolute top-72 left-3 transform -translate-y-1/2 bg-black bg-opacity-40 text-white p-2 px-4 rounded-full z-10">&#10094;</button>
                <button id="nextBtn-lg" class="absolute top-72 right-3 transform -translate-y-1/2 bg-black bg-opacity-40 text-white p-2 px-4 rounded-full z-10">&#10095;</button>
            </div>
            <!-- Untuk layar kecil -->
            <div class="relative lg:hidden block">
                <div id="slider-sm" class="w-full h-full flex transition-transform duration-1000 ease-in-out">
                    <img src="{{ asset('images/banner3.png') }}" class="w-full h-full flex-shrink-0 object-cover object-top">
                    <img src="{{ asset('images/bg1.png') }}" class="w-full h-full flex-shrink-0 object-cover object-top">
                    <img src="{{ asset('images/banner2.png') }}" class="w-full h-full flex-shrink-0 object-cover">
                    <img src="{{ asset('images/banner3.png') }}" class="w-full h-full flex-shrink-0 object-cover">
                    <img src="{{ asset('images/bg1.png') }}" class="w-full h-full flex-shrink-0 object-cover object-top">
                </div>
                <button id="prevBtn-sm" class="absolute top-1/3 md:top-1/2 left-3 transform -translate-y-1/2 bg-black bg-opacity-40 text-white p-1 sm:p-2 px-3 sm:px-4 rounded-full z-10">&#10094;</button>
                <button id="nextBtn-sm" class="absolute top-1/3 md:top-1/2 right-3 transform -translate-y-1/2 bg-black bg-opacity-40 text-white p-1 sm:p-2 px-3 sm:px-4 rounded-full z-10">&#10095;</button>
            </div>
        </div>
        <div class="w-full pt-10 bg-blue31 flex items-center justify-center flex-col gap-5 md:gap-5 lg:gap-16">
            <div class="h-full w-3/4 flex flex-col items-start justify-center space-y-2">
                {{-- <h1 class="w-full text-xl md:text-2xl lg:text-4xl font-bold text-start lg:text-left pb-1 italic">
                    Media Visual Komunikasi Anak - Seperti apa?
                </h1> --}}
                <p class="text-justify text-base md:text-lg lg:text-xl text-bluee3">
                    {{-- Media Visual Komunikasi Anak atau MIKA adalah media pembelajaran yang dikembangkan untuk memperkuat penanganan Anak Berkebutuhan Khusus (ABK), terutama anak dengan Spektrum Autisme (Autism Spectrum Disorder; ASD) dan kesulitan komunikasi, agar menjadi lebih efektif dengan mengacu pada pengetahuan dan praktik baik berdasarkan riset (evidence-based).
                    <br><br> --}}
                    Media Visual Kominikasi Anak atau MIKA dibuat dalam 2 bentuk layanan:
                    <br>(1) MIKA 1.0 adalah aplikasi berbasis android sebagai teknologi terapi dengan stimulus multi-sensoris, memberikan umpan balik real time dan pencatatan kemajuan anak terstandar.
                    (2) MIKA Education adalah website sumber belajar tentang berbagai materi terkait Autisme yang berbasis online learning dan microcredentials. Website MIKA Education diharapkan berdaya guna dan efektif mendukung pendidikan inklusi di Indonesia.
                    <br>Informasi lebih lanjut mengenai MIKA 1.0 dan MIKA Education diuraikan di bawah ini.
                    <span class="text-base italic opacity-50">*silahkan klik/pilih layanan yang ingin Anda telusuri...</span>
                </p>
            </div>
            <div class="w-full h-fit flex flex-col md:flex-row items-center justify-center">
                <div class="w-3/4 h-full flex flex-row items-center lg:items-end justify-center text-white text-lg p-0">
                    <div class="w-1/2 flex flex-col justify-end items-center">
                        <div class="w-full h-auto md:h-1/3 flex items-end justify-end">
                            <div class="w-full flex items-end justify-end">
                                <button id="section1Button" onclick="showContent('section-1')" class="h-24 sm:h-20 md:h-24 w-full px-4 lg:px-6 rounded-t border-t-8 border-pinkee bg-white flex items-end">
                                    <div class="flex items-end w-full lg:pl-2 pb-1 md:gap-2 lg:gap-4">
                                        <img src="{{ asset('images/desktop.png') }}" alt="" class="md:w-28 lg:w-48 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 hidden md:block">
                                        <div class="w-full text-center md:text-left text-blue31 mb-3 flex-col leading-3 md:pb-0 ">
                                            <h3 class="text-lg sm:text-xl md:text-2xl font-bold">MIKA EDUCATION</h3>
                                            <p class="italic text-opacity-60 text-xs sm:text-sm lg:text-base md:hidden xl:flex">aplikasi website</p>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 h-full flex flex-col">
                        <div class="w-full h-auto md:h-1/3 flex">
                            <div class="w-full flex items-end justify-end">
                                <button id="section2Button" onclick="showContent('section-2')" class="h-24 sm:h-20 md:h-24 w-full px-0 sm:px-4 lg:px-6 rounded-t bg-blue31 flex items-end ">
                                    <div class="flex items-end justify-center w-full lg:px-4 pb-1 gap-3 lg:gap-8">
                                        <img src="{{ asset('images/tablet.png') }}" alt="" class="w-32 lg:w-52 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 hidden md:block">
                                        <div class="w-40 sm:w-56 text-center md:text-left mb-3 flex-col leading-5 md:pb-2 lg:pb-0 text-blue31">
                                            <h3 class="text-lg sm:text-xl md:text-2xl font-bold">MIKA 1.0</h3>
                                            <p class="italic text-opacity-60 text-xs sm:text-sm lg:text-base md:hidden xl:flex">aplikasi mobile</p>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="section-1" class="w-3/4 flex items-center justify-center py-4 px-0">
            <div class="w-full flex flex-col lg:flex-row items-start justify-start gap-0 lg:gap-11 text-base lg:text-lg text-blue31">
                <div class="w-full lg:w-[48%] text-justify pb-3 ">
                    <p>
                        MIKA Education merupakan platform belajar online untuk memahami Autisme, karakteristik belajar komunikasi pada individu autistik, strategi asesmen matriks perencanaan, metode intervensi TEACCH, serta administrasi, skoring dan interpretasi MIKA dalam mendampingi belajar komunikasi.
                        MIKA education dibentuk sebagai kelanjutan pengembangan MIKA 1.0 dan menjadi suatu model komprehensif belajar menggunakan teknologi, yang mengkombinasikan aplikasi belajar (MIKA 1.0) dan website sumber belajar (MIKA Education).
                        <span class="lg:hidden">Aplikasi berbasis website ini sedang dalam tahap pengembangan dan telah memiliki versi Beta yang dapat diakses sekarang juga dibawah ini.</span>
                    </p>
                </div>
                <div class="w-full lg:w-[52%] text-justify lg:mt-0 mt-4 lg:pl-12 border-l-0 lg:border-l-2 border-bluee3">
                    <p class="lg:flex hidden pb-6">Aplikasi berbasis website ini dalam tahap pengembangan lanjutan, namun telah tersedia secara global dalam versi Alpha yang menjadi versi pertama dan dapat diakses sekarang juga, dibawah ini.</p>
                    <a href="{{ Auth::check() ? '/learn' : '/login' }}" class="bg-blue31 text-lg text-white py-3 lg:px-6 px-10 w-full rounded hover:bg-blue6a">
                        Mulai Belajar</span>
                    </a>
                </div>
            </div>
            <div class="w-full h-fit flex flex-col items-start justify-start gap-24">
                <div id="" class="w-full lg:pt-20 pt-16">
                    <div class="w-full h-full flex flex-col gap-10 text-blue31 text-base lg:text-lg text-justify">
                        <div class="w-full h-fit flex-row xl:flex items-start justify-between space-y-6 md:space-y-4 xl:space-y-0">
                            <div class="w-full xl:w-[50%] flex flex-col xl:gap-4 gap-3">
                                <h1 class="text-2xl md:text-3xl xl:text-4xl font-bold text-start lg:text-left xl:whitespace-pre-line text-blue31"><span class="text-pinkee">Mengapa</span> perlu belajar
                                    dengan MIKA Education?
                                </h1>
                                <h5 class="italic font-medium text-base">Dukungan Sumber Belajar Autisme Pertama di Indonesia...!</h5>
                            </div>
                            <div class="w-full xl:w-[50%] flex-row md:flex gap-8 space-y-4 md:space-y-0">
                                <p class="w-full lg:w-1/2">
                                    MIKA Education membantu dalam memahami Autisme melalui pembelajaran
                                    berbasis keterampilan (microcredentials) yang aplikatif dan sesuai kebutuhan nyata.
                                </p>
                                <p class="w-full lg:w-1/2">
                                    Materi MIKA dikembangkan oleh tim ahli lintas bidang dan disampaikan dengan metode interaktif,
                                    membuat pembelajaran lebih bermakna dan mudah diterapkan.
                                </p>
                            </div>
                        </div>
                        <div class="w-full h-fit flex flex-wrap items-center justify-center xl:justify-between gap-0 lg:gap-5 md:space-y-0 space-y-5">
                            <div class="md:w-[50%] lg:w-[48%] xl:w-[32%] w-fit shadow-md p-4 flex items-center gap-4 rounded-md">
                                <div class="bg-blue31 p-3 rounded-full h-fit flex items-center justify-center">
                                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C13.4992 2 14.7004 2 15.6773 2.07361C15.5629 2.3601 15.5 2.6727 15.5 3V3.5H15C13.6193 3.5 12.5 4.61929 12.5 6C12.5 7.38071 13.6193 8.5 15 8.5H15.5V9C15.5 10.3807 16.6193 11.5 18 11.5C18.8178 11.5 19.5439 11.1073 20 10.5002V14C20 17.7712 20 19.6569 18.8284 20.8284C17.6569 22 15.7712 22 12 22C8.22876 22 6.34315 22 5.17157 20.8284C4 19.6569 4 17.7712 4 14V10C4 6.22876 4 4.34315 5.17157 3.17157C6.34315 2 8.22876 2 12 2ZM8 11C7.44772 11 7 11.4477 7 12C7 12.5523 7.44772 13 8 13H12C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11H8ZM8 14C7.44772 14 7 14.4477 7 15C7 15.5523 7.44772 16 8 16H14C14.5523 16 15 15.5523 15 15C15 14.4477 14.5523 14 14 14H8ZM8 17C7.44772 17 7 17.4477 7 18C7 18.5523 7.44772 19 8 19H12C12.5523 19 13 18.5523 13 18C13 17.4477 12.5523 17 12 17H8Z" fill="white"/>
                                        <path d="M18 3L18 9" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M21 6L15 6" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </div>
                                <div class="pr-2">
                                    <p class="font-medium text-lg lg:text-xl">Sertifikasi <span class="italic">Microcredentials</span></p>
                                    <p class="font-normal text-base">Mendapat sertifikat resmi pasca berhasil menyelesaikan modul belajar.</p>
                                </div>
                            </div>
                            <div class="md:w-[50%] lg:w-[48%] xl:w-[32%] w-fit shadow-md p-4 flex items-center gap-4 rounded-md">
                                <div class="bg-pinkee p-3 rounded-full h-fit flex items-center justify-center">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.8333 26.6667H26.6666C29.8093 26.6667 31.3807 26.6667 32.357 25.6904C33.3333 24.714 33.3333 23.1427 33.3333 20V11.6667C33.3333 8.52397 33.3333 6.95262 32.357 5.97631C31.3807 5 29.8093 5 26.6666 5H13.3333C10.1906 5 8.61925 5 7.64294 5.97631C6.66663 6.95262 6.66663 8.52397 6.66663 11.6667V30.8333C6.66663 28.5321 8.53211 26.6667 10.8333 26.6667ZM26.414 11.9193C25.633 11.1382 24.3669 11.1382 23.5859 11.9193L18.333 17.1712L16.414 15.2523C15.633 14.4714 14.3669 14.4714 13.5859 15.2523C12.8049 16.0333 12.805 17.2993 13.5859 18.0804L16.2119 20.7074C17.3835 21.8789 19.2835 21.8789 20.455 20.7074L26.414 14.7474C27.1951 13.9663 27.1951 12.7003 26.414 11.9193Z" fill="white"/>
                                        <path d="M32.357 25.6904L31.6499 24.9832L31.6499 24.9832L32.357 25.6904ZM32.357 5.97631L31.6499 6.68342L31.6499 6.68342L32.357 5.97631ZM7.64294 5.97631L6.93583 5.2692L6.93583 5.2692L7.64294 5.97631ZM23.5859 11.9193L24.2929 12.6264L24.293 12.6264L23.5859 11.9193ZM18.333 17.1712L17.6259 17.8783L18.3329 18.5854L19.04 17.8784L18.333 17.1712ZM16.414 15.2523L17.1211 14.5452L17.121 14.5451L16.414 15.2523ZM13.5859 15.2523L12.8789 14.5451L12.8788 14.5452L13.5859 15.2523ZM13.5859 18.0804L14.2931 17.3734L14.2931 17.3734L13.5859 18.0804ZM16.2119 20.7074L15.5046 21.4143L15.5048 21.4145L16.2119 20.7074ZM20.455 20.7074L21.1621 21.4145L21.1622 21.4144L20.455 20.7074ZM26.414 14.7474L25.7069 14.0403L25.7069 14.0403L26.414 14.7474ZM26.6666 26.6667V25.6667H10.8333V26.6667V27.6667H26.6666V26.6667ZM32.357 25.6904L31.6499 24.9832C31.3785 25.2546 30.9878 25.4464 30.191 25.5535C29.3654 25.6645 28.2662 25.6667 26.6666 25.6667V26.6667V27.6667C28.2097 27.6667 29.4676 27.6688 30.4574 27.5357C31.476 27.3988 32.3592 27.1024 33.0641 26.3975L32.357 25.6904ZM33.3333 20H32.3333C32.3333 21.5996 32.3312 22.6987 32.2202 23.5243C32.113 24.3211 31.9213 24.7119 31.6499 24.9832L32.357 25.6904L33.0641 26.3975C33.769 25.6925 34.0654 24.8094 34.2023 23.7908C34.3354 22.801 34.3333 21.5431 34.3333 20H33.3333ZM33.3333 11.6667H32.3333V20H33.3333H34.3333V11.6667H33.3333ZM32.357 5.97631L31.6499 6.68342C31.9213 6.9548 32.113 7.34552 32.2202 8.14234C32.3312 8.96793 32.3333 10.067 32.3333 11.6667H33.3333H34.3333C34.3333 10.1236 34.3354 8.86568 34.2023 7.87585C34.0654 6.85724 33.769 5.97413 33.0641 5.2692L32.357 5.97631ZM26.6666 5V6C28.2662 6 29.3654 6.00212 30.191 6.11312C30.9878 6.22025 31.3785 6.41203 31.6499 6.68342L32.357 5.97631L33.0641 5.2692C32.3592 4.56428 31.476 4.2679 30.4574 4.13096C29.4676 3.99788 28.2097 4 26.6666 4V5ZM13.3333 5V6H26.6666V5V4H13.3333V5ZM7.64294 5.97631L8.35004 6.68342C8.62143 6.41203 9.01214 6.22025 9.80897 6.11312C10.6346 6.00212 11.7337 6 13.3333 6V5V4C11.7902 4 10.5323 3.99788 9.54247 4.13096C8.52387 4.2679 7.64075 4.56428 6.93583 5.2692L7.64294 5.97631ZM6.66663 11.6667H7.66663C7.66663 10.067 7.66875 8.96793 7.77975 8.14234C7.88688 7.34552 8.07866 6.9548 8.35004 6.68342L7.64294 5.97631L6.93583 5.2692C6.23091 5.97413 5.93453 6.85724 5.79758 7.87585C5.6645 8.86568 5.66663 10.1236 5.66663 11.6667H6.66663ZM6.66663 30.8333H7.66663V11.6667H6.66663H5.66663V30.8333H6.66663ZM10.8333 26.6667V25.6667C7.97982 25.6667 5.66663 27.9799 5.66663 30.8333H6.66663H7.66663C7.66663 29.0844 9.08439 27.6667 10.8333 27.6667V26.6667ZM23.5859 11.9193L24.293 12.6264C24.6835 12.2359 25.3164 12.2359 25.7069 12.6264L26.414 11.9193L27.1211 11.2122C25.9496 10.0406 24.0504 10.0406 22.8788 11.2122L23.5859 11.9193ZM18.333 17.1712L19.04 17.8784L24.2929 12.6264L23.5859 11.9193L22.8789 11.2121L17.6259 16.4641L18.333 17.1712ZM16.414 15.2523L15.7069 15.9594L17.6259 17.8783L18.333 17.1712L19.0401 16.4641L17.1211 14.5452L16.414 15.2523ZM13.5859 15.2523L14.2929 15.9595C14.6834 15.5691 15.3165 15.5691 15.707 15.9595L16.414 15.2523L17.121 14.5451C15.9495 13.3738 14.0504 13.3738 12.8789 14.5451L13.5859 15.2523ZM13.5859 18.0804L14.2931 17.3734C13.9025 16.9827 13.9026 16.3498 14.293 15.9594L13.5859 15.2523L12.8788 14.5452C11.7072 15.7168 11.7075 17.6159 12.8787 18.7874L13.5859 18.0804ZM16.2119 20.7074L16.9191 20.0004L14.2931 17.3734L13.5859 18.0804L12.8787 18.7874L15.5046 21.4143L16.2119 20.7074ZM20.455 20.7074L19.7479 20.0002C18.9669 20.7812 17.7 20.7813 16.919 20.0002L16.2119 20.7074L15.5048 21.4145C17.0669 22.9765 19.6 22.9766 21.1621 21.4145L20.455 20.7074ZM26.414 14.7474L25.7069 14.0403L19.7479 20.0003L20.455 20.7074L21.1622 21.4144L27.1212 15.4544L26.414 14.7474ZM26.414 11.9193L25.7069 12.6264C26.0974 13.0169 26.0974 13.6498 25.7069 14.0403L26.414 14.7474L27.1211 15.4545C28.2927 14.2829 28.2927 12.3837 27.1211 11.2122L26.414 11.9193ZM18.3333 35V34H10.8333V35V36H18.3333V35ZM6.66663 30.8333H5.66663C5.66663 33.6868 7.97982 36 10.8333 36V35V34C9.08439 34 7.66663 32.5822 7.66663 30.8333H6.66663Z" fill="white"/>
                                        <path d="M33.3333 35H16.6666" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </div>
                                <div class="pr-2">
                                    <p class="font-medium text-lg lg:text-xl">Belajar Terstruktur & Terarah</span></p>
                                    <p class="font-normal text-base">Dirancang sesuai kebutuhan praktik terapi & belajar di lapangan.</p>
                                </div>
                            </div>
                            <div class="md:w-[50%] lg:w-[48%] xl:w-[32%] w-fit shadow-md p-4 flex items-center gap-4 rounded-md">
                                <div class="bg-blue31 p-3 rounded-full h-fit flex items-center justify-center">
                                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="9" r="4" fill="white"/>
                                        <circle cx="17" cy="9" r="3" fill="white"/>
                                        <circle cx="7" cy="9" r="3" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5685 18H19.895C20.4867 18 20.9403 17.4901 20.7966 16.9162C20.4284 15.4458 19.448 13 17 13C16.114 13 15.4201 13.3205 14.8781 13.7991C16.3858 14.7773 17.1654 16.4902 17.5685 18Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.12197 13.7991C8.57989 13.3205 7.88609 13 7 13C4.55208 13 3.57166 15.4458 3.20343 16.9162C3.05971 17.4901 3.51335 18 4.10498 18H6.43155C6.83464 16.4902 7.61422 14.7773 9.12197 13.7991Z" fill="white"/>
                                        <path d="M12 14C15.7087 14 16.6665 17.301 16.9139 19.0061C16.9932 19.5526 16.5523 20 16 20H8C7.44772 20 7.00684 19.5526 7.08614 19.0061C7.33351 17.301 8.29134 14 12 14Z" fill="white"/>
                                    </svg>
                                </div>
                                <div class="pr-2">
                                    <p class="font-medium text-lg lg:text-xl">Dukungan Ahli & Multidisiplin</p>
                                    <p class="font-normal text-base">Dikembangkan oleh pakar dengan kolaborasi bersama institusi pendidikan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full h-fit items-center justify-start mt-16">
                            <div class="w-full flex items-center justify-start relative">
                                <div class="w-full h-[100px] sm:h-[200px] md:h-[300px] bg-white flex lg:hidden">-</div>
                                <img class="w-[60%] hidden lg:flex rounded-3xl shadow-xl" src="{{ asset('images/content-2.1.png') }}" alt="">
                                <div class="w-full lg:w-[50%] absolute z-10 right-0">
                                    <div class="aspect-w-16 aspect-h-9 w-full h-full flex justify-center items-center border-0 lg:border-8 bg-white border-white lg:rounded-3xl overflow-hidden">
                                        @include('includes.content.main.video-player',
                                        ['src' => 'https://s3-id-jkt-1.kilatstorage.id/general-assets/short-tutorial-mika-education.mp4'])
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="" class="w-full mt-0 sm:mt-10 md:mt-5">
                    <div class="w-full h-fit flex items-start text-blue31">
                        <div class="w-full h-fit">
                            <div id="" class="text-container max-h-[590px] sm:max-h-[650px] md:max-h-[360px] text-base lg:text-lg text-justify space-y-4 relative overflow-hidden ">
                                <h1 class="w-full italic text-xl md:text-2xl lg:text-3xl font-bold text-start lg:text-left text-blue31">
                                    Bagaimana <span class="text-pinkee">Cara Belajar</span> di MIKA Education?
                                </h1>
                                <div class="w-full md:w-[40%] h-full float-none md:float-right md:ml-6 lg:ml-8 rounded">
                                    <img src="{{ asset('images/mika-edu-display.png') }}" alt="MIKA Education"class="w-[95%] h-full" />
                                </div>
                                <p>
                                    Website MIKA Education <span class="font-medium">dapat diakses melalui berbagai perangkat</span>, seperti dari laptop/komputer, tablet dan smartphone. Pada layanan pembelajaran akan menyediakan berbagai modul belajar terkait dengan Autisme dan Perkembangan Komunikasi.
                                    Untuk bisa menggunakan MIKA Education, anda perlu melakukan <span class="font-medium">registasi sebagai pengguna (user)</span>. Lalu mulai <span class="font-medium">memilih tombol pembelajaran yang berada di bilah navigasi atas</span>, kemudian <span class="font-medium">memilih modul yang tersedia</span>. Pastikan anda memilih modul belajar yang sesuai dengan minat dan kebutuhan anda.
                                    Dalam modul belajar, anda akan mengakses berbagai materi. Dari presentasi (informasi power point dan narasi presenter), modul implementasi, dan sumber bacaan. Untuk memastikan keterlibatan belajar dan pelaksanaan asesmen belajar, anda akan mengerjakan kuis, pre dan post test, dan laporan studi kasus. Jika anda telah melaksanakan semua komponen belajar, barulah anda dinyatakan lolos modul belajar dan berhak mengajukan sertifikat belajar.
                                    Saat ini, <span class="font-medium">modul yang tersedia adalah modul belajar menggunakan MIKA 1.0</span>.
                                    Berikutnya, akan lebih banyak modul yang bisa dipelajari di MIKA Education. Berbagai instansi/unit/sekolah juga bisa terlibat dalam kolaborasi pembuatan modul belajar bersama tim MIKA Education.
                                </p>
                            </div>
                            <div class="flex justify-start w-full pb-4 pt-2">
                                <button onclick="toggleContent(this)" class="toggle-button absolute z-10 px-8 py-2 bg-bluee3 text-blue31 hover:bg-blue31 hover:text-white rounded" onclick="toggleContent()">Baca Selengkapnya...</button>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-fit text-blue31 flex flex-col gap-4 mt-16">
                        <h1 class="w-full italic text-xl md:text-2xl lg:text-3xl font-bold text-left text-blue31">
                            Sertifikasi Microcredentials: Apa<span class="text-pinkee"> Manfaatnya</span> untuk Anda?
                        </h1>
                        <p class="w-full h-fit text-xl font-medium bg-bluee3 text-center px-6 py-6 rounded shadow-md">
                            "Dari hasil belajar di MIKA Education, anda bisa mendapatkan sertifikat atas hasil belajar anda.
                            Sertifikat ini bisa menjadi dukungan bukti belajar dan bermanfaat untuk perencanaan proses belajar anda kelak."
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="section-2" class="w-3/4 flex items-center justify-center py-4 px-0">
            <div class="w-full flex flex-col lg:flex-row items-start justify-start gap-0 lg:gap-11 text-base lg:text-lg text-blue31">
                <div class="w-full lg:w-[52%] text-justify lg:pr-12 pb-3 border-r-0 lg:border-r-2 border-bluee3">
                    <p>
                        MIKA 1.0 merupakan sebuah aplikasi perangkat lunak yang dikembangkan untuk mendukung pembelajaran komunikasi visual baru lebih cepat, lebih komprehensif dan sistematis. Aplikasi ini diharapkan mampu memberikan simulasi lebih baik untuk pembelajaran komunikasi pada Anak Berkebetuhan Khusus, khususnya Autism Spectrum Disorder (ASD).
                        <span class="lg:hidden">Aplikasi ini telah tersedia secara global dan dapat diunduh melalui Google Playstore dibawah ini.</span>
                    </p>
                </div>
                <div class="w-full lg:w-[48%] text-justify space-y-3">
                    <p class="lg:flex hidden">Aplikasi mobile ini telah tersedia secara global. Dapat diunduh melalui Tablet - Android pada Google Playstore dibawah ini.</p>
                    <a href="https://play.google.com/store/apps/details?id=com.vito.mika" class="w-full flex md:justify-start justify-start">
                        <img src="{{ asset('images/gplay.png') }}" alt="" class="w-1/3 sm:w-1/4 md:w-1/6 lg:w-1/4">
                    </a>
                </div>
            </div>
            <div class="w-full h-fit flex flex-col items-start justify-start mt-14">
                <div id="" class="w-full">
                    <div class="w-full h-fit flex items-start text-blue31 pb-14">
                        <div class="w-full h-fit">
                            <div class="text-container max-h-[590px] sm:max-h-[650px] md:max-h-[310px] text-base lg:text-lg text-justify space-y-4 relative overflow-hidden ">
                                <h1 class="w-full italic text-xl md:text-2xl lg:text-3xl font-bold text-start lg:text-left text-blue31">
                                    <span class="text-pinkee">Mengapa</span> harus MIKA 1.0?
                                </h1>
                                <div class="w-full md:w-[40%] h-full float-none md:float-right md:ml-6 lg:ml-8  bg-blue31 rounded">
                                    <div class="aspect-w-16 aspect-h-9 w-full h-full flex justify-center items-center overflow-hidden">
                                        @include('includes.content.main.video-player',
                                        ['src' => 'https://s3-id-jkt-1.kilatstorage.id/general-assets/teaser-mika-10.mp4'])
                                    </div>
                                </div>
                                <p>
                                    MIKA 1.0 adalah teknologi pendukung belajar komunikasi visual yang baru, lebih cepat, komprehensif dan sistematis sehingga dapat memberikan stimulasi pembelajaran komunikasi yang lebih baik
                                    karena dikembangkan berdasarkan sistem Aided Language Stimulation (ALS) dan Pragmatic Organisation Dynamic Display (PODD), dan juga bisa dikombinasikan dengan Picture Exchange Communication System (PECS).
                                    MIKA 1.0 dikembangkan dengan Bahasa Indonesia, namun bisa disesuaikan dengan konteks bahasa daerah dengan fitur penambahan kata dan istilah.
                                    Belajar komunikasi yang dibantu MIKA 1.0 akan menghasilkan lebih banyak konsep kata yang dapat dipelajari (sedikitnya ada 2000 kata tersimpan di MIKA 1.0).
                                    Seluruh proses belajar akan disimpan secara real time dan mudah diakses untuk mengevaluasi kemajuan terapi/belajar anak. Anak-anak ASD dan hendaya komunikasi dapat belajar
                                    hingga tingkat kemampuan komunikasi yang lebih tinggi (dari menambah perbendaharaan kata, menyusun kalimat sederhana hingga kompleks, dan mengembangkan dialog).
                                    <br><br>
                                    Selain itu, data yang diperoleh dari aplikasi perangkat lunak ini dapat digunakan untuk penelitian pengembangan intervensi autisme. Keterlibatan dan kontribusi anda akan bermakna dalam pengembangan intervensi pendidikan inklusi di Indonesia.
                                    MIKA 1.0 juga dilaunching di Google play sehingga memudahkan dan memperluas akses di Indonesia. MIKA 1.0 bisa diutamakan digunakan oleh Terapis dan Guru dalam proses terapi, maka dibuka seluasnya akses untuk sekolah dan pusat terapi di Indonesia.
                                    Orang tua juga bisa mendampingi belajar anaknya dengan MIKA 1.0, namun disarankan untuk turut belajar prinsip belajar komunikasi autisme agar bisa mengadministrasi MIKA 1.0 dengan baik.
                                </p>
                            </div>
                            <div class="flex justify-start w-full pb-4">
                                <button onclick="toggleContent(this)" class="toggle-button absolute z-10 px-8 py-2 bg-bluee3 text-blue31 hover:bg-blue31 hover:text-white rounded" onclick="toggleContent()">Baca Selengkapnya...</button>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-fit space-y-6 text-blue31">
                        <h2 class="text-xl font-medium">Dilengkapi dengan komponen utama pembelajaran</h2>
                        <div class="w-full lg:h-96 xl:h-72 lg:flex items-start justify-center text-base md:text-lg gap-5 grid md:grid-cols-2">
                            <div class="w-full lg:w-1/4 h-fit sm:h-60 lg:h-full bg-bluee3 flex flex-col items-center text-justify p-4 lg:pt-6 gap-2">
                                <div class="w-full flex items-center justify-center h-14">
                                    <img src="https://img.icons8.com/3d-fluency/94/visual-effects.png" alt="signing-a-document" class="h-full"/>
                                </div>
                                <p>
                                    Pembelajaran komunikasi berbasis visual untuk anak berkebutuhan khusus menggunakan metode Aided Language Stimulation (ALS) dan dukungan suara untuk setiap gambar.
                                </p>
                            </div>
                            <div class="w-full lg:w-1/4 h-fit sm:h-60 lg:h-full bg-bluee3 flex flex-col items-center text-justify p-4 lg:pt-6 gap-2">
                                <div class="w-full flex items-center justify-center h-14">
                                    <img src="https://img.icons8.com/3d-fluency/94/signing-a-document.png" alt="signing-a-document" class="h-full"/>
                                </div>
                                <p>
                                    Learning content yang dapat dipersonalisasi dengan fitur Penambahan kategori, gambar, dan suara berdasarkan kebutuhan anak-anak dan konteks lingkungan.
                                </p>
                            </div>
                            <div class="w-full lg:w-1/4 h-fit sm:h-60 lg:h-full bg-bluee3 flex flex-col items-center text-justify p-4 lg:pt-6 gap-2">
                                <div class="w-full flex items-center justify-center h-14">
                                    <img src="https://img.icons8.com/3d-fluency/94/product-documents.png" alt="signing-a-document" class="h-full"/>
                                </div>
                                <p>
                                    Manajemen performansi dan progress anak sebagai media analitis kemajuan anak serta penambahan opsi ulasan di setiap sesi pembelajaran.
                                </p>
                            </div>
                            <div class="w-full lg:w-1/4 h-fit sm:h-60 lg:h-full bg-bluee3 flex flex-col items-center text-justify p-4 lg:pt-6 gap-2">
                                <div class="w-full flex items-center justify-center h-14">
                                    <img src="https://img.icons8.com/3d-fluency/94/group--v3.png" alt="signing-a-document" class="h-full"/>
                                </div>
                                <p>
                                    Manajemen profil dan online-synchronization, untuk pengelolaan profil dan sinkronisasi data secara online.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="" class="w-full lg:pt-20 pt-16">
                    <h1 class="w-full italic text-xl md:text-2xl lg:text-3xl font-bold text-start lg:text-left text-blue31">
                        Bagaimana cara kerja MIKA 1.0?
                    </h1>
                    <div class="w-full h-full flex flex-col text-blue31 mt-8 space-y-5 text-base lg:text-lg text-justify">
                        <div class="w-full h-fit flex gap-5">
                            <div class="py-4 px-7 text-2xl font-bold bg-bluee3 rounded-l-full flex items-center justify-center">1</div>
                            <p class="w-full py-2 whitespace-pre-line border-2 border-bluee3 border-l-0 rounded pr-4"> <span class="font-bold">Pendaftaran profile anak</span>
                                Terapis dapat menambahkan biodata anak untuk dapat dilakukan pembelajaran komunikasi dengan aplikasi MIKA 1.0.
                            </p>
                        </div>
                        <div class="w-full h-fit flex gap-5">
                            <div class="py-4 px-7 text-2xl font-bold bg-bluee3 rounded-l-full flex items-center justify-center">2</div>
                            <p class="w-full py-2 whitespace-pre-line border-2 border-bluee3 border-l-0 rounded pr-4"> <span class="font-bold">Login tiap Terapis</span>
                                Terapis dapat masuk ke aplikasi MIKA 1.0 untuk menggunakan fitur-fitur aplikasi MIKA 1.0.
                            </p>
                        </div>
                        <div class="w-full h-fit flex gap-5">
                            <div class="py-4 px-7 h-20 text-2xl font-bold bg-bluee3 rounded-l-full flex items-center justify-center">3</div>
                            <p class="w-full py-2 whitespace-pre-line border-2 border-bluee3 border-l-0 rounded pr-4"> <span class="font-bold">Pengelolaan profil anak</span>
                                Terapis dapat mengisi dan merubah dan profil kemampuan anak (planning matrix) yang ada di aplikasi MIKA 1.0 sesuai kebutuhan dan perkembangan anak.
                            </p>
                        </div>
                        <div class="w-full h-fit flex gap-5">
                            <div class="py-4 px-7 h-20 text-2xl font-bold bg-bluee3 rounded-l-full flex items-center justify-center">4</div>
                            <div class="w-full pt-2 border-2 border-bluee3 border-l-0 rounded">
                                <p class="w-full whitespace-pre-line pr-4"> <span class="font-bold">Mengadministrasi MIKA 1.0</span>
                                    Terapis dapat memulai terapi/belajar komunikasi sesuai dengan tahap kemampuan anak. Secara umum, proses belajar komunikasi dibagi menjadi empat (4) level:
                                </p>
                                <div class="lg:flex item-start justify-start gap-4 space-y-4 pr-4 pb-4">
                                    <div class="p-4 lg:w-1/4 mt-4 bg-bluee3 text-center flex flex-col">
                                        <div class="lg:h-24 whitespace-pre-line">Level 1
                                            (Perbendaharaan kata)</div>
                                        <p class="text-justify">Anak dihadapkan dengan sekumpulan gambar dan memilih kata-kata yang dipelajari untuk menguasai komunikasi reseptif dan ekspresif. Tujuan fase ini adalah anak menggunakan kata-kata tersebut secara fungsional. Misalkan: belajar memahami dan mengekspresikan kata “makan”, hingga anak mampu menggunakan kata tersebut untuk meminta makan.</p>
                                    </div>
                                    <div class="p-4 lg:w-1/4 bg-bluee3 text-center flex flex-col">
                                        <div class="lg:h-24 whitespace-pre-line">Level 2
                                            (Menyusun Kalimat Sederhana - terdiri 2 kata)</div>
                                        <p class="text-justify">Anak dihadapkan dengan sekumpulan gambar dan memilih 2 kata untuk menyusun kalimat sederhana (subyek + predikat). Tujuan fase ini adalah anak menggunakan kalimat sederhana tersebut secara fungsional, baik secara reseptif dan ekspresif.</p>
                                    </div>
                                    <div class="p-4 lg:w-1/4 bg-bluee3 text-center flex flex-col">
                                        <div class="lg:h-24 whitespace-pre-line">Level 3
                                            (Menyusun Kalimat Kompleks - terdiri 3-4 kata atau lebih)</div>
                                        <p class="text-justify">Anak dihadapkan dengan sekumpulan gambar dan memilih 2 kata untuk menyusun kalimat kompleks (subyek + predikat + obyek + keterangan). Tujuan fase ini adalah anak menggunakan kalimat kompleks tersebut secara fungsional, baik secara reseptif dan ekspresif.</p>
                                    </div>
                                    <div class="p-4 lg:w-1/4 bg-bluee3 text-center flex flex-col">
                                        <div class="lg:h-24 whitespace-pre-line">Level 4
                                            (Menyusun dialog)</div>
                                        <p class="text-justify">Anak dihadapkan dengan sekumpulan gambar dan menyusun percakapan dengan menggunakan alat bantu visual percakapan (menyusun kalimat tanya dan kalimat respon/komentar). Tujuan fase ini adalah anak mampu berdialog secara fungsional.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full h-fit flex gap-5">
                            <div class="py-4 px-7 text-2xl font-bold bg-bluee3 rounded-l-full flex items-center justify-center">5</div>
                            <p class="w-full py-2 whitespace-pre-line border-2 border-bluee3 border-l-0 rounded pr-4"> <span class="font-bold">Mengevaluasi keberhasilan terapi/belajar</span>
                                Terapis dapat mengevaluasi hasil terapi komunikasi anak selama masa terapi/belajar.
                            </p>
                        </div>
                        <div class="w-full h-fit flex gap-5">
                            <div class="py-4 px-7 text-2xl font-bold bg-bluee3 rounded-l-full flex items-center justify-center">6</div>
                            <p class="w-full py-2 whitespace-pre-line border-2 border-bluee3 border-l-0 rounded pr-4"> <span class="font-bold">Mengelola dan mengamati perkembangan anak</span>
                                Terapis dapat melihat dan merubah perkembangan anak selama terapi/belajar berlangsung.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w-full mt-20 bg-blue31 text-white flex items-center justify-center">
    <div class="w-3/4 flex flex-col items-center justify-center py-12 space-y-8 border-b-2 border-white">
        <h3 class="text-lg lg:text-xl font-bold text-justify">Berkolaborasi dengan sejumlah <span class="text-pinkee border-b-2 border-pinkee">pusat dukungan dan pendidikan autisme di Indonesia</span> </h3>
        <div class="w-full sm:flex justify-center items-center gap-5 lg:gap-10 grid grid-cols-2">
            <div class="flex items-center justify-center bg-white w-full lg:w-40 h-28 sm:h-28 md:h-32 lg:h-40 rounded">
                <img src="{{ asset('images/fpa.png') }}" alt="" class="rounded-full w-24 lg:w-32 lg:h-32">
            </div>
            <div class="flex items-center justify-center bg-white w-full lg:w-40 h-28 sm:h-28 md:h-32 lg:h-40 rounded">
                <img src="{{ asset('images/uner.png') }}" alt="" class="w-28 sm:w-fit lg:h-32">
            </div>
            <div class="flex items-center justify-center bg-white w-full lg:w-40 h-28 sm:h-28 md:h-32 lg:h-40 rounded">
                <img src="{{ asset('images/uptd-sdj.png') }}" alt="" class="w-28 sm:w-[80%] lg:h-32">
            </div>
            <div class="flex items-center justify-center bg-white w-full lg:w-40 h-28 sm:h-28 md:h-32 lg:h-40 rounded">
                <img src="{{ asset('images/river.png') }}" alt="" class="rounded-full w-24 lg:w-32 lg:h-32">
            </div>
            <div class="flex items-center justify-center bg-white w-full lg:w-40 h-28 sm:h-28 md:h-32 lg:h-40 rounded">
                <img src="{{ asset('images/aawa.png') }}" alt="" class="rounded-full w-24 lg:w-32 lg:h-32">
            </div>
        </div>
        <p class="text-base lg:text-lg text-justify">Media ini dikembangkan oleh Forum Peduli Autisme Jawa Timur (FPAJT) berkerjasama dengan Fakultas Psikologi dan Fakultas Sains dan Teknologi Universitas Airlangga Surabaya,
            UPTD Layanan Disabilitas Kab.Sidoarjo dan SLB Riverkids Malang, serta dukungan pendanaan Konsulat Jenderal Pemerintah Australia.
        </p>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        function initSlider(sliderId, prevBtnId, nextBtnId) {
            const slider = document.getElementById(sliderId);
            if (!slider || getComputedStyle(slider).display === "none") return;

            const slides = slider.children;
            const totalSlides = slides.length;
            let index = 1; // Mulai dari slide pertama yang asli (setelah clone terakhir)
            let isAnimating = false;
            let autoSlideInterval;

            // Atur posisi slide
            function setSlidePosition(pos, transition = true) {
                slider.style.transition = transition ? "transform 1s ease-in-out" : "none";
                slider.style.transform = `translateX(-${pos * 100}%)`;
            }

            // Fungsi untuk transisi ke slide tertentu
            function slideTo(newIndex) {
                if (isAnimating) return;
                isAnimating = true;
                index = newIndex;
                setSlidePosition(index);

                setTimeout(() => {
                    if (index === 0) {
                        // Jika mencapai clone terakhir, lompat ke slide asli terakhir
                        slider.style.transition = "none";
                        index = totalSlides - 2;
                        setSlidePosition(index, false);
                    }
                    if (index === totalSlides - 1) {
                        // Jika mencapai clone pertama, lompat ke slide asli pertama
                        slider.style.transition = "none";
                        index = 1;
                        setSlidePosition(index, false);
                    }
                    isAnimating = false;
                }, 1000);
            }

            function slideNext() {
                slideTo(index + 1);
            }

            function slidePrev() {
                slideTo(index - 1);
            }

            function startAutoSlide() {
                autoSlideInterval = setInterval(slideNext, 20000); // 20 detik
            }

            function stopAutoSlide() {
                clearInterval(autoSlideInterval);
            }

            const nextBtn = document.getElementById(nextBtnId);
            const prevBtn = document.getElementById(prevBtnId);

            if (nextBtn && prevBtn) {
                nextBtn.addEventListener("click", () => {
                    stopAutoSlide();
                    slideNext();
                    startAutoSlide();
                });

                prevBtn.addEventListener("click", () => {
                    stopAutoSlide();
                    slidePrev();
                    startAutoSlide();
                });
            }

            // Inisialisasi posisi awal (index = 1)
            setSlidePosition(index, false);
            startAutoSlide();
        }

        initSlider("slider-lg", "prevBtn-lg", "nextBtn-lg");
        initSlider("slider-sm", "prevBtn-sm", "nextBtn-sm");
    });

    function showContent(id) {
        const section1Button = document.getElementById("section1Button");
        const section2Button = document.getElementById("section2Button");

        if (id === "section-1") {
            section1Button.classList.add("border-t-8", "border-pinkee", "bg-white");
            section1Button.classList.remove("bg-bluee3");
            section2Button.classList.remove("border-t-8", "border-pinkee", "bg-white");
            section2Button.classList.add("bg-bluee3");
        } else if (id === "section-2") {
            section2Button.classList.add("border-t-8", "border-pinkee", "bg-white");
            section2Button.classList.remove("bg-bluee3");
            section1Button.classList.remove("border-t-8", "border-pinkee", "bg-white");
            section1Button.classList.add("bg-bluee3");
        }

        document.getElementById("section-1").style.display = id === "section-1" ? "block" : "none";
        document.getElementById("section-2").style.display = id === "section-2" ? "block" : "none";
        localStorage.setItem("activeSection", id);
    }

    document.addEventListener("DOMContentLoaded", function () {
        const activeSection = localStorage.getItem("activeSection") || "section-1";
        showContent(activeSection);
    });


    document.addEventListener("DOMContentLoaded", function () {
        const btnContent1 = document.getElementById("content1");
        const btnContent2 = document.getElementById("content2");

        // Fungsi untuk menampilkan konten dan mengubah style tombol
        function showContent(activeBtn, inactiveBtn, activeContent, inactiveContent) {
            // Menampilkan konten yang aktif
            activeContent.style.display = "block";
            inactiveContent.style.display = "none";

            // Mengubah gaya tombol aktif
            activeBtn.classList.add("bg-white", "text-blue31");
            activeBtn.classList.remove("bg-blue31", "text-white");

            // Mengubah gaya tombol non-aktif
            inactiveBtn.classList.add("bg-blue31", "text-white");
            inactiveBtn.classList.remove("bg-white", "text-blue31");
        }

        // Atur tampilan default (content1 ditampilkan pertama)
        showContent(btnContent1, btnContent2, content1, content2);

        // Tambahkan event listener ke tombol
        btnContent1.addEventListener("click", function () {
            showContent(btnContent1, btnContent2, content1, content2);
        });

        btnContent2.addEventListener("click", function () {
            showContent(btnContent2, btnContent1, content2, content1);
        });
    });

    function toggleContent(button) {
    const container = button.previousElementSibling?.classList.contains('text-container')
        ? button.previousElementSibling
        : button.parentElement.previousElementSibling;

    if (container) {
        container.style.maxHeight = "none";
        container.style.overflow = "visible";
        button.style.display = "none";
    }
}

</script>
