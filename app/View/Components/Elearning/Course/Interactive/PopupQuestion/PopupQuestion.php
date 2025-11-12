<?php

namespace App\View\Components\Elearning\Course\Interactive\PopupQuestion;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\SubmodulePopupQuestion;
use App\Models\UserPopupQuestion;

class PopupQuestion extends Component
{
    public $popup;
    public $user;

    public function __construct($id, $userId, $moduleId)
    {
        $this->popup = SubmodulePopupQuestion::findOrFail($id);
        $this->user = UserPopupQuestion::firstOrCreate(
            [
                'user_id' => $userId,
                'popup_question_id' => $this->popup->id,
            ],
            [
                'module_id' => $moduleId,
                'video_id' => $this->popup->video_id,
            ],
        );
    }

    public function render(): View|Closure|string
    {
        return view('components.elearning.course.interactive.popup-question.popup-question');
    }
}
