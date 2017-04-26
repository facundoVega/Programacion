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
   
    $start = count($this->_empleados); // num de elementos en el array antes de modificar 
    $finish = array_push($this->_empleados,$objEmpleado);// retorna num de elementos en el array despues de modificar 
    $this->EliminarRepetidos(); // verificar que este bien aca 
    if($finish > $start){
        return true;
    }

 return false; 
}

public function CalcularSueldos(){

    $total = 0;

    for($i=0;$i<count($this->_empleados);$i++){
       $total +=  $this->_empleados[$i]->getSueldo();
    }

return $total;

}
public function EliminarEmpleado(Empleado $objEmpleado){ // tengo que buscarlo comparando objetos o directamente le paso el indice por parametro ?

}

private function EliminarRepetidos(){
    $this->_empleados = array_unique($this->_empleados); //funciona con objs?
}

public function __toString(){ // no tiene que ser metodo magico 

$txt = 'Razon Social: '.$razonSocial.' - ';
    foreach($this->_empleados as $empleado){
        $txt.=  $empleado->__toString();// voy a tener que crear el ToString() no magico a menos que encuentre una manera de invocarlo manualmente el metodo magico 
    }

return $txt;
}

}

?>