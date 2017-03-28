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

        }

        public function AgregarImpuestos($monto){
           echo "se agrego".$monto;
           $this->_precio += $monto;
        }

        public static function MostrarAuto ($objAuto){
            
            echo $objAuto->_marca."<br>";
            echo $objAuto->_color."<br>";
            echo $objAuto->_precio."<br>";
            echo $objAuto->_fecha."<br>";
             
        }

        public function Equals ($objAuto1,$objAuto2){
            
            if($objAuto1->_marca == $objAuto2->_marca){
                return true;
            }

            return false;
        }

        public static function Add ($objAuto1,$objAuto2){
      
             if($objAuto1->_marca == $objAuto2->_marca && $objAuto1->_color == $objAuto2->_color){

                 return $objAuto1->_precio + $objAuto2->_precio;

             }
             else{

                 echo "No se pudo sumar ";
                 return 0;

             } 

        }



    }   

?>