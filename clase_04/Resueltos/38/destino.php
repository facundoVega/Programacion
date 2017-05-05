<?php

for($i=0;$i<count($_FILES['foto']['name']);$i++){

    $destino = "imagenes/".$_FILES['foto']['name'][$i];
    move_uploaded_file($_FILES['foto']['tmp_name'][$i],$destino);
}

?>