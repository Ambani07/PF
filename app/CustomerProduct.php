<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerProduct extends Model
{
    //
    protected $table = "customer_products";

    protected $fillable = ['customer_id', 'product_id', 'user_id', 'category_id'];

    public function customerProducts()
    {
        return $this->morphTo();
    }
}
