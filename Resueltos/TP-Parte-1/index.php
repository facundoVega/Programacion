<?php
include_once "Persona.php";
include_once "Empleado.php";

$objEmpleado_1 = new Empleado("Matias","Lopez",37765891,"M",54654,1000.00);

echo "GETS:<br>";
echo "Nombre: ".$objEmpleado_1->getNombre()."<br>";
echo "Apellido: ".$objEmpleado_1->getApellido()."<br>";
echo "Dni: ".$objEmpleado_1->getDni()."<br>";
echo "Sexo: ".$objEmpleado_1->getSexo()."<br>";
echo "Legajo: ".$objEmpleado_1->getLegajo()."<br>";
echo "Sueldo: ".$objEmpleado_1->getSueldo()."<br>";
echo "<br>";
echo "Hablar()<br>";
echo $objEmpleado_1->Hablar('Español')."<br>";
echo "toString()<br>";
echo $objEmpleado_1; // toString() metodo magico 
?>