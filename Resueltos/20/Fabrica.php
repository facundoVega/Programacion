<?php

include_once "Operario.php";

private $_cantMaxOperarios;
private $_operarios;
private $_razonSocial;

public function __construct($razonSocial,$cantMaxOperarios=5){ //opcional

    $this->_razonSocial = $razonSocial;
    $this->cantMaxOperarios=$cantMaxOperarios;
    $this->_operarios = array();
}

public function getOperarios(){
    return $this->_operarios;
}

private function retornarCostos(){

    $dinero = 0;

    for($i=0; $i<count($this->_operarios); $i++){
        $dinero += $this->_operarios[$i]->GetSalario();
    }

 return $dinero;
}

private function MostrarOperarios(){

   foreach($this->operarios as $item){

       $item->Mostrar();
       echo "<br>";

   }
}

public static function  MostrarCostos($objFabrica){

   echo "Costos: ".$objFabrica->retornarCostos();

}

public static function Equals($objFabrica,$objOperario){

     for($i = 0 ; $i<count(objFabrica.getOperarios()) ; $i++){

         if(objFabrica.getOperarios()[$i].Equals($objOperario)){ //revisar
            return true;
         }
     }
 return false;
}

public function Add($objOperario){

    if(Fabrica::Equals($this,$objOperario) == false && count($this->_operarios)<$this->_cantMaxOperarios) {
        array_push($this->_operarios,$objOperario);
        echo "Se agrego operario a la fabrica";
        return true;
    }

 echo "No se pudo agregar operario a la fabrica";
 return false;
}

?>