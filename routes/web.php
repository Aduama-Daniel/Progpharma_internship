<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AmenitiesController;
use App\Http\Controllers\HotelimagesController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NamesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleController;
use Illuminate\Auth\Middleware\Usermiddleware;



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
    return view('auth/login');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('dashbo', [DashboardController::class, 'dashboard'])->name('home');
Route::get('chart', [DashboardController::class, 'chart'])->name('home');
Route::get('list', [DashboardController::class, 'char'])->name('home');
Route::get('customers', [DashboardController::class, 'cus'])->name('home');
Route::get('hotels', [DashboardController::class, 'hotels'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("searchhotel/{id?}", [HotelController::class,'search']);

Auth::routes();
Route::group(['middleware'=>['auth','isUser']], function(){
Route::get('dashboard', [DashboardController::class, 'dashh']);

});
Route::get('bookings', [DashboardController::class, 'bookings']);
Route::get('admins', [DashboardController::class, 'admins']);
Route::get('try', [DashboardController::class, 'try']);
Route::get('adminlogin', [DashboardController::class, 'adminlogin']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
