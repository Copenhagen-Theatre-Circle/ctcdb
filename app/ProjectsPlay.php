<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectsPlay extends Model
{
    protected $visible=['play','synopsis_programme','directors_statement','actors','crewmembers'];

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function actors()
    {
        return $this->hasMany('App\Actor');
    }

    public function crewmembers()
    {
        return $this->hasMany('App\Crewmember');
    }

    public function play()
    {
        return $this->belongsTo('App\Play');
    }
}
