<?php  
  
namespace Database\Seeders;  
  
use App\Models\Profile;  
use Illuminate\Database\Seeder;  
  
class ProfilesTableSeeder extends Seeder  
{  
    public function run()  
    {  
        Profile::create([  
            'phone' => '082156226440',  
            'email' => 'example@domain.com', // Menambahkan email  
            'first_name' => 'Ahmad',  
            'last_name' => 'Rayhan',  
            'birth_place' => 'Jakarta',  
            'birth_date' => '1990-01-01',  
            'address' => 'Jl. Contoh No. 123, Jakarta',  
            'gender' => 'Laki-laki', // Menambahkan gender  
            'occupation' => 'Software Developer',  
            'institution' => 'Tech Corp',  
            'skill' => 'PHP, JavaScript', // Menambahkan skill  
            'experience' => '3-5 Tahun', // Menambahkan experience  
            'banner_image' => 'images/samplebg.jpg', // Menambahkan banner_image  
            'profile_image' => 'images/member-rayhan.png', // Menambahkan profile_image  
            'description' => 'Saya seorang mahasiswa program studi sistem informasi', // Menambahkan description  
        ]);  
    }  
}  
