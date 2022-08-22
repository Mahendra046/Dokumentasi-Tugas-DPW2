<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('client.home.home');
});

Route::get('/cart', function () {
    return view('client.cart.cart');
});

Route::get('/checkout', function () {
    return view('client.checkout.checkout');
});

Route::get('/product-details', function () {
    return view('client.product.product-details');
});

Route::get('/shop', function () {
    return view('client.shop.shop');
});

Route::get('/login', function () {
    return view('client.login');
});

Route::get('/admin', function () {
    return view('admin.base');
});

Route::get('/admin/beranda', function () {
    return view('admin.beranda.beranda');
});

Route::get('/admin/kategori', function () {
    return view('admin.kategori.kategori');
});

Route::get('/admin/produk', function () {
    return view('admin.produk.produk');
});

Route::get('/admin/promo', function () {
    return view('admin.promo.promo');
});

Route::get('/admin/pelanggan', function () {
    return view('admin.master_data.pelanggan');
});

Route::get('/admin/supplier', function () {
    return view('admin.master_data.supplier');
});

Route::get('/admin/login', function () {
    return view('admin.login');
});
