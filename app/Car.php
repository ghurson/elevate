<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //

    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
}