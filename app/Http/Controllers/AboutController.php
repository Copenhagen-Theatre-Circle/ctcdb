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
        // $data = json_decode('
        //     [
        //         {
        //             "title": "Drama",
        //             "image": "https://ctc-members.dk/files/5c324c7a6c6aa.jpg"
        //         },
        //         {
        //             "title": "Musical Theatre",
        //             "image": "https://ctc-members.dk/files/5c802e522bbe7.jpg"
        //         },
        //         {
        //             "title": "British Panto",
        //             "image": "https://ctc-members.dk/files/5c802fcc54c17.jpg"
        //         },
        //         {
        //             "title": "Fringe Theatre",
        //             "image": "https://ctc-members.dk/files/5c803030996db.jpg"
        //         },
        //         {
        //             "title": "Open Stage",
        //             "image": "https://ctc-members.dk/media/open-stage-2.jpg"
        //         },
        //         {
        //             "title": "Play Readings",
        //             "image": "https://ctcircle.dk/wordpress/wp-content/uploads/2013/05/script_reading_web-376x160.jpg"
        //         },
        //         {
        //             "title": "Workshops",
        //             "image": "https://www.simplilearn.com/ice9/free_resources_article_thumb/CoverPage_Effectiveness-of-Corporate-training.jpg"
        //         }
        //     ]
        // ');
        // return $data;
        return View::component('About', ['data' => $data]);
    }
}
