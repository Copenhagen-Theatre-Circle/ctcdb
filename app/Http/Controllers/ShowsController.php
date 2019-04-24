<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ShowsController extends Controller
{
    public function index()
    {
        $projects = Project::where('publish_online',1)
                    ->select('id','name', 'year')
                    ->orderBy('date_start','desc')
                    ->get();
        $projects->load('poster.photograph');
        return View::component('ShowsIndex', ['projects' => $projects]);
    }

    public function show($id)
    {
        $project = Project::find($id);
        return View::component('ShowsDetails', ['project' => $project]);
    }
}
