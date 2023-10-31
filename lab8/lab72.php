<?php 
include("class_lib.php");
$class1 = new claseConcretal;
$class1 ->printOut();
echo $class1->prefixValor('FOO_') . "<br>";
$class2 = new claseConcreta2;
$class2->printOut();
echo $class2->prefixValor('FOO_') . "<br>";
?>