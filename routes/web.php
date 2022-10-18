<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$app_url = env('APP_URL', 'https://ctcdb.dk');

/*
|--------------------------------------------------------------------------
| Routes for ctcircle.dk
|--------------------------------------------------------------------------
*/

if ($app_url=='https://ctcdb.dk') {
    Route::get('/', function () {
        return redirect('/shows');
    });
    Route::get('/shows', 'ShowsController@index');
    Route::get('/shows/{id}', 'ShowsController@show');
    Route::get('/people', 'PeopleController@index')->name('people');
    Route::get('/people/{id}', 'PeopleController@show');
    Route::get('/seasons', 'SeasonsController@index')->name('seasons');
    Route::get('/seasons/{id}', 'SeasonsController@show');
}


/*
|--------------------------------------------------------------------------
| Routes for ctcircle.dk - test project that never materialised!
|--------------------------------------------------------------------------
*/

if ($app_url=='http://ctcircle.test' or $app_url=='https://ctcircle.dk') {
    Auth::routes();

    //Home / What's On
    Route::get('/', 'HomeController@show');
    Route::get('/home', function () {
        return redirect('/');
    });
    Route::get('/whats-on', 'HomeController@show');

    //About
    Route::get('/about', 'AboutController@show');

    //History
    Route::get('history', function () {
        return redirect('history/shows');
    });
    Route::get('/history/shows', 'ShowsController@index')->name('shows');
    Route::get('/history/shows/{id}', 'ShowsController@show');
    Route::get('/history/people', 'PeopleController@index')->name('people');
    Route::get('/history/people/{id}', 'PeopleController@show');
    Route::get('/history/seasons', 'SeasonsController@index')->name('seasons');
    Route::get('/history/seasons/{id}', 'SeasonsController@show');

    //Join
    Route::get('/join', 'JoinController@show');

    //Members
    Route::get('/members', 'MembersController@show');


    //Admin Controllers

    Route::get('/admin/', function () {
        return redirect('/admin/events');
    })->middleware('auth');
    Route::get('/admin/{any}', function () {
        return view('app_admin');
    })->where('any', '.*')->middleware('auth');

    Route::middleware('auth')->group(function () {
        Route::get('/admin-api/events', 'AdminEventsController@index');
        Route::get('/admin-api/events/fields', 'AdminEventsController@fields');
        Route::get('/admin-api/events/{id}', 'AdminEventsController@show');
        Route::post('/admin-api/events', 'AdminEventsController@store');
        Route::patch('/admin-api/events/{id}', 'AdminEventsController@update');

        Route::get('/admin-api/eventtypes', 'AdminEventtypesController@index');
        Route::get('/admin-api/eventtypes/{id}', 'AdminEventtypesController@show');
        Route::patch('/admin-api/eventtypes/{id}', 'AdminEventtypesController@update');

        Route::get('/admin-api/projects', 'AdminProjectsController@index');
        Route::get('/admin-api/projects/{id}', 'AdminProjectsController@show');
        Route::patch('/admin-api/projects/{id}', 'AdminProjectsController@update');

        Route::get('/admin-api/plays', 'AdminPlaysController@index');
        Route::get('/admin-api/plays/{id}', 'AdminPlaysController@show');

        Route::get('/admin-api/venues', 'AdminVenuesController@index');
        Route::get('/admin-api/venues/fields', 'AdminVenuesController@fields');
        Route::get('/admin-api/venues/{id}', 'AdminVenuesController@show');
        Route::patch('/admin-api/venues/{id}', 'AdminVenuesController@update');
        Route::post('/admin-api/venues', 'AdminVenuesController@store');

        Route::get('/admin-api/about-us-cards', 'AdminAboutUsCardsController@index');
        Route::get('/admin-api/about-us-cards/{id}', 'AdminAboutUsCardsController@show');
        Route::patch('/admin-api/about-us-cards/{id}', 'AdminAboutUsCardsController@update');
    });
}


// Route::get('admin', function(){
//     return redirect('admin/events');
// });
// Route::get('admin/events', 'AdminEventsController@index');
// Route::get('admin/projects', 'AdminProjectsController@index');
// Route::get('admin/plays', 'AdminPlaysController@index');
