<div id="overlay" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 hidden z-40"></div>
<header class="w-full h-[80px] content-shadows flex justify-center items-center sticky top-0 z-50 bg-white">
    <div class="w-full h-full hidden md:flex lg:flex flex-col justify-center items-center">
        <div class="flex justify-between md:justify-between lg:justify-center items-center h-full w-4/5">
            <div class="flex justify-center items-center mr-auto">
                <a href="/" class="flex items-center">
                    <div class="xl:mr-2 mr-1.5">
                        <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="xl:h-10 h-8 xl:w-10 w-8">
                    </div>
                    <h1 class="font-bold text-lg xl:text-xl text-blue6a whitespace-pre-line leading-4 xl:leading-5">MIKA<br>EDUCATION </h1>
                </a>
            </div>
            <div class="w-3/4 text-lg xl:text-xl text-blue6a font-medium relative">
                <nav class="flex items-center justify-end gap-6 xl:gap-10" id="nav-menu">
                    <a href="/news" class="hidden md:hidden lg:flex text-center hover:text-blue31 transition menu-trigger">Kabar Terkini</a>
                    <a href="/article" class="hidden md:hidden lg:flex text-center hover:text-blue31 transition menu-trigger">Artikel & Bacaan</a>
                    <a href="/aboutus" class="hidden md:hidden lg:flex text-center hover:text-blue31 transition menu-trigger">Tentang Kami</a>
                    <div class="flex items-center justify-center">
                        <div class="pr-5 border-r-2 border-blue6a border-opacity-50">
                            <a href="{{ Auth::check() ? '/learn' : '/login' }}" class="flex items-center text-center font-medium bg-blue6a border-2 border-blue6a hover:bg-blue31 hover:border-blue31 transition duration-300 text-white rounded px-4 py-1 xl:py-1.5 gap-1">
                                <svg width="24" height="24" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.65625 13.4583H7.625C8.93668 13.4583 10 14.5216 10 15.8333V8.51041C10 6.31431 10 5.21626 9.45275 4.43923C9.25441 4.15761 9.00905 3.91224 8.72742 3.7139C7.9504 3.16666 6.85235 3.16666 4.65625 3.16666C3.92422 3.16666 3.5582 3.16666 3.29919 3.34907C3.20532 3.41519 3.12353 3.49697 3.05742 3.59085C2.875 3.84986 2.875 4.21587 2.875 4.94791V11.6771C2.875 12.4091 2.875 12.7751 3.05742 13.0341C3.12353 13.128 3.20532 13.2098 3.29919 13.2759C3.5582 13.4583 3.92422 13.4583 4.65625 13.4583Z" stroke="#fff" stroke-width="2"/>
                                    <path d="M15.3438 13.4583H12.375C11.0633 13.4583 10 14.5216 10 15.8333V8.51041C10 6.31431 10 5.21626 10.5472 4.43923C10.7456 4.15761 10.991 3.91224 11.2726 3.7139C12.0496 3.16666 13.1477 3.16666 15.3438 3.16666C16.0758 3.16666 16.4418 3.16666 16.7008 3.34907C16.7947 3.41519 16.8765 3.49697 16.9426 3.59085C17.125 3.84986 17.125 4.21587 17.125 4.94791V11.6771C17.125 12.4091 17.125 12.7751 16.9426 13.0341C16.8765 13.128 16.7947 13.2098 16.7008 13.2759C16.4418 13.4583 16.0758 13.4583 15.3438 13.4583Z" stroke="#fff" stroke-width="2"/>
                                </svg>
                                Pembelajaran
                            </a>
                        </div>
                        <div class="relative group text-left flex pl-5">
                            <a href="{{ Auth::check() ? '/profile' : '/login' }}" class="text-center flex items-center justify-center md:mr-2 lg:mr-0">
                                <button id="menu-btn" class="h-full flex items-center z-50 text-center text-blue6a text-2xl font-medium border-2 border-blue6a transition rounded hover:border-blue31">
                                    @if(Auth::check() && Auth::user()->profile)
                                        @if(Auth::user()->profile->profile_image)
                                            <img src="{{ asset( Auth::user()->profile->profile_image) }}"
                                                alt="Profil"
                                                class="w-10 h-10 object-cover object-top">
                                        @else
                                            <span class="flex items-center justify-center px-3 xl:px-4 py-0 xl:py-0.5 text-blue6a font-normal text-3xl">
                                                {{ strtoupper(substr(Auth::user()->profile->first_name, 0, 1)) }}
                                            </span>
                                        @endif
                                    @else
                                        <p title="Masuk/Daftar Akun" class="px-3 h-10 flex items-center tracking-normal text-base font-medium gap-1">
                                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M19.7628 19.9054C20.3157 19.7902 20.6449 19.2117 20.3702 18.7183C19.7646 17.6307 18.8106 16.6749 17.5902 15.9465C16.0184 15.0085 14.0925 14.5 12.1113 14.5C10.1301 14.5 8.20425 15.0085 6.63245 15.9465C5.41202 16.6749 4.45799 17.6307 3.85241 18.7183C3.57771 19.2117 3.90695 19.7902 4.45976 19.9054C9.50657 20.9572 14.716 20.9572 19.7628 19.9054Z" fill="#6AA4D9"/>
                                                <circle cx="12.1113" cy="8.5" r="5" fill="#6AA4D9"/>
                                            </svg>
                                            Masuk/Daftar
                                        </p>
                                    @endif
                                </button>
                            </a>
                        </div>

                        <div class="relative group menu-container">
                            <svg width="38" height="38" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="items-center flex lg:hidden">
                                <path d="M18 9L12 15L6 9" stroke="#6AA4D9" stroke-width="2"/>
                            </svg>
                            <div class="absolute right-0 top-2 pt-8 w-72 bg-white bg-opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-10">
                                <div class="bg-blue6a mt-4 rounded">
                                    <div class="absolute top-10 right-[6px] transform -translate-y-1 w-6 h-6 z-10 bg-blue6a rotate-45"></div>
                                    <ul class="py-1 px-1 z-20 relative text-white bg-blue6a rounded">
                                        <li><a href="/news" class="block px-4 py-2 hover:bg-white hover:text-blue6a">Kabar Terkini</a></li>
                                        <li><a href="/article" class="block px-4 py-2 hover:bg-white hover:text-blue6a">Artikel & Bacaan</a></li>
                                        <li><a href="/aboutus" class="block px-4 py-2 hover:bg-white hover:text-blue6a">Tentang kami</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="h-full w-3/4 py-6 flex md:hidden lg:hidden items-center justify-between">
        <div class="flex justify-center items-center mr-auto">
            <a href="/" class="flex items-center">
                <div class="mr-2">
                    <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="h-12 w-12">
                </div>
                <h1 class="font-bold text-2xl text-blue6a whitespace-pre-line leading-6">MIKA
                    EDUCATION</h1>
            </a>
        </div>
        <button id="menuLearn-toggle-btn" class="flex items-center justify-center">
            <div class="h-full hidden md:flex items-center px-3 py-1 text-center text-blue6a text-2xl font-medium border-2 border-blue6a transition rounded">
                @if(Auth::check() && Auth::user()->profile)
                    {{ strtoupper(substr(Auth::user()->profile->first_name, 0, 1)) }}
                @else
                    <p title="Masuk/Daftar Akun" class="py-1 font-medium flex items-center tracking-normal text-white">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.7628 19.9054C20.3157 19.7902 20.6449 19.2117 20.3702 18.7183C19.7646 17.6307 18.8106 16.6749 17.5902 15.9465C16.0184 15.0085 14.0925 14.5 12.1113 14.5C10.1301 14.5 8.20425 15.0085 6.63245 15.9465C5.41202 16.6749 4.45799 17.6307 3.85241 18.7183C3.57771 19.2117 3.90695 19.7902 4.45976 19.9054C9.50657 20.9572 14.716 20.9572 19.7628 19.9054Z" fill="#6AA4D9"/>
                            <circle cx="12.1113" cy="8.5" r="5" fill="#6AA4D9"/>
                        </svg>
                    </p>
                @endif
            </div>
            <svg class="w-10 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke="#6AA4D9" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>
    <div id="menuLearn" class="w-full h-screen py-2 px-12 fixed flex-col justify-start items-center bg-white text-blue6a font-bold top-0 z-40 head-shadow hidden translate-x-full opacity-0 transition-transform duration-300 ease-in-out">
        <div class="w-full flex justify-start items-start py-6 border-b-2 border-bluee3 relative">
            <a href="{{ Auth::check() ? '/profile' : '/login' }}" class="w-full text-center flex items-center justify-start gap-4 md:mr-2 lg:mr-0">
                <button id="menu-btn" class="h-full w-[18%] flex items-center z-50 text-center text-blue6a text-2xl font-medium transition rounded-full hover:border-blue31">
                    @if(Auth::check() && Auth::user()->profile)
                        @if(Auth::user()->profile->profile_image)
                            <img src="{{ asset( Auth::user()->profile->profile_image) }}"
                                alt="Profil"
                                class="w-14 h-14 object-cover object-top rounded-full border-2 border-blue6a">
                        @else
                            <span class="flex items-center justify-center px-3 h-10 text-blue6a font-normal text-3xl border-2 border-blue6a rounded-full">
                                {{ strtoupper(substr(Auth::user()->profile->first_name, 0, 1)) }}
                            </span>
                        @endif
                    @else
                        <p title="Masuk/Daftar Akun" class="px-3 h-10 text-base flex items-center tracking-normal gap-2 border-2 border-blue6a rounded-lg">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.7628 19.9054C20.3157 19.7902 20.6449 19.2117 20.3702 18.7183C19.7646 17.6307 18.8106 16.6749 17.5902 15.9465C16.0184 15.0085 14.0925 14.5 12.1113 14.5C10.1301 14.5 8.20425 15.0085 6.63245 15.9465C5.41202 16.6749 4.45799 17.6307 3.85241 18.7183C3.57771 19.2117 3.90695 19.7902 4.45976 19.9054C9.50657 20.9572 14.716 20.9572 19.7628 19.9054Z" fill="#6AA4D9"/>
                                <circle cx="12.1113" cy="8.5" r="5" fill="#6AA4D9"/>
                            </svg>
                            Masuk/Daftar
                        </p>
                    @endif
                </button>
                @if(Auth::check() && Auth::user()->profile)
                    <p class="w-[82%] text-2xl text-blue6a font-medium text-left mr-16 flex flex-col items-start justify-start">
                        {{ Auth::user()->profile->first_name }} {{ Auth::user()->profile->last_name }}
                        <br><span class="text-base font-normal text-grayd9">{{ Auth::user()->profile->occupation }}, {{ Auth::user()->profile->institution }}</span>
                    </p>
                @endif
            </a>
            <button id="menuLearn-close-btn" class="absolute right-0 top-1/2 transform -translate-y-1/2 h-10 w-10 flex justify-center items-center text-blue6a hover:border-2 hover:rounded-full hover:border-blue6a focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <nav class="w-full flex flex-col justify-start items-start space-y-4 py-6 text-lg font-medium">
            @php $isHome = request()->is('/') @endphp
            <a href="/" class="w-full p-2 px-5 hover:text-xl flex justify-between items-center {{ $isHome ? 'bg-bluee3 rounded-xl' : '' }}">
                <div class="flex items-center justify-start gap-3 h-fit w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 24 24" fill="#6AA4D9"  class="h-6 w-fit">
                        <path d="M 12 2.0996094 L 1 12 L 4 12 L 4 21 L 11 21 L 11 15 L 13 15 L 13 21 L 20 21 L 20 12 L 23 12 L 12 2.0996094 z M 12 4.7910156 L 18 10.191406 L 18 11 L 18 19 L 15 19 L 15 13 L 9 13 L 9 19 L 6 19 L 6 10.191406 L 12 4.7910156 z"></path>
                    </svg>
                    Beranda
                </div>
                @if($isHome) → @endif
            </a>
            @php $isNews = request()->is('news') @endphp
            <a href="/news" class="w-full p-2 px-5 hover:text-xl flex justify-between items-center {{ $isNews ? 'bg-bluee3 rounded-xl' : '' }}">
                <div class="flex items-center justify-start gap-4 h-fit w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 24 24" fill="#6AA4D9"  class="h-6 w-fit">
                        <path d="M 2 3 L 2 18 C 2 19.64497 3.3550302 21 5 21 L 19 21 C 20.64497 21 22 19.64497 22 18 L 22 7 L 20 7 L 20 18 C 20 18.56503 19.56503 19 19 19 C 18.43497 19 18 18.56503 18 18 L 18 3 L 2 3 z M 4 5 L 16 5 L 16 18 C 16 18.388348 16.278986 18.657986 16.416016 19 L 5 19 C 4.4349698 19 4 18.56503 4 18 L 4 5 z M 6 7 L 6 10 L 14 10 L 14 7 L 6 7 z M 6 12 L 6 14 L 14 14 L 14 12 L 6 12 z M 6 16 L 6 18 L 14 18 L 14 16 L 6 16 z"></path>
                    </svg>
                    Kabar Terkini
                </div>
                @if($isNews) → @endif
            </a>
            @php $isArticle = request()->is('article') @endphp
            <a href="/article" class="w-full p-2 px-5 hover:text-xl flex justify-between items-center {{ $isArticle ? 'bg-bluee3 rounded-xl' : '' }}">
                <div class="flex items-center justify-start gap-4 h-fit w-full">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-fit">
                        <path d="M11.25 8.75L16.25 8.75" stroke="#6AA4D9" stroke-width="2" stroke-linecap="round"/>
                        <path d="M11.25 18.75L15 18.75" stroke="#6AA4D9" stroke-width="2" stroke-linecap="round"/>
                        <path d="M11.25 13.75L18.75 13.75" stroke="#6AA4D9" stroke-width="2" stroke-linecap="round"/>
                        <path d="M23.75 13.75V9.75C23.75 6.92157 23.75 5.50736 22.8713 4.62868C21.9926 3.75 20.5784 3.75 17.75 3.75H12.25C9.42157 3.75 8.00736 3.75 7.12868 4.62868C6.25 5.50736 6.25 6.92157 6.25 9.75V20.25C6.25 23.0784 6.25 24.4926 7.12868 25.3713C8.00736 26.25 9.42157 26.25 12.25 26.25H15" stroke="#6AA4D9" stroke-width="2"/>
                        <circle cx="21.875" cy="21.875" r="3.125" stroke="#6AA4D9" stroke-width="2"/>
                        <path d="M26.25 26.25L24.375 24.375" stroke="#6AA4D9" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    Artikel & Bacaan
                </div>
                @if($isArticle) → @endif
            </a>
            @php $isAbout = request()->is('aboutus') @endphp
            <a href="/aboutus" class="w-full p-2 px-5 hover:text-xl flex justify-between items-center {{ $isAbout ? 'bg-bluee3 rounded-xl' : '' }}">
                <div class="flex items-center justify-start gap-4 h-fit w-full">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" fill="#6AA4D9" class="h-6 w-fit">
                        <circle cx="12" cy="8" r="3" stroke="#6AA4D9" stroke-width="2" stroke-linecap="round"/>
                        <path d="M15.2679 8C15.5332 7.54063 15.97 7.20543 16.4824 7.06815C16.9947 6.93086 17.5406 7.00273 18 7.26795C18.4594 7.53317 18.7946 7.97 18.9319 8.48236C19.0691 8.99472 18.9973 9.54063 18.7321 10C18.4668 10.4594 18.03 10.7946 17.5176 10.9319C17.0053 11.0691 16.4594 10.9973 16 10.7321C15.5406 10.4668 15.2054 10.03 15.0681 9.51764C14.9309 9.00528 15.0027 8.45937 15.2679 8L15.2679 8Z" stroke="#6AA4D9" stroke-width="2"/>
                        <path d="M5.26795 8C5.53317 7.54063 5.97 7.20543 6.48236 7.06815C6.99472 6.93086 7.54063 7.00273 8 7.26795C8.45937 7.53317 8.79457 7.97 8.93185 8.48236C9.06914 8.99472 8.99727 9.54063 8.73205 10C8.46683 10.4594 8.03 10.7946 7.51764 10.9319C7.00528 11.0691 6.45937 10.9973 6 10.7321C5.54063 10.4668 5.20543 10.03 5.06815 9.51764C4.93086 9.00528 5.00273 8.45937 5.26795 8L5.26795 8Z" stroke="#6AA4D9" stroke-width="2"/>
                        <path d="M16.8816 18L15.9013 18.1974L16.0629 19H16.8816V18ZM20.7202 16.9042L21.6627 16.5699L20.7202 16.9042ZM14.7808 14.7105L14.176 13.9142L13.0194 14.7927L14.2527 15.5597L14.7808 14.7105ZM19.8672 17H16.8816V19H19.8672V17ZM19.7777 17.2384C19.7707 17.2186 19.7642 17.181 19.7725 17.1354C19.7804 17.0921 19.7982 17.0593 19.8151 17.0383C19.8474 16.9982 19.874 17 19.8672 17V19C21.0132 19 22.1414 17.9194 21.6627 16.5699L19.7777 17.2384ZM17 15C18.6416 15 19.4027 16.1811 19.7777 17.2384L21.6627 16.5699C21.1976 15.2588 19.9485 13 17 13V15ZM15.3857 15.5069C15.7702 15.2148 16.282 15 17 15V13C15.8381 13 14.9028 13.3622 14.176 13.9142L15.3857 15.5069ZM14.2527 15.5597C15.2918 16.206 15.7271 17.3324 15.9013 18.1974L17.8619 17.8026C17.644 16.7204 17.0374 14.9364 15.309 13.8614L14.2527 15.5597Z" fill="#6AA4D9"/>
                        <path d="M9.21918 14.7105L9.7473 15.5597L10.9806 14.7927L9.82403 13.9142L9.21918 14.7105ZM3.2798 16.9041L4.22227 17.2384L4.22227 17.2384L3.2798 16.9041ZM7.11835 18V19H7.93703L8.09867 18.1974L7.11835 18ZM7.00001 15C7.71803 15 8.22986 15.2148 8.61433 15.5069L9.82403 13.9142C9.09723 13.3621 8.1619 13 7.00001 13V15ZM4.22227 17.2384C4.59732 16.1811 5.35842 15 7.00001 15V13C4.0515 13 2.80238 15.2587 2.33733 16.5699L4.22227 17.2384ZM4.13278 17C4.126 17 4.15264 16.9982 4.18486 17.0383C4.20176 17.0593 4.21961 17.0921 4.22748 17.1354C4.2358 17.181 4.22931 17.2186 4.22227 17.2384L2.33733 16.5699C1.85864 17.9194 2.98677 19 4.13278 19V17ZM7.11835 17H4.13278V19H7.11835V17ZM8.09867 18.1974C8.27289 17.3324 8.70814 16.206 9.7473 15.5597L8.69106 13.8614C6.96257 14.9363 6.356 16.7203 6.13804 17.8026L8.09867 18.1974Z" fill="#6AA4D9"/>
                        <path d="M12 14C15.5715 14 16.5919 16.5512 16.8834 18.0089C16.9917 18.5504 16.5523 19 16 19H8C7.44772 19 7.00829 18.5504 7.11659 18.0089C7.4081 16.5512 8.42846 14 12 14Z" stroke="#6AA4D9" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    Tentang Kami
                </div>
                @if($isAbout) → @endif
            </a>

            @php $isLearn = request()->is('learn') || request()->is('login') @endphp
            <a href="{{ Auth::check() ? '/learn' : '/login' }}" class="w-full p-2 px-5 hover:text-xl text-blue31 flex justify-between items-center {{ $isLearn ? 'bg-bluee3 rounded-xl' : '' }}">
                <div class="flex items-center justify-start gap-3 h-fit w-full">
                    <svg width="24" height="24" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-7 w-fit">
                        <path d="M4.65625 13.4583H7.625C8.93668 13.4583 10 14.5216 10 15.8333V8.51041C10 6.31431 10 5.21626 9.45275 4.43923C9.25441 4.15761 9.00905 3.91224 8.72742 3.7139C7.9504 3.16666 6.85235 3.16666 4.65625 3.16666C3.92422 3.16666 3.5582 3.16666 3.29919 3.34907C3.20532 3.41519 3.12353 3.49697 3.05742 3.59085C2.875 3.84986 2.875 4.21587 2.875 4.94791V11.6771C2.875 12.4091 2.875 12.7751 3.05742 13.0341C3.12353 13.128 3.20532 13.2098 3.29919 13.2759C3.5582 13.4583 3.92422 13.4583 4.65625 13.4583Z" stroke="#31587C" stroke-width="2"/>
                        <path d="M15.3438 13.4583H12.375C11.0633 13.4583 10 14.5216 10 15.8333V8.51041C10 6.31431 10 5.21626 10.5472 4.43923C10.7456 4.15761 10.991 3.91224 11.2726 3.7139C12.0496 3.16666 13.1477 3.16666 15.3438 3.16666C16.0758 3.16666 16.4418 3.16666 16.7008 3.34907C16.7947 3.41519 16.8765 3.49697 16.9426 3.59085C17.125 3.84986 17.125 4.21587 17.125 4.94791V11.6771C17.125 12.4091 17.125 12.7751 16.9426 13.0341C16.8765 13.128 16.7947 13.2098 16.7008 13.2759C16.4418 13.4583 16.0758 13.4583 15.3438 13.4583Z" stroke="#31587C" stroke-width="2"/>
                    </svg>
                    Pembelajaran
                </div>
                @if($isLearn) → @endif
            </a>
        </nav>
    </div>
