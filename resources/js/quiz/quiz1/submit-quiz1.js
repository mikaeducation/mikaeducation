async function submitQuiz(url, answers) {
    const token = document.querySelector('input[name="_token"]').value
    const data = window.answerPlaceholder

    try {
        const response = await fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": token,
            },
            body: JSON.stringify({ answers: answers })
        })

        if (!response.ok) {
            throw new Error(response.message || "Failed to submit quiz")
        }

        const result = await response.json();
        return { success: true, data: result }
    } catch (error) {
        return { success: false, message: error.message }
    }

}
