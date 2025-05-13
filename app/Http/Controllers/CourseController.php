<?php

namespace App\Http\Controllers;

use App\Models\QuestionBank;
use App\Models\UserAsessment;
use App\Models\ProgressHistory;
use App\Models\ProgressTracking;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;


class CourseController extends Controller
{
    // Memastikan semua method dapat berfungsi dan berjalan ketika pengguna yang sudah login
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Menampilkan halaman awal course (/course)
    public function showCourse()
    {
        $user = Auth::user();
        $moduleId = 1;

        $progress = ProgressTracking::where('user_id', $user->id)
            ->where('module_id', $moduleId)
            ->latest('created_at')
            ->first();

            if (!$progress) {
            $attempt = ProgressTracking::where('user_id', $user->id)->where('module_id', $moduleId)->count() + 1;
            $progress = ProgressTracking::create([
                'user_id' => $user->id,
                'module_id' => $moduleId,
                'attempt_number' => $attempt,
                'current_part' => 'modul-introduce',
                'percent_done' => 0,
                'is_completed' => false,
                'last_visited_at' => now(),
            ]);
        }

        session(['progress_id' => $progress->progress_id, 'module_id' => $moduleId]);

        $currentPart = $progress->current_part;
        $module = $this->getModuleByPart($currentPart);
        $started = $progress->started ?? false;

        // Catat progress history untuk halaman pertama
        $this->trackProgressUpdate($user, $currentPart, '/course');

        $existingIntroFinish = ProgressHistory::where('progress_id', $progress->progress_id)
            ->where('module_part', 'modul-introduce')
            ->where('status', 'finished')
            ->first();

        if (!$existingIntroFinish) {
            // Tandai history sebagai selesai
            ProgressHistory::create([
                'progress_id' => $progress->progress_id,
                'user_id' => $user->id,
                'module_id' => $moduleId,
                'module_part' => 'modul-introduce',
                'page_path' => '/course',
                'status' => 'finished',
            ]);

            // Hitung ulang total progress
            $progress->percent_done = $this->calculateTotalProgressByProgressId($progress->progress_id);
            $progress->save();
        }

        if ($progress->started && $currentPart !== 'modul-introduce') {
            $lastPage = ProgressHistory::where('progress_id', $progress->progress_id)
                ->where('module_part', $currentPart)
                ->latest('created_at')
                ->value('page_path');
        
            return $lastPage ? redirect($lastPage) : redirect('/course');
        }

        return view('learning.course.page1', compact('progress', 'started', 'currentPart', 'module'));
    }


