<?php

namespace App\Http\Controllers;

use App\Play;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminPlaysController extends Controller
{
    public function index()
    {
        $plays = Play::orderBy('title')->get()->map(function($play){
            return ['id'=>$play->id, 'title'=>$play->title];
        });
        return $plays;
    }
    public function show($id)
    {
        $play = Play::find($id);
        return $play;
    }
}
