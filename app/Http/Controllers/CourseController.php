<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAsessment;
use App\Models\ProgressHistory;
use App\Models\ProgressTracking;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
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
        $progress = ProgressTracking::firstOrCreate(
            ['user_id' => $user->id],
            [
                'module_id' => 1,
                'current_part' => 'modul-introduce',
                'percent_done' => 0,
                'is_completed' => false,
                'last_visited_at' => now(),
            ]
        );

        $currentPart = $progress->current_part;
        $module = $this->getModuleByPart($currentPart);
        $started = $progress->started ?? false;

        // Catat progress history untuk halaman pertama
        $this->trackProgressUpdate($user, $currentPart, '/course');

        $existingIntroFinish = ProgressHistory::where('user_id', $user->id)
            ->where('module_part', 'modul-introduce')
            ->where('status', 'finished')
            ->first();

        if (!$existingIntroFinish) {
            // Tandai history sebagai selesai
            ProgressHistory::create([
                'progress_id' => $progress->progress_id,
                'user_id' => $user->id,
                'module_id' => 1,
                'module_part' => 'modul-introduce',
                'page_path' => '/course',
                'status' => 'finished',
            ]);

            // Hitung ulang total progress
            $progress->percent_done = $this->calculateTotalProgress($user->id);
            $progress->save();
        }

        if ($progress->started && $currentPart !== 'modul-introduce') {
            $lastPage = ProgressHistory::where('user_id', $user->id)
                ->where('module_part', $currentPart)
                ->latest('created_at')
                ->value('page_path');
        
            // Optional: validasi apakah lastPage memang termasuk dalam route yang dikenal
            if ($lastPage && in_array($lastPage, config('app.allowed_pages'))) {
                return redirect($lastPage);
            }
        
            return redirect('/course');
        }

        return view('learning.course.page1', compact('progress', 'started', 'currentPart', 'module'));
    }


    public function startCourse(Request $request)
    {
        $user = auth()->user();
        $moduleId = 1; // Sesuaikan jika dynamic

        // Cek apakah user sudah punya progress
        $progress = DB::table('progress_tracking')
            ->where('user_id', $user->id)
            ->where('module_id', $moduleId)
            ->first();

        if ($progress) {
            // Ambil halaman terakhir dikunjungi dari history
            $lastHistory = DB::table('progress_history')
                ->where('progress_id', $progress->progress_id)
                ->orderBy('created_at', 'desc')
                ->first();

            if ($lastHistory && $lastHistory->page_path) {
                return redirect($lastHistory->page_path); // Redirect ke page terakhir
            } else {
                return redirect('/course'); // Default fallback
            }
        }

        // Jika belum ada progress, buat data awal
        $progressId = DB::table('progress_tracking')->insertGetId([
            'user_id' => $user->id,
            'module_id' => $moduleId,
            'current_part' => 'modul-introduce',
            'percent_done' => 0,
            'is_completed' => false,
            'last_visited_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Simpan ke history
        DB::table('progress_history')->insert([
            'progress_id' => $progressId,
            'user_id' => $user->id,
            'module_id' => $moduleId,
            'module_part' => 'modul-introduce',
            'page_path' => '/course', // Asumsikan ini halaman awal
            'status' => 'in_progress',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect('/course');
    }

    // 	Menampilkan halaman course dinamis berdasarkan URL
    public function showCoursePage(Request $request)
    {
        $page = $request->path(); // contoh: 'page2_0'
        $currentPart = $this->getCurrentPartFromPage($page);

        // Ambil progress aktif user berdasarkan current part
        $progress = \App\Models\ProgressTracking::where('user_id', Auth::id())
            ->where('current_part', $currentPart)
            ->first();

        $module_id = $progress?->module_id;
        $module = $progress?->module;

        // Mapping halaman asesmen ke asessment_id
        $asessmentPages = [
            'page2_0' => 1, // pretest (Asesmen I)
            'page2_2' => 1, // hasil pretest (untuk ulangi)
            'page8_0' => 2, // posttest (Asesmen II)
            // Tambahkan lainnya sesuai kebutuhan
        ];
        $asessment_id = $asessmentPages[$page] ?? null;

        // Cek apakah user sudah pernah mengikuti asesmen
        $sudahMengisi = false;
        if ($module_id && $asessment_id) {
            $sudahMengisi = \App\Models\UserAsessment::where([
                'user_id' => Auth::id(),
                'module_id' => $module_id,
                'asessment_id' => $asessment_id,
            ])->exists();
        }

        // Simpan progres
        $this->trackProgressUpdate(Auth::user(), $currentPart, '/' . $page);

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

    // pencatat progres dan mengupdate ProgressTracking user, menandai halaman sebelumnya yang masih in_progress jadi finished (database),
    protected function trackProgressUpdate($user, $currentPart, $currentPath)
    {
        $progress = ProgressTracking::firstOrNew(['user_id' => $user->id]);

        // Hitung total progres kumulatif dari seluruh modul yang sudah selesai
        $progress->percent_done = $this->calculateTotalProgress($user->id);

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
            $hasIntroFinished = ProgressHistory::where('user_id', $user->id)
                ->where('module_part', 'modul-introduce')
                ->where('status', 'finished')
                ->exists();

            if (!$hasIntroFinished) {
                ProgressHistory::create([
                    'progress_id' => $progress->progress_id,
                    'user_id' => $user->id,
                    'module_id' => 1, // pastikan modul_id untuk modul-introduce benar
                    'module_part' => 'modul-introduce',
                    'page_path' => '/course',
                    'status' => 'finished',
                ]);
            }
        }

        // Cek apakah halaman ini sudah pernah disimpan
        $existing = ProgressHistory::where('user_id', $user->id)
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


    //Menghitung total persentase progres berdasarkan part yang sudah finished
    protected function calculateTotalProgress($userId)
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

        // Ambil semua part yang sudah 'finished' dari history
        $finishedParts = ProgressHistory::where('user_id', $userId)
            ->where('status', 'finished')
            ->pluck('module_part')
            ->unique();

        // Jumlahkan bobotnya
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
            'modul-asessmen1' => ['/page2_0', '/page2_1', '/page2_2', '/page2_3'],
            'submodul1' => ['/page3_0', '/page3_1_0', '/page3_1_1', '/page3_1_2', '/page3_1_3', '/page3_1_4', '/page3_2', '/page3_3'],
            'submodul2' => ['/page4_0', '/page4_1', '/page4_2', '/page4_3'],
            'submodul3' => ['/page5_0', '/page5_1', '/page5_2', '/page5_3'],
            'submodul4' => ['/page6_0', '/page6_1_0', '/page6_1_1', '/page6_2', '/page6_3'],
            'modul-evaluative' => ['/page7'],
            'modul-asessmen2' => ['/page8_0', '/page8_1', '/page8_2', '/page8_3_0', '/page8_3_1'],
        ];
    }


    public function saveProgressOnExit(Request $request)
{
    $user = Auth::user();
    $currentPath = $request->input('current_path');
    $currentPart = $this->getCurrentPartFromPage(ltrim($currentPath, '/'));

    if (!$currentPart) {
        return response()->json(['message' => 'Halaman tidak dikenali.'], 400);
    }

    $this->trackProgressUpdate($user, $currentPart, $currentPath);

    return response()->json(['message' => 'Progress disimpan saat keluar']);
}



}
