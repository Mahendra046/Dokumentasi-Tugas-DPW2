<?php

namespace App\Http\Controllers;
use App\Models\Produk;
class ClientController extends Controller
{

    function showHome()
    {   $data['list_produk'] = Produk::all();
        return view(view:'client.home.home', data: $data);
    }

    function showDetail()
    {   $data['list_produk'] = Produk::all();
        return view('client.product.product-details', data: $data);
    }

    function showShop()
    {   $data['list_produk'] = Produk::all();
        return view(view:'client.shop.shop', data: $data);
    }

    function showCheckout()
    {
        return view('client.checkout.checkout');
    }

    function showCart()
    {
        return view('client.cart.cart');
    }

}
