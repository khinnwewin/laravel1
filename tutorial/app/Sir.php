<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sir extends Model
{
    //
       public function role()
    {
        return $this->belongsToMany('App\Role');
        
    }
}
