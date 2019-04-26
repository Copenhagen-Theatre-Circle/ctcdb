<?php

namespace App\Http\Controllers;

use App\AboutUsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AboutController extends Controller
{
    public function show()
    {
        $data = AboutUsCategory::all()
                ->load('about_us_cards');
        // return $data;
        return View::component('About', ['data' => $data]);
    }
}
