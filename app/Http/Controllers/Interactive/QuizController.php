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
    private $answer = [
        // TODO: cek ulang jawaban sehingga sama dengan yang ada di front-end dan juga jawaban valid dari ppt
        '1' => [
            [
                'answer' => 'Motorik',
                'explanation' => 'Karakteristik motorik halus dan kasar perlu dipetakan untuk menentukan target pembelajaran motorik.',
                'correct' => true,
            ],
            [
                'answer' => 'Pemrosesan Sensoris',
                'explanation' =>
                    'Karakteristik inderawi individu dipetakan untuk mengarahkan pengelolaan stimulus. Perlu dipahami, anak autistik sering teralihkan belajar karena stimulus inderawi dirasa terlalu banyak (hipersensitif) atau terlalu sedikit (hiposensitif).',
                'correct' => true,
            ],
            [
                'answer' => 'Pemrosesan Informasi',
                'explanation' => 'Cara anak menerima, memproses dan menyimpan informasi akan menentukan gaya dan kemampuan belajar.',
                'correct' => true,
            ],
            [
                'answer' => 'Perilaku',
                'explanation' => 'Persoalan perilaku minat terbatas dan berulang perlu dipahami untuk menyusun strategi perilaku.',
                'correct' => true,
            ],
            [
                'answer' => 'Komunikasi Sosial',
                'explanation' =>
                    'Persoalan komunikasi sosial, baik secara ekspresif dan reseptif) akan menentukan level mulai pembelajaran dan target belajar anak.',
                'correct' => true,
            ],
            [
                'answer' => 'Bermain',
                'explanation' => 'Kesulitan bermain adalah salah satu indikasi persoalan interaksi sosial pada ASD.',
                'correct' => true,
            ],
            [
                'answer' => 'Agresi',
                'explanation' => 'Kekerasan/agresi bukan gejala autisme.',
                'correct' => false,
            ],
            [
                'answer' => 'Keubutuhan Makanan Khusus/Diet',
                'explanation' => 'Diet bukan intervensi best practice utama untuk ASD.',
                'correct' => false,
            ],
        ],
        '2' => [
            [
                'answer' => 'Kelemahan melakukan kemampuan perhatian bersama',
                'explanation' =>
                    'Kesulitan joint attention (pemusatan perhatian bersama) akan menyulitkan anak untuk belajar dari mengamati orang lain.',
                'correct' => true,
            ],
            [
                'answer' => 'Melihat orang lain ketika berkomunikasi dengan lawan bicara (lebih banyak melihat ke arah lain)',
                'explanation' => 'Sulit mempertahankan kontak mata menyulitkan melakukan komunikasi sosial dan belajar.',
                'correct' => true,
            ],
            [
                'answer' => 'Sulit menggunakan dan memahami gestur dalam komunikasi',
                'explanation' => 'Gestur adalah bentuk komunikasi dasar bagi anak tipikal tapi sulit digunakan anak autistik.',
                'correct' => true,
            ],
            [
                'answer' => 'Cenderung terbatas dalam komunikasi fungsional (untuk menyampaikan maksud/informasi dari diri ke orang lain)',
                'explanation' => 'Salah satu bentuk kesulitan komunikasi sosial ASD yang paling awal dikenali.',
                'correct' => true,
            ],
            [
                'answer' => 'Orang lain menganggap anak kurang sopan',
                'explanation' => 'Ini adalah dampak kesulitan komunikasi dan perilaku ASD.',
                'correct' => false,
            ],
        ],
        '3' => [
            [
                'answer' => 'Membuat suara',
                'explanation' => 'Bentuk komunikasi ekspresif.',
                'correct' => true,
            ],
            [
                'answer' => 'Menggunakan kata tunggal',
                'explanation' => 'Bentuk komunikasi ekspresif.',
                'correct' => true,
            ],
            [
                'answer' => 'Menggunakan kata yang terdiri dari 2-3 kata',
                'explanation' => 'Bentuk komunikasi ekspresif.',
                'correct' => true,
            ],
            [
                'answer' => 'Berbicara dalam kalimat',
                'explanation' => 'Bentuk komunikasi ekspresif.',
                'correct' => true,
            ],
            [
                'answer' => 'Echolalia (mengulang kata atau kalimat yang diucapkan seseorang)',
                'explanation' => 'Bentuk komunikasi ekspresif.',
                'correct' => true,
            ],
            [
                'answer' => 'Mengajukan pertanyaan',
                'explanation' => 'Bentuk komunikasi ekspresif.',
                'correct' => true,
            ],
            [
                'answer' => 'Membuat komentar',
                'explanation' => 'Bentuk komunikasi ekspresif.',
                'correct' => true,
            ],
            [
                'answer' => 'Melakukan percakapan/dialog',
                'explanation' => 'Bentuk komunikasi ekspresif.',
                'correct' => true,
            ],
            [
                'answer' => 'Menggerakkan jari dan tangan untuk memungut',
                'explanation' => 'Bentuk kemampuan motorik halus.',
                'correct' => false,
            ],
            [
                'answer' => 'Terpaku pada kualitas sensoris khas',
                'explanation' => '', // TODO: minta penjelasan
                'correct' => false,
            ],
        ],
        '4' => [
            [
                'answer' => 'Memahami pertanyaan yang baru didengarnya',
                'explanation' => 'Bentuk komunikasi reseptif.',
                'correct' => true,
            ],
            [
                'answer' => 'Memahami suatu konsep baru',
                'explanation' => 'Bentuk komunikasi reseptif.',
                'correct' => true,
            ],
            [
                'answer' => 'Memahami konsep abstrak seperti peribahasa, lawan kata, padanan kata dan majas',
                'explanation' => 'Bentuk komunikasi reseptif.',
                'correct' => true,
            ],
            [
                'answer' => 'Mengajukan pertanyaan',
                'explanation' => 'Bentuk komunikasi ekspresif.',
                'correct' => false,
            ],
            [
                'answer' => 'Terpaku pada kualitas sensoris khas',
                'explanation' => 'Bentuk karakteristik sensoris.',
                'correct' => false,
            ],
            [
                'answer' => 'Membuat komentar',
                'explanation' => 'Bentuk komunikasi ekspresif.',
                'correct' => false,
            ],
        ],
        '5' => [
            'menyambut' => [
                'answer' => 'Tidak bisa spontan mengatakan Halo',
                'explanation' => '',
                'correct' => true,
            ],
            'isyarat' => [
                'answer' => 'Kesulitan mengekspresikan perasaan dan suit memahami isyarat sosial',
                'explanation' => '',
                'correct' => true,
            ],
            'perhatian' => [
                'answer' => 'Sulit kontak mata, fokus mudah teralihkan',
                'explanation' => '',
                'correct' => true,
            ],
            'kesadaran' => [
                'answer' => 'Tidak menyadari ruang personal space orang lain',
                'explanation' => '',
                'correct' => true,
            ],
        ],
        '6' => [
            'low' => [
                [
                    'answer' => 'Kartu Visual',
                    'explanation' => '',
                    'correct' => true,
                ],
                [
                    'answer' => 'PECS',
                    'explanation' => '',
                    'correct' => true,
                ],
                [
                    'answer' => 'Papan komunikasi / ALS',
                    'explanation' => '',
                    'correct' => true,
                ],
                [
                    'answer' => 'Kartu Emosi',
                    'explanation' => '',
                    'correct' => true,
                ],
            ],
            'high' => [
                [
                    'answer' => 'Ipad (Compass, Lamb words for life)',
                    'explanation' => '',
                    'correct' => true,
                ],
                [
                    'answer' => 'Liberator Rugged 7, ProloQuo2Go',
                    'explanation' => '',
                    'correct' => true,
                ],
                [
                    'answer' => 'MIKA 1.0',
                    'explanation' => '',
                    'correct' => true,
                ],
            ],
        ],
        '7' => [
            'Karakteristik' => [
                'answer' => 'Deskripsikan perilaku anak. Uraikan apa yang mampu dilakukan dan yang masih perlu dikembangkan.',
                'explanation' => 'Kolom yang pertama diisi dalam Planning matriks.',
                'correct' => true,
            ],
            'Dampak' => [
                'answer' => 'Apa konsekuensi perilaku pada anak, orang lain, lingkungan sekolah, masyarakat, dan masa depan anak.',
                'explanation' => 'Kolom yang kedua diisi dalam Planning matriks.',
                'correct' => true,
            ],
            'Strategi' => [
                'answer' => 'Strategi intervensi sesuai kebutuhan anak (membentuk perilaku baru, meningkatkan atau menurunkan perilaku).',
                'explanation' => 'Kolom yang ketiga diisi dalam Planning matriks.',
                'correct' => true,
            ],
            [
                'answer' => 'Dokumen yang memfoto keadaan anak secara menyeluruh (komprehensif).',
                'explanation' => 'Definisi planning matriks.',
                'correct' => false,
            ],
            [
                'answer' => 'Bisa disusun dan digunakan oleh orang tua, guru dan professional.',
                'explanation' => 'Bagaimana planning matriks.',
                'correct' => false,
            ],
            [
                'answer' => 'Untuk memahami anak dan menyusun intervensi/pembelajaran yang paling pas.',
                'explanation' => 'Tujuan planning matriks.',
                'correct' => false,
            ],
        ],
        '8' => [
            'Jadwal Visual' => [
                'answer' => 'Memberikan informasi tahapan pengerjaan tugas, pengoganisasian kegiatan, untuk meningkatkan pemahaman',
                'explanation' => '',
                'correct' => true,
            ],
            'Sistem Kerja' => [
                'answer' =>
                    'Memahami apa yang harus dilakukan, bagaimana dilakukan, kapan tugasnya selesai dan apa yang harus dilakukan setelah tugas itu selesai',
                'explanation' => '',
                'correct' => true,
            ],
            'Struktur Lingkungan Fisik' => [
                'answer' =>
                    'Menciptakan lingkungan yang terorganisir secara visual untuk membantu individu memahami tugas dan rutinitas dengan baik',
                'explanation' => '',
                'correct' => true,
            ],
            'Alat Bantu Visual' => [
                'answer' => 'Kartu visual memberikan informasi yang jelas dan kosisten, mengurangi kecemasan, serta meningkatkan pemahaman',
                'explanation' => '',
                'correct' => true,
            ],
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
        session(['quiz_start_time_' . $quiz_id => now()]); // timer untuk kuis

        return view('learning.course.interactive.quiz1-' . $quiz_id, ['module_id' => $module_id, 'quiz_id' => $quiz_id]);
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
            'answers' => 'required|array',
            'duration' => 'required|integer|min:0', // TODO: hilangkan durasi dan hitung berdasarkan start dan end time
        ]);

        if ($validator->fails()) {
            return response()->json(
                [
                    'status' => 'error',
                    'type' => 'validation',
                    'message' => 'Format jawaban tidak sesuai',
                    'errors' => $validator->errors(),
                ],
                422,
            );
        }

        if ($quiz_id < 1 || $quiz_id > 9) {
            return response()->json(
                [
                    'status' => 'error',
                    'type' => 'not_found',
                    'message' => 'Id Interactive tidak ditemukan',
                ],
                404,
            );
        }
        $answers = $request->input('answers');
        Log::info('Answer sent to quiz:', [
            'quiz_id' => $quiz_id,
            'answers' => $answers,
        ]);

        $result = [];
        try {
            switch ($quiz_id) {
                case 1:
                    // Jawaban berupa array of string
                    $result = $this->calculateOneGroup($answers, $this->answer['1']);
                    break;

                case 2:
                    // Jawaban berupa map dengan array values
                    $result = $this->calculateOneGroup($answers, $this->answer['2']);
                    break;

                case 3:
                    $result = $this->calculateOneGroup($answers, $this->answer['3']);
                    break;

                case 4:
                    $result = $this->calculateOneGroup($answers, $this->answer['4']);
                    break;

                case 5:
                    // Jawaban berupa map dengan string values
                    $result = $this->calculateMatchingScore($answers, $this->answer['5']);
                    break;

                case 6:
                    // Jawaban berupa map dengan array values (low/high)
                    $result = $this->calculateTwoGroup($answers, $this->answer['6']);
                    break;

                case 7:
                    // Jawaban berupa map dengan string values
                    $result = $this->calculateMatchingScore($answers, $this->answer['7']);
                    break;

                case 8:
                    // Jawaban berupa map dengan string values
                    $result = $this->calculateMatchingScore($answers, $this->answer['8']);
                    break;

                // case 9:
                // $result = $this->calculateMapScore($answers, $this->answer["9"]);
                // break;

                default:
                    $result = 0;
                    break;
            }

            Log::info('Calculate Result:', [$result]);
            // Calculate score
            $correct = $result['correct'];
            $incorrect = $result['incorrect'];
            $score = ($correct / ($correct + $incorrect)) * 100;
            $score = round($score, 2);
            $duration = $request->input('duration', 0); // TODO: hilangkan durasi dan hitung berdasarkan start dan end time
            Log::info('Score calculated :', [
                'correct' => $correct,
                'incorrect' => $incorrect,
                'score' => $score,
                'duration' => $duration, // TODO: hilangkan durasi dan hitung berdasarkan start dan end time
            ]);
            $user_id = Auth::id();

            // TODO: Use transaction manually
            DB::transaction(function () use ($user_id, $module_id, $quiz_id, $correct, $incorrect, $score, $duration) {
                // Get the progress_id from progress_tracking table
                $progress_id = DB::table('progress_tracking')->where('user_id', $user_id)->where('module_id', $module_id)->value('progress_id');
                Log::info('progress', [$progress_id]);

                // Get the current User Profile
                $username = DB::table('profiles')
                    ->where('phone', Auth::user()->phone)
                    ->value('username');

                // Upsert into user_quizzes table
                $user_quiz = DB::table('user_quizzes') // TODO: tambahkan data username
                    ->where('user_id', $user_id)
                    ->where('module_id', $module_id)
                    ->where('quiz_id', (int) $quiz_id)
                    ->first();

                if ($user_quiz) {
                    DB::table('user_quizzes')
                        ->where('user_id', $user_quiz->user_id)
                        ->where('quiz_id', $quiz_id)
                        ->update([
                            'attempt_count' => DB::raw('attempt_count + 1'),
                            'high_score' => DB::raw("GREATEST(high_score, $score)"),
                            'updated_at' => now(),
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
                        'username' => $username,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }

                $attempt_number = DB::table('user_quizzes_attempt')->where('user_quiz_id', $user_quiz_id)->count() + 1;

                // Insert into user_quizzes_attempt table
                DB::table('user_quizzes_attempt')->insert([
                    'user_quiz_id' => $user_quiz_id,
                    'attempt_number' => $attempt_number,
                    'total_questions' => count($this->answer[$quiz_id]),
                    'correct_answers' => $correct,
                    'incorrect_answers' => $incorrect,
                    'score' => $score,
                    'duration' => $duration, // TODO: hilangkan durasi dan hitung berdasarkan start dan end time
                    'started_at' => session('quiz_start_time_' . $quiz_id, now()),
                    'finished_at' => now(),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                session()->forget('quiz_start_time_' . $quiz_id); // reset timer jika user melakukan submit
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
                    'redirect' => route('quiz.show', ['module_id' => 1, 'id' => $quiz_id + 1]), // Redirect ke kuis berikutnya
                ],
            ]);
        } catch (\Throwable $th) {
            Log::error('calculation error', [$th->getMessage()]);
            return response()->json(
                [
                    'status' => 'error',
                    'type' => 'calculation_error',
                    'message' => 'Terjadi kesalahan dalam perhitungan skor',
                ],
                500,
            );
        }
    }

    private function calculateOneGroup(array $answers, array $key_answers): array
    {
        $score = 0;
        $details = [];

        $answerMap = [];
        foreach ($key_answers as $item) {
            $normalized = strtolower(trim($item['answer']));
            $answerMap[$normalized] = [
                'correct' => $item['correct'],
                'explanation' => $item['explanation'],
            ];
        }
        foreach ($answers as $i => $answer) {
            $normalized = strtolower(trim($answer));
            $isCorrect = $answerMap[$normalized]['correct'] ?? false;
            $explanation = $answerMap[$normalized]['explanation'] ?? 'Jawaban tidak terdapat di list';

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
    private function calculateMatchingScore(array $answers, array $key_answers): array
    {
        $score = 0;
        $details = [];

        $totalCorrect = count(array_filter($key_answers, fn($item) => $item['correct'] === true));
        foreach ($key_answers as $key => $item) {
            // Item must be structured with answer, explanation, correct
            $correctAnswer = $item['answer'];
            $explanation = $item['explanation'] ?? null;
            $isCorrectFlag = $item['correct'] ?? true;

            $userAnswer = $answers[$key] ?? null;
            $isCorrect = $userAnswer && strtolower(trim($userAnswer)) === strtolower(trim($correctAnswer)) && $isCorrectFlag;

            if ($isCorrect) {
                $score++;
            }

            $details[$key] = [
                'question' => $key,
                'answer' => $userAnswer,
                'correct' => $isCorrect,
                'explanation' => $explanation,
            ];
        }

        $incorrect = $totalCorrect - $score;

        return [
            'correct' => $score,
            'incorrect' => $incorrect,
            'details' => $details,
        ];
    }

    private function calculateTwoGroup(array $answers, array $key_answers): array
    {
        $score = 0;
        $details = [];

        // Count only correct answers in key set
        $totalCorrect = 0;
        foreach ($key_answers as $group => $items) {
            foreach ($items as $item) {
                if (!empty($item['correct'])) {
                    $totalCorrect++;
                }
            }
        }

        foreach ($key_answers as $group => $items) {
            $userGroupAnswers = $answers[$group] ?? []; // user answers for this group

            foreach ($items as $expected) {
                $expectedAnswer = strtolower(trim($expected['answer']));
                $expectedCorrect = $expected['correct'] ?? true;
                $explanation = $expected['explanation'] ?? null;

                // Check if user placed this answer in this group
                $matched = false;
                foreach ($userGroupAnswers as $ua) {
                    if (strtolower(trim($ua)) === $expectedAnswer) {
                        $matched = true;
                        break;
                    }
                }

                $isCorrect = $matched && $expectedCorrect;
                if ($isCorrect) {
                    $score++;
                }

                $details[$group][] = [
                    'answer' => $expected['answer'],
                    'correct' => $isCorrect,
                    'explanation' => $explanation,
                ];
            }
        }

        $incorrect = $totalCorrect - $score;

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
