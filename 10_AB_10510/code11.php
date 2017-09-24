<?php
class smartphone {
const DOLLAR = '13000';
}
class tablet extends smartphone {
const DOLLAR = '12000';
public function beli_smartphone($harga){
//lengkapi baris kode berikut ini
}
public function beli_tablet($harga){
return "Beli tablet baru, Rp .".$harga*self::DOLLAR;
}
}
$smartphone_obj = new smartphone();
echo $smartphone_obj->beli_smartphone(200);
echo "<br />";
echo $smartphone_obj->beli_tablet(400);
?>