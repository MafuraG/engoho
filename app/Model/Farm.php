<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    //

    public function lots(){
        return $this->hasMany('App\Model\Lot');
    }
}
