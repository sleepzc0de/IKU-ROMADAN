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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [FrontendController::class, 'grafik'])->name('grafik.iku');

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
