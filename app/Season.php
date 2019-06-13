<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    public function projects()
    {
        return $this->hasMany('App\Project')->where('publish_online',1)->orderBy('date_start')->select('id','season_id','name');
    }

    public function chairperson()
    {
        return $this->hasMany('App\CommitteeMembership')->where('committee_function_id',1)->select('season_id','person_id');
    }
}
