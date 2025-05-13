{{-- DIALOG PAGE 2_0 - DASHBOARD ASESSMEN BEFORE ASSESMENT --}}
<div id="modalDialogAsessment" class="relative z-50 hidden w-3/4 md:w-0" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed w-full inset-0 bg-black bg-opacity-55 transition-opacity" aria-hidden="true"></div>            
    <div class="fixed inset-0 z-10 w-full md:w-screen overflow-y-auto">
        <div class="flex min-h-screen items-center justify-center p-4 text-center sm:p-0">
            <div class="w-full relative transform overflow-hidden rounded bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="flex flex-col items-center justify-center">
                        <div class="mx-auto w-full flex size-12 shrink-0 items-center justify-center rounded-full sm:mx-0 sm:size-10">
                            <svg class="size-10 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                            </svg>
                        </div>
                        <div class="text-center pb-4">
                            <h3 class="text-3xl font-semibold text-blue31" id="modal-title">Mulai Penilaian?</h3>
                            <div class="mt-4">
                                <p class="text-medium text-blue31">Untuk dapat melanjutkan proses pembelajaran, Anda diharuskan untuk menjawab beberapa pertanyaan berikut sebagai penilaian dari proses pembelajaran yang akan Anda lakukan.
                                    <br><br>Jika memerlukan bantuan lebih lanjut, <a href="https://wa.me/082156226440 " class="relative text-blue31 font-medium before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full"> hubungi tim dukungan kami disini.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-bluee3 w-full bg-opacity-40 px-4 py-3 flex justify-center space-x-4 sm:px-6 text-lg font-medium">
                    <button id="btnAsessmentCancel" type="button" class="inline-flex w-1/3 justify-center rounded border-2 border-blue31 px-3 py-2 text-blue31 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                        Kembali
                    </button>
                    <button id="btnAsessmentConfirm" type="button" class="inline-flex w-1/3 justify-center items-center rounded bg-blue31 text-white transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                        Mulai
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- DIALOG PAGE 2_1 - ASSESMENT I FORM--}}
<div id="modalDialogBack_Asessmen1" class="relative z-50 hidden w-3/4 md:w-0" aria-labelledby="modal-title" role="dialog" aria-modal="true">
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
                            <h3 class="text-3xl font-semibold ">Keluar dari Penilaian?</h3>
                            <div class="mt-2">
                                <p class="">Apakah Anda yakin ingin keluar dari Penilaian dan kembali ke halaman sebelumnya? <span class="font-medium">Perubahan atau progres Anda saat ini mungkin tidak disimpan.</span></p>
                                <br> Jika memerlukan bantuan lebih lanjut,<a href="https://wa.me/082156226440 " class="relative text-blue31 font-medium before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full"> hubungi tim dukungan kami disini.</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-bluee3 w-full bg-opacity-40 p-4 flex justify-center space-x-4 sm:px-6 text-lg font-medium">
                    <button id="btnCancelBack" type="button" class="inline-flex w-1/3 justify-center rounded border-2 border-blue31 px-3 py-2 text-blue31 shadow-sm transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                        Lanjut Belajar
                    </button>
                    <button id="btnConfirmBack" type="button" class="inline-flex w-1/3 justify-center rounded bg-blue31 hover:border-2 hover:border-blue31 px-3 py-2 text-white transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                        Keluar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modalDialogSubmit_Asessmen1" class="relative z-50 hidden w-3/4 md:w-0" aria-labelledby="modal-title" role="dialog" aria-modal="true">
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
                    <button id="btnSubmitBack" type="button" class="w-1/3 justify-center rounded border-2 border-blue31 px-3 py-2 text-blue31 hover:-translate-y-1 hover:scale-110">Kembali</button>
                    <button id="btnSubmitConfirm" type="submit" class="w-1/3 justify-center rounded bg-blue31 px-3 py-2 text-white hover:-translate-y-1 hover:scale-110">Kumpulkan</button>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- DIALOG PAGE 2_0 - DASHBOARD ASESSMEN AFTER ASSESMENT --}}
