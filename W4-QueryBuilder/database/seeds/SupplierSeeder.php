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
            'nama_supplier' => "SanaSup",
            'alamat_supplier' => "Jalan Sana Keren no 86, Sanur, Denpasar.",
        ]);
        DB::table('suppliers')->insert([
            'id' => 2,
            'nama_supplier' => "MinaSup",
            'alamat_supplier' => "Jalan Mina Cantik no 20, Sanur, Denpasar.",
        ]);
        DB::table('suppliers')->insert([
            'id' => 3,
            'nama_supplier' => "JisooSup",
            'alamat_supplier' => "Jalan Jisoo Lucu no 14, Sanur, Denpasar.",
        ]);
    }
}
