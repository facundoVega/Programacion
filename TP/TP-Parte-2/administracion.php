<?php

include_once "Empleado.php";

const KB = 1024;
const MB = 1048576;
const GB = 1073741824;
const TB = 1099511627776;

if(!empty($_POST['nombre'])  &&   !empty($_POST['apellido'])    && !empty($_POST['dni']) &&
   !empty($_POST['sexo'])    &&   !empty($_POST['legajo'])      && !empty($_POST['sueldo'])  ){
    
  $nombre =  $_POST['nombre'];
  $apellido =  $_POST['apellido'];
  $dni =  $_POST['dni'];
  $sexo =  $_POST['sexo'];
  $legajo =  $_POST['legajo'];
  $sueldo =  $_POST['sueldo'];
  
 if(($_FILES['foto']['type'] == "image/jpeg" || $_FILES['foto']['type'] == "image/gif" || 
    $_FILES['foto']['type'] == "image/bmp"  || $_FILES['foto']['type'] == "image/png") &&
    $_FILES['foto']['size'] <= MB &&  existFileInDir($_FILES['foto']['name'],"fotos") == false){

        $empleado = new Empleado($nombre,$apellido,$dni,$sexo,$legajo,$sueldo);

        $destino = "fotos/".$dni."-".$apellido.".".get_extension($_FILES['foto']['name']);
        $empleado->setPathFoto($destino);
        
        move_uploaded_file($_FILES['foto']['tmp_name'],$destino);

          $archivo = fopen("empleados.txt","a");
          fwrite($archivo,$empleado->ToString()."\r\n");
          if(fclose($archivo)){
            echo "<a href='mostrar.php'>Mostrar.php</a>";
          }

    }
 else{
     echo "<a href='index.html'>index.html</a>";
 }

}
else{
    echo "<a href='index.html'>index.html</a>";
}

function existFileInDir ($fileName,$pathName){

    $arrayFilesName = scandir($pathName);

    foreach($arrayFilesName as $item){
        if($item == $fileName){
            return true;
        }
    }
return false;
}

// $extencion = $this->get_extension($_FILES['archivo']['name']);
function get_extension($str) 
{
        return end(explode(".", $str));
}

?>