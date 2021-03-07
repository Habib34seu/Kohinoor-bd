<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'App\Http\Controllers\IndexController@index');
Route::get('/bordOfDirector', 'App\Http\Controllers\BordOfDirectorsController@index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
