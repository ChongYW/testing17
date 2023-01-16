<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//CYW(S)
Route::get('/page-login', function () {
    return view('page-login');
});

Route::get('/dashboard-dark', [App\Http\Controllers\RefreshBitController::class, 'refreshBit']);

Route::get('/refreshBit', [App\Http\Controllers\RefreshBitController::class, 'refreshBit']);

Route::get('/page-register', function () {
    return view('page-register');
});

//Route::get('/dashboard-dark', function () {
//    return view('dashboard-dark');
//});

Route::get('/testing', function () {
    return view('testing');
});

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/page-login');
})->name('logout');

//Route::get('/page-trade', function () {
//    return view('trade');
//});

Route::get('/page-trade', [App\Http\Controllers\GetShareHolderController::class, 'getShareHolder']);

Route::put('/trading', [App\Http\Controllers\TradeController::class, 'trading']);

//CYW(S)
