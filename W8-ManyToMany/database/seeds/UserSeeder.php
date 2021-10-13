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
            'email' => 'Gusto@gmail.com',
            'password' => Hash::make('password'),
        ]);
        
        DB::table('users')->insert([
            'id' => 2,
            'name' => "Aditya",
            'email' => 'AdityaWijo@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => "Feili",
            'email' => 'FeiliGunawan@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
