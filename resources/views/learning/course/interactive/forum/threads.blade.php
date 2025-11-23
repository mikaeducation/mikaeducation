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
                <div class="pl-12 md:pr-12 mt-10 w-full h-full flex flex-col">
                    <div class="h-full w-full space-y-2">
                        <h1 class="text-xl font-bold">
                            Forum Diskusi
                        </h1>
                        <p>
                            Forum diskusi dapat digunakan untuk berbagi informasi, pertanyaan, dan diskusi mengenai topik sesuai dengan topik
                            modul.
                            <br>
                            Dalam berdiskusi mohon perhatikan peraturan berikut:
                            <br>
                            1. Tidak boleh mengirimkan link atau konten yang tidak relevan dengan topik diskusi.
                            <br>
                            2. Tidak boleh mengirimkan konten yang mengandung unsur pornografi, kekerasan, atau konten lain yang melanggar
                            hukum.
                            <br>
                        </p>
                    </div>

                    <hr class="mt-4">
                    <div class="py-4">
                        @if ($threads->count() > 0)
                            @foreach ($threads as $thread)
                                <a href="{{ route('forum.thread.show', [$module->module_id, $thread->id]) }}"
                                    class="block mb-4 p-4 bg-bluee3 rounded-lg transition hover:-translate-y-1 hover:scale-105">
                                    <h2 class="text-lg font-bold">{{ $thread->title }}</h2>
                                    <p class="text-black">{{ $thread->content }}</p>
                                    <div class="flex justify-between items-center text-xs mt-2 text-gray-500">
                                        <span>Dibuat oleh: {{ $thread->user?->profile?->username ?? 'Pengguna' }}</span>
                                        <span>{{ $thread->created_at->diffForHumans() }}</span>
                                    </div>
                                </a>
                            @endforeach
                        @else
                            <p class="text-center text-xl font-bold text-gray-600">Belum ada diskusi.</p>
                        @endif
                    </div>
                </div>

                <div class="py-2 pl-12 md:pr-12 w-full flex justify-center sticky bottom-0 bg-white head-shadow">
                    <a href="{{ route('forum.thread.create', $module->module_id) }}"
                        class="p-2 w-1/3 content-center text-white text-center bg-blue31 rounded font-medium transition hover:-translate-y-1 hover:scale-105 {{ Auth::check() ? '' : 'opacity-50 cursor-not-allowed' }}">
                        <span class="pr-2 text-lg">+</span> Buat Diskusi Baru
                    </a>
                </div>
            </div>
            {{-- Right Content --}}
            @include('includes.components.elearning.course.section')
        </div>
    </section>

    @include('includes.components.elearning.course.footer')

</body>

</html>
