<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[App\Http\Controllers\IndexController::class, 'index']);
Route::get('/mission',[App\Http\Controllers\MissionController::class, 'index']);
Route::get('/bordOfDirector', 'App\Http\Controllers\BordOfDirectorsController@index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//===================================================================================================
Route::get('/caurosel', [App\Http\Controllers\CauroselController::class, 'index'])->name('caurosel');
Route::post('/caurosel/store', [App\Http\Controllers\CauroselController::class, 'store'])->name('caurosel.store');
//===================================================================================================


//====================================== Register Office ============================================
Route::get('/registerdOffice', [App\Http\Controllers\RegistredOfficeController::class, 'index'])->name('registerdOffice');
Route::post('/registerdOffice/store', [App\Http\Controllers\RegistredOfficeController::class, 'store'])->name('registerdOffice.store');
//===================================================================================================
//======================================  Corporate Office  =======================================
Route::get('/corporateOffice', [App\Http\Controllers\CorporateOfficeController::class, 'index'])->name('corporateOffice');
Route::post('/corporateOffice/store', [App\Http\Controllers\CorporateOfficeController::class, 'store'])->name('corporateOffice.store');
//===================================================================================================

//========================================    BRAND     ================================================
Route::get('/brand', [App\Http\Controllers\BrandController::class, 'index'])->name('brand');
Route::post('/brand/store', [App\Http\Controllers\BrandController::class, 'store'])->name('brand.store');
//===================================================================================================
//=========================================== Product Category ======================================
Route::get('/pcat', [App\Http\Controllers\ProductCatController::class, 'index'])->name('pcat');
Route::post('/pcat/store', [App\Http\Controllers\ProductCatController::class, 'store'])->name('pcat.store');
//===================================================================================================

//===========================================       Product     =====================================
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('pcat');
Route::post('/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
//===================================================================================================

//===========================================       News     =====================================
Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])->name('news');
Route::get('/admin_news', [App\Http\Controllers\NewsController::class, 'admin_index'])->name('adminnews');
Route::get('/news/create', [App\Http\Controllers\NewsController::class, 'index'])->name('news.create');
Route::post('/news/create', [App\Http\Controllers\NewsController::class, 'store'])->name('news.store');
Route::get('/news/edit/{id}', [App\Http\Controllers\NewsController::class, 'edit'])->name('news.edit');
Route::put('/news/edit/{id}', [App\Http\Controllers\NewsController::class, 'update'])->name('news.update');
Route::delete('/news/delete/{id}', [App\Http\Controllers\NewsController::class, 'destroy'])->name('news.destroy');
//===================================================================================================

//===========================================       Video Gallery     =====================================
Route::get('/vGellary', [App\Http\Controllers\VideoGalleryController::class, 'index']);
Route::post('/vGellary/store', [App\Http\Controllers\VideoGalleryController::class, 'store'])->name('vGellary.store');
//===================================================================================================

//===========================================       Image Gallery     =====================================
Route::get('/imgGllary', [App\Http\Controllers\ImageGalleryController::class, 'index']);
Route::post('/imgGllary/store', [App\Http\Controllers\ImageGalleryController::class, 'store'])->name('imgGllary.store');
//===================================================================================================
//===========================================       Report     =====================================
Route::get('/report', [App\Http\Controllers\ReportController::class, 'index']);
//===================================================================================================
