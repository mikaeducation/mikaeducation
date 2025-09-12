document.addEventListener("DOMContentLoaded", function () {
    const started_at = new Date().toISOString();
    window.started_at = started_at;
});

async function submitQuiz(url) {
    const token = document.querySelector('input[name="_token"]').value
    const started_at = window.started_at
    const ended_at = new Date().toISOString();
    const duration = Math.floor((new Date(ended_at) - new Date(started_at)) / 1000);
    const data = window.answerPlaceholder
    console.log("Interactive answer submitted :", data, " Duration:", duration);

    try {
        const response = await fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": token,
            },
            body: JSON.stringify({ answers: data, duration: duration })
        })

        if (!response.ok) {
            throw new Error(response.message || "Failed to submit quiz")
        }

        const result = await response.json();
        alert(result.message || "Quiz submitted successfully")

        // return { success: true, data: result }
    } catch (error) {
        alert(error.message || "An error occurred while submitting the quiz")
        // return { success: false, message: error.message }
    }

}

window.submitQuiz = submitQuiz
