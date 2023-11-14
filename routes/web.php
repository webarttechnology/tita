<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\VideoController;
use App\Http\Controllers\admin\PDFController;
use App\Http\Controllers\admin\AuthManageController;
use App\Http\Controllers\admin\VehicleManageController;

use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\InstallerController;

use App\Http\Controllers\installer\InstallerAuthManageController;
use App\Http\Controllers\installer\InstallerAccountManageController;
use App\Http\Controllers\installer\InstallerLocationManageController;

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
Route::get('/booking', [HomeController::class, 'booking'])->name('booking');
Route::get('/video', [HomeController::class, 'video'])->name('video');
Route::get('/pdf-download', [HomeController::class, 'pdfDownload'])->name('pdf_download');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [HomeController::class, 'singleBlog'])->name('single_blog');
Route::get('/registration', [HomeController::class, 'registration'])->name('registration');
Route::post('/installer-registration', [InstallerController::class, 'registration'])->name('installer_registration');
Route::get('/contact', [HomeController::class, 'contactUs'])->name('contactUs');

Route::get('/ev-listing', [HomeController::class, 'evlisting'])->name('ev_listing');
Route::get('/ev-listing/details/{id}', [HomeController::class, 'evlisting_details']);


/**
 * Admin Section
*/

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

        /**
         * Blog section
        */

        Route::get('/blog', [BlogController::class, 'index'])->name('admin.blog');
        Route::get('/blog/add', [BlogController::class, 'add'])->name('blog_add');
        Route::post('/blog/store', [BlogController::class, 'store'])->name('blog_store');
        Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog_edit');
        Route::put('/blog/update/{id}', [BlogController::class, 'update'])->name('blog_update');
        Route::get('/blog/delete/{id}', [BlogController::class, 'delete'])->name('blog_delete');   
    
    
        //Video Tutorials Routes 
        Route::get('/video', [VideoController::class, 'index'])->name('admin.video');
        Route::get('/video/add', [VideoController::class, 'add'])->name('video_add');
        Route::post('/video/store', [VideoController::class, 'store'])->name('video_store');
        Route::get('/video/edit/{id}', [VideoController::class, 'edit'])->name('video_edit');
        Route::put('/video/update/{id}', [VideoController::class, 'update'])->name('video_update');
        Route::get('/video/delete/{id}', [VideoController::class, 'delete'])->name('video_delete');
    
        //PDF Routes 
        Route::get('/pdf', [PDFController::class, 'index'])->name('admin.pdf');
        Route::get('/pdf/add', [PDFController::class, 'add'])->name('pdf_add');
        Route::post('/pdf/store', [PDFController::class, 'store'])->name('pdf_store');
        Route::get('/pdf/edit/{id}', [PDFController::class, 'edit'])->name('pdf_edit');
        Route::put('/pdf/update/{id}', [PDFController::class, 'update'])->name('pdf_update');
        Route::get('/pdf/delete/{id}', [PDFController::class, 'delete'])->name('pdf_delete');

    });

});


/**
 * Installer section
*/

Route::prefix('installer')->group(function () {
    Route::get('/', function () {
        return redirect()->route('installer.login');
    });

    Route::controller(InstallerAuthManageController::class)->group(function () {
        Route::get('login', 'login')->name('installer.login');
        Route::post('login-action', 'login_action');
    });

    /**
     * Installer Middleware
    */

    Route::middleware(['installer.auth'])->group(function () {
        Route::controller(InstallerAuthManageController::class)->group(function () {
            Route::get('dashboard', 'dashboard');
            Route::get('logout', 'logout')->name('installer.logout');
        });

        Route::controller(InstallerAccountManageController::class)->group(function () {
              Route::get('my-account', 'account');
              Route::post('edit/profile', 'profile_edit');
              Route::post('change/password', 'change_password');
        });

        Route::controller(InstallerLocationManageController::class)->group(function () {
              Route::get('location', 'location');
              Route::post('location-save/{type}', 'location_save');
        });
    });
});