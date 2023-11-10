<?php

use App\Http\Controllers\front\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about_us');
Route::get('/ev-listing', [HomeController::class, 'evlisting'])->name('ev_listing');
Route::get('/booking', [HomeController::class, 'booking'])->name('booking');
Route::get('/video', [HomeController::class, 'video'])->name('video');
Route::get('/pdf-download', [HomeController::class, 'pdfDownload'])->name('pdf_download');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');


Route::prefix('admin')->group(function () {
    //Home Page ->middleware(['auth'])
 

    Route::get('dashboard', [DashboardController::class, 'loginPage'])->name('dashboard');
  
    //About Page 

    //Client Routes
    Route::get('/client-details', [ClientDetailsController::class, 'clientDetails'])->name('clientDetails');
    Route::get('/client-details/add', [ClientDetailsController::class, 'add'])->name('clientDetails_add');
    Route::get('/client-details/view/{id}', [ClientDetailsController::class, 'view'])->name('clientDetails_view');
    Route::post('/client-details/store', [ClientDetailsController::class, 'store'])->name('clientDetails_store');
    Route::get('/client-details/edit/{id}', [ClientDetailsController::class, 'edit'])->name('clientDetails_edit');
    Route::put('/client-details/update/{id}', [ClientDetailsController::class, 'update'])->name('clientDetails_update');
    Route::get('/client-details/delete/{id}', [ClientDetailsController::class, 'delete'])->name('clientDetails_delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
