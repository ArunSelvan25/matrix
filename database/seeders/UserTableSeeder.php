<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       for ($i = 0; $i < 50; $i++) {
            User::create([
                'name' => 'User-Matrix ' . ($i + 1),
                'email' => 'usermatrix' . ($i + 1) . '@mailinator.com',
                'password' => Hash::make('password'), 
            ]);
        }
    }
}
