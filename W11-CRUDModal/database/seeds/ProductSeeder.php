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
            'id' => 1,
            'product_name' => 'Roti Tawar',
            'product_selling_price' => 10000,
            'product_production_price' => 8000,
            'product_stock'=> 50,
            'category_id' => 1,
            'supplier_id' => 1,
            'product_image' => "rotitawar.png",
        ]);

        DB::table('products')->insert([
            'id' => 2,
            'product_name' => 'Roti Gandum',
            'product_selling_price' => 12000,
            'product_production_price' => 8000,
            'product_stock'=> 50,
            'category_id' => 1,
            'supplier_id' => 1,
            'product_image' => "rotigandum.png",
        ]);

        DB::table('products')->insert([
            'id' => 3,
            'product_name' => 'Roti Coklat',
            'product_selling_price' => 14000,
            'product_production_price' => 8000,
            'product_stock'=> 50,
            'category_id' => 1,
            'supplier_id' => 1,
            'product_image' => "roticoklat.png",
        ]);

        // Pudding

        DB::table('products')->insert([
            'id' => 4,
            'product_name' => 'Pudding Pannacotta',
            'product_selling_price' => 15000,
            'product_production_price' => 8000,
            'product_stock'=> 50,
            'category_id' => 2,
            'supplier_id' => 2,
            'product_image' => "puddingpannacotta.png",
        ]);


        DB::table('products')->insert([
            'id' => 5,
            'product_name' => 'Pudding Fla',
            'product_selling_price' => 10000,
            'product_production_price' => 8000,
            'product_stock'=> 50,
            'category_id' => 2,
            'supplier_id' => 2,
            'product_image' => "puddingfla.png",
        ]);

        DB::table('products')->insert([
            'id' => 6,
            'product_name' => 'Pudding Buah',
            'product_selling_price' => 10000,
            'product_production_price' => 8000,
            'product_stock'=> 50,
            'category_id' => 2,
            'supplier_id' => 2,
            'product_image' => "puddingbuah.png",
        ]);

        // Sup
        
        DB::table('products')->insert([
            'id' => 7,
            'product_name' => 'Sup Ikan',
            'product_selling_price' => 20000,
            'product_production_price' => 8000,
            'product_stock'=> 50,
            'category_id' => 3,
            'supplier_id' => 3,
            'product_image' => "supikan.png",
        ]);

        DB::table('products')->insert([
            'id' => 8,
            'product_name' => 'Sup Buah',
            'product_selling_price' => 10000,
            'product_production_price' => 8000,
            'product_stock'=> 50,
            'category_id' => 3,
            'supplier_id' => 3,
            'product_image' => "supbuah.png",
        ]);

        DB::table('products')->insert([
            'id' => 9,
            'product_name' => 'Sup Ayam',
            'product_selling_price' => 18000,
            'product_production_price' => 8000,
            'product_stock'=> 50,
            'category_id' => 3,
            'supplier_id' => 3,
            'product_image' => "supayam.png",
        ]);
    }
}
