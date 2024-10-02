<?php
class Mobil {
    // lengkapi dengan atribut dan metode sesuai pada buku
    public $nopolisi;
    public $merek;
    public $type;
    public $tahun;
    public $pembuatan;
    public $norangka;
    public $nomesin;
    public $bahanbakar;
    public $bahanbaru;

    // contoh metode melaju()
    public function getBahanbaru(){
        return $this -> bahanbaru;
    }
    public function setBahanbaru($bahanbaru){
        $this -> bahanbaru = $bahanbaru;
    }
    public function melaju() {
        echo "Mobil sedang melaju."."<br>";
        echo "bahan bakar berkurang 30"."<br>";
        $this ->  bahanbakar -= 30;
    }
    public function belok() {
        echo "Mobil sedang belok."."<br>";
        echo "bahan bakar berkurang 50"."<br>";
        $this ->  bahanbakar -= 50;
    }
    public function berhenti() {
        echo "Mobil sedang berhenti."."<br>";
        echo "bahan bakar berkurang 20"."<br>";
        $this ->  bahanbakar -= 20;
    }
    public function mundur() {
        echo "Mobil sedang mundur."."<br>";
        echo "bahan bakar berkurang 40"."<br>";
        $this ->  bahanbakar -= 40;
    }

    
}

// buat sebuah objek mobil dan lengkapi atributnya
$ai = new mobil();
$ai -> nopolisi = 123;
$ai -> merek = "ami";
$ai -> type = "berat";
$ai -> tahun = 2003;
$ai -> pembuatan = "papua";
$ai -> norangka = 90;
$ai -> nomesin = 80;
$ai -> bahanbakar = 300;
$ai -> bahanbaru = 300;


// panggil keempat metode yang terdapat pada kelas Mobil
echo "bahan bakar yang ada: ".$ai -> bahanbaru ."<br>";
echo $ai -> melaju()."<br>";
echo $ai -> belok()."<br>";
echo $ai -> berhenti()."<br>";
echo $ai -> mundur()."<br>";
echo "sisa bahan bakar".$ai -> bahanbakar ."<br>";