<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('name','asc')->get();
        return $projects;
        // return View::admin_component('AdminProjects', ['projects' => $projects]);
    }
    public function show($id)
    {
        $project = Project::find($id);
        return $project;
    }

    public function update(Request $request, $id)
    {
        $project = Project::find($id)->update($request->all());
        return 'ok';
    }
}
