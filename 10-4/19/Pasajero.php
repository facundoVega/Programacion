<?php

Class Pasajero{

private $_apellido;
private $_nombre;
private $_dni;
private $_esPlus;

public function Pasajero ($apellido,$nombre,$dni,$esPlus){

    $this->_apellido = $apellido;
    $this->_nombre = $nombre;
    $this->_dni = $dni;
    $this->_esPlus = $esPlus;

}

public function Equals ($objPasajero){
    if($this->_dni == $objPasajero->_dni){
        return true;
    }
 return false;
}

public function getInfoPasajero(){
   return "Apellido: ".$this->_apellido." Nombre: ".$this->_nombre." dni: ".$this->_dni." es plus: ".$this->_esPlus;
}

public static function MostrarPasajero(){

}

}

?>