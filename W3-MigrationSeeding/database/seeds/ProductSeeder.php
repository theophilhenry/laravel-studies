<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nama_produk' => 'Roti Tawar',
            'harga_jual_produk' => 10000,
            'harga_produksi_produk' => 8000,
            'stok'=> 50,
            'category_id' => 1,
            'supplier_id' => 1,
        ]);

        DB::table('products')->insert([
            'nama_produk' => 'Roti Gandum',
            'harga_jual_produk' => 12000,
            'harga_produksi_produk' => 8000,
            'stok'=> 50,
            'category_id' => 1,
            'supplier_id' => 1,
        ]);

        DB::table('products')->insert([
            'nama_produk' => 'Roti Coklat',
            'harga_jual_produk' => 14000,
            'harga_produksi_produk' => 8000,
            'stok'=> 50,
            'category_id' => 1,
            'supplier_id' => 1,
        ]);

        // Pudding

        DB::table('products')->insert([
            'nama_produk' => 'Pudding Pannacotta',
            'harga_jual_produk' => 15000,
            'harga_produksi_produk' => 8000,
            'stok'=> 50,
            'category_id' => 2,
            'supplier_id' => 2,
        ]);


        DB::table('products')->insert([
            'nama_produk' => 'Pudding Fla',
            'harga_jual_produk' => 10000,
            'harga_produksi_produk' => 8000,
            'stok'=> 50,
            'category_id' => 2,
            'supplier_id' => 2,
        ]);

        DB::table('products')->insert([
            'nama_produk' => 'Pudding Buah',
            'harga_jual_produk' => 10000,
            'harga_produksi_produk' => 8000,
            'stok'=> 50,
            'category_id' => 2,
            'supplier_id' => 2,
        ]);

        // Sup
        
        DB::table('products')->insert([
            'nama_produk' => 'Sup Ikan',
            'harga_jual_produk' => 20000,
            'harga_produksi_produk' => 8000,
            'stok'=> 50,
            'category_id' => 3,
            'supplier_id' => 3,
        ]);

        DB::table('products')->insert([
            'nama_produk' => 'Sup Buah',
            'harga_jual_produk' => 10000,
            'harga_produksi_produk' => 8000,
            'stok'=> 50,
            'category_id' => 3,
            'supplier_id' => 3,
        ]);

        DB::table('products')->insert([
            'nama_produk' => 'Sup Ayam',
            'harga_jual_produk' => 18000,
            'harga_produksi_produk' => 8000,
            'stok'=> 50,
            'category_id' => 3,
            'supplier_id' => 3,
        ]);
    }
}
