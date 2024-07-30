<?php 


Class Komik extends Produk implements InfoProduk{
    public $jmlHalaman;
    public function __construct($Judul = "judul", $Penulis = "penulis", $Penerbit =
    "penerbit", $Harga= 0, $jmlHalaman = 0){
        parent::__construct($Judul, $Penulis, $Penerbit, $Harga);
        $this->jmlHalaman= $jmlHalaman;
    }
    public function getInfo(){
        $str = "{$this->judul} | {$this->getLable()} (Rp. {$this->harga})";
        return $str; 
    }
    public function getInfoProduk(){
        $str = "Komik : " . $this->getInfo() ." - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}