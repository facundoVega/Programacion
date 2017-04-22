<?php
Class Opearario{


private $_apellido;
private $_legajo;
private $_nombre;
private $_salario;

public function  __construct($legajo,$apellido,$nombre,$salario=1000){

    $this->_legajo = $legajo;
    $this->_apellido = $apellido;
    $this->_nombre = $nombre;
    $this->_salario= $salario;
}

public function GetSalario(){
    return $this->_salario;
}
public function SetAumentarSalario($porcentaje){

    $aumento = ($porcentaje * $this->GetSalario()) /100;
    $this->_salario += $aumento;

}

public function GetNombreApellido(){
    return $this->_nombre.','.$this->_apellido;
}
public function Mostrar(){
    return $this->GetNombreApellido().','.$this->_legajo.','.$this->_salario;
}
public static function Mostrar($objOperario){
    return $objOperario->Mostrar();
}
public function Equals($objOperario){

    if(strcmp($this->Mostrar(),$objOperario->Mostrar()) == 0){ // verifica tambien mayusculas/minusculas
        return true;
    }
 return false;
}


}
?>