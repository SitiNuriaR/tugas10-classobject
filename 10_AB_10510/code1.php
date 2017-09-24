<?php
class smartphone {
public function lihat_spec() {
return "Spec smartphone: Samsung,
Processor Snapdragon, Ram 1GB";
}
}
class smartphone_dualsim extends smartphone {
public function lihat_spec() {
return "Spec smartphone dual sim: Asus,
Processor Snapdragon, Ram 2GB";
}
public function lihat_spec_smartphone() {
 return parent::lihat_spec();
}
}
$gadget_baru = new smartphone_dualsim();
echo $gadget_baru->lihat_spec();
echo "<br />";
echo $gadget_baru->lihat_spec_smartphone();
?>