<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ProgressTracking;
use App\Models\ProgressHistory;
use Carbon\Carbon;

class ProgressController extends Controller
{
    protected $modulePages = [
        'modul-introduce' => ['/course'],
        'modul-asessmen1' => ['/page2_0', '/page2_1', '/page2_2'],
        'submodul1' => ['/page3_0', '/page3_1_0', '/page3_1_1', '/page3_1_2', '/page3_1_3', '/page3_1_4'], // '/page3_2', '/page3_3'
        'submodul2' => ['/page4_0'], // '/page4_1', '/page4_2', '/page4_3'
        'submodul3' => ['/page5_0'], //  '/page5_1', '/page5_2', '/page5_3'
        'submodul4' => ['/page6_0', '/page6_1_0', '/page6_2'], //  '/page6_1_1', '/page6_3'
        'modul-evaluative' => ['/page7'],
        'modul-asessmen2' => ['/page8_0', '/page8_1', '/page8_2_0', '/page8_2_1'],
    ];

    protected $progressWeights = [
        'modul-introduce' => 5,
        'modul-asessmen1' => 10,
        'submodul1' => 15,
        'submodul2' => 15,
        'submodul3' => 15,
        'submodul4' => 15,
        'modul-evaluative' => 15,
        'modul-asessmen2' => 10,
    ];

    public function trackProgress(Request $request)
    {
        $userId = auth()->id();
        $moduleId = $request->input('module_id');
        $currentPart = $request->input('current_part');
        $pagePath = $request->input('page_path');

        // Simpan history kunjungan halaman
        ProgressHistory::updateOrCreate(
            [
                'user_id' => $userId,
                'module_id' => $moduleId,
                'page_path' => $pagePath
            ],
            [
                'visited_at' => now(),
                'module_part' => $currentPart
            ]
        );

        $completedParts = [];
        $percentDone = 0;

        foreach ($this->modulePages as $part => $pages) {
            $isPartCompleted = collect($pages)->every(function ($page) use ($userId, $moduleId) {
                return ProgressHistory::where([
                    'user_id' => $userId,
                    'module_id' => $moduleId,
                    'page_path' => $page
                ])->exists();
            });
            
            if ($isPartCompleted) {
                $completedParts[] = $part;
                $percentDone += $this->progressWeights[$part] ?? 0;
            } elseif ($part === $currentPart) {
                // Stop jika part saat ini belum selesai
                break;
            } else {
                break; // Stop juga jika ada part sebelumnya yang belum selesai
            }
        }

        // Update atau buat progress
        ProgressTracking::updateOrCreate(
            [
                'user_id' => $userId,
                'module_id' => $moduleId,
            ],
            [
                'current_part' => $currentPart,
                'percent_done' => $percentDone,
                'is_completed' => ($percentDone >= 100),
                'last_visited_at' => now(),
            ]
        );

        return response()->json([
            'status' => 'success',
            'percent_done' => $percentDone,
            'completed_parts' => $completedParts,
        ]);
    }


    public function updateProgress(Request $request)
    {
        $userId = auth()->id();
        $moduleId = $request->module_id;
        $pagePath = $request->page_path;
        $modulePart = $request->module_part;
        $percentDone = $request->percent_done;
        $isCompleted = $request->is_completed;

        // Update atau buat ProgressTracking
        $progress = ProgressTracking::updateOrCreate(
            ['user_id' => $userId, 'module_id' => $moduleId],
            [
                'current_part' => $modulePart,
                'last_visited_at' => now(),
                'percent_done' => $percentDone,
                'is_completed' => $isCompleted,
            ]
        );

        // Cek apakah sudah ada entry log untuk halaman ini
        $history = ProgressHistory::where([
            'progress_id' => $progress->progress_id,
            'user_id' => $userId,
            'module_id' => $moduleId,
            'page_path' => $pagePath
        ])->first();

        if ($history) {
            // Jika sudah ada dan status sebelumnya 'in_progress', maka update ke 'finished'
            if ($history->status === 'in_progress' && $request->status === 'finished') {
                $history->update([
                    'status' => 'finished',
                    'updated_at' => now(),
                ]);
            }
            // Jika sudah 'finished', tidak usah update lagi
        } else {
            // Jika belum ada history, buat baru dengan status awal dari request
            ProgressHistory::create([
                'progress_id' => $progress->progress_id,
                'user_id' => $userId,
                'module_id' => $moduleId,
                'page_path' => $pagePath,
                'module_part' => $modulePart,
                'status' => $request->status, // in_progress atau finished
                'updated_at' => now()
            ]);
        }

        return response()->json(['message' => 'Progress updated successfully']);
    }


    public function getFinishedPages()
    {
        $userId = Auth::id();
        $progress = ProgressTracking::where('user_id', $userId)
            ->orderByDesc('created_at')
            ->first();

        if (!$progress) {
            return response()->json(['finished_pages' => []]);
        }

        $pages = ProgressHistory::where('progress_id', $progress->progress_id)
            ->where('status', 'finished')
            ->pluck('page_path')
            ->toArray();

        return response()->json(['finished_pages' => $pages]);
    }


    private function getModulePartByPagePath($pagePath)
    {
        $cleanPath = parse_url($pagePath, PHP_URL_PATH);
    
        foreach ($this->modulePages as $modulePart => $pages) {
            if (in_array($cleanPath, $pages)) {
                return $modulePart;
            }
        }
    
        return null;
    }
    

    private function getModuleIdFromPart($modulePart)
    {
        switch ($modulePart) {
            case 'modul-introduce':
                return 1;
            case 'modul-asessmen1':
                return 2;
            case 'submodul1':
                return 3;
            case 'submodul2':
                return 4;
            case 'submodul3':
                return 5;
            case 'submodul4':
                return 6;
            case 'modul-evaluative':
                return 7;
            case 'modul-asessmen2':
                return 8;
            default:
                return 0;
        }
    }

    private function getCompletedModulesInOrder($userId)
    {
        $completed = [];
        foreach ($this->modulePages as $module => $pages) {
            $completedPages = ProgressHistory::where('user_id', $userId)
                ->where('module_part', $module)
                ->whereIn('page_path', $pages)
                ->pluck('page_path')
                ->unique()
                ->toArray();

            if (count($completedPages) === count($pages)) {
                $completed[] = $module;
            } else {
                // Stop jika satu modul belum selesai, karena yang berikutnya tidak boleh dihitung
                break;
            }
        }

        return $completed;
    }

    private function calculateProgress($userId, $currentModulePart)
    {
        $percentDone = 0;

        foreach ($this->modulePages as $part => $pages) {
            if ($part === $currentModulePart) {
                break; // Stop di modul saat ini, hanya modul sebelumnya yang dihitung
            }

            $completedPages = ProgressHistory::where('user_id', $userId)
                ->where('module_part', $part)
                ->whereIn('page_path', $pages)
                ->pluck('page_path')
                ->unique()
                ->toArray();

            if (count($completedPages) === count($pages)) {
                $percentDone += $this->progressWeights[$part] ?? 0;
            } else {
                break; // jika belum selesai, hentikan penambahan progres
            }
        }

        return min($percentDone, 100);
    }
}
