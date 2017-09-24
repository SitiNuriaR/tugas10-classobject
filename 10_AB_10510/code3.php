<?php
class smartphone {
public function __construct() {
echo "Constructor dari class smartphone <br />";
} 
public function __destruct() {
echo "Destructor dari class smartphone <br />";
}
}
class smartphone_dualsim extends smartphone {
}
class smartphone_singlesim extends smartphone_dualsim {
}
$gadget_baru = new smartphone_singlesim();
echo "Belajar OOP PHP <br />";
?>