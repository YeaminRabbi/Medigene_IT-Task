<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('/schedule', [ApiController::class, 'getSchedule'])->name('schedule');
Route::get('/video', [ApiController::class, 'getVideo'])->name('video');
Route::get('/paragraph', [ApiController::class, 'getParagraph'])->name('paragraph');
Route::get('/exam', [ApiController::class, 'getExam'])->name('exam');