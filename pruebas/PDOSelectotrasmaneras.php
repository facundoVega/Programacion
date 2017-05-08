<?php
try {
        # Para ejecutar la consulta SELECT si no tenemos parámetros en la consulta podremos usar ->query() 
	$stmt = $pdo->query('SELECT name, addr, city from colegas');
	# Indicamos en qué formato queremos obtener los datos de la tabla en formato de array asociativo.
	# Si no indicamos nada por defecto se usará FETCH_BOTH lo que nos permitirá acceder como un array asociativo o array numérico.
	$stmt->setFetchMode(PDO::FETCH_ASSOC);

	# Leemos los datos del recordset con el método ->fetch() 
	while ($row = $stmt->fetch()) {
		echo $row['name'] . "<br/>";
		echo $row['addr'] . "<br/>";
		echo $row['city'] . "<br/>";
	}

	# Para liberar los recursos utilizados en la consulta SELECT
	$stmt = null;
} catch (PDOException $err) {
    // Mostramos un mensaje genérico de error.
	echo "Error: ejecutando consulta SQL.";
}


# -----------------------------------------------------------------------------------------------
# Para ejecutar la consulta SELECT si tenemos parámetros lo haríamos así:

# Preparamos la consulta como siempre
$stmt = $pdo->prepare('SELECT name, addr, city from colegas where city =:ciudad');

try{
	# Indicamos en qué formato queremos obtener los datos de la tabla en formato de array asociativo.
	# Si no indicamos nada por defecto se usará FETCH_BOTH lo que nos permitirá acceder como un array asociativo o array numérico.
	$stmt->execute(array('ciudad'=>'Santiago de Compostela');
	# Leemos los datos del recordset con el método ->fetch() 
	# Por defecto ya los devuelve en forma de array asociativo si no indicamos nada con setFetchMode()

	while ($row = $stmt->fetch()) 
	{
		echo $row['name'] . "<br/>";
		echo $row['addr'] . "<br/>";
		echo $row['city'] . "<br/>";
	}

	# Para liberar los recursos de la consulta SELECT
	$stmt=null;
}
catch(PDOException $err)
	{
		// Mostramos un mensaje genérico de error.
		echo "Error: ejecutando consulta SQL.";
	}
    ?>