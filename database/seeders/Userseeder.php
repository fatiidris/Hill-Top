<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name'          => 'Admin',
            'email'         => 'admin@gmail.com',
            'password' =>  bcrypt('12345678'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        

        $user2 = User::create([
            'name'          => 'Teacher',
            'email'         => 'teacher@gmail.com',
            'password' =>  bcrypt('12345678'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
    

        $user3 = User::create([
            'name'          => 'Parent',
            'email'         => 'parent@gmail.com',
            'password' =>  bcrypt('12345678'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
        

        $user4 = User::create([
            'name'          => 'Student',
            'email'         => 'student@gmail.com',
            'password' =>  bcrypt('12345678'),
            'created_at'    => date("Y-m-d H:i:s")
        ]);
    }
}
