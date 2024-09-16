<?php

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
    return view('dashboard');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'ceklevel:Admin']], function () {
    Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
    Route::resource('users', \App\Http\Controllers\UserController::class)
        ->middleware('auth');
    Route::resource('produk', \App\Http\Controllers\ProdukController::class)
        ->middleware('auth');
    Route::resource('langganan', \App\Http\Controllers\LanggananController::class)
        ->middleware('auth');
    Route::get('keranjang/langganan/{nama_pelanggan}', [App\Http\Controllers\KeranjangController::class, 'index']);
    Route::get('order/langganan/{nama_pelanggan}', [App\Http\Controllers\OrderController::class, 'index']);
    Route::resource('keranjang', \App\Http\Controllers\KeranjangController::class)
        ->middleware('auth');
    Route::resource('order', \App\Http\Controllers\OrderController::class)
        ->middleware('auth');
    Route::get('order/langganan/checkout/{kode_pelanggan}', [App\Http\Controllers\CheckoutController::class, 'index']);
    Route::delete('check-out/{id}', [App\Http\Controllers\CheckoutController::class, 'delete']);
    Route::get('order/langganan/checkout/konfirmasi_checkout/{pesanan_id}', [App\Http\Controllers\CheckoutController::class, 'konfirmasi']);
    Route::resource('kiriman', \App\Http\Controllers\KirimanController::class)
        ->middleware('auth');
    Route::get('kiriman/{id}', [App\Http\Controllers\KirimanController::class, 'show']);
    Route::get('surat_jalan/{id}', [App\Http\Controllers\KirimanController::class, 'surat_jalan']);
    Route::get('invoice/{id}', [App\Http\Controllers\KirimanController::class, 'invoice']);
    Route::get('invoice2/{id}', [App\Http\Controllers\KirimanController::class, 'invoice2']);
    Route::get('konfirmasi_terkirim/{id}', [App\Http\Controllers\KirimanController::class, 'konfirmasiterkirim']);
    Route::get('konfirmasi_belumcheckout/{id}', [App\Http\Controllers\KirimanController::class, 'konfirmasibelumcheckout']);
    Route::get('konfirmasi_batalan/{id}', [App\Http\Controllers\KirimanController::class, 'konfirmasibatalan']);
    Route::resource('terkirim', \App\Http\Controllers\TerkirimController::class)
        ->middleware('auth');
    Route::get('terkirim/{id}', [App\Http\Controllers\TerkirimController::class, 'show']);
    Route::get('konfirmasi_belumterkirim/{id}', [App\Http\Controllers\KirimanController::class, 'konfirmasibelumterkirim']);
    Route::get('bayar/{langganan_id}', [App\Http\Controllers\TerkirimController::class, 'bayar']);
    Route::resource('batalan', \App\Http\Controllers\BatalanController::class)
        ->middleware('auth');
    Route::get('batalan/{id}', [App\Http\Controllers\BatalanController::class, 'show']);
    Route::resource('salesogi', \App\Http\Controllers\SalesogiController::class)
        ->middleware('auth');
    Route::resource('salesdavin', \App\Http\Controllers\SalesdavinController::class)
        ->middleware('auth');
    Route::resource('pembayaran', \App\Http\Controllers\PembayaranController::class)
        ->middleware('auth');
    Route::resource('pembayaran', \App\Http\Controllers\PembayaranController::class)
        ->middleware('auth');
    Route::get('margin/{langganan_id}', [App\Http\Controllers\TerkirimController::class, 'show_margin']);
    Route::get('margin_sales/{langganan_id}', [App\Http\Controllers\TerkirimController::class, 'show_margin_sales']);
    Route::resource('debit', \App\Http\Controllers\LaporanpiutangpelangganController::class)
        ->middleware('auth');
    Route::resource('checkoutpesanan', \App\Http\Controllers\CheckoutpesananController::class)
        ->middleware('auth');
    Route::get('checkoutpesanan/{id}', [App\Http\Controllers\CheckoutpesananController::class, 'show']);
    Route::resource('kebutuhanbelumcheckout', \App\Http\Controllers\KebutuhanbelumcheckoutController::class)
        ->middleware('auth');
    Route::get('konfirmasi_pencairan/{id}', [App\Http\Controllers\RekapMarginController::class, 'konfirmasipencairan']);
    Route::get('konfirmasi_sudahcair/{id}', [App\Http\Controllers\ProsespencairanController::class, 'konfirmasisudahcair']);
});