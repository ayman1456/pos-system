<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Niloy",
            'email' => "niloy@gmail.com",
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => "shourab",
            'email' => "shourab.cit.bd@gmail.com",
            'password' => Hash::make('password')
        ]);
    }
}