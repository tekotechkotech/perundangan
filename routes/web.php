<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PemesanController;
use App\Http\Controllers\ProdukController;
use App\Models\Pemesanan;
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
    return redirect('dashboard'); 
});

// Route::get('/a', function () {
//     return view('welcome');
// });

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan.index');
Route::get('/pemesanan/add{apa}', [PemesananController::class, 'add'])->name('pemesanan.add');
Route::get('/pemesanan/store', [PemesananController::class, 'store'])->name('pemesanan.store');
Route::get('/pemesanan/{id}/{apa}', [PemesananController::class, 'pemesananDetail'])->name('pemesanan.detail');

Route::post('/pembayaran', [PemesananController::class, 'pembayaran'])->name('pembayaran');


Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/pemesan', [PemesanController::class, 'index'])->name('pemesan.index');