    public function startCourse(Request $request)
    {
        $user = auth()->user();
        $moduleId = $request->input('module_id', 1);

        $module = DB::table('modules')->where('module_id', $moduleId)->first();
            if (!$module) {
                return redirect()->back()->with('error', 'Modul tidak ditemukan.');
            }
        
        // Ambil progress terakhir
        $latestProgress = ProgressTracking::where('user_id', $user->id)
            ->where('module_id', $moduleId)
            ->latest('created_at')
            ->first();

        // === Case: modul tidak bisa diulang dan sudah selesai ===
        if ($latestProgress && $latestProgress->is_completed && !$module->module_type) {
            return redirect('/preLearn')->with('info', 'Anda telah menyelesaikan pelatihan ini dan tidak dapat mengulanginya.');
        }

        // === Case: masih ada progress aktif (belum selesai) ===
        if ($latestProgress && !$latestProgress->is_completed) {
            $lastHistory = ProgressHistory::where('progress_id', $latestProgress->progress_id)
                ->orderBy('created_at', 'desc')
                ->first();

            session()->put([
                            'is_learning' => true,
                            'progress_id' => $latestProgress->progress_id,
                            'module_id' => $moduleId
                        ]);

            if ($lastHistory && $lastHistory->page_path) {
                $lastPath = $lastHistory->page_path;

                // Redirect khusus agar akses ke halaman form evaluasi atau penilaian tidak langsung
                $redirectMap = [
                    '/page2_1'    => '/page2_0?asessment_id=1',
                    '/page2_2'    => '/page2_0?asessment_id=1',
                    '/page8_1'    => '/page8_0?asessment_id=2',
                    '/page8_2_0'  => '/page8_0?asessment_id=2',
                    '/page8_2_1'  => '/page8_0?asessment_id=2',
                ];

                if (array_key_exists($lastPath, $redirectMap)) {
                    return redirect($redirectMap[$lastPath]);
                }

                // Default redirect ke path terakhir jika tidak termasuk pengecualian
                return redirect($lastPath);
            }
        }

        Log::info("User {$user->id} memulai ulang modul {$moduleId} (Belajar Lagi)");

        // === Case: belajar ulang / baru ===
        $newAttempt = ProgressTracking::where('user_id', $user->id)
            ->where('module_id', $moduleId)
            ->count() + 1;

        $progressId = ProgressTracking::insertGetId([
            'user_id' => $user->id,
            'module_id' => $moduleId,
            'attempt_number' => $newAttempt,
            'current_part' => 'modul-introduce',
            'percent_done' => 0,
            'is_completed' => false,
            'last_visited_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProgressHistory::create([
            'progress_id' => $progressId,
            'user_id' => $user->id,
            'module_id' => $moduleId,
            'module_part' => 'modul-introduce',
            'page_path' => '/course',
            'status' => 'in_progress',
        ]);

        session()->put([
            'is_learning' => true,
            'progress_id' => $progressId,
            'module_id' => $moduleId
        ]);

        return redirect('/course');
    }

    
    // 	Menampilkan halaman course dinamis berdasarkan URL
    public function showCoursePage(Request $request)
    {
        $page = $request->path();
        if (($page === 'page2_0' && !$request->has('asessment_id'))) {
            return redirect('/page2_0?asessment_id=1');
        }

        if (($page === 'page8_0' && !$request->has('asessment_id'))) {
            return redirect('/page8_0?asessment_id=2');
        }

        if (!in_array($page, $this->allowedPages())) abort(404);

        if (session()->missing('is_learning') && !in_array($page, ['page2_2', 'page3_0', 'page8_2_0', 'page8_2_1'])) {
            return redirect('/preLearn');
        }

        $progressId = session('progress_id');
        $progress = ProgressTracking::find($progressId);
        
        if (!$progress || $progress->user_id !== Auth::id()) {
            return redirect('/course')->with('error', 'Akses tidak sah. Silakan mulai ulang.');
        }

        // Ambil progress aktif user berdasarkan current part
        $currentPart = $this->getCurrentPartFromPage($page) ?? 'modul-asessmen1';
        $module_id = $progress->module_id;
        $module = $progress->module;

        // Mapping halaman asesmen ke asessment_id
        $asessmentPages = [
            // Pretest (Asesmen I) dan Evaluation I
            'page2_0' => 1,
            'page2_1' => 1,
            'page2_2' => 3,
            // Posttest (Asesmen II) dan Evaluation II
            'page8_0' => 2,
            'page8_1' => 2,
            'page8_2_0' => 3,
            'page8_2_1' => 3,
        ];
        $asessment_id = $asessmentPages[$page] ?? null;

        // Cek apakah user sudah pernah mengikuti asesmen
        $sudahMengisi = false;
        if ($asessment_id) {
            $sudahMengisi = UserAsessment::where([
                'progress_id' => $progress->progress_id,
                'asessment_id' => $asessment_id,
            ])->exists();
        }

        // Simpan progres
        $this->trackProgressUpdate(Auth::user(), $currentPart, '/' . $page);

        // Deteksi apakah halaman ini form asesmen (butuh load $questions)
        $formPages = ['page2_1', 'page2_2', 'page8_1', 'page8_2_0', 'page8_2_1'];
        if (in_array($page, $formPages)) {
            $questions = ($page === 'page2_2')
                ? QuestionBank::where('asessment_id', 3)
                    ->whereBetween('question_id', [21, 30])->get()
                : QuestionBank::where('asessment_id', $asessment_id)->get();

            return view('learning.course.' . $page, compact(
                'currentPart',
                'module',
                'progress',
                'module_id',
                'asessment_id',
                'sudahMengisi',
                'questions'
            ));
        }

        // Halaman page2_0 (gabungan)
        if ($page === 'page2_0') {
            return view('learning.course.page2_0', compact(
                'currentPart',
                'module',
                'progress',
                'module_id',
                'asessment_id',
                'sudahMengisi'
            ));
        }

        // Default: render halaman tanpa pertanyaan
        return view('learning.course.' . $page, compact(
            'currentPart',
            'module',
            'progress',
            'module_id',
            'asessment_id',
            'sudahMengisi'
        ));
    }


