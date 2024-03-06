<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Yassine',
            'email' => 'yassinedubraska@gmail.com',
            'password' => Hash::make('yassinedubraska@gmail.com'),
            'role' => 'admin',
        ]);
    }
}