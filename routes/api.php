<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/** Hospitals */
Route::get('/hospitals', 'App\Http\Controllers\HospitalController@getHospitals');

/** Checkins */
Route::get('/checkins', 'App\Http\Controllers\CheckinController@getCheckins');
Route::get('/checkins/count', 'App\Http\Controllers\CheckinController@getCount');
