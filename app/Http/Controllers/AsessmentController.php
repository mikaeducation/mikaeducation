<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\ModuleAsessment;
use App\Models\UserAsessment;
use App\Models\UserAsessmentAttempt;
use App\Models\UserAnswerAsessment;
use App\Models\UserEvaluate;
use App\Models\UserAnswerEvaluate;
use App\Models\QuestionBank;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AsessmentController extends Controller
{
    public function check(Request $request)
    {
        $user = Auth::user();
        $moduleId = $request->module_id;
        $asessmentId = $request->asessment_id;

        $userAsessment = UserAsessment::where('user_id', $user->id)
            ->where('module_id', $moduleId)
            ->where('asessment_id', $asessmentId)
            ->first();

        $hasAttempt = $userAsessment ? true : false;

        return response()->json([
            'status' => 'ok',
            'sudah_mengisi' => $hasAttempt,
            'redirect_to' => ($asessmentId == 1) ? "/page2_1" : "/page8_1" // Menyesuaikan dengan penilaian I dan II
        ]);
    }

    public function submit(Request $request)
    {
        $user = Auth::user();
        $asessmentId = $request->asessment_id; // Ambil asessment_id dari request
        $moduleId = 1;
        $redirectPath = ($asessmentId == 1) ? '/page2_0?asessment_id=1' : '/page8_0?asessment_id=2'; // Menyesuaikan pengalihan

        $profile = $user->profile;
        $username = $profile?->username ?? 'Anonym';

        Log::debug("Submit triggered oleh user_id={$user->id}, asessment_id={$asessmentId}");

        DB::beginTransaction();
        try {

            $startedAt = Carbon::parse($request->input('started_at', now()));
            $finishedAt = now();

            $progress = DB::table('progress_tracking')
                ->where('user_id', $user->id)
                ->where('module_id', $moduleId)
                ->latest('created_at')
                ->first();

            if (!$progress || $progress->user_id !== $user->id) {
                Log::error("Progress tracking tidak ditemukan untuk user_id={$user->id}, module_id={$moduleId}");
                return back()->with('error', 'Data progress tidak ditemukan.');
            }

            Log::debug("Progress ID ditemukan: {$progress->progress_id}");

            $userAsessment = UserAsessment::firstOrCreate(
                [
                    'user_id' => $user->id,
                    'asessment_id' => $asessmentId,
                    'progress_id' => $progress->progress_id
                ],
                [
                    'module_id' => $moduleId,
                    'username' => $username,
                    'attempt_count' => 0
                ]
            );

            Log::debug("UserAsessment ID: {$userAsessment->userAsessment_id}");

            $userAsessment->increment('attempt_count');
            $attemptNumber = $userAsessment->attempt_count;

            $questions = QuestionBank::where('asessment_id', $asessmentId)->get();
            $total = $questions->count();
            $correct = 0;

            Log::debug("Total soal ditemukan: {$total}");

            $attempt = UserAsessmentAttempt::create([
                'userAsessment_id' => $userAsessment->userAsessment_id,
                'attempt_number' => $attemptNumber,
                'total_questions' => $total,
                'correct_answers' => 0,
                'incorrect_answers' => 0,
                'score' => 0,
                'is_passed' => false,
            ]);

            foreach ($questions as $q) {
                $userAnswer = $request->input('question_' . $q->question_id);
                $isCorrect = $userAnswer === $q->correct_answer;
    
                if ($isCorrect) $correct++;
    
                UserAnswerAsessment::create([
                    'attempt_id' => $attempt->attempt_id,
                    'question_id' => $q->question_id,
                    'user_answer' => $userAnswer,
                    'is_correct' => $isCorrect,
                ]);
            }

            $score = $total > 0 ? round(($correct / $total) * 100) : 0;

            $durationFormatted = gmdate('H:i:s', $startedAt->diffInSeconds($finishedAt));
    
            $attempt->update([
                'score' => $score,
                'is_passed' => $score >= 80,
                'correct_answers' => $correct,
                'incorrect_answers' => $total - $correct,
                'started_at' => $startedAt,
                'finished_at' => $finishedAt,
                'duration' => $durationFormatted,
            ]);
    

            if ($score > $userAsessment->high_score) {
                $userAsessment->update(['high_score' => $score]);
            }

            Log::debug("Nilai akhir: {$score}, lulus: " . ($score >= 80 ? 'YA' : 'TIDAK'));

            DB::commit();

            Log::debug("DB committed, redirect ke {$redirectPath}");
            
            return redirect($redirectPath)->with('success', 'Jawaban berhasil disimpan');
        } catch (\Exception $e) {
            Log::error("Gagal menyimpan penilaian: " . $e->getMessage());
            
            DB::rollBack();
            return back()->with('error', 'Gagal menyimpan: ' . $e->getMessage());
        }
    }


    public function submitEvaluasi(Request $request)
    {
        $user = Auth::user();
        $profile = $user->profile;
        $username = $profile?->username ?? 'Anonym';

        $moduleId = 1;
        $asessmentId = $request->asessment_id; // ambil asessment_id dari request
        $afterAsessmentId = $request->input('after_asessment_id', 1); // ambil after_asessment_id dari request
    
        Log::debug("submitEvaluasi triggered dari halaman: ", [
            'asessment_id' => $asessmentId,
            'after_asessment_id' => $afterAsessmentId
        ]);

        Log::debug('Sebelum validasi. Data: ', $request->all());

        $maxQuestion = ($afterAsessmentId == 2) ? 45 : 30;
        $minQuestion = 21;

        $validateRules = [];
        for ($i = $minQuestion; $i <= $maxQuestion; $i++) {
            $validateRules["question_$i"] = 'required|integer|min:1|max:5';
        }
        $request->validate($validateRules);

        Log::debug("Form Data yang Diterima:", $request->all());

        // === REDIRECT TUJUAN ===
        $redirectPath = ($afterAsessmentId == 2)
            ? '/preLearn'
            : '/page3_0';
        // Menyimpan jawaban pengguna pada session
        $answers = [];
        foreach ($request->all() as $key => $value) {
            if (Str::startsWith($key, 'question_')) {
                $answers[$key] = $value; // Menyimpan jawaban pengguna
            }
        }

        session(['user_answers' => $answers]);  // Simpan jawaban ke session

        DB::beginTransaction();
        try {

            $progress = DB::table('progress_tracking')
                ->where('user_id', $user->id)
                ->where('module_id', $moduleId)
                ->orderByDesc('created_at') // ambil progres terbaru
                ->first();

            if (!$progress || $progress->user_id !== $user->id) {
                Log::warning("Akses progress_id tidak valid oleh user_id={$user->id}");
                return back()->with('error', 'Akses progress tidak valid.');
            }

            // Cegah duplikasi evaluasi
            $existingEvaluate = UserEvaluate::where('user_id', $user->id)
                ->where('asessment_id', $asessmentId)
                ->where('after_asessment_id', $afterAsessmentId)
                ->where('progress_id', $progress->progress_id)
                ->first();

            if ($existingEvaluate) {
                return back()->with('error', 'Evaluasi hanya dapat diisi satu kali.');
            }

            Log::debug("Mulai menyimpan UserEvaluate");
            // Simpan evaluasi pengguna
            $evaluate = UserEvaluate::create([
                'user_id' => $user->id,
                'module_id' => $moduleId,
                'progress_id' => $progress->progress_id,
                'username' => $username,
                'asessment_id' => $asessmentId,
                'after_asessment_id' => $afterAsessmentId,
            ]);
            Log::debug("UserEvaluate ID: " . $evaluate->userEvaluate_id);

            // Simpan semua jawaban
            foreach ($request->all() as $key => $value) {
                if (Str::startsWith($key, 'question_')) {
                    $questionId = (int) Str::after($key, 'question_');
                    $numericValue = (int) $value;
            
                    // Validasi skala Likert 1–5
                    if ($numericValue >= 1 && $numericValue <= 5) {
                        UserAnswerEvaluate::create([
                            'user_evaluate_id' => $evaluate->userEvaluate_id,
                            'question_id' => $questionId,
                            'user_answer' => $numericValue,
                        ]);
                    }
                }
            }
            Log::debug("Semua jawaban berhasil disimpan");

            // Tambahkan Rekap Skala Likert
            $rekap = DB::table('user_answer_evaluate')
                ->where('user_evaluate_id', $evaluate->userEvaluate_id)
                ->selectRaw('
                    SUM(CASE WHEN user_answer = 1 THEN 1 ELSE 0 END) as scale_1_count,
                    SUM(CASE WHEN user_answer = 2 THEN 1 ELSE 0 END) as scale_2_count,
                    SUM(CASE WHEN user_answer = 3 THEN 1 ELSE 0 END) as scale_3_count,
                    SUM(CASE WHEN user_answer = 4 THEN 1 ELSE 0 END) as scale_4_count,
                    SUM(CASE WHEN user_answer = 5 THEN 1 ELSE 0 END) as scale_5_count
                ')
                ->first();

            Log::debug("Rekap skala Likert berhasil diambil:", (array) $rekap);

            $evaluate->update([
                'scale_1_count' => $rekap->scale_1_count,
                'scale_2_count' => $rekap->scale_2_count,
                'scale_3_count' => $rekap->scale_3_count,
                'scale_4_count' => $rekap->scale_4_count,
                'scale_5_count' => $rekap->scale_5_count,
                'answer_evaluate_count' =>
                    $rekap->scale_1_count +
                    $rekap->scale_2_count +
                    $rekap->scale_3_count +
                    $rekap->scale_4_count +
                    $rekap->scale_5_count,
            ]);
            Log::debug("Update rekap berhasil");

            if ((int) $afterAsessmentId == 2 && (int) $asessmentId == 3) {
            Log::debug("Berhasil masuk blok penyelesaian akhir, akan menyetop pembelajaran.");
                DB::table('progress_tracking')
                    ->where('user_id', $user->id)
                    ->where('module_id', $moduleId)
                    ->update(['is_completed' => true]);

                    app(\App\Http\Controllers\ProfileController::class)->storeLearningLog($user->id, $moduleId);
                
                session()->forget('is_learning');
            }

            Log::debug("Sebelum DB::commit()");

            DB::table('progress_history')
                ->where('progress_id', $progress->progress_id)
                ->where('page_path', '/page8_2_1')
                ->update(['status' => 'finished', 'updated_at' => now()]);
            
            DB::commit();

            Log::debug("DB:Commit selesai. Akan redirect ke: " . $redirectPath);
            Log::debug("Evaluasi berhasil disimpan untuk user: " . $user->id);

            return redirect($redirectPath)->with('success', 'Evaluasi berhasil disimpan');

        } catch (\Exception $e) {
            Log::error("Gagal menyimpan evaluasi: " . $e->getMessage());
            
            DB::rollBack();
            return back()->with('error', 'Gagal menyimpan evaluasi: ' . $e->getMessage());
        }
    }


    public function asessmentHistoryUser(Request $request)
    {
        $user = Auth::user();

        $page = $request->path();
        $asessmentId = $request->input('asessment_id');
        if ($page === 'page2_0' && !$request->has('asessment_id')) {
                return redirect('/page2_0?asessment_id=1');
            }
            if ($page === 'page8_0' && !$request->has('asessment_id')) {
                return redirect('/page8_0?asessment_id=2');
            }

        $moduleId = 1;

        // Ambil progress_id dari session (karena user bisa belajar ulang)
        $progressId = session('progress_id');
        $progress = DB::table('progress_tracking')->where('progress_id', $progressId)->first();

        if (!$progress || $progress->user_id !== $user->id) {
            Log::warning("Akses history tidak sah oleh user_id={$user->id} untuk progress_id={$progressId}");
            return redirect('/course')->with('error', 'Akses tidak sah.');
        }

        // Ambil informasi dari module_asessment
        $asessmentInfo = ModuleAsessment::where('asessment_id', $asessmentId)
            ->where('module_id', $moduleId)
            ->first();

        $currentProgress = DB::table('progress_tracking')
            ->where('user_id', $user->id)
            ->where('module_id', $moduleId)
            ->latest('created_at')
            ->first();
        // Ambil data user_asessment
        $userAsessment = UserAsessment::where('user_id', $user->id)
            ->where('module_id', $moduleId)
            ->where('asessment_id', $asessmentId)
            ->where('progress_id', $progressId)
            ->first();

        // Cek apakah sudah mengisi
        $sudahMengisi = $userAsessment !== null;

        // Ambil riwayat attempt pengguna
        $attempts = collect();

        if ($userAsessment) {
            $query = UserAsessmentAttempt::where('userAsessment_id', $userAsessment->userAsessment_id);

            // Sorting dinamis
            switch ($request->query('sort')) {
                case 'score_asc':
                    $query->orderBy('score', 'asc');
                    break;
                case 'score_desc':
                    $query->orderBy('score', 'desc');
                    break;
                case 'time_asc':
                    $query->orderBy('finished_at', 'asc');
                    break;
                default: // 'time_desc' or null
                    $query->orderBy('finished_at', 'desc');
            }

            $attempts = $query->get();
        }

         // View mana yang ditampilkan berdasarkan asessment_id
        $view = $asessmentId == 1 ? 'learning.course.page2_0' : 'learning.course.page8_0';

        return view($view, [
            'module_id' => $moduleId,
            'asessment_id' => $asessmentId,
            'asessmentInfo' => $asessmentInfo,
            'attempts' => $attempts,
            'sudahMengisi' => $sudahMengisi,
        ]);
    }

    public function checkUserEvaluation(Request $request) {
        $userId = $request->input('user_id');
        $progressId = $request->input('progress_id');
        $asessmentId = 3;
        $afterAsessmentId = $request->input('after_asessment_id');

        // Validasi minimal
        if (!$userId || !$progressId || !$afterAsessmentId) {
        return response()->json([
            'evaluationCompleted' => false,
            'error' => 'Missing parameters'
        ]);
    }
        
        // Ini Kondisi sementara bahwa evaluasi untuk Asessment 1, karena belum dikonfigurasi untuk asessment 2
        $evaluationCompleted = DB::table('user_evaluate')
            ->where('user_id', $userId)
            ->where('asessment_id', $asessmentId) 
            ->where('after_asessment_id', $afterAsessmentId)
            ->where('progress_id', $progressId)
            ->exists();
        
        return response()->json([
            'evaluationCompleted' => $evaluationCompleted,
        ]);
    }

}
