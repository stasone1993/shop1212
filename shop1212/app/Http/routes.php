<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/{id}', function ($id) {
    
});
Route::group(['prefix'=>'admin/product'], function(){
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/create', 'AdminController@create');
    Route::post('/', 'AdminController@store');
    Route::delete('/{product}', 'AdminController@destroy');
});