document.addEventListener('DOMContentLoaded', function () {
    const started_at = new Date().toISOString();
    window.started_at = started_at;
});

function answersFilled() {
    const inputs = document.querySelectorAll('.js-input');
    let allFilled = true;

    inputs.forEach((input) => {
        const content = input.textContent.trim();
        if (content === '' || content === '____') {
            allFilled = false;
            input.classList.add('border-4', 'border-red-500');
        } else {
            input.classList.remove('border-4', 'border-red-500');
        }
    });
    return allFilled;
}

async function submitQuiz(url) {
    if (!answersFilled()) {
        alert('Mohon lengkapi semua lingkaran sebelum mengirimkan jawaban.');
        console.log('Validation Failed: Not all inputs filled.');
        return; // Exit the function, blocking the submission
    }

    // Validation passed: ensure any temporary error borders are cleared
    document.querySelectorAll('.js-input').forEach((input) => {
        input.classList.remove('border-4', 'border-red-500');
    });

    const token = document.querySelector('input[name="_token"]').value;
    const started_at = window.started_at;
    const ended_at = new Date().toISOString();
    const duration = Math.floor((new Date(ended_at) - new Date(started_at)) / 1000); // TODO: hilangkan durasi dan hitung berdasarkan start dan end time
    const data = window.answerPlaceholder;
    console.log('Interactive answer submitted :', data, ' Duration:', duration); // TODO: hilangkan durasi dan hitung berdasarkan start dan end time

    try {
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': token,
            },
            body: JSON.stringify({ answers: data, duration: duration }), // TODO: hilangkan durasi dan hitung berdasarkan start dan end time
        });

        if (!response.ok) {
            throw new Error(response.message || 'Gagal mengumpulkan kuis');
        }

        const result = await response.json();
        alert(response.message || 'Berhasil mengumpulkan kuis');

        document.dispatchEvent(new CustomEvent('quiz-submitted', { detail: result }));

        // return { success: true, data: result }
    } catch (error) {
        alert(error.message || 'Terdapat error saat mengumpulkan kuis');
        // return { success: false, message: error.message }
    }
}

window.submitQuiz = submitQuiz;
