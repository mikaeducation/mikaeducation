<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module; // pastikan model Module sudah ada
use Illuminate\Support\Facades\DB;
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
}
