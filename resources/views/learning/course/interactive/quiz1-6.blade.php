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
    @vite('resources/js/quiz/quiz1/quiz1-6.js')
</head>

<body class="font-futura w-full min-h-screen flex flex-col relative text-blue31">
    @include('includes.components.elearning.course.header')

    <section class="w-full flex flex-grow items-start justify-start">
        {{-- Quiz Section --}}
        <div id="game-3" class="quiz-section h-[85vh] flex flex-col flex-grow">
            <div class="w-full m-2 pt-6 flex flex-col p-2">
                <h1 class="p-2 text-lg">Cocokkanlah gejala-gejala di bawah ini agar sesuai dengan komponen kesulitan
                    Komunikasi Pragmatis berikut.</h1>
            </div>
            <div class="px-12 gap-x-24 w-full h-full flex">
                <div class="js-game-scene flex flex-1 flex-col justify-evenly">
                    @php
                        $questions = [
                            'Menyambut dan memberi salam',
                            'Menggunakan isyarat tubuh',
                            'Perhatian langsung',
                            'Kesadaran ruang pribadi',
                        ];
                    @endphp

                    @foreach ($questions as $question)
                        <div class="grid grid-cols-2 gap-6">
                            {{-- Quiz Box --}}
                            <div id="question" class="p-4 flex bg-blue31 rounded justify-center">
                                <h2 class="text-sm text-white font-bold">{{ $question }}</h2>
                            </div>

                            <!-- Input Box -->
                            <div
                                class="w-full flex flex-col border-2 border-blue31 rounded-full items-center justify-center">
                                <div id="" class="js-input-game justify-center text-sm text-blue31">
                                </div>
                                <span>____</span> {{-- Placeholder for label --}}
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Answer Section --}}
                {{-- TODO: masukan jawaban ke database --}}
                @php
                    $answers = [
                        'Tidak bisa spontan mengatakan “Halo”',
                        'Kesulitan mengekspresikan perasaan dan suit memahami isyarat sosial',
                        'Sulit kontak mata, fokus mudah teralihkan',
                        'Tidak menyadari ruang personal space orang lain',
                    ];
                @endphp
                <div class="js-answer-card max-w-64 px-6 py-2 flex flex-col justify-evenly">
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
                <a id="" href="{{ route('quiz.show', ['quiz' => 'quiz1-7']) }}"
                    class="w-full m-2 p-2 text-white text-center bg-blue31 rounded transition hover:-translate-y-1 hover:scale-105">Kumpulkan</a>
            </div>
        </div>
        @include('includes.components.elearning.course.section')
    </section>

    @include('includes.components.elearning.course.footer')
</body>

@include('includes.components.elearning.course.dialog.modal-asessment')

</html>
