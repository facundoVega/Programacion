<?php

$archivoRef = fopen('palabras.txt','r');

$arrayLineas = array();
$arrayPalabras = array();

$cant_1 = 0;
$cant_2 = 0;
$cant_3 = 0;
$cant_4 = 0;
$cant_others = 0;

while(!feof($archivoRef)){
    array_push($arrayLineas,fgets($archivoRef));   
}


foreach($arrayLineas as $linea){
   // echo $linea."<br>";
   
    $vec = explode(" ",$linea);
    array_push($arrayPalabras,$vec);

}

foreach($arrayPalabras as $vec){
    foreach($vec as $palabra){
       // echo trim($palabra)."<br>";
       $str = trim($palabra);
       acumularPorCantidad($str);

    }
}

echo "<b>Palabras con 1 letras: ".$cant_1."<br>".
     "Palabras con 2 letras: ".$cant_2."<br>".
     "Palabras con 3 letras: ".$cant_3."<br>".
     "Palabras con 4 letras:".$cant_4."<br>".
     "Palabras con mas letras:".$cant_others."<br></b>";

function acumularPorCantidad($str){

global $cant_1,$cant_2,$cant_3,$cant_4,$cant_others; 
/*
scope php:para utilizar variables declaradas fuera de la funcion  dentro de la funcion  estas deben ser declaradas 
como globales dentro de la funcion . sino se produce error de tipo  Undefined variable ya que intenta buscar 
variables declaradas con ese nombre pero dentro de la funcion . el scope es diferente a c# ej. las variables 
no estan automaticamente disponibles en las funciones.
*/

 $cantidadDeCaracteres = strlen($str);

    switch ($cantidadDeCaracteres){
        case 1:
            $cant_1 ++;
        break;

        case 2:
            $cant_2 ++;
        break;

        case 3:
            $cant_3 ++;
        break;

        case 4:
            $cant_4 ++;
        break;

        default:
            $cant_others ++;
        break;
    }
}


?>