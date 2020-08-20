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

Route::get('/list', function(){
    return view('todo');
});
Route::get('/load', 'TodoController@index'); // load all data todo 

Route::post('/add', 'TodoController@store'); // add or insert todo

Route::get('/show/{id}', 'TodoController@show'); // show specific data todo

Route::patch('/update/{id}', 'TodoController@update'); // update specific data todo

Route::patch('/update_check/{id}', 'TodoController@updatecheck'); // update specific data todo

Route::get('/delete/{id}', 'TodoController@destroy'); // delete specific data todo

