<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crewmember extends Model
{
    protected $visible=['person','crewtype'];

    public function projects_play()
    {
        return $this->belongsTo('App\ProjectsPlay');
    }

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function crewtype()
    {
        return $this->belongsTo('App\Crewtype');
    }

    public function person()
    {
        return $this->belongsTo('App\Person');
    }
}
