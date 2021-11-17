<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    
    public function category(){
        return $this->belongsTo('App\Category', 'category_id');
    }
    public function supplier(){
        return $this->belongsTo('App\Supplier', 'supplier_id');
    }
    
    public function transactions()
    {
        return $this->belongsToMany(Transaction::class, "product_transaction", "product_id", "transaction_id")
        ->withPivot("quantity", "harga_produk");
    }
}
