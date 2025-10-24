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

    <x-elearning.course.interactive.popup-question id=1 userId="{{ Auth::id() }}" moduleId=1/>
    <x-elearning.course.interactive.popup-question id=2 userId="{{ Auth::id() }}" moduleId=1/>
</body>

@include('includes.components.elearning.course.dialog.modal-asessment')

</html>

{{-- <script>
    document.addEventListener("DOMContentLoaded", async () => {
        const submoduleId = document.body.dataset.submoduleId; // or any hidden meta
        const response = await fetch(`/popup-questions/${submoduleId}`);
        const popups = await response.json();

        console.log("Popup Questions:", popups);

        popups.forEach(popup => {
            // Dynamically render each popup question into the DOM if you like
            // OR trigger them based on popup.pop_time
        });
    });
</script> --}}
