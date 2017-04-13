<?php

Class Vuelo{

private $_fecha;
private $_empresa;
private $_precio;
private $_listaDePasajeros;
private $_cantidadMaxima;

public function __construct ($empresa,$precio,$cantidadMaxima=null){

        $this->_fecha = date('d/m/Y');
        $this->_empresa = $empresa;
        $this->_precio = $precio;
        $this->_cantidadMaxima = $_cantidadMaxima;
        $this->_listaDePasajeros = array();
       
}

public function getCantidadMaxima(){
    return $this->_cantidadMaxima;
}

public function getInfo(){
   $cadena = '';
   $cadena.="Fecha: ".$this->_fecha." ";
   $cadena.="Empresa: ".$this->$_empresa." ";
   $cadena.="Precio: ".$this->$_precio." ";
   $cadena.="Cantidad Maxima: ".$this->$_cantidadMaxima." ";

   for($i=0; $i<count($this->_listaDePasajeros); $i++){
       $cadena.="Info pasajero ".$i.": ".$this->_listaDePasajeros[$i]->getInfoPasajero();
       $cadena.="///";
   }
   return $cadena;
}

public function AgregarPasajero($objPasajero){

    for($i=0; $i<count($this->_listaDePasajeros); $i++){

            if($this->_listaDePasajeros[$i].Equals($objPasajero)){
                continue;
            }else{
                if(count($this->_listaDePasajeros) < $this->_cantidadMaxima){
                        array_push($this->_listaDePasajeros,$objPasajero);
                        return true;
                }
                
            }
    
    }    
    return false;
}

public function MostrarVuelo(){
    
   echo "Fecha: ".$this->_fecha."<br>";
   echo "Empresa: ".$this->$_empresa."<br>";
   echo "Precio: ".$this->$_precio."<br>";
   echo "Cantidad Maxima: ".$this->$_cantidadMaxima."<br>";

   for($i=0; $i<count($this->_listaDePasajeros); $i++){
       echo "Info pasajero ".$i.": ".$this->_listaDePasajeros[$i]->getInfoPasajero()."<br>";
       echo "--------------<br>";
   }
}


}

?>