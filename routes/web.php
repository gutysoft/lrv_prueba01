<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'PanelController@index')->middleware('auth');
Route::get('/panel', 'PanelController@index')->middleware('auth');


Route::get('/', function () {
    
    if (Auth::check()) {
        return view('paginas.panel');
    }
    return redirect('/login');

});