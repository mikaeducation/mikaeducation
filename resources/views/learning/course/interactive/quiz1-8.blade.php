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
                Cocokanlah penjelasan di bawah ini agar sesuai dengan komponen TEACCH
                yang tepat!
            </x-elearning.course.interactive.quiz.title>

            {{-- Interactive Section --}}
            <div class="js-scene-card w-full flex flex-1">

                {{-- Placeholder Section --}}
                <div class="p-6 w-full flex flex-col justfity items-center">
                    @php
                        $questions = [
                            'Jadwal Visual',
                            'Sistem Kerja',
                            'Struktur Lingkungan Fisik',
                            'Alat Bantu Visual',
                        ];
                    @endphp
                    @foreach ($questions as $question)
                        <div id=""
                            class="js-input-card w-full my-2 flex flex-col flex-grow items-center justify-evenly">
                            <!-- Question Box -->
                            <h2 class="w-full p-2 rounded bg-blue31 text-center text-xl text-white font-bold">
                                {{ $question }}</h2>

                            <!-- Input Box -->
                            <div id="{{ $question }}"
                                class="js-input p-2 w-full flex flex-grow justify-center items-end rounded border-b-2 border-blue31 text-center"
                                data-accepting="true">
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Answer Section --}}
                {{-- TODO: masukan jawaban ke database --}}
                @php
                    $answers = [
                        'Menciptakan lingkungan yang terorganisir secara visual untuk membantu individu memahami tugas dan rutinitas dengan baik',
                        'Kartu visual memberikan informasi yang jelas dan kosisten, mengurangi kecemasan, serta meningkatkan pemahaman',
                        'Memberikan informasi tahapan pengerjaan tugas, pengoganisasian kegiatan, untuk meningkatkan pemahaman',
                        'Memahami apa yang harus dilakukan, bagaimana dilakukan, kapan tugasnya selesai dan apa yang harus dilakukan setelah tugas itu selesai',
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
