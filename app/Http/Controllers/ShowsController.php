<?php

namespace App\Http\Controllers;

use App\Project;
use App\Projecttype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ShowsController extends Controller
{
    public function index()
    {
        $projects = Project::where('publish_online',1)
                    ->whereNotNull('projecttype_id')
                    ->select('id','name', 'year','projecttype_id')
                    ->orderBy('date_start','desc')
                    ->get();
        $projects->load('poster.photograph','projecttype');
        $projecttypes = Projecttype::all();
        $app_url = env('APP_URL', 'https://ctcdb.dk');
        if ($app_url=='https://ctcdb.dk') {
            return View::component('CtcdbShowsIndex', ['projects' => $projects,'projecttypes'=>$projecttypes]);
        } else {
            return View::component('ShowsIndex', ['projects' => $projects,'projecttypes'=>$projecttypes]);
        }

    }

    public function show($id)
    {
        $project = Project::find($id);
        $projectarray=$project->toArray();
        $project->load(
            'production_crewmembers.person',
            'production_crewmembers.crewtype',
            'projects_plays.play',
            'projects_plays.actors.person.portraits',
            'projects_plays.actors.character',
            'projects_plays.crewmembers.person',
            'projects_plays.crewmembers.crewtype',
            'phototags.photograph.phototype',
            'directors.person',
            'documents.documenttype',
            'programme',
            'season',
            'venue'
        );
        // return $project;

        // photographs
        foreach ($project->phototags as $phototag){
            $phototype= str_replace(' ', '_', strtolower($phototag->photograph->phototype->name ?? '')).'s';
            $photographs[$phototype][] = $phototag->photograph->file_name;
        }
        // return $photographs;
        $projectarray['photographs']=$photographs;

        // re-sort crewmembers;
        $crewmembers = $project->production_crewmembers->sortBy('crewtype.sort_order')->values()->all();
        // return $crewmembers;
        $projectarray['crewmembers']=$crewmembers;
        $directors = $project->directors->map(function($director){
            return $director->person->first_name . ' ' . $director->person->last_name;
        })->join(', ',' and ');
        $projectarray['directors']=$directors;

        $projectarray['documents']=$project->documents->sortBy('documenttype_id')->values()->all();

        $projectarray['programme']=$project->programme->first();
        $projectarray['season']=$project->season;
        $projectarray['venue']=$project->venue;

        $projectarray['projects_plays']=$project->projects_plays->toArray();

        $project = $projectarray;
        // return $project;

        $app_url = env('APP_URL', 'https://ctcdb.dk');
        if ($app_url=='https://ctcdb.dk') {
            return View::component('CtcdbShowsDetails', ['project' => $project]);
        } else {
            return View::component('ShowsDetails', ['project' => $project]);
        }
    }
}
