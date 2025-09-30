<div class="js-answer-card pr-3 max-w-64 flex flex-col justify-evenly">
    @foreach ($answers as $key => $answer)
        <div class="js-answer quiz-answer my-2 p-2 bg-blue31 rounded text-center text-white cursor-grab"
            draggable="true" data-id="{{ $key }}">
            {{ $answer }}</div>
    @endforeach
</div>