<?php
include_once "Persona.php";
include_once "Empleado.php";
include_once "Fabrica.php";

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
echo $objEmpleado_1;
echo "<br>"; // toString() metodo magico 
echo "<b>Fabrica</b> <br>";
$objFabrica = new Fabrica ("pepito srl");
$objEmpleadoTest_1= new Empleado("lolo","Lopez",37765891,"M",54654,1000.00);
$objEmpleadoTest_2 = new Empleado("lala","Lopez",37765891,"M",54654,1000.00);

echo "<b>AgregarEmpleado()</b><br>";
$objFabrica->AgregarEmpleado($objEmpleadoTest_1);

echo "<b>EliminarEmpleado()</b><br>";
echo "False:";
$objFabrica->EliminarEmpleado($objEmpleadoTest_2);
echo "True: ";
$objFabrica->EliminarEmpleado($objEmpleadoTest_1);

echo "<b>EliminarRepetidos() y __toString()</b><br>";
$objFabrica->AgregarEmpleado($objEmpleadoTest_1);
$objFabrica->AgregarEmpleado($objEmpleadoTest_2);
echo"<b>lolo y lala :</b>".$objFabrica->__toString(); // con echo $obj lo llama = al tostring magico
$objFabrica->AgregarEmpleado($objEmpleadoTest_1);
$objEmpleadoTest_3= new Empleado("lili","Lopez",37765891,"M",54654,1000.00);
$objFabrica->AgregarEmpleado($objEmpleadoTest_3);
echo"<b>lolo , lala, lili </b>".$objFabrica->__toString();

echo "<b>CalcularSueldos()</b><br>";
echo "<b>deberia tener 3000 : </b>".$objFabrica->CalcularSueldos();




?>