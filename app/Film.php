<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'films'; 
    
    public function cinema() {
        return $this->belongsTo('App/Cinema');
    } 

    protected $fillable = [
        'judul', 'cover', 'durasi', 'rating', 'sinopsis', 'trailer',
    ];
}
