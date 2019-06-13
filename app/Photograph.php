<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photograph extends Model
{
    protected $visible=['id','file_name','phototype_id','phototype'];

    public function phototype()
    {
        return $this->belongsTo('App\Phototype');
    }
}
