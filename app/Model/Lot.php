<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    //
    public function farm(){
        return $this->belongsTo('App\Model\Lot');
    }
}
