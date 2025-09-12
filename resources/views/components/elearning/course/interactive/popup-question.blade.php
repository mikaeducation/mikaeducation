<div id="popupQuiz" class="relative z-50 hidden w-3/4 md:w-0" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed w-full inset-0 bg-black bg-opacity-55 transition-opacity" aria-hidden="true"></div>
    <div class="fixed inset-0 z-10 w-full md:w-screen overflow-y-auto">
        <div class="flex min-h-screen items-center justify-center p-4 text-center sm:p-0">
            <div class="w-full relative transform overflow-hidden rounded bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="flex flex-col items-center justify-center space-y-4">
                        <div class="mx-auto w-full flex size-12 shrink-0 items-center justify-center rounded-full sm:mx-0 sm:size-10">
                            <svg class="size-10 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                            </svg>
                        </div>
                        <div class="text-center pb-4 space-y-4 text-blue31">
                            <h3 class="text-3xl font-semibold ">Kumpulkan Jawaban??</h3>
                            <p class="mt-2">
                                Jika telah yakin dengan jawaban dari penilaian yang dilakukan, Anda dapat mengumpulkan jawaban dan melanjutkan untuk mengerjakan bagian evaluasi pembelajaran.
                                <br><br> Jika memerlukan bantuan lebih lanjut,<a href="https://wa.me/082156226440 " class="relative text-blue31 font-medium before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full"> hubungi tim dukungan kami disini.</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="bg-bluee3 w-full bg-opacity-40 px-4 py-3 flex justify-center space-x-4 sm:px-6 text-lg font-medium">
                    @foreach ($answers as $i => $answer)
                    <button id="answer-{{ $i }}" type="button" class="w-1/3 justify-center rounded border-2 border-blue31 px-3 py-2 text-blue31 hover:-translate-y-1 hover:scale-110">{{ $answer }}</button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>