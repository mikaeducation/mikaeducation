<div class="font-medium space-y-2">
    <div class="w-full flex items-center justify-between mb-4">
        <h3>Semua Notifikasi (4)</h3>
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
    <div class="w-full flex flex-col space-y-4">
        <div class="w-full px-4 md:flex rounded cursor-pointer border-2 border-bluee3 gap-4 notification">
            <div class="md:w-5/6 w-full h-fit flex items-center border-b-2 md:border-b-0 border-bluee3">
                <div class="flex w-1 sm:w-3 h-2 sm:h-3 bg-blue31 rounded-full px-1 mr-2 bullet"></div>
                <img src="{{ asset('images/logo-1.png') }}" alt="" class="sm:sm:w-16 w-12  p-2 rounded-full">
                <div class="w-full md:border-r-2 border-bluee3 flex flex-col leading-5 ml-2 space-y-2 py-2">
                    <p class="text-base md:text-lg text-justify">Anda berhasil mendapatkan sertifikat program pembelajaran.</p>
                    <p id="accessTime" class="text-xs md:text-sm"></p>
                </div>
            </div>
            <div class="md:w-1/6 w-full flex items-center justify-center py-2 gap-6 action-buttons">
                <button class="read-btn text-blue31 hover:text-blue6a">Baca</button>
                <button class="delete-btn text-pinkee hover:text-blue6a">Hapus</button>
            </div>
        </div>
        <div class="w-full px-4 md:flex rounded cursor-pointer border-2 border-bluee3 gap-4 notification">
            <div class="md:w-5/6 w-full h-fit flex items-center border-b-2 md:border-b-0 border-bluee3">
                <div class="flex w-1 sm:w-3 h-2 sm:h-3 bg-blue31 rounded-full px-1 mr-2 bullet"></div>
                <img src="{{ asset('images/logo-1.png') }}" alt="" class="sm:w-16 w-12 p-2 rounded-full">
                <div class="w-full md:border-r-2 border-bluee3 flex flex-col leading-5 ml-2 space-y-2 py-2">
                    <p class="text-base md:text-lg text-justify">Anda berhasil mendapatkan sertifikat program pembelajaran.</p>
                    <p id="accessTime" class="text-xs md:text-sm"></p>
                </div>
            </div>
            <div class="md:w-1/6 w-full flex items-center justify-center py-2 gap-6 action-buttons">
                <button class="read-btn text-blue31 hover:text-blue6a">Baca</button>
                <button class="delete-btn text-pinkee hover:text-blue6a">Hapus</button>
            </div>
        </div>
        <div class="w-full px-4 md:flex rounded cursor-pointer border-2 border-bluee3 gap-4 notification">
            <div class="md:w-5/6 w-full flex items-center border-b-2 md:border-b-0 border-bluee3">
                <div class="flex w-1 sm:w-3 h-2 sm:h-3 bg-bluee3 rounded-full px-1 mr-2 bullet"></div>
                <img src="{{ asset('images/logo-1.png') }}" alt="" class="sm:w-16 w-12 p-2 rounded-full">
                <div class="w-full md:border-r-2 border-bluee3 flex flex-col leading-5 ml-2 space-y-2 py-2">
                    <p class="text-base md:text-lg text-justify">Anda berhasil mendapatkan sertifikat program pembelajaran.</p>
                    <p id="accessTime" class="text-xs md:text-sm"></p>
                </div>
            </div>
            <div class="w-full md:w-1/6 flex items-center justify-center py-2 gap-6 action-buttons">
                <button class="read-btn hidden text-blue31 hover:text-blue6a">Baca</button>
                <button class="delete-btn text-pinkee hover:text-blue6a">Hapus</button>
            </div>
        </div>
        <div class="w-full px-4 md:flex rounded cursor-pointer border-2 border-bluee3 gap-4 notification">
            <div class="md:w-5/6 w-full flex items-center border-b-2 md:border-b-0 border-bluee3">
                <div class="flex w-1 sm:w-3 h-2 sm:h-3 bg-bluee3 rounded-full px-1 mr-2 bullet"></div>
                <img src="{{ asset('images/logo-1.png') }}" alt="" class="sm:w-16 w-12 p-2 rounded-full">
                <div class="w-full md:border-r-2 border-bluee3 flex flex-col leading-5 ml-2 space-y-2 py-2">
                    <p class="text-base md:text-lg text-justify">Anda berhasil mendapatkan sertifikat program pembelajaran.</p>
                    <p id="accessTime" class="text-xs md:text-sm"></p>
                </div>
            </div>
            <div class="w-full md:w-1/6 flex items-center justify-center py-2 gap-6 action-buttons">
                <button class="read-btn hidden text-blue31 hover:text-blue6a">Baca</button>
                <button class="delete-btn text-pinkee hover:text-blue6a">Hapus</button>
            </div>
        </div>
    </div>
</div>

<script>
    // JS untuk notifikasi
        window.addEventListener("load", function () {
            const accessTime = new Date();
            const formattedTime =
                String(accessTime.getDate()).padStart(2, "0") +
                "-" +
                String(accessTime.getMonth() + 1).padStart(2, "0") +
                "-" +
                accessTime.getFullYear() +
                " " +
                String(accessTime.getHours()).padStart(2, "0") +
                ":" +
                String(accessTime.getMinutes()).padStart(2, "0");
            document.querySelectorAll("#accessTime").forEach((el) => {
                el.textContent = formattedTime;
            });
        });

        // Event listener untuk tombol "Baca" dan "Hapus"
        document.addEventListener("click", function (event) {
            if (event.target.classList.contains("read-btn")) {
                const notification = event.target.closest(".notification");
                const bullet = notification.querySelector(".bullet");
                const readButton = notification.querySelector(".read-btn");

                bullet.classList.remove("bg-blue31");
                bullet.classList.add("bg-bluee3");
                readButton.remove();
            }
            if (event.target.classList.contains("delete-btn")) {
                const notification = event.target.closest(".notification");
                notification.remove();
            }
        });
</script>