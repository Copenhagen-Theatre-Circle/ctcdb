<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $guarded=['created_at','updated_at'];

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function eventtype()
    {
        return $this->belongsTo('App\Eventtype');
    }

    public function photograph()
    {
        return $this->belongsTo('App\Photograph');
    }

    public function venue()
    {
        return $this->belongsTo('App\Venue');
    }
}
