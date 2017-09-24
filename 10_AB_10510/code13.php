<?php
final class smartphone {
function lihat_spec() {
return "Spec smartphone: Samsung,
Processor Snapdragon, Ram 1GB";
}
}
class smartphone_dualsim extends smartphone {
}
$gadget_baru = new smartphone_dualsim();
?>