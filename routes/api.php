<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CourseController;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\ManajemenMateriController;
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

// ---------------BISA DENGAN MENGGUNAKAN INI DI GROUP------------------------
Route::apiResource('course', CourseController::class);

Route::apiResource('auth', LoginController::class);

Route::get('search/{judul}',[ManajemenMateriController::class,'searchMateri']);