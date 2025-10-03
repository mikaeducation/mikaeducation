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
    @vite('resources/js/quiz/quiz1/quiz-matching-type.js')
    @vite('resources/js/quiz/quiz1/submit-quiz1.js')
    @vite('resources/js/quiz/quiz1/refresh-quiz1.js')
</head>

<body class="font-futura w-full min-h-screen flex flex-col relative text-blue31">
    @include('includes.components.elearning.course.header')

    <section class="w-full flex-1 flex text-blue31">
        {{-- Quiz Section --}}
        <x-elearning.course.interactive.quiz>

            {{-- Quiz Title --}}
            <x-elearning.course.interactive.quiz.title>
                Cocokkanlah gejala-gejala di bawah ini agar sesuai dengan komponen kesulitan
                Komunikasi Pragmatis berikut.
            </x-elearning.course.interactive.quiz.title>

            {{-- Interactive Section --}}
            <div class="js-scene-card w-full flex flex-1">

                {{-- Placeholder Section --}}
                <div class="p-6 w-full flex flex-col justify-evenly">
                    @php
                        $questions = ['Karakteristik', 'Dampak', 'Strategi'];
                    @endphp

                    @foreach ($questions as $question)
                        <div class="grid grid-cols-2 gap-6">
                            {{-- Quiz Box --}}
                            <div id="question" class="p-4 flex justify-center items-center bg-blue31 rounded">
                                <h2 class="text-center text-lg text-white font-bold">{{ $question }}</h2>
                            </div>
                            <!-- Input Box -->
                            <div id="{{ $question }}"
                                class="js-input p-2 w-full flex justify-center items-center border-2 border-blue31 rounded-full text-sm text-blue31 text-center"
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
                        'Deskripsikan perilaku anak. Uraikan apa yang mampu dilakukan dan yang masih perlu dikembangkan.',
                        'Apa konsekuensi perilaku pada anak, orang lain, lingkungan sekolah, masyarakat, dan masa depan anak.',
                        'Dokumen yang memfoto keadaan anak secara menyeluruh (komprehensif).',
                        'Bisa disusun dan digunakan oleh orang tua, guru dan professional.',
                        'Untuk memahami anak dan menyusun intervensi/pembelajaran yang paling pas.',
                        'Strategi intervensi sesuai kebutuhan anak (membentuk perilaku baru, meningkatkan atau menurunkan perilaku).',
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
