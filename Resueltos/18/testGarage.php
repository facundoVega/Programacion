<?php

include_once "Garage.php";

$auto_1 = new Auto("BMW","Rojo",100000);
$auto_2 = new Auto("BMW","Blanco",200000);
$auto_3 = new Auto("Ford","Gris",300000);
$auto_4 = new Auto("Ford","Azul",400000);
$auto_5 = new Auto("Fiat","Verde",500000);

$garage_1 = new Garage ("Garage test srl",10.1);

$garage_1->Add($auto_1);
$garage_1->Add($auto_2);
$garage_1->Add($auto_3);
$garage_1->Add($auto_4);
$garage_1->Add($auto_5);
echo "________________";
echo "<br>";
$garage_1->MostrarGarage();
echo "<br>";
echo "________________";
echo "<br>";
$garage_1->Remove($auto_3);
echo "<br>";
echo "________________";
echo "<br>";
//var_dump($garage_1); unset elimina el indice tambien y deja mal el array y al momento de entrar en un obj del array tira error utilizar foreach
$garage_1->MostrarGarage();

?>