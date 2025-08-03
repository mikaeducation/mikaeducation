<?php

namespace App\Http\Controllers\Interactive;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class QuizController extends Controller
{
    public function showQuiz($page)
    {
        if (View::exists("learning.course.interactive.$page")) {
            return view("learning.course.interactive.$page");
        }

        abort(404, 'Page not found');
    }
}
