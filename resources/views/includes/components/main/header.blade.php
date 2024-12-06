<header class="w-full h-24 bg-bluee3 flex justify-between items-center p-4 sticky top-0 z-50">
    <div class="w-full h-full flex justify-center">
        <div class="flex justify-center items-center h-full w-3/4">
            <div class="flex justify-center items-center mr-auto">
                <a href="" class="flex items-center">
                    <div class="mr-5">
                        <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="h-8 w-8">
                    </div>
                    <h1 class="font-bold text-3xl text-blue6a">MIKA</h1>
                </a>
            </div>
            <div class="hidden md:flex md:items-center md:space-x-8">
                <nav class="flex space-x-10 justify-center items-center">
                    <a href="/" class="text-blue6a font-bold hover:text-pinkee">Beranda</a>
                    <a href="" class="text-blue6a font-bold hover:text-pinkee">Tentang Kami</a>
                    <a href="" class="text-blue6a font-bold hover:text-pinkee">Aplikasi</a>
                    <a href="" class="text-blue6a font-bold hover:text-pinkee">Artikel</a>
                    <a href="" class="text-blue6a font-bold hover:text-pinkee">Ulasan</a>
                    <a href="/login" class="bg-blue6a text-white hover:bg-pinkee font-bold rounded-full px-4 py-2">Pembelajaran</a>
                </nav>
                <a href="/login" class="h-10 w-10 flex justify-center items-center">
                    <button id="menu-btn" class="h-full w-10 p-2 border-2 border-blue6a rounded-full bg-blue6a hover:bg-white hover:text-white focus:outline-none">
                        <svg class="menu-icon w-full h-6" width="38" height="36" viewBox="0 0 38 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.9834 28.7092C31.5848 28.5902 31.9407 27.9603 31.6545 27.4182C30.7408 25.6872 29.2002 24.1658 27.1885 23.0262C24.7736 21.6582 21.8148 20.9167 18.7709 20.9167C15.727 20.9167 12.7681 21.6582 10.3532 23.0262C8.34152 24.1658 6.80095 25.6871 5.88718 27.4182C5.60103 27.9603 5.95693 28.5902 6.55825 28.7092L11.0086 29.5895C16.1338 30.6034 21.4079 30.6034 26.5331 29.5895L30.9834 28.7092Z" fill="white"/>
                            <ellipse cx="18.7713" cy="12.1667" rx="7.68193" ry="7.29167" fill="white"/>
                        </svg>                        
                    </button>
                </a>
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