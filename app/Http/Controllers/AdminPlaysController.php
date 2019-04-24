<?php

namespace App\Http\Controllers;

use App\Play;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminPlaysController extends Controller
{
    public function index()
    {
        $plays = Play::orderBy('title')->get();
        return $plays;
        // return View::admin_component('AdminPlays', ['plays' => $plays]);
    }
}
