<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-Learning | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('public/assets/css/style.css')
    </head>
    <body class="font-futura h-max w-full relative">

    @include('includes.components.elearning.header')
        
        <section class="w-full h-max bg-blue31 flex flex-col items-center justify-center relative">
            <div class="w-3/4 h-full lg:gap-8 gap-4 lg:my-16 my-10 flex flex-col items-center justify-center relative z-10">
                <div class="w-full h-fit text-white flex items-center justify-start" style="display: inline-flex; flex-wrap: wrap;">
                    <a href="/" class="flex items-center">Beranda
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#fff" viewBox="0 0 24 24">
                            <path d="M8.293 4.707a1 1 0 0 1 1.414 0L16.707 12l-6.293 7.293a1 1 0 0 1-1.414-1.414L14.586 12 8.293 6.121a1 1 0 0 1 0-1.414z" />
                        </svg>
                    </a>
                    <a href="#" class="flex items-center">Program Pembelajaran</a>
                </div>
                <div class="w-full h-full">
                    <img src="{{ asset('images/elearn-tittle-banner.png') }}" alt="" class="w-2/3 md:block hidden">
                    <img src="{{ asset('images/elearn-tittle-banner1.png') }}" alt="" class="w-full md:hidden block">
                </div>
                <div class="w-full h-full mt-2 md:mt-4">
                    <div class="w-fit lg:gap-8 gap-4 text-blue31 bg-white flex items-center justify-between rounded p-1 lg:p-1.5">
                        <p class="pl-2 md:pl-3 font-medium text-sm md:text-base lg:text-xl">Eksplorasi Pembelajaran</p>
                        <a href="#modul-content" class="flex items-center justify-center p-1 md:p-2 rounded bg-blue31">
                            <svg width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="rotate-90 h-5 w-5 ">
                                <path d="M25.7071 8.20711C26.0976 7.81658 26.0976 7.18342 25.7071 6.79289L19.3431 0.428932C18.9526 0.0384078 18.3195 0.0384078 17.9289 0.428932C17.5384 0.819457 17.5384 1.45262 17.9289 1.84315L23.5858 7.5L17.9289 13.1569C17.5384 13.5474 17.5384 14.1805 17.9289 14.5711C18.3195 14.9616 18.9526 14.9616 19.3431 14.5711L25.7071 8.20711ZM0 8.5H25V6.5H0V8.5Z" fill="#fff"/>
                            </svg> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-0 w-full h-full">
                <img src="{{ asset('images/elearn-banner.png') }}" alt="" class="w-full h-full object-cover">
            </div>
        </section>
        <section id="modul-content" class="w-full h-max  text-blue31 flex flex-col items-center justify-center relative">
            <div class="w-full bg-gray-100 flex items-center justify-center">
                <nav id="modul-category" class="w-3/4 gap-10 py-1 font-medium text-base md:text-lg flex items-center justify-start">
                    <button id="all-modul-category-btn" class="py-3 border-b-4 border-blue31" onclick="showContent('all', this)">Semua</button>
                    @foreach($categories as $index => $category)
                        <button id="modul-category{{ $index+1 }}-btn" class="py-3" onclick="showContent('category{{ $index+1 }}', this)">
                            {{ $category }}
                        </button>
                    @endforeach
                </nav>
            </div>
            <div class="w-3/4 flex flex-col items-start justify-start mt-12 gap-12">
                <div class="w-full flex flex-col items-start justify-start gap-2">
                    <div id="modul-display" class="{{ $modules->count() > 0 ? 'w-full h-max flex flex-col space-y-2' : 'hidden' }}">
                        @if ($modules->count() > 0)
                            <h6 class="md:text-base text-sm">Pembelajaran yang tersedia</h6>
                            <div id="all-modul-category" class="w-full h-ful flex flex-col items-start justify-start space-y-5 pb-5">
                                <div class="w-fit h-fit space-y-2">
                                    <h3 id="module-category" class="font-medium text-lg md:text-xl lg:text-2xl">Semua Pembelajaran <span id="module-num">({{ count($modules) }})</span></h3>
                                </div>
                                <div class="flex items-center justify-start gap-5 md:gap-8 lg:gap-10" style="display: inline-flex; flex-wrap: wrap;">
                                    @foreach($modules as $module)
                                    <div class="modul-item md:w-[330px] w-48 lg:min-h-[450px] md:min-h-[400px] min-h-[300px] pb-2 rounded flex flex-col items-center justify-center gap-2 md:gap-4 shadow-lg overflow-hidden">
                                        <div class="w-full lg:h-60 md:h-52 h-32 flex items-end justify-center relative rounded">
                                            <div id="module_publisher" class="flex items-center justify-start w-11/12 md:h-8 h-7 mb-3 gap-2 absolute z-10 text-white">
                                                <img id="module-publisher-logo" src="{{ asset($module->module_publisher_logo) }}" alt="" class="h-full w-7 md:w-8 object-cover object-center rounded-full">
                                                <p id="module-publisher-name" class="font-medium md:text-base text-xs line-clamp-1">{{ $module->module_publisher_name }}</p>
                                            </div>
                                            <div class="w-full h-1/2 absolute z-0 bottom-0 bg-gradient-to-t from-blue31 via-blue31/80 to-transparent"></div>
                                            <img id="module-publisher-banner" src="{{ asset( $module->module_publisher_banner) }}" alt="" class="w-full h-full object-cover rounded max-h-full max-w-full">
                                        </div>
                                        <div class="w-11/12 flex flex-col flex-grow items-start justify-between">
                                            <div class="h-full flex flex-col flex-grow items-start justify-between pb-5 gap-2 md:gap-4">
                                                <h2 id="module-title" class="font-medium md:font-semibold text-base md:text-xl line-clamp-2">{{ $module->module_title }}</h2>
                                                <div class="w-full h-full flex flex-col md:flex-row items-start justify-start md:justify-between font-medium md:text-base sm:text-sm text-xs gap-2" style="display: inline-flex; flex-wrap: wrap;">
                                                    <div id="module-level" class="w-fit gap-2 md:gap-1 flex items-center justify-center">
                                                        <svg id="level-icon" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M17.5 5.5L13.2071 9.79289C12.8166 10.1834 12.1834 10.1834 11.7929 9.79289L10.7071 8.70711C10.3166 8.31658 9.68342 8.31658 9.29289 8.70711L5.83333 12.1667" stroke="#31587C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M2.5 3V14.8C2.5 15.9201 2.5 16.4802 2.71799 16.908C2.90973 17.2843 3.21569 17.5903 3.59202 17.782C4.01984 18 4.57989 18 5.7 18H17.5" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                        </svg>
                                                        {{ $module->level_text }}                                       
                                                    </div>
                                                    <div id="module-type" class="w-fit gap-2 md:gap-1 flex items-center justify-center">
                                                        <svg id="type-icon" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.6666 13L8.33325 16.3333L11.6666 19.6667" stroke="#31587C" stroke-width="2"/>
                                                            <path d="M15.0517 7.58341C15.5637 8.47019 15.8333 9.47612 15.8333 10.5001C15.8333 11.524 15.5637 12.53 15.0517 13.4167C14.5398 14.3035 13.8034 15.0399 12.9166 15.5519C12.0298 16.0639 11.0239 16.3334 9.99992 16.3334" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                            <path d="M8.33341 8L11.6667 4.66667L8.33341 1.33333" stroke="#31587C" stroke-width="2"/>
                                                            <path d="M4.94827 13.4166C4.43628 12.5298 4.16675 11.5239 4.16675 10.4999C4.16675 9.47595 4.43628 8.47003 4.94827 7.58325C5.46025 6.69647 6.19664 5.96009 7.08341 5.4481C7.97019 4.93612 8.97612 4.66659 10.0001 4.66659" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                        </svg>                                        
                                                        {{ $module->type_text }}                                       
                                                    </div>
                                                    <div id="module-rating" class="w-fit gap-2 md:gap-1 flex items-center justify-center">
                                                        <svg id="rating-icon" width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9.59638 1.05201C9.79613 0.77883 10.2039 0.778829 10.4036 1.05201L13.5494 5.3543C13.6111 5.4387 13.6977 5.50163 13.797 5.53424L18.8608 7.19655C19.1824 7.3021 19.3084 7.68989 19.1103 7.96427L15.9907 12.2855C15.9295 12.3703 15.8964 12.4721 15.8961 12.5767L15.8799 17.9063C15.8789 18.2448 15.549 18.4844 15.2269 18.3808L10.1531 16.7492C10.0535 16.7172 9.94647 16.7172 9.84693 16.7492L4.77314 18.3808C4.45098 18.4844 4.1211 18.2448 4.12008 17.9063L4.10394 12.5767C4.10362 12.4721 4.07053 12.3703 4.00934 12.2855L0.889702 7.96427C0.691617 7.68989 0.817618 7.3021 1.13915 7.19655L6.20296 5.53424C6.3023 5.50163 6.38892 5.4387 6.45063 5.3543L9.59638 1.05201Z" fill="#F4C867"/>
                                                        </svg>                                        
                                                        {{ $module->module_rating }}                                      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-full flex items-center justify-between font-medium md:text-base text-sm pb-2 pt-6 border-t-2 border-bluee3">
                                                <p id="module-status">{{ $module->status_text }}</p>
                                                <a href="{{ route('modules.show', ['id' => $module->module_id]) }}" class="py-1 px-2 md:px-6 bg-blue31 text-white rounded">Telusuri</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @foreach($categories as $index => $category)
                            <div id="category{{ $index+1 }}" class="w-full h-ful flex flex-col items-start justify-start space-y-5 pb-5">
                                <div class="w-fit h-fit space-y-2">
                                    <h3 id="module-category" class="font-medium text-lg md:text-xl lg:text-2xl">{{ $category }} <span id="modul-num">({{ $modules->where('module_category', $category)->count() }})</span></h3>
                                </div>
                                <div class="flex items-center justify-start gap-5 md:gap-8 lg:gap-10" style="display: inline-flex; flex-wrap: wrap;">
                                    @foreach($modules->where('module_category', $category) as $module)
                                    <div class="modul-item md:w-[330px] w-48 lg:min-h-[450px] md:min-h-[400px] min-h-[300px] pb-2 rounded flex flex-col items-center justify-center gap-2 md:gap-4 shadow-lg overflow-hidden">
                                        <div class="w-full lg:h-60 md:h-52 h-32 flex items-end justify-center relative rounded">
                                            <div id="module_publisher" class="flex items-center justify-start w-11/12 md:h-8 h-7 mb-3 gap-2 absolute z-10 text-white">
                                                <img id="module-publisher-logo" src="{{ asset($module->module_publisher_logo) }}" alt="" class="h-full w-7 md:w-8 object-cover object-center rounded-full">
                                                <p id="module-publisher-name" class="font-medium md:text-base text-xs line-clamp-1">{{ $module->module_publisher_name }}</p>
                                            </div>
                                            <div class="w-full h-1/2 absolute z-0 bottom-0 bg-gradient-to-t from-blue31 via-blue31/80 to-transparent"></div>
                                            <img id="module-publisher-banner" src="{{ asset( $module->module_publisher_banner) }}" alt="" class="w-full h-full object-cover rounded max-h-full max-w-full">
                                        </div>
                                        <div class="w-11/12 flex flex-col flex-grow items-start justify-between">
                                            <div class="h-full flex flex-col flex-grow items-start justify-between pb-5 gap-2 md:gap-4">
                                                <h2 id="module-title" class="font-medium md:font-semibold text-base md:text-xl line-clamp-2">{{ $module->module_title }}</h2>
                                                <div class="w-full flex flex-col md:flex-row items-start justify-start md:justify-between font-medium md:text-base sm:text-sm text-xs gap-2" style="display: inline-flex; flex-wrap: wrap;">
                                                    <div id="module-level" class="w-fit gap-2 md:gap-1 flex items-center justify-center">
                                                        <svg id="level-icon" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M17.5 5.5L13.2071 9.79289C12.8166 10.1834 12.1834 10.1834 11.7929 9.79289L10.7071 8.70711C10.3166 8.31658 9.68342 8.31658 9.29289 8.70711L5.83333 12.1667" stroke="#31587C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M2.5 3V14.8C2.5 15.9201 2.5 16.4802 2.71799 16.908C2.90973 17.2843 3.21569 17.5903 3.59202 17.782C4.01984 18 4.57989 18 5.7 18H17.5" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                        </svg>
                                                        {{ $module->level_text }}                                       
                                                    </div>
                                                    <div id="module-type" class="w-fit gap-2 md:gap-1 flex items-center justify-center">
                                                        <svg id="type-icon" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.6666 13L8.33325 16.3333L11.6666 19.6667" stroke="#31587C" stroke-width="2"/>
                                                            <path d="M15.0517 7.58341C15.5637 8.47019 15.8333 9.47612 15.8333 10.5001C15.8333 11.524 15.5637 12.53 15.0517 13.4167C14.5398 14.3035 13.8034 15.0399 12.9166 15.5519C12.0298 16.0639 11.0239 16.3334 9.99992 16.3334" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                            <path d="M8.33341 8L11.6667 4.66667L8.33341 1.33333" stroke="#31587C" stroke-width="2"/>
                                                            <path d="M4.94827 13.4166C4.43628 12.5298 4.16675 11.5239 4.16675 10.4999C4.16675 9.47595 4.43628 8.47003 4.94827 7.58325C5.46025 6.69647 6.19664 5.96009 7.08341 5.4481C7.97019 4.93612 8.97612 4.66659 10.0001 4.66659" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                                                        </svg>                                        
                                                        {{ $module->type_text }}                                       
                                                    </div>
                                                    <div id="module-rating" class="w-fit gap-2 md:gap-1 flex items-center justify-center">
                                                        <svg id="rating-icon" width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9.59638 1.05201C9.79613 0.77883 10.2039 0.778829 10.4036 1.05201L13.5494 5.3543C13.6111 5.4387 13.6977 5.50163 13.797 5.53424L18.8608 7.19655C19.1824 7.3021 19.3084 7.68989 19.1103 7.96427L15.9907 12.2855C15.9295 12.3703 15.8964 12.4721 15.8961 12.5767L15.8799 17.9063C15.8789 18.2448 15.549 18.4844 15.2269 18.3808L10.1531 16.7492C10.0535 16.7172 9.94647 16.7172 9.84693 16.7492L4.77314 18.3808C4.45098 18.4844 4.1211 18.2448 4.12008 17.9063L4.10394 12.5767C4.10362 12.4721 4.07053 12.3703 4.00934 12.2855L0.889702 7.96427C0.691617 7.68989 0.817618 7.3021 1.13915 7.19655L6.20296 5.53424C6.3023 5.50163 6.38892 5.4387 6.45063 5.3543L9.59638 1.05201Z" fill="#F4C867"/>
                                                        </svg>                                        
                                                        {{ $module->module_rating }}                                      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-full flex items-center justify-between font-medium md:text-base text-sm pb-2 pt-6 border-t-2 border-bluee3">
                                                <p id="module-status">{{ $module->status_text }}</p>
                                                <a href="{{ route('modules.show', ['id' => $module->module_id]) }}" class="py-1 px-2 md:px-6 bg-blue31 text-white rounded">Telusuri</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                    <div id="noResultsMessage"
                        class="font-normal text-lg md:text-xl lg:text-2xl w-full text-justify {{ $modules->count() === 0 ? '' : 'hidden' }}">
                        Kami tidak menemukan modul dengan kata kunci <span class="font-medium">"{{ $query }}"</span> yang Anda masukkan. Silakan masukkan kata kunci
                        dengan benar atau lebih lengkap.
                    </div>                
                </div>
                <div id="category-display" class="w-3/4 h-max flex flex-col gap-10">
                    <div class="w-full h-ful flex flex-col items-start justify-start space-y-5">
                        <div class="w-fit h-fit space-y-2">
                            <h6 class="md:text-base text-sm">Kategori Pembelajaran yang tersedia</h6>
                            <h3 id="category-tittle" class="font-medium text-lg md:text-xl lg:text-2xl">Semua Kategori <span id="category-num">({{ count($categories) }})</span></h3>
                        </div>
                        <div class="flex items-center justify-start gap-4 font-medium text-base md:text-lg" style="display: inline-flex; flex-wrap: wrap;">
                            @foreach($categories as $index => $category)
                            <button id="modul-category{{ $index+1 }}-btn" onclick="showContent('category{{ $index+1 }}', this)" class="py-2 px-6 bg-blue31 text-white rounded">
                                {{ $category }}
                            </button>
                            @endforeach                        
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @include('includes.components.elearning.footer')
    
    </body>
