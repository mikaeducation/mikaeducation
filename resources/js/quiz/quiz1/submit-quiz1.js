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
        throw new Error('Validasi gagal: Kuis belum lengkap.'); 
    }    

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
        const latestScore = Math.round(result.data.score);

        const scoreContainer = document.getElementById('quizScoreContainer');
        let latestScoreElement = document.getElementById('latestScoreDisplay');
        const highScoreElement = document.getElementById('highScoreDisplay');

        if (!latestScoreElement && scoreContainer && highScoreElement) {
            latestScoreElement = document.createElement('h1');
            latestScoreElement.id = 'latestScoreDisplay';
            latestScoreElement.className = 'text-white bg-blue31 h-full w-1/3 rounded flex items-center justify-center';
            scoreContainer.insertBefore(latestScoreElement, highScoreElement);
        }
        
        if (latestScoreElement) {
            latestScoreElement.textContent = `Nilai Terbaru: ${latestScore}`;
        }
        
        const currentHighScore = parseFloat(highScoreElement.textContent.replace(/[^\d.]/g, '')) || 0;
        
        if (latestScore > currentHighScore) {
            highScoreElement.textContent = `Nilai Tertinggi: ${latestScore}`;
        }
        
        scoreContainer?.classList.remove('hidden'); 
        
        const currentPath = window.location.pathname;
        const quizStatusKey = `quiz_submitted_${currentPath}`; 
        
        sessionStorage.setItem(quizStatusKey, 'true'); 
        
        alert('Kuis berhasil dikumpulkan. Klik "Selanjutnya" untuk melanjutkan.');
        
        document.dispatchEvent(new CustomEvent('quiz-submitted', { detail: result }));

    } catch (error) {
        throw error        // return { success: false, message: error.message }
    }
}

window.submitQuiz = submitQuiz;
