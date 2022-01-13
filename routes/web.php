<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;


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

//Attendance Add
Route::get('/attendance/attendanceForm',[AttendanceController::class,'create']);
Route::post('/attendance/attendanceForm',[
    AttendanceController::class, 'store']);

  //  Auth::routes();
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    // Route::get('/admin_home',[App\Http\Controllers\AnnouncementController::class, 'index'])->name('admin_home');
    // Route::get('/user_home',[App\Http\Controllers\UserHomeController::class, 'index'])->name('user_home');
    
    
    
    
    //Admin Login
    
    Route::get('/adminlogin', [App\Http\Controllers\AdminController::class, 'index']);
    Route::post('/adminlogin/checklogin', [App\Http\Controllers\AdminController::class, 'checklogin']);
    Route::get('adminlogin/successlogin', [App\Http\Controllers\AdminController::class, 'successlogin'])->middleware('auth');
    Route::get('/adminlogin/logout', [App\Http\Controllers\AdminController::class, 'logout']);
