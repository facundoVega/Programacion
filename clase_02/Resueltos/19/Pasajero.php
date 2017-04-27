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

public function getNombre(){
    return  $this->_nombre;
}

public function getApellido(){
    return  $this->_apellido;
}
public function Equals ($objPasajero){
    if($this->_dni == $objPasajero->getDni()){
        echo "son iguales";
        return true;
        
    }
    echo"no son iguales";
 return false;
}

public function getInfoPasajero(){
    if($this->_esPlus){
        $esPlus="si";
    }else{
        $esPlus="no";
    }
   return "Apellido: ".$this->_apellido." Nombre: ".$this->_nombre." dni: ".$this->_dni." es plus: ".$esPlus;
}

public static function MostrarPasajero($objPasajero){
    echo "Apellido: ".$objPasajero->getApellido()."<br>";
    echo "Nombre: ".$objPasajero->getNombre()."<br>";
    echo "Dni: ".$objPasajero->getDni()."<br>";
    echo "Es Plus: ".$objPasajero->getEsPlus()."<br>";
}

}

?>