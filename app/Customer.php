<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    
    protected $table = "customers";

    protected $fillable = ['name', 'surname', 'email', 'company', 'status'];
    
    public function products(){
        return $this->hasMany('App\Product');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
