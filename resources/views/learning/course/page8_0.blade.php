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
        <meta name="assessment-status" content="{{ $sudahMengisi ? 'done' : 'not_started' }}">
        @if ($sudahMengisi)
        <meta name="asessment-finished" content="true">
        @else
            <meta name="asessment-finished" content="false">
        @endif

        @vite('public/assets/css/style.css')
    </head>

    <body class="font-futura w-full min-h-screen flex flex-col relative">
    @include('includes.components.elearning.course.header')

    <section class="w-full flex-1 flex flex-col items-center justify-center text-blue31">
        <div class="w-full flex-grow flex items-start justify-start">
            {{-- Left Content --}}
            <div id="left" class="w-3/4 flex-1 max-h-[100vh] flex flex-col overflow-y-auto scrollbar">
                <div class="w-full h-full flex flex-col pl-12 md:pr-12 mt-10 gap-4">
                    <div class="h-full w-full space-y-8 mb-10 text-lg">
                        @if(!$sudahMengisi)
                            {{-- Sebelum Penilaian --}}
                            <h3 class="text-justify"><span class="text-xl font-medium">Penilaian Pasca-Belajar:</span> Evaluasi dan Pembelajaran MIKA 1.0</h3>
                            <div class="flex flex-col md:flex-row justify-between w-full px-8 py-8 bg-bluee3 rounded text-lg font-medium">
                                <div class="w-full space-y-4">
                                    <h5 class="text-xl">Detail Penilaian</h5>
                                    <div class="flex gap-12">
                                        <div><p>Batas Waktu</p><time class="text-base font-normal">Tidak terbatas</time></div>
                                        <div><p>Kesempatan</p><time class="text-base font-normal">Tidak Terbatas</time></div>
                                    </div>
                                </div>
                                <div class="w-full flex items-end justify-end">
                                    <button id="btnMulaiAsessment" data-module-id="{{ $module_id }}" data-asessment-id="{{ $asessment_id }}"
                                        class="text-white py-2 bg-blue31 rounded w-full md:w-3/4 transition hover:-translate-y-1 hover:scale-105">
                                        Mulai Sekarang
                                    </button>
                                </div>
                            </div>
                            <div class="w-full border-4 px-8 py-5 text-lg border-bluee3">
                                <h5 class="text-xl font-medium">Nilai Anda</h5>
                                <p class="text-justify">Anda belum menyelesaikan penilaian ini. Silahkan selesaikan terlebih dahulu untuk mengetahui skor Anda. Dibutuhkan <span class="font-medium">nilai 80% atau lebih tinggi</span> untuk lulus.</p>
                            </div>
                        @else
                            {{-- Setelah Penilaian --}}
                            <h3 class="text-justify"><span class="text-xl font-medium">Hasil Penilaian Pasca-Belajar:</span> Evaluasi dan Pembelajaran MIKA 1.0</h3>
                            <div class="flex flex-col md:flex-row justify-between w-full px-8 py-8 bg-bluee3 rounded text-lg font-medium">
                                <div class="w-full space-y-4">
                                    <h5 class="text-xl">Detail Penilaian</h5>
                                    <div class="flex gap-12">
                                        <div>
                                            <p>Batas Waktu</p>
                                            <time class="text-base font-normal">
                                                {{ $asessmentInfo->asessment_duration === 'limited' ? $asessmentInfo->asessment_time_limit . ' menit' : 'Tidak Terbatas' }}
                                            </time>
                                        </div>                                      
                                        <div>
                                            <p>Kesempatan</p>
                                            <time class="text-base font-normal">
                                                {{ $asessmentInfo->asessment_type === 'limited' ? 'Terbatas (' . $asessmentInfo->asessment_workout . 'x)' : 'Tidak Terbatas' }}
                                            </time>
                                        </div>                                  
                                    </div>
                                </div>
                                <div class="w-full flex items-end justify-end gap-4">
                                    <button id="startButtonNow" type="button" class="text-blue31 text-center border-2 border-blue31 py-2 rounded w-full md:w-3/4 transition hover:-translate-y-1 hover:scale-105">Ulangi Penilaian</button>
                                    <button id="startButtonEvaluate" type="button" class="text-white text-center bg-blue31 py-2 rounded w-full md:w-3/4 transition hover:-translate-y-1 hover:scale-105">Mulai Evaluasi</button>
                                </div>
                            </div>
                            <div class="w-full border-4 px-8 py-5 border-bluee3 rounded">
                                <h5 class="font-medium text-xl">Nilai Penilaian II Anda</h5>
                                <p class="text-lg text-justify mb-5">Dibutuhkan <span class="font-medium">nilai 80% atau lebih tinggi</span> untuk lulus.</p>
                                <table class="w-full text-lg">
                                    <thead class="w-full">
                                        <tr class="bg-bluee3 text-left">
                                            <th class="py-2 px-4 w-1/3">
                                                <a href="{{ route(Route::currentRouteName(), array_merge(request()->query(), ['sort' => request('sort') === 'time_asc' ? 'time_desc' : 'time_asc'])) }}"
                                                    class="inline-flex items-center justify-center gap-1">
                                                    Waktu
                                                    @php $sort = request('sort'); @endphp
                                                    @if($sort === 'time_asc' || $sort === 'time_desc' || is_null($sort))
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#31587C"
                                                                viewBox="0 0 24 24"
                                                                class="transition-transform duration-300 ease-in-out mt-1 {{ $sort === 'time_asc' ? 'rotate-180' : 'rotate-0' }}">
                                                            <path d="M4.707 8.293a1 1 0 0 1 1.414 0L12 14.586l5.879-6.293a1 1 0 1 1 1.414 1.414L12 17l-7.293-7.293a1 1 0 0 1 0-1.414z" />
                                                        </svg>
                                                    @endif
                                                </a>
                                            </th>
                                            <th class="py-2 px-4 w-1/5">
                                                <a href="{{ route(Route::currentRouteName(), array_merge(request()->query(), ['sort' => request('sort') === 'score_asc' ? 'score_desc' : 'score_asc'])) }}"
                                                    class="inline-flex items-center justify-center gap-1">
                                                    Nilai
                                                    @if($sort === 'score_asc' || $sort === 'score_desc')
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#31587C"
                                                                viewBox="0 0 24 24"
                                                                class="transition-transform duration-300 ease-in-out mt-1 {{ $sort === 'score_asc' ? 'rotate-180' : 'rotate-0' }}">
                                                            <path d="M4.707 8.293a1 1 0 0 1 1.414 0L12 14.586l5.879-6.293a1 1 0 1 1 1.414 1.414L12 17l-7.293-7.293a1 1 0 0 1 0-1.414z" />
                                                        </svg>
                                                    @endif
                                                </a>
                                            </th>
                                            <th class="py-2 px-4 w-1/5">Status</th>
                                            <th class="hidden py-2 px-4 w-1/5">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($attempts as $attempt)
                                            <tr class="text-left">
                                                <td class="pt-4 px-4"> 
                                                    {{ \Carbon\Carbon::parse($attempt->finished_at)->locale('id')->timezone('Asia/Jakarta')->translatedFormat('d F Y, H:i') }} WIB
                                                </td>
                                                <td class="pt-4 px-4">
                                                    {{ $attempt->score }}%
                                                </td>
                                                <td class="pt-4 px-4">
                                                    {{ $attempt->is_passed ? 'Lulus' : 'Belum Lulus' }}
                                                </td>
                                                <td class="hidden underline cursor-pointer pt-4 px-4">
                                                    <a href="#">Tinjau Penilaian</a> {{-- Tambahkan href jika ada detailnya --}}
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center text-gray-500">Belum ada riwayat penilaian.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                <p class="text-lg text-justify mt-4">Silahkan menyelesaikan asessmen dengan melanjutkan ke bagian <span class="font-medium">Selanjutnya atau Lanjutkan Evaluasi</span> untuk menyelesaikan asesmen program pembelajaran.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            {{-- Right Content --}}
            @include('includes.components.elearning.course.section')
        </div>

        <script>
            window.userIsPassed = {{ $attempts->contains('is_passed', 1) ? 'true' : 'false' }};
        </script>

    </section>

    @include('includes.components.elearning.course.footer')

    </body>

    @include('includes.components.elearning.course.dialog.modal-asessment')

</html>
