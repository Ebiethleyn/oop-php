<?php 

class Produk{
    public $judul = "Ebieth",
           $penulis ="Gabriel",
           $penerbit ="Daten",
           $harga = 0; 
    public function getLable(){
        //tambahkan this (this->) untuk mengakses property(variable di luar function)
        return "$this->penulis, $this->penerbit";
    }

}

// $produk1 = new Produk();
// //timpa nilai default
// $produk1->judul="Gabriel Daten Leyn";
// $produk2= new Produk();
// var_dump($produk1);
// $produk2->harga = 100.000;
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul= "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul= "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 25000;

echo "Komik : ". $produk3->getLable();
echo "<br>";
echo "Game : ". $produk4->getLable();