<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;

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
Route::prefix('admin')->middleware('auth')->group(function(){
    Route::post('produk/filter', [ProdukController::class,  'filter']);
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
});

// produktable

// Route::get('admin/produk', [ProdukController::class, 'produk']);
// Route::get('admin/produk/create', [ProdukController::class, 'create']);
// Route::post('admin/produk', [ProdukController::class, 'store']);
// Route::get('produk/{produk}', [ProdukController::class,'show']);
// Route::get('produk/{produk}/edit', [ProdukController::class,'edit']);
// Route::put('produk/{produk}', [ProdukController::class,'update']);
// Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

// clientshop
Route::get('home', [ClientController::class, 'showHome']);
Route::get('cart', [ClientController::class, 'showCart']);
Route::get('shop', [ClientController::class, 'showShop']);
Route::get('product', [ClientController::class, 'showProduct']);
Route::get('checkout', [ClientController::class, 'showCheckout']);
Route::get('product/{produk}', [ClientController::class, 'showProduct']);
Route::post('client/filter', [ClientController::class,  'filter']);
Route::post('home/filter', [ClientController::class,  'filterhome']);


// usertable

// Route::get('admin/user', [UserController::class, 'user']);
// Route::get('admin/user/create', [UserController::class, 'create']);
// Route::post('admin/user', [UserController::class, 'store']);
// Route::get('user/{user}', [UserController::class,'show']);
// Route::get('user/{user}/edit', [UserController::class,'edit']);
// Route::put('user/{user}', [UserController::class,'update']);
// Route::delete('user/{user}', [UserController::class, 'destroy']);

// adminlogin
Route::get('admin/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('admin/login', [AuthController::class, 'loginProcess']);
Route::get('admin/logout', [AuthController::class, 'logout']);
