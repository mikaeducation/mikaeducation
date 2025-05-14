<div class="font-medium space-y-2">
    <div class="w-full flex items-center justify-between mb-4">
        <h3>Semua Notifikasi ({{ $notifications->filter(fn($n) => isset($n->user_id) && !$n->is_read)->count() }})</h3>
        <button id="" class="flex items-center justify-center p-1 border-2 border-blue31 rounded-full">
            <svg class="" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 12L5 4" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                <path d="M19 20L19 18" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                <path d="M5 20L5 16" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                <path d="M19 12L19 4" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                <path d="M12 7L12 4" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                <path d="M12 20L12 12" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                <circle cx="5" cy="14" r="2" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                <circle cx="12" cy="9" r="2" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                <circle cx="19" cy="15" r="2" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </button>
    </div>
    <div id="recapNotification" class="w-full flex flex-col space-y-4">
        @forelse ($notifications as $notif)
            @php
                $isLog = isset($notif->user_id); // Cek apakah dari tabel user_logs
                $isRead = $isLog ? $notif->is_read : false;
                $type = $isLog ? $notif->log_type : 'admin';
                $time = \Carbon\Carbon::parse($notif->created_at)->format('d-m-Y H:i');
                $text = '';

                if ($type === 'progress') {
                    $text = $notif->text_log;
                } elseif ($type === 'certificate') {
                    $text = $notif->text_log;
                } elseif ($type === 'admin') {
                     // Format untuk pesan admin, dengan chat1 dan chat2
                    $text = 'Pesan yang Anda ajukan: ';
                    $text .= $notif->chat1 ? "(1) " . $notif->chat1 : "";
                    $text .= $notif->chat2 ? "; (2) " . $notif->chat2 : " ";
                    $text .= ". \nRespon atas Pesan Anda: " . $notif->text_log;
                }
            @endphp
            <div data-id="{{ $isLog ? $notif->id : '' }}" data-type="{{ $type }}" class="notification w-full px-4 md:flex rounded cursor-pointer border-2 border-bluee3 gap-4">
                <div class="md:w-5/6 w-full h-fit flex items-center border-b-2 md:border-b-0 border-bluee3">
                    <div class="flex w-1 sm:w-3 h-2 sm:h-3 {{ $isRead ? 'bg-bluee3' : 'bg-blue31' }} rounded-full px-1 mr-2 bullet"></div>
                    <img src="{{ asset('images/logo-1.png') }}" alt="" class="sm:sm:w-16 w-12  p-2 rounded-full">
                    <div class="w-full md:border-r-2 border-bluee3 flex flex-col leading-5 ml-2 space-y-2 py-2 pr-4">
                        <p class="text-sm md:text-base text-justify">{{ $text }}</p>
                        <p class="text-xs access-time">{{ $time }}</p>
                    </div>
                </div>
                <div class="md:w-1/6 w-full flex items-center justify-center py-2 gap-6 action-buttons">
                    @if ($type === 'certificate' && $isRead)
                        <a href="/preLearn" class="text-blue31 hover:text-blue6a">Lihat</a>
                    @elseif (!$isRead)
                        <button class="read-btn text-blue31 hover:text-blue6a">Baca</button>
                    @endif
                    <button class="delete-btn text-pinkee hover:text-blue6a">Hapus</button>
                </div>
            </div>
        @empty
            <p class="text-blue31 font-medium text-base">Belum ada notifikasi saat ini.</p>
        @endforelse
    </div>
</div>

<script>
    document.addEventListener("click", function (event) {
        if (event.target.classList.contains("read-btn")) {
            const notification = event.target.closest(".notification");
            const bullet = notification.querySelector(".bullet");
            const readButton = event.target;
            
            const logId = notification.dataset.id;
            
            fetch(`/profile/notification/read/${logId}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Content-Type': 'application/json'
                }
            }).then(res => {
                if (res.ok) {
                    bullet.classList.remove("bg-blue31");
                    bullet.classList.add("bg-bluee3");
                    
                    readButton.remove();

                    if (type === 'certificate') {
                        const actionButtons = notification.querySelector(".action-buttons");
                        const lihatButton = document.createElement("a");
                        lihatButton.href = "/preLearn";
                        lihatButton.className = "text-blue31 hover:text-blue6a";
                        lihatButton.textContent = "Lihat";
                        actionButtons.prepend(lihatButton); // Tambahkan di posisi awal
                    }
                }
            });
        }
    });

</script>
