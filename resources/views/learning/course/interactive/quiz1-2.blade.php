<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quiz 1-2 | Mika Education</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="show-asessment-dialog" content="true">
    <meta name="progress-id" content="{{ session('progress_id') }}">
    <meta name="user-id" content="{{ Auth::id() }}">
    @vite('public/assets/css/style.css')
    @vite('resources/js/quiz/quiz1/quiz1-2.js')
    @vite('resources/js/quiz/quiz1/submit-quiz1.js')
    @vite('resources/js/quiz/quiz1/refresh-quiz1.js')
</head>

<body class="font-futura w-full min-h-screen flex flex-col relative text-blue31">
    @include('includes.components.elearning.course.header')

    <section class="w-full h-[81vh] flex items-start justify-start text-blue31">
        {{-- Quiz Section --}}
        <div id="js-scene" class="quiz-section w-full h-full flex flex-col flex-grow">

            {{-- Quiz Title --}}
            <x-elearning.course.interactive.quiz.title>
                Isilah dengan karakteristik Pra-Komunikasi yang sering ditunjukkan anak autistik.
            </x-elearning.course.interactive.quiz.title>

            {{-- Interactive Section --}}
            <div
                class="js-scene-card flex flex-1 overflow-y-auto scrollbar scrollbar-thumb scrollbar-thumb-rounded scrollbar-thumb-blue31 scrollbar-track-gray-100">

                {{-- Placeholder Section --}}
                <div class="p-6 w-full flex flex-col justify-center">
                    {{-- Title --}}
                    <div id="question" class="m-8 p-4 bg-blue31 rounded">
                        <h2 class="text-center text-white font-bold">Karakteristik Pra-Komunikasi</h2>
                    </div>
                    {{-- Input Box --}}
                    @php
                        $number = ['1', '2', '3', '4'];
                    @endphp
                    <div class="flex flex-1 flex-col justify-evenly">
                        @foreach ($number as $i => $num)
                            <div class="w-1/2 my-4 flex flex-1">
                                <h1 class="m-4">{{ $num }}</h1>
                                <div data-accepting="true"
                                    class="js-input mx-2 rounded flex flex-grow flex-col items-center justify-center border border-blue31 text-sm text-blue31 text-center">
                                    ____
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Answer Section --}}
                {{-- TODO: masukan jawaban ke database --}}
                @php
                    $answers = [
                        'Kelemahan melakukan kemampuan perhatian bersama',
                        'Anak kesulitan merespon dengan tepat ketika berkomunikasi dengan menggunakan gerak tubuh/gesture',
                        'Melihat orang lain ketika berkomunikasi dengan lawan bicara (lebih banyak melihat ke arah lain)',
                        'Sulit menggunakan dan memahami gestur dalam komunikasi',
                        'Cenderung terbatas dalam komunikasi fungsional (untuk menyampaikan maksud/informasi dari diri ke orang lain)',
                        'Orang lain menganggap anak kurang sopan',
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
