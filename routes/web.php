<?php

use Illuminate\Support\Facades\Route;

////
use App\Http\Controllers\TasksController;

////
// Route::get('/', function () {
//     // return view('welcome');
//     return view('hello');
// });

////
//Route::get('/', 'TasksController@index');

//Route::resource('tasks', 'TasksController');


////

Route::get('/', [TasksController::class, 'index']);


////test
// Route::get('/', function(){
//     return view('layouts.app');
// });

////
Route::resource('tasks', TasksController::class);


