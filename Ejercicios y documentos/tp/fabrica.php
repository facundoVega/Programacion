<?php

    include_once "persona.php";
    include_once "empleado.php";

    class Fabrica  extends Empleado
    {
        private $_empleados;
        private $_razonSocial;

        function __construct($razonSocial)
        {
           
           $this->_razonSocial = $razonSocial;
           $this->_empleados = array();
            
        }

        function  AgregarEmpleados($persona)
        {   
            echo "<br>";
            var_dump($persona);
            echo "<br>";
           array_push($this->_empleados, $persona);
           return true;
        }

        function CalcularSueldos()
        {

            return double;
        }

        function EliminarEmpleado($persona)
        {
            unset($persona);
            return true;
        }

        private function EliminarEmpleadosRepetidos()
        {
             array_unique($this);
        }

        function ToString()
        {
             $aux='';
            foreach( $this->_empleados as $item)
            {
                
                $aux =  $item->_nombre. "-" . $item->_apellido. "-"  . $item->_dni. "-" .$item->_sexo."-" . $item->_legajo."-" . $item->_sueldo;
            }
            return $aux;

        }

        function GuardarFabrica()
        {

           $fp= fopen("fabrica.txt", "a");
           $aux = $this->ToString();
            fwrite($fp , $aux );
            fclose($fp);
            
           
        }

        function LeerFabrica()
        {
            $fr = fopen("fabrica.txt", "r");
            $str = fread($fr, filesize("fabrica.txt"));

            echo $str;
            
            fclose($fr);
            



        }







    }
   



?>