<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quiz 1-1 | Mika Education</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="show-asessment-dialog" content="true">
    <meta name="progress-id" content="{{ session('progress_id') }}">
    <meta name="user-id" content="{{ Auth::id() }}">
    <meta name="module_id" content="">
    <meta name="quiz_id" content="">
    @vite('public/assets/css/style.css')
    @vite('resources/js/quiz/quiz1/quiz-group-type.js')
    @vite('resources/js/quiz/quiz1/submit-quiz1.js')
</head>

<body class="font-futura w-full min-h-screen flex flex-col relative">
    @include('includes.components.elearning.course.header')

    <section class="w-full flex-1 flex text-blue31">
        {{-- Quiz Section --}}
        <x-elearning.course.interactive.quiz>

            {{-- Quiz Title --}}
            <x-elearning.course.interactive.quiz.title>
                Isilah lingkaran-lingkaran berikut dengan karakteristik Autisme yang perlu dipahami oleh orang yang
                bekerja dengan anak autistik.
            </x-elearning.course.interactive.quiz.title>

            {{-- Interactive Section --}}
            <div class="js-scene-card w-full flex flex-1">

                {{-- Placeholder Section --}}
                <div class="w-full grid grid-cols-3 gap-10 place-items-center">
                    {{-- Left --}}
                    <div class="row-span-3 grid-rows-subgrid justify-self-end">
                        <div id="question-1" data-accepting="true"
                            class="js-input mb-12 w-40 h-40 flex items-center justify-center border-2 border-blue31 rounded-full text-sm text-center">
                            ____
                        </div>
                        <div id="question-4" data-accepting="true"
                            class="js-input mt-12 w-40 h-40 flex items-center justify-center border-2 border-blue31 rounded-full text-sm text-center">
                            ____
                        </div>
                    </div>
                    {{-- Top Center --}}
                    <div id="question-2" data-accepting="true"
                        class="js-input w-40 h-40 flex items-center justify-center border-2 border-blue31 rounded-full text-sm text-center">
                        ____
                    </div>
                    {{-- Right --}}
                    <div class="row-span-3 grid-rows-subgrid justify-self-start">
                        <div id="question-3" data-accepting="true"
                            class="js-input mb-12 w-40 h-40 flex items-center justify-center border-2 border-blue31 rounded-full text-sm text-center">
                            ____
                        </div>
                        <div id="question-6" data-accepting="true"
                            class="js-input mt-12 w-40 h-40 flex items-center justify-center border-2 border-blue31 rounded-full text-sm text-center">
                            ____
                        </div>
                    </div>
                    {{-- Center --}}
                    <div id="question"
                        class="p-4 w-40 h-40 flex items-center justify-center bg-blue31 rounded-full shadow-md text-white font-bold text-center">
                        Karakteristik Autisme
                    </div>
                    {{-- Bottom Center --}}
                    <div id="question-2" data-accepting="true"
                        class="js-input w-40 h-40 flex items-center justify-center border-2 border-blue31 rounded-full text-sm text-center">
                        ____
                    </div>
                </div>

                {{-- Answer Section --}}
                {{-- TODO: masukan jawaban ke database --}}
                @php
                    $answers = [
                        'Motorik',
                        'Pemrosesan Sensoris',
                        'Pemrosesan Informasi',
                        'Perilaku',
                        'Komunikasi Sosial',
                        'Bermain',
                        'Agresi',
                        'Keubutuhan Makanan Khusus/Diet',
                    ];
                @endphp
                <x-elearning.course.interactive.quiz.answer-box :answers=$answers>
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
