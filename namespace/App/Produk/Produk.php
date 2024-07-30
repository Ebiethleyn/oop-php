<?php 

abstract class Produk{
    protected $judul,
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
    abstract function getInfo();
    
    
    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
    public function getDiskon(){
        return $this->diskon;
    }
}