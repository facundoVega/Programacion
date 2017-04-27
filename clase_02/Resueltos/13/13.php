
<?php

echo invertirPalabra("Parcial",4);
echo "<br>";
echo invertirPalabra("Parcial",10);

    function invertirPalabra($palabra,$max){
        if(strlen($palabra) <= $max){
            
           if(strcmp($palabra,"Recuperatorio") == 0 ||
              strcmp($palabra,"Parcial") == 0 ||
              strcmp($palabra,"Programacion") == 0 ){
                  
                  return 1;
              }
              
        }
        else{
            echo "supera el maximo de caracteres";
            return 0;
        }
    }


?>