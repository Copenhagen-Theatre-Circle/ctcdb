<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommitteeMembership extends Model
{
    protected $visible = ['person','committee_function'];

    public function person()
    {
        return $this->belongsTo('App\Person')->select('id','first_name','last_name');
    }

    public function committee_function()
    {
        return $this->belongsTo('App\CommitteeFunction');
    }
}
