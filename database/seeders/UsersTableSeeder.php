<?php


namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'phone' => '082156226440',
            'email' => 'example@domain.com',
            'password' => Hash::make('password123'), // Menggunakan hashing bcrypt
        ]);
    }
}
