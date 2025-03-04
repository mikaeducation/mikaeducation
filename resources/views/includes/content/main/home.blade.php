<div class="w-full min-h-max text-white">
    <div class="w-full min-h-max flex items-center flex-col">
        <div class="w-full lg:h-[510px] h-[250px] overflow-hidden">
            <div id="slider" class="w-full h-full flex transition-transform duration-1000 ease-in-out">
                <img src="{{ asset('images/bg1.jpg') }}" alt="" class="w-full h-full flex-shrink-0 object-cover object-top">
                <img src="{{ asset('images/bg2.jpeg') }}" alt="" class="w-full h-full flex-shrink-0 object-cover">
                <img src="{{ asset('images/bg3.jpg') }}" alt="" class="w-full h-full flex-shrink-0 object-cover">
                <img src="{{ asset('images/bg4.jpg') }}" alt="" class="w-full h-full flex-shrink-0 object-cover">
            </div>
        </div>
        <div class="w-full pt-10 bg-blue31 flex items-center justify-center flex-col gap-5 md:gap-5 lg:gap-16">
            <div class="h-full w-3/4 flex flex-col items-start justify-center space-y-2">
                <h1 class="w-full text-xl md:text-2xl lg:text-4xl font-bold text-start lg:text-left pb-1">
                    Media Visual Komunikasi Anak - Seperti apa?
                </h1>
                <p class="text-justify text-base md:text-lg lg:text-xl pb-2 text-bluee3">
                    Media Visual Komunikasi Anak, atau disebut MIKA adalah media edukasi dan pembelajaran khusus penanganan Anak Berkebutuhan Khusus, terutama anak dengan Spektrum Autisme dan hendaya komunikasi. Media ini dibuat dalam bentuk aplikasi perangkat lunak berbasis mobile bernama MIKA 1.0 sebagai teknologi terapi dengan dukungan stimulus multi-sensoris berupa visual dan audio, serta dukungan sumber belajar berbasis website bernama MIKA Education yang menjadi strategi efektif dan berdaya guna dalam mendukung pendidikan inklusi di Indonesia.
                </p>
            </div>
            <div class="w-full h-fit flex flex-col md:flex-row items-center justify-center">
                <div class="w-3/4 h-full flex flex-row items-center lg:items-end justify-center text-white text-lg p-0">
                    <div class="w-1/2 h-full flex flex-col">
                        <div class="w-full h-auto md:h-1/3 flex">
                            <div class="w-full flex items-end justify-end">
                                <button id="section1Button" onclick="showContent('section-1')" class="h-20 md:h-24 w-full px-4 lg:px-6 rounded-t border-t-8 border-pinkee bg-white flex items-end">
                                    <div class="flex items-end xl:w-full lg:px-4 pb-1 gap-3 lg:gap-8">
                                        <img src="{{ asset('images/tablet.png') }}" alt="" class="w-32 lg:w-52 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 hidden md:block">
                                        <div class="w-40 sm:w-56 text-center md:text-left mb-3 flex-col leading-5 md:pb-2 lg:pb-0 text-blue31">
                                            <h3 class="text-base sm:text-xl md:text-2xl font-bold">MIKA 1.0</h3>
                                            <p class="italic text-opacity-60 text-xs sm:text-sm lg:text-base md:hidden xl:flex">aplikasi mobile</p>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 flex flex-col justify-end items-center">
                        <div class="w-full h-auto md:h-1/3 flex items-end justify-end">
                            <div class="w-full flex items-end justify-end">
                                <button id="section2Button" onclick="showContent('section-2')" class="h-20 md:h-24 w-full px-4 lg:px-6 rounded-t bg-blue31 flex items-end">
                                    <div class="flex items-end w-full lg:pl-2 pb-1 md:gap-2 lg:gap-4">
                                        <img src="{{ asset('images/desktop.png') }}" alt="" class="md:w-28 lg:w-48 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 hidden md:block">
                                        <div class="w-full text-center md:text-left text-blue31 mb-3 flex-col leading-3 md:pb-0 ">
                                            <h3 class="text-base sm:text-xl md:text-2xl font-bold">MIKA EDUCATION</h3>
                                            <p class="italic text-opacity-60 text-xs sm:text-sm lg:text-base md:hidden xl:flex">website - internet browser</p>
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
                <div class="w-full lg:w-2/3 text-justify lg:pr-12 pb-3 border-r-0 lg:border-r-2 border-bluee3">
                    <p>
                        MIKA 1.0 merupakan sebuah aplikasi perangkat lunak yang dikembangkan untuk mendukung pembelajaran komunikasi visual baru lebih cepat, lebih komprehensif dan sistematis. Aplikasi ini diharapkan mampu memberikan simulasi lebih baik untuk pembelajaran komunikasi pada Anak Berkebetuhan Khusus, khususnya Autism Spectrum Disorder (ASD).
                        <span class="lg:hidden">Aplikasi ini telah tersedia secara global dan dapat diunduh melalui Google Playstore dibawah ini.</span>
                    </p>
                </div>
                <div class="w-full lg:w-1/3 text-justify">
                    <p class="lg:flex hidden">Aplikasi ini telah tersedia secara global. Dapat diunduh melalui Google Playstore dibawah ini.</p>
                    <a href="https://play.google.com/store/apps/details?id=com.vito.mika" class="w-full flex md:justify-start justify-center">
                        <img src="{{ asset('images/gplay.png') }}" alt="" class="w-2/5 md:w-1/5 lg:w-1/2">
                    </a>
                </div>
            </div>
            <div class="w-full h-fit flex flex-col items-start justify-start mt-20">
                <div class="w-full py-4 px-4 lg:px-8 gap-2 md:gap-4 flex bg-blue31 rounded">
                    <button id="content1" class="w-1/2 p-1.5 rounded bg-white text-blue31">
                        <h3 class="text-lg font-medium">Mengapa harus MIKA 1.0?</h3>
                    </button>
                    <button id="content2" class="w-1/2 p-1.5 rounded bg-transparent text-white">
                        <h3 class="text-lg font-medium">Bagaimana cara kerja MIKA 1.0?</h3>
                    </button>
                </div>
                <div id="content1.1" class="w-full">
                    <div class="w-full h-full flex items-start text-blue31 py-14">
                        <div class="w-full h-fit ">
                            <div class="w-full h-fit flex gap-10">
                                <div class="lg:w-[58%] w-[100%] h-fit space-y-3">
                                    <h2 class="text-lg lg:text-xl font-bold">Lebih dekat dengan Belajar dan Bermain bersama MIKA 1.0 </h2>
                                    <div class="w-full h-fit flex justify-end rounded md:block lg:hidden">
                                        <img src="{{ asset('images/content-1.png') }}" alt="MIKA 1.0" class="w-[100%] h-80 bg-blue31 px-1.5 pt-1.5 pb-4 rounded">
                                    </div>
                                    <p class="text-justify lg:text-lg text-base">
                                        MIKA 1.0 adalah teknologi pendukung belajar komunikasi visual yang baru, lebih cepat, komprehensif dan sistematis sehingga dapat memberikan stimulasi pembelajaran komunikasi yang lebih baik 
                                        karena dikembangkan berdasarkan sistem Aided Language Stimulation (ALS) dan Pragmatic Organisation Dynamic Display (PODD), dan juga bisa dikombinasikan dengan Picture Exchange Communication System (PECS). 
                                        MIKA 1.0 dikembangkan dengan Bahasa Indonesia, namun bisa disesuaikan dengan konteks bahasa daerah dengan fitur penambahan kata dan istilah.
                                        Belajar komunikasi yang dibantu MIKA 1.0 akan menghasilkan lebih banyak konsep kata yang dapat dipelajari (sedikitnya ada 2000 kata tersimpan di MIKA 1.0).
                                        Seluruh proses belajar akan disimpan secara real time dan mudah diakses untuk mengevaluasi kemajuan terapi/belajar anak. Anak-anak ASD dan hendaya komunikasi dapat belajar 
                                        hingga tingkat kemampuan komunikasi yang lebih tinggi (dari menambah perbendaharaan kata, menyusun kalimat sederhana hingga kompleks, dan mengembangkan dialog). 
                                    </p>
                                </div>
                                <div class="lg:w-[42%] hidden h-fit lg:flex justify-end rounded">
                                    <img src="{{ asset('images/content-1.png') }}" alt="MIKA 1.0" class="w-[100%] h-36 lg:h-96 bg-blue31 px-1.5 pt-1.5 pb-4 rounded">
                                </div>
                            </div>
                            <p class="mt-4 text-justify lg:text-lg text-base">
                                Selain itu, data yang diperoleh dari aplikasi perangkat lunak ini dapat digunakan untuk penelitian pengembangan intervensi autisme. Keterlibatan dan kontribusi anda akan bermakna dalam pengembangan intervensi pendidikan inklusi di Indonesia.                        
                                MIKA 1.0 juga dilaunching di Google play sehingga memudahkan dan memperluas akses di Indonesia. MIKA 1.0 bisa diutamakan digunakan oleh Terapis dan Guru dalam proses terapi, maka dibuka seluasnya akses untuk sekolah dan pusat terapi di Indonesia. 
                                Orang tua juga bisa mendampingi belajar anaknya dengan MIKA 1.0, namun disarankan untuk turut belajar prinsip belajar komunikasi autisme agar bisa mengadministrasi MIKA 1.0 dengan baik.
                            </p>
                        </div>                    
                    </div>
                    <div class="w-full h-fit space-y-6 text-blue31">
                        <h2 class="text-xl font-bold">Dilengkapi dengan komponen utama pembelajaran</h2>
                        <div class="w-full lg:h-96 xl:h-72 lg:flex items-start justify-center text-base md:text-lg gap-5 grid grid-cols-2">
                            <div class="w-full lg:w-1/4 h-fit sm:h-60 lg:h-full bg-bluee3 flex flex-col items-center text-justify p-4 lg:pt-8 gap-4">
                                <div class="w-full h-8">
                                    <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                                        <path d="M1.5 9.5C1.5 5.72876 1.5 3.84315 2.67157 2.67157C3.84315 1.5 5.72876 1.5 9.5 1.5H29.5C33.2712 1.5 35.1569 1.5 36.3284 2.67157C37.5 3.84315 37.5 5.72876 37.5 9.5V29.5C37.5 33.2712 37.5 35.1569 36.3284 36.3284C35.1569 37.5 33.2712 37.5 29.5 37.5H9.5C5.72876 37.5 3.84315 37.5 2.67157 36.3284C1.5 35.1569 1.5 33.2712 1.5 29.5V9.5Z" stroke="#31587C" stroke-width="2"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M35.5 26.0855L31.0355 21.621L30.989 21.5745C30.3622 20.9476 29.8221 20.4075 29.3315 20.0331C28.8056 19.6319 28.2208 19.3281 27.5 19.3281C26.7792 19.3281 26.1944 19.6319 25.6685 20.0331C25.1779 20.4075 24.6378 20.9476 24.011 21.5744L23.9645 21.621L20.8817 24.7038C20.3853 25.2002 20.0912 25.4906 19.8628 25.6602L19.8528 25.6675L19.8463 25.657C19.6973 25.4147 19.532 25.0359 19.2555 24.3906L16.7465 18.5362L16.715 18.4629C16.2147 17.2952 15.7952 16.3164 15.3625 15.6131C14.91 14.8776 14.3195 14.2354 13.3927 14.0569C12.4659 13.8784 11.6791 14.2554 10.9858 14.7702C10.3228 15.2625 9.56986 16.0156 8.67165 16.9138L8.61521 16.9703L3.5 22.0855V24.9139L10.0294 18.3845C10.9991 17.4149 11.6481 16.7696 12.1782 16.3759C12.6918 15.9945 12.8993 15.9986 13.0145 16.0208C13.1297 16.043 13.3239 16.1163 13.6591 16.6611C14.0051 17.2235 14.368 18.0637 14.9082 19.3241L17.4172 25.1784L17.444 25.2409L17.444 25.241C17.6843 25.802 17.9068 26.3213 18.1429 26.705C18.3985 27.1205 18.7928 27.5838 19.4591 27.7121C20.1254 27.8404 20.6636 27.5567 21.0552 27.2659C21.4169 26.9973 21.8164 26.5977 22.2479 26.166L22.2959 26.118L25.3787 23.0352C26.0653 22.3486 26.5107 21.9062 26.8817 21.6232C27.2296 21.3577 27.3923 21.3281 27.5 21.3281C27.6077 21.3281 27.7704 21.3577 28.1183 21.6232C28.4893 21.9062 28.9347 22.3486 29.6213 23.0352L34.7929 28.2068L35.5 27.4997V26.0855ZM19.7161 25.7527C19.7161 25.7526 19.7176 25.752 19.7205 25.7511C19.7175 25.7524 19.716 25.7528 19.7161 25.7527ZM19.947 25.7962C19.9465 25.7957 19.9457 25.7951 19.9447 25.7942C19.947 25.7966 19.9482 25.7975 19.9482 25.7974C19.9482 25.7974 19.9478 25.797 19.947 25.7962Z" fill="#31587C"/>
                                        <circle cx="28.5" cy="10.5" r="3" fill="#31587C"/>
                                    </svg>
                                </div>
                                <p>
                                    Pembelajaran komunikasi berbasis visual untuk anak berkebutuhan khusus menggunakan metode Aided Language Stimulation (ALS) dan dukungan suara untuk setiap gambar.
                                </p>
                            </div>
                            <div class="w-full lg:w-1/4 h-fit sm:h-60 lg:h-full bg-bluee3 flex flex-col items-center text-justify p-4 lg:pt-8 gap-4">
                                <div class="w-full h-8">
                                    <svg width="34" height="39" viewBox="0 0 34 39" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                                        <path d="M9 21.5L21 21.5" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M9 13.5L17 13.5" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M9 29.5L17 29.5" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M29 21.5V31.5C29 34.3284 29 35.7426 28.1213 36.6213C27.2426 37.5 25.8284 37.5 23 37.5H7C4.17157 37.5 2.75736 37.5 1.87868 36.6213C1 35.7426 1 34.3284 1 31.5V7.5C1 4.67157 1 3.25736 1.87868 2.37868C2.75736 1.5 4.17157 1.5 7 1.5H13" stroke="#31587C" stroke-width="2"/>
                                        <path d="M27 1.5L27 13.5" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M33 7.5L21 7.5" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                    </svg>     
                                </div>     
                                <p>
                                    Learning content yang dapat dipersonalisasi dengan fitur Penambahan kategori, gambar, dan suara berdasarkan kebutuhan anak-anak dan konteks lingkungan.                            
                                </p>
                            </div>
                            <div class="w-full lg:w-1/4 h-fit sm:h-60 lg:h-full bg-bluee3 flex flex-col items-center text-justify p-4 lg:pt-8 gap-4">
                                <div class="w-full h-8">
                                    <svg width="42" height="40" viewBox="0 0 42 44" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                                        <path d="M25.1801 5.30099H24.1801V5.35087L24.185 5.4005L25.1801 5.30099ZM25.1801 5.30097H26.1801V5.2511L26.1751 5.20147L25.1801 5.30097ZM25.4622 8.12182L24.4671 8.22132V8.22132L25.4622 8.12182ZM28.7187 9.47073L28.0855 8.69677L28.7187 9.47073ZM30.9128 7.67559L31.546 8.44955L31.546 8.44955L30.9128 7.67559ZM33.5935 7.80929L32.8864 8.5164V8.5164L33.5935 7.80929ZM36.6906 10.9065L37.3977 10.1993V10.1993L36.6906 10.9065ZM37.6222 12.2037L38.621 12.1539V12.1539L37.6222 12.2037ZM36.8243 13.5871L37.5983 14.2204L36.8243 13.5871ZM35.0291 15.7813L34.2552 15.148V15.148L35.0291 15.7813ZM33.6988 18.24L34.6226 17.8573L34.6226 17.8573L33.6988 18.24ZM36.378 19.0378L36.2785 20.0328L36.378 19.0378ZM39.199 19.3199L39.0995 20.3149L39.199 19.3199ZM40.7414 19.734L40 20.405L40 20.405L40.7414 19.734ZM40.7414 27.266L40 26.595L40 26.595L40.7414 27.266ZM39.199 27.6801L39.2985 28.6751H39.2985L39.199 27.6801ZM36.3788 27.9621L36.2793 26.9671L36.3788 27.9621ZM33.6995 28.76L32.7756 28.3773L32.7756 28.3773L33.6995 28.76ZM35.0299 31.2187L35.8039 30.5854L35.0299 31.2187ZM36.8244 33.412L37.5984 32.7787L37.5984 32.7787L36.8244 33.412ZM37.6223 34.7954L38.621 34.8453V34.8452L37.6223 34.7954ZM36.6907 36.0927L37.3978 36.7998V36.7998L36.6907 36.0927ZM33.5935 39.1898L32.8864 38.4827L33.5935 39.1898ZM32.2963 40.1214L32.3461 41.1202H32.3461L32.2963 40.1214ZM30.9129 39.3235L31.5461 38.5496L31.5461 38.5496L30.9129 39.3235ZM28.7188 37.5284L28.0856 38.3023H28.0856L28.7188 37.5284ZM26.2601 36.198L26.6428 37.1219H26.6428L26.2601 36.198ZM25.4623 38.8773L24.4672 38.7778L25.4623 38.8773ZM25.1801 41.699L26.1751 41.7985H26.1751L25.1801 41.699ZM24.766 43.2414L24.095 42.5L24.095 42.5L24.766 43.2414ZM17.234 43.2414L17.905 42.5L17.905 42.5L17.234 43.2414ZM16.8199 41.699L15.8248 41.7985L16.8199 41.699ZM16.5378 38.8781L17.5328 38.7786H17.5328L16.5378 38.8781ZM15.7399 36.1988L16.1226 35.2749L16.1226 35.2749L15.7399 36.1988ZM13.2812 37.5292L13.9145 38.3031L13.2812 37.5292ZM11.087 39.3244L10.4538 38.5505L11.087 39.3244ZM9.70358 40.1223L9.65376 41.1211H9.65377L9.70358 40.1223ZM8.40636 39.1907L7.69925 39.8978L7.69925 39.8978L8.40636 39.1907ZM5.3092 36.0936L6.0163 35.3865L5.3092 36.0936ZM5.1755 33.4129L5.94945 34.0461L5.1755 33.4129ZM6.9707 31.2187L7.74466 31.852L6.9707 31.2187ZM8.30108 28.76L9.22496 28.3773L8.30108 28.76ZM5.62179 27.9622L5.7213 26.9671H5.72129L5.62179 27.9622ZM2.80099 27.6801L2.9005 26.6851L2.85087 26.6801H2.80099V27.6801ZM2.80097 27.6801L2.70147 28.6751L2.7511 28.6801H2.80097V27.6801ZM1.25855 27.266L2 26.595H2L1.25855 27.266ZM1 25.69H0H1ZM1 21.31H2H1ZM1.25855 19.734L0.517095 19.063L1.25855 19.734ZM2.80099 19.3199L2.70149 18.3249H2.70149L2.80099 19.3199ZM5.62255 19.0377L5.52304 18.0427H5.52304L5.62255 19.0377ZM6.97145 15.7812L7.74541 15.148L6.97145 15.7812ZM5.17558 13.5862L5.94954 12.953L5.17558 13.5862ZM5.30928 10.9056L6.01639 11.6127L5.30928 10.9056ZM8.40644 7.80839L7.69934 7.10128L7.69934 7.10128L8.40644 7.80839ZM11.0871 7.67469L11.7204 6.90073L11.0871 7.67469ZM13.2813 9.46994L13.9146 8.69599V8.69599L13.2813 9.46994ZM16.5379 8.12104L17.5329 8.22054L16.5379 8.12104ZM16.8199 5.30099L15.8248 5.20149V5.20149L16.8199 5.30099ZM17.234 3.75855L17.905 4.5L17.234 3.75855ZM24.766 3.75855L24.095 4.5V4.5L24.766 3.75855ZM26.1801 5.30099V5.30097H24.1801V5.30099H26.1801ZM26.4572 8.02232L26.1751 5.20149L24.185 5.4005L24.4671 8.22132L26.4572 8.02232ZM26.6427 9.87723C26.8166 9.94926 26.772 10.0909 26.6848 9.7442C26.5973 9.39612 26.5423 8.87289 26.4572 8.02232L24.4671 8.22132C24.5454 9.00429 24.6129 9.70622 24.7453 10.2321C24.8779 10.7595 25.1506 11.424 25.8773 11.725L26.6427 9.87723ZM28.0855 8.69677C27.4239 9.23807 27.015 9.56916 26.707 9.75337C26.4002 9.93684 26.4688 9.8052 26.6427 9.87723L25.8773 11.725C26.604 12.026 27.2667 11.749 27.7334 11.4699C28.1989 11.1916 28.743 10.743 29.352 10.2447L28.0855 8.69677ZM30.2795 6.90163L28.0855 8.69677L29.352 10.2447L31.546 8.44955L30.2795 6.90163ZM32.3461 5.87896C31.8713 5.85528 31.4869 6.02576 31.1807 6.21664C30.8988 6.39242 30.5917 6.64621 30.2795 6.90163L31.546 8.44955C31.8996 8.16026 32.0918 8.00552 32.239 7.91374C32.3619 7.83707 32.3364 7.88096 32.2464 7.87648L32.3461 5.87896ZM34.3006 7.10219C34.0153 6.81696 33.735 6.53387 33.472 6.33092C33.1864 6.11052 32.8208 5.90264 32.3461 5.87896L32.2464 7.87648C32.1565 7.87199 32.1354 7.82577 32.2502 7.9143C32.3875 8.02027 32.5633 8.19337 32.8864 8.5164L34.3006 7.10219ZM37.3977 10.1993L34.3006 7.10219L32.8864 8.5164L35.9835 11.6136L37.3977 10.1993ZM38.621 12.1539C38.5973 11.6791 38.3894 11.3135 38.169 11.0279C37.966 10.7649 37.683 10.4846 37.3977 10.1993L35.9835 11.6136C36.3065 11.9366 36.4796 12.1124 36.5856 12.2498C36.6741 12.3645 36.6279 12.3434 36.6234 12.2535L38.621 12.1539ZM37.5983 14.2204C37.8537 13.9082 38.1075 13.6011 38.2833 13.3192C38.4742 13.0131 38.6446 12.6286 38.621 12.1539L36.6234 12.2535C36.619 12.1636 36.6629 12.138 36.5862 12.2609C36.4944 12.4081 36.3397 12.6003 36.0504 12.9539L37.5983 14.2204ZM35.8031 16.4145L37.5983 14.2204L36.0504 12.9539L34.2552 15.148L35.8031 16.4145ZM34.6226 17.8573C34.6947 18.0312 34.563 18.0998 34.7465 17.793C34.9307 17.4849 35.2618 17.0761 35.8031 16.4145L34.2552 15.148C33.7569 15.757 33.3083 16.3011 33.03 16.7666C32.7509 17.2333 32.4739 17.8959 32.7749 18.6227L34.6226 17.8573ZM36.4776 18.0428C35.627 17.9577 35.1038 17.9027 34.7557 17.8152C34.409 17.7279 34.5506 17.6834 34.6226 17.8573L32.7749 18.6226C33.0759 19.3493 33.7404 19.622 34.2677 19.7547C34.7937 19.887 35.4956 19.9545 36.2785 20.0328L36.4776 18.0428ZM39.2985 18.3249L36.4776 18.0428L36.2785 20.0328L39.0995 20.3149L39.2985 18.3249ZM41.4829 19.063C41.1639 18.7105 40.7716 18.5592 40.4201 18.4778C40.0965 18.4027 39.6999 18.365 39.2985 18.3249L39.0995 20.3149C39.5541 20.3604 39.7994 20.3869 39.9684 20.4261C40.1095 20.4588 40.0604 20.4717 40 20.405L41.4829 19.063ZM42 21.31C42 20.9066 42.0019 20.5082 41.9595 20.1787C41.9134 19.8209 41.8019 19.4154 41.4829 19.063L40 20.405C39.9396 20.3382 39.9574 20.2906 39.9759 20.4344C39.9981 20.6064 40 20.8531 40 21.31H42ZM42 25.69V21.31H40V25.69H42ZM41.4829 27.937C41.8019 27.5846 41.9134 27.1791 41.9595 26.8213C42.0019 26.4918 42 26.0934 42 25.69H40C40 26.1469 39.9981 26.3936 39.9759 26.5656C39.9574 26.7094 39.9396 26.6618 40 26.595L41.4829 27.937ZM39.2985 28.6751C39.6999 28.635 40.0965 28.5973 40.4201 28.5223C40.7716 28.4408 41.1639 28.2895 41.4829 27.937L40 26.595C40.0604 26.5283 40.1095 26.5412 39.9684 26.5739C39.7994 26.6131 39.5541 26.6396 39.0995 26.6851L39.2985 28.6751ZM36.4783 28.9572L39.2985 28.6751L39.0995 26.6851L36.2793 26.9671L36.4783 28.9572ZM34.6234 29.1427C34.5514 29.3165 34.4098 29.272 34.7564 29.1848C35.1045 29.0972 35.6277 29.0422 36.4783 28.9572L36.2793 26.9671C35.4963 27.0454 34.7944 27.1129 34.2685 27.2452C33.7411 27.3779 33.0766 27.6506 32.7756 28.3773L34.6234 29.1427ZM35.8039 30.5854C35.2626 29.9238 34.9315 29.515 34.7472 29.2069C34.5638 28.9001 34.6954 28.9688 34.6234 29.1426L32.7756 28.3773C32.4746 29.104 32.7517 29.7667 33.0307 30.2334C33.3091 30.6988 33.7577 31.2429 34.2559 31.8519L35.8039 30.5854ZM37.5984 32.7787L35.8039 30.5854L34.2559 31.8519L36.0505 34.0452L37.5984 32.7787ZM38.621 34.8452C38.6447 34.3705 38.4742 33.9861 38.2834 33.6799C38.1076 33.398 37.8538 33.0909 37.5984 32.7787L36.0505 34.0452C36.3397 34.3988 36.4945 34.591 36.5863 34.7382C36.6629 34.8611 36.619 34.8356 36.6235 34.7456L38.621 34.8452ZM37.3978 36.7998C37.683 36.5145 37.9661 36.2342 38.1691 35.9712C38.3895 35.6856 38.5974 35.32 38.621 34.8453L36.6235 34.7456C36.628 34.6557 36.6742 34.6346 36.5857 34.7493C36.4797 34.8867 36.3066 35.0625 35.9836 35.3856L37.3978 36.7998ZM34.3007 39.8969L37.3978 36.7998L35.9836 35.3856L32.8864 38.4827L34.3007 39.8969ZM32.3461 41.1202C32.8209 41.0965 33.1865 40.8886 33.4721 40.6682C33.7351 40.4652 34.0154 40.1821 34.3007 39.8969L32.8864 38.4827C32.5634 38.8057 32.3876 38.9788 32.2502 39.0848C32.1355 39.1733 32.1566 39.1271 32.2465 39.1226L32.3461 41.1202ZM30.2796 40.0975C30.5918 40.3529 30.8989 40.6067 31.1808 40.7825C31.4869 40.9734 31.8714 41.1438 32.3461 41.1202L32.2465 39.1226C32.3364 39.1182 32.362 39.162 32.2391 39.0854C32.0919 38.9936 31.8997 38.8388 31.5461 38.5496L30.2796 40.0975ZM28.0856 38.3023L30.2796 40.0975L31.5461 38.5496L29.352 36.7544L28.0856 38.3023ZM26.6428 37.1219C26.4689 37.1939 26.4003 37.0623 26.7071 37.2457C27.0151 37.43 27.424 37.761 28.0856 38.3023L29.352 36.7544C28.743 36.2562 28.199 35.8076 27.7335 35.5292C27.2668 35.2502 26.6041 34.9731 25.8774 35.2741L26.6428 37.1219ZM26.4573 38.9768C26.5423 38.1262 26.5973 37.603 26.6849 37.2549C26.7721 36.9082 26.8167 37.0499 26.6428 37.1219L25.8774 35.2741C25.1507 35.5751 24.878 36.2396 24.7453 36.767C24.613 37.2929 24.5455 37.9948 24.4672 38.7778L26.4573 38.9768ZM26.1751 41.7985L26.4573 38.9768L24.4672 38.7778L24.185 41.5995L26.1751 41.7985ZM25.437 43.9829C25.7895 43.6639 25.9408 43.2715 26.0222 42.9201C26.0973 42.5965 26.135 42.1999 26.1751 41.7985L24.185 41.5995C24.1396 42.0541 24.1131 42.2994 24.0739 42.4684C24.0412 42.6095 24.0282 42.5604 24.095 42.5L25.437 43.9829ZM23.19 44.5C23.5934 44.5 23.9918 44.5019 24.3213 44.4595C24.6791 44.4134 25.0846 44.3019 25.437 43.9829L24.095 42.5C24.1618 42.4396 24.2093 42.4574 24.0656 42.4759C23.8936 42.498 23.6468 42.5 23.19 42.5V44.5ZM18.81 44.5H23.19V42.5H18.81V44.5ZM16.563 43.9829C16.9154 44.3019 17.3209 44.4134 17.6787 44.4595C18.0082 44.5019 18.4066 44.5 18.81 44.5V42.5C18.3531 42.5 18.1064 42.498 17.9343 42.4759C17.7906 42.4574 17.8382 42.4396 17.905 42.5L16.563 43.9829ZM15.8248 41.7985C15.865 42.1999 15.9027 42.5965 15.9777 42.9201C16.0592 43.2715 16.2105 43.6639 16.563 43.9829L17.905 42.5C17.9717 42.5604 17.9588 42.6095 17.926 42.4684C17.8869 42.2994 17.8604 42.0541 17.8149 41.5995L15.8248 41.7985ZM15.5428 38.9776L15.8248 41.7985L17.8149 41.5995L17.5328 38.7786L15.5428 38.9776ZM15.3573 37.1227C15.1834 37.0506 15.2279 36.909 15.3151 37.2557C15.4027 37.6038 15.4577 38.127 15.5428 38.9776L17.5328 38.7786C17.4545 37.9956 17.387 37.2937 17.2547 36.7678C17.122 36.2404 16.8493 35.5759 16.1226 35.2749L15.3573 37.1227ZM13.9145 38.3031C14.5761 37.7618 14.9849 37.4307 15.293 37.2465C15.5998 37.0631 15.5312 37.1947 15.3573 37.1227L16.1226 35.2749C15.3959 34.9739 14.7332 35.2509 14.2665 35.53C13.8011 35.8083 13.257 36.2569 12.648 36.7552L13.9145 38.3031ZM11.7203 40.0984L13.9145 38.3031L12.648 36.7552L10.4538 38.5505L11.7203 40.0984ZM9.65377 41.1211C10.1285 41.1447 10.513 40.9743 10.8191 40.7834C11.101 40.6076 11.4081 40.3538 11.7203 40.0984L10.4538 38.5505C10.1002 38.8398 9.90804 38.9945 9.76085 39.0863C9.63789 39.1629 9.66347 39.1191 9.75338 39.1235L9.65377 41.1211ZM7.69925 39.8978C7.98448 40.1831 8.26482 40.4661 8.52783 40.6691C8.81344 40.8895 9.179 41.0974 9.65376 41.1211L9.75339 39.1235C9.84331 39.128 9.8644 39.1742 9.74967 39.0857C9.61234 38.9797 9.4365 38.8066 9.11347 38.4836L7.69925 39.8978ZM4.60209 36.8007L7.69925 39.8978L9.11347 38.4836L6.0163 35.3865L4.60209 36.8007ZM3.37886 34.8462C3.40254 35.3209 3.61043 35.6865 3.83082 35.9721C4.03377 36.2351 4.31687 36.5154 4.60209 36.8007L6.0163 35.3865C5.69327 35.0634 5.52018 34.8876 5.4142 34.7502C5.32567 34.6355 5.3719 34.6566 5.37638 34.7465L3.37886 34.8462ZM4.40154 32.7796C4.14611 33.0918 3.89232 33.3989 3.71654 33.6808C3.52566 33.987 3.35518 34.3714 3.37886 34.8462L5.37638 34.7465C5.38087 34.8365 5.33697 34.862 5.41365 34.7391C5.50543 34.5919 5.66017 34.3997 5.94945 34.0461L4.40154 32.7796ZM6.19674 30.5855L4.40154 32.7796L5.94945 34.0461L7.74466 31.852L6.19674 30.5855ZM7.3772 29.1427C7.30517 28.9688 7.43681 28.9002 7.25334 29.207C7.06913 29.515 6.73804 29.9239 6.19674 30.5855L7.74466 31.852C8.24293 31.243 8.69152 30.6989 8.96985 30.2334C9.24893 29.7667 9.52597 29.104 9.22496 28.3773L7.3772 29.1427ZM5.52229 28.9572C6.37286 29.0423 6.89608 29.0973 7.24417 29.1848C7.59084 29.2721 7.44923 29.3166 7.3772 29.1427L9.22496 28.3773C8.92395 27.6506 8.25946 27.3779 7.73212 27.2453C7.20619 27.113 6.50426 27.0454 5.7213 26.9671L5.52229 28.9572ZM2.70149 28.6751L5.52229 28.9572L5.72129 26.9671L2.9005 26.6851L2.70149 28.6751ZM2.80097 28.6801H2.80099V26.6801H2.80097V28.6801ZM0.517094 27.937C0.836053 28.2895 1.22843 28.4408 1.57987 28.5223C1.90349 28.5973 2.30011 28.635 2.70147 28.6751L2.90048 26.6851C2.44592 26.6396 2.2006 26.6131 2.03163 26.5739C1.89046 26.5412 1.93959 26.5283 2 26.595L0.517094 27.937ZM0 25.69C0 26.0934 -0.00194275 26.4918 0.0405215 26.8213C0.0866349 27.1791 0.198134 27.5846 0.517094 27.937L2 26.595C2.06041 26.6618 2.04264 26.7094 2.02412 26.5656C2.00194 26.3936 2 26.1469 2 25.69H0ZM1.78814e-07 21.31L0 25.69H2L2 21.31H1.78814e-07ZM0.517095 19.063C0.198135 19.4154 0.0866352 19.8209 0.0405218 20.1787C-0.00194252 20.5082 2.38419e-07 20.9066 1.78814e-07 21.31H2C2 20.8531 2.00194 20.6064 2.02412 20.4344C2.04264 20.2906 2.06041 20.3382 2 20.405L0.517095 19.063ZM2.70149 18.3249C2.30013 18.365 1.9035 18.4027 1.57987 18.4778C1.22844 18.5592 0.836056 18.7105 0.517095 19.063L2 20.405C1.93959 20.4717 1.89046 20.4588 2.03163 20.4261C2.20061 20.3869 2.44593 20.3604 2.9005 20.3149L2.70149 18.3249ZM5.52304 18.0427L2.70149 18.3249L2.9005 20.3149L5.72205 20.0328L5.52304 18.0427ZM7.37795 17.8572C7.44998 17.6833 7.59159 17.7279 7.24492 17.8151C6.89684 17.9027 6.37361 17.9577 5.52304 18.0427L5.72205 20.0328C6.50501 19.9545 7.20694 19.887 7.73287 19.7547C8.26022 19.622 8.9247 19.3493 9.22571 18.6226L7.37795 17.8572ZM6.19749 16.4144C6.73879 17.076 7.06989 17.4849 7.2541 17.7929C7.43756 18.0997 7.30593 18.0311 7.37795 17.8572L9.22571 18.6226C9.52672 17.8959 9.24969 17.2332 8.97061 16.7665C8.69228 16.301 8.24368 15.757 7.74541 15.148L6.19749 16.4144ZM4.40162 14.2195L6.19749 16.4144L7.74541 15.148L5.94954 12.953L4.40162 14.2195ZM3.37895 12.153C3.35527 12.6277 3.52575 13.0122 3.71663 13.3183C3.8924 13.6002 4.1462 13.9073 4.40162 14.2195L5.94954 12.953C5.66025 12.5994 5.50551 12.4072 5.41373 12.26C5.33705 12.1371 5.38095 12.1627 5.37646 12.2526L3.37895 12.153ZM4.60217 10.1984C4.31695 10.4837 4.03386 10.764 3.8309 11.027C3.61051 11.3126 3.40263 11.6782 3.37895 12.153L5.37646 12.2526C5.37198 12.3425 5.32576 12.3636 5.41429 12.2489C5.52026 12.1115 5.69336 11.9357 6.01639 11.6127L4.60217 10.1984ZM7.69934 7.10128L4.60217 10.1984L6.01639 11.6127L9.11355 8.5155L7.69934 7.10128ZM9.65384 5.87806C9.17909 5.90174 8.81352 6.10962 8.52791 6.33002C8.2649 6.53297 7.98456 6.81606 7.69934 7.10128L9.11355 8.5155C9.43658 8.19247 9.61243 8.01937 9.74975 7.9134C9.86448 7.82487 9.8434 7.87109 9.75347 7.87558L9.65384 5.87806ZM11.7204 6.90073C11.4082 6.64531 11.1011 6.39151 10.8192 6.21574C10.513 6.02486 10.1286 5.85438 9.65384 5.87806L9.75347 7.87558C9.66355 7.88006 9.63797 7.83616 9.76094 7.91284C9.90813 8.00462 10.1003 8.15936 10.4539 8.44865L11.7204 6.90073ZM13.9146 8.69599L11.7204 6.90073L10.4539 8.44865L12.6481 10.2439L13.9146 8.69599ZM15.3574 9.87645C15.5312 9.80442 15.5999 9.93605 15.2931 9.75259C14.985 9.56838 14.5762 9.23729 13.9146 8.69599L12.6481 10.2439C13.2571 10.7422 13.8012 11.1908 14.2666 11.4691C14.7333 11.7482 15.396 12.0252 16.1227 11.7242L15.3574 9.87645ZM15.5428 8.02153C15.4578 8.87211 15.4028 9.39533 15.3152 9.74342C15.228 10.0901 15.1835 9.94847 15.3574 9.87645L16.1227 11.7242C16.8494 11.4232 17.1221 10.7587 17.2548 10.2314C17.3871 9.70543 17.4546 9.00351 17.5329 8.22054L15.5428 8.02153ZM15.8248 5.20149L15.5428 8.02153L17.5329 8.22054L17.8149 5.4005L15.8248 5.20149ZM16.563 3.01709C16.2105 3.33606 16.0592 3.72844 15.9777 4.07987C15.9027 4.4035 15.865 4.80013 15.8248 5.20149L17.8149 5.4005C17.8604 4.94593 17.8869 4.70061 17.926 4.53163C17.9588 4.39046 17.9717 4.43959 17.905 4.5L16.563 3.01709ZM18.81 2.5C18.4066 2.5 18.0082 2.49806 17.6787 2.54052C17.3209 2.58663 16.9154 2.69813 16.563 3.01709L17.905 4.5C17.8382 4.56041 17.7906 4.54264 17.9343 4.52412C18.1064 4.50194 18.3531 4.5 18.81 4.5V2.5ZM23.19 2.5H18.81V4.5H23.19V2.5ZM25.437 3.01709C25.0846 2.69813 24.6791 2.58663 24.3213 2.54052C23.9918 2.49806 23.5934 2.5 23.19 2.5V4.5C23.6468 4.5 23.8936 4.50194 24.0656 4.52412C24.2093 4.54264 24.1618 4.56041 24.095 4.5L25.437 3.01709ZM26.1751 5.20147C26.135 4.80011 26.0973 4.40349 26.0222 4.07987C25.9407 3.72843 25.7895 3.33605 25.437 3.01709L24.095 4.5C24.0282 4.43959 24.0412 4.39046 24.0739 4.53163C24.1131 4.7006 24.1396 4.94592 24.185 5.40048L26.1751 5.20147ZM28 23.5C28 27.366 24.866 30.5 21 30.5V32.5C25.9705 32.5 30 28.4706 30 23.5H28ZM21 16.5C24.866 16.5 28 19.634 28 23.5H30C30 18.5294 25.9705 14.5 21 14.5V16.5ZM14 23.5C14 19.634 17.134 16.5 21 16.5V14.5C16.0294 14.5 12 18.5294 12 23.5H14ZM21 30.5C17.134 30.5 14 27.366 14 23.5H12C12 28.4706 16.0294 32.5 21 32.5V30.5Z" fill="#31587C"/>
                                    </svg>
                                </div>
                                <p>
                                    Manajemen performansi dan progress anak sebagai media analitis kemajuan anak serta penambahan opsi ulasan di setiap sesi pembelajaran.                            
                                </p>
                            </div>
                            <div class="w-full lg:w-1/4 h-fit sm:h-60 lg:h-full bg-bluee3 flex flex-col items-center text-justify p-4 lg:pt-8 gap-4">
                                <div class="w-full h-8">
                                    <svg width="40" height="38" viewBox="0 0 44 38" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                                        <path d="M12.958 14.5L12.958 28" stroke="#31587C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M22.0693 19V28" stroke="#31587C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M31.1807 10V28" stroke="#31587C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <rect x="1.56934" y="1" width="41" height="36" rx="2" stroke="#31587C" stroke-width="2"/>
                                    </svg>      
                                </div>                              
                                <p>
                                    Manajemen profil dan online-synchronization, untuk pengelolaan profil dan sinkronisasi data secara online.                            
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content1.2" class="w-full">
                    <div class="w-full h-full flex flex-col text-blue31 mt-14 space-y-5 text-base lg:text-lg">
                        <div class="w-full h-fit flex gap-5">
                            <div class="py-4 px-7 text-2xl font-bold bg-bluee3 rounded-l-full flex items-center justify-center">1</div>
                            <p class="w-full py-2 whitespace-pre-line border-2 border-bluee3 border-l-0 rounded"> <span class="font-bold">Pendaftaran profile anak</span>
                                Terapis dapat menambahkan biodata anak untuk dapat dilakukan pembelajaran komunikasi dengan aplikasi MIKA 1.0.
                            </p>
                        </div>
                        <div class="w-full h-fit flex gap-5">
                            <div class="py-4 px-7 text-2xl font-bold bg-bluee3 rounded-l-full flex items-center justify-center">2</div>
                            <p class="w-full py-2 whitespace-pre-line border-2 border-bluee3 border-l-0 rounded"> <span class="font-bold">Login tiap Terapis</span>
                                Terapis dapat masuk ke aplikasi MIKA 1.0 untuk menggunakan fitur-fitur aplikasi MIKA 1.0.
                            </p>
                        </div>
                        <div class="w-full h-fit flex gap-5">
                            <div class="py-4 px-7 h-20 text-2xl font-bold bg-bluee3 rounded-l-full flex items-center justify-center">3</div>
                            <p class="w-full py-2 whitespace-pre-line border-2 border-bluee3 border-l-0 rounded"> <span class="font-bold">Pengelolaan profil anak</span>
                                Terapis dapat mengisi dan merubah dan profil kemampuan anak (planning matrix) yang ada di aplikasi MIKA 1.0 sesuai kebutuhan dan perkembangan anak.                            
                            </p>
                        </div>
                        <div class="w-full h-fit flex gap-5">
                            <div class="py-4 px-7 h-20 text-2xl font-bold bg-bluee3 rounded-l-full flex items-center justify-center">4</div>
                            <div class="w-full pt-2 border-2 border-bluee3 border-l-0 rounded">
                                <p class="w-full whitespace-pre-line"> <span class="font-bold">Mengadministrasi MIKA 1.0</span>
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
                            <p class="w-full py-2 whitespace-pre-line border-2 border-bluee3 border-l-0 rounded"> <span class="font-bold">Mengevaluasi keberhasilan terapi/belajar</span>
                                Terapis dapat mengevaluasi hasil terapi komunikasi anak selama masa terapi/belajar.                            
                            </p>
                        </div>
                        <div class="w-full h-fit flex gap-5">
                            <div class="py-4 px-7 text-2xl font-bold bg-bluee3 rounded-l-full flex items-center justify-center">6</div>
                            <p class="w-full py-2 whitespace-pre-line border-2 border-bluee3 border-l-0 rounded"> <span class="font-bold">Mengelola dan mengamati perkembangan anak</span>
                                Terapis dapat melihat dan merubah perkembangan anak selama terapi/belajar berlangsung.                            
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="section-2" class="w-3/4 flex items-center justify-center py-4 px-0">
            <div class="w-full flex flex-col lg:flex-row items-start justify-start gap-0 lg:gap-11 text-base lg:text-lg text-blue31">
                <div class="w-full lg:w-2/3 text-justify lg:pr-12 pb-3 border-r-0 lg:border-r-2 border-bluee3">
                    <p>
                        MIKA Education merupakan platform belajar online untuk memahami Autisme, karakteristik belajar komunikasi pada individu autistik, strategi asesmen matriks perencanaan, metode intervensi TEACCH, serta administrasi, skoring dan interpretasi MIKA dalam mendampingi belajar komunikasi. 
                        MIKA education dibentuk sebagai kelanjutan pengembangan MIKA 1.0 dan menjadi suatu model komprehensif belajar menggunakan teknologi, yang mengkombinasikan aplikasi belajar (MIKA 1.0) dan website sumber belajar (MIKA Education).                    
                        <span class="lg:hidden">Aplikasi berbasis website ini sedang dalam tahap pengembangan dan telah memiliki versi Beta yang dapat diakses sekarang juga dibawah ini.</span>
                    </p>
                </div>
                <div class="w-full lg:w-1/3 text-justify lg:mt-0 mt-4">
                    <p class="lg:flex hidden pb-4">Aplikasi berbasis website ini sedang dalam tahap pengembangan dan telah memiliki versi Beta yang dapat diakses sekarang juga dibawah ini.</p>
                    <a href="https://play.google.com/store/apps/details?id=com.vito.mika" class="bg-blue31 text-lg text-white py-3 lg:px-6 px-10 w-full rounded hover:bg-blue6a">
                        Mulai Program Pembelajaran
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w-full mt-20 bg-blue31 text-white flex items-center justify-center">
    <div class="w-3/4 flex flex-col items-center justify-center py-12 space-y-8 border-b-2 border-white">
        <h3 class="text-lg lg:text-xl font-bold text-justify">Berkolaborasi dengan sejumlah <span class="text-pinkee border-b-2 border-pinkee">pusat dukungan dan pendidikan autisme di Indonesia</span> </h3>
        <div class="w-full sm:flex justify-center items-center gap-5 sm:space-x-5 md:space-x-10 grid grid-cols-2">
            <div class="flex items-center justify-center bg-white w-full lg:w-40 h-28 sm:h-28 md:h-32 lg:h-40 rounded">
                <img src="{{ asset('images/aawa.png') }}" alt="" class="rounded-full w-24 lg:w-32 lg:h-32">
            </div>
            <div class="flex items-center justify-center bg-white w-full lg:w-40 h-28 sm:h-28 md:h-32 lg:h-40 rounded">
                <img src="{{ asset('images/fpa.png') }}" alt="" class="w-28 sm:w-full lg:h-32">
            </div>
            <div class="flex items-center justify-center bg-white w-full lg:w-40 h-28 sm:h-28 md:h-32 lg:h-40 rounded">
                <img src="{{ asset('images/uptd-sdj.png') }}" alt="" class="w-28 sm:w-full lg:h-32">
            </div>
            <div class="flex items-center justify-center bg-white w-full lg:w-40 h-28 sm:h-28 md:h-32 lg:h-40 rounded">
                <img src="{{ asset('images/river.png') }}" alt="" class="rounded-full w-24 lg:w-32 lg:h-32">
            </div>
        </div>
        <p class="text-base lg:text-lg text-justify">Media ini dikembangkan oleh Forum Peduli Autisme Jawa Timur (FPAJT) berkerjasama dengan Fakultas Psikologi dan Fakultas Sains dan Teknologi Universitas Airlangga Surabaya, 
            SLB Riverkids Malang, dan Unit Layanan ABK Sidoarjo, dengan dukungan pendanaan dari Pemerintah Australia.
        </p>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const slider = document.getElementById("slider");
        let index = 0;
        const slides = slider.children;
        const totalSlides = slides.length;

        function slideImages() {
            index++;
            if (index >= totalSlides) {
                setTimeout(() => {
                    slider.style.transition = "none";
                    slider.style.transform = `translateX(0)`;
                    index = 0;
                    setTimeout(() => {
                        slider.style.transition = "transform 1s ease-in-out";
                    }, 50);
                }, 1000);
            } else {
                slider.style.transition = "transform 1s ease-in-out";
                slider.style.transform = `translateX(-${index * 100}%)`;
            }
        }

        setInterval(slideImages, 10000);
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
    const content1 = document.getElementById("content1.1");
    const content2 = document.getElementById("content1.2");

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

</script>
