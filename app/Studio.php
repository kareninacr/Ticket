<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    public function cinema() {
        return $this->belongsTo('App/Cinema');
    }
}
