<?php

use App\Http\Controllers\front\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\Auth\LoginController;
use App\Http\Controllers\admin\Auth\RegisterController;
use App\Http\Controllers\admin\Auth\ForgotPasswordController;
use App\Http\Controllers\admin\Auth\ResetPasswordController;

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


    // Authentication Routes
    Route::get('/', [LoginController::class, 'showLoginForm']);
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    // Registration Routes
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);

    // Password Reset Routes
    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
 

    Route::get('dashboard', [DashboardController::class, 'loginPage'])->name('dashboard');
  
    //About Page 

    Route::get('/blog', [ClientDetailsController::class, 'clientDetails'])->name('admin.blog');
    Route::get('/blog/add', [ClientDetailsController::class, 'add'])->name('blog_add');
    Route::get('/blog/view/{id}', [ClientDetailsController::class, 'view'])->name('blog_view');
    Route::post('/blog/store', [ClientDetailsController::class, 'store'])->name('blog_store');
    Route::get('/blog/edit/{id}', [ClientDetailsController::class, 'edit'])->name('blog_edit');
    Route::put('/blog/update/{id}', [ClientDetailsController::class, 'update'])->name('blog_update');
    Route::get('/blog/delete/{id}', [ClientDetailsController::class, 'delete'])->name('blog_delete');

});
