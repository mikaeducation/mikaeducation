<header class="w-full h-20 head-shadow flex justify-between items-center sticky top-0 bg-white z-50">
    <div class="w-full h-full flex justify-center">
        <div class="flex justify-center items-center h-full w-3/4">
            <div class="flex justify-center items-center mr-auto">
                <a href="/" class="flex items-center">
                    <div class="mr-2">
                        <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="h-10 w-10">
                    </div>
                    <h1 class="font-bold text-2xl text-blue6a whitespace-pre-line leading-5">MIKA 
                        EDUCATION </h1>
                </a>
            </div>
            <div class="hidden md:flex md:items-center md:space-x-8 text-base text-blue6a font-bold">
                <nav class="flex gap-10 justify-center items-center">
                    <a href="/" class=" hover:text-blue31 transition">Beranda</a>
                    <a href="" class=" hover:text-blue31 transition">Tentang Kami</a>
                    <a href="" class=" hover:text-blue31 transition">Aplikasi</a>
                    <a href="" class=" hover:text-blue31 transition">Artikel</a>
                    <a href="" class=" hover:text-blue31 transition">Ulasan</a>
                    <div class="flex items-center justify-center gap-4">
                        <a href="{{ Auth::check() ? '/learn' : '/login' }}" class="flex items-center text-center bg-blue6a hover:bg-blue31 transition text-white rounded-full px-4 py-2 gap-1">
                            <svg width="24" height="24" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.65625 13.4583H7.625C8.93668 13.4583 10 14.5216 10 15.8333V8.51041C10 6.31431 10 5.21626 9.45275 4.43923C9.25441 4.15761 9.00905 3.91224 8.72742 3.7139C7.9504 3.16666 6.85235 3.16666 4.65625 3.16666C3.92422 3.16666 3.5582 3.16666 3.29919 3.34907C3.20532 3.41519 3.12353 3.49697 3.05742 3.59085C2.875 3.84986 2.875 4.21587 2.875 4.94791V11.6771C2.875 12.4091 2.875 12.7751 3.05742 13.0341C3.12353 13.128 3.20532 13.2098 3.29919 13.2759C3.5582 13.4583 3.92422 13.4583 4.65625 13.4583Z" stroke="#fff" stroke-width="2"/>
                                <path d="M15.3438 13.4583H12.375C11.0633 13.4583 10 14.5216 10 15.8333V8.51041C10 6.31431 10 5.21626 10.5472 4.43923C10.7456 4.15761 10.991 3.91224 11.2726 3.7139C12.0496 3.16666 13.1477 3.16666 15.3438 3.16666C16.0758 3.16666 16.4418 3.16666 16.7008 3.34907C16.7947 3.41519 16.8765 3.49697 16.9426 3.59085C17.125 3.84986 17.125 4.21587 17.125 4.94791V11.6771C17.125 12.4091 17.125 12.7751 16.9426 13.0341C16.8765 13.128 16.7947 13.2098 16.7008 13.2759C16.4418 13.4583 16.0758 13.4583 15.3438 13.4583Z" stroke="#fff" stroke-width="2"/>
                            </svg>
                            Pembelajaran
                        </a>
                        <a href="{{ Auth::check() ? '/profile' : '/login' }}" class="text-center">
                            <button id="menu-btn" class="h-full flex py-2 px-4 text-blue6a text-base font-bold border-2 border-blue6a transition rounded-full hover:bg-blue6a hover:text-white focus:outline-none">
                                @if(Auth::check() && Auth::user()->profile)
                                    {{ strtoupper(substr(Auth::user()->profile->first_name, 0, 1)) }}
                                @else
                                    <p>Masuk</p>
                                @endif
                            </button>
                        </a>      
                    </div>                  
                </nav>
            </div>
            <div class="lg:hidden flex items-center">
                <button id="menu-btn" class="text-blue6a h-10 w-10 rounded-full hover:border-2 hover:border-blue6a flex items-center justify-center focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>