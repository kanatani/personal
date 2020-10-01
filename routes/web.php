<?php

use Illuminate\Support\Facades\Route;

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

Route::get('person/contact', function () {
    return view('person/contact');
});
Route::post('/person/content_input','App\Http\Controllers\PersonController@store');
Route::post('/person/check','App\Http\Controllers\PersonController@content');

Route::resource('person', 'App\Http\Controllers\PersonController');



Route::get('/', function () {
    return view('welcome');
});



