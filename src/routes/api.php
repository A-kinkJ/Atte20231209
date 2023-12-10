<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AttendancesController;
use App\Http\Controllers\RestsController;

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
Route::prefix('users')->group(function () {
    Route::get('/', [UsersController::class, 'index']);
    Route::get('/{id}', [UsersController::class, 'show']);
    Route::post('/', [UsersController::class, 'store']);
});
Route::prefix('attendances')->group(function () {
    Route::get('/', [AttendancesController::class, 'index']);
    Route::get('/{date}', [AttendancesController::class, 'show']);
    Route::post('/', [AttendancesController::class, 'store']);
});
Route::prefix('rests')->group(function () {
    Route::get('/', [RestsController::class, 'index']);
    Route::get('/{id}', [RestsController::class, 'show']);
    Route::post('/', [RestsController::class, 'store']);
});
