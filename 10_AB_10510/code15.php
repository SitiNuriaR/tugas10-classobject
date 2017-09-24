<?php
// buat abstract class
abstract class smartphone{
public static function hidupkan_komputer(){
echo "Hidupkan Komputer";
}
// buat abstract method
abstract public function lihat_spec();
abstract public function lihat_processor();
abstract public function lihat_harddisk();
abstract public function lihat_pemilik();
}
class tablet extends smartphone{
// .. isi class tablet
}
?>