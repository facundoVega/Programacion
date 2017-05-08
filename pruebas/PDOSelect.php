<?php
//utilizar ->query , ->exec para selects que no necesitan parametros
// conexion y ejemplo select 
try {
$objetoPDO = new PDO('mysql:host=localhost;dbname=UTN;charset=utf8', 'root', '',array(PDO::ATTR_EMULATE_PREPARES => false,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$objetoPDO->exec('SET CHARACTER SET utf8');
echo "<b>Se conecto</b><br>";

$sql = $objetoPDO->query('SELECT pNombre AS nombre, pNumero AS numero, Precio AS precio,Tamaño AS tamaño FROM productos');
$cantidadFilas = $sql->rowCount();
echo "<b>Se recuperaron ".$cantidadFilas." filas</b><br>";
/* while ($fila = $sql->fetch(PDO::FETCH_NUM)) solo por indice
   while ($fila = $sql->fetch(PDO::FETCH_ASSOC))solo por asoc*/
$resultado = $sql->fetchall(); // recupera tanto por indice como por indice asociativo
foreach ($resultado as $fila) {
         echo $fila[0].','.$fila[1].','.$fila[2].','.$fila[3]."<br>";
         echo $fila['nombre'].','.$fila['numero'].','.$fila['precio'].','.$fila['tamaño']."<br>";
         echo "<b>-------------------------------------------------</b><br>";
        

}

}
catch(PDOException $e){
  echo  $e->getMessage();
}
?>
