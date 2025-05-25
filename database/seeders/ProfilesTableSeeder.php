<?php  
  
namespace Database\Seeders;  
  
use App\Models\Profile;  
use Illuminate\Database\Seeder;  
  
class ProfilesTableSeeder extends Seeder  
{  
    public function run()  
    {  
        Profile::create([  
            'phone' => '085141177976',  
            'first_name' => 'User',  
            'last_name' => 'Admin',  
            'birth_place' => 'Surabaya',  
            'birth_date' => '1990-01-01',  
            'address' => 'Jl. Dr. Ir. H. Soekarno, Mulyorejo, Kec. Mulyorejo, Surabaya, Jawa Timur 60115',  
            'gender' => 'Laki-aki',
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
