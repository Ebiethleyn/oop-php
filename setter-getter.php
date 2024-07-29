<?php 

class Produk{
    private $judul,
           $penulis,
           $penerbit, 
           $harga,
           $diskon = 0;
    public function __construct($Judul = "judul", $Penulis = "penulis", $Penerbit =
     "penerbit", $Harga= 0){
        $this->judul = $Judul;
        $this->penulis = $Penulis;
        $this->penerbit = $Penerbit;
        $this->harga = $Harga;
    }
    public function setJudul($judul){
        $this->judul = $judul;
    }
    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }
    public function getPenulis(){
        return $this->penulis;
    }
    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }
    public function getJudul(){
        return $this->judul;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
     }
    
    public function getLable(){
        return "$this->penulis, $this->penerbit";
    }
    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLable()} (Rp. {$this->harga})";
        return $str; 
    }
    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
    public function getDiskon(){
        return $this->diskon;
    }


}

Class Komik extends Produk{
    public $jmlHalaman;
    public function __construct($Judul = "judul", $Penulis = "penulis", $Penerbit =
    "penerbit", $Harga= 0, $jmlHalaman = 0){
        parent::__construct($Judul, $Penulis, $Penerbit, $Harga);
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

$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(90);
echo $produk2->getHarga();
echo "<hr>";
echo $produk1->getJudul();
echo "<hr>";
$produk1->setPenulis("Ebiethh");
echo $produk1->getPenulis();