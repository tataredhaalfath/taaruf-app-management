<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoriesController;
use App\Http\Controllers\TaarufController;
use App\Http\Controllers\User\UserDashboardController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/taaruf', [TaarufController::class, 'index'])->name('taaruf');
Route::get('/stories', [StoriesController::class, 'index'])->name('stories');
Route::get('/taaruf/check', [CheckController::class, 'index'])->name('check');
Route::get('/taaruf/success', [CheckController::class, 'success'])->name('success');
Route::get('/taaruf/detail/{id?}', [DetailController::class, 'index'])->name('detail');

//user page (url => /user/ )
Route::prefix('user')
    ->namespace('User')
    ->middleware('auth', 'user')
    ->group(function () {
        Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user-dashboard');
    });
//admin page (url => /admin/)
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth', 'admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });

Auth::routes(['verify' => true]);
