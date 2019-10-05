<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    public function film() {
        return $this->hasMany('App/Film');
    }

    public function studio() {
        return $this->hasMany('App/Studio');
    }

    protected $fillable = [
        'waktu_booking', 'films_id', 'studios_id', 'jadwal_tayang', 'harga_tiket',
    ];
}
