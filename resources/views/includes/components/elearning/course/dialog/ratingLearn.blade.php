<div id="rating-learn" class="relative z-50 w-full h-full hidden">
    <div class="fixed w-full inset-0 bg-black bg-opacity-85 transition-opacity"></div>            
    <div class="fixed inset-0 z-10 w-screen h-screen flex justify-center items-center">
        <div class="w-1/2 relative transform rounded bg-white shadow-xl transition-all sm:my-8 lg:w-[35%] lg:h-[90%]">
            <div class="w-full h-full flex flex-col items-center justify-start px-12 py-2 text-blue31 rounded">
                <div class="w-full h-28 flex items-center justify-center">
                    <img src="{{ asset('images/wavinghand.gif') }}" alt="" class="h-full w-28">
                </div>
                <div class="w-full h-fit text-center space-y-3">
                    <h3 class="text-3xl font-semibold">Selamat, selesai Belajar!</h3>
                    <p class="opacity-80">Berikan ulasan dan rating untuk proses pembelajaran yang telah dilakukan. Saran dan masukan Anda sangat membantu Kami dalam mengembangkan program pembelajaran yang lebih baik.</p>
                </div>
                <form action="{{ route('module.review.submit') }}" method="POST" class="w-full h-fit flex flex-col items-center justify-start mt-8">
                    @csrf
                    <input type="hidden" name="module_id" value="1" />
                    <p class="font-medium text-2xl">Bagaimana pengalaman Belajarmu?</p>
                    {{-- masuk ke atribut user_rating --}}
                    <div class="rating-icons w-full h-fit gap-8 flex justify-center items-center text-center my-4">
                        <div id="rating-1" class="w-fit h-full flex flex-col items-center justify-start space-y-1" data-rating="1">
                            <label class="rating-label h-14 w-14 text-3xl rounded-full bg-gray-100 flex items-center justify-center cursor-pointer">
                                <input id="rating_input_1" type="radio" name="rating" value="1" class="hidden" />
                                😔
                            </label>
                            Buruk
                        </div>
                        <div id="rating-2" class="w-fit h-full flex flex-col items-center justify-start space-y-1" data-rating="2">
                            <label class="rating-label h-14 w-14 text-3xl rounded-full bg-gray-100 flex items-center justify-center cursor-pointer">
                                <input id="rating_input_2" type="radio" name="rating" value="2" class="hidden" />
                                😕
                            </label>
                            Kurang
                        </div>
                        <div id="rating-3" class="w-fit h-full flex flex-col items-center justify-start space-y-1" data-rating="3">
                            <label class="rating-label h-14 w-14 text-3xl rounded-full bg-gray-100 flex items-center justify-center cursor-pointer">
                                <input id="rating_input_3" type="radio" name="rating" value="3" class="hidden" />
                                😐
                            </label>
                            Cukup
                        </div>
                        <div id="rating-4" class="w-fit h-full flex flex-col items-center justify-start space-y-1" data-rating="4">
                            <label class="rating-label h-14 w-14 text-3xl rounded-full bg-gray-100 flex items-center justify-center cursor-pointer">
                                <input id="rating_input_4" type="radio" name="rating" value="4" class="hidden" />
                                🙂
                            </label>
                            Baik
                        </div>
                        <div id="rating-5" class="w-fit h-full flex flex-col items-center justify-start space-y-1" data-rating="5">
                            <label class="rating-label h-14 w-14 text-3xl rounded-full bg-gray-100 flex items-center justify-center cursor-pointer">
                                <input id="rating_input_5" type="radio" name="rating" value="5" class="hidden" />
                                😁
                            </label>
                            Senang
                        </div>
                    </div>
                    {{-- masuk ke atribut comment_review --}}
                    <div class="w-full h-fit mt-2">
                        <textarea name="review" placeholder="Berikan Ulasan Anda disini..." maxlength="300" class="w-full h-36 rounded border-2 focus:border-blue31 p-2 placeholder-gray-400"></textarea>
                        <div id="charCount" class="w-full text-right text-sm text-gray-500">0/300</div>
                    </div>
                
                    <div class="w-full h-fit flex items-center justify-center">
                        <button id="rating-submit-btn"  type="submit" class="w-1/2 p-2 bg-blue31 rounded text-white font-medium text-lg shadow-sm transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">Kirim Ulasan</button>
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

        // Tambahkan event pada input, bukan label
        input.addEventListener('change', () => {
            // Reset semua label
            labels.forEach(l => l.classList.remove('bg-blue-100]'));

            // Highlight label yang dipilih
            label.classList.add('bg-blue-100');
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
    const form = document.querySelector('#rating-learn form');
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
