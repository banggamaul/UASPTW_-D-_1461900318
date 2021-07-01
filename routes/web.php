<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;


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
//     return view('welcome');
// });

Route::get('/',[HomepageController::class, 'index']);
Route::get('/login',[AuthController::class, 'login']);
Route::get('/daftar',[AuthController::class, 'daftar']);
Route::get('/kontak',[HomepageController::class, 'kontak']);
Route::get('/pria',[HomepageController::class, 'pria']);
Route::get('/wanita',[HomepageController::class, 'wanita']);
Route::get('/anak',[HomepageController::class, 'anak']);
Route::get('/kategotri',[HomepageController::class, 'kategori']);
Route::get('/kategori/{slug}',[HomepageController::class, 'produkkategori']);
Route::get('/produk',[HomepageController::class, 'produk']);
Route::get('/produk/{slug}',[HomepageController::class, 'produkdetail']);
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('home', [HomepageController::class, 'index'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
 
});

Route::prefix('admin')->group(function () {
    Route::get('/',[DashboardController::class, 'index']);
    // route kategori
    Route::resource('/kategori', KategoriController::class);
    // route produk
    Route::resource('/produk', ProdukController::class);
    // route customer
    Route::resource('/customer', CustomerController::class);
    // route transaksi
    Route::resource('/transaksi', TransaksiController::class);
    // profil
    Route::get('/profil', [UserController::class, 'index']);
    // setting profil
    Route::get('/setting',[UserController::class, 'setting']);
    // form laporan
    Route::get('/laporan', [LaporanController::class, 'index']);
    // proses laporan
    Route::get('/proseslaporan', [LaporanController::class, 'proses']);
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
