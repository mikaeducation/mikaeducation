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
            'redirect_to' => "/page2_1" // default redirect, bisa diatur dinamis
        ]);
    }

    public function submit(Request $request)
    {
        $user = Auth::user();
        $asessmentId = 1;
        $moduleId = 1;
        $redirectPath = '/page2_0';

        $profile = $user->profile;
        $username = $profile?->username ?? 'Anonym';

        DB::beginTransaction();
        try {

            $userAsessment = UserAsessment::firstOrCreate(
                ['user_id' => $user->id, 'asessment_id' => $asessmentId],
                ['module_id' => $moduleId, 'username' => $username, 'attempt_count' => 0]
            );

            $userAsessment->increment('attempt_count');
            $attemptNumber = $userAsessment->attempt_count;

            $attempt = UserAsessmentAttempt::create([
                'userAsessment_id' => $userAsessment->userAsessment_id,
                'attempt_number' => $attemptNumber,
                'started_at' => now(),
                'finished_at' => now(),
                'duration' => 0,
                'score' => 0,
                'is_passed' => false,
            ]);

            $questions = QuestionBank::where('asessment_id', $asessmentId)->get();
            $total = $questions->count();
            $correct = 0;

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
            $attempt->update([
                'score' => $score,
                'is_passed' => $score >= 80
            ]);

            DB::commit();
            
            return redirect($redirectPath)->with('success', 'Jawaban berhasil disimpan');
        } catch (\Exception $e) {
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
        $asessmentId = 3; // khusus evaluasi keyakinan
        $redirectPath = '/page3_0'; // setelah evaluasi selesai langsung ke pembelajaran

        DB::beginTransaction();
        try {
            // Cegah duplikasi evaluasi
            $existingEvaluate = UserEvaluate::where('user_id', $user->id)
                ->where('asessment_id', $asessmentId)
                ->first();

            if ($existingEvaluate) {
                return back()->with('error', 'Evaluasi hanya dapat diisi satu kali.');
            }

            $afterAsessmentId = (int) $request->input('after_asessment_id', 1);

            // Simpan evaluasi pengguna
            $evaluate = UserEvaluate::create([
                'user_id' => $user->id,
                'module_id' => $moduleId,
                'username' => $username,
                'asessment_id' => $asessmentId,
                'after_asessment_id' => $afterAsessmentId,
            ]);

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
            

            DB::commit();
            return redirect($redirectPath)->with('success', 'Evaluasi berhasil disimpan');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal menyimpan evaluasi: ' . $e->getMessage());
        }
    }


    public function asessmentHistoryUser()
    {
        $user = Auth::user();
        $asessmentId = 1; // Asesmen I
        $moduleId = 1;

        // Ambil informasi dari module_asessment
        $asessmentInfo = ModuleAsessment::where('asessment_id', $asessmentId)
            ->where('module_id', $moduleId)
            ->first();

        // Ambil data user_asessment
        $userAsessment = UserAsessment::where('user_id', $user->id)
            ->where('asessment_id', $asessmentId)
            ->first();

        // Cek apakah sudah mengisi
        $sudahMengisi = $userAsessment !== null;

        // Ambil riwayat attempt pengguna
        $attempts = $userAsessment
            ? UserAsessmentAttempt::where('userAsessment_id', $userAsessment->userAsessment_id)
                ->orderByDesc('finished_at')
                ->get()
            : collect();

        return view('learning.course.page2_0', compact('asessmentInfo', 'attempts', 'sudahMengisi'));
    }
}
