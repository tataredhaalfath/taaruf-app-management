<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoriesController;
use App\Http\Controllers\TaarufController;
use App\Http\Controllers\User\ApproveController;
use App\Http\Controllers\User\CvController;
use App\Http\Controllers\User\IncomingController;
use App\Http\Controllers\User\RejectController;
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
Route::get('/stories', [StoriesController::class, 'index'])->name('stories');

// harus login dulu 
Route::middleware('auth')
    ->group(function () {
        Route::get('/taaruf', [TaarufController::class, 'index'])->name('taaruf');

        //user sudah verify email
        Route::middleware(['verified', 'user'])
            ->group(function () {
                Route::get('/taaruf/detail', [DetailController::class, 'index'])->name('detail');
                Route::get('/taaruf/check', [CheckController::class, 'index'])->name('check');
                Route::get('/taaruf/success', [CheckController::class, 'success'])->name('success');
            });
    });


//user page (url => /user/ )
Route::prefix('user')
    ->namespace('User')
    ->middleware(['auth', 'user'])
    ->group(function () {
        //dashboard user
        Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user-dashboard');

        //menu cv
        Route::get('/cv', [CvController::class, 'index'])->name('user-cv');
        Route::POST('/cv', [CvController::class, 'storecv'])->name('user-storecv');
        Route::get('/cv/create', [CvController::class, 'create'])->name('user-create-cv');
        Route::POST('/cv/profile', [CvController::class, 'profile'])->name('user-store-profile');
        Route::POST('/cv/gambar-fisik', [CvController::class, 'gambar_fisik'])->name('user-store-gambar-fisik');
        Route::POST('/cv/hobi', [CvController::class, 'hobi'])->name('user-store-hobi');
        Route::POST('/cv/pendidikan', [CvController::class, 'pendidikan'])->name('user-store-pendidikan');
        Route::POST('/cv/gambar-diri', [CvController::class, 'gambar_diri'])->name('user-store-gambar-diri');
        Route::POST('/cv/kriteria', [CvController::class, 'kriteria'])->name('user-store-kriteria');
        Route::POST('/cv/harapan', [CvController::class, 'harapan'])->name('user-store-harapan');
        //menu cv edit
        Route::get('/cv/edit', [CvController::class, 'edit'])->name('user-cv-edit');
        Route::PUT('/cv/profile/', [CvController::class, 'profile_update'])->name('user-update-profile');
        Route::PUT('/cv/gambar-fisik', [CvController::class, 'gambar_fisik_update'])->name('user-update-gambar-fisik');
        Route::PUT('/cv/hobi', [CvController::class, 'hobi_update'])->name('user-update-hobi');
        Route::PUT('/cv/pendidikan', [CvController::class, 'pendidikan_update'])->name('user-update-pendidikan');
        Route::PUT('/cv/gambar-diri', [CvController::class, 'gambar_diri_update'])->name('user-update-gambar-diri');
        Route::PUT('/cv/kriteria', [CvController::class, 'kriteria_update'])->name('user-update-kriteria');
        Route::PUT('/cv/harapan', [CvController::class, 'harapan_update'])->name('user-update-harapan');
        //menu cv - question
        Route::GET('/cv/question', [CvController::class, 'question_edit'])->name('user-question-edit');
        Route::PUT('/cv/question', [CvController::class, 'question_update'])->name('user-question-update');
        Route::POST('/cv/question', [CvController::class, 'question'])->name('user-question');
        //pengajuan cv untuk di review
        Route::POST('/cv/pengajuan', [CvController::class, 'pengajuan_cv'])->name('user-cv-pengajuan');


        //menu incoming
        Route::get('/incoming', [IncomingController::class, 'index'])->name('user-incoming');
        Route::get('/incoming/{id}/detail', [IncomingController::class, 'detail'])->name('user-incoming-detail');
        //menu approve
        Route::get('/approve', [ApproveController::class, 'index'])->name('user-approve');

        //menu reject
        Route::get('/reject', [RejectController::class, 'index'])->name('user-reject');
    });


//admin page (url => /admin/)
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });

Auth::routes(['verify' => true]);
