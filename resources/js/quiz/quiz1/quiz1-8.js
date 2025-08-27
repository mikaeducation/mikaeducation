// NOTE: Javascript for Quiz 7
// Game Scene 1
document.addEventListener("DOMContentLoaded", function () {
    const answerPlaceholder = {};
    const answers = document.querySelectorAll(".js-answer");
    const inputs = document.querySelectorAll(".js-input");

    answers.forEach((answer) => {
        answer.addEventListener("dragstart", function (e) {
            e.dataTransfer.setData("text/plain", this.textContent);
            this.classList.add("opacity-50"); // visual feedback
        });

        answer.addEventListener("dragend", function () {
            this.classList.remove("opacity-50");
        });
    });

    inputs.forEach((input) => {
        input.addEventListener("dragover", function (e) {
            e.preventDefault(); // needed to allow drop
            this.classList.add("border-dashed", "border-2");
        });

        input.addEventListener("dragleave", function () {
            this.classList.remove("border-dashed", "border-2");
        });

        input.addEventListener("drop", function (e) {
            e.preventDefault();
            this.classList.remove("border-dashed", "border-2");

            const droppedText = e.dataTransfer.getData("text/plain");

            if (
                this.textContent.trim() === "" ||
                this.textContent.includes("____")
            ) {
                this.textContent = droppedText;
                const id = this.id;
                answerPlaceholder[id] = droppedText;
                console.log("Current Answers:", answerPlaceholder);

                // Remove the dragged element from the list
                const draggedElements = document.querySelectorAll(".js-answer");
                draggedElements.forEach((el) => {
                    if (el.textContent.trim() === droppedText.trim()) {
                        el.remove();
                    }
                });
            }
        });
    });
});
