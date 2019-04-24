<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
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
}
