<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;

use App\Models\User;
use App\Models\Message;
use App\Models\Profile;
use App\Models\UserLog;
use App\Models\ProgressTracking;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    /**  
     * Menampilkan form untuk mengisi profil  
     */  
    public function showProfileForm()  
    {  
        return view('register-profile');  
    }  
    /**  
     * Menyimpan data profil pengguna ke tabel profiles  
     */  
    public function completeProfile(Request $request)  
    {  

        // Ambil terlebih dahulu nilai occupation untuk keperluan validasi kondisi
        $occupation = $request->input('occupation');

        // Validasi input form  
        $request->validate([  
            'first_name' => 'required',  
            'last_name' => 'required',  
            'birth_place' => 'required',  
            'birth_date' => 'required|date',  
            'address' => 'required',  
            'occupation' => 'required|string|max:100',
            'custom_occupation' => $occupation === 'Lainnya' ? 'required|string|max:100' : 'nullable',
            'institution' => 'required|string|max:100',  
        ], [  
            'first_name.required' => 'Nama depan wajib diisi.',  
            'last_name.required' => 'Nama belakang wajib diisi.',  
            'birth_place.required' => 'Tempat lahir wajib diisi.',  
            'birth_date.required' => 'Tanggal lahir wajib diisi.',  
            'birth_date.date' => 'Tanggal lahir harus berupa format tanggal yang valid.',  
            'address.required' => 'Alamat wajib diisi.',  
            'occupation.required' => 'Pekerjaan wajib diisi.',
            'custom_occupation.required' => 'Pekerjaan harus ditulis jika Anda memilih opsi "Lainnya"...',
            'institution.required' => 'Asal instansi wajib diisi.',  
        ]);  

        $data = $request->all();
        if ($data['occupation'] === 'Lainnya') {
            $data['occupation'] = $data['custom_occupation'];
        }

        // Ambil data pengguna yang sedang login  
        $user = Auth::user();  
        // Simpan data profil ke tabel profiles berdasarkan nomor telepon  
        Profile::updateOrCreate(
            ['phone' => $user->phone],
            [
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'birth_place' => $data['birth_place'],
                'birth_date' => $data['birth_date'],
                'address' => $data['address'],
                'occupation' => $data['occupation'],
                'institution' => $data['institution'],
                'institutionCity' => $data['institutionCity'] ?? null,
            ]
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

        // Ambil semua module yang telah diselesaikan user
        $completedModules = ProgressTracking::where('user_id', $user->id)
            ->where('is_completed', true)
            ->with('module')
            ->get()
            ->unique('module_id')
            ->pluck('module');

        $completedDocs = ProgressTracking::where('user_id', $user->id)
            ->where('is_completed', true)
            ->with('module') // relasi module harus tersedia
            ->get()
            ->unique('module_id');

        $notifications = $this->getUserNotifications($user);

        // Tampilkan halaman profile dengan data profil dan user  
        return view('profile', compact(
            'profile', 
            'user', 
            'completedModules',  
            'completedDocs', 
            'notifications'
        ));  
    }  

    /**  
     * Mengupdate data profil pengguna  
     */  
    public function updateProfile(Request $request)
    {

    // Ambil terlebih dahulu nilai occupation untuk keperluan validasi custom_occupation
    $occupation = $request->input('occupation');
    
    // Validasi input form
    $request->validate([
        'first_name' => 'required|string|max:50',
        'last_name' => 'required|string|max:50',
        'birth_place' => 'required|string|max:50',
        'birth_date' => 'required|date|before:today',
        'address' => 'required|string|max:255',
        'gender' => 'nullable|string|in:Laki-laki,Perempuan',
        'occupation' => 'required|string|max:100',
        'custom_occupation' => $occupation === 'Lainnya' ? 'required|string|max:100' : 'nullable',
        'skill' => 'nullable|string|max:100',
        'institution' => 'required|string|max:100',
        'institutionCity' => 'required|string|max:100',
        'experience' => 'nullable|string|max:255',
    ], [
        'custom_occupation.required' => 'Pekerjaan harus ditulis jika memilih "Lainnya".'
    ]);
        // Ambil data pengguna yang sedang login  
        $user = Auth::user();  
        $profile = Profile::where('phone', $user->phone)->first();  

        // Pastikan profil ditemukan    
        if (!$profile) {  
            return redirect('/')->with('error', 'Profil tidak ditemukan.');  
        }

        $data = $request->all();
        if ($data['occupation'] === 'Lainnya') {
            $data['occupation'] = $data['custom_occupation'];
        }

        // Update data profil    
        $profile->update([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'birth_place' => $data['birth_place'],
            'birth_date' => $data['birth_date'],
            'address' => $data['address'],
            'gender' => $data['gender'] ?? null,
            'occupation' => $data['occupation'],
            'skill' => $data['skill'] ?? null,
            'institution' => $data['institution'],
            'institutionCity' => $data['institutionCity'],
            'experience' => $data['experience'] ?? null,
        ]);

        UserLog::create([
            'user_id' => $user->id,
            'log_type' => 'account',
            'text_log' => 'Anda telah memperbarui data profil Anda.',
            'is_read' => false,
        ]);
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
        $profile = Profile::where('phone', $user->phone)->first();    

        // Pastikan profil ditemukan    
        if (!$profile) {    
            return redirect('/')->with('error', 'Profil tidak ditemukan.');    
        }    

        $changes = [];

        // Update deskripsi  
        if ($request->has('description')) {  
            $profile->description = $request->description;
            $changes[] = 'Deskripsi';
        }  

        // Jika tombol hapus ditekan, hapus gambar banner dan set ke default
        if ($request->has('delete_banner') && $request->delete_banner) {
            if ($profile->banner_image) {
                Storage::disk('public')->delete($profile->banner_image);
                $profile->banner_image = null;
                $changes[] = 'Penghapusan banner';
            }
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
            $profile->banner_image = 'storage/' . $bannerPath;
            $changes[] = 'Banner baru';
        }      

        if ($request->hasFile('profile_image')) {      
            if ($profile->profile_image) {
                Storage::disk('public')->delete($profile->profile_image); // Hapus file lama jika ada
            }

            $profileImage = $request->file('profile_image');  
            $profileImageName = time() . '_' . $profileImage->getClientOriginalName();  
            $profilePath = $profileImage->storeAs('images/profiles', $profileImageName, 'public');  
            // Simpan path ke database
            $profile->profile_image = 'storage/' . $profilePath;
            $changes[] = 'Foto profil baru';
        }  

        $profile->save();

        if (!empty($changes)) {
            $logText = 'Anda telah memperbarui media profil Anda: ' . implode(', ', $changes) . '.';
            UserLog::create([
                'user_id' => $user->id,
                'log_type' => 'account',
                'text_log' => $logText,
                'is_read' => false,
            ]);
        }
        // Kembali ke halaman profile setelah berhasil disimpan    
        return redirect()->back()->with('success', 'Media profil berhasil diperbarui!');    
    }


    public function storeLearningLog($userId, $moduleId)
    {

        $progress = ProgressTracking::with('module')
            ->where('user_id', $userId)
            ->where('module_id', $moduleId)
            ->where('is_completed', true)
            ->orderBy('created_at', 'asc') // hanya ambil yang pertama
            ->first();

        if (!$progress) return;

        // Simpan notifikasi penyelesaian
        UserLog::firstOrCreate(
            [
                'user_id' => $userId,
                'log_type' => 'progress',
                'module_id' => $moduleId,
            ],
            [
                'text_log' => 'Anda berhasil menyelesaikan pembelajaran "' . ($progress->module->module_title ?? '-') . '".',
                'is_read' => false,
                'created_at' => $progress->updated_at,
                'updated_at' => $progress->updated_at,
                'related_id' => $progress->progress_id
            ]
        );

        // Simpan notifikasi sertifikat jika ada
        if ($progress->module && $progress->module->module_certificate) {
            UserLog::firstOrCreate(
                [
                    'user_id' => $userId,
                    'log_type' => 'certificate',
                    'module_id' => $moduleId,
                ],
                [
                    'text_log' => 'Anda berhasil mendapatkan sertifikat program pembelajaran.',
                    'is_read' => false,
                    'created_at' => $progress->updated_at,
                    'updated_at' => $progress->updated_at,
                    'related_id' => $progress->progress_id
                ]
            );
        }


        $user = User::find($userId);
        if (!$user) {
            Log::debug("User not found with id: {$userId}");
            return;
        }

        // Ambil pesan admin yang sudah direspon
        $adminMessages = Message::where('phone', $user->phone)
            ->whereNotNull('respon') // Pastikan respon ada
            ->get();

        Log::debug("Found " . $adminMessages->count() . " admin responses for user: {$user->id}");

        foreach ($adminMessages as $msg) {
            // Gabungkan pesan yang diajukan dengan respon admin
            $text_log = 'Pesan yang Anda ajukan: ';
            $text_log .= $msg->chat1 ? '(1) ' . $msg->chat1 : ''; 
            $text_log .= $msg->chat2 ? ' (2) ' . $msg->chat2 : '';
            $text_log .= ' Respon atas Pesan Anda: ' . Str::limit($msg->respon, 100);

            Log::debug("Prepared text_log: {$text_log}");

            // Simpan log admin jika belum ada
            $existingLog = UserLog::where('user_id', $user->id)
                ->where('log_type', 'admin')
                ->where('related_id', $msg->id) // Ensure only one log per admin message
                ->exists();

            if (!$existingLog) {
                Log::debug("Creating user_log for admin message with ID: {$msg->id}");

                UserLog::firstOrCreate(
                    [
                        'user_id' => $user->id,
                        'log_type' => 'admin',
                        'related_id' => $msg->id, // Menyimpan ID pesan
                        'module_id' => null, // NULL untuk pesan admin
                    ],
                    [
                        'text_log' => $text_log,
                        'is_read' => false, // Tandai sebagai belum dibaca
                        'created_at' => $msg->updated_at,
                        'updated_at' => $msg->updated_at,
                    ]
                );

                Log::debug("User log for admin response created successfully.");
            } else {
                Log::debug("User log for admin response already exists, skipping creation.");
            }
        }
    }


    public function markNotificationRead($id)
    {
        $notif = UserLog::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $notif->update(['is_read' => true]);
        return response()->json(['status' => 'updated']);
    }

    protected function getUserNotifications($user)
    {
        // Ambil log user
        $userLogs = UserLog::where('user_id', $user->id)->get();

        // Filter log progress dan certificate per modul (ambil hanya yang pertama)
        $progressLogs = $userLogs->where('log_type', 'progress')->unique('module_id');
        $certificateLogs = $userLogs->where('log_type', 'certificate')->unique('module_id');
        $adminLogs = $userLogs->where('log_type', 'admin');
        $accountLogs = $userLogs->where('log_type', 'account');

        $allLogs = $progressLogs
            ->merge($certificateLogs)
            ->merge($adminLogs)
            ->merge($accountLogs)
            ->sortByDesc('created_at');

        // Notifikasi dari admin langsung (dari tabel messages)
        $adminResponses = Message::where('phone', $user->phone)
            ->whereNotNull('respon')
            ->latest()
            ->get();

        return collect($allLogs)->merge($adminResponses)->sortByDesc(function ($item) {
            return $item->created_at;
        });
    }
}

