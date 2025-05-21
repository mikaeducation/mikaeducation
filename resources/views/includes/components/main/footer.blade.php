<footer class="w-full h-full flex flex-col items-center justify-center bg-blue31 text-white">
    <div class="w-3/4 h-full pb-14 pt-16 flex flex-wrap lg:flex-nowrap text-base font-light justify-between space-y-10 md:space-y-0">
        <div class="w-full h-full lg:w-2/5 space-y-3">
            <a href="/" class="flex w-full h-14 sm:h-20 items-center space-x-2">
                <div class="mr-1 h-full sm:w-20 w-14">
                    <img src="{{ asset('images/logo-1.png') }}" alt="Logo" class="h-full w-full">
                </div>
                <h1 class="font-bold text-2xl sm:text-4xl text-white whitespace-pre-line leading-none">MIKA 
                    EDUCATION </h1>
            </a>
            <p class="w-full md:w-5/6 lg:w-5/6 pt-2 text-justify leading-6 tracking-wider">MIKA Education didanai oleh Pemerintah Australia, Departemen Luar Negeri & Perdagangan Australia melalui Konsulat Jenderal Australia di Surabaya. Pendanaan tersebut diperoleh MIKA melalui Direct Aid Program Australian.</p>
            <img src="{{ asset('images/aid.png') }}" alt="Australian Direct Aid Program" class="h-14">
        </div>
        <div class="w-full md:w-1/2 lg:w-2/6">
            <div class="w-full h-60 md:w-3/4 lg:w-3/4 md:h-1/2 lg:h-1/2">
                <iframe src="https://maps.google.com/maps?q=PQMM%2BJF8%2C+Mulyorejo%2C+Kec.+Mulyorejo%2C+Surabaya%2C+Jawa+Timur+60115&t=k&z=18&ie=UTF8&iwloc=&output=embed" 
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0" class="w-full h-full">
                </iframe>
            </div>
            <p class="w-full whitespace-pre-line font-light tracking-wider pt-4"><span class="font-medium">Alamat</span>: Jl. Dr. Ir. H. Soekarno, Mulyorejo,
                Kec. Mulyorejo, Surabaya, Jawa Timur 60115
                <span class="font-medium">Email</span>: mikaunivairlangga@gmail.com
                <span class="font-medium">Whatsapp</span>: +62 123-456-789
            </p>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/5 md:pl-16 lg:pl-0 flex flex-col font-medium tracking-wider space-y-3">
            <a href="">Beranda</a>
            <a href="">Informasi Lainnya</a>
            <a href="">Tentang Kami</a>
            <a href="">Pembelajaran</a>
            <a href="">Profil</a>
        </div>
    </div>
    <div class="w-full bg-blue20 font-light text-xs md:text-sm lg:text-base flex items-center justify-center">
        <div class="py-5 w-3/4 flex items-center justify-center space-x-3 md:space-x-7 lg:space-x-14">
            <p>© 2025 Media Visual Komunikasi Anak for Mikaeducation. All Rights Reserved.</p>
            <a href="#" class="showTermsDialog underline italic underline-offset-1">Terms and Conditions</a>
        </div>
    </div>
</footer>

@include('includes.components.main.dialog.terms-condition')
