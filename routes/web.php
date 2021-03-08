<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'App\Http\Controllers\IndexController@index');
Route::get('/bordOfDirector', 'App\Http\Controllers\BordOfDirectorsController@index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/caurosel', [App\Http\Controllers\CauroselController::class, 'index'])->name('caurosel');
Route::get('/registerdOffice', [App\Http\Controllers\RegistredOfficeController::class, 'index'])->name('registerdOffice');
Route::get('/corporateOffice', [App\Http\Controllers\CorporateOfficeController::class, 'index'])->name('corporateOffice');
