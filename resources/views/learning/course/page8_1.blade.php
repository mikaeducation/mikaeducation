<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-Learning | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="show-asessment-dialog" content="true">
        @vite('public/assets/css/style.css')
        {{-- <script>document.documentElement.classList.add('js')</script> --}}
    </head>
    <body class="font-futura w-full min-h-screen flex flex-col relative">
        @include('includes.components.elearning.course.header')

    <section class="w-full flex-1 flex flex-col items-center justify-center text-blue31">
        <div class="w-full flex-grow flex items-start justify-start">
            {{-- Left Content --}}
            <div id="left" class="w-3/4 flex-1 max-h-[100vh] lg:max-h-[84vh] flex flex-col overflow-y-auto scrollbar scrollbar-thumb scrollbar-thumb-rounded scrollbar-thumb-blue31 scrollbar-track-gray-100">
                <div class="w-full h-full flex flex-col pl-12 md:pr-12 mt-10">
                    <div class="h-full w-full space-y-8 pb-4 lg:pb-8 text-lg">
                        <div class="space-y-4 sm:border-2 sm:border-bluee3 rounded">
                            <div class="w-full h-fit flex p-2 bg-bluee3 text-justify">
                                <p><span class="font-bold">Bagian 1</span> - Pengetahuan autisme, TEACCH, Komunikasi dan MIKA 1.0
                                    <br>Intruksi:<span class="font-medium"> Pilihlah satu jawaban yang benar.</span>
                                </p>
                            </div>
                            <div class="w-full space-y-4 sm:pl-2 pb-2 ">
                                <div class="w-full text-blue31">
                                    <form id="formAsessment" action="{{ route('asessment-submit') }}" method="POST" class="space-y-4 sm:pr-4 text-justify">
                                        @csrf
                                        <input type="hidden" name="asessment_id" value="2">
                                        <input type="hidden" name="started_at" value="{{ now() }}">
                                        @foreach($questions as $index => $question)
                                            <div>
                                                <div class="mb-2 flex gap-2">
                                                    <p class="asessmen1-num font-medium">{{ $index + 1 }}.</p>
                                                    <p class="asessmen1-quest">{{ $question->question_text }}</p>
                                                </div>
                                                @foreach(['answerA', 'answerB', 'answerC', 'answerD', 'answerE'] as $opt)
                                                    <div class="flex items-start justify-start space-x-3 mb-1">
                                                        <input 
                                                            type="radio" 
                                                            name="question_{{ $question->question_id }}" 
                                                            id="q{{ $question->question_id }}_{{ $opt }}" 
                                                            value="{{ $question->$opt }}" 
                                                            class="mt-2 ml-6">
                                                        <label for="q{{ $question->question_id }}_{{ $opt }}" class="block cursor-pointer">
                                                            {{ $question->$opt }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                        <div class="w-full pt-4 pb-2 px-4 flex justify-end items-center">
                                            <button type="button" id="btnTriggerSubmitModal" class="w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 p-2 rounded font-medium text-white bg-blue31">
                                                Kumpulkan
                                            </button>
                                        </div>
                                        @include('includes.components.elearning.course.dialog.modal-asessment')
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Right Content --}}
            @include('includes.components.elearning.course.section')
        </div>
    </section>

    @include('includes.components.elearning.course.footer')
    </body>

</html>