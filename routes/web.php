<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[App\Http\Controllers\IndexController::class, 'index']);
Route::get('/mission',[App\Http\Controllers\MissionController::class, 'index']);
Route::get('/bordOfDirector', 'App\Http\Controllers\BordOfDirectorsController@index');
Route::get('/product_detail/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
//===========================================       Report     =====================================
Route::get('/report', [App\Http\Controllers\ReportController::class, 'index']);
Route::get('/finance/report', [App\Http\Controllers\ReportController::class, 'finance_index'])->name('finance');
//===================================================================================================
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//====================================== Register Office ============================================
Route::get('/registerdOffice', [App\Http\Controllers\RegistredOfficeController::class, 'index'])->name('registerdOffice');
Route::get('/registerdOffice/create', [App\Http\Controllers\RegistredOfficeController::class, 'create'])->name('registerdOffice.create');
Route::post('/registerdOffice/create', [App\Http\Controllers\RegistredOfficeController::class, 'store'])->name('registerdOffice.store');
Route::get('/registerdOffice/edit/{id}', [App\Http\Controllers\RegistredOfficeController::class, 'edit'])->name('registerdOffice.edit');
Route::put('/registerdOffice/edit/{id}', [App\Http\Controllers\RegistredOfficeController::class, 'update'])->name('registerdOffice.update');
Route::delete('/registerdOffice/delete/{id}', [App\Http\Controllers\RegistredOfficeController::class, 'destroy'])->name('registerdOffice.destroy');
//===================================================================================================
//======================================  Corporate Office  =======================================
Route::get('/corporateOffice', [App\Http\Controllers\CorporateOfficeController::class, 'index'])->name('corporateOffice');
Route::get('/corporateOffice/create', [App\Http\Controllers\CorporateOfficeController::class, 'create'])->name('corporateOffice.create');
Route::post('/corporateOffice/create', [App\Http\Controllers\CorporateOfficeController::class, 'store'])->name('corporateOffice.store');
Route::get('/corporateOffice/edit/{id}', [App\Http\Controllers\CorporateOfficeController::class, 'edit'])->name('corporateOffice.edit');
Route::put('/corporateOffice/edit/{id}', [App\Http\Controllers\CorporateOfficeController::class, 'update'])->name('corporateOffice.update');
Route::delete('/corporateOffice/delete/{id}', [App\Http\Controllers\CorporateOfficeController::class, 'destroy'])->name('corporateOffice.destroy');
//===================================================================================================

//========================================    BRAND     ================================================
Route::get('/brand', [App\Http\Controllers\BrandController::class, 'index'])->name('brand');
Route::get('/brand/create', [App\Http\Controllers\BrandController::class, 'create'])->name('brand.create');
Route::post('/brand/create', [App\Http\Controllers\BrandController::class, 'store'])->name('brand.store');
Route::get('/brand/edit/{id}', [App\Http\Controllers\BrandController::class, 'edit'])->name('brand.edit');
Route::put('/brand/edit/{id}', [App\Http\Controllers\BrandController::class, 'update'])->name('brand.update');
Route::delete('/brand/delete/{id}', [App\Http\Controllers\BrandController::class, 'destroy'])->name('brand.destroy');
//===================================================================================================
//=========================================== Product Category ======================================
Route::get('/pcat', [App\Http\Controllers\ProductCatController::class, 'index'])->name('pcat');
Route::get('/pcat/create', [App\Http\Controllers\ProductCatController::class, 'create'])->name('pcat.create');
Route::post('/pcat/create', [App\Http\Controllers\ProductCatController::class, 'store'])->name('pcat.store');
Route::get('/pcat/edit/{id}', [App\Http\Controllers\ProductCatController::class, 'edit'])->name('pcat.edit');
Route::put('/pcat/edit/{id}', [App\Http\Controllers\ProductCatController::class, 'update'])->name('pcat.update');
Route::delete('/pcat/delete/{id}', [App\Http\Controllers\ProductCatController::class, 'destroy'])->name('pcat.destroy');
//===================================================================================================

//===========================================       Product     =====================================
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('pcat');
Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
Route::post('/product/create', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
Route::get('/product/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/edit/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
Route::delete('/product/delete/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');
//===================================================================================================

//===========================================       News     =====================================
Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])->name('news');
Route::get('/admin_news', [App\Http\Controllers\NewsController::class, 'admin_index'])->name('adminnews');
Route::get('/news/create', [App\Http\Controllers\NewsController::class, 'create'])->name('news.create');
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


//===========================================       Finance     =====================================
Route::get('/finance', [App\Http\Controllers\FinanceController::class, 'index']);
Route::get('/finance/create', [App\Http\Controllers\FinanceController::class, 'create'])->name('finance.create');
Route::post('/finance/store', [App\Http\Controllers\FinanceController::class, 'store'])->name('finance.store');
Route::get('/finance/edit/{id}', [App\Http\Controllers\FinanceController::class, 'edit'])->name('finance.edit');
Route::put('/finance/edit/{id}', [App\Http\Controllers\FinanceController::class, 'update'])->name('finance.update');
Route::delete('/finance/delete/{id}', [App\Http\Controllers\FinanceController::class, 'destroy'])->name('finance.destroy');
//===================================================================================================



//======================================       Caurosel     ======================================
Route::get('/caurosel', [App\Http\Controllers\CauroselController::class, 'index'])->name('caurosel');
Route::get('/caurosel/create', [App\Http\Controllers\CauroselController::class, 'create'])->name('caurosel.create');
Route::post('/caurosel/store', [App\Http\Controllers\CauroselController::class, 'store'])->name('caurosel.store');
Route::get('/caurosel/edit/{id}', [App\Http\Controllers\CauroselController::class, 'edit'])->name('caurosel.edit');
Route::put('/quacauroselter/edit/{id}', [App\Http\Controllers\CauroselController::class, 'update'])->name('caurosel.update');
Route::delete('/caurosel/delete/{id}', [App\Http\Controllers\CauroselController::class, 'destroy'])->name('caurosel.destroy');
//===================================================================================================
