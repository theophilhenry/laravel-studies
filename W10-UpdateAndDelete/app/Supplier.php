<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use SoftDeletes;
    
    public $timestamps = false; // Category doesn't have timestamps

    public function products(){
        return $this->hasMany('App\Product', 'supplier_id', 'id');
    }
}
