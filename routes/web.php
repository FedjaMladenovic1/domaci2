<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StranicaController;
use App\Http\Controllers\StadionController;
use App\Http\Controllers\UtakmicaController;
use App\Http\Controllers\UlaznicaController;
use App\Http\Controllers\UserAuth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', [StranicaController::class, 'stadioni']);
Route::get('/stadioni', [StranicaController::class, 'stadioni']);
Route::get('/utakmice', [StranicaController::class, 'utakmice']);

Route::get('/stadion/{stadion}', [StadionController::class, 'show']);
Route::get('/utakmica/{utakmica}', [UtakmicaController::class, 'show']);

Route::post("user",[UserAuth::class, 'userLogin']); 
Route::view("/", 'login');

Route::prefix('api')->group(function () {
    Route::get('/stadioni/get', [StadionController::class, 'get']);

    Route::delete('/utakmice/destroy/{utakmica_id}', [UtakmicaController::class, 'destroy']);
    Route::get('/utakmice/get', [UtakmicaController::class, 'get']);

    Route::post('/ulaznice/store', [UlaznicaController::class, 'store']);
});