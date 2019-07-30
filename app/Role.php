<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = "Roles";

    protected $fillable = ['name', 'read_only'];

    public function roles(){
        return $this->hasMany('App\User');
    }
}
