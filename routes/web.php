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

// トップページ
Route::get('/person', function () {
    Auth::logout();
    session()->flush();
     return view('person.index');
});

// お問い合わせ
Route::get('person/contact', function () {
    return view('person/contact');
});

Route::post('/person/check','App\Http\Controllers\ContentController@content');

Route::post('/person/content_input','App\Http\Controllers\ContentController@store');

// テストページ
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

Route::get('person/extraversion', function () {
    return view('person/extraversion');
});

Route::get('/person/neuroticism', function () {
    return view('/person/neuroticism');
});

// テスト結果
Route::post('/person/kind_result','App\Http\Controllers\TestController@insert');

Route::post('/person/serious_result','App\Http\Controllers\TestController@insert');

Route::post('/person/openness_result','App\Http\Controllers\TestController@insert');

Route::post('/person/extraversion_result','App\Http\Controllers\TestController@insert');

Route::post('/person/neuroticism_result','App\Http\Controllers\TestController@insert');

Route::post('/person/sum_result','App\Http\Controllers\TestController@result');

// ユーザーテスト結果
Route::post('/person/your_result/{$userid}', 'App\Http\Controllers\TestController@insert');


// 新規登録とログイン
Route::post('/person/newmypage', 'App\Http\Controllers\NewuserController@start');

Route::post('/person/top','App\Http\Controllers\UserloguinController@login');

Route::post('/person/mypage', 'App\Http\Controllers\UserloguinController@login');

Route::get('person/logout', 'App\Http\Controllers\UserloguinController@logout');

// 自分のページ
Route::get('/person/mypage', 'App\Http\Controllers\PersonController@mypage')->name('mypage');

// search機能
Route::get('/person/search','App\Http\Controllers\SearchController@search')->name('search');

Route::get('/person/search/{userid}','App\Http\Controllers\SearchController@look');

Route::get('/person/user/{userid}','App\Http\Controllers\SearchController@userview');

Route::post('/person/user/{userid}','App\Http\Controllers\SearchController@like');

// トークルーム
Route::get('/person/chat', 'App\Http\Controllers\ChatController@chat')->name('chat');

Route::get('/person/chatroom/{chatroomid}','App\Http\Controllers\ChatController@talkroom');

Route::get('/person/chatroom/ajax/{chatroomid}','App\Http\Controllers\ChatController@chatajax');

Route::post('/person/chatroom/{chatroomid}','App\Http\Controllers\ChatController@chatcreate');

// グループチャット
Route::get('/person/groupchat/{groupchat}','App\Http\Controllers\ChatController@communitychat');

// グループ機能
Route::get('/person/community','App\Http\Controllers\GroupController@community')->name('community');

Route::get('/person/community-make','App\Http\Controllers\GroupController@make_community')->name('make');

Route::post('/person/community','App\Http\Controllers\GroupController@community')->name('maked-community');

Route::get('/person/group_detail/{groupid}','App\Http\Controllers\GroupController@communitydetail');

Route::get('/person/axios/group_detail/{grouplike}','App\Http\Controllers\GroupController@joinstatus');

Route::post('/person/group_detail','App\Http\Controllers\GroupController@community_join');

Route::get('/person/community_search', 'App\Http\Controllers\GroupController@search')->name('community_search');

Route::resource('person', 'App\Http\Controllers\PersonController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

//Route::get('/home', [App\Http\Controllers\PersonController::class, 'loginpage'])->name('home');
