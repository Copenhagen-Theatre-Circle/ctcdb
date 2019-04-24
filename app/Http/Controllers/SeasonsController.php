<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SeasonsController extends Controller
{
    public function index()
    {
        $data = [];
        return View::component('Seasons', ['data' => $data]);
    }
}
