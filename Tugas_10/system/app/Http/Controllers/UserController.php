<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserDetail;

class UserController extends Controller{

    function index(){
        $data['list_user'] = User::withCount('produk')->get();
        return view('admin.user.index', $data);
    }
    function create(){
        return view('admin.user.create');
    }
    function store(){
        $user = new user;
        $user->nama = request('nama');
        $user->username = request('username'); 
        $user->email = request('email'); 
        $user->jenis_kelamin = request('jenis_kelamin');
        $user->password = (request('password')); 
        $user->save();

        $userDetail = new UserDetail;
        $userDetail->id_user = $user->id;
        $userDetail->no_handphone = request('no_handphone');
        $userDetail->save();
        return redirect('admin/user')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(user $user){
        $data['user'] = $user;
        return view('admin.user.show', $data);
    }
    function edit(User $user){
        $data['user'] = $user;
        return view('admin.user.edit', $data);
    }
    function update(User $user){
        $user->nama = request('nama');
        $user->username = request('username'); 
        $user->email = request('email'); 
        $user->jenis_kelamin = request('jenis_kelamin');
        if(request('password')) $user->password = (request('password'));   
        $user->save();

        $userDetail = new UserDetail;
        $userDetail->id_user = $user->id;
        $userDetail->no_handphone = request('no_handphone');
        $userDetail->save();

        return redirect('admin/user')->with('warning', 'Data Berhasil DiPerbarui');
    }
    function destroy(User $user){
        $user->delete();

        return redirect('admin/user')->with('danger', 'Data Berhasil DiHapus');
    }

}