<?php

namespace App\Http\Controllers;

use App\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class AdminVenuesController extends Controller
{
    public function index(Request $request)
    {
        $venues = Venue::where('id','>',0);
        if ($request->input('subset')=='active') {
            $venues = $venues->where('is_active', 1);
        } elseif ($request->input('subset')=='inactive') {
            $venues = $venues->whereNull('is_active')->orWhere('is_active',0);
        }
        $venues = $venues->orderBy('name')->get();
        return $venues;
    }

    public function show($id){
        $venue = Venue::find($id);
        return $venue;
    }

    public function update(Request $request, $id)
    {
        $venue = Venue::find($id)->update($request->all());
        return 'ok';
    }

    public function store(Request $request)
    {
        $venue = Venue::create($request->all());
        return $venue;
    }

    public function fields()
    {
        $columns = Schema::getColumnListing('venues');
        $venue = new Venue;
        foreach ($columns as $column) {
            if (!in_array($column, ['id','created_at','updated_at'])){
                $venue[$column] = null;
            }
        }
        return $venue;
    }
}