    // API endpoint yang bisa dipanggil dari JavaScript untuk mencatat progres berdasarkan path halaman saat ini
    public function trackProgress(Request $request)
    {
        $user = Auth::user();
        $currentPath = $request->input('current_path');
        $currentPart = $this->getCurrentPartFromPage(ltrim($currentPath, '/'));

        if (!$currentPart) {
            return response()->json(['message' => 'Halaman tidak ditemukan di struktur modul.'], 400);
        }

        $this->trackProgressUpdate($user, $currentPart, $currentPath);

        return response()->json([
            'message' => 'Progress berhasil dicatat',
            'module' => $currentPart,
            'percent_done' => $this->calculateProgress($currentPart)
        ]);
    }


    public function saveProgressOnExit(Request $request)
    {
        $user = Auth::user();
        $currentPath = $request->input('current_path');
        $cleanPath = parse_url($currentPath, PHP_URL_PATH);
        $currentPart = $this->getCurrentPartFromPage(ltrim($cleanPath, '/'));


        if (!$currentPart) {
            return response()->json(['message' => 'Halaman tidak dikenali.'], 400);
        }

        $this->trackProgressUpdate($user, $currentPart, $currentPath);

        return response()->json(['message' => 'Progress disimpan saat keluar']);
    }


    // pencatat progres dan mengupdate ProgressTracking user, menandai halaman sebelumnya yang masih in_progress jadi finished (database),
    protected function trackProgressUpdate($user, $currentPart, $currentPath)
    {
        $progress = ProgressTracking::find(session('progress_id'));
        if ($progress->user_id !== Auth::id()) {
            return redirect('/course')->with('error', 'Akses tidak sah. Silakan mulai ulang.');
        }

        // Hitung total progres kumulatif dari seluruh modul yang sudah selesai
        $progress->percent_done = $this->calculateTotalProgressByProgressId($progress->progress_id);
        $progress->current_part = $currentPart;
        $progress->last_visited_at = now();
        $progress->save();

        // Dapatkan history terakhir yang masih in_progress
        $lastHistory = ProgressHistory::where('progress_id', $progress->progress_id)
            ->where('status', 'in_progress')
            ->latest('created_at')
            ->first();

        // Jika sedang pindah halaman dan sebelumnya masih in_progress, tandai selesai
        if ($lastHistory && $lastHistory->page_path !== $currentPath) {
            $lastHistory->status = 'finished';
            $lastHistory->save();
        }

        // [Tambahan solusi] Jika user saat ini berada di modul selain 'modul-introduce',
        // tapi tidak ada record 'finished' untuk modul-introduce, buat secara manual.
        if ($currentPart !== 'modul-introduce') {
            $hasIntroFinished = ProgressHistory::where('progress_id', $progress->progress_id)
                ->where('module_part', 'modul-introduce')
                ->where('status', 'finished')
                ->exists();

            if (!$hasIntroFinished) {
                ProgressHistory::create([
                    'progress_id' => $progress->progress_id,
                    'user_id' => $user->id,
                    'module_id' => $progress->module_id,
                    'module_part' => 'modul-introduce',
                    'page_path' => '/course',
                    'status' => 'finished',
                ]);
            }
        }

        // Cek apakah halaman ini sudah pernah disimpan
        $existing = ProgressHistory::where('progress_id', $progress->progress_id)
            ->where('page_path', $currentPath)
            ->first();

        if (!$existing) {
            ProgressHistory::create([
                'progress_id' => $progress->progress_id,
                'user_id' => $user->id,
                'module_id' => $progress->module_id,
                'module_part' => $currentPart,
                'page_path' => $currentPath,
                'status' => $progress->is_completed ? 'finished' : 'in_progress',
            ]);
        }
    }


