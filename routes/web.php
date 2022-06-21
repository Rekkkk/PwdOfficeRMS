<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AccountManagementController;

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

Route::group(['middleware' => 'AuthCheck'], function () {

    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'loginPage')->name('login');
        Route::post('/check-credential', 'login')->name('login.check');
        Route::get('/dashboard', 'redirectUser')->name('dashboard');
        Route::get('/logout', 'logOut')->name('logout');
    });

    Route::group(['middleware' => 'IsSuperAdmin'], function () {
        Route::controller(AccountManagementController::class)->group(function () {
            Route::get('/account-management', 'accountManagementPage')->name('account.management');
            Route::get('/create-account', 'createNewAccountPage')->name('create.account');
            Route::post('/create', 'createNewAccount')->name('create');
        });
    });
    
});



