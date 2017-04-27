<?php
include_once "Operario.php";

Class Fabrica{

private $_cantMaxOperarios;
private $_operarios;
private $_razonSocial;

public function __construct($razonSocial,$cantMaxOperarios=5){ //opcional

    $this->_razonSocial = $razonSocial;
    $this->_cantMaxOperarios=$cantMaxOperarios;
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

private function MostrarOperarios(){ // private ??

   foreach($this->_operarios as $item){
 
       echo $item->Mostrar();
       echo "<br>";

   }
  
}

public static function  MostrarCostos($objFabrica){

   echo "Costos: ".$objFabrica->retornarCostos();

}

public static function Equals($objFabrica,$objOperario){

     for($i = 0 ; $i<count($objFabrica->getOperarios()) ; $i++){

         if($objFabrica->getOperarios()[$i]->Equals($objOperario)){ //ok
            return true;
         }
     }
 return false;
}

public function Add($objOperario){

    if( Fabrica::Equals($this,$objOperario) == false && count($this->_operarios) < $this->_cantMaxOperarios) { 
        array_push($this->_operarios,$objOperario);
        echo "Se agrego operario a la fabrica<br>";
        return true;
    }

 echo "No se pudo agregar operario a la fabrica<br>";
 return false;
}

public function Remove ($objOperario){

    if(Fabrica::Equals($this,$objOperario)){

        for($i = 0;$i<count($this->_operarios);$i++){

            if($this->_operarios[$i]->Equals($objOperario)){
                unset($this->_operarios[$i]);
                echo "Se elimino operario de la fabrica";
                return true;
            }
        }

    }
 echo "No se pudo eliminar operario de la fabrica";
 return false;
}


}
?>