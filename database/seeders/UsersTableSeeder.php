<?php


namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::firstOrCreate([
            'phone' => '085141177976', // Pastikan nomor telepon unik
        ], [
            'email' => 'noreply@mikaeducation.id',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'), // Password default
            'remember_token' => Str::random(10),
            'terms_accepted' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
