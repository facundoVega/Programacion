<?php
include_once "Empleado.php";

$archivo = fopen('empleados.txt','r');
$arrayEmpleados = array();

while(!feof($archivo)){
    $txtLine = fgets($archivo);
    if($txtLine !== FALSE){
        $vecDatos = explode("-",$txtLine);
        $empleado = new Empleado($vecDatos[0],$vecDatos[1],$vecDatos[2],$vecDatos[3],$vecDatos[4],$vecDatos[5]);
        $empleado->setPathFoto($vecDatos[6]."-".$vecDatos[7]);
        array_push($arrayEmpleados,$empleado);
        
    }
}

fclose($archivo);
var_dump($arrayEmpleados);
foreach ($arrayEmpleados as $empleado){
   echo $empleado->ToString()."<br>";
   echo "<img src='".$empleado->getPathFoto()."'height='100' width='100'>";
   echo "<br>";
}
?>