<div class="font-medium space-y-2 h-full overflow-y-auto">
    <div class="w-full flex items-center justify-between mb-4">
        <h3>Semua Dokumen ({{ $completedDocs->count() }})</h3>
        <button id="" class="flex items-center justify-center p-1 border-2 border-blue31 rounded-full">
            <svg class="" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 12L5 4" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                <path d="M19 20L19 18" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                <path d="M5 20L5 16" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                <path d="M19 12L19 4" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                <path d="M12 7L12 4" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                <path d="M12 20L12 12" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                <circle cx="5" cy="14" r="2" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                <circle cx="12" cy="9" r="2" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
                <circle cx="19" cy="15" r="2" stroke="#31587C" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </button>
    </div>
    <div id="recapDocument" class="flex flex-col gap-4">
        @if ($completedDocs->isEmpty())
            <p class="text-blue31 text-base font-medium">Anda tidak memiliki dokumen dan layanan apapun.</p>
        @else
            @foreach ($completedDocs as $doc)
                @php
                    $mod = $doc->module;
                @endphp
                @if ($mod)
                <div class="w-full h-4/5 p-4 space-y-3 border-2 border-l-8 border-bluee3">
                    <div class="w-full h-fit flex flex-col xl:flex-row md:space-y-3">
                        <div class="xl:w-4/5 w-full sm:flex gap-3 md:gap-4">
                            <img src="{{ asset($mod->module_publisher_banner) }}" alt="Module Banner" class="h-20 sm:w-1/6 w-full rounded border-2 object-cover border-blue31">
                            <table class="w-full sm:mt-0 mt-2" style="border-collapse: collapse; text-align: left;">
                                <tr>
                                    <td>Bentuk</td>
                                    <td>: Sertifikat Program Pembelajaran</td>
                                </tr>
                                <tr>
                                    <td>Penyelenggara</td>
                                    <td>: {{ $mod->module_publisher_name }}</td>
                                </tr>
                                <tr>
                                    <td>Tema Belajar</td>
                                    <td>: {{ $mod->module_title }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="xl:w-1/5 w-full md:mt-0 mt-4 text-center flex items-center justify-center">
                            @if ($mod->module_certificate)
                            <a href="{{ $mod->module_certificate }}" target="_blank" class="flex items-center justify-center font-medium text-base w-full py-1 md:py-2 px-2 md:px-4 transition bg-blue31 text-white rounded hover:bg-transparent hover:text-blue31 hover:border-2 hover:border-blue31">
                                Tinjau <span class="xl:hidden flex">&nbsp Sertifikat Pembelajaran</span>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        @endif
    </div>
</div>