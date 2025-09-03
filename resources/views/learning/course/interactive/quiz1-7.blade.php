<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quiz 1-7 | Mika Education</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="show-asessment-dialog" content="true">
    <meta name="progress-id" content="{{ session('progress_id') }}">
    <meta name="user-id" content="{{ Auth::id() }}">
    @vite('public/assets/css/style.css')
    @vite('resources/js/quiz/quiz1/quiz1-7.js')
    @vite('resources/js/quiz/quiz1/submit-quiz1.js')
</head>

<body class="font-futura w-full min-h-screen flex flex-col relative text-blue31">
    @include('includes.components.elearning.course.header')

    <section class="w-full flex flex-grow items-start justify-start">
        {{-- Quiz Section --}}
        <div id="js-scene" class="quiz-section h-[85vh] flex flex-col flex-grow">
            <div class="w-full pt-12 flex flex-col">
                <p class="p-2 text-center text-lg">Cocokkanlah alat bantu visual di bawah ini agar sesuai dengan contoh
                    Augmentative Alternative Communication (AAC) yang sesuai.</p>
            </div>
            <div class="js-scene-card flex flex-1">
                <div class="w-full flex flex-col items-center">

                    <!-- Low Tech -->
                    <div id=""
                        class="js-input-card w-2/3 my-2 flex flex-col flex-grow items-center justify-evenly">
                        <h2 class="p-1 text-xl text-blue31 font-bold">Low Tech</h2>

                        <!-- Input Box -->
                        <div id="low-tech"
                            class="js-input w-full flex flex-grow flex-wrap rounded border-2 border-blue31">
                        </div>
                    </div>

                    <!-- High Tech -->
                    <div id=""
                        class="js-input-card w-2/3 my-2 flex flex-col flex-grow items-center justify-evenly">
                        <h2 class="p-1 text-xl text-blue31 font-bold">High Tech</h2>

                        <!-- Input Box -->
                        <div id="high-tech"
                            class="js-input w-full flex flex-grow flex-wrap rounded border-2 border-blue31">
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
                        'AAC',
                        'Ipad ( Compass, Lamb words for life)',
                        'Liberator Rugged 7, ProloQuo2Go',
                        'MIKA 1.0',
                    ];
                @endphp
                <div class="js-answer-card min-w-64 flex flex-col justify-evenly relative">
                    @foreach ($answers as $answer)
                        <div class="js-answer quiz-answer p-2">{{ $answer }}</div>
                    @endforeach
                </div>
            </div>

            {{-- Button --}}
            <form class="x-5 py-3 w-1/3 flex justify-stretch self-end">
                @csrf
                <button id="" type="button"
                    class="w-full m-2 p-2 text-blue31 text-center border-2 border-blue31 rounded transition hover:-translate-y-1 hover:scale-105">Ulangi
                    Kuis</button>
                <div onclick="submitQuiz('{{ route('quiz.post', ['quiz_id' => $quiz_id]) }}')"
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
