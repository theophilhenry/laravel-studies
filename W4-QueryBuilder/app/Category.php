<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false; // Category doesn't have timestamps

    public function listOfProducts(){
        return $this->hasMany('App\Product', 'category_id', 'id');
    }
}
