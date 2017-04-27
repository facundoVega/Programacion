<?php

$vec = array(1,2,3);
unset($vec[1]);
var_dump($vec);
////se borra el indice 1 y queda 0,2 el array queda mal y despues no se puede recorrer con for ej
///solucion
$vec2 = array(1,2,3);
unset($vec2[1]);
$vecAux = array_values($vec2);
$vec2 = $vecAux;
echo "<br><b>Solucion</b><br>";
var_dump($vec2);

?>