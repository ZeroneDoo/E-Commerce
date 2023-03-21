<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Pengguna;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Pengguna::create([
        //     "email" => "ridho@gmail.com",
        //     "username" => "ZeroneDoo",
        //     "jenis_kelamin" => "Pria",
        //     "telpon" => "089312123",
        //     "password" => Hash::make("123456"),
        //     "profile" => "default.png",
        // ]);

        Pengguna::create([
            "email" => "admin@gmail.com",
            "username" => "Admin",
            "jenis_kelamin" => "Pria",
            "telpon" => "089312123",
            "password" => Hash::make("123456"),
            "profile" => "default.png",
            "role"=> "admin"
        ]);
    }
}
