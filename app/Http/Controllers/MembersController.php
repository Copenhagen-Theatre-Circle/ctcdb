<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MembersController extends Controller
{
    public function show()
    {
        $data = array();
        return View::component('MembersBase', ['data' => $data]);
    }
}
