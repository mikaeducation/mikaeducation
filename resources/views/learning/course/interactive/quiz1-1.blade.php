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
    @vite('public/assets/css/style.css')
    @vite('resources/js/quiz/quiz1/quiz1-1.js')
</head>

<body class="font-futura w-full min-h-screen flex flex-col relative text-blue31">
    @include('includes.components.elearning.course.header')

    <section class="w-full flex flex-grow items-start justify-start">
        {{-- Quiz Section --}}
        <div id="game-1" class="quiz-section h-[85vh] flex flex-col flex-grow">
            <div class="w-full flex flex-col p-2">
                <p class="p-2">Isilah lingkaran-lingkaran berikut dengan karakteristik Autisme yang perlu
                    dipahami oleh orang yang bekerja dengan anak autistik.</p>
            </div>
            <div class="game-scene flex flex-1">
                <div class="w-full relative">

                    <!-- Center Circle -->
                    <div id="question"
                        class="absolute top-1/2 left-1/2 w-40 h-40 p-4 bg-blue31 text-white font-bold text-center flex items-center justify-center rounded-full transform -translate-x-1/2 -translate-y-1/2 shadow-md">
                        Karakteristik Autisme
                    </div>

                    <!-- Outer Circles -->
                    @php
                        $positions = [
                            ['top' => '15%', 'left' => '50%'], // top
                            ['top' => '35%', 'left' => '70%'], // top right
                            ['top' => '35%', 'left' => '30%'], // top left
                            ['top' => '85%', 'left' => '50%'], // bottom
                            ['top' => '65%', 'left' => '70%'], // bottom right
                            ['top' => '65%', 'left' => '30%'], // bottom left
                        ];
                    @endphp
                    @foreach ($positions as $i => $pos)
                        <div id="question-{{ $i + 1 }}"
                            class="input-game absolute w-40 h-40 rounded-full border border-blue31 flex items-center justify-center text-sm text-blue-700"
                            style="top: {{ $pos['top'] }}; left: {{ $pos['left'] }}; transform: translate(-50%, -50%)">
                            <span>____</span> {{-- Placeholder for label --}}
                        </div>
                    @endforeach
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
                <div class="answer-card flex flex-col justify-evenly relative">
                    @foreach ($answers as $answer)
                        <div class="answer-game quiz-answer p-2">{{ $answer }}</div>
                    @endforeach
                </div>
            </div>
            <div class="x-5 py-3 w-1/3 flex justify-stretch self-end">
                <button id="" type="button"
                    class="w-full m-2 p-2 text-blue31 text-center border-2 border-blue31 rounded transition hover:-translate-y-1 hover:scale-105">Ulangi Kuis</button>
                <a id="" href="{{ route('quiz.show', ['page'=> 'quiz1-2']) }}" class="w-full m-2 p-2 text-white text-center bg-blue31 rounded transition hover:-translate-y-1 hover:scale-105">Kumpulkan</a>
            </div>
        </div>
        @include('includes.components.elearning.course.section')
    </section>

    @include('includes.components.elearning.course.footer')
</body>

@include('includes.components.elearning.course.dialog.modal-asessment')
</html>
