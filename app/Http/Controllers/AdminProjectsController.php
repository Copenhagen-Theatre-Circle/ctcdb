<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('year','desc')->get();
        return $projects;
        // return View::admin_component('AdminProjects', ['projects' => $projects]);
    }
}
