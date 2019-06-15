<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $visible=['id','name','date_start','date_end','number_of_performances','synopsis','special_thanks','directors_statement','poster','projecttype','year','projects_plays','crewmembers','directors','programme','documents','season','venue'];

    public function projects_plays()
    {
        return $this->hasMany('App\ProjectsPlay');
    }

    public function production_crewmembers()
    {
        return $this->hasMany('App\Crewmember')->where('projects_play_id',NULL);
    }

    public function directors()
    {
        return $this->hasMany('App\Crewmember')->where('crewtype_id',1);
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

    public function documents()
    {
        return $this->hasMany('App\Document')->where('documenttype_id','!=',5);
    }

    public function programme()
    {
        return $this->hasMany('App\Document')->where('documenttype_id',1);
    }

    public function projecttype()
    {
        return $this->belongsTo('App\Projecttype');
    }

    public function season()
    {
        return $this->belongsTo('App\Season');
    }

    public function venue()
    {
        return $this->belongsTo('App\Venue');
    }
}
