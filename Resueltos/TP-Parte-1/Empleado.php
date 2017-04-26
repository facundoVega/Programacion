<?php
include_once "Persona.php";

Class Empleado extends Persona{

protected $_legajo;
protected $_sueldo;

    public function __construct($nombre,$apellido,$dni,$sexo,$legajo,$sueldo){
        echo "consutrctor empleado<br>";
        parent::__construct($apellido,$dni,$nombre,$sexo);
        $this->_legajo = $legajo;
        $this->_sueldo = $sueldo;
        

    }


    public function getLegajo(){
        return $this->_legajo;
    }
    public function getSueldo(){
        return $this->_sueldo;
    }
    public function Hablar($idioma){
        return "El empleado habla ".$idioma;
    }
    public function __toString(){
        $vectxt = array(" Legajo: ".$this->_legajo," Sueldo: ".$this->_sueldo);
        $txt1 = implode("-",$vectxt);
        $txt2 = parent::__toString();
        return $txt1.'-'.$txt2;
        
    }
}

?>