<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::insert([
            [   'name' => 'admin',
                'email' => 'admin@email.com',
                'password' => Hash::make('admin'),
                'role' => 'admin'
            ],
        ]);
    }
}
