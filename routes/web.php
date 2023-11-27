<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\VideoController;
use App\Http\Controllers\admin\PDFController;
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\admin\AuthManageController;
use App\Http\Controllers\admin\VehicleManageController;
use App\Http\Controllers\admin\AdminQuoteController;
use App\Http\Controllers\front\UserController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\InstallerController;

use App\Http\Controllers\installer\InstallerAuthManageController;
use App\Http\Controllers\installer\InstallerAccountManageController;
use App\Http\Controllers\installer\InstallerLocationManageController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\admin\TestManageController;

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

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about_us');
Route::get('/booking', [HomeController::class, 'booking'])->name('booking');
Route::get('/cng-kit', [HomeController::class, 'products'])->name('products');
Route::get('/video', [HomeController::class, 'video'])->name('video');
Route::get('/pdf-download', [HomeController::class, 'pdfDownload'])->name('pdf_download');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [HomeController::class, 'singleBlog'])->name('single_blog');
Route::get('/installer/registration', [HomeController::class, 'registration'])->name('registration');
Route::get('/contact', [HomeController::class, 'contactUs'])->name('contactUs');
Route::post('/email-send', [HomeController::class, 'emailSend'])->name('email_Send');
Route::get('/ev-listing', [HomeController::class, 'evlisting'])->name('ev_listing');
Route::get('/ev-listing/details/{id}', [HomeController::class, 'evlisting_details']);
Route::get('/installer-report', [InstallerController::class, 'installerReport'])->name('installer_Report');
Route::post('/report-store', [InstallerController::class, 'reportStore'])->name('report_Store');
Route::get('/quote', [InstallerController::class, 'quote'])->name('quote');
Route::post('/quote-store', [InstallerController::class, 'quoteStore'])->name('quote_Store');
Route::get('/installer/test', [InstallerController::class, 'testForm'])->name('test_Form');
Route::post('/installer-registration', [InstallerController::class, 'registration'])->name('installer_registration');
Route::get('/user/registration', [UserController::class, 'userRegistration'])->name('user_Registration');
Route::post('/user/registration/store', [UserController::class, 'userRegistrationStore'])->name('user_Registration_Store');
Route::get('/login', [UserController::class, 'userLogin'])->name('user_Login');
Route::post('/sing-in', [UserController::class, 'login'])->name('user_Sing_In');
Route::post('/sing-out', [UserController::class, 'logout'])->name('user_logout');
Route::get('/user-details', [UserController::class, 'userDetails'])->name('user_Details');
Route::put('/user-details/update/{id}', [UserController::class, 'update'])->name('user_Details_Update');
Route::post('/user-details/change-password', [UserController::class, 'changePassword'])->name('user_change_Password');
Route::get('provide/exam/{code}', [InstallerController::class, 'exam_page']);



/**Admin Section*/

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


        Route::prefix('vehicle')->controller(VehicleManageController::class)->group(function () {
             Route::get('list', 'listing');
             Route::get('add', 'add');
             Route::post('add-action', 'add_action');
             Route::get('delete/{id}', 'delete');
             Route::get('edit/{id}', 'edit');
             Route::post('edit-action/{id}', 'edit_action');
             Route::get('delete/features/{id}', 'delete_features');
        });

        /**
         * Online test
        */

        Route::prefix('exam')->controller(TestManageController::class)
        ->group(function () {
                Route::get('list', 'list');
                Route::get('add', 'add');
                Route::post('add/action', 'store');
                Route::get('delete/{id}', 'delete');
                Route::get('edit/{id}', 'edit');
                Route::post('edit/action/{id}', 'update');
        });


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

        //Installers Registration 
        Route::get('/registration-installers', [InstallerController::class, 'show'])->name('admin.registration.installers');
        Route::post('/installer/approve', [InstallerController::class, 'approve'])->name('admin.registration.approve');
        Route::get('details/{id}', [InstallerController::class, 'details'])->name('userDetails');
        Route::get('installer/details/{id}', [InstallerController::class, 'installerDetails'])->name('installer_details');
        Route::get('quote/details/{id}', [AdminQuoteController::class, 'quote_details'])->name('quote_details');
        Route::get('send/exam/link/{email}', [InstallerController::class, 'send_link']);

        //Installers Registration 
        Route::get('/user', [AdminUserController::class, 'index'])->name('admin.user');
        Route::get('/user/add', [AdminUserController::class, 'add'])->name('user_add');
        Route::post('user/store', [AdminUserController::class, 'store'])->name('user_store');
        Route::get('/user/edit/{id}', [AdminUserController::class, 'edit'])->name('user_edit');
        Route::put('/user/update/{id}', [AdminUserController::class, 'update'])->name('user_update');
        Route::get('/user/delete/{id}', [AdminUserController::class, 'delete'])->name('user_delete');

        //PDF Routes 
        Route::get('/registration-quote', [AdminQuoteController::class, 'show'])->name('admin.quote');

        Route::get('export', [AdminQuoteController::class, 'export'])->name('export');
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
            Route::post('edit/profile', 'profile_edit');
            Route::post('change/password', 'change_password');
        });
        
        Route::controller(InstallerLocationManageController::class)->group(function () {
            Route::get('my-account', 'location')->name('my-account');
            Route::get('location', 'location')->name('location');
            Route::post('location-save/{type}', 'location_save')->name('location-save');
            Route::post('zip-save', 'zip_save')->name('zip-save');
            Route::post('bank-save/{type}', 'bank_save')->name('bank-save');
        });        
    });
});