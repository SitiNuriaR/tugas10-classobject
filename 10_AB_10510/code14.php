<?php
abstract class smartphone{
// buat abstract method
abstract public function lihat_spec();
}
class tablet extends smartphone{
// implementasi abstract method
public function lihat_spec(){
return "Lihat Spec Tablet...";
}
// method 'biasa' 
public function beli_tablet(){
return "Beli Tablet...";
}
}
$tablet_obj = new tablet();
echo $tablet_obj->lihat_spec();
echo "<br />";
echo $tablet_obj->beli_tablet();
?>