<?php

namespace App\Http\Controllers;

use App\Eventtype;
use Illuminate\Http\Request;

class AdminEventtypesController extends Controller
{
    public function index()
    {
        $eventtypes = Eventtype::all()
        ->map(function ($eventtype) {
            return ['id'=>$eventtype->id, 'name'=>$eventtype->name, 'icon'=>$eventtype->icon];
        });
        return $eventtypes;
    }

    public function show($id)
    {
        $eventtype = Eventtype::find($id);
        $eventtype->load('photograph');
        return $eventtype;
    }

    public function update(Request $request, $id)
    {
        $eventtype = Eventtype::find($id)->update($request->all());
        return 'ok';
    }
}
