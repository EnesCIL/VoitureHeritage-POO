<?php
include "Voiture.php";
include "VoitureElec.php";

$v1 = new Voiture("Peugeot", "408");
$ve1 = new VoitureElec("BMW", "i3", 150);

echo $v1 . "<br/>";
echo $ve1 . "<br/>";

echo $v1->getInfos() ."<br/>";
echo $ve1->getInfos() ."<br/>";
?>

