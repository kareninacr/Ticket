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
        'nama_bioskop', 'alamat', 'tlp', 'films_id', 'jadwal_tayang', 'status_film', 'studios_id', 'harga_tiket',
    ];
}
