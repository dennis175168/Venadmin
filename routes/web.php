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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home','HomeController@index');


Route::get('member','MemberController@index');


Route::get('check','CheckController@index');
Route::get('checking','CheckController@checking');
Route::get('checking_delete','CheckController@checking_delete');


Route::get('announce','AnnounceController@index');
Route::post('announce_insert','AnnounceController@insert');
Route::post('announce_delete','AnnounceController@delete');


Route::get('control','ControlController@index');
Route::post('control_delete','ControlController@delete_sh');
Route::get('control_update','ControlController@update_sh');
Route::get('control_search','ControlController@search_sh');

Route::get('beacon','BeaconController@index');
Route::post('beacon_insert','BeaconController@insert');
Route::post('beacon_delete','BeaconController@delete');