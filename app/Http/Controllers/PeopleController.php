<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PeopleController extends Controller
{
    public function index()
    {
        $data = [];
        return View::component('People', ['data' => $data]);
    }
}