</html>


<script>
        document.getElementById('menu-btn').addEventListener('click', function() {
            var menu = document.getElementById('menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });


        document.addEventListener("DOMContentLoaded", function() {
        document.querySelector('a[href="#modul-content"]').addEventListener("click", function(event) {
            event.preventDefault(); // Mencegah scroll langsung default

            let target = document.querySelector("#modul-content");
            if (target) {
                target.scrollIntoView({
                    behavior: "smooth", // Animasi smooth
                    block: "start" // Mulai scroll dari atas elemen
                });
            }
        });
    });

    function showContent(id, button) {
        // Sembunyikan semua kategori dengan efek transisi
        document.querySelectorAll('#modul-display > div').forEach(div => {
            div.classList.add('opacity-0'); // Opacity 0 dulu untuk efek fade-out
            setTimeout(() => {
                div.classList.add('hidden');
            }, 300); // Delay agar transisi smooth
        });

        setTimeout(() => {
            if (id === 'all') {
                document.querySelectorAll('#modul-display > div').forEach(div => {
                    div.classList.remove('hidden');
                    setTimeout(() => {
                        div.classList.remove('opacity-0'); // Fade-in
                    }, 50);
                });
            } else {
                let selectedDiv = document.getElementById(id);
                selectedDiv.classList.remove('hidden');
                setTimeout(() => {
                    selectedDiv.classList.remove('opacity-0');
                }, 50);
            }
        }, 300);

        // Hapus border dari semua tombol
        document.querySelectorAll('#modul-category button').forEach(btn => {
            btn.classList.remove('border-b-4', 'border-blue31');
        });

        // Tambahkan border ke tombol yang diklik
        button.classList.add('border-b-4', 'border-blue31');
    }

    // Pastikan tampilan default saat halaman dimuat
    document.addEventListener("DOMContentLoaded", function() {
        let defaultButton = document.getElementById('all-modul-category-btn');
        showContent('all', defaultButton);
    });

    </script>
