<?php 

Class Game extends Produk implements InfoProduk{
    public $waktuMain;

    public function __construct($Judul = "judul", $Penulis = "penulis", $Penerbit =
     "penerbit", $Harga= 0, $waktuMain=0){
        parent::__construct($Judul, $Penulis, $Penerbit, $Harga);
        $this->waktuMain = $waktuMain;
     }
    
     public function getInfo(){
        $str = "{$this->judul} | {$this->getLable()} (Rp. {$this->harga})";
        return $str; 
    }
     
    public function getInfoProduk(){
        $str = "Game : " . $this->getInfo() . " - {$this->waktuMain} Jam.";
        return $str;
    }

}