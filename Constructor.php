<?php 

class Produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga;
    public function __construct($Judul = "judul", $Penulis = "penulis", $Penerbit = "penerbit", $Harga="harga"){
        $this->judul = $Judul;
        $this->penulis = $Penulis;
        $this->penerbit = $Penerbit;
        $this->harga = $Harga;
    }
    
    public function getLable(){
        return "$this->penulis, $this->penerbit";
    }

}

$produk1 = new Produk("Naruto", "Masashi Khisimoto", "Shonen Jump", 30000);

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 25000);
$produk3 = new Produk("Anjing");


echo "Komik : ". $produk1->getLable();
echo "<br>";
echo "Game : ". $produk2->getLable();
echo "<br>";
echo "njing : ". $produk3->getLable();