<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quiz 1-6 | Mika Education</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="show-asessment-dialog" content="true">
    <meta name="progress-id" content="{{ session('progress_id') }}">
    <meta name="user-id" content="{{ Auth::id() }}">
    @vite('public/assets/css/style.css')
    @vite('resources/js/quiz/quiz1/quiz-two-group-type.js')
    @vite('resources/js/quiz/quiz1/submit-quiz1.js')
    @vite('resources/js/quiz/quiz1/refresh-quiz1.js')
</head>

<body class="font-futura w-full min-h-screen flex flex-col relative text-blue31">
    @include('includes.components.elearning.course.header')

    <section class="w-full flex flex-grow items-start justify-start">
        {{-- Quiz Section --}}
        <x-elearning.course.interactive.quiz>

            {{-- Quiz Title --}}
            <x-elearning.course.interactive.quiz.title>
                Cocokkanlah alat bantu visual di bawah ini agar sesuai dengan contoh
                Augmentative Alternative Communication (AAC) yang sesuai.
            </x-elearning.course.interactive.quiz.title>

            {{-- Interactive Section --}}
            <div class="js-scene-card w-full flex flex-1">

                {{-- Placeholder Section --}}
                <div class="p-6 w-full flex flex-col items-center">
                    <!-- Low Tech -->
                    <div class="js-input-card py-3 w-full min-h-64 flex flex-col flex-grow items-center justify-evenly">
                        <h2 class="p-1 text-xl text-blue31 font-bold">Low Tech</h2>
                        <!-- Input Box -->
                        <div id="low" data-accepting="true"
                            class="js-input p-3 w-full flex flex-grow flex-wrap gap-5 justify-center items-center rounded border-2 border-blue31">
                            ____
                        </div>
                    </div>
                    <!-- High Tech -->
                    <div class="js-input-card py-3 w-full min-h-64 flex flex-col flex-grow items-center justify-evenly">
                        <h2 class="p-1 text-xl text-blue31 font-bold">High Tech</h2>

                        <!-- Input Box -->
                        <div id="high" data-accepting="true"
                            class="js-input p-3 w-full flex flex-grow flex-wrap gap-5 justify-center items-center rounded border-2 border-blue31">
                            ____
                        </div>
                    </div>
                </div>

                {{-- Answer Section --}}
                {{-- TODO: masukan jawaban ke database --}}
                @php
                    $answers = [
                        'Kartu Visual',
                        'PECS',
                        'Papan komunikasi / ALS',
                        'Kartu Emosi',
                        'Ipad (Compass, Lamb words for life)',
                        'Liberator Rugged 7, ProloQuo2Go',
                        'MIKA 1.0',
                    ];
                @endphp
                <x-elearning.course.interactive.quiz.answer-box :answers="$answers">
                </x-elearning.course.interactive.quiz.answer-box>
            </div>

            {{-- Button --}}
            <x-elearning.course.interactive.quiz.button :module-id="$module_id" :quiz-id="$quiz_id">
            </x-elearning.course.interactive.quiz.button>

        </x-elearning.course.interactive.quiz>
        @include('includes.components.elearning.course.section')
    </section>

    @include('includes.components.elearning.course.footer')
</body>

@include('includes.components.elearning.course.dialog.modal-asessment')

</html>
