<?php

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
    return view('welcome');
});
// Route::get('/banjir', function () {
//     return view('banjir');
// });
// Route::get('/tanahlongsor', function () {
//     return view('tanahlongsor');    
// });
// Route::get('/profile', function () {
//     return view('profile');    
// });
Route::get('/login', function () {
    return view('login');    
})->name('login');
Auth::routes();
Route::get('/login2', function () {
    return view('login2');    
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/banjir', [App\Http\Controllers\BanjirController::class, 'index'])->name('banjir');
Route::get('/tanahlongsor', [App\Http\Controllers\TanahlongsorController::class, 'index'])->name('tanahlongsor');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

Route::post('loginData',[App\Http\Controllers\Auth\LoginController::class,'login'])->name('loginData');
Route::get('logout',[App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');

