<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $visible=['id','first_name','last_name','portraits'];

    public function crewfunctions()
    {
        return $this->hasMany('App\Crewmember');
    }

    public function roles()
    {
        return $this->hasMany('App\Actor');
    }

    public function portraits()
    {
          return $this->hasMany('App\Photograph')->orderBy('created_at', 'desc');
    }
}
