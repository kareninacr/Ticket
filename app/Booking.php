<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = '$bookings';
    public function user() {
        return $this->hasMany('App/User');
    }

    public function cinema() {
        return $this->hasMany('App/Cinema');
    }

    public function payment() {
        return $this->hasOne('App/Payment');
    }    
}
