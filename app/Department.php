<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $table = 'Departments';

    protected $fillable = ['name', 'street','suburb','city'];

    public function users(){
        return $this->hasMany('App\User');
    }
}
