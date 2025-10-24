<div id="popupQuestion-{{ $popup->id }}" class="relative z-50 hidden w-3/4 md:w-0" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed w-full inset-0 bg-black bg-opacity-55 transition-opacity" aria-hidden="true"></div>
    <div class="fixed inset-0 z-10 w-full md:w-screen overflow-y-auto">
        <div class="flex min-h-screen items-center justify-center p-4 text-center sm:p-0">
            <div
                class="w-full relative transform overflow-hidden rounded bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="flex flex-col items-center justify-center space-y-4">
                        <div
                            class="mx-auto w-full flex size-12 shrink-0 items-center justify-center rounded-full sm:mx-0 sm:size-10">
                            <svg class="size-10 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                            </svg>
                        </div>
                        <div class="text-center space-y-4 text-blue31">
                            <h3 class="my-3 text-3xl font-semibold">Pertanyaan Popup</h3>
                            <p class="my-3 text-lg mt-2">
                                {{ $popup->instruction }}
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="px-4 sm:px-6 w-full flex flex-col justify-center gap-2 bg-bluee3 bg-opacity-40 text-lg font-medium">
                    @foreach ($popup->answers as $i => $answer)
                        <button id="btnAnswer{{ $i }}-{{ $popup->id }}" type="button" data-correct="{{ $answer['is_correct'] }}"
                            class="px-3 py-2 w-full flex justify-start place-items-center gap-2 bg-blue31 rounded text-white text-left hover:-translate-y-1 hover:scale-110">
                            <h1 class="h-fit">{{ chr(65 + $i) }})</h1>
                            <h1 class="h-fit">{{ $answer['text'] }}</h1>
                        </button>
                    @endforeach
                </div>
                <div class="px-4 sm:px-6 w-full flex justify-center gap-2 bg-bluee3 bg-opacity-40">
                    <button id="btnBack-{{ $popup->id }}" type="button"
                        class="mt-4 w-1/2 border-2 border-blue31 rounded text-lg font-medium">
                        Kembali
                    </button>
                    <button id="btnContinue-{{ $popup->id }}" type="button"
                        class="mt-4 w-1/2 border-2 border-blue31 rounded text-lg font-medium hidden">
                        Kembali
                    </button>
                </div>
                <p class="my-2 px-6 pb-4 pt-8 sm:pt-6 text-center">
                    Jika memerlukan bantuan lebih lanjut,<a href="https://wa.me/082156226440 "
                        class="relative text-blue31 font-medium before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full">
                        hubungi tim dukungan kami disini.</a>
                </p>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const video = document.getElementById('courseVideo');
    const popup = document.getElementById('popupQuestion-' + {{ $popup->id }});
    const btnBack = document.getElementById('btnBack-' + {{ $popup->id }});
    const btnAnswer0 = document.getElementById('btnAnswer0-' + {{ $popup->id }});
    const btnAnswer1 = document.getElementById('btnAnswer1-' + {{ $popup->id }});

    let quizTriggered = {{ $user->is_passed }};
    const stopTime = {{ $popup->pop_time }};

    // Monitor time
    video.addEventListener('timeupdate', function () {
        if (!quizTriggered && video.currentTime >= stopTime) {
            video.currentTime = stopTime;
            video.pause();
            triggerQuiz();
        }
    });

    function triggerQuiz() {
        video.controls = false;
        popup.classList.remove('hidden');
    }

    btnBack.addEventListener('click', function () {
        popup.classList.add('hidden');
        video.currentTime = stopTime - 20;
        video.controls = true;
        video.play();
    });

    // Answer button
    btnAnswer0.addEventListener('click', function () {
        // Mark this as correct
        btnAnswer0.classList.add('bg-green-500');
        btnAnswer0.classList.remove('bg-blue31');

        // Mark the other as wrong
        btnAnswer1.classList.add('bg-red-500');
        btnAnswer1.classList.remove('bg-blue31');

        quizTriggered = true;
        video.controls = true;
    });

    btnAnswer1.addEventListener('click', function () {
        // Mark this as wrong
        btnAnswer1.classList.add('bg-red-500');
        btnAnswer1.classList.remove('bg-blue31');

        // Mark the correct one as green
        btnAnswer0.classList.add('bg-green-500');
        btnAnswer0.classList.remove('bg-blue31');

        quizTriggered = true;
        video.controls = true;
    });
});
</script>
