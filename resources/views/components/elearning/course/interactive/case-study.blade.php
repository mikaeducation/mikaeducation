<form class="w-full flex space-y-1">
        <textarea type="text" id="caseStudy-{{ $id }}" name="js-input" placeholder="Jawaban Anda" rows="10" value="{{ old('js-input') }}"
            class="p-2 w-full resize-none border border-blue6a rounded focus:outline-none focus:ring-2 focus:ring-blue3a text-blue31 font-medium text-wrap placeholder:opacity-45 placeholder-blue31">
        </textarea>
    @csrf
    <button id="submitButton-{{ $id }}" type="button"
        onclick="submitCaseStudy('{{ route('case.study.post', ['case_study_id' => $id]) }}', {{$id}})"
        class="m-2 p-2 w-1/5 justify-self-end text-white text-center bg-blue31 rounded font-medium transition hover:-translate-y-1 hover:scale-105">
            Kumpulkan
        </button>
</form>
<div id="score-{{ $id }}" class="px-2 w-full flex justify-end bottom-0 bg-bluee3 text-lg">
</div>
