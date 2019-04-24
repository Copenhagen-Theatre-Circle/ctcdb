<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminEventsController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('date','desc')->get();
        $events->load('eventtype','project');
        return $events;
        return View::admin_component('AdminEvents', ['events' => $events]);
    }
}
