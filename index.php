<?php

class Hewan {
    public $jumlah_kaki,$bisa_terbang;
}

class Kucing extends Hewan {
    function bersuara()
    {
        return "meoong";
    }
    function bisa_terbang()
    {
        return "Tidak Bisa Terbang";
    }
}

class Anjing extends Hewan {
    function bersuara()
    {
        return "guk guk";
    }
    function bisa_terbang()
    {
        return "Tidak Bisa Terbang";
    }
}

class Elang extends Hewan {
    function bersuara()
    {
        return "biiiip";
    }
    function bisa_terbang()
    {
        return "Bisa Terbang";
    }
}

class Angsa extends Hewan {
    function bersuara()
    {
        return "kwaakwaakwakk";
    }
    function bisa_terbang()
    {
        return "Bisa Terbang";
    }
}

$momo = new Kucing;
$momo->jumlah_kaki = 4;
echo "Momo Adalah Kucing <br>";
echo "Punya Kaki Sebanyak: " .$momo->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$momo->bisa_terbang()."<br>";
echo "Bersuara: " .$momo->bersuara()."<br>";

echo "<hr>";

$doggo = new Anjing;
$doggo->jumlah_kaki = 4;
echo "Doggo Adalah Anjing <br>";
echo "Punya Kaki Sebanyak" .$doggo->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$doggo->bisa_terbang()."<br>";
echo "Bersuara: " .$doggo->bersuara()."<br>";

echo "<hr>";

$zya = new Elang;
$zya->jumlah_kaki = 2;
echo "Zya Adalah Elang <br>";
echo "Punya Kaki Sebanyak" .$zya->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$zya->bisa_terbang()."<br>";
echo "Bersuara: " .$zya->bersuara()."<br>";

echo "<hr>";

$masha = new Angsa;
$masha->jumlah_kaki = 2;
echo "Masha Adalah Angsa <br>";
echo "Punya Kaki Sebanyak" .$masha->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$masha->bisa_terbang()."<br>";
echo "Bersuara: " .$masha->bersuara()."<br>";

echo "<hr>";

?>