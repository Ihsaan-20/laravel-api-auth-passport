<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;

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



Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/store', [UserController::class, 'store'])->name('store');

Route::middleware('auth:api')->group(function () {
    Route::get('/show', [UserController::class, 'show'])->name('show');
    Route::post('/logout', [UserController::class, 'destroy'])->name('destroy');
});