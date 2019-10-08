<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    protected $table = 'studios';

    public function cinema() {
        return $this->belongsTo('App/Cinema');
    }

    protected $fillable = [
        'nama_studio', 'tipe_studio', 'jumlah_studio', 'jumlah_kursi', 'kode_kursi', 'keterangan',
    ];
}
