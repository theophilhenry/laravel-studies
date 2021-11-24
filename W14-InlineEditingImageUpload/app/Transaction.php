<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, "product_transaction", "transaction_id", "product_id")
            ->withPivot("quantity", "product_price", "subtotal");
    }

    public function insertProduct($cart, $user)
    {
        $total = 0;
        foreach ($cart as $id => $details) {
            $total += $details['product_selling_price'] * $details['quantity'];
            $this->products()->attach($id, ['quantity' => $details['quantity'], 'product_price' =>  $details['product_selling_price'], 'subtotal' => ($details['product_selling_price'] * $details['quantity'])]);
        }
        return $total;
    }
}
