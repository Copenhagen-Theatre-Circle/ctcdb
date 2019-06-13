<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $visible=['id','name','date_start','date_end','number_of_performances','synopsis','special_thanks','directors_statement','poster','projecttype','year','projects_plays','crewmembers'];
    public function projects_plays()
    {
        return $this->hasMany('App\ProjectsPlay');
    }

    public function crewmembers()
    {
        return $this->hasMany('App\Crewmember');
    }

    public function phototags()
    {
        return $this->hasMany('App\Phototag');
    }

    public function poster()
    {
        return $this->hasMany('App\Phototag')->select('id','photograph_id','project_id')->whereHas('photograph', function ($query){
            $query->where('phototype_id', 3);
        });
    }

    public function projecttype()
    {
        return $this->belongsTo('App\Projecttype');
    }
}
