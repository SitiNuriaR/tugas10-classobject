<?php
class smartphone {
// buat konstanta
const RUPIAH = '3000000';
}
$smartphone_obj = new smartphone();
// panggil konstanta class
echo "Harga smartphone saat ini = Rp. ".$smartphone_obj::RUPIAH;
?>