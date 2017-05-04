<?php

$archivoRef = fopen('http://localhost/Programacion/clase_03/Resueltos/1/palabras.txt','r');

$txtLine = "";

while(!feof($archivoRef)){
    $txtLine .= fgets($archivoRef);
    
    
}
$arrayLineas = explode("\n",$txtLine);

$arrayFinal = array();

for($i=0;$i<count($arrayLineas);$i++){
    array_push($arrayFinal,explode(" ",$arrayLineas[$i]));
}

foreach($arrayFinal as $palabra){
    foreach ($palabra as $item){
        echo "<b>".$item."</b></br>";
        echo "--------<br>";
    }
}
?>