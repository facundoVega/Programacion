<?php

$miArray = array();
$miArray[0]='H';
$miArray[1]='O';
$miArray[2]='L';
$miArray[3]='A';

$nuevoArray = InvertirPalabra($miArray);

var_dump($nuevoArray);

 function InvertirPalabra($arrayCaracteres){

    return array_reverse($arrayCaracteres);
}

?>