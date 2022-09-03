<?php

namespace App\Http\Controllers;
use App\Models\Produk;
class ClientController extends Controller
{

    function filter()
    {
        $nama = request('nama');
        $data['nama'] = $nama;
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();

        return view('client.shop.shop', $data);
    }


    function showHome()
    {
        $data['list_produk'] = Produk::all();
        return view('client.home.home', $data);
    }

    function showCart()
    {
        return view('client.cart.cart');
    }

    function showShop()
    {
        $data['list_produk'] = Produk::all();
        return view('client.shop.shop', $data);
    }

    function showProduct(Produk $produk){
        $data['produk'] = $produk;
        return view('client.product.product', $data);
    }

    function showCheckout()
    {
        return view('client.checkout.checkout');
    }

}
