<?php

namespace App\Http\Controllers;

use App\Event;
use App\Eventtype;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function show()
    {
        $eventtypes = Eventtype::all();
        $events = Event::whereDate('date', '>=', Carbon::now('Europe/Stockholm'))->orderBy('date')->get();
        $events->load('project','eventtype');
        // return $events;

        //*********** in memory parsing of data - TO DO: refactor to repository? *************
        $i = 0;
        foreach ($events as $event) {
            $i++;
            $subarray['id'] = $event->id;

            //name: priority: 1. Event Name (option to replace, prepend or append), 2. Project Name, 3. Eventtype Name

            $subarray['name'] =  $event->name ?? $event->project->name ?? $event->eventtype->name;

            //date & time

            $subarray['date'] = $event->date;
            $subarray['time'] = $event->time;

            //location - TO DO: create location table

            $subarray['location'] = '[LOCATION HERE]';

            //eventtype

            $subarray['eventtype'] = $event->eventtype->name;

            //description (short description): priority: 1. Event Description (option to replace, prepend or append) 2. Project Description, 3. Eventtype Description

            $subarray['description'] = $event->short_description ?? $event->project->short_description ?? $event->eventtype->short_description;

            //

            //image

            $subarray['image'] = $event->xx_image_override;

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
