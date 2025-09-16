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

<body class="font-futura w-full min-h-screen flex flex-col relative">
    @include('includes.components.elearning.course.header')

    <section class="w-full h-[81vh] flex items-start justify-start text-blue31">
        {{-- Quiz Section --}}
        {{-- TODO: buat jadi modular --}}
        <div id="js-scene" class="quiz-section w-full h-full flex flex-col">
            <div class="w-full h-1/10 flex flex-col">
                <p class="p-2 text-center text-balance text-lg">Cocokkanlah gejala-gejala di bawah ini agar sesuai
                    dengan payung
                    karakteristik yang sesuai (Komunikasi Sosial dan Minat terbatas dan perilaku berulang)</p>
            </div>
            <div
                class="w-full h-full flex overflow-y-auto scrollbar scrollbar-thumb scrollbar-thumb-rounded scrollbar-thumb-blue31 scrollbar-track-gray-100">
                <div class="w-full h-full p-6 flex justify-evenly">
                    <div id="karakteristik"
                        class="js-scene-card w-full h-full mx-4 grid grid-rows-5 gap-2 justify-items-end">
                        <!-- Question Box -->
                        <h2
                            class="w-2/3 p-2 justify-self-start rounded bg-blue31 text-center content-center text-md text-white font-bold">
                            Karakteristik
                            Komunikasi Sosial Autisme</h2>
                        <!-- Input Box -->
                        @for ($i = 0; $i < 3; $i++)
                            <div class="js-input px-2 w-4/5 h-full flex items-center border-2 border-blue31 rounded justify-center text-center"
                                data-accepting="true">
                                ____
                            </div>
                        @endfor
                    </div>
                    <div id="minat"
                        class="js-scene-card mx-4 w-full h-full grid grid-rows-5 gap-2 justify-items-end">
                        <!-- Question Box -->
                        <h2
                            class="p-2 w-2/3 h-full justify-self-start rounded bg-blue31 text-center content-center text-md text-white font-bold">
                            Minat terbatas dan perilaku berulang
                        </h2>
                        <!-- Input Box -->
                        @for ($i = 0; $i < 4; $i++)
                            <div class="js-input px-2 w-4/5 h-full flex items-center border-2 border-blue31 rounded justify-center text-center"
                                data-accepting="true">
                                ____
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
                <div class="js-answer-card pr-3 w-64 h-full flex flex-col justify-evenly overflow-y-auto scrollbar">
                    @foreach ($answers as $key => $answer)
                        <div class="js-answer quiz-answer my-2 p-2 bg-blue31 rounded text-white text-center cursor-pointer"
                            draggable="true" data-id="{{ $key }}">
                            {{ $answer }}</div>
                    @endforeach
                </div>
            </div>

            {{-- Button --}}
            <form class="x-5 py-3 w-1/3 h-1/10 flex justify-stretch self-end">
                @csrf
                <button id="refresh-btn" type="button"
                    class="w-full m-2 p-2 text-blue31 text-center border-2 border-blue31 rounded transition hover:-translate-y-1 hover:scale-105">Ulangi
                    Kuis</button>
                <div onclick="submitQuiz('{{ route('quiz.post', ['module_id' => $module_id, 'quiz_id' => $quiz_id]) }}')"
                    class="w-full m-2 p-2 text-white text-center bg-blue31 rounded transition hover:-translate-y-1 hover:scale-105">
                    Kumpulkan
                </div>
            </form>
        </div>
        @include('includes.components.elearning.course.section')
    </section>
    @include('includes.components.elearning.course.footer')
</body>

@include('includes.components.elearning.course.dialog.modal-asessment')

</html>
