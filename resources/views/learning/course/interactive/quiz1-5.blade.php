<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quiz 1-5 | Mika Education</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="show-asessment-dialog" content="true">
    <meta name="progress-id" content="{{ session('progress_id') }}">
    <meta name="user-id" content="{{ Auth::id() }}">
    @vite('public/assets/css/style.css')
    @vite('resources/js/quiz/quiz1/quiz-matching-type.js')
    @vite('resources/js/quiz/quiz1/submit-quiz1.js')
</head>

<body class="font-futura w-full min-h-screen flex flex-col relative text-blue31">
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
                <div class="p-6 w-full flex flex-col justify-evenly">
                    @php
                        $questions = [
                            'menyambut' => 'Menyambut dan memberi salam',
                            'isyarat' => 'Menggunakan isyarat tubuh',
                            'perhatian' => 'Perhatian langsung',
                            'kesadaran' => 'Kesadaran ruang pribadi',
                        ];
                    @endphp
                    @foreach ($questions as $key => $question)
                        <div class="grid grid-cols-2 gap-6">
                            {{-- Question --}}
                            <div id="question" class="p-4 flex justify-center items-center bg-blue31 rounded">
                                <h2 class="text-center text-lg text-white font-bold">{{ $question }}</h2>
                            </div>
                            <!-- Input Box -->
                            <div id="{{ $key }}"
                                class="js-input w-full flex justify-center items-center border-2 border-blue31 rounded-full text-sm text-blue31 text-center"
                                data-accepting="true">
                                ____
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Answer Section --}}
                {{-- TODO: masukan jawaban ke database --}}
                @php
                    $answers = [
                        'Tidak bisa spontan mengatakan Halo', // TODO: Normalisasi text jika perlu tanda ""
                        'Kesulitan mengekspresikan perasaan dan suit memahami isyarat sosial',
                        'Sulit kontak mata, fokus mudah teralihkan',
                        'Tidak menyadari ruang personal space orang lain',
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
