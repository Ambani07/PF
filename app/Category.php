<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = "category";

    public function categories(){
        return $this->belongsTo('App\Product');
    }

    public function sites()
    {
        return $this->hasMany('App\Site');
    }
}
