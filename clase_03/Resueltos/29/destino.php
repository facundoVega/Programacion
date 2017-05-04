<?php
$pwd_1 = $_POST['contra'];
$pwd_2 = $_POST['contra2'];

if(strcmp($pwd_1,$pwd_2) == 0){

    header ("Location:welcome.php");

}else{

    header ("Location:index.html");
    
}
?>