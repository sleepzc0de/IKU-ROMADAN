<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MultiKomponenController;
use App\Http\Controllers\SatuKomponenController;
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


// FRONTENDS
Route::get('/testframe', [FrontendController::class, 'testframe'])->name('frametest');
Route::get('/', [FrontendController::class, 'grafik'])->name('grafik.iku');
Route::get('/kinerja-q1', [FrontendController::class, 'kinerja_Q1'])->name('kinerja_iku_q1');
Route::get('/kinerja-q2', [FrontendController::class, 'kinerja_Q2'])->name('kinerja_iku_q2');
Route::get('/kinerja-q3', [FrontendController::class, 'kinerja_Q3'])->name('kinerja_iku_q3');
Route::get('/kinerja-q4', [FrontendController::class, 'kinerja_Q4'])->name('kinerja_iku_q4');



// BACKEND

// Route::group(
//     ['prefix' => '_superadmin_', 'middleware' => ['auth']],
//     function () {
//     }
// );

Route::group(['prefix' => '_superadmin_', 'middleware' => ['auth']], function () {

    Route::resource('home-admin', AdminController::class)->middleware('auth');
    Route::resource('satu_komponen', SatuKomponenController::class)->middleware('auth');
    Route::resource('multi_komponen', MultiKomponenController::class)->middleware('auth');
    Route::get('/create-satu-komponen-admin-iku', [AdminController::class, 'satu_komponen_iku_admin'])->middleware('auth')->name('satu_komponen_iku_admin');
    Route::get('/create-multi-komponen-admin-iku', [AdminController::class, 'multi_komponen_iku_admin'])->middleware('auth')->name('multi_komponen_iku_admin');
    Route::get('/create-multi-komponen-admin-detail/{id}', [AdminController::class, 'multi_komponen_detail_admin'])->middleware('auth')->name('multi_komponen_detail_admin');
    Route::post('/create-multi-komponen-admin-detail', [AdminController::class, 'store_komponen_detail'])->middleware('auth')->name('multi_komponen_detail_admin_add');
});



// Auth::routes();
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
