<?php

$resultado = existFileInDir("DD668236A.jpg","fotos");
echo $resultado;

function existFileInDir ($fileName,$pathName){

    $arrayFilesName = scandir($pathName);
    var_dump($arrayFilesName);

    foreach($arrayFilesName as $item){
        if($item == $fileName){
            return true;
        }
    }
return false;
}

?>