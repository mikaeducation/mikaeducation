<?php

namespace App\Http\Controllers\Interactive;

use App\Http\Controllers\Controller;
use App\Models\Module;
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
    private $answer = [ // TODO: cek ulang jawaban sehingga sama dengan yang ada di front-end dan juga jawaban valid dari ppt
        "1" => [
            [
                "answer" => "Motorik",
                "explanation" => "Karakteristik motorik halus dan kasar perlu dipetakan untuk menentukan target pembelajaran motorik.",
                "correct" => true
            ],
            [
                "answer" => "Pemrosesan Sensoris",
                "explanation" => "Karakteristik inderawi individu dipetakan untuk mengarahkan pengelolaan stimulus. Perlu dipahami, anak autistik sering teralihkan belajar karena stimulus inderawi dirasa terlalu banyak (hipersensitif) atau terlalu sedikit (hiposensitif).",
                "correct" => true
            ],
            [
                "answer" => "Pemrosesan Informasi",
                "explanation" => "Cara anak menerima, memproses dan menyimpan informasi akan menentukan gaya dan kemampuan belajar.",
                "correct" => true
            ],
            [
                "answer" => "Perilaku",
                "explanation" => "Persoalan perilaku minat terbatas dan berulang perlu dipahami untuk menyusun strategi perilaku.",
                "correct" => true
            ],
            [
                "answer" => "Komunikasi Sosial",
                "explanation" => "Persoalan komunikasi sosial, baik secara ekspresif dan reseptif) akan menentukan level mulai pembelajaran dan target belajar anak.",
                "correct" => true
            ],
            [
                "answer" => "Bermain",
                "explanation" => "Kesulitan bermain adalah salah satu indikasi persoalan interaksi sosial pada ASD.",
                "correct" => true
            ],
            [
                "answer" => "Agresi",
                "explanation" => "Kekerasan/agresi bukan gejala autisme.",
                "correct" => false
            ],
            [
                "answer" => "Keubutuhan Makanan Khusus/Diet",
                "explanation" => "Diet bukan intervensi best practice utama untuk ASD.",
                "correct" => false
            ],
        ],
        "2" => [
            [
                "answer" => "Kelemahan melakukan kemampuan perhatian bersama",
                "explanation" => "Kesulitan joint attention (pemusatan perhatian bersama) akan menyulitkan anak untuk belajar dari mengamati orang lain.",
                "correct" => true
            ],
            [
                "answer" => "Melihat orang lain ketika berkomunikasi dengan lawan bicara (lebih banyak melihat ke arah lain)",
                "explanation" => "Sulit mempertahankan kontak mata menyulitkan melakukan komunikasi sosial dan belajar.",
                "correct" => true
            ],
            [
                "answer" => "Sulit menggunakan dan memahami gestur dalam komunikasi",
                "explanation" => "Gestur adalah bentuk komunikasi dasar bagi anak tipikal tapi sulit digunakan anak autistik.",
                "correct" => true
            ],
            [
                "answer" => "Cenderung terbatas dalam komunikasi fungsional (untuk menyampaikan maksud/informasi dari diri ke orang lain)",
                "explanation" => "Salah satu bentuk kesulitan komunikasi sosial ASD yang paling awal dikenali.",
                "correct" => true
            ],
            [
                "answer" => "Orang lain menganggap anak kurang sopan",
                "explanation" => "Ini adalah dampak kesulitan komunikasi dan perilaku ASD.",
                "correct" => false
            ],
        ],
        "3" => [
            [
                "answer" => "Membuat suara",
                "explanation" => "Bentuk komunikasi ekspresif.",
                "correct" => true
            ],
            [
                "answer" => "Menggunakan kata tunggal",
                "explanation" => "Bentuk komunikasi ekspresif.",
                "correct" => true
            ],
            [
                "answer" => "Menggunakan kata yang terdiri dari 2-3 kata",
                "explanation" => "Bentuk komunikasi ekspresif.",
                "correct" => true
            ],
            [
                "answer" => "Berbicara dalam kalimat",
                "explanation" => "Bentuk komunikasi ekspresif.",
                "correct" => true
            ],
            [
                "answer" => "Echolalia (mengulang kata atau kalimat yang diucapkan seseorang)",
                "explanation" => "Bentuk komunikasi ekspresif.",
                "correct" => true
            ],
            [
                "answer" => "Mengajukan pertanyaan",
                "explanation" => "Bentuk komunikasi ekspresif.",
                "correct" => true
            ],
            [
                "answer" => "Membuat komentar",
                "explanation" => "Bentuk komunikasi ekspresif.",
                "correct" => true
            ],
            [
                "answer" => "Melakukan percakapan/dialog",
                "explanation" => "Bentuk komunikasi ekspresif.",
                "correct" => true
            ],
            [
                "answer" => "Menggerakkan jari dan tangan untuk memungut",
                "explanation" => "Bentuk kemampuan motorik halus.",
                "correct" => false
            ],
            [
                "answer" => "Terpaku pada kualitas sensoris khas",
                "explanation" => "", // TODO: minta penjelasan
                "correct" => false
            ],
        ],
        "4" => [
            [
                "answer" => "Memahami pertanyaan yang baru didengarnya",
                "explanation" => "Bentuk komunikasi reseptif.",
                "correct" => true
            ],
            [
                "answer" => "Memahami suatu konsep baru",
                "explanation" => "Bentuk komunikasi reseptif.",
                "correct" => true
            ],
            [
                "answer" => "Memahami konsep abstrak seperti peribahasa, lawan kata, padanan kata dan majas",
                "explanation" => "Bentuk komunikasi reseptif.",
                "correct" => true
            ],
            [
                "answer" => "Mengajukan pertanyaan",
                "explanation" => "Bentuk komunikasi ekspresif.",
                "correct" => false
            ],
            [
                "answer" => "Terpaku pada kualitas sensoris khas",
                "explanation" => "Bentuk karakteristik sensoris.",
                "correct" => false
            ],
            [
                "answer" => "Membuat komentar",
                "explanation" => "Bentuk komunikasi ekspresif.",
                "correct" => false
            ],
        ],
        "5" => [
            [
                "answer" => "",
                "explanation" => "",
                "correct" => true
            ],
        ],
        "6" => [
            [
                "answer" => "",
                "explanation" => "",
                "correct" => true
            ],
        ],
        "7" => [
            [
                "answer" => "",
                "explanation" => "",
                "correct" => true
            ],
        ],
        "8" => [
            [
                "answer" => "",
                "explanation" => "",
                "correct" => true
            ],
        ],
        "5" => [
            "menyambut" => "Tidak bisa spontan mengatakan \"Halo\"",
            "isyarat" => "Kesulitan mengekspresikan perasaan dan suit memahami isyarat sosial",
            "perhatian" => "Sulit kontak mata, fokus mudah teralihkan",
            "kesadaran" => "Tidak menyadari ruang personal space orang lain"
        ],
        "6" => [
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
        "7" => [
            "Karakteristik" => "Deskripsikan perilaku anak. Uraikan apa yang mampu dilakukan dan yang masih perlu dikembangkan.",
            "Dampak" => "Apa konsekuensi perilaku pada anak, orang lain, lingkungan sekolah, masyarakat, dan masa depan anak.",
            "Strategi" => "Strategi intervensi sesuai kebutuhan anak (membentuk perilaku baru, meningkatkan atau menurunkan perilaku)."

        ],
        "8" => [
            "Jadwal Visual" => "Memberikan informasi tahapan pengerjaan tugas, pengoganisasian kegiatan, untuk meningkatkan pemahaman.",
            "Sistem Kerja" => "Memahami apa yang harus dilakukan, bagaimana dilakukan, kapan tugasnya selesai dan apa yang harus dilakukan setelah tugas itu selesai.",
            "Struktur Lingkungan Fisik" => "Menciptakan lingkungan yang terorganisir secara visual untuk membantu individu memahami tugas dan rutinitas dengan baik.",
            "Alat Bantu Visual" => "Kartu visual memberikan informasi yang jelas dan kosisten, mengurangi kecemasan, serta meningkatkan pemahaman."
        ],
        // NOTE: quiz cadangan
        // "2" => [
        //     "karakteristik" => [
        //         "Sulit melakukan relasi sosio-emosional timbal balik",
        //         "Sulit memahami komunikasi non-verbal",
        //         "Kesulitan memulai, mempertahankan dan memahami interaksi sosial",
        //     ],
        //     "minat" => [
        //         "Gerakan motorik, penggunaan objek atau wicara berulang.",
        //         "Menuntut kesamaan, tidak fleksibel, marah jika terjadi perubahan rutinitas/ritual/pola perilaku verbal atau nonverbal",
        //         "Perhatian terbatas atau minat yang terpaku pada satu hal secara berlebih-lebih",
        //         "Hyper-atau hipo-reaktivitas terhadap stimulus sensorik"
        //     ]
        // ],
    ];
    public function index(string $module_id, string $quiz_id)
    {
        return view('learning.course.interactive.quiz1-' . $quiz_id, ["module_id" => $module_id, "quiz_id" => $quiz_id]);
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
    public function update(Request $request, string $module_id, string $quiz_id)
    {
        $validator = Validator::make($request->all(), [
            "answers" => "required|array",
            "duration" => "required|integer|min:0"
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'type'   => 'validation',
                'message' => 'Format jawaban tidak sesuai',
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
            switch ($quiz_id) {
                case 1:
                    // Jawaban berupa array of string
                    $result = $this->calculateArrayScore($answers, $this->answer["1"]);
                    break;

                case 2:
                    // Jawaban berupa map dengan array values
                    $result = $this->calculateArrayScore($answers, $this->answer["2"]);
                    break;

                case 3:
                    $result = $this->calculateArrayScore($answers, $this->answer["3"]);
                    break;

                case 4:
                    $result = $this->calculateArrayScore($answers, $this->answer["4"]);
                    break;

                case 5:
                    // Jawaban berupa map dengan string values
                    $result = $this->calculateMapScore($answers, $this->answer["5"]);
                    break;

                case 6:
                    // Jawaban berupa map dengan array values (low/high)
                    $result = $this->calculateMapScore($answers, $this->answer["6"]);
                    break;

                case 7:
                    // Jawaban berupa map dengan string values
                    $result = $this->calculateMapScore($answers, $this->answer["7"]);
                    break;

                case 8:
                    // Jawaban berupa map dengan string values
                    $result = $this->calculateMapScore($answers, $this->answer["8"]);
                    break;

                // case 9:
                // $result = $this->calculateMapScore($answers, $this->answer["9"]);
                // break;

                default:
                    $result = 0;
                    break;
            }

            Log::info("Calculate Result:", [$result]);
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

            // TODO: Use transaction manually
            DB::transaction(function () use ($user_id, $module_id, $quiz_id, $correct, $incorrect, $score, $duration) {
                // Get the progress_id from progress_tracking table
                $progress_id = DB::table("progress_tracking")
                    ->where("user_id", $user_id)
                    ->where("module_id", $module_id)
                    ->value("progress_id");
                Log::info("progress", [$progress_id]);


                // Get the current User Profile
                $username = DB::table('profiles')
                    ->where('phone', Auth::user()->phone)
                    ->value('username');

                // Upsert into user_quizzes table
                $user_quiz = DB::table("user_quizzes") // TODO: tambahkan data username
                    ->where("user_id", $user_id)
                    ->where("module_id", $module_id)
                    ->where("quiz_id", (int)$quiz_id)
                    ->first();

                if ($user_quiz) {
                    DB::table('user_quizzes')
                        ->where('user_id', $user_quiz->user_id)
                        ->where('quiz_id', $quiz_id)
                        ->update([
                            'attempt_count' => DB::raw('attempt_count + 1'),
                            'high_score' => DB::raw("GREATEST(high_score, $score)")
                        ]);
                    $user_quiz_id = $user_quiz->user_quiz_id;
                } else {
                    $user_quiz_id = DB::table('user_quizzes')->insertGetId([
                        'module_id' => $module_id,
                        'user_id' => $user_id,
                        'progress_id' => $progress_id,
                        'quiz_id' => $quiz_id,
                        'attempt_count' => 1,
                        'high_score' => $score,
                        'username' => $username
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
                    'details' => $result['details'] ?? [],
                    'redirect' => route('quiz.show', ['module_id' => 1, 'id' => $quiz_id + 1]) // Redirect ke kuis berikutnya
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

    private function calculateArrayScore(array $answers, array $key_answers): array
    {
        $score = 0;
        $details = [];

        $answerMap = [];
        foreach ($key_answers as $item) {
            $normalized = strtolower(trim($item["answer"]));
            $answerMap[$normalized] = [
                "correct" => $item["correct"],
                "explanation" => $item["explanation"]
            ];
        }
        foreach ($answers as $i => $answer) {
            $normalized = strtolower(trim($answer));
            $isCorrect = $answerMap[$normalized]["correct"] ?? false;
            $explanation = $answerMap[$normalized]["explanation"] ?? "Jawaban tidak terdapat di list";

            $details[$i] = [
                'answer' => $answer,
                'correct' => $isCorrect,
                'explanation' => $explanation,
            ];
            if ($isCorrect) {
                $score++;
            }
        }

        $incorrect = count($answers) - $score;

        return [
            'correct' => $score,
            'incorrect' => $incorrect,
            'details' => $details,
        ];
    }

    private function calculateMapScore(array $answers, array $key_answers): array
    {
        $score = 0;
        $total = 0;
        $details = [];

        foreach ($answers as $key => $answer) {
            if (!isset($key_answers[$key])) {
                continue;
            }

            $key_answer = $key_answers[$key];

            if (is_string($answer) && is_string($key_answer)) {
                $total++;
                $isCorrect = strtolower($answer) === strtolower($key_answer);
                $details[$key] = [
                    'answer' => $answer,
                    'correct' => $isCorrect,
                ];
                if ($isCorrect) {
                    $score++;
                }
            } elseif (is_array($answer) && is_array($key_answer)) {
                $answer_lower = array_map('strtolower', $answer);
                $key_answer_lower = array_map('strtolower', $key_answer);

                $common = array_intersect($answer_lower, $key_answer_lower);
                $score += count($common);
                $total += count($answer); // each chosen answer counts toward total

                $details[$key] = [
                    'answer' => $answer,
                    'correct' => count($common) === count($answer) && count($answer) === count($key_answer),
                ];
            }
        }

        $incorrect = $total - $score;

        return [
            'correct' => $score,
            'incorrect' => $incorrect,
            'details' => $details,
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
