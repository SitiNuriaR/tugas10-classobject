<?php
class smartphone {
public $merk;
public $pemilik;
// static property
public static $harga_beli;
//static method
public static function beli_smartphone() {
return "Beli smartphone";
}
}
// set static property
smartphone::$harga_beli=3000000;
// get static property
echo "Harga beli : Rp".smartphone::$harga_beli;
echo "<br />";
// panggil static method
echo smartphone::beli_smartphone();
?>