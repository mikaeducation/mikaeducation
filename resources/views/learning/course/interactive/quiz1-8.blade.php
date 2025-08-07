<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quiz 1-8 | Mika Education</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="show-asessment-dialog" content="true">
    <meta name="progress-id" content="{{ session('progress_id') }}">
    <meta name="user-id" content="{{ Auth::id() }}">
    @vite('public/assets/css/style.css')
    @vite('resources/js/quiz/quiz1/quiz1-8.js')
</head>

<body class="font-futura w-full min-h-screen flex flex-col relative text-blue31">
    @include('includes.components.elearning.course.header')

    <section class="w-full flex flex-grow items-start justify-start">
        {{-- Quiz Section --}}
        <div id="game-3" class="quiz-section h-[85vh] flex flex-col flex-grow">
            <div class="w-full pt-12 flex flex-col">
                <p class="p-2 text-center text-balance text-lg">Cocokkanlah gejala-gejala di bawah ini agar sesuai
                    dengan payung
                    karakteristik yang sesuai (Komunikasi Sosial dan Minat terbatas dan perilaku berulang)</p>
            </div>
            <div class="js-game-scene w-full flex flex-1">
                <div class="w-full p-6 flex justify-evenly">
                    <div id="question" class="w-1/3 mx-4 grid grid-rows-auto gap-6 justify-items-end">
                        <!-- Question Box -->
                        <h2
                            class="justify-self-start w-2/3 p-2 rounded bg-blue31 text-center content-center text-md text-white font-bold">
                            Karakteristik
                            Komunikasi Sosial Autisme</h2>
                        <!-- Input Box -->
                        @for ($i = 0; $i < 3; $i++)
                            <div id=""
                                class="js-input-game w-2/3 flex flex-1 flex-col rounded items-center justify-center border border-blue31 text-sm text-blue31">
                                <!-- Input Div -->
                                <div class="text-center">

                                </div>
                                <span>____</span> {{-- Placeholder for label --}}
                            </div>
                        @endfor
                    </div>
                    <div id="question" class="w-1/3 mx-4 grid grid-rows-auto gap-6 justify-items-end">
                        <!-- Question Box -->
                        <h2
                            class="justify-self-start w-2/3 p-2 rounded bg-blue31 text-center content-center text-md text-white font-bold">
                            Karakteristik
                            Komunikasi Sosial Autisme</h2>
                        <!-- Input Box -->
                        @for ($i = 0; $i < 4; $i++)
                            <div id=""
                                class="js-input-game w-2/3 flex flex-1 flex-col rounded items-center justify-center border border-blue31 text-sm text-blue31">
                                <!-- Input Div -->
                                <div class="text-center">

                                </div>
                                <span>____</span> {{-- Placeholder for label --}}
                            </div>
                        @endfor
                    </div>
                </div>
                {{-- Answer Section --}}
                {{-- TODO: masukan jawaban ke database --}}
                @php
                    $answers = [
                        'Kesulitan memulai, mempertahankan dan memahami hubungan dengan orang lain',
                        'Menuntut kesamaan, tidak fleksibel, marah jika terjadi perubahan rutinitas/ritual/pola perilaku verbal atau nonverbal',
                        'Hyper-atau hipo-reaktivitas terhadap stimulus sensorik',
                        'Sulit melakukan relasi sosial-emosional timbal balik',
                        'Gerakan motorik, penggunaan objek atau wicara berulang.',
                        'Sulit memahami komunikasi non-verbal',
                        'Perhatian terbatas atau minat yang terpaku pada satu hal secara berlebih-lebih',
                    ];
                @endphp
                <div class="js-answer-card max-w-96 flex flex-col justify-evenly relative">
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
                <a id="" href="{{ route('quiz.show', ['quiz' => 'quiz1-9']) }}"
                    class="w-full m-2 p-2 text-white text-center bg-blue31 rounded transition hover:-translate-y-1 hover:scale-105">Kumpulkan</a>
            </div>
        </div>
        @include('includes.components.elearning.course.section')
    </section>

    @include('includes.components.elearning.course.footer')
</body>

@include('includes.components.elearning.course.dialog.modal-asessment')

</html>
