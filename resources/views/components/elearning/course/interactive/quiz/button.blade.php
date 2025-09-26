<form class="px-2 w-full flex justify-end bg-bluee3 rounded shadow-[0px_0px_12px_rgba(0,0,0,0.25)]">
    <div id="quiz-score" class="m-2 p-2 w-1/5 flex justify-center bg-blue31 rounded hidden">
        <h1 class="text-white">Score: 0</h1>
    </div>
    @csrf
    <button id="refresh-btn" type="button"
        class="m-2 p-2 w-1/5 text-blue31 text-center border-2 border-blue31 rounded font-medium transition hover:-translate-y-1 hover:scale-105">Ulangi
        Kuis</button>
    <button id="submit-btn" type="button"
        onclick="submitQuiz('{{ route('quiz.post', ['module_id' => $moduleId, 'quiz_id' => $quizId]) }}')"
        class="m-2 p-2 w-1/5 text-white text-center bg-blue31 rounded font-medium transition hover:-translate-y-1 hover:scale-105">
        Kumpulkan
    </button>
    <a id="next-btn" 
        href="{{ route('quiz.show', ['module_id' => $moduleId, 'id' => 2]) }}"
        class="m-2 p-2 w-1/5 text-white text-center bg-blue31 font-medium rounded transition hover:-translate-y-1 hover:scale-105 hidden">
        Selanjutnya
    </a>
</form>
