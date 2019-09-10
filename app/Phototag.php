<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phototag extends Model
{
    protected $visible=['photograph'];

    public function photograph()
    {
        return $this->belongsTo('App\Photograph');
    }
}
