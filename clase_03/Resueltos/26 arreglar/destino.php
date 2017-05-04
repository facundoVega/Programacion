<?php
    $filas =$_GET['filas'];
    $columnas = $_GET['columnas'];


echo "<html><head><title>Tabla</title><head>".
"<body><a href='http://localhost/Programacion/clase_03/Resueltos/26/'>Volver</a><br>". 
"<table>".
 for($i=0;$i<count($filas);$i++){
     "<tr>".
     for($i=0;$i<count($columnas);$i++){
        "<td>".$i."</td>";

     }    
     ."</tr>"
 }
"</table>".
"</body>".
"</html>";
 
?>
