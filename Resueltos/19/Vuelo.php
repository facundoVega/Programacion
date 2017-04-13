<?php
include_once "Pasajero.php";

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

public function getListaDePasajeros(){
    return $this->$_listaDePasajeros;
}

public function getPrecio(){
    return $this->$_precio;
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


public static function Add($objVuelo_1,$objVuelo_2){

   $recaudadoVuelo_1 = 0;
   $listaDePasajeros_1 = $objVuelo_1->getListaDePasajeros();

   $recaudadoVuelo_2 = 0;
   $listaDePasajeros_2 = $objVuelo_2->getListaDePasajeros();
    

   for($i=0; $i<count($listaDePasajeros_1); $i++){

       if($listaDePasajeros_1[$i]->getEsPlus()){

           $descuento = (20*$objVuelo_1->getPrecio())/100; // 20% de descuento el pasajero es plus
           $recaudadoVuelo_1 += $objVuelo_1->getPrecio() - $descuento;

       }else{
           $recaudadoVuelo_1 += $objVuelo_1->getPrecio();
       }

   }

    for($j=0; $j<count($listaDePasajeros_2); $j++){

        if($listaDePasajeros_2[$j]->getEsPlus()){

            $descuento_2 = (20*$objVuelo_2->getPrecio())/100; // 20% de descuento el pasajero es plus
            $recaudadoVuelo_2 += $objVuelo_2->getPrecio() - $descuento2;

        }else{

            $recaudadoVuelo_2 += $objVuelo_2->getPrecio();
        }

    }
    return $recaudadoVuelo_1 + $recaudadoVuelo_2;
}


public static function Remove ($objVuelo,$objPasajero){

    $listaDePasajeros = $objVuelo->getListaDePasajeros();
     for($i=0; $i<count($listaDePasajeros); $i++){

           if($listaDePasajeros[$i].Equals($objPasajero)){
              unset($objVuelo->getListaDePasajeros()[$i]);
              echo "Se elimino pasajero";
           }
     }
  return $objVuelo;
}




}

?>