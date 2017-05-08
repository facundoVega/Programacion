<?php

$host = "localhost";
$dbname ="UTN";
$username ="root";
$password ="";
 
try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password,array(PDO::ATTR_EMULATE_PREPARES => false,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  $pdo->exec('SET CHARACTER SET utf8');
  echo "<b>Se conecto</b><br>";

  $stmt = $pdo->prepare('DELETE FROM productos WHERE pNumero = :numero');
  $stmt->bindParam(':numero', $mi_numero); 

  $mi_numero = 4;

  $stmt->execute();
   
  echo "Se borraron ".$stmt->rowCount()." filas"; 

} catch(PDOException $e) {

  echo 'Error: ' . $e->getMessage();

}
?>