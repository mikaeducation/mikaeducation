<?php

namespace App\Http\Controllers\Interactive;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function showQuiz(Request $page)
    {
        $viewPath = str_replace('.', '/', $page);

        // Cek folder view apakah page yg diminta ada
        if (View::exists("learning.course.interactive.$page")) {
            return view("learning.course.interactive.$page");
        }

        // If the view doesn't exist, show 404
        abort(404, "Page not found: $page");
    }
}
