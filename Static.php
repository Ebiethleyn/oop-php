<?php 

// class ContohStatic{
//     public static $angka = 1;
//     public static function halo(){
//         return "Hallo";
//     }
//     public static function halloProperty(){
//         return "Hallo ". self::$angka++ . "Kali";
//     }
// }
// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halloProperty();
// echo "<hr>";
// echo ContohStatic::halloProperty();


class Contoh{
    public static $angka = 1;
    public static function halo(){
        return "hello ". self::$angka++ . " Kali. <br>";
    }
}
$object1 = new Contoh;
echo $object1->halo();
echo $object1->halo();
echo $object1->halo();

echo "<hr>";

$object2 = new Contoh;
echo $object2->halo();
echo $object2->halo();
echo $object2->halo();