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
    <body class="font-futura w-full min-h-screen flex flex-col relative">
    @include('includes.components.elearning.course.header')
    
    <section class="w-full flex-1 flex flex-col items-center justify-center text-blue31">
        <div class="w-full flex-grow flex items-start justify-start">
            {{-- Left Content --}}
            <div id="left" class="w-3/4 flex-1 max-h-[100vh] flex flex-col overflow-y-auto scrollbar scrollbar-thumb scrollbar-thumb-rounded scrollbar-thumb-white scrollbar-track-white">
                <div class="w-full h-full flex flex-col pl-12 md:pr-12 mt-10">
                    <div class="h-full w-full space-y-8 pb-8 text-lg">
                        <h3 class="text-justify"><span class="text-xl font-medium">Penilaian Pra-Belajar:</span> Seputar Autisme, Metode pendekatan TEACCH, dan Aplikasi Belajar MIKA 1.0</h3>
                        <div class="flex flex-col md:flex-row justify-between w-full h-max gap-10 md:gap-0 px-8 py-8 bg-bluee3 rounded text-lg font-medium">
                            <div class="w-full space-y-4">
                                <h5 class="text-xl">Detail Penilaian</h5>
                                <div class="w-full flex gap-12 md:gap-12">
                                    <div class="">
                                        <p>Batas Waktu</p>
                                        <time datetime="PT25M" class="text-base font-normal">Tidak terbatas</time>
                                    </div>
                                    <div class="">
                                        <p>Kesempatan</p>
                                        <time datetime="PT25M" class="text-base font-normal">Tidak Terbatas</time>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex items-end justify-start md:justify-end ">
                                <a href="javascript:void(0)" id="startButtonNow" class="text-white py-2 bg-blue31 text-base md:text-lg rounded w-full md:w-3/4 lg:w-2/3 flex justify-center items-center text-center transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-105">
                                    Mulai Sekarang
                                </a>
                            </div>
                        </div>
                        <div class="w-full border-4 px-8 py-5 space-y-5 text-lg border-bluee3">
                            <h5 class="text-xl font-medium">Nilai Anda</h5>
                            <p class="text-justify"> Anda belum menyelesaikan penilaian ini. Silahkan selesaikan terlebih dahulu untuk mengetahui skor tertinggi Anda.
                                Dibutuhkan <span class=" font-medium">nilai 80% atau lebih tinggi pada Bagian 1</span> untuk lulus.
                                <br><span class="text-xl font-medium">_ _</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Right Content --}}
            @include('includes.components.elearning.course.section')
        </div>
    </section>

    @include('includes.components.elearning.course.footer')

    <div id="modalDialogStart_Asessmen1" class="relative z-50 hidden w-3/4 md:w-0" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed w-full inset-0 bg-black bg-opacity-55 transition-opacity" aria-hidden="true"></div>            
        <div class="fixed inset-0 z-10 w-full md:w-screen overflow-y-auto">
            <div class="flex min-h-screen items-center justify-center p-4 text-center sm:p-0">
                <div class="w-full relative transform overflow-hidden rounded bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div class="flex flex-col items-center justify-center">
                            <div class="mx-auto w-full flex size-12 shrink-0 items-center justify-center rounded-full sm:mx-0 sm:size-10">
                                <svg class="size-10 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                </svg>
                            </div>
                            <div class="text-center pb-4">
                                <h3 class="text-3xl font-semibold text-blue31" id="modal-title">Mulai Penilaian?</h3>
                                <div class="mt-4">
                                    <p class="text-medium text-blue31">Untuk dapat melanjutkan proses pembelajaran, Anda diharuskan untuk menjawab beberapa pertanyaan berikut sebagai penilaian dari proses pembelajaran yang akan Anda lakukan.
                                        <br><br>Jika memerlukan bantuan lebih lanjut, <a href="https://wa.me/082156226440 " class="relative text-blue31 font-medium before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full"> hubungi tim dukungan kami disini.</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-bluee3 w-full bg-opacity-40 px-4 py-3 flex justify-center space-x-4 sm:px-6 text-lg font-medium">
                        <button id="btnBack" type="button" class="inline-flex w-1/3 justify-center rounded border-2 border-blue31 px-3 py-2 text-blue31 shadow-sm transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                            Kembali
                        </button>
                        <button id="btnStartLearning" type="button" class="inline-flex w-1/3 justify-center rounded bg-blue31 hover:border-2 hover:border-blue31 px-3 py-2 text-white transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                            Mulai
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>


<script>
</script>
    

