<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DinasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PeternakController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


Route::middleware(['role:1'])->group(function () {
    Route::get('/dinas/dashboard', [DinasController::class, 'index'])->name('dinas.dashboard');
    Route::get('/dinas/buatakun', [DinasController::class, 'buatakun'])->name('dinas.buatakun');
});

Route::middleware(['role:2'])->group(function () {
    Route::get('/dokter/dashboard', [DokterController::class, 'index'])->name('dokter.dashboard');
});

Route::middleware(['role:3'])->group(function () {
    Route::get('/peternak/dashboard', [PeternakController::class, 'index'])->name('peternak.dashboard');
    Route::get('/peternak/profil', [PeternakController::class, 'profil'])->name('peternak.profil');
    Route::post('/peternak/profil/save', [PeternakController::class, 'saveprofil'])->name('peternak.profil.save');
});
