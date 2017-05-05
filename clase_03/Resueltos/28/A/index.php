<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 28</title>
</head>
<body>
<form method="POST" action="index.php">

    <label for="lado1">Lado 1</label>
    <input type "text" id="lado1" name="lado1" placeholder="Ingrese valor"><br>
    <label for="lado1">Lado 2</label>
    <input type "text" id="lado2" name="lado2" placeholder="Ingrese valor"><br>

    <input type="radio" name="radio" id="rd1" value="sup">Calcular Superficie<br> 
  
    <input type="radio" name="radio" id="rd2" value="per" >Calcular Perimetro<br>
    <input type = "submit" value= "Enviar">

</form>

</body>
</html>
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