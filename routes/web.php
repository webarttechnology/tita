<?php

use App\Http\Controllers\front\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\Auth\LoginController;
use App\Http\Controllers\admin\Auth\RegisterController;
use App\Http\Controllers\admin\Auth\ForgotPasswordController;
use App\Http\Controllers\admin\Auth\ResetPasswordController;

//
use App\Http\Controllers\admin\AuthManageController;
use App\Http\Controllers\admin\VehicleManageController;

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

    Route::get('/', function () {
        return redirect()->route('admin.login');
    });

    Route::controller(AuthManageController::class)->group(function () {
        Route::get('login', 'login')->name('admin.login');
        Route::post('login-action', 'login_action');
    });

    // Admin MIddleware
    Route::middleware(['admin.auth'])->group(function () {
        Route::controller(AuthManageController::class)->group(function () {
            Route::get('dashboard', 'dashboard');
            Route::get('logout', 'logout')->name('admin.logout');
        });

        /**
         * EV Listings
        */

        Route::prefix('vehicle')->controller(VehicleManageController::class)->group(function () {
             Route::get('list', 'listing');
             Route::get('add', 'add');
             Route::post('add-action', 'add_action');
             Route::get('delete/{id}', 'delete');
        });

    });
});
