<?php

use App\Http\Controllers\DataPenyewaController;
use App\Http\Controllers\LoginController;
use App\Models\DataPenyewa;
use Illuminate\Support\Facades\Route;

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
})->name('welcome');

Route::get('/home', function () {
    return view('dasbor');
})->name('dasbor')->middleware('auth');

// Rute-rute untuk pengguna yang belum login (guest)
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
    Route::get('/register', [LoginController::class, 'register'])->name('register');
});

// Rute-rute untuk pengguna yang sudah login (auth)
Route::middleware('auth')->group(function () {
    Route::get('/datapenyewa', [DataPenyewaController::class, 'index'])->name('datapenyewa');
    Route::get('/tambahpenyewa', [DataPenyewaController::class, 'tambahpenyewa'])->name('tambahpenyewa');
    Route::post('/insertdata', [DataPenyewaController::class, 'insertdata'])->name('insertdata');
    Route::get('/tampilkandata/{id}', [DataPenyewaController::class, 'tampilkandata'])->name('tampilkandata');
    Route::post('/updatedata/{id}', [DataPenyewaController::class, 'updatedata'])->name('updatedata');
    Route::get('/delete/{id}', [DataPenyewaController::class, 'delete'])->name('delete');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
// Route::get('/register', [LoginController::class, 'register'])->name('register');
// Route::get('/datapenyewa', [DataPenyewaController::class, 'index'])->name('datapenyewa')->middleware('auth');
// Route::get('/tambahpenyewa', [DataPenyewaController::class, 'tambahpenyewa'])->name('tambahpenyewa')->middleware('auth');
// Route::post('/insertdata', [DataPenyewaController::class, 'insertdata'])->name('insertdata');
// Route::get('/tampilkandata/{id}', [DataPenyewaController::class, 'tampilkandata'])->name('tampilkandata');
// Route::post('/updatedata/{id}', [DataPenyewaController::class, 'updatedata'])->name('updatedata');
// Route::get('/delete/{id}', [DataPenyewaController::class, 'delete'])->name('delete');
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

