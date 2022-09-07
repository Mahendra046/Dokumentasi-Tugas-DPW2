<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    function showBeranda()
    {
        return view('admin.beranda.beranda');
    }

    function showProduk()
    {
        return view('admin.produk.produk');
    }

    function showKategori()
    {
        return view('admin.kategori.kategori');
    }

    function showPromo()
    {
        return view('admin.promo.promo');
    }

    function showPelanggan()
    {
        return view('admin.master_data.pelanggan');
    }

    function showSupplier()
    {
        return view('admin.master_data.supplier');
    }
}
