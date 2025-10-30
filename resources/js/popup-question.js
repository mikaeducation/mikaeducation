document.addEventListener('DOMContentLoaded', function () {
    const video = document.getElementById('courseVideo');
    const popup = document.getElementById('popupQuestion');
    const btnBack = document.getElementById('btnBack');
    const btnAnswer0 = document.getElementById('btnAnswer0');
    const btnAnswer1 = document.getElementById('btnAnswer1');

    let quizTriggered = false;
    const stopTime = 10; // in seconds

    // Monitor time
    video.addEventListener('timeupdate', function () {
        if (!quizTriggered && video.currentTime >= stopTime) {
            triggerQuiz();
        }
    });

    // Prevent scrubbing past stopTime
    video.addEventListener('seeking', function () {
        if (!quizTriggered && video.currentTime > stopTime) {
            video.currentTime = stopTime;
            video.pause();
            triggerQuiz();
        }
    });

    function triggerQuiz() {
        video.pause();
        video.controls = false;
        popup.classList.remove('hidden');
    }

    // Back button: force pause, rewind slightly
    btnBack.addEventListener('click', function () {
        popup.classList.add('hidden');
        video.currentTime = stopTime - 10;
        video.controls = true;
        video.play();
    });

    // ✅ Answer click logic
    btnAnswer0.addEventListener('click', function () {
        // Mark this as correct
        btnAnswer0.classList.add('bg-green-500');
        btnAnswer0.classList.remove('bg-blue31');

        // Mark the other as wrong
        btnAnswer1.classList.add('bg-red-500');
        btnAnswer1.classList.remove('bg-blue31');

        quizTriggered = true;
        video.controls = true;

        // Auto-continue after short delay (optional)
        setTimeout(() => {
            popup.classList.add('hidden');
            video.play();
        }, 2000);
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
