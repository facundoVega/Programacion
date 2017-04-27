 <?php
 $numeros = array();
 $i=1;
 $cont=0;

 while(count($numeros)<10){
     if($i%2 != 0){
         array_push($numeros,$i);
     } 
     $i++;
 }

for($j=0;$j<count($numeros);$j++){
    echo $numeros[$j]."<br>";
}

echo "<br>";

while($cont<count($numeros)){
  echo $numeros[$cont]."<br>";
  $cont ++;
}

echo "<br>";

foreach ($numeros as $item) {
   echo $item."<br>"; 
}
echo "<br>";

 ?>