<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\ModuleReview;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class ModuleController extends Controller
{
    public function index(Request $request)
    {

        $query = $request->input('search');

        $modules = $query
            ? Module::where('module_title', 'LIKE', "%{$query}%")->get()
            : Module::all();

        foreach ($modules as $module) {
            $module->level_text = match ($module->module_level) {
                1 => 'Dasar',
                2 => 'Dasar-Menengah',
                3 => 'Menengah',
                4 => 'Menengah-Tinggi',
                5 => 'Tinggi',
                default => 'Tidak Diketahui',
            };
        
            $module->type_text = $module->module_type ? 'Berulang' : 'Tidak Berulang';
            $module->status_text = $module->module_status ? 'Tersedia' : 'Tidak Tersedia';
        }

        $categories = $modules->pluck('module_category')->unique()->values();
        

        return view('learning.home', compact('modules', 'categories', 'query')); // kirim ke view home.blade.php
    }


    public function showModules($id)
    {
        $module = Module::with(['subjects.submodules'])
            ->where('module_id', $id)
            ->firstOrFail();

        $module->level_text = match ($module->module_level) {
            1 => 'Dasar',
            2 => 'Dasar-Menengah',
            3 => 'Menengah',
            4 => 'Menengah-Tinggi',
            5 => 'Tinggi',
            default => 'Tidak Diketahui',
        };

        $module->type_text = $module->module_type ? 'Berulang/Tanpa Batas' : 'Tidak Berulang';
        $module->status_text = $module->module_status ? 'Tersedia' : 'Tidak Tersedia';
        $module->certificate_text = $module->module_certificate ? 'Sertifikat Kelulusan' : 'Tidak ada Sertifikat';
        $module->module_publish_date_formatted = Carbon::parse($module->module_publish_date)->translatedFormat('d F Y');

        return view('learning.modules', compact('module'));
    }


    public function store(Request $request)
        {
            $request->validate([
                'rating' => 'required|numeric|min:1|max:5',
                'review' => 'nullable|string|max:300',
                'module_id' => 'required|integer'
            ]);

            ModuleReview::create([
                'user_id' => Auth::id(),
                'username' => Auth::user()->profile->username ?? Auth::user()->name,
                'module_id' => $request->module_id,
                'user_rating' => $request->rating,
                'comment_review' => $request->review,
            ]);

            return redirect('/preLearn')->with('success', 'Terima kasih atas ulasan Anda!');
        }


}
