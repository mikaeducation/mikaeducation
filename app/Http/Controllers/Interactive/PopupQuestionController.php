<?php

namespace App\Http\Controllers\Interactive;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\SubmodulePopupQuestion;
use App\Models\UserPopupQuestion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PopupQuestionController extends Controller
{
    public function triggeredUpdate($popup_id, $isCorrect)
    {
        $record = UserPopupQuestion::where('user_id', Auth::id())->where('popup_question_id', $popup_id)->firstOrFail();

        $record->update([
            'is_triggered' => true,
            'is_correct' => $isCorrect,
        ]);
    }

    public function checkAnswer(Request $request, $popup_id)
    {
        $request->validate([
            'answer_no' => 'required|integer',
        ]);

        $popup = SubmodulePopupQuestion::findOrFail($popup_id);
        $answers = collect($popup->answers);
        $selected = $answers->firstWhere('no', $request->answer_no);
        $correct = $answers->firstWhere('is_correct', true);

        if ($selected && $selected['is_correct']) {
            $message = "{$selected['explanation']}";
        } else {
            $message = "{$selected['explanation']}";
        }

        Log::info('Popup question checked:', [
            'correct' => $selected['is_correct'] ?? false,
            'message' => $message,
            'explanation' => $selected['explanation'],
            'correct_answer' => $correct['no'],
        ]);

        $this->triggeredUpdate($popup_id, $selected['is_correct'] ?? false);

        return response()->json([
            'correct' => $selected['is_correct'] ?? false,
            'message' => $message,
            'explanation' => $selected['explanation'],
            'correct_answer' => $correct['no'],
        ]);
    }

    public function resetPopup($video_id, $user_id)
    {
        $resetCount = UserPopupQuestion::where('user_id', $user_id)
            ->where('video_id', $video_id)
            ->update([
                'is_triggered' => false,
            ]);

        return response()->json([
            'message' => "Successfully reset $resetCount popup statuses for Video ID: $video_id.",
            'success' => true,
        ]);
    }
}
