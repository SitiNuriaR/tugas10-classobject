<?php
class smartphone {
public $merk;
public $pemilik;
// static property
public static $harga_beli;
//static method
public static function beli_smartphone() {
return "Beli smartphone seharga Rp".self::$harga_beli;
}
}
// set static property
smartphone::$harga_beli=3000000;
// panggil static method
echo smartphone::beli_smartphone();
?>