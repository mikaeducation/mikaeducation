<div id="rating-learn" class="relative z-50 w-full h-full hidden">
    <div class="fixed w-full inset-0 bg-black bg-opacity-85 transition-opacity"></div>            
    <div class="fixed inset-0 z-10 flex items-center justify-center bg-black bg-opacity-50 overflow-y-auto">
        <div class="relative transform rounded bg-white shadow-xl transition-all sm:my-8 w-11/12 md:w-2/4 xl:w-2/5 max-h-screen overflow-y-auto pb-4">
            <div class="w-full h-full flex flex-col items-center justify-center px-12 py-2 text-blue31 rounded">
                <div class="w-full h-16 md:h-28 flex items-center justify-center">
                    <img src="{{ asset('images/wavinghand.gif') }}" alt="" class="h-full w-16 md:w-28">
                </div>
                <div class="w-full h-fit text-center space-y-3">
                    <h3 class="text-xl md:text-3xl font-semibold">Selamat, selesai Belajar!</h3>
                    <p class="opacity-80 text-sm md:text-base">Berikan ulasan dan rating untuk proses pembelajaran yang telah dilakukan. Saran dan masukan Anda sangat membantu Kami dalam mengembangkan program pembelajaran yang lebih baik.</p>
                </div>
                <form action="{{ route('module.review.submit') }}" method="POST" class="w-full h-fit flex flex-col items-center justify-center mt-4 md:mt-8">
                    @csrf
                    <input type="hidden" name="module_id" value="1" />
                    <p class="font-medium text-lg md:text-2xl text-center">Bagaimana pengalaman Belajarmu?</p>
                    {{-- masuk ke atribut user_rating --}}
                    <div class="rating-icons w-full h-fit gap-4 md:gap-8 flex flex-wrap justify-center items-center text-center my-4">
                        <div id="rating-1" class="w-fit h-full flex flex-col items-center justify-start space-y-1" data-rating="1">
                            <label class="rating-label h-7 md:h-14 w-7 md:w-14 text-3xl rounded-full bg-gray-100 hover:bg-blue31 transition-colors duration-200 flex items-center justify-center cursor-pointer">
                                <input id="rating_input_1" type="radio" name="rating" value="1" class="hidden" />
                                😔
                            </label>
                            Buruk
                        </div>
                        <div id="rating-2" class="w-fit h-full flex flex-col items-center justify-start space-y-1" data-rating="2">
                            <label class="rating-label h-7 md:h-14 w-7 md:w-14 text-3xl rounded-full bg-gray-100 hover:bg-blue31 transition-colors duration-200 flex items-center justify-center cursor-pointer">
                                <input id="rating_input_2" type="radio" name="rating" value="2" class="hidden" />
                                😕
                            </label>
                            Kurang
                        </div>
                        <div id="rating-3" class="w-fit h-full flex flex-col items-center justify-start space-y-1" data-rating="3">
                            <label class="rating-label h-7 md:h-14 w-7 md:w-14 text-3xl rounded-full bg-gray-100 hover:bg-blue31 transition-colors duration-200 flex items-center justify-center cursor-pointer">
                                <input id="rating_input_3" type="radio" name="rating" value="3" class="hidden" />
                                😐
                            </label>
                            Cukup
                        </div>
                        <div id="rating-4" class="w-fit h-full flex flex-col items-center justify-start space-y-1" data-rating="4">
                            <label class="rating-label h-7 md:h-14 w-7 md:w-14 text-3xl rounded-full bg-gray-100 hover:bg-blue31 transition-colors duration-200 flex items-center justify-center cursor-pointer">
                                <input id="rating_input_4" type="radio" name="rating" value="4" class="hidden" />
                                🙂
                            </label>
                            Baik
                        </div>
                        <div id="rating-5" class="w-fit h-full flex flex-col items-center justify-start space-y-1" data-rating="5">
                            <label class="rating-label h-7 md:h-14 w-7 md:w-14 text-3xl rounded-full bg-gray-100 hover:bg-blue31 transition-colors duration-200 flex items-center justify-center cursor-pointer">
                                <input id="rating_input_5" type="radio" name="rating" value="5" class="hidden" />
                                😁
                            </label>
                            Senang
                        </div>
                    </div>
                    {{-- masuk ke atribut comment_review --}}
                    <div class="w-full h-fit mt-2">
                        <textarea name="review" placeholder="Berikan Ulasan Anda disini..." maxlength="300" class="w-full h-24 md:h-36 text-sm md:text-base rounded border-2 focus:border-blue31 p-2 placeholder-gray-400"></textarea>
                        <div id="charCount" class="w-full text-right text-xs md:text-sm text-gray-500">0/300</div>
                    </div>
                
                    <div class="w-full h-fit flex items-center justify-center">
                        <button id="rating-submit-btn"  type="submit" class="w-1/2 p-2 bg-blue31 rounded text-white font-medium text-base md:text-lg shadow-sm transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">Kirim Ulasan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const labels = document.querySelectorAll('.rating-label');

        labels.forEach(label => {
            const input = label.querySelector('input[type="radio"]');

            // Event saat input (radio) berubah (dipilih)
            input.addEventListener('change', () => {
                // Reset semua label: hapus bg-blue31 dan kembalikan ke gray
                labels.forEach(l => {
                    l.classList.remove('bg-blue31');
                    l.classList.add('bg-gray-100');
                });

                // Set label yang dipilih menjadi bg-blue31
                label.classList.remove('bg-gray-100');
                label.classList.add('bg-blue31');
            });
        });

        // Batas karakter textarea
        const textarea = document.querySelector('textarea');
        const charCount = document.getElementById('charCount');
        const maxChars = 300;
        if (textarea && charCount) {
            textarea.setAttribute('maxlength', maxChars);
            textarea.addEventListener('input', () => {
                charCount.textContent = `${textarea.value.length}/${maxChars}`;
            });
        }

        // Validasi saat submit
        const form = document.querySelector('form[action="{{ route('module.review.submit') }}"]');
        if (form) {
            form.addEventListener('submit', function (e) {
                const selected = document.querySelector('input[name="rating"]:checked');
                if (!selected) {
                    e.preventDefault();
                    alert("Pilih rating terlebih dahulu!");
                }
            });
        }
    });
</script>

