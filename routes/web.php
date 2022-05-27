<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

// Route::match(['get', 'post'], '/', [ContactController::class,'index']);
Route::group(['prefix' => '/'], function () {
    Route::get('/', [ContactController::class,'index']);
    Route::match(['get', 'post'], 'create', [ContactController::class,'create']);
    Route::match(['get', 'post'], 'show/{id}', [ContactController::class,'show']);
    Route::get('delete/{id}', [ContactController::class,'destroy']);
});
