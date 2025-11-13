<?php

namespace App\Http\Controllers\Interactive;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Interactive\ForumThreads;
use App\Models\Interactive\ForumPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ForumController extends Controller
{
    //
    public function index(int $module_id)
    {
        $module = Module::where('module_id', $module_id)->firstOrFail();
        $threads = ForumThreads::where('module_id', $module_id)->latest()->paginate(10);

        return view('learning.course.interactive.forum.threads', compact('module', 'threads'));
    }

    public function threadShow(string $module_id, ForumThreads $thread)
    {
        if ((string) $thread->module_id !== $module_id) {
            abort(404);
        }

        // Load the thread's posts, ordered by creation time, and paginate them
        $posts = $thread->posts()->with('user')->oldest()->paginate(10);

        // Load module information for context
        $module = Module::where('module_id', $module_id)->firstOrFail();

        return view('learning.course.interactive.forum.thread-detail', compact('module', 'thread', 'posts'));
    }

    // Mengalihkan ke halaman create thread
    public function threadCreate(string $module_id)
    {
        $module = Module::where('module_id', $module_id)->firstOrFail();
        if (!$module) {
            abort(404);
        }

        return view('learning.course.interactive.forum.create-thread', compact('module'));
    }

    public function threadStore(string $module_id, Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|min:10|max:150',
                'content' => 'required|string|min:20|max:10000',
            ]);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        }

        $thread = ForumThreads::create([
            'module_id' => $module_id,
            'user_id' => Auth::id(),
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect()
            ->route('forum.thread.show', [$module_id, $thread->id])
            ->with('success', 'Diskusi baru berhasil dibuat!');
    }

    public function postStore(string $module_id, ForumThreads $thread, Request $request)
    {
        if ((string) $thread->module_id !== $module_id) {
            abort(404);
        }

        try {
            $request->validate([
                'content' => 'required|string|min:5|max:5000',
            ]);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        }

        ForumPost::create([
            'thread_id' => $thread->id,
            'user_id' => Auth::id(),
            'content' => $request->input('content'),
        ]);

        return redirect()
            ->route('forum.thread.show', [$module_id, $thread->id])
            ->with('success', 'Balasan baru berhasil dibuat!');
    }
}
