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
            'first_name' => 'Ahmad',  
            'last_name' => 'Rayhan',  
            'birth_place' => 'Surabaya',  
            'birth_date' => '1990-01-01',  
            'address' => 'Jl. Contoh No. 123, Surabaya',  
            'gender' => 'Laki-laki',
            'occupation' => 'Software Developer',  
            'institution' => 'Tech Corp',
            'institutionCity' => 'Jakarta',  
            'skill' => 'PHP, JavaScript',
            'experience' => '3-5 Tahun',
            'banner_image' => 'images/samplebg.jpg',
            'profile_image' => 'images/member-rayhan.png',
            'description' => 'Saya seorang mahasiswa program studi sistem informasi',
        ]);  
    }  
}  
