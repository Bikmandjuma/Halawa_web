<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'firstname' => 'Bikman',
            'lastname' =>'Djuma',
            'gender' => 'male',
            'phone' => '0785389000',
            'image' => 'user.png',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'department' => 'IT',
            'study_status' => 'still_studying',
            'start_year' => '2017',
            'end_year' => '2021',
            'birth_date' => '1994-12-20',
            'residence' => 'Rwanda',
            'password'=>bcrypt('admin123@'),
        ]);

         User::create([
            'firstname' => 'Adam',
            'lastname' =>'Rurangwa',
            'gender' => 'male',
            'phone' => '0785389001',
            'image' => 'user.png',
            'email' => 'amir@gmail.com',
            'role' => 'amir',
            'department' => 'RE',
            'study_status' => 'still_studying',
            'start_year' => '2017',
            'end_year' => '2021',
            'birth_date' => '1994-12-20',
            'residence' => 'Rwanda',
            'password'=>bcrypt('admin123@'),
        ]);

    }
}