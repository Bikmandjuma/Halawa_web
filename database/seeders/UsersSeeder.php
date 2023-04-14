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
            'study_status' => 'graduated',
            'start_year' => '2017',
            'end_year' => '2021',
            'birth_date' => '20/12/1994',
            'residence' => 'Rwanda',
            'password'=>bcrypt('admin123@'),
        ]);
    }
}
