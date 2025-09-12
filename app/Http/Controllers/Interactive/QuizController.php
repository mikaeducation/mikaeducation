<?php

namespace App\Http\Controllers\Interactive;

use App\Http\Controllers\Controller;
use BcMath\Number;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\Cast\String_;
use Ramsey\Uuid\Type\Integer;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $answer = [
        "1" => [
            "Motorik",
            "Pemrosesan Informasi",
            "Pemrosesan sensoris",
            "Perilaku",
            "Komunikasi Sosial",
            "Bermain"
        ],
        "2" => [
            "karakteristik" => [
                "Sulit melakukan relasi sosio-emosional timbal balik",
                "Sulit memahami komunikasi non-verbal",
                "Kesulitan memulai, mempertahankan dan memahami interaksi sosial",
            ],
            "minat" => [
                "Gerakan motorik, penggunaan objek atau wicara berulang.",
                "Menuntut kesamaan, tidak fleksibel, marah jika terjadi perubahan rutinitas/ritual/pola perilaku verbal atau nonverbal",
                "Perhatian terbatas atau minat yang terpaku pada satu hal secara berlebih-lebih",
                "Hyper-atau hipo-reaktivitas terhadap stimulus sensorik"
            ]
        ],
        "3" => [
            "Kemampuan perhatian bersama",
            "Melihat orang lain ketika berkomunikasi dengan lawan bicara (lebih banyak melihat ke arah lain).",
            "Sulit menggunakan dan memahami gestur dalam komunikasi.",
            "Cenderung terbatas dalam komunikasi fungsional (untuk menyampaikan maksud/informasi dari diri ke orang lain)."
        ],
        "4" => [
            "Membuat suara",
            "Menggunakan kata tunggal",
            "Menggunakan kata yang terdiri dari 2-3 kata.",
            "Berbicara dalam kalimat",
            "Echolalia (mengulan kata atau kalimat yang diucapkan seseorang)",
            "Mengajukan pertanyaan",
            "Membuat komentar",
            "Melakukan percakapan/dialog"
        ],
        "5" => [
            "memahami pertanyaan yang baru didengarnya.",
            "memahami suatu konsep baru.",
            "memahami konsep abstrak seperti peribahasa, lawan kata, padanan kata dan majas."
        ],
        "6" => [
            "menyambut" => "Tidak bisa spontan mengatakan \"Halo\"",
            "isyarat" => "Kesulitan mengekspresikan perasaan dan suit memahami isyarat sosial",
            "perhatian" => "Sulit kontak mata, fokus mudah teralihkan",
            "kesadaran" => "Tidak menyadari ruang personal space orang lain"
        ],
        "7" => [
            "low" => [
                "Kartu visual",
                "PECS",
                "Papan komunikasi / ALS",
                "Kartu Emosi"
            ],
            "high" => [
                "Ipad (Comass, Lamb words for life",
                "Liberator Rugged 7, ProloQuo2Go",
                "MIKA 1.0"
            ]
        ],
        "8" => [
            "Karakteristik" => "Deskripsikan perilaku anak. Uraikan apa yang mampu dilakukan dan yang masih perlu dikembangkan.",
            "Dampak" => "Apa konsekuensi perilaku pada anak, orang lain, lingkungan sekolah, masyarakat, dan masa depan anak.",
            "Strategi" => "Strategi intervensi sesuai kebutuhan anak (membentuk perilaku baru, meningkatkan atau menurunkan perilaku)."

        ],
        "9" => [
            "jadwal visual" => "Memberikan informasi tahapan pengerjaan tugas, pengoganisasian kegiatan, untuk meningkatkan pemahaman.",
            "sistem kerja" => "Memahami apa yang harus dilakukan, bagaimana dilakukan, kapan tugasnya selesai dan apa yang harus dilakukan setelah tugas itu selesai.",
            "struktur lingkungan fisik" => "Menciptakan lingkungan yang terorganisir secara visual untuk membantu individu memahami tugas dan rutinitas dengan baik.",
            "alat bantu visual" => "Kartu visual memberikan informasi yang jelas dan kosisten, mengurangi kecemasan, serta meningkatkan pemahaman."
        ],


    ];
    public function index(string $module_id, string $quiz_id)
    {
        return view('learning.course.interactive.quiz1-'.$quiz_id, ["module_id" => $module_id, "quiz_id" => $quiz_id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, string $quiz_id, string $module_id)
    {
        $validator = Validator::make($request->all(), [
            "answers" => "required|array",
            "duration" => "required|integer|min:0"
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'type'   => 'validation',
                'message'=> 'Format jawaban tidak sesuai',
                'errors' => $validator->errors(),
            ], 422);
        }

        if ($quiz_id < 1 || $quiz_id > 9) {
            return response()->json([
                'status'  => 'error',
                'type'    => 'not_found',
                'message' => 'Id Interactive tidak ditemukan',
            ], 404);
        }
        $answers = $request->input("answers");
        Log::info('Answer sent to quiz:', [
            'quiz_id' => $quiz_id,
            'answers' => $answers
        ]);

        $result = [];
        try {
            switch($quiz_id){
                case 1:
                    // Jawaban berupa array of string
                    $result = $this->calculateArrayScore($answers, $this->answer["1"]);
                    break;

                case 2:
                    // Jawaban berupa map dengan array values
                    $result = $this->calculateMapScore($answers, $this->answer["2"]);
                    break;

                case 3:
                    $result = $this->calculateArrayScore($answers, $this->answer["3"]);
                    break;

                case 4:
                    $result = $this->calculateArrayScore($answers, $this->answer["4"]);
                    break;

                case 5:
                    $result = $this->calculateArrayScore($answers, $this->answer["5"]);
                    break;

                case 6:
                    // Jawaban berupa map dengan string values
                    $result = $this->calculateMapScore($answers, $this->answer["6"]);
                    break;

                case 7:
                    // Jawaban berupa map dengan array values (low/high)
                    $result = $this->calculateMapScore($answers, $this->answer["7"]);
                    break;

                case 8:
                    // Jawaban berupa map dengan string values
                    $result = $this->calculateMapScore($answers, $this->answer["8"]);
                    break;

                case 9:
                    // Jawaban berupa map dengan string values
                    $result = $this->calculateMapScore($answers, $this->answer["9"]);
                    break;

                default:
                    $result = 0;
                    break;
            }

            // Calculate score
            $correct = $result["correct"];
            $incorrect = $result["incorrect"];
            $score = $correct / ($correct + $incorrect) * 100;
            $score = round($score, 2);
            $duration = $request->input("duration", 0);
            Log::info("Score calculated :", [
                "correct" => $correct,
                "incorrect" => $incorrect,
                "score" => $score,
                "duration" => $duration
            ]);
            $user_id = Auth::id();
            dd(Auth::user());

            // TODO: Use transaction manually
            DB::transaction(function() use ($user_id, $module_id, $quiz_id, $correct, $incorrect, $score, $duration) {
                // Get the progress_id from progress_tracking table
                $progress_id = DB::table("progress_tracking")
                    ->where("user_id", $user_id)
                    ->where("module_id", $module_id)
                    ->value("progress_id");

                // Upsert into user_quizzes table
                $user_quiz = DB::table("user_quizzes") // TODO: tambahkan data username
                    ->where("user_id", $user_id)
                    ->where("module_id", $module_id)
                    ->where("quiz_id", (int)$quiz_id)
                    ->first();

                if ($user_quiz) {
                    DB::table('user_quizzes')->where('id', $user_quiz->id)->update([
                        'attempt_count' => DB::raw('attempt_count + 1'),
                        'high_score' => DB::raw("GREATEST(high_score, $score)")
                    ]);
                    $user_quiz_id = $user_quiz->id;
                } else {
                    $user_quiz_id = DB::table('user_quizzes')->insertGetId([
                        'module_id' => $module_id,
                        'user_id' => $user_id,
                        'progress_id' => $progress_id,
                        'quiz_id' => $quiz_id,
                        'attempt_count' => 1,
                        'high_score' => $score
                    ]);
                }

                $attempt_number = DB::table('user_quizzes_attempt')
                ->where('user_quiz_id', $user_quiz_id)
                ->count() + 1;

                // Insert into user_quizzes_attempt table
                DB::table('user_quizzes_attempt')->insert([
                    'user_quiz_id' => $user_quiz_id,
                    'attempt_number' => $attempt_number,
                    'total_questions' => count($this->answer[$quiz_id]),
                    'correct_answers' => $correct,
                    'incorrect_answers' => $incorrect,
                    'score' => $score,
                    'is_passed' => $score >= 70 ? 1 : 0, // TODO: ganti dengan passing grade yang sesuai
                    'duration' => $duration,
                    'started_at' => now(), // TODO: ganti dengan waktu mulai yang sesuai
                    'finished_at' => now() // TODO: ganti dengan waktu selesai yang sesuai
                ]);
            });

            return response()->json([
                'status' => 'success',
                'type' => 'quiz_submitted',
                'message' => 'Kuis berhasil dikumpulkan',
                'data' => [
                    'correct' => $correct,
                    'incorrect' => $incorrect,
                    'score' => $score,
                    'redirect' => route('quiz.show', ['id' => $quiz_id + 1]) // Redirect ke kuis berikutnya
                ]
            ]);
        } catch (\Throwable $th) {
            Log::error("calculation error", [$th->getMessage()]);
            return response()->json([
                'status' => 'error',
                'type' => 'calculation_error',
                'message' => 'Terjadi kesalahan dalam perhitungan skor'
            ], 500);
        }

    }

    private function calculateArrayScore(array $answers, array $key_answers): array {
        $score = 0;
        foreach ($answers as $answer) {
            if (in_array(strtolower($answer), array_map('strtolower', $key_answers))) {
                $score++;
            }
        }

        $incorrect = count($answers) - $score;

        return [
            'correct' => $score,
            'incorrect' => $incorrect,
        ];
    }

    private function calculateMapScore(array $answers, array $key_answers): array {
        $score = 0;
        $total = 0;

        foreach ($answers as $key => $answer) {
            if (!isset($key_answers[$key])) {
                continue;
            }

            $key_answer = $key_answers[$key];

            if (is_string($answer) && is_string($key_answer)) {
                $total++;
                if (strtolower($answer) === strtolower($key_answer)) {
                    $score++;
                }
            } elseif (is_array($answer) && is_array($key_answer)) {
                $answer = array_map('strtolower', $answer);
                $key_answer = array_map('strtolower', $key_answer);

                $common = array_intersect($answer, $key_answer);
                $score += count($common);
                $total += count($answer); // each chosen answer counts toward total
            }
        }

        $incorrect = $total - $score;

        return [
            'correct' => $score,
            'incorrect' => $incorrect,
        ];
    }

    // private function calculateArrayScore(array $answers, array $key_answers): int{
    //     $score = 0;
    //     foreach ($answers as $answer){
    //         if(in_array(strtolower($answer),
    //             array_map('strtolower', $key_answers))){
    //             $score++;
    //         }
    //     }

    //     return $score;
    // }

    // private function calculateMapScore(array $answers, array $key_answers): int{
    //     $score = 0;
    //     foreach($answers as $key => $answer){
    //        if(!isset($key_answers[$key])){
    //            continue;
    //        }

    //        $key_answer = $key_answers[$key];
    //        if(is_string($answer) && is_string($key_answer)){
    //             if(strtolower($answer) === strtolower($key_answer)){
    //                 $score++;
    //             }
    //        }

    //        else if (is_array($answer) && is_array($key_answer)){
    //             $answer = array_map('strtolower', $answer);
    //             $key_answer = array_map('strtolower', $key_answer);
    //             $common = array_intersect($answer, $key_answer);
    //             $score += count($common);
    //         }
    //     }

    //     return $score;
    // }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
