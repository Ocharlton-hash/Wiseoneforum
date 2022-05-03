<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\Api\ThreadController;


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

Route::get('threads',[\App\Http\Controllers\Api\ThreadController::class, 'index']);
Route::get('thread/{id}',[\App\Http\Controllers\Api\ThreadController::class, 'show']);
Route::post('thread',[\App\Http\Controllers\Api\ThreadController::class, 'store']);
Route::put('thread/{id}',[\App\Http\Controllers\Api\ThreadController::class, 'update']);
Route::delete('thread/{id}',[\App\Http\Controllers\Api\ThreadController::class, 'destroy']);