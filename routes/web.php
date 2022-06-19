<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TryController;

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

Route::get('/admin/account', function () {
    return view('userpages/account');
})->name('accounts');



// Route::controller(LoginController::class)->group(function () {
//     Route::get('/login', 'loginPage')->name('login');
//     Route::post('/check-credential', 'login')->name('login.check');
//     Route::get('/dashboard', 'redirectUser')->name('dashboard');
//     Route::get('/logout', 'logOut')->name('logout');
// });

Route::middleware(['AuthCheck'])->group(function () {
   
});


Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'loginPage')->name('login');
    Route::post('/check-credential', 'login')->name('login.check');
    Route::get('/dashboard', 'redirectUser')->name('dashboard');
    Route::get('/logout', 'logOut')->name('logout');
});