<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RsApotekController;


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

// Route::get('/dashboard', function () {
//     return view('layout.dashboard');
// });

// Route::get('/list_data', function () {
//     return view('layout.list_data');
// });

// Route::get('/login', function () {
//     return view('pengguna.login');
// });

// Route::get('/data', function () {
//     return view('data.rs_apotek');
// });

// Route::get('/template', function () {
//     return view('layout.v_template');
// });

// Route::get('/percobaan', function () {
//     return view('layout.percobaan');
// });

// Route::get('/fasilitas', function () {
//     return view('fasilitas.m_fasilitas');
// });

// Route::get('/fasilitas/tambah', function () {
//     return view('fasilitas.create');
// });

// Route::get('/fasilitas/edit', function () {
//     return view('fasilitas.edit');
// });

// Route::get('/kategori', function () {
//     return view('kategori.m_kategori');
// });

// Route::get('/kategori/tambah', function () {
//     return view('kategori.create');
// });

// Route::get('/kategori/edit', function () {
//     return view('kategori.edit');
// });

// Route::get('/data/tambah', function () {
//     return view('data.create');
// });

// Route::get('/data/edit', function () {
//     return view('data.edit');
// });

// Route::get('/data/detail', function () {
//     return view('data.detail');
// });

// untuk login
Route::get('/login', [AuthController::class, 'index'])->name('login');

// dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


// fasilitas
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');
Route::get('/fasilitas/data-table', [FasilitasController::class, 'DataTable'])->name('fasilitas_dataTable');
Route::get('/fasilitas/tambah', [FasilitasController::class, 'create'])->name('fasilitas_create');
Route::get('/fasilitas/edit/{id}', [FasilitasController::class, 'edit'])->name('fasilitas_edit');
Route::post('/fasilitas/update', [FasilitasController::class, 'update'])->name('fasilitas_update');
Route::post('/fasilitas', [FasilitasController::class, 'store'])->name('fasilitas_store');
Route::delete('/fasilitas', [FasilitasController::class, 'destroy'])->name('fasilitas_destroy');


// kategori
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/kategori/data-table', [KategoriController::class, 'DataTable'])->name('kategori_dataTable');
Route::get('/kategori/tambah', [KategoriController::class, 'create'])->name('kategori_create');
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori_edit');
Route::post('/kategori/update', [KategoriController::class, 'update'])->name('kategori_update');
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori_store');
Route::delete('/kategori', [KategoriController::class, 'destroy'])->name('kategori_destroy');

// rs Apotek
Route::get('/rsapotek', [RsApotekController::class, 'index'])->name('rsapotek');
Route::get('/rsapotek/tambah', [RsApotekController::class, 'create'])->name('rsapotek_create');
Route::get('/rsapotek/detail/{id}', [RsApotekController::class, 'show'])->name('rsapotek_detail');
Route::get('/rsapotek/edit/{id}', [RsApotekController::class, 'edit'])->name('rsapotek_edit');







