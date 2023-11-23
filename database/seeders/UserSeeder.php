<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::create([
        'name' => 'DICKO',
        'surname' => 'Boureima',
        'email' => 'admin1@gmail.com',
        'password' => 'dickopass',
        'role' => 'admin',

       ]);
    }
}
