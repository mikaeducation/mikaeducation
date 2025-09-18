document.addEventListener("DOMContentLoaded", function () {
    const started_at = new Date().toISOString();
    window.started_at = started_at;
});

async function submitQuiz(url) {
    const token = document.querySelector('input[name="_token"]').value;
    const started_at = window.started_at;
    const ended_at = new Date().toISOString();
    const duration = Math.floor(
        (new Date(ended_at) - new Date(started_at)) / 1000
    );
    const data = window.answerPlaceholder;
    console.log("Interactive answer submitted :", data, " Duration:", duration);

    try {
        const response = await fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": token,
            },
            body: JSON.stringify({ answers: data, duration: duration }),
        });

        if (!response.ok) {
            throw new Error(response.message || "Gagal mengumpulkan kuis");
        }

        const result = await response.json();
        alert(response.message || "Berhasil mengumpulkan kuis");

        if (result.data?.details) {
            const inputs = document.querySelectorAll(".js-input");

            result.data.details.forEach((item, index) => {
                const input = inputs[index];
                if (!input) return;

                input.classList.remove("border-blue31");

                if (item.correct) {
                    input.classList.add("border-green-500", "bg-green-100");
                } else {
                    input.classList.add("border-red-500", "bg-red-100");
                }
            });
        }

        // return { success: true, data: result }
    } catch (error) {
        alert(error.message || "Terdapat error saat mengumpulkan kuis");
        // return { success: false, message: error.message }
    }
}

window.submitQuiz = submitQuiz;
