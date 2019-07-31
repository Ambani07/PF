<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    //
    protected $table = 'Sites';

    protected $fillable =   ['customer_id', 'service_id', 'network_id',
                             'name', 'region_name', 'street', 'suburb', 'city'];


    public function service(){
        return $this->hasOne('App\Service');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer', 'customer_id');
    }
}
