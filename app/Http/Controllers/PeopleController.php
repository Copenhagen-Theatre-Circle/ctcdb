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
}
