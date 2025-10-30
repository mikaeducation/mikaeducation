// Javascript for two group quiz

document.addEventListener('DOMContentLoaded', function () {
    const answers = document.querySelectorAll('.js-answer');
    const inputs = document.querySelectorAll('.js-input');
    const scoreBox = document.getElementById('quizScore');
    const scoreLabel = scoreBox?.querySelector('h1');
    const nextBtn = document.getElementById('nextButton');
    const submitBtn = document.getElementById('submitButton');
    const answerPlaceholder = {};
    window.answerPlaceholder = answerPlaceholder;

    // Drag logic
    answers.forEach((answer) => {
        answer.addEventListener('dragstart', function (e) {
            e.dataTransfer.setData('text/plain', this.textContent);
            this.classList.add('opacity-50');
        });

        answer.addEventListener('dragend', function () {
            this.classList.remove('opacity-50');
        });
    });

    inputs.forEach((input) => {
        input.addEventListener('dragover', function (e) {
            e.preventDefault();
            this.classList.add('border-dashed');
        });

        input.addEventListener('dragleave', function () {
            this.classList.remove('border-dashed');
        });

        input.addEventListener('drop', function (e) {
            e.preventDefault();
            this.classList.remove('border-dashed');

            const inputId = this.id;
            const droppedText = e.dataTransfer.getData('text/plain').trim();

            if (!answerPlaceholder[inputId]) {
                answerPlaceholder[inputId] = [];
            }

            if (!answerPlaceholder[inputId].includes(droppedText)) {
                answerPlaceholder[inputId].push(droppedText);
            }
            console.log('Current Answers:', answerPlaceholder);

            if (this.textContent.includes('____')) {
                this.textContent = '';
            }

            const answerDiv = document.createElement('div');
            answerDiv.textContent = droppedText;
            answerDiv.className = 'js-dropped-answer px-2 py-1 m-1 rounded border';
            this.appendChild(answerDiv);

            // Remove dragged item from pool
            const draggedElements = document.querySelectorAll('.js-answer');
            draggedElements.forEach((el) => {
                if (el.textContent.trim() === droppedText) {
                    el.remove();
                }
            });
        });
    });

    document.addEventListener('quiz-submitted', function (e) {
        const result = e.detail;

        // Set to undraggable
        answers.forEach((answer) => {
            answer.setAttribute('draggable', 'false');
            answer.classList.add('opacity-70', 'cursor-not-allowed');
        });

        // Show score
        if (scoreBox && result.data?.score !== undefined) {
            scoreBox.classList.remove('hidden');
            scoreLabel.textContent = `Score: ${result.data.score}`;
        }

        if (result.data?.details) {
            Object.entries(result.data.details).forEach(([group, items]) => {
                const groupBox = document.getElementById(group);
                if (!groupBox) return;

                // Apply feedback
                items.forEach((item) => {
                    const droppedEl = Array.from(groupBox.querySelectorAll('.js-dropped-answer')).find(
                        (el) => el.textContent.trim() === item.answer,
                    );

                    if (!droppedEl) return;

                    if (item.correct) {
                        droppedEl.classList.add('border-green-500', 'bg-green-100');
                    } else {
                        droppedEl.classList.add('border-red-500', 'bg-red-100');
                    }

                    if (item.explanation) {
                        droppedEl.setAttribute('title', item.explanation);
                        droppedEl.classList.add('cursor-help');
                    }
                });
            });
        }

        // Toggle buttons
        nextBtn?.classList.remove('hidden');
        submitBtn?.classList.add('hidden');
    });

    document.addEventListener('quiz-refreshed', function () {
        answers.forEach((answer) => {
            answer.setAttribute('draggable', 'true');
            answer.classList.remove('opacity-70', 'cursor-not-allowed');
        });

        inputs.forEach((input) => {
            input.innerHTML = '____';
        });
        Object.keys(answerPlaceholder).forEach((key) => {
            answerPlaceholder[key] = [];
        });
    });
});
