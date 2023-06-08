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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', 'App\Http\Controllers\ListsController@index');
Route::get('/hello/add', 'App\Http\Controllers\ListsController@add');
Route::post('/hello/add', 'App\Http\Controllers\ListsController@create');
Route::get('/hello/edit/{id}', 'App\Http\Controllers\ListsController@edit');
Route::post('/hello/update', 'App\Http\Controllers\ListsController@update');
Route::post('/hello/del/{id}', 'App\Http\Controllers\ListsController@delete');