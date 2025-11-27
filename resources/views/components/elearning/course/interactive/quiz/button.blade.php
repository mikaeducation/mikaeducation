<form class="p-2 w-full flex justify-end sticky bg-white gap-3 rounded head-shadow">
    <div id="quizScoreContainer" class="h-full w-3/5 gap-3 flex justify-end items-center">
        @if ($showLatestScore)
            <h1 id="latestScoreDisplay" class="text-white bg-blue31 h-full w-1/3 rounded flex items-center justify-center">
                Nilai Terbaru: {{ $quizResult['latest_score'] ?? 'XX' }}
            </h1>
        @endif
        <h1 id="highScoreDisplay" class="text-white bg-blue31 h-full w-1/3 rounded flex justify-center items-center">
            Nilai Tertinggi: {{ $highScoreHistory }}
        </h1>
    </div>

    @csrf
    <button id="refreshButton" type="button" onclick="window.location.reload()"
        class="w-1/5 p-1.5 text-blue31 flex items-center justify-center border-2 border-blue31 rounded font-medium transition hover:-translate-y-1 hover:scale-105">
        Ulangi Kuis
    </button>
    <button id="submitButton" type="button" onclick="submitQuiz('{{ route('quiz.post', ['module_id' => $moduleId, 'quiz_id' => $quizId]) }}')"
        class="p-2 w-1/5 text-white flex items-center justify-center bg-blue31 rounded font-medium transition hover:-translate-y-1 hover:scale-105">Kumpulkan
    </button>
</form>