    // //Menghitung total persentase progres berdasarkan part yang sudah finished
    // protected function calculateTotalProgress($progressId)
    // {
    //     $weights = [
    //         'modul-introduce' => 5,
    //         'modul-asessmen1' => 10,
    //         'submodul1' => 15,
    //         'submodul2' => 15,
    //         'submodul3' => 15,
    //         'submodul4' => 15,
    //         'modul-evaluative' => 15,
    //         'modul-asessmen2' => 10,
    //     ];

    //     // Ambil semua part yang sudah 'finished' dari history
    //     $finishedParts = ProgressHistory::where('progress_id', $progressId)
    //         ->where('status', 'finished')
    //         ->pluck('module_part')
    //         ->unique();

    //     // Jumlahkan bobotnya
    //     $total = 0;
    //     foreach ($finishedParts as $part) {
    //         $total += $weights[$part] ?? 0;
    //     }

    //     return $total;
    // }

    protected function calculateTotalProgressByProgressId($progressId)
    {
        $weights = [
            'modul-introduce' => 5,
            'modul-asessmen1' => 10,
            'submodul1' => 15,
            'submodul2' => 15,
            'submodul3' => 15,
            'submodul4' => 15,
            'modul-evaluative' => 15,
            'modul-asessmen2' => 10,
        ];

        $finishedParts = ProgressHistory::where('progress_id', $progressId)
            ->where('status', 'finished')
            ->pluck('module_part')
            ->unique();

        $total = 0;
        foreach ($finishedParts as $part) {
            $total += $weights[$part] ?? 0;
        }

        return $total;
    }

    /**
     * Dapatkan modul berdasarkan halaman
     */
    protected function getCurrentPartFromPage($page)
    {
        foreach ($this->getModulePages() as $part => $pages) {
            if (in_array('/' . $page, $pages)) return $part;
        }
        return null;
    }

    protected function getModuleByPage($page)
    {
        return $this->getCurrentPartFromPage($page); // fungsi sama
    }

    protected function getModuleByPart($part)
    {
        return $part; // Jika tidak ada struktur lain, cukup return langsung
    }

    protected function getModulePages()
    {
        return [
            'modul-introduce' => ['/course'],
            'modul-asessmen1' => ['/page2_0', '/page2_1', '/page2_2'],
            'submodul1' => ['/page3_0', '/page3_1_0', '/page3_1_1', '/page3_1_2', '/page3_1_3', '/page3_1_4'], // '/page3_2', '/page3_3'
            'submodul2' => ['/page4_0'], // '/page4_1', '/page4_2', '/page4_3'
            'submodul3' => ['/page5_0'], // '/page5_1', '/page5_2', '/page5_3' 
            'submodul4' => ['/page6_0', '/page6_1_0', '/page6_2'], // '/page6_1_1', '/page6_3'
            'modul-evaluative' => ['/page7'],
            'modul-asessmen2' => ['/page8_0', '/page8_1', '/page8_2_0', '/page8_2_1'],
        ];
    }

    private function allowedPages()
    {
        return collect($this->getModulePages())
            ->flatten()
            ->map(fn($path) => ltrim($path, '/')) // hapus leading slash agar cocok dengan $request->path()
            ->toArray();
    }
}
