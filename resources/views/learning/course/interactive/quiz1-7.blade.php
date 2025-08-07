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
</head>

<body class="font-futura w-full min-h-screen flex flex-col relative text-blue31">
    @include('includes.components.elearning.course.header')

    <section class="w-full flex flex-grow items-start justify-start">
        {{-- Quiz Section --}}
        <div id="game-3" class="quiz-section h-[85vh] flex flex-col flex-grow">
            <div class="w-full pt-12 flex flex-col">
                <p class="p-2 text-center text-lg">Cocokanlah penjelasan di bawah ini agar sesuai dengan komponen TEACCH
                    yang tepat!</p>
            </div>
            <div class="js-game-scene flex flex-1">
                <div class="w-full flex flex-col items-center">
                    @php
                        $questions = [
                            'Jadwal Visual',
                            'Sistem Kerja',
                            'Struktur Lingkungan Fisik',
                            'Alat Bantu Visual',
                        ];
                    @endphp
                    @foreach ($questions as $question)
                        <div id="" class="w-full my-2 flex flex-col flex-grow items-center justify-evenly">
                            <!-- Question Box -->
                            <h2 class="w-2/3 p-2 rounded bg-blue31 text-center text-xl text-white font-bold">
                                {{ $question }}</h2>

                            <!-- Input Box -->
                            <div class="w-2/3 flex flex-grow flex-wrap rounded border-b-2 border-blue31">
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
                <div class="js-answer-card max-w-128 flex flex-col justify-evenly relative">
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
                <a id="" href="{{ route('quiz.show', ['quiz' => 'quiz1-8']) }}"
                    class="w-full m-2 p-2 text-white text-center bg-blue31 rounded transition hover:-translate-y-1 hover:scale-105">Kumpulkan</a>
            </div>
        </div>
        @include('includes.components.elearning.course.section')
    </section>

    @include('includes.components.elearning.course.footer')
</body>

@include('includes.components.elearning.course.dialog.modal-asessment')

</html>
