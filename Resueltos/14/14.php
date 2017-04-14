<?php

esPar(10);
echo "<br>";
esImpar(5);

 function esPar($numero){
    if(($numero % 2) == 0){
        echo "es par";
        return true;
    }
 echo "No es par";
 return false;
}

 function esImpar($numero){
    if(esPar($numero) == false){
        echo " es impar";
        return true;
    }
 echo "No es impar "; 
 return false;
}

?>