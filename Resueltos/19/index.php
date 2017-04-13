<?php

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
$pasajero_1->getInfoPasajero();
echo "<br>";


?>