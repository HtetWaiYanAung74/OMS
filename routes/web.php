<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\UserController;

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

Route::get('/index', function () {
    return view('layouts.master');
});

// Route::get('/index/add', function () {
//     return view('employee.add');
// });

Route:: get('/index/add',  [EmployeeController::class, 'create' ]);
Route:: post('/index/add',  [EmployeeController::class, 'store' ]); 


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/index/usertable', function () {
//     return view('welcome');
// });

Route::get('/index/usertable',[UserController::class,'show']);
Route::delete('/index/usertable/delete/{id}',[UserController::class,'destroy'])->name('users.delete');

Route::get('/index/update',[UserController::class,'show']);
Route::delete('/index/update/delete/{id}',[UserController::class,'destroy'])->name('users.delete');

// Route::get('/index', [ArticleController::class, 'master']);
