<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memberbenefitgroup extends Model
{
    public function memberbenefits()
    {
        return $this->hasMany('App\Memberbenefit');
    }
}
