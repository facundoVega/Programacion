<?php

include_once "Auto.php";

$objAuto1 = new Auto ("BMW","rojo");
$objAuto2 = new Auto ("BMW","blanco");

$objAuto3 = new Auto ("BMW","negro",100000);
$objAuto4 = new Auto ("BMW","negro",200000);

$objAuto5 = new Auto ("BMW","negro",300000,27);


$objAuto3->AgregarImpuestos(1500);
echo "<br>";
$objAuto4->AgregarImpuestos(1500);
echo "<br>";
$objAuto5->AgregarImpuestos(1500);
echo "<br>";

echo "--------------------";
echo "<br>";
$importe = Auto::Add($objAuto1,$objAuto2);
echo $importe;
echo "<br>";
echo "--------------------";
echo "<br>";
echo "Primer auto con el segundo auto :".$objAuto1->Equals($objAuto2);
echo "<br>";
echo "Primer auto con el quinto auto :".$objAuto1->Equals($objAuto5);
echo "<br>";
echo "--------------------";
echo "<br>";
echo "Info";
echo "<br>";
Auto::MostrarAuto($objAuto1);
Auto::MostrarAuto($objAuto3);
Auto::MostrarAuto($objAuto5);
?>