<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AddPostController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\AnalyticsController;
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
    return view('auth.login');
});

Route::get('/home', [HomeController::class, 'index'])->name('Home')->middleware('auth');
Route::get('/post', [PostController::class, 'index'])->name('Post')->middleware('auth');
Route::get('/addpost', [AddPostController::class, 'index'])->name('addpost')->middleware('auth');;
Route::get('/settings', [SettingsController::class, 'index'])->name('addpost')->middleware('auth');
Route::get('/timeline', [TimelineController::class, 'index'])->name('timeline')->middleware('auth');
Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics')->middleware('auth');
