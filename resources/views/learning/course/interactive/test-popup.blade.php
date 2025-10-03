<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Learning | Mika Education</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="show-asessment-dialog" content="true">
    <meta name="progress-id" content="{{ session('progress_id') }}">
    <meta name="user-id" content="{{ Auth::id() }}">
    @vite('public/assets/css/style.css')
</head>

<body class="font-futura w-full min-h-screen flex flex-col relative">
    @include('includes.components.elearning.course.header')

    <section class="w-full flex-1 flex flex-col items-center justify-center text-blue31">
        <div class="w-full flex-grow flex items-start justify-start">
            {{-- Left Content --}}
            <div id="left"
                class="w-3/4 flex-1 max-h-[100vh] lg:max-h-[84vh] flex flex-col overflow-y-auto scrollbar scrollbar-thumb scrollbar-thumb-rounded scrollbar-thumb-blue31 scrollbar-track-gray-100">
                <div class="w-full h-full flex flex-col pl-12 md:pr-12 mt-10">
                    <div class="h-full w-full space-y-8">
                        <div class="w-full h-fit md:h-[400px] lg:h-[500px] xl:h-[575px] flex bg-black rounded">
                            <div class="w-full h-full flex justify-center items-center">
                                <div class="aspect-w-16 aspect-h-9 w-full h-full flex justify-center items-center">
                                    <video id="courseVideo" controls class="w-full h-auto rounded">
                                        <source src="{{ asset('videos/dummy.mp4') }}" type="video/mp4">
                                        Browser kamu tidak mendukung video tag.
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div class="w-full py-8 border-y-2 border-bluee3 space-y-4 text-lg">
                            <div class="w-full md:flex lg:flex text-justify">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Right Content --}}
            @include('includes.components.elearning.course.section')
        </div>
        <x-elearning.course.interactive.popup-question :answers="[
            'Kemampuan otak yang berbeda-beda antara satu dengan yang lain.',
            'Kemampuan otak ada yang lemah dan kuat.',
        ]"
            question="Apa yang dimaksud dengan neurodivergen?" />
    </section>

    @include('includes.components.elearning.course.footer')

</body>

@include('includes.components.elearning.course.dialog.modal-asessment')

</html>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const video = document.getElementById("courseVideo");
        const popup = document.getElementById("popupQuiz");
        const btnBack = document.getElementById("btnBack");
        const btnAnswer0 = document.getElementById("btnAnswer0");
        const btnAnswer1 = document.getElementById("btnAnswer1");

        let quizTriggered = false;
        const stopTime = 10; // in seconds

        // Monitor time
        video.addEventListener("timeupdate", function() {
            if (!quizTriggered && video.currentTime >= stopTime) {
                triggerQuiz();
            }
        });

        // Prevent scrubbing past stopTime
        video.addEventListener("seeking", function() {
            if (!quizTriggered && video.currentTime > stopTime) {
                video.currentTime = stopTime;
                video.pause();
                triggerQuiz();
            }
        });

        function triggerQuiz() {
            video.pause();
            video.controls = false
            popup.classList.remove("hidden");
        }

        // Back button: force pause, rewind slightly
        btnBack.addEventListener("click", function() {
            popup.classList.add("hidden");
            video.currentTime = stopTime - 10;
            video.controls = true
            video.play();
        });

        // ✅ Answer click logic
        btnAnswer0.addEventListener("click", function() {
            // Mark this as correct
            btnAnswer0.classList.add("bg-green-500");
            btnAnswer0.classList.remove("bg-blue31");

            // Mark the other as wrong
            btnAnswer1.classList.add("bg-red-500");
            btnAnswer1.classList.remove("bg-blue31");

            quizTriggered = true;
            video.controls = true

            // Auto-continue after short delay (optional)
            setTimeout(() => {
                popup.classList.add("hidden");
                video.play();
            }, 2000);
        });

        btnAnswer1.addEventListener("click", function() {
            // Mark this as wrong
            btnAnswer1.classList.add("bg-red-500");
            btnAnswer1.classList.remove("bg-blue31");

            // Mark the correct one as green
            btnAnswer0.classList.add("bg-green-500");
            btnAnswer0.classList.remove("bg-blue31");

            quizTriggered = true;
            video.controls = true

            // Auto-continue after short delay (optional)
            setTimeout(() => {
                popup.classList.add("hidden");
                video.play();
            }, 2000);
        });
    });
</script>
