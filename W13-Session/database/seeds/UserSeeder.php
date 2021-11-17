<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => "Gusto Manuel",
            'role' => "owner",
            'email' => 'gusto@gmail.com',
            'password' => Hash::make('password'),
        ]);
        
        DB::table('users')->insert([
            'id' => 2,
            'name' => "Aditya",
            'role' => "employee",
            'email' => 'adityawijo@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => "Feili",
            'role' => "employee",
            'email' => 'feiligunawan@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
