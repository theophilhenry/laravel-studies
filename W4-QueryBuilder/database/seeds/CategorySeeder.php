<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => '1',
            'category_name' => 'Roti'
        ]);
        
        DB::table('categories')->insert([
            'id' => '2',
            'category_name' => 'Pudding'
        ]);
        
        DB::table('categories')->insert([
            'id' => '3',
            'category_name' => 'Sup'
        ]);
    }
}
