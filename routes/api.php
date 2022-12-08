<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AmenitiesController;
use App\Http\Controllers\HotelimagesController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NamesController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("search/{id?}", [CustomerController::class,'search']);

Route::get("searchhotel/{id?}", [HotelController::class,'search']);
Route::get("searchhotel/{id?}/service", [ServicesController::class,'search']);
Route::post("addservice", [ServicesController::class,'add']);
Route::post("addAmenity", [AmenitiesController::class,'add']);
Route::get("searchhotel/{id?}/images", [HotelimagesController::class,'images']);
Route::get("searchhotel/{id?}/service/info", [ServicesController::class,'info']);
Route::post("updateinfo", [HotelController::class,'updateinfo']);
Route::post("updatedescription", [HotelController::class,'updatedescription']);
Route::get("searchhotel/{id?}/reviews", [HotelController::class,'review']);
Route::get("searchhotel/{id?}/info", [HotelController::class,'info']);
Route::get("searchhotel/{id?}/amenities", [AmenitiesController::class,'amenities']);
Route::post("signup",[CustomerController::class, 'add']);
Route::post("addhotel",[HotelController::class, 'add']);
Route::put("update",[CustomerController::class, 'update']);
Route::post("save",[CustomerController::class,'adds']);
Route::post("login",[CustomerController::class,'index']);
Route::delete("delete/{id}",[CustomerController::class,'delete']);
Route::post('Mail', [MailController::class, 'sendMail']);
