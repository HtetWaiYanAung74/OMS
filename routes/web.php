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
    return view('/adminlogin');
  });
  Auth::routes();

  //Admin Login

Route::get('/adminlogin', [App\Http\Controllers\AdminController::class, 'index']);
Route::post('/adminlogin/checklogin', [App\Http\Controllers\AdminController::class, 'checklogin']);
Route::get('adminlogin/successlogin', [App\Http\Controllers\AdminController::class, 'successlogin'])->middleware('auth');
Route::get('/adminlogin/logout', [App\Http\Controllers\AdminController::class, 'logout']);

//Account view/Update
Route::get('/accountinfo/{id}', [App\Http\Controllers\AccountController::class, 'accountinfo'])->name('accountinfo');
// Route::get('/accountinfo/{id}', [App\Http\Controllers\AccountController::class, 'changepassword'])->name('changepassword');
Route::get('/accountinfo/update/{id}', [App\Http\Controllers\AccountController::class, 'edit']);
Route::post('/accountinfo/update/{id}', [App\Http\Controllers\AccountController::class, 'update']);
 

 