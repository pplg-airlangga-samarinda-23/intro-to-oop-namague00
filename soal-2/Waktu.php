<?php
class Waktu
{
    // deklarasikan atribut sesuai ditentukan buku
    public $jam;
    public $menit;
    public $detik;

    public function __construct($jam,$menit,$detik)
    {
        $this -> jam = $jam;
        $this -> menit = $menit;
        $this -> detik = $detik;
    }

    // deklarasikan metode sesuai yang diminta buku
    public function __get($atribut){
        return $this -> $atribut;
    }
    public function __set($atribut,$nilai){
        $this -> $atribut = $nilai;
    }
}

$contoh = new Waktu(15, 34, 50);
echo "Sekarang pukul" . $contoh->jam . ":" . $contoh->menit . ":" . $contoh->detik . "<br>"; //output: Sekarang pukul 15:34:50