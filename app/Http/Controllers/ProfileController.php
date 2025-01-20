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

    /**  
     * Menampilkan halaman profile  
     */  
    public function showProfile()  
{  
    // Ambil data pengguna yang sedang login  
    $user = Auth::user();  
    $profile = Profile::where('phone', $user->phone)->first();  
  
    // Pastikan profil ditemukan  
    if (!$profile) {  
        return redirect('/')->with('error', 'Profil tidak ditemukan.');  
    }  
  
    // Tampilkan halaman profile dengan data profil dan user  
    return view('profile', compact('profile', 'user'));  
}  

    /**  
     * Mengupdate data profil pengguna  
     */  
    public function updateProfile(Request $request)  
    {  
        // Validasi input form  
        $request->validate([  
            'gender' => 'nullable|string',  
            'skill' => 'nullable|string',  
            'experience' => 'nullable|string',  
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',  
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',  
            'description' => 'nullable|string',  
        ]);  
  
        // Ambil data pengguna yang sedang login  
        $user = Auth::user();  
  
        // Ambil data profil pengguna  
        $profile = Profile::where('phone', $user->phone)->first();  
  
        // Pastikan profil ditemukan  
        if (!$profile) {  
            return redirect('/')->with('error', 'Profil tidak ditemukan.');  
        }  
  
        // Update data profil  
        $profile->update($request->only([  
            'gender',  
            'skill',  
            'experience',  
            'description',  
        ]));  
  
        // Simpan gambar jika ada  
        if ($request->hasFile('banner_image')) {    
            $profile->banner_image = $request->file('banner_image')->store('images', 'public');    
        }    
        if ($request->hasFile('profile_image')) {    
            $profile->profile_image = $request->file('profile_image')->store('images', 'public');    
        }
  
        $profile->save();  
  
        // Kembali ke halaman profile setelah berhasil disimpan  
        return redirect()->back()->with('success', 'Profil berhasil diperbarui!');  
    }    
}    
