<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;
use App\Http\Controllers\API\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//customr
Route::get('/getcustomer',[customerController::class ,'getcustomer']);
Route::get('/getcustomerid/{Id}',[customerController::class ,'getcustomerid']);
Route::post('/addcustomer',[customerController::class ,'addcustomer']);
Route::put('/updatecustomer/{Id}',[customerController::class ,'updatecustomer']);
Route::delete('/deletecustomer/{Id}',[customerController::class ,'deletecustomer']);

//JWT
Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});
