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

Route::get('/', 'HomeController@show');

//About
Route::get('/about', 'AboutController@show');

//History
Route::get('history', function () {
    return redirect('history/shows');
});
Route::get('/history/shows', 'ShowsController@index')->name('shows');
Route::get('/history/shows/{id}', 'ShowsController@show');
Route::get('/history/people', 'PeopleController@index')->name('people');
Route::get('/history/seasons', 'SeasonsController@index')->name('seasons');


//Admin Controllers

Route::get('/admin/', function () {
    return view('app_admin');
});
Route::get('/admin/{any}', function () {
    return view('app_admin');
})->where('any','.*');
Route::get('/admin-api/events', 'AdminEventsController@index');
Route::get('/admin-api/projects', 'AdminProjectsController@index');
Route::get('/admin-api/plays', 'AdminPlaysController@index');


// Route::get('admin', function(){
//     return redirect('admin/events');
// });
// Route::get('admin/events', 'AdminEventsController@index');
// Route::get('admin/projects', 'AdminProjectsController@index');
// Route::get('admin/plays', 'AdminPlaysController@index');

Auth::routes();

Route::get('/home', 'HomeController@show')->name('home');
