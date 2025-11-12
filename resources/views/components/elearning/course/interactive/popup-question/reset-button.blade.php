<button class="m-2 px-6 py-2 absolute bottom-28 right-12 text-white text-center bg-blue31 font-medium rounded transition hover:-translate-y-1 hover:scale-105"
    onclick="resetAndReload('{{ route('popup.reset', ['video_id' => $videoId, 'user_id' => $userId]) }}')">
        Reset Pertanyaan Popup
</button>

<script>
const CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').content;

async function resetAndReload(url) {

    if (!confirm(`Apakah anda ingin mengulang pertanyaan popup?`)) {
        return;
    }

    try {
        // Send request to the server
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': CSRF_TOKEN,
            }
        });

        if (response.ok) {
            alert('Data popup telah diulang');
            window.location.reload();
        } else {
            const errorData = await response.json();
            alert('Ada kesalahan saat mengatur ulang data popup');
            console.error(`Reset failed: ${errorData.message || 'Server error.'}`);
        }

    } catch (error) {
        console.error('Reset error:', error);
        alert('An unexpected error occurred during the reset process.');
    }
}
</script>
