<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class JoinController extends Controller
{
    public function show()
    {
        $data = array();
        return View::component('JoinBase', ['data' => $data]);
    }
}
