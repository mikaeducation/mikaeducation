<?php

namespace App\Http\Controllers\Interactive;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\SubmodulePopupQuestion;

class PopupQuestionController extends Controller
{
    public function show()
    {
        $popup = SubmodulePopupQuestion::find(1);

        return view('learning.course.interactive.test-popup', compact('popup'));
    }

    public function fetch($id)
    {
        $popup = SubmodulePopupQuestion::find($id);

        if (!$popup) {
            return response()->json(
                [
                    'status' => 'error',
                    'message' => 'Popup question tidak ditemukan.',
                ],
                404,
            );
        }

        return response()->json([
            'status' => 'success',
            'data' => $popup,
        ]);
    }

    public function checkAnswer(Request $request, $id)
    {
        $request->validate([
            'answer_no' => 'required|integer',
        ]);

        $popup = SubmodulePopupQuestion::findOrFail($id);
        $answers = collect($popup->answers);
        $selected = $answers->firstWhere('no', $request->answer_no);
        $correct = $answers->firstWhere('is_correct', true);

        if ($selected && $selected['is_correct']) {
            $message = "{$selected['explanation']}";
        } else {
            $message = "{$selected['explanation']}";
        }

        return response()->json([
            'correct' => $selected['is_correct'] ?? false,
            'message' => $message,
            'explanation' => $selected['explanation'],
            'correct_answer' => $correct['text'],
        ]);
    }
}
