<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    //  public function location()
    // {
    //     return $this->hasManyThrough('App\Location', 'App\Country','country_id','person_id');
    // }
    // public function gps()
    // {
    //     return $this->hasManyThrough('App\Gps', 'App\People','people_id',
    //     	'country_id');
    // }
    public function gps()
    {
        return $this->hasManyThrough('App\Gps', 'App\People');
    }

}
