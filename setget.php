<?php 

class Mobil{
    private $merek="Merek",
            $warna = "Warna",
            $diskon = 0,
            $harga = 0;
    public function setMerek($merek){
        $this->merek = $merek;
    }
    public function getMerek(){
        return $this->merek;
    }

    public function setWarna($warna){
        $this->warna = $warna;
    }
    public function getWarna(){
        return $this->warna;
    }
    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
    public function getDiskon(){
        return $this->diskon;
    }
    public function setHarga($harga){
        $this->harga = $harga;
    }
    public function getHarga(){
        return $this->harga * $this->diskon / 100;
    }
}
$mobil1 = new Mobil();
$mobil1->setMerek("Pajero");
$mobil1->setWarna("Hitam");
$mobil1->setDiskon(50);
$mobil1->setHarga(7000);
echo "Merek Mobil : {$mobil1->getMerek()}, Warna Mobil : {$mobil1->getWarna()}";
echo "<hr>";
echo "Diskon : {$mobil1->getDiskon()} Harganya Menjadi : {$mobil1->getHarga()}";