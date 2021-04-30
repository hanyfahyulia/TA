<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('/ketinggian', [App\Http\Controllers\AirController::class, 'ultrasonik']);
// Route::get('/kelembapan', [App\Http\Controllers\KelembapanController::class, 'kelembapan']);
Route::get('/getaran', [App\Http\Controllers\MpuController::class, 'mpu']);
Route::get('/waterlevel', [App\Http\Controllers\WaterController::class, 'level']);
Route::get('/DataKelembapan', [App\Http\Controllers\KelembapanController::class, 'humidity']);
Route::get('/DataKetinggian', [App\Http\Controllers\AirController::class, 'tinggi']);
Route::get('/DataWaterLevel', [App\Http\Controllers\WaterController::class, 'banyu']);
Route::get('/DataPergeseranTanah', [App\Http\Controllers\MpuController::class, 'soil']);

Route::get('kelembapan', [App\Http\Controllers\KelembapanController::class, 'index']);
Route::get('kelembapan/{id}', [App\Http\Controllers\KelembapanController::class, 'show']);
Route::post('kelembapan', [App\Http\Controllers\KelembapanController::class, 'store']);
Route::put('kelembapan/{id}', [App\Http\Controllers\KelembapanController::class, 'update']);
Route::delete('kelembapan/{id}', [App\Http\Controllers\KelembapanController::class, 'delete']);

Route::get('ketinggian', [App\Http\Controllers\AirController::class, 'index']);
Route::get('ketinggian/{id}', [App\Http\Controllers\AirController::class, 'show']);
Route::post('ketinggian', [App\Http\Controllers\AirController::class, 'store']);
Route::put('ketinggian/{id}', [App\Http\Controllers\AirController::class, 'update']);
Route::delete('ketinggian/{id}', [App\Http\Controllers\AirController::class, 'delete']);

Route::get('keadaantanah', [App\Http\Controllers\MpuController::class, 'index']);
Route::get('keadaantanah/{id}', [App\Http\Controllers\MpuController::class, 'show']);
Route::post('keadaantanah', [App\Http\Controllers\MpuController::class, 'store']);
Route::put('keadaantanah/{id}', [App\Http\Controllers\MpuController::class, 'update']);
Route::delete('keadaantanah/{id}', [App\Http\Controllers\MpuController::class, 'delete']);

Route::get('levelair', [App\Http\Controllers\WaterController::class, 'index']);
Route::get('levelair/{id}', [App\Http\Controllers\WaterController::class, 'show']);
Route::post('levelair', [App\Http\Controllers\WaterController::class, 'store']);
Route::put('levelair/{id}', [App\Http\Controllers\WaterController::class, 'update']);
Route::delete('levelair/{id}', [App\Http\Controllers\WaterController::class, 'delete']);

Route::get('overviewkelembapan', [App\Http\Controllers\KelembapanController::class, 'overview_kelembapan']);
Route::get('overviewketinggian', [App\Http\Controllers\AirController::class, 'overview_ketinggian']);