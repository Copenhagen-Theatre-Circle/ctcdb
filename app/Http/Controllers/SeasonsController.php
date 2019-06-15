<?php

namespace App\Http\Controllers;

use App\Season;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SeasonsController extends Controller
{
    public function index()
    {
        $seasons = Season::orderBy('year_start','desc')->get();
        $seasons->load('projects','chairperson.person');
        // return $seasons;
        $app_url = env('APP_URL', 'https://ctcdb.dk');
        if ($app_url=='https://ctcdb.dk') {
            return View::component('CtcdbSeasonsIndex', ['seasons' => $seasons]);
        } else {
            return View::component('SeasonsIndex', ['seasons' => $seasons]);
        }
    }

    public function show($year)
    {
        $season = Season::where('year_start',$year)->first();
        $season->load(
            'projects.poster.photograph',
            'committee_members.person.portraits',
            'committee_members.committee_function'
        );
        // return $season;
        $app_url = env('APP_URL', 'https://ctcdb.dk');
        if ($app_url=='https://ctcdb.dk') {
            return View::component('CtcdbSeasonsDetails', ['season' => $season]);
        } else {
            return View::component('SeasonsDetails', ['season' => $season]);
        }
    }
}
