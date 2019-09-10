<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventtype extends Model
{
    protected $guarded=[];

    public function photograph()
    {
        return $this->belongsTo('App\Photograph');
    }
}
