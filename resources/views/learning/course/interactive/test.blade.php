<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-Learning | Mika Education</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="progress-id" content="{{ session('progress_id') }}">
        <meta name="user-id" content="{{ Auth::id() }}">
        <meta name="show-asessment-dialog" content="true">
        @vite('public/assets/css/style.css')
    </head>

    <body class="font-futura w-full min-h-screen flex flex-col relative">
    @include('includes.components.elearning.course.header')

        @include('includes.components.elearning.course.footer')
<div class="w-full flex items-end justify-end gap-4">
                                    <button id="startButtonNow" type="button" class="hidden text-blue31 text-center border-2 border-blue31 py-2 rounded w-full md:w-3/4 transition hover:-translate-y-1 hover:scale-105">Ulangi Penilaian</button>
                                    <button id="startButtonEvaluate" type="button" class="text-white text-center bg-blue31 py-2 rounded w-full md:w-3/4 transition hover:-translate-y-1 hover:scale-105">Mulai Evaluasi</button>
                                </div>

    </body>

    @include('includes.components.elearning.course.dialog.modal-asessment')

</html>
