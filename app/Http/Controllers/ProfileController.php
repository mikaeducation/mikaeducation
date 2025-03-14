<?php

namespace App\Http\Controllers;  

use App\Models\Profile;  
use Illuminate\Http\Request;  
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;  
use Illuminate\Support\Facades\Storage;

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
                'institutionCity',
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
        'first_name' => 'required|string|max:50',
        'last_name' => 'required|string|max:50',
        'birth_place' => 'required|string|max:50',
        'birth_date' => 'required|date|before:today',
        'address' => 'required|string|max:255',
        'gender' => 'nullable|string|in:Laki-laki,Perempuan',
        'occupation' => 'required|string|max:100',
        'skill' => 'nullable|string|max:100',
        'institution' => 'required|string|max:100',
        'institutionCity' => 'required|string|max:100',
        'experience' => 'nullable|string|max:255',
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
            'first_name',
            'last_name',
            'birth_place',
            'birth_date',
            'address',
            'gender',
            'occupation',
            'skill',
            'institution',
            'institutionCity',
            'experience',
        ]));
        // Kembali ke halaman profile setelah berhasil disimpan
        return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
    }  


    public function updateProfileMedia(Request $request)  
{  
    // Validasi input untuk gambar dan deskripsi  
    $request->validate([  
        'banner_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',  
        'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',  
        'description' => 'nullable|string',  
        'delete_banner' => 'nullable|boolean', // Tambahan validasi untuk penghapusan banner
    ]);  

    // Ambil data pengguna yang sedang login    
    $user = Auth::user();    
    // Ambil data profil pengguna    
    $profile = Profile::where('phone', $user->phone)->first();    

    // Pastikan profil ditemukan    
    if (!$profile) {    
        return redirect('/')->with('error', 'Profil tidak ditemukan.');    
    }    

    // Update deskripsi  
    if ($request->has('description')) {  
        $profile->description = $request->description;  
    }  

    // Jika tombol hapus ditekan, hapus gambar banner dan set ke default
    if ($request->has('delete_banner') && $request->delete_banner) {
        if ($profile->banner_image) {
            Storage::disk('public')->delete($profile->banner_image); // Hapus file lama
        }
        $profile->banner_image = null; // Set ke null (default)
    }

    // Simpan gambar jika ada    
    if ($request->hasFile('banner_image')) {      
        if ($profile->banner_image) {
            Storage::disk('public')->delete($profile->banner_image); // Hapus file lama jika ada
        }

        $bannerImage = $request->file('banner_image');  
        $bannerImageName = time() . '_' . $bannerImage->getClientOriginalName();  
        $bannerPath = $bannerImage->storeAs('images/banners', $bannerImageName, 'public');  

        // Simpan path ke database
        $profile->banner_image = $bannerPath;    
    }      

    if ($request->hasFile('profile_image')) {      
        if ($profile->profile_image) {
            Storage::disk('public')->delete($profile->profile_image); // Hapus file lama jika ada
        }

        $profileImage = $request->file('profile_image');  
        $profileImageName = time() . '_' . $profileImage->getClientOriginalName();  
        $profilePath = $profileImage->storeAs('images/profiles', $profileImageName, 'public');  

        // Simpan path ke database
        $profile->profile_image = $profilePath;    
    }  

    $profile->save();     

    // Kembali ke halaman profile setelah berhasil disimpan    
    return redirect()->back()->with('success', 'Media profil berhasil diperbarui!');    
}

    
}    
