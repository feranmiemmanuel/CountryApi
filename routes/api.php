<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\AuthController;
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
//Protected Routes
Route::group(['middleware'=>['auth:sanctum']], function() {
    Route::post('/country', [CountryController::class, 'store']);
    Route::get('/country/{id}', [CountryController::class, 'show']);
    Route::put('/country/{id}', [CountryController::class, 'update']);
    Route::delete('/country/{id}', [CountryController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
//
//Route::get('country/{$id}', [CountryController::class, 'CountryByID']);
//Public Routes
//Route::resource('country', CountryController::class);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('country', [CountryController::class, 'index']);
Route::get('/country{$id}', [CountryController::class, 'show']);
Route::get('/country/search/{name}', [CountryController::class, 'search']);