<div id="modalDialogBack_Asessmen1_Ulangi" class="relative z-50 hidden w-3/4 md:w-0" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed w-full inset-0 bg-black bg-opacity-55 transition-opacity" aria-hidden="true"></div>            
    <div class="fixed inset-0 z-10 w-full md:w-screen overflow-y-auto">
        <div class="flex min-h-screen items-center justify-center p-4 text-center sm:p-0">
            <div class="w-full relative transform overflow-hidden rounded bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="flex flex-col items-center justify-center">
                        <div class="mx-auto w-full flex size-12 shrink-0 items-center justify-center rounded-full sm:mx-0 sm:size-10">
                            <svg class="size-10 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                            </svg>
                        </div>
                        <div class="text-center pb-4">
                            <h3 class="text-3xl font-semibold text-blue31" id="modal-title">Ulangi Penilaian?</h3>
                            <div class="mt-4">
                                <p class="text-medium text-blue31">Anda dapat mengulangi penilaian jika dirasa belum memiliki nilai yang tinggi untuk lulus, Anda diharuskan untuk menjawab beberapa pertanyaan pada penilaian berikut dengan benar.
                                    <br><br>Jika memerlukan bantuan lebih lanjut, <a href="https://wa.me/082156226440 " class="relative text-blue31 font-medium before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full"> hubungi tim dukungan kami disini.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-bluee3 w-full bg-opacity-40 px-4 py-3 flex justify-center space-x-4 sm:px-6 text-lg font-medium">
                    <button id="btnBack_Ulangi" type="button" class="inline-flex w-1/3 justify-center rounded border-2 border-blue31 px-3 py-2 text-blue31 shadow-sm transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                        Kembali
                    </button>
                    <button id="btnStartLearning_Ulangi" type="button" class="inline-flex w-1/3 justify-center rounded bg-blue31 hover:border-2 hover:border-blue31 px-3 py-2 text-white transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                        Mulai
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modalDialogStart_Asessmen1_Eval" class="relative z-50 hidden w-3/4 md:w-0" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed w-full inset-0 bg-black bg-opacity-55 transition-opacity" aria-hidden="true"></div>            
    <div class="fixed inset-0 z-10 w-full md:w-screen overflow-y-auto">
        <div class="flex min-h-screen items-center justify-center p-4 text-center sm:p-0">
            <div class="w-full relative transform overflow-hidden rounded bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="flex flex-col items-center justify-center">
                        <div class="mx-auto w-full flex size-12 shrink-0 items-center justify-center rounded-full sm:mx-0 sm:size-10">
                            <svg class="size-10 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                            </svg>
                        </div>
                        <div class="text-center pb-4">
                            <h3 class="text-3xl font-semibold text-blue31" id="modal-title">Lanjut ke Evaluasi?</h3>
                            <div class="mt-4">
                                <p class="text-medium text-blue31">Anda akan melanjutkan ke tahapan evaluasi program pembelajaran, kami membutuhkan penilaian Anda terkait <span class="font-medium">Keyakinanan penggunaan MIKA 1.0</span>. Semua jawaban yang Anda berikan akan tersimpan dengan baik dan terjamin kerahasiannya.
                                    <br><br>Jika memerlukan bantuan lebih lanjut, <a href="https://wa.me/082156226440 " class="relative text-blue31 font-medium before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full"> hubungi tim dukungan kami disini.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-bluee3 w-full bg-opacity-40 px-4 py-3 flex justify-center space-x-4 sm:px-6 text-lg font-medium">
                    <button id="btnBack_Eval" type="button" class="inline-flex w-1/3 justify-center rounded border-2 border-blue31 px-3 py-2 text-blue31 shadow-sm transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                        Kembali
                    </button>
                    <button id="btnStartLearning_Eval" type="button" class="inline-flex w-1/3 justify-center rounded bg-blue31 hover:border-2 hover:border-blue31 px-3 py-2 text-white transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                        Mulai
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- DIALOG PAGE 2_2 - EVALUATION FORM --}}
<div id="modalDialogBack_Evaluation" class="relative z-50 hidden w-3/4 md:w-0" aria-labelledby="modal-title" role="dialog" aria-modal="true">
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
                            <h3 class="text-3xl font-semibold ">Keluar dari Evaluasi?</h3>
                            <div class="mt-2">
                                <p class="">Apakah Anda yakin ingin keluar dari proses pengisian Evaluasi dan kembali ke halaman sebelumnya? <span class="font-medium">Perubahan atau progres Anda saat ini mungkin tidak disimpan.</span></p>
                                <br> Jika memerlukan bantuan lebih lanjut,<a href="https://wa.me/082156226440 " class="relative text-blue31 font-medium before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full"> hubungi tim dukungan kami disini.</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-bluee3 w-full bg-opacity-40 p-4 flex justify-center space-x-4 sm:px-6 text-lg font-medium">
                    <button id="btnCancelBack_Eval" type="button" class="inline-flex w-1/3 justify-center rounded border-2 border-blue31 px-3 py-2 text-blue31 shadow-sm transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                        Lanjut Evaluasi
                    </button>
                    <button id="btnConfirmBack_Eval" type="button" class="inline-flex w-1/3 justify-center rounded bg-blue31 hover:border-2 hover:border-blue31 px-3 py-2 text-white transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                        Keluar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modalDialog_Asessmen1_Finish" class="relative z-50 hidden w-3/4 md:w-0" aria-labelledby="modal-title" role="dialog" aria-modal="true">
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
                            <h3 class="text-3xl font-semibold ">Kumpulkan Evaluasi??</h3>
                            <p class="mt-2">
                                Jika telah yakin dengan jawaban yang diberikan, Anda dapat mengumpulkan untuk menyelesaikan pembelajaran yang telah dilakukan.
                                <br><br> Jika memerlukan bantuan lebih lanjut,<a href="https://wa.me/082156226440 " class="relative text-blue31 font-medium before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full"> hubungi tim dukungan kami disini.</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="bg-bluee3 w-full bg-opacity-40 px-4 py-3 flex justify-center space-x-4 sm:px-6 text-lg font-medium">
                    <button id="btnSubmitBack_Finish" type="button" class="w-1/3 justify-center rounded border-2 border-blue31 px-3 py-2 text-blue31 hover:-translate-y-1 hover:scale-110">Kembali</button>
                    <button id="btnSubmitConfirm_Finish" type="submit" class="w-1/3 justify-center rounded bg-blue31 px-3 py-2 text-white hover:-translate-y-1 hover:scale-110">Kumpulkan</button>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- DIALOG PAGE3_0 / BACK TO ASESSMEN I --}}
