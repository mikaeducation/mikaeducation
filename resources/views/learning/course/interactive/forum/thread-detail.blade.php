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

                    {{-- Back Link --}}
                    <div class="mb-4">
                        <a href="{{ route('forum.show', $module->module_id) }}"
                            class="w-fit flex items-center text-blue31 transition hover:-translate-y-1 hover:scale-105">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Kembali ke Daftar Diskusi
                        </a>
                    </div>

                    <h1 class="text-2xl font-bold mb-4">{{ $thread->title }}</h1>

                    {{-- Thread Content --}}
                    <div class="p-6 bg-white rounded-xl shadow-lg border-blue31 mb-8">
                        <div class="flex items-center mb-4">
                            <img class="mr-3 w-10 aspect-square rounded-full font-semibold text-gray-600"
                                src="{{ $thread->user?->profile?->profile_image ? asset($thread->user?->profile?->profile_image) : asset('images/profile-sample.jpg') }}"
                                alt="Foto Profil">
                            <div>
                                <p class="font-bold text-lg text-blue31">{{ $thread->user?->profile?->username ?? 'Pengguna Anonim' }}</p>
                                <p class="text-xs text-gray-500">Dibuat: {{ $thread->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                        <div class="text-gray-800 leading-relaxed border-t pt-4">
                            {{ $thread->content }}
                        </div>
                    </div>

                    <h2 class="text-xl font-bold mb-4 border-b pb-2">Balasan ({{ $posts->total() }})</h2>

                    {{-- Flash Message --}}
                    @if (session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 rounded" role="alert">
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4 rounded" role="alert">
                            <p class="font-bold">Error:</p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Post/Reply List --}}
                    <div class="space-y-6 mb-8">
                        @forelse ($posts as $post)
                            <div class="p-4 bg-gray-50 rounded-lg shadow-sm border border-gray-200">
                                <div class="flex items-center mb-3">
                                    <img class="mr-3 w-8 aspect-square rounded-full font-semibold text-gray-600"
                                        src="{{ $thread->user?->profile?->profile_image ? asset($thread->user?->profile?->profile_image) : asset('images/profile-sample.jpg') }}"
                                        alt="Foto Profil">
                                    <div>
                                        <p class="font-semibold text-md text-gray-800">
                                            {{ $post->user?->profile?->username ?? 'Pengguna Anonim' }}
                                        </p>
                                        <p class="text-xs text-gray-500">{{ $post->created_at->diffForHumans() ?? 'Tidak diketahui' }}</p>
                                    </div>
                                </div>
                                <p class="text-gray-700 ml-11">{{ $post->content }}</p>
                            </div>
                        @empty
                            <p class="text-gray-600">Belum ada balasan untuk diskusi ini. Jadilah yang pertama!</p>
                        @endforelse

                        {{-- Pagination Links for Posts --}}
                        <div class="mt-6">
                            {{ $posts->links() }}
                        </div>
                    </div>

                    {{-- Reply Form --}}
                    <h2 class="text-xl font-bold mb-4 border-b pb-2 mt-8">Tinggalkan Balasan</h2>
                    @auth
                        <form action="{{ route('forum.post.store', [$module->module_id, $thread->id]) }}" method="POST"
                            class="bg-white p-6 rounded-xl shadow-lg mb-10">
                            @csrf
                            <div class="mb-4">
                                <label for="content" class="block text-gray-700 font-semibold mb-2">Konten Balasan:</label>
                                <textarea name="content" id="content" rows="4"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue31 focus:border-blue31 transition duration-150"
                                    placeholder="Tulis balasan Anda di sini...">{{ old('content') }}</textarea>
                            </div>
                            <button type="submit"
                                class="px-6 py-2 text-white bg-blue31 rounded-lg font-medium transition hover:-translate-y-1 hover:scale-105">
                                Kirim Balasan
                            </button>
                        </form>
                    @else
                        <p class="text-red-500 p-4 bg-red-50 border-l-4 border-red-400 rounded">
                            Anda harus masuk untuk dapat membalas diskusi.
                        </p>
                    @endauth
                </div>
            </div>
            {{-- Right Content --}}
            @include('includes.components.elearning.course.section')
        </div>
    </section>

    <footer id="footer" class="w-full flex flex-col items-center justify-center bg-blue31 text-white mt-14">
        <div class="w-full h-10 bg-blue20 font-light text-xs md:text-sm flex items-center justify-center">
            <div class="w-3/4 h-full flex items-center justify-center space-x-3 md:space-x-7 lg:space-x-14">
                <p class="text-center">© 2025 Media Visual Komunikasi Anak for Mikaeducation. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

</body>

</html>
