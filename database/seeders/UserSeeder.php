<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Sabbir Alam',
            'email' => 'iamsabbiralam@portfolio.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Kuttarbaccha@2020'),
            'remember_token' => 'null',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
