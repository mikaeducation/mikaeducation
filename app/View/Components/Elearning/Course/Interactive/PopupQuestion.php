<?php

namespace App\View\Components\Elearning\Course\Interactive;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PopupQuestion extends Component
{
    /**
     * Create a new component instance.
     */
    public $answers;

    public function __construct($answers)
    {
        $this->answers = $answers;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.elearning.course.interactive.popup-question');
    }
}
