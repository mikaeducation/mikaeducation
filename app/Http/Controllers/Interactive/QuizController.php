<?php

namespace App\Http\Controllers\Interactive;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class QuizController extends Controller
{
    public function showQuiz($quiz)
    {
        if (View::exists("learning.course.interactive.$quiz")) {
            return view("learning.course.interactive.$quiz");
        }

        abort(404, 'Page not found');
    }
}
