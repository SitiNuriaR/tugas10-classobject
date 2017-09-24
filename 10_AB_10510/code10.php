<?php
class smartphone {
// buat konstanta
const DOLLAR = '12000';
// buat method
public function beli_smartphone($harga) {
return "Beli smartphone baru, Rp. ".$harga*self::DOLLAR;
}
}
$smartphone_obj = new smartphone();
echo $smartphone_obj->beli_smartphone(200);
?>