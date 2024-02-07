<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\RegistrasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// resepsionis
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
// end resepsionis

// admin
Route::middleware('guest')->group(function() {
    Route::get('/admin/registrasi', [RegistrasiController::class, 'index'])->name('registrasi.index');
    Route::post('/admin/registrasi', [RegistrasiController::class, 'store'])->name('registrasi.store');
    
    Route::get('/admin/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/admin/login', [LoginController::class, 'authenticate'])->name('login.auth');
});

Route::post('/admin/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin', [HomeController::class, 'admin'])->name('admin.home');

Route::middleware('auth')->group(function() {
    // poli
    Route::get('/admin/poli', [PoliController::class, 'index'])->name('admin.indexpoli'); 
});
// end admin
