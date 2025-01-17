<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Menampilkan form untuk mengisi profil
     */
    public function showProfileForm()
    {
        return view('registerprofilepage');
    }

    /**
     * Menyimpan data profil pengguna ke tabel profiles
     */
    public function completeProfile(Request $request)
    {
        // Validasi input form
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required|date',
            'address' => 'required',
            'occupation' => 'required',
            'institution' => 'required',
        ], [
            'first_name.required' => 'Nama depan wajib diisi.',
            'last_name.required' => 'Nama belakang wajib diisi.',
            'birth_place.required' => 'Tempat lahir wajib diisi.',
            'birth_date.required' => 'Tanggal lahir wajib diisi.',
            'birth_date.date' => 'Tanggal lahir harus berupa format tanggal yang valid.',
            'address.required' => 'Alamat wajib diisi.',
            'occupation.required' => 'Pekerjaan wajib diisi.',
            'institution.required' => 'Asal instansi wajib diisi.',
        ]);

        // Ambil data pengguna yang sedang login
        $user = Auth::user();

        // Simpan data profil ke tabel profiles berdasarkan nomor telepon
        Profile::updateOrCreate(
            ['phone' => $user->phone], // Kondisi pencocokan berdasarkan phone
            $request->only([
                'first_name',
                'last_name',
                'birth_place',
                'birth_date',
                'address',
                'occupation',
                'institution',
            ])
        );

        // Arahkan ke halaman index setelah berhasil disimpan
        return redirect('/')->with('success', 'Profil berhasil diperbarui!');
    }
    
}