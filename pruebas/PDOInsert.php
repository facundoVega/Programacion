
<?php
//Ejemplo Insert
try {

    $host = "localhost";
    $dbname="UTN";
    $username="root";
    $password="";

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password,array(PDO::ATTR_EMULATE_PREPARES => false,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $pdo->exec('SET CHARACTER SET utf8');
    echo "<b>Se conecto</b><br>";
 
    $stmt = $pdo->prepare('INSERT INTO productos VALUES(:numero,:nombre,:precio,:tamano)');  // marcadores conocidos
    $stmt->bindParam(':numero', $mi_numero, PDO::PARAM_INT);
    $stmt->bindParam(':nombre', $mi_nombre, PDO::PARAM_STR);
    $stmt->bindParam(':precio', $mi_precio, PDO::PARAM_INT);
    $stmt->bindParam(':tamano', $mi_tamano, PDO::PARAM_STR);
    $mi_numero = 4;
    $mi_nombre = 'Leche';
    $mi_precio = 100.54;
    $mi_tamano = 'Grande';

    $stmt->execute();
     /* otra manera
    $stmt->execute(array(
    ':name' => 'Justin Bieber'
     ));
     */

    # Affected Rows?
     echo "Filas Insertadas:".$stmt->rowCount(); 

} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>