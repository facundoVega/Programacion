<?php
include_once "Triangulo.php";
include_once "Rectangulo.php";

echo "TRIANGULO<br>";
$objTriangulo = new Triangulo (2,2);
echo $objTriangulo; //__toString();
$objTriangulo->setColor('blue');
echo "<br>";
echo $objTriangulo;
echo $objTriangulo->Dibujar();
echo "<br>";
echo "RECTANGULO<br>";
$objRectangulo = new Rectangulo  (1,2);  
echo $objRectangulo;
$objRectangulo->setColor('orange');
echo "<br>";
echo $objRectangulo;
echo "<br>";
echo $objRectangulo->Dibujar();

?>