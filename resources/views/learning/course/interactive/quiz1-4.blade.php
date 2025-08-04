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
    @vite('public/assets/css/style.css')
    @vite('resources/js/quiz/quiz1/quiz1-4.js')
</head>

<body class="font-futura w-full min-h-screen flex flex-col relative text-blue31">
    @include('includes.components.elearning.course.header')

    <section class="w-full flex flex-grow items-start justify-start">
        {{-- Quiz Section --}}
        <div id="game-3" class="quiz-section h-[85vh] flex flex-col flex-grow">
            <div class="w-full flex flex-col p-2">
                <p class="p-2">Isilah lingkaran-lingkaran berikut dengan karakteristik Pra-Komunikasi yang sering
                    ditunjukkan anak autistik.</p>
            </div>
            <div class="js-game-scene flex flex-1">
                <div class="w-full flex justify-center">

                    <!-- Title -->
                    <div id="question" class="m-8 p-4 flex bg-blue31 items-center rounded">
                        <h2 class="-rotate-90 text-white font-bold">Komunikasi Reseptif</h2>
                    </div>

                    <!-- Input Box -->
                    <div class="w-1/3 flex flex-col items-start justify-evenly">
                        @for ($i = 0; $i < 3; $i++)
                            <div id=""
                                class="js-input-game my-2 w-full h-1/6 flex flex-col-reverse rounded items-center justify-center border border-blue31 text-sm text-blue-700"
                                <span>____</span> {{-- Placeholder for label --}}
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
                        'Membuat komentar',
                        'Memahami konsep abstrak seperti peribahasa, lawan kata, padanan kata dan majas',
                    ];
                @endphp
                <div class="js-answer-card max-w-64 flex flex-col justify-evenly relative">
                    @foreach ($answers as $answer)
                        <div class="js-answer-game quiz-answer p-2">{{ $answer }}</div>
                    @endforeach
                </div>
            </div>

            {{-- Button --}}
            <div class="x-5 py-3 w-1/3 flex justify-stretch self-end">
                <button id="" type="button"
                    class="w-full m-2 p-2 text-blue31 text-center border-2 border-blue31 rounded transition hover:-translate-y-1 hover:scale-105">Ulangi
                    Kuis</button>
                <a id="" href="{{ route('quiz.show', ['quiz' => 'quiz1-5']) }}"
                    class="w-full m-2 p-2 text-white text-center bg-blue31 rounded transition hover:-translate-y-1 hover:scale-105">Kumpulkan</a>
            </div>
        </div>
        @include('includes.components.elearning.course.section')
    </section>

    @include('includes.components.elearning.course.footer')
</body>

@include('includes.components.elearning.course.dialog.modal-asessment')

</html>
