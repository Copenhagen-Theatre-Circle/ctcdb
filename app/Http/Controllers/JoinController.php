<?php

namespace App\Http\Controllers;

use App\Memberbenefitgroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class JoinController extends Controller
{
    public function show()
    {
        $benefits = Memberbenefitgroup::all();
        $benefits->load('memberbenefits');

        return View::component('JoinBase', ['benefits' => $benefits]);
    }
}
