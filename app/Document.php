<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $visible=['file_name','original_file_name','documenttype'];

    public function documenttype()
    {
        return $this->belongsTo('App\Documenttype');
    }
}
