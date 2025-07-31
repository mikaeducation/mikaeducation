<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function showQuiz(Request $request, $page)
    {
        // You can explode or use it directly
        $viewPath = str_replace('.', '/', $page);
        $quiz_id = $request->query('quiz_id'); // optionally passed in query string

        // Simulate user progress_id from session (or wherever you store it)
        $progress_id = session('progress_id'); // or Auth::user()->progress_id, etc.

        // Cek apakah user sudah pernah mengikuti quiz
        $sudahMengisi = false;
        if ($quiz_id) {
            $sudahMengisi = UserAsessment::where([
                'progress_id' => $progress->progress_id,
                'quiz_id' => $quiz_id,
            ])->exists();
        }

        // Cek folder view apakah page yg diminta ada
        if (View::exists("learning.course.interactive.$page")) {
            return view("learning.course.interactive.$page", compact('sudahMengisi', 'quiz_id'));
        }

        // If the view doesn't exist, show 404
        abort(404, "Page not found: $page");
    }
}
