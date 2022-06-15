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
Route::get('/test', function () {
    return view('loginuser/sidebar');
})->name('test');

Route::get('/loginpage', [LoginController::class, 'loginPage'])->name('login.page');
Route::post('/login', [LoginController::class, 'login'])->name('login');
