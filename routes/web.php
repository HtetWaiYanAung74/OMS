<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/admin/usertable', function () {
    return view('welcome');
});

Route::get('usertable',[UserController::class,'show']);
Route::delete('/usertable/delete/{id}',[UserController::class,'destroy'])->name('users.delete');

/* Route::get('/users/updateuser/{id}',[ArticleController::class,'update'])->name(users.update);
Route::post('/users/updateuser/{id}',[ArticleController::class,'edit']); */