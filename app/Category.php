<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = "category";

    public function customers(){
        return $this->belongsTo('App\Customer');
    }
}
