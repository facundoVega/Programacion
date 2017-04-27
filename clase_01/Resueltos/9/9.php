<?php

$lapicera = array(

  'color'=>'Azul',
  'marca'=>'Big',
  'trazo'=>'fino',
  'precio'=>5

);
$lapicera_2 = array(

  'color'=>'Rojo',
  'marca'=>'Big',
  'trazo'=>'fino',
  'precio'=>10

);
$lapicera_3 = array(

  'color'=>'Verde',
  'marca'=>'Big',
  'trazo'=>'fino',
  'precio'=>15

);
echo "Lapicera<br>";
foreach ($lapicera as $key => $value) {
    
    echo $key."=".$value."<br>";
}
echo "Lapicera 2<br>";
foreach ($lapicera_2 as $key => $value) {
    
    echo $key."=".$value."<br>";
}
echo "Lapicera 3<br>";
foreach ($lapicera_3 as $key => $value) {
    
    echo $key."=".$value."<br>";
}

?>