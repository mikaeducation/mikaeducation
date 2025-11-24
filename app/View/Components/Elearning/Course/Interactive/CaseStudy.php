<?php

namespace App\View\Components\Elearning\Course\Interactive;

use App\Models\UserCaseStudy;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class CaseStudy extends Component
{
    public $has_submitted;

    public function __construct(public $id) {
        // $user_id = Auth::id();
        // $this->has_submitted = UserCaseStudy::where('case_study_id', $id) ->where('user_id', $user_id)->exists();
        $this->has_submitted = false; // WARN: ubah menjadi true jika ingin menonaktifkan button submit jika sudah ada record studi kasus user yang sedang login
    }

    public function render(): View|Closure|string
    {
        return view('components.elearning.course.interactive.case-study');
    }
}
