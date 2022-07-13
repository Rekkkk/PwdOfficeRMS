<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AccountManagementController;
use App\Http\Controllers\PwdManagementController;
use App\Http\Controllers\AppointmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landingpage/landingpages/home');
})->name('home');   


// Route::name('appointment')->group(function () {
//     Route::get('/new-application', function () {
//         return view('landingpage/landingpages/appointments/new-applicant');
//     })->name('appointment.new-applicant');

// });




Route::prefix('appointment')->group(function () {
    Route::get('/new-application', function () {
        return view('landingpage/landingpages/appointments/new-applicant');
    })->name('appointment.new-applicant');
    Route::get('/renewal', function () {
        return view('landingpage/landingpages/appointments/renewal');
    })->name('appointment.renewal');
        
});


Route::controller(AppointmentController::class)->group(function () {
    Route::post('/new-application', 'newApplicantCreate')->name('new-applicant.create');
    // Route::get('/appointment', 'appointmentPage')->name('appointment.page');

});


Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'loginPage')->name('login')->middleware('AuthCheck');
    Route::post('/check-credential', 'login')->name('login.check');
    Route::get('/logout', 'logOut')->name('logout');
});

Route::group(['prefix' => 'authenticate',  'middleware' => 'AuthCheck'], function()
{

    Route::get('/dashboard', [AuthController::class, 'redirectUser'])->name('dashboard');

    // Route::controller(AppointmentController::class)->group(function () {
    //     Route::post('/new-application', 'newApplicantCreate')->name('new-applicant.create');
    //     Route::get('/appointment', 'appointmentPage')->name('appointment.page');
    
    // });

    Route::group(['middleware' => 'IsSuperAdmin'], function () {
        Route::controller(AccountManagementController::class)->group(function () {
            Route::get('/account-management', 'accountManagementPage')->name('account.management');
            Route::get('/account-management/create-account', 'createNewAccountPage')->name('create.account');
            Route::post('/create', 'createNewAccount')->name('create');
            Route::get('/account-management/account{id}', 'viewAccount')->name('view.account');
            Route::get('/disable{id}', 'disableAccount')->name('disable.account');
            Route::post('/suspend{id}', 'suspendAccount')->name('suspend.account');
        });
    });

    
    Route::controller(PwdManagementController::class)->group(function () {
        Route::get('/pwd-management', 'pwdManagementPage')->name('pwd.management');
    });

    
});



