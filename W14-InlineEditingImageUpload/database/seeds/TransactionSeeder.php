<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            'id' => 1,
            'customer_id' => 1,
            'cashier_id' => 1,
            'transaction_date' => Carbon::now(),
        ]);
        DB::table('transactions')->insert([
            'id' => 2,
            'customer_id' => 2,
            'cashier_id' => 2,
            'transaction_date' => Carbon::now(),
        ]);
        DB::table('transactions')->insert([
            'id' => 3,
            'customer_id' => 3,
            'cashier_id' => 3,
            'transaction_date' => Carbon::now(),
        ]);

        
        DB::table('product_transaction')->insert([
            'product_id' => 1,
            'transaction_id' => 1,
            'quantity' => 5,
            'product_price' => 50000,
            'subtotal' => 250000,
        ]);
        
        DB::table('product_transaction')->insert([
            'product_id' => 2,
            'transaction_id' => 1,
            'quantity' => 4,
            'product_price' => 48000,
            'subtotal' => 0,
        ]);

        DB::table('product_transaction')->insert([
            'product_id' => 1,
            'transaction_id' => 2,
            'quantity' => 3,
            'product_price' => 30000,
            'subtotal' => 0,
        ]);

        DB::table('product_transaction')->insert([
            'product_id' => 3,
            'transaction_id' => 3,
            'quantity' => 1,
            'product_price' => 14000,
            'subtotal' => 0,
        ]);
    }
}
