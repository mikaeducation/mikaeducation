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
            <div id="left" class="w-3/4 flex-1 max-h-[100vh] lg:max-h-[84vh] flex flex-col overflow-y-auto scrollbar scrollbar-thumb scrollbar-thumb-rounded scrollbar-thumb-blue31 scrollbar-track-gray-100">
                <div class="w-full h-full flex flex-col pl-12 md:pr-12 mt-10">
                    <div class="h-full w-full space-y-8 pb-4 lg:pb-8 text-lg">
                        <div class="space-y-4 sm:border-2 sm:border-bluee3 rounded">
                            <div class="w-full h-fit flex p-2 bg-bluee3 text-justify">
                                <p><span class="font-bold">Bagian 3 -</span> Kepuasan penggunaan MIKA Education sebagai sumber belajar
                                    <br>Intruksi: <span class="font-medium"> Dari skala 1-5, sejauh mana kalimat-kalimat di bawah ini sesuai menggambarkan keyakinan Anda menggunakan MIKA 1.0 untuk mendampingi anak autistik belajar komunikasi? </span>
                                </p>
                            </div>
                            <div class="w-full space-y-4 sm:pl-2 pb-2 ">
                                <div class="w-full text-blue31">
                                    <form action="/page9_3_2" method="" class="sm:pr-4 text-justify">
                                        @csrf
                                        <div class="space-y-2">
                                            <p class="font-medium text-xl">A. Akses dan Kemudahan Belajar</p>
                                            <!-- Pertanyaan 1 -->
                                            <div>
                                                <div class="mb-2 flex gap-2">
                                                    <p class="asessmen1-num font-medium">1.</p>
                                                    <p class="asessmen1-quest">Registrasi akun</p>
                                                </div>
                                                @foreach([
                                                    'Sama sekali tidak puas (1)',
                                                    'Tidak terlalu puas (2)',
                                                    'Biasa saja (3)',
                                                    'Cukup puas (4)',
                                                    'Sangat puas (5)'
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
                                                    <p class="asessmen1-quest">Pemahaman mengenai hak dan kewajiban saya sebagai pembelajar pengguna MIKA education</p>
                                                </div>
                                                @foreach([
                                                    'Sama sekali tidak puas (1)',
                                                    'Tidak terlalu puas (2)',
                                                    'Biasa saja (3)',
                                                    'Cukup puas (4)',
                                                    'Sangat puas (5)'
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
                                                    <p class="asessmen1-quest">Kemudahan akses sumber belajar</p>
                                                </div>
                                                @foreach([
                                                    'Sama sekali tidak puas (1)',
                                                    'Tidak terlalu puas (2)',
                                                    'Biasa saja (3)',
                                                    'Cukup puas (4)',
                                                    'Sangat puas (5)'
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
                                                    <p class="asessmen1-quest">Kemudahan penggunaan fungsi-fungsi di website</p>
                                                </div>
                                                @foreach([
                                                    'Sama sekali tidak puas (1)',
                                                    'Tidak terlalu puas (2)',
                                                    'Biasa saja (3)',
                                                    'Cukup puas (4)',
                                                    'Sangat puas (5)'
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
                                                    <p class="asessmen1-quest">Kemudahan merespon/mengisi tugas-tugas</p>
                                                </div>
                                                @foreach([
                                                    'Sama sekali tidak puas (1)',
                                                    'Tidak terlalu puas (2)',
                                                    'Biasa saja (3)',
                                                    'Cukup puas (4)',
                                                    'Sangat puas (5)'
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
                                        </div>


                                        <div class="space-y-4 mt-8">
                                            <p class="font-medium text-xl">B. Materi belajar MIKA education</p>
                                            <!-- Pertanyaan 6 -->
                                            <div>
                                                <div class="mb-2 flex gap-2">
                                                    <p class="asessmen1-num font-medium">6.</p>
                                                    <p class="asessmen1-quest">Materi yang diberikan sangat jelas dan mudah dimengerti</p>
                                                </div>
                                                @foreach([
                                                    'Sama sekali tidak puas (1)',
                                                    'Tidak terlalu puas (2)',
                                                    'Biasa saja (3)',
                                                    'Cukup puas (4)',
                                                    'Sangat puas (5)'
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
                                                    <p class="asessmen1-quest">Contoh-contoh yang diberikan sangat relevan untuk saya terapkan pada pendidikan/terapi yang saya lakukan bersama anak</p>
                                                </div>
                                                @foreach([
                                                    'Sama sekali tidak puas (1)',
                                                    'Tidak terlalu puas (2)',
                                                    'Biasa saja (3)',
                                                    'Cukup puas (4)',
                                                    'Sangat puas (5)'
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
                                                    <p class="asessmen1-quest">Bacaan yang diberikan relevan bagi saya untuk terus mempelajari autisme, TEACCH dan MIKA 1.0 sebagai alat bantu belajar komunikasi pada individu autistik</p>
                                                </div>
                                                @foreach([
                                                    'Sama sekali tidak puas (1)',
                                                    'Tidak terlalu puas (2)',
                                                    'Biasa saja (3)',
                                                    'Cukup puas (4)',
                                                    'Sangat puas (5)'
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
                                                    <p class="asessmen1-quest">Asesmen yang dilakukan di MIKA education berguna dalam memberikan informasi/umpan balik mengenai kemampuan saya memahami MIKA 1.0</p>
                                                </div>
                                                @foreach([
                                                    'Sama sekali tidak puas (1)',
                                                    'Tidak terlalu puas (2)',
                                                    'Biasa saja (3)',
                                                    'Cukup puas (4)',
                                                    'Sangat puas (5)'
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
                                                    <p class="asessmen1-quest">Saya mampu melakukan komunikasi dan diskusi dengan rekan-rekan belajar lainnya di MIKA education, dan hal ini bermanfaat bagi kelanjutan belajar saya ke depan</p>
                                                </div>
                                                @foreach([
                                                    'Sama sekali tidak puas (1)',
                                                    'Tidak terlalu puas (2)',
                                                    'Biasa saja (3)',
                                                    'Cukup puas (4)',
                                                    'Sangat puas (5)'
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
                                        </div>


                                        <div class="space-y-4 mt-8">
                                            <p class="font-medium text-xl">C. Dampak pada kemampuan administrasi MIKA 1.0</p>
                                            <!-- Pertanyaan 11 -->
                                            <div>
                                                <div class="mb-2 flex gap-2">
                                                    <p class="asessmen1-num font-medium">11.</p>
                                                    <p class="asessmen1-quest">Saya mudah melakukan registrasi terapis dan anak</p>
                                                </div>
                                                @foreach([
                                                    'Sama sekali tidak puas (1)',
                                                    'Tidak terlalu puas (2)',
                                                    'Biasa saja (3)',
                                                    'Cukup puas (4)',
                                                    'Sangat puas (5)'
                                                ] as $index => $option)
                                                <div class="flex items-start justify-start space-x-3 mb-1">
                                                    <input 
                                                        type="radio" 
                                                        name="question_11" 
                                                        id="option_11_{{ $index }}" 
                                                        value="{{ $index }}" 
                                                        class="mt-2 ml-6">
                                                    <label for="option_11_{{ $index }}" class="block cursor-pointer">
                                                        {{ $option }}
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                            <!-- Pertanyaan 12 -->
                                            <div>
                                                <div class="mb-2 flex gap-2">
                                                    <p class="asessmen1-num font-medium">12.</p>
                                                    <p class="asessmen1-quest">Saya mudah memahami fungsi-fungsi yang ada di MIKA 1.0</p>
                                                </div>
                                                @foreach([
                                                    'Sama sekali tidak puas (1)',
                                                    'Tidak terlalu puas (2)',
                                                    'Biasa saja (3)',
                                                    'Cukup puas (4)',
                                                    'Sangat puas (5)'
                                                ] as $index => $option)
                                                <div class="flex items-start justify-start space-x-3 mb-1">
                                                    <input 
                                                        type="radio" 
                                                        name="question_12" 
                                                        id="option_12_{{ $index }}" 
                                                        value="{{ $index }}" 
                                                        class="mt-2 ml-6">
                                                    <label for="option_12_{{ $index }}" class="block cursor-pointer">
                                                        {{ $option }}
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                            <!-- Pertanyaan 13 -->
                                            <div>
                                                <div class="mb-2 flex gap-2">
                                                    <p class="asessmen1-num font-medium">13.</p>
                                                    <p class="asessmen1-quest">Saya memahami tahapan dan administrasi belajar komunikasi I hingga IV di MIKA 1.0</p>
                                                </div>
                                                @foreach([
                                                    'Sama sekali tidak puas (1)',
                                                    'Tidak terlalu puas (2)',
                                                    'Biasa saja (3)',
                                                    'Cukup puas (4)',
                                                    'Sangat puas (5)'
                                                ] as $index => $option)
                                                <div class="flex items-start justify-start space-x-3 mb-1">
                                                    <input 
                                                        type="radio" 
                                                        name="question_13" 
                                                        id="option_13_{{ $index }}" 
                                                        value="{{ $index }}" 
                                                        class="mt-2 ml-6">
                                                    <label for="option_13_{{ $index }}" class="block cursor-pointer">
                                                        {{ $option }}
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                            <!-- Pertanyaan 14 -->
                                            <div>
                                                <div class="mb-2 flex gap-2">
                                                    <p class="asessmen1-num font-medium">14.</p>
                                                    <p class="asessmen1-quest">Saya bisa melakukan skoring dan menyimpan data progress anak</p>
                                                </div>
                                                @foreach([
                                                    'Sama sekali tidak puas (1)',
                                                    'Tidak terlalu puas (2)',
                                                    'Biasa saja (3)',
                                                    'Cukup puas (4)',
                                                    'Sangat puas (5)'
                                                ] as $index => $option)
                                                <div class="flex items-start justify-start space-x-3 mb-1">
                                                    <input 
                                                        type="radio" 
                                                        name="question_14" 
                                                        id="option_14_{{ $index }}" 
                                                        value="{{ $index }}" 
                                                        class="mt-2 ml-6">
                                                    <label for="option_14_{{ $index }}" class="block cursor-pointer">
                                                        {{ $option }}
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                            <!-- Pertanyaan 15 -->
                                            <div>
                                                <div class="mb-2 flex gap-2">
                                                    <p class="asessmen1-num font-medium">15.</p>
                                                    <p class="asessmen1-quest">Saya bisa mengakses kembali data yang tersimpan di MIKA 1.0 dengan mudah</p>
                                                </div>
                                                @foreach([
                                                    'Sama sekali tidak puas (1)',
                                                    'Tidak terlalu puas (2)',
                                                    'Biasa saja (3)',
                                                    'Cukup puas (4)',
                                                    'Sangat puas (5)'
                                                ] as $index => $option)
                                                <div class="flex items-start justify-start space-x-3 mb-1">
                                                    <input 
                                                        type="radio" 
                                                        name="question_15" 
                                                        id="option_15_{{ $index }}" 
                                                        value="{{ $index }}" 
                                                        class="mt-2 ml-6">
                                                    <label for="option_15_{{ $index }}" class="block cursor-pointer">
                                                        {{ $option }}
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        
                                        <!-- Tambahkan pertanyaan lainnya di sini dengan format serupa -->                                        
                                        <div class="w-full pt-4 pb-2 px-4 flex justify-end items-center">
                                            <button
                                            type="submit" 
                                            class="w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 p-2 rounded font-medium flex justify-center items-center text-white bg-blue31">
                                            Kumpulkan
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
</html>
