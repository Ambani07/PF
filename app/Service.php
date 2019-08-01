<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $table = 'Services';

    // public function category()
    // {
    //     return $this->belongsTo('App\Category', 'category_id');
    // }

    public function category(){
        return $this->hasOne('App\Category', 'category_id');
    }

    public function site(){
        return $this->hasOne('App\Site');
    }
}
