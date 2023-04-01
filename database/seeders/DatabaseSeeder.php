<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create(
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$921IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro911C/.at2.uheWG/igi', //password
                'remember_token' => Str::random(10),
                'is_admin' => true
            ]
         );
         User::factory(100)->create();
         Todo::factory(500)->create();
    } 
}

