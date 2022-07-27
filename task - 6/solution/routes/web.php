<?php

use App\Http\Controllers\MadrasaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::post('import', [MadrasaController::class, 'import'])->name('madrasaUpload');

Route::get('export/', [MadrasaController::class, 'export'])->name('madrasaExport');