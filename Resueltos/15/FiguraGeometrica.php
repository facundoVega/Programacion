<?php

abstract class FiguraGeometrica
{
    
    protected $_color;
    protected $_perimetro;
    protected $_superficie;

    public function getColor(){
        return $this->_color;
    }
    public function setColor($color){
        $this->_color=$color;
    }

    abstract public function Dibujar();
    abstract protected function CalcularDatos();

   public function toString(){
       
   }

}


?>