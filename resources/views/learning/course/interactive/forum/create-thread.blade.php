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
                    <div class="w-full h-full flex flex-col pl-12 md:pr-12 mt-10">

                        {{-- Back Link --}}
                        <div class="mb-4">
                            <a href="{{ route('forum.show', $module->module_id) }}"
                                class="text-blue31 hover:text-blue-600 transition duration-150 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                                    </path>
                                </svg>
                                Kembali ke Daftar Diskusi
                            </a>
                        </div>

                        <h1 class="text-2xl font-bold mb-8">Buat Diskusi Baru di {{ $module->name ?? 'Modul' }}</h1>

                        {{-- Error Messages --}}
                        @if ($errors->any())
                            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4 rounded" role="alert">
                                <p class="font-bold">Terjadi Kesalahan:</p>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- Create Thread Form --}}
                        <form action="{{ route('forum.thread.store', $module->module_id) }}" method="POST"
                            class="bg-white p-8 rounded-xl shadow-lg mb-10 border border-gray-100">
                            @csrf

                            {{-- Title Field --}}
                            <div class="mb-6">
                                <label for="title" class="block text-gray-700 font-semibold mb-2">Judul Diskusi:</label>
                                <input type="text" name="title" id="title" value="{{ old('title') }}" required
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                                    placeholder="Tulis judul yang jelas dan ringkas (min 10 karakter)">
                            </div>

                            {{-- Content Field --}}
                            <div class="mb-6">
                                <label for="content" class="block text-gray-700 font-semibold mb-2">Isi Diskusi:</label>
                                <textarea name="content" id="content" rows="10" required
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                                    placeholder="Jelaskan topik diskusi Anda secara detail (min 20 karakter)">{{ old('content') }}</textarea>
                            </div>

                            {{-- Submit Button --}}
                            <button type="submit"
                                class="px-6 py-3 text-white bg-blue31 rounded-lg font-bold transition hover:bg-blue-600 shadow-md">
                                Buat Diskusi
                            </button>
                        </form>

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
