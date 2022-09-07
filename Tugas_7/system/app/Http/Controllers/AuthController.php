<?php

namespace App\Http\Controllers;
use Auth;

class AuthController extends controller
{
    function showLogin()
    {
        return view('admin/login');
    }

    function loginProcess()
    {
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('admin/beranda')->with('success', 'Login Berhasil');
        }else{
            return back()->with('danger', 'Login Gagal, Silahkan Cek Email atau Password Anda');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('admin/beranda');  
    }

    function registration()
    {
    }

    function forgotPassword()
    {
    }
}