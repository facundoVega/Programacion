<?php
define('KB', 1024);
define('MB', 1048576);
define('GB', 1073741824);
define('TB', 1099511627776);

for($i=0;$i<count($_FILES['foto']['name']);$i++){

    if(($_FILES['foto']['type'][$i]!="image/jpeg" && $_FILES['foto']['type'][$i]!= ".jpg") || ($_FILES['foto']['size'][$i]>900*KB)){
        echo "<b>Archivo no valido: </b>".$_FILES['foto']['name'][$i];
        continue;
    }
    
    $destino = "imagenes/".$_FILES['foto']['name'][$i];
    move_uploaded_file($_FILES['foto']['tmp_name'][$i],$destino);
}


?>