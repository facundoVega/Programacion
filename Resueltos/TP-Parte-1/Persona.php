<?php

abstract Class Persona{

private $_apellido;
private $_dni;
private $_nombre;
private $_sexo;

public function __construct($apellido,$dni,$nombre,$sexo){ // es necesario el constructor con los parametros en clase abstracta?
    echo "consutrctor persona<br>";
    $this->_apellido = $apellido;
    $this->_dni = $dni;
    $this->_nombre = $nombre;
    $this->_sexo = $sexo;
}

public function getApellido(){
    return $this->_apellido;
}
public function getDni(){
    return $this->_dni;
}
public function getNombre(){
    return $this->_nombre;
}
public function getSexo(){
    return $this->_sexo;
}

public abstract function Hablar($idioma);

public function __toString(){ // utilizar metodo magico o normal?
 $txt = array(" Nombre: ".$this->_nombre," Apellido: ".$this->_apellido," Dni: ".$this->_dni," Sexo: ".$this->_sexo);
 return implode("-",$txt);
}

}

?>