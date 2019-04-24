<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function eventtype()
    {
        return $this->belongsTo('App\Eventtype');
    }
}
