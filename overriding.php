<?php 

class Produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga;
    public function __construct($Judul = "judul", $Penulis = "penulis", $Penerbit =
     "penerbit", $Harga= 0){
        $this->judul = $Judul;
        $this->penulis = $Penulis;
        $this->penerbit = $Penerbit;
        $this->harga = $Harga;

    }
    
    public function getLable(){
        return "$this->penulis, $this->penerbit";
    }
    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLable()} (Rp. {$this->harga})";
        return $str; 
    }


}

Class Komik extends Produk{
    public $jmlHalaman;
    public function __construct($Judul = "judul", $Penulis = "penulis", $Penerbit =
    "penerbit", $Harga= 0, $jmlHalaman = 0){
        parent::__construct($Harga, $Judul, $Penulis, $Penerbit, $Harga);
        $this->jmlHalaman= $jmlHalaman;
    }
    public function getInfoProduk(){
        $str = "Komik : " . parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}
Class Game extends Produk{
    public $waktuMain;

    public function __construct($Judul = "judul", $Penulis = "penulis", $Penerbit =
     "penerbit", $Harga= 0, $waktuMain=0){
        parent::__construct($Judul, $Penulis, $Penerbit, $Harga);
        $this->waktuMain = $waktuMain;
     }
    public function getInfoProduk(){
        $str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
        return $str;
    }
}
class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLable()} (Rp. ($produk->harga})";
        return $str;
    }
}




$produk1 = new Komik("Naruto", "Masashi Khisimoto", "Shonen Jump", 30000, 100);

$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 25000, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();