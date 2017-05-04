<?php
$origen = $_GET['origen'];
$destino =date('Y_m_d_h_i_s').".txt"; // si no existe el archivo destino lo crea
if(copy($origen,$destino)){
    echo "<b>Se copio correctamente el archivo</b>";
}
else{
    echo "<b>No se copio el archivo</b>";
}
?>