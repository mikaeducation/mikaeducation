<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAsessment;
use Illuminate\Support\Facades\Auth;

class AsessmentController extends Controller
{
    public function check(Request $request)
    {
        $user = Auth::user();
        $moduleId = $request->module_id;
        $asessmentId = $request->asessment_id;

        $userAsessment = UserAsessment::where('user_id', $user->id)
            ->where('module_id', $moduleId)
            ->where('asessment_id', $asessmentId)
            ->first();

        $hasAttempt = $userAsessment ? true : false;

        return response()->json([
            'status' => 'ok',
            'sudah_mengisi' => $hasAttempt,
            'redirect_to' => "/page2_1" // default redirect, bisa diatur dinamis
        ]);
    }
}
