<?php 

// define('NAMA', 'Ebieth Leyn');

// echo NAMA;

// echo "<br>";
// const UMUR = 32;
// echo UMUR;

// class Constant{
//     const NAMA = "Gabriel Daten Leyn";
// }

function coba(){
    return __FUNCTION__;
}
echo coba();
echo "<br>";

class CobaConstClass{
    public $CobaClass = __CLASS__;
}
$obj1 = new CobaConstClass;
echo $obj1->CobaClass;