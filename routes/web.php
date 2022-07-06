<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RsApotekController;
use Illuminate\Support\Facades\Artisan;


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

// Create Storage Link For CPanel
// after upload to Cpanel Remember to RUN This route before you launch the web
Route::get('/foo', function () {
    Artisan::call('storage:link');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    return redirect()->route('dashboard');
});


//auth routes
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/authenticate', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);



//middleware auth
Route::middleware(['auth'])->group(function () {

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
    Route::get('/rsapotek/data-table', [RsApotekController::class, 'DataTable'])->name('rsapotek_dataTable');
    Route::get('/rsapotek/tambah', [RsApotekController::class, 'create'])->name('rsapotek_create');
    Route::get('/rsapotek/edit/{id}', [RsApotekController::class, 'edit'])->name('rsapotek_edit');
    Route::get('/rsapotek/show/{id}', [RsApotekController::class, 'show'])->name('rsapotek_show');
    Route::post('/rsapotek/update', [RsApotekController::class, 'update'])->name('rsapotek_update');
    Route::post('/rsapotek', [RsApotekController::class, 'store'])->name('rsapotek_store');
    Route::delete('/rsapotek', [RsApotekController::class, 'destroy'])->name('rsapotek_destroy');

    Route::get('/rsapotek/foto/{id}', [RsApotekController::class, 'foto'])->name('rsapotek_foto');
    Route::post('/rsapotek/data-table-foto', [RsApotekController::class, 'DataTableFoto'])->name('rsapotek_dataTableFoto');
    Route::post('/rsapotek/storePhoto', [RsApotekController::class, 'storePhoto'])->name('rsapotek_storePhoto');
    Route::delete('/rsapotek/destroyPhtoto', [RsApotekController::class, 'destroyPhtoto'])->name('rsapotek_destroyPhtoto');

    Route::get('/rsapotek/fasilitas/{id}', [RsApotekController::class, 'fasilitas'])->name('rsapotek_fasilitas');
    Route::post('/rsapotek/storeFasilitas', [RsApotekController::class, 'storeFasilitas'])->name('rsapotek_storeFasilitas');
    
});

// menampilkan semua data rs di android
Route::get('/api', [ApiController::class, 'index'])->name('api_data');

// menampilkan semua data rs di android berdasarkan kategori
Route::get('/api/{id}', [ApiController::class, 'category'])->name('api_data_category');

// teknik menampilkan gambar melalui api
Route::get('/api/img/{id}', [ApiController::class, 'img'])->name('api_img');

// menampilkan semua data gambar rs di android
Route::get('/api/imagesCarousel/{id}', [ApiController::class, 'imgCarousel'])->name('api_img_carousel');

// menampilkan semua data fasilitas untuk tiap tiap rs di android
Route::get('/api/fasilitasList/{id}', [ApiController::class, 'fasilitasList'])->name('api_fasilitasList');