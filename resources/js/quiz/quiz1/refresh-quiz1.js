document.addEventListener('DOMContentLoaded', function () {
    const answerCard = document.querySelector('.js-answer-card');
    const answer = document.querySelector('.js-answer');
    const inputs = document.querySelectorAll('.js-input');
    const refreshBtn = document.querySelector('#refresh-btn');
    const answerPlaceholder = window.answerPlaceholder;
    console.log('Initial Answers:', answerPlaceholder);

    function makeDraggable(el) {
        el.addEventListener("dragstart", function (e) {
            e.dataTransfer.setData("text/plain", this.textContent);
            this.classList.add("opacity-50");
        });
        el.addEventListener("dragend", function () {
            this.classList.remove("opacity-50");
        });
    }

    refreshBtn.addEventListener('click', function (e) {
        e.preventDefault();

        inputs.forEach((input) => {
            if (input.innerHTML !== "____") input.innerHTML = "____";
        })

        if (Array.isArray(answerPlaceholder)) {
            answerPlaceholder.forEach((answerValue, index) => {
                const answerElement = answer.cloneNode(true);
                answerElement.dataset.id = index;
                answerElement.textContent = answerValue;
                makeDraggable(answerElement);
                answerCard.appendChild(answerElement);
            });
        }
        // Kalau Map → iterasi [key, value]
        else if (typeof answerPlaceholder === 'object' && answerPlaceholder !== null) {
            Object.entries(answerPlaceholder).forEach(([key, value]) => {
                if (Array.isArray(value)) {
                    value.forEach((val, index) => {
                        const answerElement = answer.cloneNode(true);
                        answerElement.dataset.id = `${val}-${index}`;
                        answerElement.textContent = val;
                        makeDraggable(answerElement);
                        answerCard.appendChild(answerElement);
                    });
                } else {
                    const answerElement = answer.cloneNode(true);
                    answerElement.dataset.id = key;
                    answerElement.textContent = value;
                    makeDraggable(answerElement);
                    answerCard.appendChild(answerElement);
                }
            });
        }

        // Clear isi placeholder
        if (Array.isArray(answerPlaceholder)) {
            answerPlaceholder.length = 0;
        } else if (typeof answerPlaceholder === 'object' && answerPlaceholder !== null) {
            for (const key in answerPlaceholder) {
                delete answerPlaceholder[key];
            }
        }

        window.answerPlaceholder = answerPlaceholder;
    })

})
