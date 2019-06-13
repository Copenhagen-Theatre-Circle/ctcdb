<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommitteeMembership extends Model
{
    public function person()
    {
        return $this->belongsTo('App\Person')->select('id','first_name','last_name');
    }
}
