<?php
include_once "Empleado.php";
Class Fabrica{

private $_empleados;
private $_razonSocial;

public function __construct($razonSocial){
    $this->_razonSocial = $razonSocial;
    $this->_empleados = array();
}
/*
 se puede poner el tipo en el parametro o instance of para asegurarse de que sea de ese tipo
 solo con clases o array o self .(int ,string,bool,float no. php 7). 
  si no pide verificar tipo recibido por parametro no ponerlo
*/
public function AgregarEmpleado(Empleado $objEmpleado){ 
   
    $startNumber = count($this->_empleados); // num de elementos en el array antes de modificar 
    $finishNumber = array_push($this->_empleados,$objEmpleado);// retorna num de elementos en el array despues de modificar 
    $this->EliminarRepetidos(); 
    if($finishNumber > $startNumber){ // creo que es innecesario fijarse de sacarlo 
        echo "Se agrego un empleado<br>";
        return true;
    }

 return false; 
}

public function CalcularSueldos(){

    $total = 0;
/* rompe por unset de esta forma utilizar foreach aunque con array_values se arreglo
    for($i=0;$i<count($this->_empleados);$i++){
       $total +=  $this->_empleados[$i]->getSueldo();
    }
*/
    foreach($this->_empleados as $empleado){
        $total += $empleado->getSueldo();
    }
return $total;

}
public function EliminarEmpleado(Empleado $objEmpleado){ // se podria utilizar $key=array_search($objEmpleado,$this->_empleados);
        for($i=0;$i<count($this->_empleados);$i++){
            if($this->_empleados[$i] == $objEmpleado){
                unset($this->_empleados[$i]);
                $this->_empleados = array_values($this->_empleados); // siempre que elimino reorganizar indices del array
                echo "Se elimino empleado<br>";
                return true;
            }

        }
echo "No se elimino empleado<br>";
return false;

}
/*
function EliminarEmpleado(Empleado $persona)
	{
		$index = array_search($persona, $this->_empleados);
		 if(false !== $index)	
		 {
			unset($this->_empleados[$index]);
			$arrayReindexado = array_values($this->_empleados);
			$this->_empleados = $arrayReindexado;
		 }	
	}
*/
private function EliminarRepetidos(){

    $this->_empleados = array_values(array_unique($this->_empleados,SORT_REGULAR)); //andaba sin el sort_regular x el tostring magico sino no anda ponerlo.
    
}


public function __toString(){ 

$txt = 'Razon Social: '.$this->_razonSocial.' - ';

    foreach($this->_empleados as $empleado){
        $txt.=  $empleado->__toString().'<br>'; // se puede llamar manualmente el metodo magico tambien 
    }
    
return $txt;
}


}

?>