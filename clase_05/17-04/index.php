<?php

$conexion = mysqli_connect("localhost","root","","ejemplo1");
$consulta = mysqli_query($conexion,"SELECT * FROM tablauno");
var_dump($consulta);
//$id = 2;
$filas = mysqli_fetch_object($consulta);
var_dump($filas);

?>
