<div class="w-full h-max text-blue31">
    <div class="w-full flex items-center justify-center flex-col">
        <div class="w-full h-max gradient-main flex flex-col lg:flex-row items-center justify-center glow-effect">
            <div class="w-full lg:w-3/4 h-full flex flex-col lg:flex-row items-center lg:items-end justify-center text-white text-lg p-4 lg:p-0">
                <div class="w-full lg:w-1/2 pt-6 lg:pt-10 h-full flex flex-col gap-8 lg:gap-14">
                    <div class="h-auto lg:h-2/3 py-4 flex flex-col items-start justify-center space-y-4">
                        <h1 class="text-2xl lg:text-3xl font-bold text-center lg:text-left">MEDIA VISUAL KOMUNIKASI ANAK</h1>
                        <p class="text-justify pb-2 text-sm lg:text-base">
                            Media Visual Komunikasi Anak, atau disebut MIKA adalah media edukasi dan pembelajaran khusus penanganan Anak Berkebutuhan Khusus, terutama anak dengan Spektrum Autisme dan hendaya komunikasi. Media ini dibuat dengan pendekatan belajar visual, sehingga tercipta sebuah aplikasi bernama MIKA 1.0 dan MIKA Education yang menjadi strategi efektif serta berdaya guna dalam mendukung pendidikan inklusi di Indonesia.
                        </p>
                        <a href="" class="py-2 px-4 lg:px-6 rounded bg-bluee3 text-blue31 font-medium hover:bg-blue31 hover:text-white transition">Pelajari selengkapnya...</a>
                    </div>
                    <div class="w-full h-auto lg:h-1/3 flex">
                        <div class="w-full flex items-end justify-end">
                            <button id="section1Button" onclick="showContent('section-1')" class="h-24 w-full px-4 lg:px-6 rounded-t border-t-8 border-pinkee bg-white flex items-end">
                                <div class="flex items-end w-full px-4 pb-1 gap-6 lg:gap-8">
                                    <img src="{{ asset('images/tablet.png') }}" alt="" class="w-32 lg:w-52 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                                    <div class="w-full text-left mb-3 flex-col leading-5">
                                        <h3 class="text-blue31 text-xl lg:text-3xl font-bold">MIKA 1.0</h3>
                                        <p class="text-blue31 italic text-opacity-60 text-sm lg:text-base">aplikasi mobile</p>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 pt-6 lg:pt-10 flex flex-col justify-end items-center">
                    <div class="w-full h-auto lg:h-full flex items-start justify-center">
                        <img src="{{ asset('images/content1-section1.png') }}" alt="" class="w-3/4">
                    </div>
                    <div class="w-full h-auto lg:h-1/3 flex items-end justify-end">
                        <div class="w-full flex items-end justify-end">
                            <button id="section2Button" onclick="showContent('section-2')" class="h-24 w-full px-4 lg:px-6 rounded-t bg-bluee3 flex items-end">
                                <div class="flex items-end w-full pl-4 lg:pl-6 pb-1 gap-4">
                                    <img src="{{ asset('images/desktop.png') }}" alt="" class="w-28 lg:w-48 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                                    <div class="w-full text-left mb-3 flex-col leading-4">
                                        <h3 class="text-blue31 text-xl lg:text-3xl font-bold">MIKA EDUCATION</h3>
                                        <p class="text-blue31 italic text-opacity-60 text-sm lg:text-base">website - internet browser</p>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="section-1" class="w-full lg:w-3/4 flex items-center justify-center p-4">
            <div class="w-full flex flex-col lg:flex-row items-start justify-start gap-6 lg:gap-11">
                <div class="w-full lg:w-2/3 text-justify pl-3 lg:pl-3 lg:pr-12 border-b-2 lg:border-b-0 lg:border-r-2 border-bluee3">
                    <p>
                        MIKA 1.0 merupakan sebuah aplikasi perangkat lunak yang dikembangkan untuk mendukung pembelajaran komunikasi visual baru lebih cepat, lebih komprehensif dan sistematis. Aplikasi ini diharapkan mampu memberikan simulasi lebih baik untuk pembelajaran komunikasi pada Anak Berkebetuhan Khusus, khususnya Autism Spectrum Disorder (ASD).
                    </p>
                </div>
                <div class="w-full lg:w-1/3 text-justify">
                    <p>Aplikasi ini telah tersedia secara global. Dapat diunduh melalui Google Playstore.</p>
                    <a href="https://play.google.com/store/apps/details?id=com.vito.mika">
                        <img src="{{ asset('images/gplay.png') }}" alt="" class="w-1/3">
                    </a>
                </div>
            </div>
        </div>
        <div id="section-2" class="w-full lg:w-3/4 flex items-center justify-center p-4" style="display: none;">
            <div class="w-full flex flex-col lg:flex-row items-start justify-start gap-6 lg:gap-11">
                <div class="w-full lg:w-2/3 text-justify pl-3 lg:pl-3 lg:pr-12 border-b-2 lg:border-b-0 lg:border-r-2 border-bluee3">
                    <p>
                        MIKA Education merupakan platform belajar online untuk memahami Autisme, karakteristik belajar komunikasi pada individu autistik, strategi asesmen matriks perencanaan, metode intervensi TEACCH, serta administrasi, skoring dan interpretasi MIKA dalam mendampingi belajar komunikasi.
                    </p>
                </div>
                <div class="w-full lg:w-1/3 text-justify">
                    <p class="pb-4">Aplikasi berbasis website ini sedang dalam tahap pengembangan dan telah memiliki versi Beta yang dapat diakses sekarang juga.</p>
                    <a href="https://play.google.com/store/apps/details?id=com.vito.mika" class="bg-blue31 text-white py-2 px-6 w-full rounded hover:bg-blue6a">
                        Program Pembelajaran
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
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

    </script>
</script>