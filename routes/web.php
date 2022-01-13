<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\announcement\AnnouncementController;
use App\Models\Announcement;

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
    return view('layouts.master');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/announcement/list', [AnnouncementController::class, 'index']);

Route::get('/announcement/update/{id}', [AnnouncementController::class, 'edit']);
Route::post('/announcement/update/{id}', [AnnouncementController::class, 'update']);

Route::delete('/announcement/{id}', [AnnouncementController::class, 'delete'])->name('announcement.delete');