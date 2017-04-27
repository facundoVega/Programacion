<?php
$arrayIndexado = array(array('Azul','Big','Fino',5),array('Rojo','Big','Fino',5),array('Verde','Big','Fino',5));
$arrayAsociativo = array(
                            'ArrayUno' => array('color'=>'Azul','marca'=>'Big','trazo'=>'fino','precio'=>5),
                            'ArrayDos' => array('color'=>'Rojo','marca'=>'Big','trazo'=>'fino','precio'=>5),
                            'ArrayTres' => array('color'=>'Verde','marca'=>'Big','trazo'=>'fino','precio'=>5)

                        );

echo "<b>Array Indexado :</b><br>";
foreach($arrayIndexado as $item){
    echo "<br>";
    echo $item[0].'<br>';
    echo $item[1].'<br>';
    echo $item[2].'<br>';
    echo $item[3].'<br>';
    echo "-------------";
}


echo "<br>";
echo "<b>Array Asociativo :</b><br>";

foreach ($arrayAsociativo as $clave => $valor){
      
      echo $clave."=".$valor['color']."<br>";
      echo $clave."=".$valor['marca']."<br>";
      echo $clave."=".$valor['trazo']."<br>";
      echo $clave."=".$valor['precio']."<br>";
      echo "----------------------------<br>";
}

?>