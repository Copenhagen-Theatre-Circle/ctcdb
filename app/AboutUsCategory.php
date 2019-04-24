<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUsCategory extends Model
{
    public function about_us_cards()
    {
        return $this->hasMany('App\AboutUsCard');
    }
}
