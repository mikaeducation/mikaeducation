{{-- TODO: pindahkan Javascript dari page7 ke sini dan lakukan perulangan supaya javascript unique untuk setiap case study --}}
<form class="mt-4">
    <label for="js-input" class="mb-2 block font-semibold">Jawaban:</label>
    <textarea type="text" id="caseStudy-{{ $id }}" name="js-input"
        placeholder="Jelaskan jawaban anda dalam bentuk paragraf dan/atau poin selengkap dan seringkas mungkin" rows="10"
        value="{{ old('js-input') }}"
        class="p-2 w-full resize-none border border-blue6a rounded focus:outline-none focus:ring-2 focus:ring-blue3a text-blue31 font-medium text-wrap placeholder:opacity-45 placeholder-blue31"></textarea>
    @csrf
    <div class="mt-2 flex justify-end space-x-4">
        <div id="score-{{ $id }}" class="px-2 text-white bg-blue31 rounded flex justify-center items-center hidden">Skor Anda: XX
        </div>
        <button id="submitButton-{{ $id }}" type="button"
            onclick="submitCaseStudy('{{ route('case.study.post', ['case_study_id' => $id]) }}', {{ $id }})"
            class="p-2 w-1/5 text-white text-center bg-blue31 rounded font-medium transition hover:-translate-y-1 hover:scale-105 {{ $has_submitted ? 'opacity-50 cursor-not-allowed' : '' }}"
            {{ $has_submitted ? 'disabled' : '' }}>
            {{ $has_submitted ? 'Sudah Dikumpulkan' : 'Kumpulkan' }}
        </button>
    </div>
</form>
