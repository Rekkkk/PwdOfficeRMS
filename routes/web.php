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


Route::get('/page/login', function () {
    return view('landingpage/landingpages/login');
})->name('login.page')->Middleware('AuthCheck');   


Route::post('/login', [LoginController::class, 'login'])->name('login');


Route::get('/userpages/dashboard', [LoginController::class, 'redirectUser'])->middleware('AuthCheck');


Route::get('/logout', [LoginController::class, 'logOut'])->name('logout');


    


