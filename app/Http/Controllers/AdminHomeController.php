<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminHomeController extends Controller
{
    public function show()
    {
        $data = [];
        return View::admin_component('AdminHome', ['data' => $data]);
    }
}
