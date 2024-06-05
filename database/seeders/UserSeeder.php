<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Mou_User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mou_User::create([
            'username' => 'admin',
            'fullname' => 'Administrator',
            'password' => Hash::make('123'),
        ]);
    }
}
