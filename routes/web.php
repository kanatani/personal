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

Route::get('person/test', function () {
    return view('person/test');
});

Route::get('person/kind', function () {
    return view('person/kind');
});

Route::get('person/serious', function () {
    return view('person/serious');
});

Route::get('person/openness', function () {
    return view('person/openness');
});

Route::get('person/loguin', function () {
    return view('person/loguin');
});

// Route::get('person/logout', function () {
//     Auth::logout();
//     return view('person.index');
// });

Route::get('person/extraversion', function () {
    return view('person/extraversion');
});

Route::get('/person/neuroticism', function () {
    return view('/person/neuroticism');
});

Route::get('/person', function () {
       session()->flush();
        return view('person.index');
});

Route::get('/person/mypage', 'App\Http\Controllers\PersonController@login');

Route::get('/person/search','App\Http\Controllers\PersonController@search');

Route::get('/person/search/{userid}','App\Http\Controllers\PersonController@look');

Route::get('/person/user/{userid}','App\Http\Controllers\PersonController@userview');

Route::post('/person/content_input','App\Http\Controllers\PersonController@store');

Route::post('/person/check','App\Http\Controllers\PersonController@content');

Route::post('/person/serious_result','App\Http\Controllers\PersonController@content');

Route::post('/person/kind_result','App\Http\Controllers\PersonController@insert');

Route::post('/person/serious_result','App\Http\Controllers\PersonController@insert');

Route::post('/person/openness_result','App\Http\Controllers\PersonController@insert');

Route::post('/person/extraversion_result','App\Http\Controllers\PersonController@insert');

Route::post('/person/neuroticism_result','App\Http\Controllers\PersonController@insert');

Route::post('/person/sum_result','App\Http\Controllers\PersonController@result');

Route::post('/person/top','App\Http\Controllers\PersonController@signup');

Route::post('/person/mypage', 'App\Http\Controllers\PersonController@login');

Route::post('/person/newmypage', 'App\Http\Controllers\PersonController@start');

Route::post('/person/your_result/{$userid}', 'App\Http\Controllers\PersonController@insert');

//Route::post('/person/mypage', 'App\Http\Controllers\Auth\LoginController@login');

//Route::get('logout', 'Auth\LoginController@logout')->name('logout');





Route::resource('person', 'App\Http\Controllers\PersonController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

//Route::get('/home', [App\Http\Controllers\PersonController::class, 'loginpage'])->name('home');