</header>

{{-- Fixed chat icon /bantuan --}}
<div id="chat-overlay" class="hidden fixed inset-0 bg-black opacity-50 z-40"></div>
<div class="fixed bottom-5 right-5 z-50 flex flex-col items-end">
    <button id="chat-icon-button" class="bg-blue6a shadow1 w-16 h-14 flex items-center justify-center rounded rounded-l-full rounded-br-full hover:bg-blue31 transition duration-300" onclick="toggleChat()">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21H7.5C6.10218 21 5.40326 21 4.85195 20.7716C4.11687 20.4672 3.53284 19.8831 3.22836 19.1481C3 18.5967 3 17.8978 3 16.5V12C3 7.02944 7.02944 3 12 3ZM16 11C16 10.4477 15.5523 10 15 10H9C8.44772 10 8 10.4477 8 11C8 11.5523 8.44772 12 9 12H15C15.5523 12 16 11.5523 16 11ZM13 15C13 14.4477 12.5523 14 12 14H9C8.44772 14 8 14.4477 8 15C8 15.5523 8.44772 16 9 16H12C12.5523 16 13 15.5523 13 15Z" fill="white"/>
        </svg>
    </button>
    <button id="chat-close-button" class="hidden text-white text-4xl font-medium shadow1 rounded rounded-l-full rounded-br-full px-4 bg-blue6a" onclick="toggleChat()"> &times;</button>
    <div id="chat-popup" class="hidden bg-white w-96 rounded-lg overflow-hidden shadow1 mt-3 z-50">
        <div class="w-full bg-blue31 p-4 space-y-2">
            <div class="flex text-white space-x-2 items-center">
                <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="h-10 w-10">
            </div>
            <div class="text-white flex items-center justify-between">
                <div>
                    <div class="text-xl font-medium">Hai, Selamat Datang di MIKA Education</div>
                    <p class="text-sm font-light italic">Jika memerlukan bantuan, Anda dapat memanfaatkan layanan ini!
                </div>
            </div>
        </div>

        <div>
            <div class="w-full p-4 space-y-2 bg-gray-200 overflow-y-auto">
                <div id="faq-default" class="w-full h-[350px] flex flex-col">
                    <div class="flex items-start space-x-2 pb-4">
                        <div class="w-1/12 flex text-white space-x-2 items-center">
                            <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="w-full">
                        </div>
                        <div class="w-11/12 flex flex-col items-start justify-start space-y-2">
                            <div class="space-y-1">
                                <div class="w-full bg-white text-blue31 text-justify p-3 rounded shadow-sm text-sm">
                                    <p>Anda dapat memilih pertanyaan yang sering diajukan (FAQ) dibawah ini. Jika tidak cukup membantu, silahkan pilih opsi chat dengan kami!
                                    </p>
                                </div>
                                <div class="w-full bg-white text-blue31 text-justify p-3 space-y-2 rounded shadow-sm text-sm font-medium">
                                    <div class="w-full flex flex-col pb-2 border-b-2">
                                        <button onclick="toggleFAQ(this)" class="w-full flex justify-between text-left">
                                            <p class="w-11/12">Bagaimana mengakses pembelajaran?</p>
                                            <svg width="24" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="items-center flex opacity-50 transition-transform duration-300">
                                                <path d="M18 9L12 15L6 9" stroke="#31587C" stroke-width="2"/>
                                            </svg>
                                        </button>
                                        <div class="faq-text hidden w-full pt-2 font-normal">
                                            <p>Layanan pembelajaran dapat Anda akses ketika telah berhasil login/masuk menggunakan akun Anda. Setelah berhasil login/masuk maka Anda dapat mengakses layanan pembelajaran dan halaman profile Anda.</p>
                                        </div>
                                    </div>
                                    <div class="w-full flex flex-col pb-2 border-b-2">
                                        <button onclick="toggleFAQ(this)" class="w-full flex justify-between text-left">
                                            <p class="w-11/12">Bagaimana caranya untuk login/masuk?</p>
                                            <svg width="24" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="items-center flex opacity-50 transition-transform duration-300">
                                                <path d="M18 9L12 15L6 9" stroke="#31587C" stroke-width="2"/>
                                            </svg>
                                        </button>
                                        <div class="faq-text hidden w-full pt-2 font-normal">
                                            <p>Anda dapat memilih tombol Pembelajaran atau Ikon profil pada bagian atas website. Sistem secara otomatis akan mengarahkan Anda ke halaman login/masuk ketika Anda menekan tombol tersebut. Di halaman tersebut, Anda dapat memasukkan nomor telepon dan kata sandi yang telah didaftarkan pada akun Anda saat registrasi.</p>
                                        </div>
                                    </div>
                                    <div class="w-full flex flex-col pb-2 border-b-2">
                                        <button onclick="toggleFAQ(this)" class="w-full flex justify-between text-left">
                                            <p class="w-11/12">Bagaimana caranya untuk Daftar Akun atau melakukan proses Registrasi?</p>
                                            <svg width="24" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="items-center flex opacity-50 transition-transform duration-300">
                                                <path d="M18 9L12 15L6 9" stroke="#31587C" stroke-width="2"/>
                                            </svg>
                                        </button>
                                        <div class="faq-text hidden w-full pt-2 font-normal">
                                            <p>Untuk daftar akun atau melakukan proses registrasi, Anda harus pergi ke halaman login/masuk terlebih dahulu. Setelah itu, pilih tombol DAFTAR yang telah disediakan dan Anda akan diarahkan menuju halaman Daftar akun atau proses registrasi. 1) Masukkan nomor telepon dan email Anda yang aktif, serta buat password atau kata sandi akun Anda; 2) Setujui syarat dan ketentuan yang berlaku; 3) Terakhir, tekan tombol DAFTAR untuk mendaftarkan akun Anda. Proses daftar akun telah selesai.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-fit text-white text-justify flex flex-col gap-2 pt-2">
                                <button onclick="toggleChatAdmin()" class="flex items-center gap-2 bg-blue31 px-3 py-1 rounded hover:shadow-lg text-sm">
                                    <svg width="30" height="33" viewBox="0 0 51 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M41.9997 43.207C42.5894 43.0841 42.9398 42.47 42.6921 41.921C41.4893 39.2549 39.3122 36.9098 36.4141 35.1801C33.1395 33.2258 29.1273 32.1665 24.9998 32.1665C20.8723 32.1665 16.8601 33.2258 13.5855 35.1801C10.6874 36.9097 8.51031 39.2549 7.30749 41.921C7.05981 42.47 7.4102 43.0841 7.99981 43.207L16.8389 45.0491C22.2217 46.1709 27.7779 46.1709 33.1606 45.0491L41.9997 43.207Z" fill="white"/>
                                        <circle cx="25.0007" cy="19.6667" r="10.4167" fill="white"/>
                                        <path d="M46.8327 12.1665C46.8327 8.39527 46.8327 6.50965 45.6611 5.33808C44.4895 4.1665 42.6039 4.1665 38.8327 4.1665H38.166C34.3948 4.1665 32.5092 4.1665 31.3376 5.33808C30.166 6.50965 30.166 8.39527 30.166 12.1665V18.8332C30.166 19.776 30.166 20.2474 30.4589 20.5403C30.7518 20.8332 31.2232 20.8332 32.166 20.8332H38.8327C42.6039 20.8332 44.4895 20.8332 45.6611 19.6616C46.8327 18.49 46.8327 16.6044 46.8327 12.8332V12.1665Z" fill="#31587C" stroke="white" stroke-width="1.2"/>
                                        <path d="M35.375 10.4165L41.625 10.4165" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M35.375 14.5835H38.5" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    <p class="font-medium">Kirim Pesan kepada Kami...</p>
                                </button>
                                <a href="https://wa.me/085141177976" class="h-fit flex items-center justify-start gap-3 font-medium bg-blue31 px-3 py-2 rounded hover:shadow-lg text-sm">
                                    <img src="https://img.icons8.com/pastel-glyph/128/FFFFFF/whatsapp--v2.png" alt="signing-a-document" class="h-7"/>
                                    atau Hubungi via WhatsApp...
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full bg-blue31"></div>
                </div>
                <div id="faq-chat-admin" class="hidden w-full h-[265px] space-y-2">
                    <div id="chat-admin-list" class="flex flex-col space-y-2 pb-4">
                        <div class="w-full flex items-start space-x-2">
                            <div class="w-1/12 flex items-center">
                                <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="w-full">
                            </div>
                            <div class="w-11/12 flex flex-col items-start justify-start space-y-1">
                                <div class="w-full bg-white text-blue31 text-justify p-3 rounded shadow-sm text-sm">
                                    <p>Ada yang bisa kami bantu? Silahkan tanyakan dan kami akan coba untuk membantu kendala Anda!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="chat-admin" class="p-4 hidden border-t bg-blue31">
                <form id="chat-form" class="flex items-center space-x-2">
                    @csrf
                    @if(Auth::check())
                    <input type="text" id="chat-input" name="message" placeholder="Balas di sini..."
                    class="flex-1 border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue6a" required />
                        <button type="submit" id="send-button" class="bg-white text-white p-2 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#31587C" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                            </svg>
                        </button>
                    @else
                        <input type="text" placeholder="Anda harus login untuk mengirim pesan..." class="flex-1 border rounded px-4 py-2 bg-gray-300 text-blue31 cursor-not-allowed" disabled />
                        <a href="/login" class="bg-white text-blue31 text-base font-medium px-4 py-2 rounded">Login</a>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>



