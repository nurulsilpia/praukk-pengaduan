<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminPengaduanController;
use App\Http\Controllers\AdminDataPetugasController;
use App\Http\Controllers\PetugasPengaduanController;
use App\Http\Controllers\MasyarakatPengaduanController;

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
    return view('index');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('/pengaduan', MasyarakatPengaduanController::class);

Route::resource('/petugas', PetugasPengaduanController::class)->middleware('petugas', 'admin');
Route::get('/petugas-dashboard', function () {
    return view('petugas.dashboard');
})->middleware('petugas');



Route::middleware('admin')->group(function () {
    Route::resource('/admin', AdminPengaduanController::class);
    // Route::resource('/admin/daftar-petugas', AdminDataPetugasController::class);

    Route::get('/admin/cetak/{id}', [AdminPengaduanController::class, 'cetak']);
});