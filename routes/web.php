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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::get('criminals',['as'=>'criminals.index','uses'=>'CriminalController@index']);
    Route::get('criminals/create',['as'=>'criminals.create','uses'=>'CriminalController@create']);
    Route::post('criminals/create',['as'=>'criminals.store','uses'=>'CriminalController@store']);

    Route::get('crimeCategory',['as'=>'crimeCategory.index','uses'=>'CriminalController@index']);
});
