<?php

Class Pasajero{

private $_apellido;
private $_nombre;
private $_dni;
private $_esPlus;

public function __construct ($apellido,$nombre,$dni,$esPlus){

    $this->_apellido = $apellido;
    $this->_nombre = $nombre;
    $this->_dni = $dni;
    $this->_esPlus = $esPlus;

}

public function getDni(){
    return $this->_dni;
}

public function getEsPlus(){
    return $this->_esPlus;
}

public function Equals ($objPasajero){
    if($this->_dni == $objPasajero->getDni()){
        return true;
    }
 return false;
}

public function getInfoPasajero(){
   return "Apellido: ".$this->_apellido." Nombre: ".$this->_nombre." dni: ".$this->_dni." es plus: ".$this->_esPlus;
}

public static function MostrarPasajero(){
    echo $this->_apellido."<br>";
    echo $this->_nombre."<br>";
    echo $this->_dni."<br>";
    echo $this->_esPlus."<br>";
}

}

?>