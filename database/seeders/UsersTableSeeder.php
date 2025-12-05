<?php


namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::firstOrCreate([
            'phone' => '085141177976',
        ], [
            'email' => 'noreply@mikaeducation.id',
            'email_verified_at' => now(),
            'password' => Hash::make('MikaUA2025'),
            'remember_token' => Str::random(10),
            'terms_accepted' => true,
            'is_admin' => true,
            'is_profile_completed' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if (!$user->profile) {
            Profile::create([
            'phone' => $user->phone,
            'first_name' => 'Admin',  
            'last_name' => 'Mika',  
            'birth_place' => 'Surabaya',  
            'birth_date' => '1990-01-01',  
            'address' => 'Jl. Dr. Ir. H. Soekarno, Mulyorejo, Kec. Mulyorejo, Surabaya, Jawa Timur 60115',  
            'gender' => 'Laki-laki',
            'occupation' => 'Pengembang Website',  
            'institution' => 'Media Visual Komunikasi Anak',
            'institutionCity' => 'Surabaya',  
            'skill' => 'Pembelajaran, Komunikasi Visual',
            'experience' => '3-5 Tahun',
            'banner_image' => 'images/samplebg.jpg',
            'profile_image' => 'images/profile-sample.jpg',
            'description' => 'Saya adalah sebuah platform inklusi visual yang mendukung upaya optimalisasi proses belajar dan mengajar komunikasi anak dengan autisme dan hambatan komunikasi.',
            ]);
        }
    }
}
