<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-Learning | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @vite('public/assets/css/style.css')
        {{-- <script>document.documentElement.classList.add('js')</script> --}}
    </head>
    <body class="font-futura w-full min-h-screen flex flex-col relative">
        @include('includes.components.elearning.course.header')
    
    <section class="w-full flex-1 flex flex-col items-center justify-center text-blue31">
        <div class="w-full flex-grow flex items-start justify-start">
            {{-- Left Content --}}
            <div id="left" class="w-3/4 flex-1 max-h-[100vh] lg:max-h-[84vh] flex flex-col overflow-y-auto scrollbar scrollbar-thumb scrollbar-thumb-rounded scrollbar-thumb-blue31 scrollbar-track-gray-100">
                <div class="w-full h-full flex flex-col pl-12 md:pr-12 mt-10">
                    <div class="h-full w-full space-y-8 pb-4 lg:pb-8 text-lg">
                        <div class="space-y-4 sm:border-2 sm:border-bluee3 rounded">
                            <div class="w-full h-fit flex p-2 bg-bluee3 text-justify">
                                <p><span class="font-bold">Bagian 2 -</span> Keyakinan Penggunaan MIKA 1.0
                                    <br>Intruksi: <span class="font-medium"> Dari skala 1-5, sejauh mana kalimat-kalimat di bawah ini sesuai menggambarkan keyakinan Anda menggunakan MIKA 1.0 untuk mendampingi anak autistik belajar komunikasi? </span>
                                </p>
                            </div>
                            <div class="w-full space-y-4 sm:pl-2 pb-2 ">
                                <div class="w-full text-blue31">
                                    <form action="/page3" method="" class="space-y-4 sm:pr-4 text-justify">
                                        @csrf
                                        <!-- Pertanyaan 1 -->
                                        <div>
                                            <div class="mb-2 flex gap-2">
                                                <p class="asessmen1-num font-medium">1.</p>
                                                <p class="asessmen1-quest">Saya mampu menyusun Matriks perencanaan Anak</p>
                                            </div>
                                            @foreach([
                                                'Sama sekali merasa tidak mampu menerapkan (1)',
                                                'Tidak terlalu yakin mampu menerapkan (2)',
                                                'Dicoba saja (3)',
                                                'Cukup yakin mampu menerapkan (4)',
                                                'Sangat yakin mampu menerapkan (5)'
                                            ] as $index => $option)
                                            <div class="flex items-start justify-start space-x-3 mb-1">
                                                <input 
                                                    type="radio" 
                                                    name="question_1" 
                                                    id="option_1_{{ $index }}" 
                                                    value="{{ $index }}" 
                                                    class="mt-2 ml-6">
                                                <label for="option_1_{{ $index }}" class="block cursor-pointer">
                                                    {{ $option }}
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                        <!-- Pertanyaan 2 -->
                                        <div>
                                            <div class="mb-2 flex gap-2">
                                                <p class="asessmen1-num font-medium">2.</p>
                                                <p class="asessmen1-quest">Mengamati dan mencatat gejala klinis anak</p>
                                            </div>
                                            @foreach([
                                                'Sama sekali merasa tidak mampu menerapkan (1)',
                                                'Tidak terlalu yakin mampu menerapkan (2)',
                                                'Dicoba saja (3)',
                                                'Cukup yakin mampu menerapkan (4)',
                                                'Sangat yakin mampu menerapkan (5)'
                                            ] as $index => $option)
                                            <div class="flex items-start justify-start space-x-3 mb-1">
                                                <input 
                                                    type="radio" 
                                                    name="question_2" 
                                                    id="option_2_{{ $index }}" 
                                                    value="{{ $index }}" 
                                                    class="mt-2 ml-6">
                                                <label for="option_2_{{ $index }}" class="block cursor-pointer">
                                                    {{ $option }}
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                        <!-- Pertanyaan 3 -->
                                        <div>
                                            <div class="mb-2 flex gap-2">
                                                <p class="asessmen1-num font-medium">3.</p>
                                                <p class="asessmen1-quest">Mengamati dan mencatat karakteristik autisme anak</p>
                                            </div>
                                            @foreach([
                                                'Sama sekali merasa tidak mampu menerapkan (1)',
                                                'Tidak terlalu yakin mampu menerapkan (2)',
                                                'Dicoba saja (3)',
                                                'Cukup yakin mampu menerapkan (4)',
                                                'Sangat yakin mampu menerapkan (5)'
                                            ] as $index => $option)
                                            <div class="flex items-start justify-start space-x-3 mb-1">
                                                <input 
                                                    type="radio" 
                                                    name="question_3" 
                                                    id="option_3_{{ $index }}" 
                                                    value="{{ $index }}" 
                                                    class="mt-2 ml-6">
                                                <label for="option_3_{{ $index }}" class="block cursor-pointer">
                                                    {{ $option }}
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                        <!-- Pertanyaan 4 -->
                                        <div>
                                            <div class="mb-2 flex gap-2">
                                                <p class="asessmen1-num font-medium">4.</p>
                                                <p class="asessmen1-quest">Mengetahui kemampuan komunikasi reseptif anak saat ini</p>
                                            </div>
                                            @foreach([
                                                'Sama sekali merasa tidak mampu menerapkan (1)',
                                                'Tidak terlalu yakin mampu menerapkan (2)',
                                                'Dicoba saja (3)',
                                                'Cukup yakin mampu menerapkan (4)',
                                                'Sangat yakin mampu menerapkan (5)'
                                            ] as $index => $option)
                                            <div class="flex items-start justify-start space-x-3 mb-1">
                                                <input 
                                                    type="radio" 
                                                    name="question_4" 
                                                    id="option_4_{{ $index }}" 
                                                    value="{{ $index }}" 
                                                    class="mt-2 ml-6">
                                                <label for="option_4_{{ $index }}" class="block cursor-pointer">
                                                    {{ $option }}
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                        <!-- Pertanyaan 5 -->
                                        <div>
                                            <div class="mb-2 flex gap-2">
                                                <p class="asessmen1-num font-medium">5.</p>
                                                <p class="asessmen1-quest">Mengetahui kemampuan komunikasi ekspresif anak saat ini</p>
                                            </div>
                                            @foreach([
                                                'Sama sekali merasa tidak mampu menerapkan (1)',
                                                'Tidak terlalu yakin mampu menerapkan (2)',
                                                'Dicoba saja (3)',
                                                'Cukup yakin mampu menerapkan (4)',
                                                'Sangat yakin mampu menerapkan (5)'
                                            ] as $index => $option)
                                            <div class="flex items-start justify-start space-x-3 mb-1">
                                                <input 
                                                    type="radio" 
                                                    name="question_5" 
                                                    id="option_5_{{ $index }}" 
                                                    value="{{ $index }}" 
                                                    class="mt-2 ml-6">
                                                <label for="option_5_{{ $index }}" class="block cursor-pointer">
                                                    {{ $option }}
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                        <!-- Pertanyaan 6 -->
                                        <div>
                                            <div class="mb-2 flex gap-2">
                                                <p class="asessmen1-num font-medium">6.</p>
                                                <p class="asessmen1-quest">Merencanakan tujuan dan proses belajar komunikasi bagi anak</p>
                                            </div>
                                            @foreach([
                                                'Sama sekali merasa tidak mampu menerapkan (1)',
                                                'Tidak terlalu yakin mampu menerapkan (2)',
                                                'Dicoba saja (3)',
                                                'Cukup yakin mampu menerapkan (4)',
                                                'Sangat yakin mampu menerapkan (5)'
                                            ] as $index => $option)
                                            <div class="flex items-start justify-start space-x-3 mb-1">
                                                <input 
                                                    type="radio" 
                                                    name="question_6" 
                                                    id="option_6_{{ $index }}" 
                                                    value="{{ $index }}" 
                                                    class="mt-2 ml-6">
                                                <label for="option_6_{{ $index }}" class="block cursor-pointer">
                                                    {{ $option }}
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                        <!-- Pertanyaan 7 -->
                                        <div>
                                            <div class="mb-2 flex gap-2">
                                                <p class="asessmen1-num font-medium">7.</p>
                                                <p class="asessmen1-quest">Mengevaluasi progress belajar komunikasi anak</p>
                                            </div>
                                            @foreach([
                                                'Sama sekali merasa tidak mampu menerapkan (1)',
                                                'Tidak terlalu yakin mampu menerapkan (2)',
                                                'Dicoba saja (3)',
                                                'Cukup yakin mampu menerapkan (4)',
                                                'Sangat yakin mampu menerapkan (5)'
                                            ] as $index => $option)
                                            <div class="flex items-start justify-start space-x-3 mb-1">
                                                <input 
                                                    type="radio" 
                                                    name="question_7" 
                                                    id="option_7_{{ $index }}" 
                                                    value="{{ $index }}" 
                                                    class="mt-2 ml-6">
                                                <label for="option_7_{{ $index }}" class="block cursor-pointer">
                                                    {{ $option }}
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                        <!-- Pertanyaan 8 -->
                                        <div>
                                            <div class="mb-2 flex gap-2">
                                                <p class="asessmen1-num font-medium">8.</p>
                                                <p class="asessmen1-quest">Mengetahui kapan menghilangkan prompt agar anak lebih mampu berkomunikasi mandiri</p>
                                            </div>
                                            @foreach([
                                                'Sama sekali merasa tidak mampu menerapkan (1)',
                                                'Tidak terlalu yakin mampu menerapkan (2)',
                                                'Dicoba saja (3)',
                                                'Cukup yakin mampu menerapkan (4)',
                                                'Sangat yakin mampu menerapkan (5)'
                                            ] as $index => $option)
                                            <div class="flex items-start justify-start space-x-3 mb-1">
                                                <input 
                                                    type="radio" 
                                                    name="question_8" 
                                                    id="option_8_{{ $index }}" 
                                                    value="{{ $index }}" 
                                                    class="mt-2 ml-6">
                                                <label for="option_8_{{ $index }}" class="block cursor-pointer">
                                                    {{ $option }}
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                        <!-- Pertanyaan 9 -->
                                        <div>
                                            <div class="mb-2 flex gap-2">
                                                <p class="asessmen1-num font-medium">9.</p>
                                                <p class="asessmen1-quest">Mengetahui melakukan skoring MIKA 1.0</p>
                                            </div>
                                            @foreach([
                                                'Sama sekali merasa tidak mampu menerapkan (1)',
                                                'Tidak terlalu yakin mampu menerapkan (2)',
                                                'Dicoba saja (3)',
                                                'Cukup yakin mampu menerapkan (4)',
                                                'Sangat yakin mampu menerapkan (5)'
                                            ] as $index => $option)
                                            <div class="flex items-start justify-start space-x-3 mb-1">
                                                <input 
                                                    type="radio" 
                                                    name="question_9" 
                                                    id="option_9_{{ $index }}" 
                                                    value="{{ $index }}" 
                                                    class="mt-2 ml-6">
                                                <label for="option_9_{{ $index }}" class="block cursor-pointer">
                                                    {{ $option }}
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                        <!-- Pertanyaan 10 -->
                                        <div>
                                            <div class="mb-2 flex gap-2">
                                                <p class="asessmen1-num font-medium">10.</p>
                                                <p class="asessmen1-quest">Mengidentifikasi dukungan dan bantuan yang dibutuhkan dalam proses terapi/ pendidikan anak</p>
                                            </div>
                                            @foreach([
                                                'Sama sekali merasa tidak mampu menerapkan (1)',
                                                'Tidak terlalu yakin mampu menerapkan (2)',
                                                'Dicoba saja (3)',
                                                'Cukup yakin mampu menerapkan (4)',
                                                'Sangat yakin mampu menerapkan (5)'
                                            ] as $index => $option)
                                            <div class="flex items-start justify-start space-x-3 mb-1">
                                                <input 
                                                    type="radio" 
                                                    name="question_10" 
                                                    id="option_10_{{ $index }}" 
                                                    value="{{ $index }}" 
                                                    class="mt-2 ml-6">
                                                <label for="option_10_{{ $index }}" class="block cursor-pointer">
                                                    {{ $option }}
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                        
                                        <div class="w-full pt-4 pb-2 px-4 flex justify-end items-center">
                                            <button
                                            id="submit-btn-Asessmen1finish"
                                            type="submit" 
                                            class="w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 p-2 rounded font-medium flex justify-center items-center text-white bg-blue31">
                                            Lanjutkan
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Right Content --}}
            @include('includes.components.elearning.course.section')
        </div>
    </section>

    @include('includes.components.elearning.course.footer')
    </body>

    <div id="modalDialogBack_Asessmen1" class="relative z-50 hidden w-3/4 md:w-0" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed w-full inset-0 bg-black bg-opacity-55 transition-opacity" aria-hidden="true"></div>
        <div class="fixed inset-0 z-10 w-full md:w-screen overflow-y-auto">
            <div class="flex min-h-screen items-center justify-center p-4 text-center sm:p-0">
                <div class="w-full relative transform overflow-hidden rounded bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div class="flex flex-col items-center justify-center space-y-4">
                            <div class="mx-auto w-full flex size-12 shrink-0 items-center justify-center rounded-full sm:mx-0 sm:size-10">
                                <svg class="size-10 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                </svg>
                            </div>
                            <div class="text-center pb-4 space-y-4 text-blue31">
                                <h3 class="text-3xl font-semibold ">Keluar dari Evaluasi?</h3>
                                <div class="mt-2">
                                    <p class="">Apakah Anda yakin ingin keluar dari proses pengisian Evaluasi dan kembali ke halaman sebelumnya? <span class="font-medium">Perubahan atau progres Anda saat ini mungkin tidak disimpan.</span></p>
                                    <br> Jika memerlukan bantuan lebih lanjut,<a href="https://wa.me/082156226440 " class="relative text-blue31 font-medium before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full"> hubungi tim dukungan kami disini.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-bluee3 w-full bg-opacity-40 p-4 flex justify-center space-x-4 sm:px-6 text-lg font-medium">
                        <button id="btnCancelBack" type="button" class="inline-flex w-1/3 justify-center rounded border-2 border-blue31 px-3 py-2 text-blue31 shadow-sm transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                            Lanjut Belajar
                        </button>
                        <button id="btnConfirmBack" type="button" class="inline-flex w-1/3 justify-center rounded bg-blue31 hover:border-2 hover:border-blue31 px-3 py-2 text-white transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                            Keluar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modalDialog_Asessmen1_Finish" class="relative z-50 hidden w-3/4 md:w-0" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed w-full inset-0 bg-black bg-opacity-55 transition-opacity" aria-hidden="true"></div>
        <div class="fixed inset-0 z-10 w-full md:w-screen overflow-y-auto">
            <div class="flex min-h-screen items-center justify-center p-4 text-center sm:p-0">
                <div class="w-full relative transform overflow-hidden rounded bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div class="flex flex-col items-center justify-center space-y-4">
                            <div class="mx-auto w-full flex size-12 shrink-0 items-center justify-center rounded-full sm:mx-0 sm:size-10">
                                <svg class="size-10 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                </svg>
                            </div>
                            <div class="text-center pb-4 space-y-4 text-blue31">
                                <h3 class="text-3xl font-semibold ">Kumpulkan Evaluasi??</h3>
                                <p class="mt-2">
                                    Jika telah yakin dengan jawaban yang diberikan, Anda dapat mengumpulkan dan melanjutkan untuk ke bagian pembelajaran selanjutnya.
                                    <br><br> Jika memerlukan bantuan lebih lanjut,<a href="https://wa.me/082156226440 " class="relative text-blue31 font-medium before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full"> hubungi tim dukungan kami disini.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-bluee3 w-full bg-opacity-40 px-4 py-3 flex justify-center space-x-4 sm:px-6 text-lg font-medium">
                        <button id="btnSubmitBack" type="button" class="w-1/3 justify-center rounded border-2 border-blue31 px-3 py-2 text-blue31 hover:-translate-y-1 hover:scale-110">Kembali</button>
                        <button id="btnSubmitConfirm" type="button" class="w-1/3 justify-center rounded bg-blue31 px-3 py-2 text-white hover:-translate-y-1 hover:scale-110">Kumpulkan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>

    <script>
        

    </script>

