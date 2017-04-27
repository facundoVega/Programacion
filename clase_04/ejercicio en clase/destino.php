<?php

//include_once"index.php";

$foto= $_FILES['archivo'];

if(file_exists('img/'.$foto['name'])){

$des = "img2/".$_FILES['archivo']['name'];
//$des = "img2/".;  date() poner de nombre fecha 

}else{

$des = "img/".$_FILES['archivo']['name'];

}
move_uploaded_file($_FILES['archivo']['tmp_name'],$des);
var_dump($foto);
echo "<img src=".$des.">";




?>