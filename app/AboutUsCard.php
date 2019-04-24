<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUsCard extends Model
{
    protected $appends=['photograph'];

    public function about_us_category()
    {
        return $this->belongsTo('App\AboutUsCategory');
    }

    public function photograph()
    {
        return $this->belongsTo('App\Photograph');
    }

    public function GetPhotographAttribute()
    {
        return $this->photograph()->first()['file_name'];
    }
}
