<?php
include_once "FiguraGeometrica.php";
Class Triangulo extends FiguraGeometrica{

private $_base;
private $_altura;

public function __construct($base,$altura){
    $this->_base = $base;
    $this->_altura = $altura;
    $this->calcularDatos();

}

protected function calcularDatos(){
  $this->_superficie = ($this->_base * $this->_altura ) / 2;
  $this->_perimetro = $this->_base * 3;
}

public function Dibujar(){
//utilizar this color de fig geo
}



}

?>