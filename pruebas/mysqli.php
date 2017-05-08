<?php
//http://www.smipple.net/snippet/feippe/Conectar%20y%20recorrer%20resultados%20en%20MySQL%20con%20PHP EJEMPLO
// http://www.aprenderaprogramar.com/index.php?option=com_content&view=article&id=612:php-consultas-mysql-mysqliconnect-selectdb-query-fetcharray-freeresult-close-ejemplos-cu00841b&catid=70&Itemid=193
//http://www.qualityinfosolutions.com/conectar-php-con-mysql-a-traves-de-mysqli_connect/

$conexion = mysqli_connect("localhost","root","","UTN"); //Host,User,Password,Namedb
if($conexion != false){
    echo "<b>Conexion ok</b><br>";
}
else{
    echo "<b>Conexion error</b><br>";
}
$consulta = mysqli_query($conexion,"SELECT * FROM proveedores");

if(!empty($consulta)){

}
/*tambien esta $filas = mysqli_fetch_object($consulta) que retorna un obj (stdClass) que tiene como atributos el response de la query hacer var_dump*/
while($row = mysqli_fetch_array($consulta,MYSQLI_ASSOC)){ //recorre fila x fila del response de la query MYSQLI_NUM (RETORNA ASOCIATIVO O INDEXADO)
 var_dump($row);
 echo "<br>";
}

if(mysqli_close($conexion)){ // return true o false
    echo "<b>se cerro conexion</b>";
} 
?>
