<?php
include_once "FiguraGeometrica.php";
Class Rectangulo extends FiguraGeometrica{

private $_ladoUno;
private $_ladoDos;

public function __construct($ladoUno,$ladoDos){
    $this->_ladoUno = $ladoUno;
    $this->_ladoDos = $ladoDos;
    $this->CalcularDatos();

}

protected function calcularDatos(){
  $this->_superficie = $this->_ladoUno * $this->_ladoDos;
  $this->_perimetro = ($this->_ladoUno * 2) + ($this->_ladoDos * 2);
}

public function Dibujar(){
 if(empty($this->_color)){
   $this->_color = 'red';
   echo "<br>sin color, rojo por default<br>";
}
 $contenido  = "<font color='".$this->_color."'>";
 $contenido .= "*******<br>";
 $contenido .= "*******<br>";
 $contenido .= "*******<br>";
 $contenido .= "</font>";
 //echo htmlspecialchars($contenido);
 return $contenido;
}



public function __toString(){ // magic function
  $txt = parent::__toString();
  $txt .= " LADO 1: ".$this->_ladoUno." LADO 2: ".$this->_ladoDos;
  return $txt;

}

}

?>