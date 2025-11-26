{{-- TODO: pindahkan Javascript dari page7 ke sini dan lakukan perulangan supaya javascript unique untuk setiap case study --}}
<form class="mt-4 bg-white p-8 rounded-xl shadow-lg mb-10 border border-gray-100">
    <label for="js-input" class="mb-2 block font-semibold">Jawaban:</label>
    <textarea type="text" id="caseStudy-{{ $id }}" name="js-input"
        placeholder="Jelaskan jawaban anda dalam bentuk paragraf dan/atau poin selengkap dan seringkas mungkin" rows="10"
        value="{{ old('js-input') }}"
        class="w-full p-3 resize-none border border-gray-300 rounded-lg focus:ring-blue31 focus:border-blue31 transition duration-150"></textarea>
    @csrf
    <div class="mt-2 flex justify-end space-x-4">
        <div id="score-{{ $id }}" class="px-2 text-white bg-blue31 rounded flex justify-center items-center hidden">Skor Anda: XX
        </div>
        <button id="submitButton-{{ $id }}" type="button" {{-- onclick="submitCaseStudy('{{ route('case.study.post', ['case_study_id' => $id]) }}', {{ $id }})" --}}
            class="px-4 py-2 w-fit text-white text-center bg-blue31 rounded font-medium transition hover:-translate-y-1 hover:scale-105 disabled:opacity-50 {{ $has_submitted ? 'opacity-50 cursor-not-allowed' : '' }}"
            x-data="{ loading: false }"
            x-on:click="loading = true; submitCaseStudy('{{ route('case.study.post', ['case_study_id' => $id]) }}', {{ $id }}, $el)"
            x-bind:disabled="loading || {{ $has_submitted ? 'true' : 'false' }}">

            <span x-show="!loading">Kumpulkan</span>
            <span x-show="loading" class="flex items-center gap-2">
                <svg class="w-5 h-5 animate-spin" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="white" stroke-width="4"></circle>
                    <path class="opacity-75" fill="white" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                </svg>
                Sedang Memproses ...
            </span>

        </button>
    </div>
</form>
