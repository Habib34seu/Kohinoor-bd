<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[App\Http\Controllers\IndexController::class, 'index']);
Route::get('/mission',[App\Http\Controllers\MissionController::class, 'index']);
Route::get('/bordOfDirector', 'App\Http\Controllers\BordOfDirectorsController@index');
//===========================================       Report     =====================================
Route::get('/report', [App\Http\Controllers\ReportController::class, 'index']);
//===================================================================================================


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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
Route::get('/vGellary/create', [App\Http\Controllers\VideoGalleryController::class, 'create'])->name('vGellary.create');
Route::post('/vGellary/store', [App\Http\Controllers\VideoGalleryController::class, 'store'])->name('vGellary.store');
Route::get('/vGellary/edit/{id}', [App\Http\Controllers\VideoGalleryController::class, 'edit'])->name('vGellary.edit');
Route::put('/vGellary/edit/{id}', [App\Http\Controllers\VideoGalleryController::class, 'update'])->name('vGellary.update');
Route::delete('/vGellary/delete/{id}', [App\Http\Controllers\VideoGalleryController::class, 'destroy'])->name('vGellary.destroy');
//===================================================================================================

//===========================================       Image Gallery     =====================================
Route::get('/imgGllary', [App\Http\Controllers\ImageGalleryController::class, 'index']);
Route::get('/imgGllary/create', [App\Http\Controllers\ImageGalleryController::class, 'create'])->name('imgGllary.create');
Route::post('/imgGllary/store', [App\Http\Controllers\ImageGalleryController::class, 'store'])->name('imgGllary.store');
Route::get('/imgGllary/edit/{id}', [App\Http\Controllers\ImageGalleryController::class, 'edit'])->name('imgGllary.edit');
Route::put('/imgGllary/edit/{id}', [App\Http\Controllers\ImageGalleryController::class, 'update'])->name('imgGllary.update');
Route::delete('/imgGllary/delete/{id}', [App\Http\Controllers\ImageGalleryController::class, 'destroy'])->name('imgGllary.destroy');

//===================================================================================================

//===========================================       Annual Report     =============================================
Route::get('/annual', [App\Http\Controllers\AnnualReportController::class, 'index']);
Route::get('/annual/create', [App\Http\Controllers\AnnualReportController::class, 'create'])->name('annual.create');
Route::post('/annual/store', [App\Http\Controllers\AnnualReportController::class, 'store'])->name('annual.store');
Route::get('/annual/edit/{id}', [App\Http\Controllers\AnnualReportController::class, 'edit'])->name('annual.edit');
Route::put('/annual/edit/{id}', [App\Http\Controllers\AnnualReportController::class, 'update'])->name('annual.update');
Route::delete('/annual/delete/{id}', [App\Http\Controllers\AnnualReportController::class, 'destroy'])->name('annual.destroy');
//=================================================================================================================
//===========================================       Halfyearly Report     =====================================
Route::get('/halfyear', [App\Http\Controllers\HalfYearlyReportController::class, 'index']);
Route::get('/halfyear/create', [App\Http\Controllers\HalfYearlyReportController::class, 'create'])->name('halfyear.create');
Route::post('/halfyear/store', [App\Http\Controllers\HalfYearlyReportController::class, 'store'])->name('halfyear.store');
Route::get('/halfyear/edit/{id}', [App\Http\Controllers\HalfYearlyReportController::class, 'edit'])->name('halfyear.edit');
Route::put('/halfyear/edit/{id}', [App\Http\Controllers\HalfYearlyReportController::class, 'update'])->name('halfyear.update');
Route::delete('/halfyear/delete/{id}', [App\Http\Controllers\HalfYearlyReportController::class, 'destroy'])->name('halfyear.destroy');
//===================================================================================================
//===========================================       Quaterly Report Report     =====================================
Route::get('/quater', [App\Http\Controllers\QuaterlyReportController::class, 'index']);
Route::get('/quater/create', [App\Http\Controllers\QuaterlyReportController::class, 'create'])->name('quater.create');
Route::post('/quater/store', [App\Http\Controllers\QuaterlyReportController::class, 'store'])->name('quater.store');
Route::get('/quater/edit/{id}', [App\Http\Controllers\QuaterlyReportController::class, 'edit'])->name('quater.edit');
Route::put('/quater/edit/{id}', [App\Http\Controllers\QuaterlyReportController::class, 'update'])->name('quater.update');
Route::delete('/quater/delete/{id}', [App\Http\Controllers\QuaterlyReportController::class, 'destroy'])->name('quater.destroy');
//===================================================================================================
//===================================================================================================
Route::get('/caurosel', [App\Http\Controllers\CauroselController::class, 'index'])->name('caurosel');
Route::get('/caurosel/create', [App\Http\Controllers\CauroselController::class, 'create'])->name('caurosel.create');
Route::post('/caurosel/store', [App\Http\Controllers\CauroselController::class, 'store'])->name('caurosel.store');
Route::get('/caurosel/edit/{id}', [App\Http\Controllers\CauroselController::class, 'edit'])->name('caurosel.edit');
Route::put('/quacauroselter/edit/{id}', [App\Http\Controllers\CauroselController::class, 'update'])->name('caurosel.update');
Route::delete('/caurosel/delete/{id}', [App\Http\Controllers\CauroselController::class, 'destroy'])->name('caurosel.destroy');
//===================================================================================================
