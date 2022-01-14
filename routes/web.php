<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee\AddController;

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

Route::get('/index/add', function () {
    return view('employee.add');
});

// Route:: get('/index/add',  [AddController::class, 'create' ]);
// Route:: post('/articles/add',  [ArticleController::class, 'store' ]);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/index', [ArticleController::class, 'master']);
