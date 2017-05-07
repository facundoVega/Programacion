<?php
 include_once "persona.php";
class Empleado extends Persona
{
   

    protected $_legajo;
    protected $_sueldo;

    function __construct($nombre ,$apellido, $dni, $sexo, $sueldo, $legajo)
    {
           parent::__contruct($nombre ,$apellido, $dni, $sexo);           
            $this->_legajo=$legajo;
            $this->_sueldo=$sueldo;
    
    }

     function getLegajo()
        {
            return $this->_legajo;
        }

     function getSueldo()
        {
            return $this->_sueldo;
        }   
     function Hablar($idioma )
        {
            return  "el empleado habla". $idioma;
        }  

     function ToString()
        {

        }  
}


?>