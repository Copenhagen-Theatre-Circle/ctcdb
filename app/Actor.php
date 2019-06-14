<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $visible=['person','character','projects_play'];

    public function projects_play()
    {
        return $this->belongsTo('App\ProjectsPlay');
    }

    public function person()
    {
        return $this->belongsTo('App\Person');
    }

    public function character()
    {
        return $this->belongsTo('App\Character');
    }
}
