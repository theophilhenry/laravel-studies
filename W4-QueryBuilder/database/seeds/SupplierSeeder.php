<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'id' => 1,
            'supplier_name' => "SanaSup",
            'supplier_address' => "Jalan Sana Keren no 86, Sanur, Denpasar.",
        ]);
        DB::table('suppliers')->insert([
            'id' => 2,
            'supplier_name' => "MinaSup",
            'supplier_address' => "Jalan Mina Cantik no 20, Sanur, Denpasar.",
        ]);
        DB::table('suppliers')->insert([
            'id' => 3,
            'supplier_name' => "JisooSup",
            'supplier_address' => "Jalan Jisoo Lucu no 14, Sanur, Denpasar.",
        ]);
    }
}
