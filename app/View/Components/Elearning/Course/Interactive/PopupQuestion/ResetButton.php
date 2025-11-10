<?php

namespace App\View\Components\Elearning\Course\Interactive\PopupQuestion;

use App\Models\UserPopupQuestion;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ResetButton extends Component
{
    public $id;
    public $userId;
    public $moduleId;

    public function __construct($id, $userId, $moduleId)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->moduleId = $moduleId;
    }

    public function render(): View|Closure|string
    {
        return view('components.elearning.course.interactive.popup-question.reset-button');
    }

    public function shouldRender()
    {
        if (empty($this->id) || !$this->userId) {
            return false;
        }

        $q = UserPopupQuestion::whereIn('id', $this->id)->where('user_id', $this->userId)->where('is_triggered', true);

        if ($this->moduleId !== null) {
            $q->where('module_id', $this->moduleId);
        }

        return $q->exists();
    }
}
