// Javascript for matching type quiz

document.addEventListener('DOMContentLoaded', function () {
    const answerPlaceholder = {};
    const answers = document.querySelectorAll('.js-answer');
    const inputs = document.querySelectorAll('.js-input');
    const scoreBox = document.getElementById('quizScore');
    const scoreLabel = scoreBox?.querySelector('h1');
    const nextBtn = document.getElementById('nextButton');
    const submitBtn = document.getElementById('submitButton');
    window.answerPlaceholder = answerPlaceholder;

    // --- Drag logic ---
    answers.forEach((answer) => {
        answer.addEventListener('dragstart', function (e) {
            e.dataTransfer.setData('text/plain', this.textContent);
            e.dataTransfer.effectAllowed = 'move';
            this.classList.add('opacity-50');
        });

        answer.addEventListener('dragend', function () {
            this.classList.remove('opacity-50');
        });
    });

    inputs.forEach((input) => {
        input.addEventListener('dragover', function (e) {
            e.preventDefault();
            e.dataTransfer.dropEffect = 'move';
            this.classList.add('border-dashed');
        });

        input.addEventListener('dragleave', function () {
            this.classList.remove('border-dashed');
        });

        input.addEventListener('drop', function (e) {
            e.preventDefault();
            this.classList.remove('border-dashed');

            const droppedText = e.dataTransfer.getData('text/plain');

            if (this.textContent.trim() === '' || this.textContent.includes('____')) {
                this.textContent = droppedText;
                const id = this.id;
                answerPlaceholder[id] = droppedText;
                console.log('Current Answers:', answerPlaceholder);

                // Remove the dragged element from the list
                const draggedElements = document.querySelectorAll('.js-answer');
                draggedElements.forEach((el) => {
                    if (el.textContent.trim() === droppedText.trim()) {
                        el.remove();
                    }
                });
            }
        });
    });

    // --- Handle quiz submitted ---
    document.addEventListener('quiz-submitted', function (e) {
        const result = e.detail;

        // Show score
        if (scoreBox && result.data?.score !== undefined) {
            scoreBox.classList.remove('hidden');
            scoreLabel.textContent = `Score: ${result.data.score}`;
        }

        // Color coded feedback + tooltip
        if (result.data?.details) {
            Object.entries(result.data.details).forEach(([key, item]) => {
                const input = document.getElementById(key);
                if (!input) return;

                input.classList.remove('border-blue31');

                if (item.correct) {
                    input.classList.add('border-green-500', 'bg-green-100');
                } else {
                    input.classList.add('border-red-500', 'bg-red-100');
                }

                if (item.explanation) {
                    input.setAttribute('title', item.explanation);
                    input.classList.add('cursor-help');
                }
            });
        }

        // Toggle buttons
        nextBtn?.classList.remove('hidden');
        submitBtn?.classList.add('hidden');

        // Disable dragging after submit
        answers.forEach((answer) => {
            answer.setAttribute('draggable', 'false');
            answer.classList.add('opacity-50', 'cursor-not-allowed');
        });
    });

    // --- Handle quiz refreshed ---
    document.addEventListener('quiz-refreshed', function () {
        inputs.forEach((input) => {
            input.classList.remove('border-red-500', 'bg-red-100', 'border-green-500', 'bg-green-100', 'cursor-help');
            input.classList.add('border-blue31');
            input.removeAttribute('title');
            input.textContent = '____';
        });

        scoreBox.classList.add('hidden');
        scoreLabel.textContent = `Score: 0`;
        nextBtn?.classList.add('hidden');
        submitBtn?.classList.remove('hidden');

        // Re-enable answers
        const allAnswers = document.querySelectorAll('.js-answer');
        allAnswers.forEach((ans) => {
            ans.setAttribute('draggable', 'true');
            ans.classList.remove('opacity-50', 'cursor-not-allowed');
        });
    });
});
