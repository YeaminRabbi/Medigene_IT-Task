<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
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
Route::get('/content', [ApiController::class, 'getContent'])->name('content');


Route::get('/test', [ApiController::class, 'test'])->name('test');
Route::get('/cc', [ApiController::class, 'cc'])->name('cc');


Route::get('/course-list', [ApiController::class, 'course_list'])->name('course_list');
Route::get('/schedule-list', [ApiController::class, 'schedule_list'])->name('schedule_list');
Route::get('/exam-list', [ApiController::class, 'exam_list'])->name('exam_list');
