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
                <form action="" method="" class="w-full h-fit flex flex-col items-center justify-start mt-8">
                    @csrf
                    <p class="font-medium text-2xl">Bagaimana pengalaman Belajarmu?</p>
                    
                    <div class="rating-icons w-full h-fit gap-8 flex justify-center items-center text-center my-4">
                        <div id="rating-1" class="w-fit h-full flex flex-col items-center justify-start space-y-1" data-rating="1">
                            <label class="h-14 w-14 text-3xl rounded-full bg-gray-100 flex items-center justify-center cursor-pointer">
                                <input type="radio" name="rating" value="1" class="hidden" />
                                😠
                            </label>
                            Buruk
                        </div>
                        <div id="rating-2" class="w-fit h-full flex flex-col items-center justify-start space-y-1" data-rating="2">
                            <label class="h-14 w-14 text-3xl rounded-full bg-gray-100 flex items-center justify-center cursor-pointer">
                                <input type="radio" name="rating" value="2" class="hidden" />
                                😕
                            </label>
                            Kurang
                        </div>
                        <div id="rating-3" class="w-fit h-full flex flex-col items-center justify-start space-y-1" data-rating="3">
                            <label class="h-14 w-14 text-3xl rounded-full bg-gray-100 flex items-center justify-center cursor-pointer">
                                <input type="radio" name="rating" value="3" class="hidden" />
                                😐
                            </label>
                            Cukup
                        </div>
                        <div id="rating-4" class="w-fit h-full flex flex-col items-center justify-start space-y-1" data-rating="4">
                            <label class="h-14 w-14 text-3xl rounded-full bg-gray-100 flex items-center justify-center cursor-pointer">
                                <input type="radio" name="rating" value="4" class="hidden" />
                                🙂
                            </label>
                            Baik
                        </div>
                        <div id="rating-5" class="w-fit h-full flex flex-col items-center justify-start space-y-1" data-rating="5">
                            <label class="h-14 w-14 text-3xl rounded-full bg-gray-100 flex items-center justify-center cursor-pointer">
                                <input type="radio" name="rating" value="5" class="hidden" />
                                😁
                            </label>
                            Senang
                        </div>
                    </div>
                    
                    <div class="w-full h-fit mt-2">
                        <textarea name="review" placeholder="Berikan Ulasan Anda disini..." maxlength="300" class="w-full h-36 rounded border-2 focus:border-blue31 p-2 placeholder-gray-400"></textarea>
                        <div id="charCount" class="w-full text-right text-sm text-gray-500">0/300</div>
                    </div>
                
                    <div class="w-full h-fit flex items-center justify-center">
                        <button type="submit" class="w-1/2 p-2 bg-blue31 rounded text-white font-medium text-lg shadow-sm transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">Kirim Ulasan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    //Form feedback
    document.querySelectorAll('.rating-icons label').forEach((label) => {
        label.addEventListener('click', () => {
        document.querySelectorAll('.rating-icons label').forEach((r) => {
            r.classList.remove('bg-blue-300'); // Hilangkan highlight
        });
        label.classList.add('bg-blue-300'); // Tandai rating yang dipilih
        const selectedRating = label.querySelector('input').value;
        document.querySelector('input[name="rating"]').value = selectedRating;
        });
    });
    
    
    //Membatasi textarea
        const textarea = document.querySelector('textarea');
        const charCount = document.getElementById('charCount');
        const maxChars = 300;
        
        textarea.setAttribute('maxlength', maxChars);
    
        textarea.addEventListener('input', () => {
            const currentLength = textarea.value.length;
            charCount.textContent = `${currentLength}/${maxChars}`;
            });
    </script>