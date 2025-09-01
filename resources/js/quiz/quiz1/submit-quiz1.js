async function submitQuiz(url) {
    const token = document.querySelector('input[name="_token"]').value
    const data = window.answerPlaceholder
    console.log("Interactive answer submitted :", data)

    try {
        const response = await fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": token,
            },
            body: JSON.stringify({ answers: data })
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
