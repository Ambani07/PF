<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = "Products";

    public function customer(){
        return $this->belongsTo('App\Customer');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
    
    public function products(){
        return $this->morphMany('App\CustomerProduct', 'customerProducts');
    }
}
