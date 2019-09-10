<?php

namespace App\Http\Controllers;

use App\AboutUsCard;
use Illuminate\Http\Request;

class AdminAboutUsCardsController extends Controller
{
    public function index()
    {
        $data = AboutUsCard::orderBy('about_us_category_id')->orderBy('id')->get();
        return $data;
    }

    public function show($id){
        $card = AboutUsCard::find($id);
        return $card;
    }

    public function update(Request $request, $id)
    {
        $card = AboutUsCard::find($id)->update($request->all());
        return 'ok';
    }
}
