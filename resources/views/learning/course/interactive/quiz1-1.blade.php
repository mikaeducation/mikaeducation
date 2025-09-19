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
    @vite('resources/js/quiz/quiz1/quiz1-1.js')
    @vite('resources/js/quiz/quiz1/submit-quiz1.js')
    @vite('resources/js/quiz/quiz1/refresh-quiz1.js')
</head>

<body class="font-futura w-full min-h-screen flex flex-col relative">
    @include('includes.components.elearning.course.header')

    <section class="w-full h-[81vh] flex items-start justify-start text-blue31">
        {{-- Quiz Section --}}
        <div id="js-scene-1" class="quiz-section w-full h-full flex flex-col">
            <div class="w-full h-1/10 flex flex-col">
                <p class="p-2 text-lg text-center text-balance">Isilah lingkaran-lingkaran berikut dengan karakteristik
                    Autisme yang perlu
                    dipahami oleh orang yang bekerja dengan anak autistik.</p>
            </div>
            <div
                class="js-scene-card flex flex-1 overflow-y-auto scrollbar scrollbar-thumb scrollbar-thumb-rounded scrollbar-thumb-blue31 scrollbar-track-gray-100">
                <div class="w-full">
                    <div class="w-full grid grid-cols-3 gap-10 justify-center items-center place-items-center">
                        {{-- Left --}}
                        <div class="row-span-3 grid-rows-subgrid justify-self-end">
                            <div id="question-1" data-accepting="true"
                                class="js-input mb-12 w-40 h-40 flex items-center justify-center border border-blue31 rounded-full text-sm text-center">
                                ____
                            </div>
                            <div id="question-4" data-accepting="true"
                                class="js-input mt-12 w-40 h-40 flex items-center justify-center border border-blue31 rounded-full text-sm text-center">
                                ____
                            </div>
                        </div>
                        {{-- Top Center --}}
                        <div id="question-2" data-accepting="true"
                            class="js-input w-40 h-40 flex items-center justify-center border border-blue31 rounded-full text-sm text-center">
                            ____
                        </div>
                        {{-- Right --}}
                        <div class="row-span-3 grid-rows-subgrid justify-self-start">
                            <div id="question-3" data-accepting="true"
                                class="js-input mb-12 w-40 h-40 flex items-center justify-center border border-blue31 rounded-full text-sm text-center">
                                ____
                            </div>
                            <div id="question-6" data-accepting="true"
                                class="js-input mt-12 w-40 h-40 flex items-center justify-center border border-blue31 rounded-full text-sm text-center">
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
                            class="js-input w-40 h-40 flex items-center justify-center border border-blue31 rounded-full text-sm text-center">
                            ____
                        </div>
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
                <div class="js-answer-card pr-3 flex flex-col justify-evenly">
                    @foreach ($answers as $key => $answer)
                        <div class="js-answer quiz-answer p-2 bg-blue31 rounded text-center text-white cursor-pointer"
                            draggable="true" data-id="{{ $key }}">
                            {{ $answer }}</div>
                    @endforeach
                </div>
            </div>
            <form class="px-2 w-full flex justify-end bg-bluee3 rounded">
                <div id="quiz-score" class="m-2 p-2 w-1/5 flex justify-center bg-blue31 rounded hidden">
                    <h1 class="text-white">Score: 0</h1>
                </div>
                @csrf
                <button id="refresh-btn" type="button"
                    class="m-2 p-2 w-1/5 text-blue31 text-center border-2 border-blue31 rounded font-medium transition hover:-translate-y-1 hover:scale-105">Ulangi
                    Kuis</button>
                <button id="submit-btn" type="button"
                    onclick="submitQuiz('{{ route('quiz.post', ['module_id' => $module_id, 'quiz_id' => $quiz_id]) }}')"
                    class="m-2 p-2 w-1/5 text-white text-center bg-blue31 rounded font-medium transition hover:-translate-y-1 hover:scale-105">
                    Kumpulkan
                </button>
                <button id="next-btn" type="button" onclick="window.location.href='{{ route('quiz.show', ['module_id' => $module_id, 'id' => $quiz_id + 1]) }}'"
                    class="m-2 p-2 w-1/5 text-white text-center bg-blue31 font-medium rounded transition hover:-translate-y-1 hover:scale-105 hidden">
                    Selanjutnya
                </button>

            </form>
        </div>
        @include('includes.components.elearning.course.section')
    </section>

    @include('includes.components.elearning.course.footer')
</body>

@include('includes.components.elearning.course.dialog.modal-asessment')

</html>
