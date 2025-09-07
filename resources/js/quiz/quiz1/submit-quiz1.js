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
            throw new Error(response.message || "Gagal mengumpulkan kuis")
        }

        const result = await response.json();
        alert(result.message || "Berhasil mengumpulkan kuis")

        // return { success: true, data: result }
    } catch (error) {
        alert(error.message || "Terdapat error saat mengumpulkan kuis")
        // return { success: false, message: error.message }
    }

}

window.submitQuiz = submitQuiz
