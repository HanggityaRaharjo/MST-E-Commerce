<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BarangController;
use App\Http\Controllers\Admin\PesananController;

use App\Models\Barang;



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

// Route::get('/journals', [JournalController::class, 'index']);

Route::get('/',[HomeController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/pesan/{id}', [PesanController::class, 'index']);
// Kategori
// Route::get('/kategoris', [DashboardController::class, 'kategoris']); 
Route::get('kategoris/{kategori:slug}', [DashboardController::class, 'kategoris']); 


Route::post('/pesan/{id}', [PesanController::class, 'pesan']);

Route::get('/check-out', [PesanController::class, 'check_out']);

Route::delete('/check-out/{id}', [PesanController::class, 'delete']);

Route::get('/konfirmasi-check-out', [PesanController::class, 'konfirmasi']);

Route::get('/profile', [ProfileController::class, 'index']);

Route::post('/profile', [ProfileController::class, 'update']);

Route::get('/history', [HistoryController::class, 'index']);

Route::get('/history/{id}', [HistoryController::class, 'detail']);

// Admin View
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/edit/{id}', [AdminController::class, 'edit']);
Route::get('/admin/create', [AdminController::class, 'createuser']);
Route::get('/barang/create', [AdminController::class, 'createproduct']);
Route::get('/barang/edit/{id}', [BarangController::class, 'edit']);


// Controller Menu Admin User
Route::get('/admin/alluser', [UserController::class, 'show']);
Route::delete('{id}/user/delete', [UserController::class, 'userdestroy']);
Route::put('/{id}/update', [UserController::class, 'Update']);
Route::post('/admin', [UserController::class, 'store']);

// Controller Menu Admin Barang
Route::get('/barang', [BarangController::class, 'index']);
Route::delete('{id}/barang/delete', [BarangController::class, 'barangdestroy']);
Route::post('/barang/add', [BarangController::class, 'store']);
// Route::put('/{id}/update', [UserController::class, 'Update']);->ini belum karena masih mikirin gambar
// kategori belum bisa karena harus bikin table kategori dulu

// Route::get('/barang', [BarangController::class, 'show']);

Route::get('/pesanan-check-out', [PesananController::class, 'show']);

// Route::get('/pesanan-sudah-bayar', [PesananController::class, 'show']);


require __DIR__.'/auth.php';
