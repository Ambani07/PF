<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    //
    protected $table = "Networks";

    public function site(){
        return $this->belongsTo('App\Site');
    }
}
