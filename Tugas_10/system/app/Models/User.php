<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Produk;
use App\Models\UserDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



class User extends Authenticatable
{
    protected $table = 'user';
    use HasFactory, Notifiable;

    function Detail(){
        return $this->hasOne(userDetail::class, 'id_user');
    }
    function Produk(){
        return $this->hasMany(Produk::class, 'id_user');
    }
    function getJenisKelaminStringAttribute(){
        return ($this->jenis_kelamin == 1) ? "Laki-laki" : "Perempuan";
    }
    function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }
    function setUsernameAttribute($value){
        $this->attributes['username'] = strtolower($value);
    }
}
