<?php
class smartphone {
const DOLLAR = '13000';
	public function beli_smartphone($harga1){
		//lengkapi baris kode berikut ini
		return "Beli smartphone baru, Rp .".$harga1*smartphone::DOLLAR;
		}
}

class tablet extends smartphone {
	const DOLLAR = '12000';
		public function beli_tablet($harga){
		return "Beli tablet baru, Rp .".$harga*self::DOLLAR;
		}
}

$smartphone_obj = new smartphone();
echo $smartphone_obj->beli_smartphone(200);
echo "<br />";

$tablet_obj = new tablet();
echo $tablet_obj->beli_tablet(400);
?>