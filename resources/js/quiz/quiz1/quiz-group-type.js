// NOTE: Javascript for Quiz 1

document.addEventListener("DOMContentLoaded", function () {
    const answers = document.querySelectorAll(".js-answer");
    const inputs = document.querySelectorAll(".js-input");
    const scoreBox = document.getElementById("quiz-score");
    const scoreLabel = scoreBox?.querySelector("h1");
    const nextBtn = document.getElementById("next-btn");
    const submitBtn = document.getElementById("submit-btn");
    const answerPlaceholder = [];
    window.answerPlaceholder = answerPlaceholder;

    answers.forEach((answer) => {
        answer.addEventListener("dragstart", function (e) {
            e.dataTransfer.setData("text/plain", this.textContent);
            e.dataTransfer.effectAllowed = "move";
            this.classList.add("opacity-50"); // visual feedback
        });

        answer.addEventListener("dragend", function () {
            console.log("Drag Ended");
            this.classList.remove("opacity-50");
        });
    });

    inputs.forEach((input) => {
        input.addEventListener("dragover", function (e) {
            e.preventDefault(); // needed to allow drop
            e.dataTransfer.dropEffect = "move";
            this.classList.add("border-dashed");
        });

        input.addEventListener("dragleave", function () {
            this.classList.remove("border-dashed");
        });

        input.addEventListener("drop", function (e) {
            e.preventDefault();
            this.classList.remove("border-dashed");

            const droppedText = e.dataTransfer.getData("text/plain");
            console.log("Dropped Text:", droppedText);
            let text = droppedText.trim();
            text = text.replace(/\s+/g, " ");
            if (!answerPlaceholder.includes(text)) {
                answerPlaceholder.push(text);
            }
            console.log("Current Answers:", answerPlaceholder);

            if (
                this.textContent.trim() === "" ||
                this.textContent.includes("____")
            ) {
                this.textContent = droppedText;

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

    document.addEventListener("quiz-submitted", function (e) {
        const result = e.detail;
        // Update score label
        answers.forEach((answer) => {
            answer.setAttribute("draggable", "false");
            answer.classList.add("opacity-70", "cursor-not-allowed");
        });

        if (scoreBox && result.data?.score !== undefined) {
            scoreBox.classList.remove("hidden");
            scoreLabel.textContent = `Score: ${result.data.score}`;
        }
        // Color coded answer feedback
        if (result.data?.details) {
            const inputs = document.querySelectorAll(".js-input");

            result.data.details.forEach((item, index) => {
                const input = Array.from(inputs).find(
                    (inp) => inp.textContent.trim() === item.answer
                );
                if (!input) return;

                input.classList.remove("border-blue31");

                if (item.correct) {
                    input.classList.add("border-green-500", "bg-green-100");
                } else {
                    input.classList.add("border-red-500", "bg-red-100");
                }

                if (item.explanation) {
                    input.setAttribute("title", item.explanation);
                }

                input.classList.add("cursor-help");
            });
        }
        nextBtn?.classList.remove("hidden");
        submitBtn?.classList.add("hidden");
    });

    document.addEventListener("quiz-refreshed", function (e) {
        answers.forEach((answer) => {
            answer.setAttribute("draggable", "true");
            answer.classList.remove("opacity-70", "cursor-not-allowed");
        });

        inputs.forEach((input) => {
            input.classList.remove(
                "border-red-500",
                "bg-red-100",
                "border-green-500",
                "bg-green-100"
            );
            input.classList.add("border-blue31");
            input.classList.remove("cursor-help");
            input.removeAttribute("title");
        });
        scoreBox.classList.add("hidden");
        scoreLabel.textContent = `Score: 0`;
        nextBtn?.classList.add("hidden");
        submitBtn?.classList.remove("hidden");
    });
});
