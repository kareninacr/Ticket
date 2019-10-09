<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    public function booking()
    {
        return $this->belongsTo('App/Booking');
    }

    protected $fillable = [
        'total_bayar', 'metode',
    ];
}
