<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        User::create([
            'name'=> 'David',
            'email' => 'david@gmail.com',
            'password' =>bcrypt('123')
        ])->assignRole('admin');

        User::create([
            'name'=> 'User',
            'email' => 'user@gmail.com',
            'password' =>bcrypt('1234')
        ])->assignRole('user');
    }
}
