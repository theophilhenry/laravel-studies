<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    
    public $timestamps = false; // Category doesn't have timestamps

    public function listOfProducts(){
        return $this->hasMany('App\Product', 'category_id', 'id');
    }
}
