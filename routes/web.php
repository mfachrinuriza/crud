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
    return view('index');
});

Route::get('/data-tables', function(){
    return view('data-tables');
});

Route::get('/master', function(){
    return view('adminlte/master');
});

Route::get('/items', function(){
    return view('items/index');
});

Route::get('/create', function(){
    return view('items/create');
});

Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@create');