<div id="modalDialog_BackToAsessment" class="relative z-50 hidden w-3/4 md:w-0" aria-labelledby="modal-title" role="dialog" aria-modal="true">
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
                            <h3 class="text-3xl font-semibold ">Kembali ke Penilaian?</h3>
                            <div class="mt-2">
                                <p class="">Apakah Anda yakin ingin kembali ke halaman penilaian untuk mengulangi penilaian atau melihat riwayat penilaian Anda? <span class="font-medium">Perubahan atau progres Anda saat ini mungkin tidak disimpan.</span></p>
                                <br> Jika memerlukan bantuan lebih lanjut,<a href="https://wa.me/082156226440 " class="relative text-blue31 font-medium before:absolute before:bottom-0 before:left-0 before:w-0 before:h-[2px] before:bg-blue31 before:transition-all before:duration-300 hover:before:w-full"> hubungi tim dukungan kami disini.</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-bluee3 w-full bg-opacity-40 p-4 flex justify-center space-x-4 sm:px-6 text-lg font-medium">
                    <button id="btnCancelBack_stayHere" type="button" class="inline-flex w-1/3 justify-center rounded border-2 border-blue31 px-3 py-2 text-blue31 shadow-sm transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                        Kembali
                    </button>
                    <button id="btnConfirmBack_toAsessment" type="button" class="inline-flex w-1/3 justify-center rounded bg-blue31 hover:border-2 hover:border-blue31 px-3 py-2 text-white transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110">
                        Lanjutkan
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Loading Screen -->
<div id="loadingScreen" style="display: none" class="fixed inset-0 flex flex-col items-center justify-center z-[50]">
    <div class="fixed w-full inset-0 bg-black bg-opacity-90 transition-opacity" aria-hidden="true"></div>            
    <div class="relative w-fit h-fit flex items-center justify-center flex-col gap-4">
        <h1 id="typingText" class="text-white text-2xl font-medium mb-4"></h1> <!-- kosong dulu, nanti diisi efek ketik -->
        <div class="relative">
            <span class="absolute w-4 h-4 bg-red-500 rounded-full animate-kiri"></span>
            <span class="absolute w-4 h-4 bg-yellow-400 rounded-full left-1/2 transform -translate-x-1/2 z-10"></span>
            <span class="absolute w-4 h-4 bg-green-400 rounded-full animate-kanan"></span>
        </div>
    </div>
</div>
