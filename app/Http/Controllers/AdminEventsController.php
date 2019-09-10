<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;

class AdminEventsController extends Controller
{
    public function index(Request $request)
    {
        $events = Event::where('id','>',0);
        if ($request->input('subset')=='future') {
            // return $request->input('subset');
            $events = $events->whereDate('date', '>=', Carbon::now('Europe/Stockholm'))->orderBy('date','ASC');
        } elseif ($request->input('subset')=='past') {
            $events = $events->whereDate('date', '<', Carbon::now('Europe/Stockholm'))->orderBy('date','DESC');
        }
        $events = $events->get();
        $events->load('eventtype','project');
        // return $events;
        return $events->map(function ($event) {
            $id = $event->id;
            $title = $event->title ?? $event->project->name ?? $event->eventtype->name ?? 'undefined event';
            $subtitle = date("D, d M Y", strtotime($event->date));
            $icon = $event->eventtype->icon ?? '';
            return array('id'=>$id,'title'=>$title,'subtitle'=>$subtitle,'icon'=>$icon);
        });
        return View::admin_component('AdminEvents', ['events' => $events]);
    }

    public function show($id)
    {
        $event = Event::find($id);
        $event->load('project.poster.photograph','eventtype','photograph');
        return $event;
    }

    public function update(Request $request, $id)
    {
        $event = Event::find($id)->update($request->all());
        return 'ok';
    }

    public function store(Request $request)
    {
        $event = Event::create($request->all());
        return $event;
    }

    public function fields()
    {
        $columns = Schema::getColumnListing('events'); // users table
        $event = new Event;
        foreach ($columns as $column) {
            if (!in_array($column, ['id','created_at','updated_at'])){
                $event[$column] = null;
            }
        }
        return $event;
    }
}
