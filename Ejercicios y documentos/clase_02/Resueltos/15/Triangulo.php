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
 if(empty($this->_color)){
   $this->_color = 'red';
   echo "<br>sin color, rojo por default<br>";
}
 $contenido  = "<font color='".$this->_color."'>";
 $contenido .= "<p>";
 $contenido .= "  *<br>";
 $contenido .= " ***<br>";
 $contenido .= "*****<br>";
 $contenido .= "</p>";
 $contenido .= "</font>";
 //echo htmlspecialchars($contenido);
 return $contenido;
}

public function __toString(){ // magic function
  $txt = parent::__toString();
  $txt .= " BASE: ".$this->_base." ALTURA: ".$this->_altura;
  return $txt;

}

}

?>