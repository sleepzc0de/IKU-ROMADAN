<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
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
Route::resource('_superadmin_', AdminController::class);

// Route::group(['prefix' => 'backend', 'middleware' => ['auth']], function () {
//     // USERS
//     Route::resource('users', UserController::class);

//     // BERITA
//     Route::resource('berita', BeritaController::class);
//     Route::get('/berita-sampah', [BeritaController::class, 'beritaSampah'])->name('berita.sampah');
//     Route::post('/{beritum}/restore', [BeritaController::class, 'restore'])->name('berita.restore');
//     Route::delete('/{beritum}/force-delete', [BeritaController::class, 'forceDelete'])->name('berita.force-delete');
//     Route::post('/restore-all', [BeritaController::class, 'restoreAll'])->name('berita.restore-all');
// });