<script>
    function toggleChat() {
        const chatPopup = document.getElementById("chat-popup");
        const chatIconButton = document.getElementById("chat-icon-button");
        const chatCloseButton = document.getElementById("chat-close-button");
        chatPopup.classList.toggle("hidden");
        chatIconButton.classList.toggle("hidden");
        chatCloseButton.classList.toggle("hidden");
    }

    function toggleChat() {
        const chatPopup = document.getElementById("chat-popup");
        const chatOverlay = document.getElementById("chat-overlay");
        const chatIconButton = document.getElementById("chat-icon-button");
        const chatCloseButton = document.getElementById("chat-close-button");

        // Toggle visibility
        chatPopup.classList.toggle("hidden");
        chatOverlay.classList.toggle("hidden");
        chatIconButton.classList.toggle("hidden");
        chatCloseButton.classList.toggle("hidden");
    }

    // Tutup chat jika klik di luar popup
    document.getElementById("chat-overlay").addEventListener("click", function () {
        toggleChat();
    });

    // Pilihan mode FAQ (Default) atau Chat dg chat-admin
    function toggleChatAdmin() {
        document.getElementById('faq-default').classList.toggle('hidden');
        document.getElementById('faq-chat-admin').classList.toggle('hidden');
        document.getElementById('chat-admin').classList.toggle('hidden');
    }

    // Buka tutup button FAQ
    function toggleFAQ(button) {
        let content = button.nextElementSibling;
        let icon = button.querySelector("svg");

        content.classList.toggle("hidden"); // Menampilkan/Menyembunyikan teks
        icon.classList.toggle("rotate-180"); // Animasi rotasi panah ke atas/bawah
    }


    document.addEventListener("DOMContentLoaded", function () {
    const chatForm = document.getElementById("chat-form");
    const chatInput = document.getElementById("chat-input");
    const chatList = document.getElementById("chat-admin-list");
    const sendButton = document.getElementById("send-button");

    chatForm.addEventListener("submit", function (e) {
        e.preventDefault();
        let message = chatInput.value.trim();

        if (message === "") return;

        fetch("{{ route('message.store') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
            body: JSON.stringify({ message: message }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                let warningMessage = document.createElement("div");
                warningMessage.classList.add("w-full", "bg-white", "rounded", "text-justify", "text-sm", "text-blue31", "p-3");
                warningMessage.innerHTML = data.error;
                chatList.appendChild(warningMessage);

                chatInput.disabled = true;
                sendButton.disabled = true;
                chatForm.classList.add("opacity-50", "cursor-not-allowed");
                return;
            }

            if (data.message) {
                let newMessage = document.createElement("div");
                newMessage.classList.add("w-full", "flex", "items-end", "space-x-2");

                // Ambil data user
                let user = data.user;
                let profileHTML = "";

                if (user.profile_image) {
                    profileHTML = `<img src="${user.profile_image}" alt="Profile Image" class="w-7 h-7 bg-white rounded-full object-cover">`;
                } else {
                    let initial = user.name.charAt(0).toUpperCase();
                    profileHTML = `<span class="flex items-center justify-center w-7 h-7 text-blue31 bg-white rounded-full font-normal text-xl">${initial}</span>`;
                }

                newMessage.innerHTML = `
                    <div class="w-full flex items-start space-x-2">
                        <div class="w-11/12 flex flex-col items-start justify-start space-y-1">
                            <div class="w-full bg-white text-blue31 text-justify p-3 rounded shadow-sm text-sm">
                                <p>${message}</p>
                            </div>
                        </div>
                        <div class="w-1/12 flex items-center">
                            ${profileHTML}
                        </div>
                    </div>
                `;

                chatList.appendChild(newMessage);

                // Tambahkan balasan otomatis dari sistem
                if (data.responseMessage) {
                    let botResponse = document.createElement("div");
                    botResponse.classList.add("w-full", "flex", "items-start", "space-x-2");
                    botResponse.innerHTML = `
                        <div class="w-1/12 flex items-center">
                            <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="w-full">
                        </div>
                        <div class="w-11/12 flex flex-col items-start justify-start space-y-1">
                            <div class="w-full bg-white text-blue31 text-justify p-3 rounded shadow-sm text-sm">
                                <p>${data.responseMessage}</p>
                            </div>
                        </div>
                    `;
                    chatList.appendChild(botResponse);
                }

                chatInput.value = "";
            }
        })
        .catch(error => console.error("Error:", error));
    });
});


document.addEventListener("DOMContentLoaded", () => {
    const menu = document.getElementById('menuLearn');
    const btnOpen = document.getElementById('menuLearn-toggle-btn');
    const btnClose = document.getElementById('menuLearn-close-btn');

    if (!menu || !btnOpen || !btnClose) {
        console.error("Elemen penting tidak ditemukan!");
        return;
    }

    // Handler transitionend harus didefinisikan sekali saja
    function onTransitionEnd() {
        menu.classList.add('hidden');
        menu.removeEventListener('transitionend', onTransitionEnd);
    }

    function openMenu() {
        menu.classList.remove('hidden');
        setTimeout(() => {
            menu.classList.remove('translate-x-full', 'opacity-0');
            menu.classList.add('translate-x-0', 'opacity-100');
        }, 10);
    }

    function closeMenu() {
        menu.classList.remove('translate-x-0', 'opacity-100');
        menu.classList.add('translate-x-full', 'opacity-0');

        // Pasang listener dengan fungsi yang sudah didefinisikan di luar
        menu.addEventListener('transitionend', onTransitionEnd);
    }

    btnOpen.addEventListener('click', openMenu);
    btnClose.addEventListener('click', closeMenu);

});


</script>
