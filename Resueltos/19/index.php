<?php

include_once"Pasajero.php";
include_once"Vuelo.php";

$pasajero_1 = new Pasajero("Lopez","Agustin",38793345,false);
$pasajero_2 = new Pasajero("Aguirre","Martin",38793345,false);
$pasajero_3 = new Pasajero("Rodriguez","Nicolas",38793347,true);

echo "Test Equals clase pasajero:<br>";
echo "Equals pasajero 1 y pasajero 2<br>";
echo $pasajero_1->Equals($pasajero_2);
echo "<br>";
echo "Equals pasajero 2 y pasajero 3<br>";
echo $pasajero_2->Equals($pasajero_3);
echo "<br>";
echo "getinfopasajero pasajero 1<br>";
echo $pasajero_1->getInfoPasajero();
echo "<br>";
echo "Mostrar pasajero  (pasajero1) <br>";
Pasajero::MostrarPasajero($pasajero_1);
echo "<br>";
echo "----------------------------------";
echo "<br>";
$vuelo_1 = new Vuelo("Empresa1",50,1);
$vuelo_2 = new Vuelo("Empresa2",100,2);
echo "Agregar pasajeros:";
echo "<br>";
$vuelo_1->AgregarPasajero($pasajero_1);
echo "<br>";
$vuelo_1->AgregarPasajero($pasajero_2);
echo "<br>";
$vuelo_1->AgregarPasajero($pasajero_3);
echo "<br>";
echo "getInfo vuelo 1<br>";
echo $vuelo_1->getInfo();
echo "<br>";
echo "----------------------------------";
echo "<br>";
echo "Mostrar vuelo";
echo "<br>";
echo $vuelo_1->MostrarVuelo();
echo "<br>";
$vuelo_2->AgregarPasajero($pasajero_1);
$vuelo_2->AgregarPasajero($pasajero_3);
echo "Add<br>";
echo Vuelo::Add($vuelo_1,$vuelo_2);
echo "<br>";
echo "///////////////////////////////////////////////////";
echo count($vuelo_2->getListaDePasajeros());
var_dump($vuelo_2);
echo "<br>";
echo "<br>";
$objetoNuevo = Vuelo::Remove($vuelo_2,$pasajero_1);
echo "<br>";
echo "<br>";
echo count($objetoNuevo->getListaDePasajeros());
var_dump($objetoNuevo);



?>