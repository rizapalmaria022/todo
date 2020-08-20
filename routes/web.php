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


Route::get('/', 'TodoController@index');

Route::post('/add', 'TodoController@store'); // add or insert todo

Route::get('/show/{id}', 'TodoController@show'); // show specific data 

Route::patch('/update/{id}', 'TodoController@update'); // update specific data

