<?php

namespace App\Http\Controllers;

use App\Event;
use App\Eventtype;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function show()
    {
        $eventtypes = Eventtype::all();
        $events = Event::whereDate('date', '>=', Carbon::now('Europe/Stockholm'))->orderBy('date')->get();
        $events->load('project.poster.photograph','eventtype','venue');
        // return $auth;
        // return $events;

        //*********** in memory parsing of data - TO DO: refactor to repository? *************
        $eventarray=[];
        $i = 0;
        foreach ($events as $event) {
            $i++;
            $subarray['id'] = $event->id;

            //name, description and image
            if ($event->defaults_are_overridden) {
                $subarray['description'] = $event->short_description ?? $event->project->short_description ?? $event->eventtype->short_description;
                $subarray['image'] = $event->photograph->file_name ?? $event->project->poster[0]['photograph']['file_name'] ?? $event->eventtype->photograph->file_name ?? '';
                $subarray['name'] =  $event->title ?? $event->project->name ?? $event->eventtype->name;
            } else {
                $subarray['description'] = $event->project->short_description ?? $event->eventtype->short_description ?? $event->short_description ?? '';
                $subarray['image'] =  $event->project->poster[0]['photograph']['file_name'] ?? $event->eventtype->photograph->file_name ?? $event->photograph->file_name ?? '';
                $subarray['name'] =  $event->project->name ?? $event->eventtype->name ?? $event->title ?? '';
            }


            //date & time

            $subarray['date'] = $event->date;
            $subarray['time'] = $event->time;

            //location - TO DO: create location table
            if ($event->for_members_only!=1) {
                $subarray['location'] = $event->venue->name;
                $subarray['address'] = $event->venue->street . ', ' . $event->venue->post_code . ' ' . $event->venue->city;
            } else {
                $subarray['location'] = '🔓 CTC Members Only';
            }

            //eventtype

            $subarray['eventtype'] = $event->eventtype->name;
            $subarray['for_members_only'] = $event->for_members_only;

            //ticket link

            $subarray['seccode'] = $event->place2book_seccode;

            //

            $eventarray[]=$subarray;
        }

        $events = $eventarray;

        // return $events;
        return View::component('Home', ['events' => $events,'eventtypes' => $eventtypes]);
        // return view('welcome', Compact('events'));
    }
}
