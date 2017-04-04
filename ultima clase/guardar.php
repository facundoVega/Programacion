<?php
//var_dump($_REQUEST); REQUEST TOMA TODOS TANTO GET Y POST
//var_dump($_POST); // Toma solo post
$nombre = $_POST['nombre'];
$archivo = $_POST
//var_dump($nombre);
echo $nombre;

$file = fopen("data.txt","w");
fwrite($file,$nombre);
fclose($file);

?>