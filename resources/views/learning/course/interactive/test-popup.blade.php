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
    <meta name="progress-id" content="{{ session('progress_id') }}">
    <meta name="user-id" content="{{ Auth::id() }}">
    @vite('public/assets/css/style.css')
</head>

<body class="font-futura w-full min-h-screen flex flex-col relative">
    @include('includes.components.elearning.course.header')

    <section class="w-full flex-1 flex flex-col items-center justify-center text-blue31">
        <div class="w-full flex-grow flex items-start justify-start">
            {{-- Left Content --}}
            <div id="left"
                class="w-3/4 flex-1 max-h-[100vh] lg:max-h-[84vh] flex flex-col overflow-y-auto scrollbar scrollbar-thumb scrollbar-thumb-rounded scrollbar-thumb-blue31 scrollbar-track-gray-100">
                <div class="w-full h-full flex flex-col pl-12 md:pr-12 mt-10">
                    <div class="h-full w-full space-y-8">
                        <div class="w-full h-fit md:h-[400px] lg:h-[500px] xl:h-[575px] flex bg-black rounded">
                            <div class="w-full h-full flex justify-center items-center">
                                <div class="aspect-w-16 aspect-h-9 w-full h-full flex justify-center items-center">
                                    <video id="courseVideo" controls class="w-full h-auto rounded">
                                        <source src="{{ asset('videos/dummy.mp4') }}" type="video/mp4">
                                        Browser kamu tidak mendukung video tag.
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div class="w-full py-8 border-y-2 border-bluee3 space-y-4 text-lg">
                            <div class="w-full md:flex lg:flex text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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

{{-- Pertanyaan Popup --}}
@php
$popups = [1,2]; // ID Pertanyaan Popup
@endphp

{{-- Render Komponen Popup --}}
@foreach ($popups as $popup)
<x-elearning.course.interactive.popup-question id="{{ $popup }}" userId="{{ Auth::id() }}" moduleId=1/>
@endforeach

{{-- Render Button Reset Popup --}}
<x-elearning.course.interactive.popup-question.reset-button videoId=1 userId="{{ Auth::id() }}" moduleId=1/>

@include('includes.components.elearning.course.dialog.modal-asessment')

</html>
