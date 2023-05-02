<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EnableSelfRegistration;

class EnableRegister extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       EnableSelfRegistration::create([
        'status' => 'Enable'
       ]); 
    }
}
