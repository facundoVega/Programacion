<?php

include_once "Operario.php";
include_once "Fabrica.php";

$objOperario_1 = new Operario(1,"lopez","martin");
$objOperario_2 = new Operario(2,"rodriguez","lucas");
$objOperario_3 = new Operario(2,"rodriguez","lucas");


$objFabrica_1 = new Fabrica("caho srl",2);

echo "TEST CLASE OPERARIO:<BR>";
echo "1 - Mostrar de instancia<br>"; 
echo $objOperario_1->Mostrar();
echo "<br>";
echo "2- Mostrar estatico<br>"; // 2 func mismo nombre misma clase sobrecarga?
echo Operario::Mostrar2($objOperario_2);
echo "3- Equals operario (true)<br>";
echo $objOperario_2->Equals($objOperario_3);
echo "3- Equals operario (false)<br>";
echo $objOperario_1->Equals($objOperario_3);
echo "-----------------------------<br>";


?>