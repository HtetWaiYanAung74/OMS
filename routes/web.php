<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Leaves\LeaveController;
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

// Route::get('/', function () {
//     return view('/index');
//   });

  //Auth::routes();
Route::get('/', [App\Http\Controllers\AdminController::class, 'index']);
Route::post('/adminlogin/checklogin', [App\Http\Controllers\AdminController::class, 'checklogin']);




Route::get('/leaveRequestForm',[LeaveController::class,'show']);
Route::post('/leaveRequestForm',[LeaveController::class,'save']);


Route::get('/leaveRecord',[LeaveController::class,'list']);
Route::post('/leaveRecord/searchLeave',[LeaveController::class,'searchLeave']);
Route::get('/leaveRecord/edit/{date}',[LeaveController::class,'editLeave']);
Route::post('/leaveRecord/edit',[LeaveController::class,'editLeavePost']);
Route::get('/leaveRecord/delete/{id}',[LeaveController::class,'destroy']);



Route::get('adminlogin/successlogin', [App\Http\Controllers\AdminController::class, 'successlogin'])->middleware('auth');
Route::get('/adminlogin/logout', [App\Http\Controllers\AdminController::class, 'logout']);






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
