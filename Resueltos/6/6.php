<?php
 $numeros = array();
 $sum = 0;

for($i=0;$i<5;$i++){
    
    $numeros[$i] = rand(1,10);
    $sum+=$numeros[$i];
}

$promedio = $sum / 5;

if($promedio > 6){
    echo "El promedio es mayor que 6 ".$promedio;
}
else if ($promedio == 6 ){
    echo "El promedio es igual a 6 ".$promedio;
}
else{
    echo "El promedio es menor que 6 ".$promedio;
}

?>