<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quiz 1-3 | Mika Education</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="show-asessment-dialog" content="true">
    <meta name="progress-id" content="{{ session('progress_id') }}">
    <meta name="user-id" content="{{ Auth::id() }}">
    @vite('public/assets/css/style.css')
    @vite('resources/js/quiz/quiz1/quiz1-3.js')
    @vite('resources/js/quiz/quiz1/submit-quiz1.js')
    @vite('resources/js/quiz/quiz1/refresh-quiz1.js')
</head>

<body class="font-futura w-full min-h-screen flex flex-col relative text-blue31">
    @include('includes.components.elearning.course.header')

    <section class="w-full flex flex-grow items-start justify-start">
        {{-- Quiz Section --}}
        <div id="js-scene" class="quiz-section h-[85vh] flex flex-col flex-grow">
            <div class="w-full flex flex-col p-2">
                <p class="p-2">Cocokkanlah gejala-gejala di bawah ini agar sesuai dengan contoh Komunikasi Ekspresif.
                </p>
            </div>
            <div class="js-scene-card flex flex-1">
                <div class="w-full flex justify-center">

                    <!-- Title -->
                    <div id="question" class="m-8 p-4 flex bg-blue31 rounded items-center">
                        <h2 class="-rotate-90 text-xl text-white font-bold">Komunikasi Ekspresif</h2>
                    </div>

                    <!-- Input Box -->
                    <div class="flex flex-grow flex-col items-start justify-evenly">
                        @for ($i = 0; $i < 8; $i++)
                            <div data-accepting="true"
                                class="js-input my-2 p-2 w-1/2 flex flex-1 flex-col rounded items-center justify-center border border-blue31 text-sm text-blue31 text-center">
                                ____
                            </div>
                        @endfor
                    </div>
                </div>
                {{-- Answer Section --}}
                {{-- TODO: masukan jawaban ke database --}}
                @php
                    $answers = [
                        'Membuat suara',
                        'Menggerakkan jari dan tangan untuk memungut',
                        'Menggunakan kata tunggal',
                        'Menggunakan kata yang terdiri dari 2-3 kata',
                        'Berbicara dalam kalimat',
                        'Echolalia (mengulang kata atau kalimat yang diucapkan seseorang)',
                        'Terpaku pada kualitas sensoris khas',
                        'Membuat komentar',
                        'Melakukan percakapan/dialog',
                    ];
                @endphp
                <x-elearning.course.interactive.quiz.answer-box :answers=$answers>
                </x-elearning.course.interactive.quiz.answer-box>
            </div>

            {{-- Button --}}
            <x-elearning.course.interactive.quiz.button :module-id="$module_id" :quiz-id="$quiz_id">
            </x-elearning.course.interactive.quiz.button>
        </div>
        @include('includes.components.elearning.course.section')
    </section>

    @include('includes.components.elearning.course.footer')
</body>

@include('includes.components.elearning.course.dialog.modal-asessment')

</html>
