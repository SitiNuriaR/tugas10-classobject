<?php
interface mouse{
const JENIS = "Laser Mouse";
public function klik_kanan();
public function klik_kiri();
}
interface mouse_gaming extends mouse{
public function ubah_dpi();
}
interface keyboard{
public function tekan_enter();
}
class laptop implements mouse{
public function klik_kanan(){
return "Klik Kanan...";
}
public function klik_kiri(){
return "Klik Kiri...";
}
public function ubah_dpi(){
return "Ubah settingan DPI mouse";
}
}
class pc implements mouse, keyboard{
public function klik_kanan(){
return "Klik Kanan...";
}
public function klik_kiri(){
return "Klik Kiri...";
}
public function ubah_dpi(){
return "Ubah settingan DPI mouse";
}
public function tekan_enter(){
return "Tekan Tombol Enter...";
}
}
echo mouse::JENIS; 
echo "<br />";
$laptop_obj = new laptop();
echo $laptop_obj->klik_kanan();
echo "<br />";
echo $laptop_obj->ubah_dpi();
echo "<br />";
$pc_obj = new pc();
echo $pc_obj->klik_kiri();
echo "<br />";
echo $pc_obj->tekan_enter();
?>