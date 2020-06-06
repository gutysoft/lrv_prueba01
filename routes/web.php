<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('/', 'PanelController');
Route::get('/panel', 'PanelController@index');