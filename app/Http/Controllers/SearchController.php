<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content; // Ganti dengan model data yang ingin dicari

class SearchController extends Controller
{
    public function index(Request $request)
    {
        // Ambil query dari input pengguna
        $query = $request->input('query');

        // Validasi input (opsional)
        $request->validate([
            'query' => 'required|string|max:255',
        ]);

        // Lakukan pencarian di database
        $results = Content::where('column_name', 'LIKE', "%{$query}%")->get();

        // Return hasil pencarian ke view
        return view('search.results', compact('results', 'query'));
    }
}
