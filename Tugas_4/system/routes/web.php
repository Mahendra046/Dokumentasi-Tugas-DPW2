<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ClientController;
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

// Route::get('/home', function () {
//     return view('client.home.home');
// });

// Route::get('/cart', function () {
//     return view('client.cart.cart');
// });

// Route::get('/checkout', function () {
//     return view('client.checkout.checkout');
// });

// Route::get('/product-details', function () {
//     return view('client.product.product-details');
// });

// Route::get('/shop', function () {
//     return view('client.shop.shop');
// });

// Route::get('/login', function () {
//     return view('client.login');
// });

// Route::get('/admin', function () {
//     return view('admin.base');
// });
// admin controller start
Route::get('admin/beranda', [HomeController::class, 'showBeranda']);
Route::get('admin/kategori', [HomeController::class, 'showKategori']);
Route::get('admin/promo', [HomeController::class, 'showPromo']);
Route::get('admin/pelanggan', [HomeController::class, 'showPelanggan']);
Route::get('admin/supplier', [HomeController::class, 'showSupplier']);
Route::get('admin/login', [AuthController::class, 'showLogin']);

// produk
Route::get('admin/produk', [ProdukController::class, 'produk']);
Route::get('admin/produk/create', [ProdukController::class, 'create']);
Route::post('admin/produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class,'show']);
Route::get('produk/{produk}/edit', [ProdukController::class,'edit']);
Route::put('produk/{produk}', [ProdukController::class,'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

// client
Route::get('/home', [ClientController::class, 'showHome']);
Route::get('/product-details', [ClientController::class, 'showDetail']);
Route::get('/shop', [ClientController::class, 'showShop']);
Route::get('/cart', [ClientController::class, 'showcart']);
Route::get('/checkout', [ClientController::class, 'showCheckout']);
// client