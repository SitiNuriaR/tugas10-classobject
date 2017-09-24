<?php
class smartphone {
final public function lihat_spec() {
return "Spec smartphone: Samsung,
Processor Snapdragon, Ram 1GB";
}
}
class smartphone_dualsim extends smartphone {
public function lihat_spec() {
return "Spec smartphone dual sim: Asus,
Processor Snapdragon, Ram 2GB";
}
}
$gadget_baru = new smartphone_dualsim();
?>