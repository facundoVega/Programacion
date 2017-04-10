<?php
include_once "Auto.php";

  Class Garage{

      private $_razonSocial;
      private $_precioPorHora;
      private $_autos;

      public function __construct ($razonSocial,$precioPorHora=0){
            
            $this->_razonSocial = $razonSocial;
            $this->_precioPorHora = $precioPorHora;
            $this->_autos = array();
      }

      public function MostrarGarage(){

          echo "Razon social: ".$this->_razonSocial."<br>";
          echo "Precio por Hora: ".$this->_precioPorHora."<br>";
          echo "-----<br>";
         /* for($i=0;$i<count($this->_autos);$i++){
             
              echo "Marca: ".$this->_autos[$i]->getMarca()."<br>";
              echo "Color: ".$this->_autos[$i]->getColor()."<br>";
              echo "Precio: ".$this->_autos[$i]->getPrecio()."<br>";
              echo "Fecha: ".$this->_autos[$i]->getFecha()."<br>";
              echo "------------------------<br>";         

          } unset deja mal los indices despues de borrar y tira error al entrar en un get*/
          foreach ($this->_autos as $item) {
               echo "Marca: ".$item->getMarca()."<br>";
               echo "Color: ".$item->getColor()."<br>";
               echo "Precio: ".$item->getPrecio()."<br>";
               echo "Fecha: ".$item->getFecha()."<br>";
               echo "------------------------<br>";      
          }
         
      }

      public function Equals($objAuto){
           
           for($i=0;$i<count($this->_autos);$i++){
               if($this->_autos[$i]->Equals($objAuto)){
                   return true;
               }
           }
           return false;
      }

      public function Add ($objAuto){
         if($this->Equals($objAuto) == false){
           array_push($this->_autos,$objAuto);
           echo "Se agrego auto al garage <br>";
         }else{
             echo "El auto ya se encuentra en el garage <br>";
         }
      }

      public function Remove ($objAuto){

         if($this->Equals($objAuto)){

            for($i=0;$i<count($this->_autos);$i++){
                 if($this->_autos[$i]->Equals($objAuto)){
                     unset($this->_autos[$i]);
                     echo "se elimino auto del garage <br>";
                }
             }
         }else{
           echo "el auto no se encuentra en el garage <br>";
         }
        
      }


  }
?>