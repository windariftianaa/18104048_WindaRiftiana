<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Mahasiswa;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('mahasiswa',[MahasiswaController::class,'index']);
Route::post('mahasiswa',[MahasiswaController::class,'create']);
Route::delete('/mahasiswa/{id}',[MahasiswaController::class,'delete']);
Route::patch('/mahasiswa/{id}',[MahasiswaController::class,'create']);
