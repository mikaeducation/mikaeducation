<?php

namespace App\View\Components\Elearning\Course\Interactive\PopupQuestion;

use App\Models\UserPopupQuestion;
use App\Models\SubmodulePopupQuestion;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ResetButton extends Component
{
    public $userId;
    public $moduleId;
    public $videoId;

    public function __construct($userId, $moduleId, $videoId)
    {
        $this->userId = $userId;
        $this->moduleId = $moduleId;
        $this->videoId = $videoId;
    }

    public function render(): View|Closure|string
    {
        return view('components.elearning.course.interactive.popup-question.reset-button');
    }

    public function shouldRender()
    {
        if (!$this->userId || !$this->videoId) {
            return false;
        }

        $totalPopups = SubmodulePopupQuestion::where('video_id', $this->videoId)->count();

        if ($totalPopups === 0) {
            return false;
        }

        $videoId = SubmodulePopupQuestion::where('video_id', $this->videoId)->pluck('id');

        $userTriggeredCount = UserPopupQuestion::where('user_id', $this->userId)
            ->whereIn('popup_question_id', $videoId)
            ->where('is_triggered', true)
            ->count();

        return $userTriggeredCount === $totalPopups;
    }
}
