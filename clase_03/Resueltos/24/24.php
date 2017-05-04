<?php

include_once "Enigma.php";

$encriptosn = Enigma::Encriptar('Hola Perro Casa Tio','Encriptado.txt');

if($encriptosn){
   echo "<b>El msg fue encriptado correctamente</b>";
}
else{
    echo "<b>El msg no fue encriptado correctamente</b>";
}
echo "<br>";

echo "Texto Desencriptado:(el 8 es \n )<br>";
echo Enigma::Desencriptar('Encriptado.txt');

?>