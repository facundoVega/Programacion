<?php

    class Auto 
    {
      
        private $_color;
        private $_precio;
        private $_marca;
        private $_fecha;

        function __construct ($marca,$color,$precio=0,$fecha=0){ // = opcionales 

         $this->_marca = $marca;
         $this->_color = $color;
         $this->_precio= $precio;
         $this->_fecha= $fecha;

        }

        public function getMarca(){
            return $this->_marca;
        }
        public function getColor(){
            return $this->_color;
        }
        public function getPrecio(){
            return $this->_precio;
        }
        public function getFecha(){
            return $this->_fecha;
        }

        public function AgregarImpuestos($monto){
           $this->_precio += $monto;
           echo "se agrego ".$monto;
        }
                     

        public static function MostrarAuto ($objAuto){
           
           echo $objAuto->getColor();
           echo "<br>";
           echo $objAuto->getMarca();
           echo "<br>";
           echo $objAuto->getPrecio();
           echo "<br>";
           echo $objAuto->getFecha();
             
        }
        
       public function Equals($objAuto){
           if($this->getMarca() == $objAuto->getMarca()){
               return true;
           }
         return false;
       }

        public static function Add ($objAuto1,$objAuto2){
      
             if($objAuto1->getMarca() == $objAuto2->getMarca() && $objAuto1->getColor() == $objAuto2->getColor()){

                 return $objAuto1->getPrecio() + $objAuto2->getPrecio();

             }
             else{

                 echo "No se pudo sumar ";
                 return 0;

             } 

        }



    }   

?>