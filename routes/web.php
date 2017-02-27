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

use App\Libraries\Calendar;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/meeting', function () {
    return view('meeting', [
    	"name" => "Jason"
    ]);
});

Route::get('/calendar/{month}', function ($month) {
	$calendar = new Calendar();
	return $calendar->getMonth($month);
});