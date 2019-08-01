<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    
    protected $table = "customers";

    protected $fillable = ['name', 'surname', 'email', 'company', 'status'];
    
    public function product(){
        return $this->hasMany('App\Product');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function products(){
        return $this->morphMany('App\CustomerProduct', 'customerProducts');
    }

    public function sites()
    {
        return $this->hasOne('App\Site');
    }

    
}
