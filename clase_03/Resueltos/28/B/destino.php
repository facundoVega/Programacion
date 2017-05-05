<?php

if(isset($_POST['lado1']) && isset($_POST['lado2']) && isset($_POST['radio'])){

    var_dump($_POST);
    if($_POST['radio'] == "sup"){
        echo "<b>Superficie :</b>".$_POST['lado1']*$_POST['lado2'];
    }else{
        $a = $_POST['lado1']*2;
        $b = $_POST['lado2']*2;
        echo "<b>Perimetro :</b>".($a+$b);
    }

}


?>