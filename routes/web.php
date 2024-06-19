<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller as Controller;
use App\Http\Controllers\LoginController as Login;
//use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MouUserController as User;
use App\Http\Controllers\ProdukController as Produk;
use App\Http\Controllers\PersediaanController as Persediaan;
use App\Http\Controllers\PemakaianController as Pemakaian;

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

Route::get('/', [Controller::class, 'index'])->name('index');
Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');

//Login
Route::get('/lgn', [Login::class, 'login'])->name('login');
Route::post('/login-proses', [Login::class, 'login_proses'])->name('login_proses');
Route::get('/logout', [Login::class, 'logout'])->name('logout');

//dashboard
//Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

//User
Route::get('/user', [User::class, 'user_index'])->name('user_index');
Route::get('/user-tambah', [User::class, 'user_tambah'])->name('user_tambah');
Route::post('/user-simpan', [User::class, 'user_simpan'])->name('user_simpan');
Route::get('/user-edit/{id}', [User::class, 'user_edit'])->name('user_edit');
Route::post('/user-update/{id}', [User::class, 'user_update'])->name('user_update');
Route::post('/user-hapus/{id}', [User::class, 'user_hapus'])->name('user_hapus');

//Produk
Route::get('/produk', [Produk::class, 'produk_index'])->name('produk_index');
Route::get('/produk-tambah', [Produk::class, 'produk_tambah'])->name('produk_tambah');
Route::get('/produk-edit/{id}', [User::class, 'produk_edit'])->name('produk_edit');
Route::post('/produk-simpan', [Produk::class, 'produk_simpan'])->name('produk_simpan');

//Persediaan
Route::get('/persediaan', [Persediaan::class, 'persediaan_index'])->name('persediaan_index');
Route::get('/persediaan-tambah', [Persediaan::class, 'persediaan_tambah'])->name('persediaan_tambah');
Route::post('/persediaan-simpan', [Persediaan::class, 'persediaan_simpan'])->name('persediaan_simpan');

//Pemakaian
Route::get('/pemakaian', [Pemakaian::class, 'pemakaian_index'])->name('pemakaian_index');
Route::get('/pemakaian-tambah', [Pemakaian::class, 'pemakaian_tambah'])->name('pemakaian_tambah');
Route::post('/pemakaian-simpan', [Pemakaian::class, 'pemakaian_simpan'])->name('pemakaian_simpan');
