<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CaseStudyController extends Controller
{
    private $key_answer = [
        'adadawdawd',
        'awdadadawdada'
    ];

    private $model = env('GEMINI_MODEL', 'gemini-1.5-flash');

    private $prompt_template = "Anda adalah penilai jawaban kuis studi kasus.
                                Tugas Anda adalah menilai **keselarasan jawaban pengguna** dengan **kunci jawaban**.

                                Instruksi:

                                * Berikan penilaian dalam bentuk angka saja antara **1 sampai 100**.
                                * 1 berarti jawaban sama sekali tidak selaras.
                                * 100 berarti jawaban sepenuhnya selaras dengan kunci jawaban.
                                * Jangan berikan penjelasan, hanya angka.

                                Kunci jawaban:
                                {{ key_answer }}

                                Jawaban pengguna:
                                {{ answer }}

                                Nilai:
                            ";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $case_study_id)
    {
        $validator = Validator::make($request->all(), [
            'answer' => 'required|string',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ], 400);
        }

        try {
            $answer = $request->input('answer');
            $key_answer = $this->key_answer[$case_study_id] ?? "";

            $prompt = $this->generateTemplate($this->prompt_template, [
                'answer' => $answer,
                'key_answer' => $key_answer,
            ]);

            $response = $this->fetchGemini($prompt, $this->model);

            Log::info('CaseStudyController@store', [
                'case_study_id' => $case_study_id,
                'answer' => $answer,
                'key_answer' => $key_answer,
                'prompt' => $prompt,
                'response' => $response,
            ]);

            return response()->json([
                'status' => 'success',
                'data' => $response,
            ]);
        } catch (\Throwable $th) {
            Log::error('CaseStudyController@store', [
                'error' => $th->getMessage(),
            ]);
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat memproses permintaan.',
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    function fetchGemini(string $prompt, string $model = "gemini-1.5-flash") {
        $url = "https://generativelanguage.googleapis.com/v1beta/models/{$model}:generateContent?key=" . env('GEMINI_API_KEY');

        $response = Http::post($url, [
            "contents" => [[
                "parts" => [[ "text" => $prompt ]]
            ]]
        ]);

        return $response->json();
    }


    function generateTemplate(string $template, array $variables) {
        foreach ($variables as $key => $value) {
            $template = str_replace("{{" . $key . "}}", $value, $template);
        }
        return $template;
    }

}
