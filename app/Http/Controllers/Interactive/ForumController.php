<?php

namespace App\Http\Controllers\Interactive;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Interactive\ForumThreads;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    //
    public function index(string $module_id)
    {
        $module = Module::where('module_id', $module_id)->firstOrFail();
        $threads = ForumThreads::where('module_id', $module_id)->latest()->paginate(10);

        return view('learning.course.interactive.forum.threads', compact('module', 'threads'));
    }
}
