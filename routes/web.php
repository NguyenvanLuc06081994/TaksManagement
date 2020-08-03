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
Route::prefix('/tasks')->group(function (){
    Route::get('/','TaskController@index')->name('tasks.index');
    Route::get('/showCreate','TaskController@showCreate')->name('tasks.showCreate');
    Route::post('/','TaskController@create')->name('tasks.create');
    Route::get('/detail/{id}','TaskController@show')->name('tasks.detail');
//    Route::get('/edit','TaskCo');
});