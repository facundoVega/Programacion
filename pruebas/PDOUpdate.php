<?php
$host="localhost";
$dbname="UTN";
$username="root";
$password="";
 
try {
    
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password,array(PDO::ATTR_EMULATE_PREPARES => false,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  $pdo->exec('SET CHARACTER SET utf8');
  echo "<b>Se conecto</b><br>";
 
  $stmt = $pdo->prepare('UPDATE productos SET pNombre = :nombre WHERE pNumero = :numero');
  $stmt->bindParam(':nombre', $mi_nombre, PDO::PARAM_STR);
  $stmt->bindParam(':numero', $mi_numero, PDO::PARAM_INT);
  
  $mi_nombre = "facturas";
  $mi_numero = 4;

  $stmt->execute();
   
  echo "Se actualizaron ".$stmt->rowCount()." filas"; 

} catch(PDOException $e) {

  echo 'Error: ' . $e->getMessage();

}
?>