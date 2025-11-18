<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quiz 1-4 | Mika Education</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="show-asessment-dialog" content="true">
    <meta name="progress-id" content="{{ session('progress_id') }}">
    <meta name="user-id" content="{{ Auth::id() }}">
    <meta name="quiz-is-finished" content="{{ $is_finished ? 'true' : 'false' }}">
    @vite('public/assets/css/style.css')
    @vite('resources/js/quiz/quiz1/quiz-group-type.js')
    @vite('resources/js/quiz/quiz1/submit-quiz1.js')
</head>

<body class="font-futura w-full min-h-screen flex flex-col relative text-blue31">
    @include('includes.components.elearning.course.header')

    <section class="w-full flex-1 flex text-blue31">
        {{-- Quiz Section --}}
        <x-elearning.course.interactive.quiz.quiz>

            {{-- Quiz Title --}}
            <x-elearning.course.interactive.quiz.title>
                Cocokkanlah gejala-gejala di bawah ini agar sesuai dengan contoh Komunikasi Reseptif.
            </x-elearning.course.interactive.quiz.title>

            {{-- Interactive Section --}}
            <div class="js-scene-card flex flex-1">

                {{-- Placeholder Section --}}
                <div class="w-full flex justify-center">
                    <!-- Title -->
                    <div id="question" class="m-8 w-24 flex bg-blue31 items-center justify-center rounded">
                        <h2 class="[writing-mode:sideways-lr] text-xl text-white font-bold">Komunikasi Reseptif</h2>
                    </div>

                    <!-- Input Box -->
                    <div class="w-1/3 flex flex-col items-start justify-evenly">
                        @for ($i = 0; $i < 3; $i++)
                            <div id=""
                                class="js-input my-2 p-2 w-full h-1/6 flex flex-col-reverse rounded items-center justify-center border border-blue31 text-sm text-blue31 text-center">
                                ____ {{-- Placeholder for label --}}
                            </div>
                        @endfor
                    </div>
                </div>

                {{-- Answer Section --}}
                {{-- TODO: masukan jawaban ke database --}}
                @php
                    $answers = [
                        'Memahami pertanyaan yang baru didengarnya',
                        'Mengajukan pertanyaan',
                        'Terpaku pada kualitas sensoris khas',
                        'Membuat komentar',
                        'Memahami suatu konsep baru',
                        'Memahami konsep abstrak seperti peribahasa, lawan kata, padanan kata dan majas',
                    ];
                @endphp
                <x-elearning.course.interactive.quiz.answer-box :answers=$answers>
                </x-elearning.course.interactive.quiz.answer-box>
            </div>

            {{-- Button --}}
            <x-elearning.course.interactive.quiz.button 
                :module-id="$module_id" 
                :quiz-id="$quiz_id"
                :high-score-history="$high_score_history"
                :is-finished="$is_finished"
                :quiz-result="$quiz_result"
                :show-latest-score="$show_latest_score"
            > 
            </x-elearning.course.interactive.quiz.button>

        </x-elearning.course.interactive.quiz>
        @include('includes.components.elearning.course.section')
    </section>

    @include('includes.components.elearning.course.footer')
</body>

@include('includes.components.elearning.course.dialog.modal-asessment')

</html>
