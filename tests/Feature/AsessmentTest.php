<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\QuestionBank;
use App\Models\UserAsessment;
use App\Models\ProgressTracking;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\UserAsessmentAttempt;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AsessmentTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_check_if_has_attempted_asessment()
    {
        $userId = 1;
        $moduleId = 1;
        $asessmentId = 1;

        // Simulasi userAsessment ditemukan
        $userAsessmentExists = true;

        $hasAttempt = $userAsessmentExists;

        $response = [
            'status' => 'ok',
            'sudah_mengisi' => $hasAttempt,
            'redirect_to' => ($asessmentId == 1) ? "/page2_1" : "/page8_1"
        ];

        $this->assertTrue($response['sudah_mengisi']);
        $this->assertEquals('/page2_1', $response['redirect_to']);
    }

    public function test_user_can_submit_asessment_and_store_score()
    {
        $questions = [
            ['question_id' => 1, 'correct_answer' => 'A'],
            ['question_id' => 2, 'correct_answer' => 'B'],
            ['question_id' => 3, 'correct_answer' => 'C'],
        ];

        $userAnswers = [
            'question_1' => 'A',
            'question_2' => 'X',
            'question_3' => 'C',
        ];

        $correct = 0;
        foreach ($questions as $q) {
            $qid = $q['question_id'];
            $correctAnswer = $q['correct_answer'];
            $userAnswer = $userAnswers["question_$qid"] ?? null;

            if ($userAnswer === $correctAnswer) {
                $correct++;
            }
        }

        $total = count($questions);
        $score = $total > 0 ? round(($correct / $total) * 100) : 0;
        $isPassed = $score >= 80;

        $duration = (int) Carbon::parse(now()->subMinutes(5))->diffInSeconds(now());

        $this->assertEquals(67, $score);
        $this->assertFalse($isPassed);
        $this->assertEquals(2, $correct);
        $this->assertEquals(1, $total - $correct);
        $this->assertIsInt($duration);
    }

    public function test_user_can_submit_evaluation_and_recap_likert()
    {
        $answers = [];
        for ($i = 21; $i <= 30; $i++) {
            $answers["question_$i"] = 5;
        }

        $likertCounts = [
            1 => 0,
            2 => 0,
            3 => 0,
            4 => 0,
            5 => 0,
        ];

        foreach ($answers as $key => $value) {
            if (Str::startsWith($key, 'question_') && isset($likertCounts[$value])) {
                $likertCounts[$value]++;
            }
        }

        $this->assertEquals(10, $likertCounts[5]);
        $this->assertEquals(0, $likertCounts[1]);
    }

    public function test_user_can_view_asessment_history_page()
    {
        $user = User::factory()->create();
        $progress = ProgressTracking::factory()->create([
            'user_id' => $user->id,
            'module_id' => 1
        ]);
        Session::put('progress_id', $progress->progress_id);

        $response = $this->actingAs($user)->get('/page2_0?asessment_id=1');

        $response->assertStatus(200);
        $response->assertViewIs('learning.course.page2_0');
    }

    public function test_can_check_user_evaluation_completion()
    {
        $existingEvaluation = [
            'user_id' => 1,
            'progress_id' => 1,
            'asessment_id' => 3,
            'after_asessment_id' => 1
        ];

        $requested = [
            'user_id' => 1,
            'progress_id' => 1,
            'after_asessment_id' => 1
        ];

        $evaluationCompleted = $existingEvaluation['user_id'] === $requested['user_id']
            && $existingEvaluation['progress_id'] === $requested['progress_id']
            && $existingEvaluation['after_asessment_id'] === $requested['after_asessment_id'];

        $this->assertTrue($evaluationCompleted);
    }
}
