<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Site extends Model
{
    use SearchableTrait;

    protected $table = 'Sites';

    protected $fillable =   ['customer_id', 'service_id', 'network_id',
                             'name', 'region_name', 'street', 'suburb', 'city'];

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'sites.name' => 10,
            'sites.street' => 10,
            'sites.suburb' => 5,
            'sites.city' => 2
        ],
        'joins' => [
            'customers' => ['sites.customer_id','customers.id'],
        ],
    ];


    public function service(){
        return $this->belongsTo('App\Service' ,'service_id');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer', 'customer_id');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function network(){
        return $this->hasOne('App\Network');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
