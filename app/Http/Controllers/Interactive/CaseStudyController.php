<?php

namespace App\Http\Controllers\Interactive;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\ProgressTracking;
use App\Models\UserCaseStudy;
use App\Models\UserCaseStudyAttempt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CaseStudyController extends Controller
{
    private $key_answer = [
        // NOTE: jawaban 1
        "Pra-komunikasi:
    Kontak mata Budi masih terbatas
    Budi sering menggunakan isyarat tubuh untuk mengungkapkan beberapa kebutuhan sehari-harinya, misalkan makan dan mau keluar rumah.
    Dampak:
    Kemampuan kontak mata dan perhatian bersama belum kuat sehingga menyulitkan Budi belajar hal baru dan belajar dari orang lain (sulit meniru/imitasi).
    Budi belum konsisten menggunakan komunikasi verbal karena masih mudah menggunakan gesture, akibatnya tidak mudah berkomunikasi dengan orang baru yang tidak familiar dengan komunikasi gesturenya.

    Komunikasi reseptif:
    Budi mampu memahami instruksi sederhana 1-2 kata atas tugas yang sudah familar baginya. Namun masih belum bisa memberikan respon secara mandiri, maka masih membutuhkan prompt dan pengulangan agar dia bisa memberikan respon.
    Kemampuan pemrosesan informasi yang dimilikinya membutuhkan waktu untuk bisa menerima dan memahami informasi dari lingkungannya.
    Dampak:
    Keterbatasan reseptif dan pemrosesan informasi menyebabkan kemampuan merespon komunikasinya tampak lambat dan tidak mudah menerima/belajar informasi baru.
    Mampu memahami kalimat 1 langkah, 1 kata instruksi dengan kata yang telah familiar.

    Komunikasi ekspresif
    Budi belum mampu mengucapkan kata secara utuh. Dia mengucapkan akhir suku kata dan cenderung belum mampu mengucapkan lafal c, r, dan ng.
    Belum mampu melakukan dialog secara mandiri.
    Beberapa kesempatan bisa gagap atau kesulitan mengucapkan kata dengan benar.
    Dampak:
    Beberapa orang baru akan kesulitan memahami apa yang disampaikannya.
    Sering Budi bisa frustasi ketika tidak bisa mengungkapkan apa yang diinginkannya.

    Komunikasi pragmatis:
    Budi mampu memberikan salam, namun belum secara mandiri, sehingga masih perlu diingatkan dengan prompt fisik dan verbal.
    Dampak: Belum luwes secara sosial - untuk mampu menggunakan komunikasi salam harus diingatkan.

    Strategi:
    Memperkuat kemampuan pemusatan perhatian bersama (joint attention) dengan menggunakan mainan mobil-mobilan yang disukainya. Terapis dan Budi akan bermain bersama dengan mainan mobil untuk meraih kontak mata dan joint attention, dan dilanjutkan dengan membangun perbendaharaan kata baru.
    Membangun perbendaharaan kata kerja fungsional sehari-hari dengan bantuan alat bantu visual. Dimulai dengan kata-kata terkait dengan konsumsi sehari: makan, minum, nasi, lauk, piring, sendok, gelas, air.
    Pengenalan konsep first-and-then - “setelah belajar kata, baru main mobil”. Hal ini sebagai dasar pembentukan kesiapan belajar menggunakan jadwal sederhana 2 tahap. Mobil digunakan sebagai reward belajar agar mau belajar. Ke depannya, jadwal belajar bisa lebih banyak/kompleks.
    ",
        // NOTE: jawaban 2
        "
    Di bulan ke-3
    Komunikasi ekspresif: skor 8 atau 80% benar - mampu menguasai ekspresi fungsional dan mandiri. Maka dianggap lolos Level I. Tata bisa diarahkan untuk maju ke Level II Komunikasi ekspresif.
    Komunikasi reseptif: skor 7 atau 70% benar - walaupun sudah menguasai beberapa kata secara fungsional, belum mencapai kemandirian yang dibutuhkan untuk bisa memahami instruksi sehari-hari. Maka masih perlu dilanjutkan belajar komunikasi reseptif Level I hingga mencapai 80% benar.

    Evaluasi Komunikasi:
    Tata mengalami kemajuan kemampuan komunikasi. Kontak mata yang dimilikinya bertambah secara signifikan dari kurang dari 2 detik menjadi 2-3 detik hingga menjadi cukup untuk belajar instruksi sederhana dengan orang-orang di sekitarnya. Begitu juga kemampuan komunikasi verbalnya, dari awalnya belum mampu mengungkapkan kata secara mandiri, menjadi lebih mampu melakukan komunikasi secara fungsional. Di awal, skor 0 di setiap sesi maka kumulatif skor menunjukkan Tata belum mampu mengungkapkan komunikasi fungsional. Namun menunjukkan kemajuan di bulan kedua (skor 3 untuk ekspresif dan 5 untuk reseptif) dan ketiga (skor 8 untuk ekspresif dan 7 untuk reseptif).

    Komunikasi reseptif Tata belum mencapai kemandirian yang dibutuhkan untuk bisa memahami instruksi sehari-hari. Maka ia masih perlu melanjutkan belajar komunikasi reseptif Level I hingga mencapai 80% benar. Dalam hal komunikasi ekspresif, Tata bisa diarahkan untuk maju ke Level II Komunikasi ekspresif. Namun latihan ekspresi Level I masih bisa diulang jika ada kesempatan agar semakin mantap penguasaannya.

    Staregi: Penggunaan alat bantu visual akan membantu sebagai strategi belajar perbendarahaan kata-kata baru, memperkuat joint attention dan minat berinteraksi sosial dengan orang lain.
    ",
    ];
    private $model;

    public function __construct()
    {
        $this->model = env('GEMINI_MODEL', 'gemini-1.5-flash');
    }

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

        if ($validator->fails()) {
            return response()->json(
                [
                    'status' => 'error',
                    'message' => $validator->errors()->first(),
                ],
                400,
            );
        }

        try {
            $user = Auth::user();
            $answer = $request->input('answer');
            $key_answer = $this->key_answer[$case_study_id - 1] ?? '';

            $prompt = $this->generateTemplate($this->prompt_template, [
                'answer' => $answer,
                'key_answer' => $key_answer,
            ]);

            $response = $this->fetchGemini($prompt, $this->model);
            $score = $response['candidates'][0]['content']['parts'][0]['text'] ?? 0;

            $progress = ProgressTracking::where('user_id', $user->id)->firstOrFail();
            $profile = Profile::where('phone', $user->phone)->firstOrFail();

            // === STEP 4: Create or update user_case_study ===
            $caseStudy = UserCaseStudy::updateOrCreate(
                [
                    'user_id' => $user->id,
                    'case_study_id' => $case_study_id,
                ],
                [
                    'module_id' => 1,

                    'progress_id' => $progress->progress_id,
                    'username' => $profile->username,
                ],
            );

            // Increment attempt count
            $caseStudy->increment('attempt_count');

            // Update high score if new one is higher
            if ($score > $caseStudy->high_score) {
                $caseStudy->high_score = $score;
                $caseStudy->save();
            }

            // === STEP 5: Create user_case_study_attempt entry ===
            $attemptNumber = UserCaseStudyAttempt::where('user_case_study_id', $caseStudy->id)->count() + 1;

            UserCaseStudyAttempt::create([
                'user_id' => $user->id,
                'user_case_study_id' => $caseStudy->id,
                'case_study_id' => $case_study_id,
                'attempt_number' => $attemptNumber,
                'score' => $score,
            ]);

            Log::info('CaseStudyController@store', [
                'case_study_id' => $case_study_id,
                'answer' => $answer,
                'response' => $response,
            ]);

            return response()->json([
                'status' => 'success',
                'data' => $response,
                'score' => $score,
            ]);
        } catch (\Throwable $th) {
            Log::error('CaseStudyController@store', [
                'error' => $th->getMessage(),
            ]);

            return response()->json(
                [
                    'status' => 'error',
                    'message' => 'Terjadi kesalahan saat memproses permintaan.',
                ],
                500,
            );
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

    function fetchGemini(string $prompt, string $model)
    {
        $url = "https://generativelanguage.googleapis.com/v1beta/models/{$model}:generateContent?key=" . env('GEMINI_API_KEY');

        $response = Http::post($url, [
            'contents' => [
                [
                    'parts' => [['text' => $prompt]],
                ],
            ],
        ]);

        return $response->json();
    }

    function generateTemplate(string $template, array $variables)
    {
        foreach ($variables as $key => $value) {
            $template = str_replace('{{ ' . $key . ' }}', $value, $template);
        }
        return $template;
    }
}
