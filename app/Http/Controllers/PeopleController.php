<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PeopleController extends Controller
{
    public function index()
    {
        $people = Person::where(function ($q) {
                $q->whereHas('crewfunctions')->orWhereHas('roles');
        })
        ->where('last_name','<>','')
        // ->where('id',7)
        ->orderBy('last_name')
        ->orderBy('first_name')
        ->get();

        $people->load('crewfunctions.project', 'crewfunctions.crewtype' ,'crewfunctions.projects_play.project','roles.projects_play.project');

        // return $people->count();

        foreach ($people as $key => $person) {
            $subarray = array();
            $crewfunctionarray = array();
            $yeararray = array();
            $subarray['id'] = $person->id;
            $subarray['full_name'] = $person->first_name . ' ' . $person->last_name;
            $subarray['first_name'] = $person->first_name;
            $subarray['last_name'] = $person->last_name;
            foreach ($person->crewfunctions as $crewfunction) {
                if ($crewfunction->project) {
                    $yeararray[] = substr($crewfunction->project->date_start ?? $crewfunction->project->year, 0, 4);
                }
                if ($crewfunction->projects_play){
                    $yeararray[] = substr($crewfunction->projects_play->project->date_start ?? $crewfunction->projects_play->project->year, 0, 4);
                }
                $crewfunctionarray[$crewfunction->crewtype->id] = $crewfunction->crewtype->name;
            }
            foreach ($person->roles as $role) {
                $crewfunctionarray[0] = 'Acting';
                if ($role->projects_play) {
                    $yeararray[] = substr($role->projects_play->project->date_start ?? $role->projects_play->project->year, 0, 4);
                }
            }
            ksort($crewfunctionarray);
            $subarray['years'] = min($yeararray) . (max($yeararray)>min($yeararray) ? ' – ' . max($yeararray) : '');
            $subarray['max_year'] = max($yeararray);
            $subarray['activities'] = implode(", ", $crewfunctionarray);
            $array[] = $subarray;
        }
        $app_url = env('APP_URL', 'https://ctcdb.dk');
        if ($app_url=='https://ctcdb.dk') {
            return View::component('CtcdbPeopleIndex', ['people' => $array]);
        } else {
            return View::component('PeopleIndex', ['people' => $array]);
        }
    }

    public function show($id)
    {
        $person = Person::find($id);
        $personarray = $person->toArray();
        $person->load('phototags.photograph.phototype','portraits','roles.character','roles.projects_play.project','roles.projects_play.play','crewfunctions.crewtype');
        // return $person;
        // photographs
        $photographs=array();
        foreach ($person->phototags as $phototag){
            $phototype= str_replace(' ', '_', strtolower($phototag->photograph->phototype->name ?? '')).'s';
            $photographs[$phototype][] = $phototag->photograph->file_name;
        }
        $personarray['photographs']=$photographs;
        $personarray['public_bio']=$person->public_bio;
        $personarray['phototags']=$person->phototags->toArray();
        $personarray['portraits']=$person->portraits->sortBy('created_at')->reverse()->first();
        $personarray['roles']=$person->roles->map(function($role){
            $subarray['character']=$role->character->name;
            $subarray['play']=$role->projects_play->play->title;
            $subarray['project_id']=$role->projects_play->project->id;
            $subarray['year']=$role->projects_play->project->year;
            return $subarray;
        })->sortBy('year')->values()->all();

        //crewjobs
        $crewfunctions=array();
        foreach ($person->crewfunctions as $crewfunction) {
            if (isset($crewfunction->projects_play->project->id)) {
              $id = $crewfunction->projects_play->project->date_start . '_pp_'. $crewfunction->projects_play->id;
              $crewfunctions[$id]['crewfunction'][] = $crewfunction->crewtype->name;
              $crewfunctions[$id]['project'] = $crewfunction->projects_play->play->title;
              $crewfunctions[$id]['project_id'] = $crewfunction->projects_play->project_id;
              $crewfunctions[$id]['year'] = $crewfunction->projects_play->project->year;
            } elseif (isset($crewfunction->project->id)) {
              $id = $crewfunction->project->date_start . '_pr_'. $crewfunction->project->id;
              $crewfunctions[$id]['crewfunction'][] = $crewfunction->crewtype->name;
              $crewfunctions[$id]['project'] = $crewfunction->project->name;
              $crewfunctions[$id]['project_id'] = $crewfunction->project->id;
              $crewfunctions[$id]['year'] = $crewfunction->project->year;
            }
        }

        if (isset($crewfunctions)) {
          ksort($crewfunctions);
        }
        $crewfunctions = collect($crewfunctions)->map(function($crewfunction){
            $subarray['crewfunction']=collect($crewfunction['crewfunction'])->implode(', ');
            $subarray['project']=$crewfunction['project'];
            $subarray['project_id']=$crewfunction['project_id'];
            $subarray['year']=$crewfunction['year'];
            return $subarray;
        })->values()->all();
        $personarray['crewfunctions']=$crewfunctions;
        // return $personarray['roles'];
        $person = $personarray;
        // return $person;
        $app_url = env('APP_URL', 'https://ctcdb.dk');
        if ($app_url=='https://ctcdb.dk') {
            return View::component('CtcdbPeopleDetails', ['person' => $person]);
        } else {
            return View::component('PeopleDetails', ['person' => $person]);
        }
    }
}
