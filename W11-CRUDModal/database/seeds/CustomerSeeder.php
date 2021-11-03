<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        DB::table('customers')->insert([
            'id' => 1,
            'customer_name' => "Gusto",
            'customer_address' => "Jalan. G ".Str::random(10),
        ]);
        DB::table('customers')->insert([
            'id' => 2,
            'customer_name' => "AditRock",
            'customer_address' => "Jalan. A ".Str::random(10),
        ]);
        DB::table('customers')->insert([
            'id' => 3,
            'customer_name' => "FeiliG",
            'customer_address' => "Jalan. F ".Str::random(10),
        ]);
    }
}
