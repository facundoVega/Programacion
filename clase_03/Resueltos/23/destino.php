<?php
$origen = $_GET['origen'];
$destino =date('Y_m_d_h_i_s').".txt"; // si no existe el archivo destino lo crea
if(copy($origen,$destino)){
    echo "<b>Se copio correctamente el archivo</b>";
}
else{
    echo "<b>No se copio el archivo</b>";
}
echo "<br>";

$txtLine="";
$archivo = fopen($destino,'r+'); // r+: Lectura y escritura si el archivo existe, no elimina el contenido del archivo, sino lo continua al principio.
while(!feof($archivo)){
    $txtLine .= fgets($archivo);   
    
}
fclose($archivo);


$archivo = fopen($destino,'w+'); // Lectura y escritura aunque el archivo no exista, elimina el contenido del archivo si existe.
fclose($archivo);


$contenidotxt = strrev($txtLine); 
$archivo = fopen($destino,'r+');
fputs($archivo,$contenidotxt);
fclose($archivo);
?>